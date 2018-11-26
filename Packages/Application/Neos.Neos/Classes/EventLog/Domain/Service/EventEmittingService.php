<?php
namespace Neos\Neos\EventLog\Domain\Service;

/*
 * This file is part of the Neos.Neos package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Neos\Domain\Model\User;
use Neos\Neos\Domain\Service\UserService;
use Neos\Neos\EventLog\Domain\Model\Event;
use Neos\Neos\EventLog\Domain\Repository\EventRepository;
use Neos\Neos\Exception;

/**
 * Main entry point for generating events
 *
 * - TODO: explain Nested events
 *
 * @Flow\Scope("singleton")
 */
class EventEmittingService
{
    /**
     * a reference to the last-generated event
     *
     * @var Event
     */
    protected $lastGeneratedEvent;

    /**
     * This array implements a *stack* of events. The last element of this stack is the current "parent event".
     *
     * If the stack is empty, the events are created top-level.
     *
     * @var array<Event>
     */
    protected $eventContext = array();

    /**
     * @var string
     */
    protected $currentUsername = null;

    /**
     * @Flow\Inject
     * @var EventRepository
     */
    protected $eventRepository;

    /**
     * @Flow\Inject
     * @var UserService
     */
    protected $userDomainService;

    /**
     * @Flow\InjectConfiguration("eventLog.enabled")
     * @var boolean
     */
    protected $enabled;

    /**
     * @return boolean true if the event log is enabled and events should be captured
     */
    public function isEnabled()
    {
        return (boolean)$this->enabled;
    }

    /**
     * Convenience method for generating an event and directly adding it afterwards to persistence.
     *
     * @param string $eventType
     * @param array $data
     * @param string $eventClassName
     * @throws Exception
     * @return Event
     */
    public function emit($eventType, array $data, $eventClassName = Event::class)
    {
        if (!$this->isEnabled()) {
            throw new Exception('Event log not enabled', 1418464933);
        }

        $event = $this->generate($eventType, $data, $eventClassName);
        $this->add($event);

        return $event;
    }

    /**
     * Generates a new event, without persisting it yet.
     *
     * Note: Make sure to call add($event) afterwards.
     *
     * @param string $eventType
     * @param array $data
     * @param string $eventClassName
     * @return Event
     * @see emit()
     */
    public function generate($eventType, array $data, $eventClassName = Event::class)
    {
        $this->initializeCurrentUsername();
        $event = new $eventClassName($eventType, $data, $this->currentUsername, $this->getCurrentContext());
        $this->lastGeneratedEvent = $event;

        return $event;
    }

    /**
     * Add the passed event (which has been generated by generate()) to persistence.
     *
     * This only happens for top-level-events. All events which are attached to some parent event are persisted
     * together with the parent.
     *
     * @param Event $nodeEvent
     * @throws Exception
     * @return void
     * @see emit()
     */
    public function add(Event $nodeEvent)
    {
        if (!$this->isEnabled()) {
            throw new Exception('Event log not enabled', 1418464935);
        }

        if ($nodeEvent->getParentEvent() === null) {
            $this->eventRepository->add($nodeEvent);
        }
    }

    /**
     * Push the last-generated event onto the context, nesting all further generated events underneath the top-level one.
     *
     * @return void
     */
    public function pushContext()
    {
        if ($this->lastGeneratedEvent === null) {
            throw new \InvalidArgumentException('pushContext() can only be called directly after an invocation of emit().', 1415353980);
        }

        $this->eventContext[] = $this->lastGeneratedEvent;
    }

    /**
     * Remove an element from the context stack. Is the reverse operation to pushContext().
     *
     * @return void
     */
    public function popContext()
    {
        if (count($this->eventContext) > 0) {
            array_pop($this->eventContext);
        } else {
            throw new \InvalidArgumentException('popContext() can only be called if the context has been pushed beforehand.', 1415354224);
        }
    }

    /**
     * The current context-event or NULL if none exists currently.
     *
     * @return Event|NULL
     */
    protected function getCurrentContext()
    {
        if (count($this->eventContext) > 0) {
            return end($this->eventContext);
        } else {
            return null;
        }
    }

    /**
     * Try to set the current username emitting the events, if possible
     *
     * @return void
     */
    protected function initializeCurrentUsername()
    {
        if (isset($this->currentUsername)) {
            return;
        }

        $currentUser = $this->userDomainService->getCurrentUser();
        if (!$currentUser instanceof User) {
            return;
        }

        $this->currentUsername = $this->userDomainService->getUsername($currentUser);
    }
}