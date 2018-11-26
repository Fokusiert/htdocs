<?php 
namespace Neos\Flow\Cli;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Cli\Command;
use Neos\Flow\Cli\CommandController;
use Neos\Flow\Core\Bootstrap;
use Neos\Flow\Mvc\Exception\AmbiguousCommandIdentifierException;
use Neos\Flow\Mvc\Exception\CommandException;
use Neos\Flow\Mvc\Exception\NoSuchCommandException;
use Neos\Flow\ObjectManagement\ObjectManagerInterface;
use Neos\Flow\Reflection\ReflectionService;

/**
 * A helper for CLI Commands
 *
 * @Flow\Scope("singleton")
 */
class CommandManager_Original
{
    /**
     * @var array<Command>
     */
    protected $availableCommands = null;

    /**
     * @var array
     */
    protected $shortCommandIdentifiers = null;

    /**
     * @var Bootstrap
     */
    protected $bootstrap;

    /**
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @param ObjectManagerInterface $objectManager
     * @return void
     */
    public function injectObjectManager(ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
     * @param Bootstrap $bootstrap
     * @return void
     */
    public function injectBootstrap(Bootstrap $bootstrap)
    {
        $this->bootstrap = $bootstrap;
    }

    /**
     * Returns an array of all commands
     *
     * @return array<Command>
     * @api
     */
    public function getAvailableCommands(): array
    {
        if ($this->availableCommands === null) {
            $this->availableCommands = [];

            foreach (static::getCommandControllerMethodArguments($this->objectManager) as $className => $methods) {
                foreach (array_keys($methods) as $methodName) {
                    $this->availableCommands[] = new Command($className, substr($methodName, 0, -7));
                }
            }
        }

        return $this->availableCommands;
    }

    /**
     * Returns a Command that matches the given identifier.
     * If no Command could be found a CommandNotFoundException is thrown
     * If more than one Command matches an AmbiguousCommandIdentifierException is thrown that contains the matched Commands
     *
     * @param string $commandIdentifier command identifier in the format foo:bar:baz
     * @return Command
     * @throws NoSuchCommandException if no matching command is available
     * @throws AmbiguousCommandIdentifierException if more than one Command matches the identifier (the exception contains the matched commands)
     * @api
     */
    public function getCommandByIdentifier(string $commandIdentifier): Command
    {
        $commandIdentifier = strtolower(trim($commandIdentifier));
        if ($commandIdentifier === 'help') {
            $commandIdentifier = 'neos.flow:help:help';
        }
        if ($commandIdentifier === 'sys') {
            $commandIdentifier = 'neos.flow:cache:sys';
        }

        $matchedCommands = $this->getCommandsByIdentifier($commandIdentifier);
        if (count($matchedCommands) === 0) {
            throw new NoSuchCommandException('No command could be found that matches the command identifier "' . $commandIdentifier . '".', 1310556663);
        }
        if (count($matchedCommands) > 1) {
            throw new AmbiguousCommandIdentifierException('More than one command matches the command identifier "' . $commandIdentifier . '"', 1310557169, null, $matchedCommands);
        }

        return current($matchedCommands);
    }

    /**
     * Returns an array of Commands that matches the given identifier.
     * If no Command could be found, an empty array is returned
     *
     * @param string $commandIdentifier command identifier in the format foo:bar:baz
     * @return array<Command>
     * @api
     */
    public function getCommandsByIdentifier(string $commandIdentifier): array
    {
        $availableCommands = $this->getAvailableCommands();
        $matchedCommands = [];
        foreach ($availableCommands as $command) {
            if ($this->commandMatchesIdentifier($command, $commandIdentifier)) {
                $matchedCommands[] = $command;
            }
        }

        return $matchedCommands;
    }

    /**
     * Returns the shortest, non-ambiguous command identifier for the given command
     *
     * @param Command $command The command
     * @return string The shortest possible command identifier
     * @api
     */
    public function getShortestIdentifierForCommand(Command $command): string
    {
        if ($command->getCommandIdentifier() === 'neos.flow:help:help') {
            return 'help';
        }
        $shortCommandIdentifiers = $this->getShortCommandIdentifiers();
        if (!isset($shortCommandIdentifiers[$command->getCommandIdentifier()])) {
            return $command->getCommandIdentifier();
        }

        return $shortCommandIdentifiers[$command->getCommandIdentifier()];
    }

    /**
     * Returns an array that contains all available command identifiers and their shortest non-ambiguous alias
     *
     * @return array in the format array('full.command:identifier1' => 'alias1', 'full.command:identifier2' => 'alias2')
     */
    protected function getShortCommandIdentifiers(): array
    {
        if ($this->shortCommandIdentifiers === null) {
            $this->shortCommandIdentifiers = [];
            $commandsByCommandName = [];
            /** @var Command $availableCommand */
            foreach ($this->getAvailableCommands() as $availableCommand) {
                list($packageKey, $controllerName, $commandName) = explode(':', $availableCommand->getCommandIdentifier());
                if (!isset($commandsByCommandName[$commandName])) {
                    $commandsByCommandName[$commandName] = [];
                }
                if (!isset($commandsByCommandName[$commandName][$controllerName])) {
                    $commandsByCommandName[$commandName][$controllerName] = [];
                }
                $commandsByCommandName[$commandName][$controllerName][] = $packageKey;
            }
            foreach ($this->getAvailableCommands() as $availableCommand) {
                list($packageKey, $controllerName, $commandName) = explode(':', $availableCommand->getCommandIdentifier());
                if (count($commandsByCommandName[$commandName][$controllerName]) > 1 || $this->bootstrap->isCompiletimeCommand($availableCommand->getCommandIdentifier())) {
                    $packageKeyParts = array_reverse(explode('.', $packageKey));
                    for ($i = 1; $i <= count($packageKeyParts); $i++) {
                        $shortCommandIdentifier = implode('.', array_slice($packageKeyParts, 0, $i)) . ':' . $controllerName . ':' . $commandName;
                        try {
                            $this->getCommandByIdentifier($shortCommandIdentifier);
                            $this->shortCommandIdentifiers[$availableCommand->getCommandIdentifier()] = $shortCommandIdentifier;
                            break;
                        } catch (CommandException $exception) {
                        }
                    }
                } else {
                    $this->shortCommandIdentifiers[$availableCommand->getCommandIdentifier()] = sprintf('%s:%s', $controllerName, $commandName);
                }
            }
        }

        return $this->shortCommandIdentifiers;
    }

    /**
     * Returns true if the specified command identifier matches the identifier of the specified command.
     * This is the case, if
     *  - the identifiers are the same
     *  - if at least the last two command parts match (case sensitive) or
     *  - if only the package key is specified and matches the commands package key
     * The first part (package key) can be reduced to the last subpackage, as long as the result is unambiguous.
     *
     * @param Command $command
     * @param string $commandIdentifier command identifier in the format foo:bar:baz (all lower case)
     * @return boolean true if the specified command identifier matches this commands identifier
     */
    protected function commandMatchesIdentifier(Command $command, string $commandIdentifier): bool
    {
        $commandIdentifierParts = explode(':', $command->getCommandIdentifier());
        $searchedCommandIdentifierParts = explode(':', $commandIdentifier);
        $packageKey = array_shift($commandIdentifierParts);
        $searchedCommandIdentifierPartsCount = count($searchedCommandIdentifierParts);
        if ($searchedCommandIdentifierPartsCount === 3 || $searchedCommandIdentifierPartsCount === 1) {
            $searchedPackageKey = array_shift($searchedCommandIdentifierParts);
            if ($searchedPackageKey !== $packageKey
                && substr($packageKey, -(strlen($searchedPackageKey) + 1)) !== '.' . $searchedPackageKey
            ) {
                return false;
            }
        }
        if ($searchedCommandIdentifierPartsCount === 1) {
            return true;
        } elseif (count($searchedCommandIdentifierParts) !== 2) {
            return false;
        }

        return $searchedCommandIdentifierParts === $commandIdentifierParts;
    }

    /**
     * Get the possible parameters for the command specified by CommandController and method name.
     *
     * @param string $controllerObjectName
     * @param string $commandMethodName
     * @return array
     */
    public function getCommandMethodParameters(string $controllerObjectName, string $commandMethodName): array
    {
        $commandControllerMethodArgumentMap = static::getCommandControllerMethodArguments($this->objectManager);

        return isset($commandControllerMethodArgumentMap[$controllerObjectName][$commandMethodName]) ? $commandControllerMethodArgumentMap[$controllerObjectName][$commandMethodName] : [];
    }

    /**
     * @param ObjectManagerInterface $objectManager
     * @return array Array of method arguments per controller and method.
     * @Flow\CompileStatic
     */
    public static function getCommandControllerMethodArguments(ObjectManagerInterface $objectManager): array
    {
        /** @var ReflectionService $reflectionService */
        $reflectionService = $objectManager->get(ReflectionService::class);

        $commandControllerMethodArgumentMap = [];
        foreach ($reflectionService->getAllSubClassNamesForClass(CommandController::class) as $className) {
            if (!class_exists($className) || $reflectionService->isClassAbstract($className)) {
                continue;
            }
            $controllerObjectName = $objectManager->getObjectNameByClassName($className);
            $commandControllerMethodArgumentMap[$controllerObjectName] = [];
            foreach (get_class_methods($className) as $methodName) {
                if (substr($methodName, -7, 7) === 'Command') {
                    $commandControllerMethodArgumentMap[$className][$methodName] = $reflectionService->getMethodParameters($controllerObjectName, $methodName);
                }
            }
        }

        return $commandControllerMethodArgumentMap;
    }
}

#
# Start of Flow generated Proxy code
#
namespace Neos\Flow\Cli;

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * A helper for CLI Commands
 * @\Neos\Flow\Annotations\Scope("singleton")
 */
class CommandManager extends CommandManager_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Flow\Cli\CommandManager') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Cli\CommandManager', $this);
        if ('Neos\Flow\Cli\CommandManager' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __sleep()
    {
            $result = NULL;
        $this->Flow_Object_PropertiesToSerialize = array();

        $transientProperties = array (
);
        $propertyVarTags = array (
  'availableCommands' => 'array<Neos\\Flow\\Cli\\Command>',
  'shortCommandIdentifiers' => 'array',
  'bootstrap' => 'Neos\\Flow\\Core\\Bootstrap',
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\Cli\CommandManager') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Cli\CommandManager', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->injectObjectManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'));
        $this->injectBootstrap(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Core\Bootstrap'));
        $this->Flow_Injected_Properties = array (
  0 => 'objectManager',
  1 => 'bootstrap',
);
    }

    /**
     * Autogenerated Proxy Method
     * @param ObjectManagerInterface $objectManager
     * @return array Array of method arguments per controller and method.
     * @\Neos\Flow\Annotations\CompileStatic
     */
    static public function getCommandControllerMethodArguments(\Neos\Flow\ObjectManagement\ObjectManagerInterface $objectManager) : array
    {

return array (
  'Neos\\ContentRepository\\Command\\NodeCommandController' => 
  array (
    'repairCommand' => 
    array (
      'nodeType' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'workspace' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => 'live',
        'scalarDeclaration' => false,
      ),
      'dryRun' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'boolean',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => false,
        'scalarDeclaration' => false,
      ),
      'cleanup' => 
      array (
        'position' => 3,
        'optional' => true,
        'type' => 'boolean',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => true,
        'scalarDeclaration' => false,
      ),
      'skip' => 
      array (
        'position' => 4,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'only' => 
      array (
        'position' => 5,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
  ),
  'Neos\\ContentRepository\\Migration\\Command\\NodeCommandController' => 
  array (
    'migrateCommand' => 
    array (
      'version' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'confirmation' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'boolean',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => false,
        'scalarDeclaration' => false,
      ),
      'direction' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => 'up',
        'scalarDeclaration' => false,
      ),
    ),
    'migrationStatusCommand' => 
    array (
    ),
  ),
  'Neos\\Flow\\Command\\CacheCommandController' => 
  array (
    'flushCommand' => 
    array (
      'force' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'bool',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => false,
        'scalarDeclaration' => true,
      ),
    ),
    'flushOneCommand' => 
    array (
      'identifier' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
    ),
    'warmupCommand' => 
    array (
    ),
    'sysCommand' => 
    array (
      'address' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'int',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
    ),
  ),
  'Neos\\Flow\\Command\\ConfigurationCommandController' => 
  array (
    'showCommand' => 
    array (
      'type' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => 'Settings',
        'scalarDeclaration' => true,
      ),
      'path' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
    ),
    'listTypesCommand' => 
    array (
    ),
    'validateCommand' => 
    array (
      'type' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
      'path' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
      'verbose' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'bool',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => false,
        'scalarDeclaration' => true,
      ),
    ),
    'generateSchemaCommand' => 
    array (
      'type' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
      'path' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
      'yaml' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
    ),
  ),
  'Neos\\Flow\\Command\\CoreCommandController' => 
  array (
    'compileCommand' => 
    array (
      'force' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'bool',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => false,
        'scalarDeclaration' => true,
      ),
    ),
    'setFilePermissionsCommand' => 
    array (
      'commandlineUser' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
      'webserverUser' => 
      array (
        'position' => 1,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
      'webserverGroup' => 
      array (
        'position' => 2,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
    ),
    'migrateCommand' => 
    array (
      'package' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
      'status' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'bool',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => false,
        'scalarDeclaration' => true,
      ),
      'packagesPath' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
      'version' => 
      array (
        'position' => 3,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
      'verbose' => 
      array (
        'position' => 4,
        'optional' => true,
        'type' => 'bool',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => false,
        'scalarDeclaration' => true,
      ),
      'force' => 
      array (
        'position' => 5,
        'optional' => true,
        'type' => 'bool',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => false,
        'scalarDeclaration' => true,
      ),
    ),
    'shellCommand' => 
    array (
    ),
  ),
  'Neos\\Flow\\Command\\DatabaseCommandController' => 
  array (
    'setCharsetCommand' => 
    array (
      'characterSet' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => 'utf8mb4',
        'scalarDeclaration' => true,
      ),
      'collation' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => 'utf8mb4_unicode_ci',
        'scalarDeclaration' => true,
      ),
      'output' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
      'verbose' => 
      array (
        'position' => 3,
        'optional' => true,
        'type' => 'bool',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => false,
        'scalarDeclaration' => true,
      ),
    ),
  ),
  'Neos\\Flow\\Command\\DoctrineCommandController' => 
  array (
    'compileProxiesCommand' => 
    array (
    ),
    'validateCommand' => 
    array (
    ),
    'createCommand' => 
    array (
      'output' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
    ),
    'updateCommand' => 
    array (
      'unsafeMode' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'bool',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => false,
        'scalarDeclaration' => true,
      ),
      'output' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
    ),
    'entityStatusCommand' => 
    array (
      'dumpMappingData' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'bool',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => false,
        'scalarDeclaration' => true,
      ),
      'entityClassName' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
    ),
    'dqlCommand' => 
    array (
      'depth' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'int',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => 3,
        'scalarDeclaration' => true,
      ),
      'hydrationMode' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => 'array',
        'scalarDeclaration' => true,
      ),
      'offset' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'int',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
      'limit' => 
      array (
        'position' => 3,
        'optional' => true,
        'type' => 'int',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
    ),
    'migrationStatusCommand' => 
    array (
      'showMigrations' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'bool',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => false,
        'scalarDeclaration' => true,
      ),
      'showDescriptions' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'bool',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => false,
        'scalarDeclaration' => true,
      ),
    ),
    'migrateCommand' => 
    array (
      'version' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
      'output' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
      'dryRun' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'bool',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => false,
        'scalarDeclaration' => true,
      ),
      'quiet' => 
      array (
        'position' => 3,
        'optional' => true,
        'type' => 'bool',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => false,
        'scalarDeclaration' => true,
      ),
    ),
    'migrationExecuteCommand' => 
    array (
      'version' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
      'direction' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => 'up',
        'scalarDeclaration' => true,
      ),
      'output' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
      'dryRun' => 
      array (
        'position' => 3,
        'optional' => true,
        'type' => 'bool',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => false,
        'scalarDeclaration' => true,
      ),
    ),
    'migrationVersionCommand' => 
    array (
      'version' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
      'add' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'bool',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => false,
        'scalarDeclaration' => true,
      ),
      'delete' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'bool',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => false,
        'scalarDeclaration' => true,
      ),
    ),
    'migrationGenerateCommand' => 
    array (
      'diffAgainstCurrent' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'bool',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => true,
        'scalarDeclaration' => true,
      ),
      'filterExpression' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
      'force' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'bool',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => false,
        'scalarDeclaration' => true,
      ),
    ),
  ),
  'Neos\\Flow\\Command\\HelpCommandController' => 
  array (
    'helpStubCommand' => 
    array (
    ),
    'helpCommand' => 
    array (
      'commandIdentifier' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
    ),
    'errorCommand' => 
    array (
      'exception' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'Neos\\Flow\\Mvc\\Exception\\CommandException',
        'class' => 'Neos\\Flow\\Mvc\\Exception\\CommandException',
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
  ),
  'Neos\\Flow\\Command\\PackageCommandController' => 
  array (
    'createCommand' => 
    array (
      'packageKey' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
      'packageType' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => 'neos-package',
        'scalarDeclaration' => true,
      ),
    ),
    'listCommand' => 
    array (
      'loadingOrder' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'bool',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => false,
        'scalarDeclaration' => true,
      ),
    ),
    'freezeCommand' => 
    array (
      'packageKey' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => 'all',
        'scalarDeclaration' => true,
      ),
    ),
    'unfreezeCommand' => 
    array (
      'packageKey' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => 'all',
        'scalarDeclaration' => true,
      ),
    ),
    'refreezeCommand' => 
    array (
      'packageKey' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => 'all',
        'scalarDeclaration' => true,
      ),
    ),
    'rescanCommand' => 
    array (
    ),
  ),
  'Neos\\Flow\\Command\\ResourceCommandController' => 
  array (
    'publishCommand' => 
    array (
      'collection' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
    ),
    'copyCommand' => 
    array (
      'sourceCollection' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
      'targetCollection' => 
      array (
        'position' => 1,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
      'publish' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'bool',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => false,
        'scalarDeclaration' => true,
      ),
    ),
    'cleanCommand' => 
    array (
    ),
  ),
  'Neos\\Flow\\Command\\RoutingCommandController' => 
  array (
    'listCommand' => 
    array (
    ),
    'showCommand' => 
    array (
      'index' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'int',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
    ),
    'getPathCommand' => 
    array (
      'package' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
      'controller' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => 'Standard',
        'scalarDeclaration' => true,
      ),
      'action' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => 'index',
        'scalarDeclaration' => true,
      ),
      'format' => 
      array (
        'position' => 3,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => 'html',
        'scalarDeclaration' => true,
      ),
    ),
    'routePathCommand' => 
    array (
      'path' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
      'method' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => 'GET',
        'scalarDeclaration' => true,
      ),
    ),
  ),
  'Neos\\Flow\\Command\\SchemaCommandController' => 
  array (
    'validateCommand' => 
    array (
      'configurationFile' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
      'schemaFile' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => 'resource://Neos.Flow/Private/Schema/Schema.schema.yaml',
        'scalarDeclaration' => true,
      ),
      'verbose' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'bool',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => false,
        'scalarDeclaration' => true,
      ),
    ),
    'validateSchemaCommand' => 
    array (
      'configurationFile' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
      'schemaFile' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => 'resource://Neos.Flow/Private/Schema/Schema.schema.yaml',
        'scalarDeclaration' => true,
      ),
      'verbose' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'bool',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => false,
        'scalarDeclaration' => true,
      ),
    ),
  ),
  'Neos\\Flow\\Command\\SecurityCommandController' => 
  array (
    'importPublicKeyCommand' => 
    array (
    ),
    'generateKeyPairCommand' => 
    array (
      'usedForPasswords' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'bool',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => false,
        'scalarDeclaration' => true,
      ),
    ),
    'importPrivateKeyCommand' => 
    array (
      'usedForPasswords' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'bool',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => false,
        'scalarDeclaration' => true,
      ),
    ),
    'showEffectivePolicyCommand' => 
    array (
      'privilegeType' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
      'roles' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => '',
        'scalarDeclaration' => true,
      ),
    ),
    'showUnprotectedActionsCommand' => 
    array (
    ),
    'showMethodsForPrivilegeTargetCommand' => 
    array (
      'privilegeTarget' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
    ),
  ),
  'Neos\\Flow\\Command\\ServerCommandController' => 
  array (
    'runCommand' => 
    array (
      'host' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => '127.0.0.1',
        'scalarDeclaration' => true,
      ),
      'port' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'int',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => 8081,
        'scalarDeclaration' => true,
      ),
    ),
  ),
  'Neos\\Flow\\Command\\TypeConverterCommandController' => 
  array (
    'listCommand' => 
    array (
      'source' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
      'target' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => true,
      ),
    ),
  ),
  'Neos\\FluidAdaptor\\Command\\DocumentationCommandController' => 
  array (
    'generateXsdCommand' => 
    array (
      'phpNamespace' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'xsdNamespace' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'targetFile' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
  ),
  'Neos\\Kickstarter\\Command\\KickstartCommandController' => 
  array (
    'packageCommand' => 
    array (
      'packageKey' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'packageType' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => 'neos-package',
        'scalarDeclaration' => false,
      ),
    ),
    'actionControllerCommand' => 
    array (
      'packageKey' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'controllerName' => 
      array (
        'position' => 1,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'generateActions' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'boolean',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => false,
        'scalarDeclaration' => false,
      ),
      'generateTemplates' => 
      array (
        'position' => 3,
        'optional' => true,
        'type' => 'boolean',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => true,
        'scalarDeclaration' => false,
      ),
      'generateRelated' => 
      array (
        'position' => 4,
        'optional' => true,
        'type' => 'boolean',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => false,
        'scalarDeclaration' => false,
      ),
      'force' => 
      array (
        'position' => 5,
        'optional' => true,
        'type' => 'boolean',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => false,
        'scalarDeclaration' => false,
      ),
    ),
    'commandControllerCommand' => 
    array (
      'packageKey' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'controllerName' => 
      array (
        'position' => 1,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'force' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'boolean',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => false,
        'scalarDeclaration' => false,
      ),
    ),
    'modelCommand' => 
    array (
      'packageKey' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'modelName' => 
      array (
        'position' => 1,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'force' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'boolean',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => false,
        'scalarDeclaration' => false,
      ),
    ),
    'repositoryCommand' => 
    array (
      'packageKey' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'modelName' => 
      array (
        'position' => 1,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'force' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'boolean',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => false,
        'scalarDeclaration' => false,
      ),
    ),
    'documentationCommand' => 
    array (
      'packageKey' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
    'translationCommand' => 
    array (
      'packageKey' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'sourceLanguageKey' => 
      array (
        'position' => 1,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'targetLanguageKeys' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'array',
        'class' => NULL,
        'array' => true,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => 
        array (
        ),
        'scalarDeclaration' => false,
      ),
    ),
  ),
  'Neos\\Media\\Command\\MediaCommandController' => 
  array (
    'importResourcesCommand' => 
    array (
      'simulate' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'boolean',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => false,
        'scalarDeclaration' => false,
      ),
    ),
    'removeUnusedCommand' => 
    array (
      'assetSource' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => '',
        'scalarDeclaration' => true,
      ),
      'quiet' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'bool',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => false,
        'scalarDeclaration' => true,
      ),
      'assumeYes' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'bool',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => false,
        'scalarDeclaration' => true,
      ),
      'onlyTags' => 
      array (
        'position' => 3,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => '',
        'scalarDeclaration' => true,
      ),
      'limit' => 
      array (
        'position' => 4,
        'optional' => true,
        'type' => 'int',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => false,
        'defaultValue' => 0,
        'scalarDeclaration' => true,
      ),
    ),
    'createThumbnailsCommand' => 
    array (
      'preset' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'async' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'boolean',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
    'clearThumbnailsCommand' => 
    array (
      'preset' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
    'renderThumbnailsCommand' => 
    array (
      'limit' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'integer',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
  ),
  'Neos\\Neos\\Command\\DomainCommandController' => 
  array (
    'addCommand' => 
    array (
      'siteNodeName' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'hostname' => 
      array (
        'position' => 1,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'scheme' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'port' => 
      array (
        'position' => 3,
        'optional' => true,
        'type' => 'integer',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
    'listCommand' => 
    array (
      'hostname' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
    'deleteCommand' => 
    array (
      'hostname' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
    'activateCommand' => 
    array (
      'hostname' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
    'deactivateCommand' => 
    array (
      'hostname' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
  ),
  'Neos\\Neos\\Command\\SiteCommandController' => 
  array (
    'createCommand' => 
    array (
      'name' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'packageKey' => 
      array (
        'position' => 1,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'nodeType' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => 'Neos.NodeTypes:Page',
        'scalarDeclaration' => false,
      ),
      'nodeName' => 
      array (
        'position' => 3,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'inactive' => 
      array (
        'position' => 4,
        'optional' => true,
        'type' => 'boolean',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => false,
        'scalarDeclaration' => false,
      ),
    ),
    'importCommand' => 
    array (
      'packageKey' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'filename' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
    'exportCommand' => 
    array (
      'siteNode' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'tidy' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'boolean',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => true,
        'scalarDeclaration' => false,
      ),
      'filename' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'packageKey' => 
      array (
        'position' => 3,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'nodeTypeFilter' => 
      array (
        'position' => 4,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
    'pruneCommand' => 
    array (
      'siteNode' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
    'listCommand' => 
    array (
    ),
    'activateCommand' => 
    array (
      'siteNode' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
    'deactivateCommand' => 
    array (
      'siteNode' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
  ),
  'Neos\\Neos\\Command\\UserCommandController' => 
  array (
    'listCommand' => 
    array (
    ),
    'showCommand' => 
    array (
      'username' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'authenticationProvider' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
    'createCommand' => 
    array (
      'username' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'password' => 
      array (
        'position' => 1,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'firstName' => 
      array (
        'position' => 2,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'lastName' => 
      array (
        'position' => 3,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'roles' => 
      array (
        'position' => 4,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'authenticationProvider' => 
      array (
        'position' => 5,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
    'deleteCommand' => 
    array (
      'username' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'assumeYes' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'boolean',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => false,
        'scalarDeclaration' => false,
      ),
      'authenticationProvider' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
    'activateCommand' => 
    array (
      'username' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'authenticationProvider' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
    'deactivateCommand' => 
    array (
      'username' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'authenticationProvider' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
    'setPasswordCommand' => 
    array (
      'username' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'password' => 
      array (
        'position' => 1,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'authenticationProvider' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
    'addRoleCommand' => 
    array (
      'username' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'role' => 
      array (
        'position' => 1,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'authenticationProvider' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
    'removeRoleCommand' => 
    array (
      'username' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'role' => 
      array (
        'position' => 1,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'authenticationProvider' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
  ),
  'Neos\\Neos\\Command\\WorkspaceCommandController' => 
  array (
    'publishCommand' => 
    array (
      'workspace' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'targetWorkspace' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'verbose' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'boolean',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => false,
        'scalarDeclaration' => false,
      ),
      'dryRun' => 
      array (
        'position' => 3,
        'optional' => true,
        'type' => 'boolean',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => false,
        'scalarDeclaration' => false,
      ),
    ),
    'discardCommand' => 
    array (
      'workspace' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'verbose' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'boolean',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => false,
        'scalarDeclaration' => false,
      ),
      'dryRun' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'boolean',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => false,
        'scalarDeclaration' => false,
      ),
    ),
    'createCommand' => 
    array (
      'workspace' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'baseWorkspace' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => 'live',
        'scalarDeclaration' => false,
      ),
      'title' => 
      array (
        'position' => 2,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'description' => 
      array (
        'position' => 3,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'owner' => 
      array (
        'position' => 4,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => '',
        'scalarDeclaration' => false,
      ),
    ),
    'deleteCommand' => 
    array (
      'workspace' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'force' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'boolean',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => false,
        'scalarDeclaration' => false,
      ),
    ),
    'rebaseCommand' => 
    array (
      'workspace' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'baseWorkspace' => 
      array (
        'position' => 1,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
    'publishAllCommand' => 
    array (
      'workspaceName' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'verbose' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'boolean',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => false,
        'scalarDeclaration' => false,
      ),
    ),
    'discardAllCommand' => 
    array (
      'workspaceName' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'verbose' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'boolean',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => false,
        'scalarDeclaration' => false,
      ),
    ),
    'listCommand' => 
    array (
    ),
  ),
  'Neos\\RedirectHandler\\Command\\RedirectCommandController' => 
  array (
    'listCommand' => 
    array (
      'host' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'match' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
    'exportCommand' => 
    array (
      'filename' => 
      array (
        'position' => 0,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'host' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
    'importCommand' => 
    array (
      'filename' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
    'removeCommand' => 
    array (
      'source' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'host' => 
      array (
        'position' => 1,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
    'removeAllCommand' => 
    array (
    ),
    'removeByHostCommand' => 
    array (
      'host' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
    'addCommand' => 
    array (
      'source' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'target' => 
      array (
        'position' => 1,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'statusCode' => 
      array (
        'position' => 2,
        'optional' => false,
        'type' => 'integer',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'host' => 
      array (
        'position' => 3,
        'optional' => true,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'force' => 
      array (
        'position' => 4,
        'optional' => true,
        'type' => 'boolean',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => false,
        'scalarDeclaration' => false,
      ),
    ),
  ),
  'Neos\\SiteKickstarter\\Command\\KickstartCommandController' => 
  array (
    'siteCommand' => 
    array (
      'packageKey' => 
      array (
        'position' => 0,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
      'siteName' => 
      array (
        'position' => 1,
        'optional' => false,
        'type' => 'string',
        'class' => NULL,
        'array' => false,
        'byReference' => false,
        'allowsNull' => true,
        'defaultValue' => NULL,
        'scalarDeclaration' => false,
      ),
    ),
  ),
);
    }
}
# PathAndFilename: C:\Bitnami\neos-4.1.7-neu\apps\neos\htdocs\Packages\Framework\Neos.Flow\Classes\Cli\CommandManager.php
#