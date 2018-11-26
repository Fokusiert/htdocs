<?php 
class Module_Administration_Configuration_action_index_ec037645e05328ea584dd9dc2fb568c95f510f10 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'BackendSubModule';
}
public function hasLayout() {
return TRUE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'Neos\\FluidAdaptor\\ViewHelpers',
  ),
  'neos.diff' => 
  array (
    0 => 'Neos\\Diff\\ViewHelpers',
  ),
  'psr.simplecache' => 
  array (
    0 => 'Psr\\SimpleCache\\ViewHelpers',
  ),
  'psr.cache' => 
  array (
    0 => 'Psr\\Cache\\ViewHelpers',
  ),
  'neos.errormessages' => 
  array (
    0 => 'Neos\\Error\\Messages\\ViewHelpers',
  ),
  'neos.utility.files' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'neos.utility.pdo' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'neos.utility.opcodecache' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'neos.cache' => 
  array (
    0 => 'Neos\\Cache\\ViewHelpers',
  ),
  'neos.utilityunicode' => 
  array (
    0 => 'Neos\\Utility\\Unicode\\ViewHelpers',
  ),
  'neos.utility.objecthandling' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'neos.utility.arrays' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'neos.utility.mediatypes' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'neos.utility.schema' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'typo3fluid.fluid' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
  ),
  'psr.log' => 
  array (
    0 => 'Psr\\Log\\ViewHelpers',
  ),
  'neos.flow.log' => 
  array (
    0 => 'Neos\\Flow\\Log\\ViewHelpers',
  ),
  'psr.httpmessage' => 
  array (
    0 => 'Psr\\Http\\Message\\ViewHelpers',
  ),
  'psr.container' => 
  array (
    0 => 'Psr\\Container\\ViewHelpers',
  ),
  'symfony.polyfillctype' => 
  array (
    0 => 'Symfony\\Polyfill\\Ctype\\ViewHelpers',
  ),
  'ramsey.uuid' => 
  array (
    0 => 'Ramsey\\Uuid\\ViewHelpers',
  ),
  'doctrine.common.lexer' => 
  array (
    0 => 'Doctrine\\Common\\Lexer\\ViewHelpers',
  ),
  'doctrine.annotations' => 
  array (
    0 => 'Doctrine\\Common\\Annotations\\ViewHelpers',
  ),
  'doctrine.cache' => 
  array (
    0 => 'Doctrine\\Common\\Cache\\ViewHelpers',
  ),
  'doctrine.common.collections' => 
  array (
    0 => 'Doctrine\\Common\\Collections\\ViewHelpers',
  ),
  'doctrine.inflector' => 
  array (
    0 => 'Doctrine\\Common\\Inflector\\ViewHelpers',
  ),
  'doctrine.common' => 
  array (
    0 => 'Doctrine\\Common\\ViewHelpers',
  ),
  'doctrine.dbal' => 
  array (
    0 => 'Doctrine\\DBAL\\ViewHelpers',
  ),
  'doctrine.instantiator' => 
  array (
    0 => 'Doctrine\\Instantiator\\ViewHelpers',
  ),
  'symfony.polyfillmbstring' => 
  array (
    0 => 'Symfony\\Polyfill\\Mbstring\\ViewHelpers',
  ),
  'symfony.console' => 
  array (
    0 => 'Symfony\\Component\\Console\\ViewHelpers',
  ),
  'doctrine.orm' => 
  array (
    0 => 'Doctrine\\ORM\\ViewHelpers',
  ),
  'symfony.yaml' => 
  array (
    0 => 'Symfony\\Component\\Yaml\\ViewHelpers',
  ),
  'zendframework.zendeventmanager' => 
  array (
    0 => 'Zend\\EventManager\\ViewHelpers',
  ),
  'zendframework.zendcode' => 
  array (
    0 => 'Zend\\Code\\ViewHelpers',
  ),
  'ocramius.packageversions' => 
  array (
    0 => 'PackageVersions\\ViewHelpers',
  ),
  'ocramius.proxymanager' => 
  array (
    0 => 'ProxyManager\\ViewHelpers',
  ),
  'doctrine.migrations' => 
  array (
    0 => 'Doctrine\\DBAL\\Migrations\\ViewHelpers',
  ),
  'symfony.domcrawler' => 
  array (
    0 => 'Symfony\\Component\\DomCrawler\\ViewHelpers',
  ),
  'neos.composerplugin' => 
  array (
    0 => 'Neos\\ComposerPlugin\\ViewHelpers',
  ),
  'imagine.imagine' => 
  array (
    0 => 'Imagine\\ViewHelpers',
  ),
  'behat.transliterator' => 
  array (
    0 => 'Behat\\Transliterator\\ViewHelpers',
  ),
  'gedmo.doctrineextensions' => 
  array (
    0 => 'Gedmo\\ViewHelpers',
  ),
  'neos.eel' => 
  array (
    0 => 'Neos\\Eel\\ViewHelpers',
  ),
  'neos.utilitylock' => 
  array (
    0 => 'Neos\\Utility\\Lock\\ViewHelpers',
  ),
  'neos.flow' => 
  array (
    0 => 'Neos\\Flow\\ViewHelpers',
    1 => 'Neos\\Flow\\Core\\Migrations\\ViewHelpers',
  ),
  'neos.fluidadaptor' => 
  array (
    0 => 'Neos\\FluidAdaptor\\ViewHelpers',
  ),
  'neos.imagine' => 
  array (
    0 => 'Neos\\Imagine\\ViewHelpers',
  ),
  'neos.media' => 
  array (
    0 => 'Neos\\Media\\ViewHelpers',
  ),
  'neos.form' => 
  array (
    0 => 'Neos\\Form\\ViewHelpers',
  ),
  'neos.contentrepository' => 
  array (
    0 => 'Neos\\ContentRepository\\ViewHelpers',
  ),
  'neos.party' => 
  array (
    0 => 'Neos\\Party\\ViewHelpers',
  ),
  'neos.twitter.bootstrap' => 
  array (
    0 => 'Neos\\Twitter\\Bootstrap\\ViewHelpers',
  ),
  'neos.setup' => 
  array (
    0 => 'Neos\\Setup\\ViewHelpers',
  ),
  'neos.fusion' => 
  array (
    0 => 'Neos\\Fusion\\ViewHelpers',
  ),
  'neos.media.browser' => 
  array (
    0 => 'Neos\\Media\\Browser\\ViewHelpers',
  ),
  'neos.neos' => 
  array (
    0 => 'Neos\\Neos\\ViewHelpers',
  ),
  'neos.seo' => 
  array (
    0 => 'Neos\\Seo\\ViewHelpers',
  ),
  'flowpack.neos.frontendlogin' => 
  array (
    0 => 'Flowpack\\Neos\\FrontendLogin\\ViewHelpers',
  ),
  'neos.kickstarter' => 
  array (
    0 => 'Neos\\Kickstarter\\ViewHelpers',
  ),
  'neos.nodetypes.basemixins' => 
  array (
    0 => 'Neos\\NodeTypes\\BaseMixins\\ViewHelpers',
  ),
  'neos.nodetypes.form' => 
  array (
    0 => 'Neos\\NodeTypes\\Form\\ViewHelpers',
  ),
  'neos.nodetypes.assetlist' => 
  array (
    0 => 'Neos\\NodeTypes\\AssetList\\ViewHelpers',
  ),
  'neos.nodetypes.columnlayouts' => 
  array (
    0 => 'Neos\\NodeTypes\\ColumnLayouts\\ViewHelpers',
  ),
  'neos.nodetypes.contentreferences' => 
  array (
    0 => 'Neos\\NodeTypes\\ContentReferences\\ViewHelpers',
  ),
  'neos.nodetypes.html' => 
  array (
    0 => 'Neos\\NodeTypes\\Html\\ViewHelpers',
  ),
  'neos.nodetypes.navigation' => 
  array (
    0 => 'Neos\\NodeTypes\\Navigation\\ViewHelpers',
  ),
  'neos.nodetypes' => 
  array (
    0 => 'Neos\\NodeTypes\\ViewHelpers',
  ),
  'neos.demo' => 
  array (
    0 => 'Neos\\Demo\\ViewHelpers',
  ),
  'fokussiert.demo' => 
  array (
    0 => 'Fokussiert\\Demo\\ViewHelpers',
  ),
  'neos.neos.ui.compiled' => 
  array (
    0 => 'Neos\\Neos\\Ui\\Compiled\\ViewHelpers',
  ),
  'neos.neos.ui' => 
  array (
    0 => 'Neos\\Neos\\Ui\\ViewHelpers',
  ),
  'neos.redirecthandler' => 
  array (
    0 => 'Neos\\RedirectHandler\\ViewHelpers',
  ),
  'neos.redirecthandler.databasestorage' => 
  array (
    0 => 'Neos\\RedirectHandler\\DatabaseStorage\\ViewHelpers',
  ),
  'neos.redirecthandler.neosadapter' => 
  array (
    0 => 'Neos\\RedirectHandler\\NeosAdapter\\ViewHelpers',
  ),
  'neos.sitekickstarter' => 
  array (
    0 => 'Neos\\SiteKickstarter\\ViewHelpers',
  ),
  'neos' => 
  array (
    0 => 'Neos\\Neos\\ViewHelpers',
  ),
));
}

/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
		';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$array16 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('availableConfigurationType', $array16)]);
};
$arguments5 = array();
$arguments5['additionalAttributes'] = NULL;
$arguments5['data'] = NULL;
$arguments5['class'] = NULL;
$arguments5['dir'] = NULL;
$arguments5['id'] = NULL;
$arguments5['lang'] = NULL;
$arguments5['style'] = NULL;
$arguments5['title'] = NULL;
$arguments5['accesskey'] = NULL;
$arguments5['tabindex'] = NULL;
$arguments5['onclick'] = NULL;
$arguments5['name'] = NULL;
$arguments5['rel'] = NULL;
$arguments5['rev'] = NULL;
$arguments5['target'] = NULL;
$arguments5['action'] = NULL;
$arguments5['arguments'] = array (
);
$arguments5['controller'] = NULL;
$arguments5['package'] = NULL;
$arguments5['subpackage'] = NULL;
$arguments5['section'] = '';
$arguments5['format'] = '';
$arguments5['additionalParams'] = array (
);
$arguments5['addQueryString'] = false;
$arguments5['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments5['useParentRequest'] = false;
$arguments5['absolute'] = true;
$arguments5['useMainRequest'] = false;
$arguments5['action'] = 'index';
// Rendering Array
$array7 = array();
$array8 = array (
);$array7['type'] = $renderingContext->getVariableProvider()->getByPath('availableConfigurationType', $array8);
$arguments5['arguments'] = $array7;
$output9 = '';

$output9 .= 'neos-button';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array12 = array();
$array13 = array (
);$array12['0'] = $renderingContext->getVariableProvider()->getByPath('availableConfigurationType', $array13);
$array12['1'] = ' === ';
$array14 = array (
);$array12['2'] = $renderingContext->getVariableProvider()->getByPath('type', $array14);

$expression15 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)
					),
					$renderingContext
				);
$arguments10['then'] = ' neos-active';

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);
$arguments5['class'] = $output9;

$output4 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
	';
return $output4;
};
$arguments1 = array();
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$array3 = array (
);$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('availableConfigurationTypes', $array3);
$arguments1['as'] = 'availableConfigurationType';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
		<ul id="neos-notifications-inline">
			<li data-type="warning" data-title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['id'] = NULL;
$arguments25['value'] = NULL;
$arguments25['arguments'] = array (
);
$arguments25['source'] = 'Main';
$arguments25['package'] = NULL;
$arguments25['quantity'] = NULL;
$arguments25['locale'] = NULL;
$arguments25['id'] = 'numberValidationErrors';
$arguments25['source'] = 'ValidationErrors';
// Rendering Array
$array27 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$array30 = array (
);return $renderingContext->getVariableProvider()->getByPath('validationResult.flattenedErrors', $array30);
};
$arguments28 = array();
$arguments28['subject'] = NULL;
$renderChildrenClosure29 = ($arguments28['subject'] !== null) ? function() use ($arguments28) { return $arguments28['subject']; } : $renderChildrenClosure29;$array27['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);
$arguments25['arguments'] = $array27;
$output31 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$array34 = array (
);return $renderingContext->getVariableProvider()->getByPath('validationResult.flattenedErrors', $array34);
};
$arguments32 = array();
$arguments32['subject'] = NULL;
$renderChildrenClosure33 = ($arguments32['subject'] !== null) ? function() use ($arguments32) { return $arguments32['subject']; } : $renderChildrenClosure33;
$output31 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= ' errors were found';
$arguments25['value'] = $output31;

$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output24 .= '">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
						<pre>';
$array43 = array (
);
$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('path', $array43)]);

$output42 .= ' -> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['id'] = NULL;
$arguments44['value'] = NULL;
$arguments44['arguments'] = array (
);
$arguments44['source'] = 'Main';
$arguments44['package'] = NULL;
$arguments44['quantity'] = NULL;
$arguments44['locale'] = NULL;
$array46 = array (
);$arguments44['id'] = $renderingContext->getVariableProvider()->getByPath('error.code', $array46);
$arguments44['source'] = 'ValidationErrors';
$arguments44['package'] = 'Neos.Flow';
$array47 = array (
);$arguments44['arguments'] = $renderingContext->getVariableProvider()->getByPath('error.arguments', $array47);
$array48 = array (
);$arguments44['value'] = $renderingContext->getVariableProvider()->getByPath('error', $array48);

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output42 .= '</pre>
					';
return $output42;
};
$arguments39 = array();
$arguments39['each'] = NULL;
$arguments39['as'] = NULL;
$arguments39['key'] = NULL;
$arguments39['reverse'] = false;
$arguments39['iteration'] = NULL;
$array41 = array (
);$arguments39['each'] = $renderingContext->getVariableProvider()->getByPath('errors', $array41);
$arguments39['as'] = 'error';

$output38 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
				';
return $output38;
};
$arguments35 = array();
$arguments35['each'] = NULL;
$arguments35['as'] = NULL;
$arguments35['key'] = NULL;
$arguments35['reverse'] = false;
$arguments35['iteration'] = NULL;
$array37 = array (
);$arguments35['each'] = $renderingContext->getVariableProvider()->getByPath('validationResult.flattenedErrors', $array37);
$arguments35['key'] = 'path';
$arguments35['as'] = 'errors';

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output24 .= '
			</li>
		</ul>
	';
return $output24;
};
$arguments17 = array();
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$arguments17['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array19 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$array22 = array (
);return $renderingContext->getVariableProvider()->getByPath('validationResult.flattenedErrors', $array22);
};
$arguments20 = array();
$arguments20['subject'] = NULL;
$renderChildrenClosure21 = ($arguments20['subject'] !== null) ? function() use ($arguments20) { return $arguments20['subject']; } : $renderChildrenClosure21;$array19['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);
$array19['1'] = ' > 0';

$expression23 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments17['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression23(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)
					),
					$renderingContext
				);
$arguments17['__thenClosure'] = $renderChildrenClosure18;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output0 .= '
	<br /><br />
	<div id="configuration">
		<ul>
			<li class="folder">
				';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['id'] = NULL;
$arguments49['value'] = NULL;
$arguments49['arguments'] = array (
);
$arguments49['source'] = 'Main';
$arguments49['package'] = NULL;
$arguments49['quantity'] = NULL;
$arguments49['locale'] = NULL;
$arguments49['id'] = 'configuration';
$arguments49['value'] = 'Configuration';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext)]);

$output0 .= '
				';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\ConfigurationTreeViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['configuration'] = NULL;
$array53 = array (
);$arguments51['configuration'] = $renderingContext->getVariableProvider()->getByPath('configuration', $array53);

$output0 .= Neos\Neos\ViewHelpers\Backend\ConfigurationTreeViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output0 .= '
			</li>
		</ul>
	</div>
	<script>
		$(function() {
			var cookieId = "typo3-neos-module-configuration-';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['value'] = NULL;
$arguments54['mode'] = 'upper';
$array56 = array (
);$arguments54['value'] = $renderingContext->getVariableProvider()->getByPath('type', $array56);
$arguments54['mode'] = 'lower';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext)]);

$output0 .= '";
			require(
				';
$output57 = '';

$output57 .= '{
					baseUrl: \'';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['path'] = NULL;
$arguments58['package'] = NULL;
$arguments58['resource'] = NULL;
$arguments58['localize'] = true;
$arguments58['path'] = 'JavaScript';

$output57 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output57 .= '\',
					paths: requirePaths,
					context: \'neos\',
					locale: \'en\'
				}';

$output0 .= $output57;

$output0 .= ',
				[
					\'Library/jquery-with-dependencies\'
				],
				function($) {
					$(\'#configuration\').dynatree(';

$output0 .= '{
						keyboard: true,
						selectMode: 1,
						minExpandLevel: 2,
						classNames: {
							container: \'neos-dynatree-container\',
							node: \'neos-dynatree-node\',
							folder: \'neos-dynatree-folder\',

							empty: \'neos-dynatree-empty\',
							vline: \'neos-dynatree-vline\',
							expander: \'neos-dynatree-expander\',
							connector: \'neos-dynatree-connector\',
							checkbox: \'neos-dynatree-checkbox\',
							nodeIcon: \'neos-dynatree-icon\',
							title: \'neos-dynatree-title\',
							noConnector: \'neos-dynatree-no-connector\',

							nodeError: \'neos-dynatree-statusnode-error\',
							nodeWait: \'neos-dynatree-statusnode-wait\',
							hidden: \'neos-dynatree-hidden\',
							combinedExpanderPrefix: \'neos-dynatree-exp-\',
							combinedIconPrefix: \'neos-dynatree-ico-\',
							nodeLoading: \'neos-dynatree-loading\',
							hasChildren: \'neos-dynatree-has-children\',
							active: \'neos-dynatree-active\',
							selected: \'neos-dynatree-selected\',
							expanded: \'neos-dynatree-expanded\',
							lazy: \'neos-dynatree-lazy\',
							focused: \'neos-dynatree-focused\',
							partsel: \'neos-dynatree-partsel\',
							lastsib: \'neos-dynatree-lastsib\'
						},
						noLink: true,
						autoFocus: false,
						clickFolderMode: 3,
						debugLevel: 0, // 0: quiet, 1: normal, 2: debug
						persist: true,
						cookieId: cookieId,
						cookie: {
							expires: 365
						}
					}';

$output0 .= ');
				}
			);
		});
	</script>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output60 = '';

$output60 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['name'] = NULL;
$arguments61['name'] = 'BackendSubModule';

$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output60 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
		';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$array81 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('availableConfigurationType', $array81)]);
};
$arguments70 = array();
$arguments70['additionalAttributes'] = NULL;
$arguments70['data'] = NULL;
$arguments70['class'] = NULL;
$arguments70['dir'] = NULL;
$arguments70['id'] = NULL;
$arguments70['lang'] = NULL;
$arguments70['style'] = NULL;
$arguments70['title'] = NULL;
$arguments70['accesskey'] = NULL;
$arguments70['tabindex'] = NULL;
$arguments70['onclick'] = NULL;
$arguments70['name'] = NULL;
$arguments70['rel'] = NULL;
$arguments70['rev'] = NULL;
$arguments70['target'] = NULL;
$arguments70['action'] = NULL;
$arguments70['arguments'] = array (
);
$arguments70['controller'] = NULL;
$arguments70['package'] = NULL;
$arguments70['subpackage'] = NULL;
$arguments70['section'] = '';
$arguments70['format'] = '';
$arguments70['additionalParams'] = array (
);
$arguments70['addQueryString'] = false;
$arguments70['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments70['useParentRequest'] = false;
$arguments70['absolute'] = true;
$arguments70['useMainRequest'] = false;
$arguments70['action'] = 'index';
// Rendering Array
$array72 = array();
$array73 = array (
);$array72['type'] = $renderingContext->getVariableProvider()->getByPath('availableConfigurationType', $array73);
$arguments70['arguments'] = $array72;
$output74 = '';

$output74 .= 'neos-button';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['then'] = NULL;
$arguments75['else'] = NULL;
$arguments75['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array77 = array();
$array78 = array (
);$array77['0'] = $renderingContext->getVariableProvider()->getByPath('availableConfigurationType', $array78);
$array77['1'] = ' === ';
$array79 = array (
);$array77['2'] = $renderingContext->getVariableProvider()->getByPath('type', $array79);

$expression80 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments75['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression80(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array77)
					),
					$renderingContext
				);
$arguments75['then'] = ' neos-active';

$output74 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);
$arguments70['class'] = $output74;

$output69 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output69 .= '
	';
return $output69;
};
$arguments66 = array();
$arguments66['each'] = NULL;
$arguments66['as'] = NULL;
$arguments66['key'] = NULL;
$arguments66['reverse'] = false;
$arguments66['iteration'] = NULL;
$array68 = array (
);$arguments66['each'] = $renderingContext->getVariableProvider()->getByPath('availableConfigurationTypes', $array68);
$arguments66['as'] = 'availableConfigurationType';

$output65 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
		<ul id="neos-notifications-inline">
			<li data-type="warning" data-title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['id'] = NULL;
$arguments90['value'] = NULL;
$arguments90['arguments'] = array (
);
$arguments90['source'] = 'Main';
$arguments90['package'] = NULL;
$arguments90['quantity'] = NULL;
$arguments90['locale'] = NULL;
$arguments90['id'] = 'numberValidationErrors';
$arguments90['source'] = 'ValidationErrors';
// Rendering Array
$array92 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$array95 = array (
);return $renderingContext->getVariableProvider()->getByPath('validationResult.flattenedErrors', $array95);
};
$arguments93 = array();
$arguments93['subject'] = NULL;
$renderChildrenClosure94 = ($arguments93['subject'] !== null) ? function() use ($arguments93) { return $arguments93['subject']; } : $renderChildrenClosure94;$array92['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);
$arguments90['arguments'] = $array92;
$output96 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$array99 = array (
);return $renderingContext->getVariableProvider()->getByPath('validationResult.flattenedErrors', $array99);
};
$arguments97 = array();
$arguments97['subject'] = NULL;
$renderChildrenClosure98 = ($arguments97['subject'] !== null) ? function() use ($arguments97) { return $arguments97['subject']; } : $renderChildrenClosure98;
$output96 .= TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= ' errors were found';
$arguments90['value'] = $output96;

$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext)]);

$output89 .= '">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
						<pre>';
$array108 = array (
);
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('path', $array108)]);

$output107 .= ' -> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['id'] = NULL;
$arguments109['value'] = NULL;
$arguments109['arguments'] = array (
);
$arguments109['source'] = 'Main';
$arguments109['package'] = NULL;
$arguments109['quantity'] = NULL;
$arguments109['locale'] = NULL;
$array111 = array (
);$arguments109['id'] = $renderingContext->getVariableProvider()->getByPath('error.code', $array111);
$arguments109['source'] = 'ValidationErrors';
$arguments109['package'] = 'Neos.Flow';
$array112 = array (
);$arguments109['arguments'] = $renderingContext->getVariableProvider()->getByPath('error.arguments', $array112);
$array113 = array (
);$arguments109['value'] = $renderingContext->getVariableProvider()->getByPath('error', $array113);

$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext)]);

$output107 .= '</pre>
					';
return $output107;
};
$arguments104 = array();
$arguments104['each'] = NULL;
$arguments104['as'] = NULL;
$arguments104['key'] = NULL;
$arguments104['reverse'] = false;
$arguments104['iteration'] = NULL;
$array106 = array (
);$arguments104['each'] = $renderingContext->getVariableProvider()->getByPath('errors', $array106);
$arguments104['as'] = 'error';

$output103 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output103 .= '
				';
return $output103;
};
$arguments100 = array();
$arguments100['each'] = NULL;
$arguments100['as'] = NULL;
$arguments100['key'] = NULL;
$arguments100['reverse'] = false;
$arguments100['iteration'] = NULL;
$array102 = array (
);$arguments100['each'] = $renderingContext->getVariableProvider()->getByPath('validationResult.flattenedErrors', $array102);
$arguments100['key'] = 'path';
$arguments100['as'] = 'errors';

$output89 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output89 .= '
			</li>
		</ul>
	';
return $output89;
};
$arguments82 = array();
$arguments82['then'] = NULL;
$arguments82['else'] = NULL;
$arguments82['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array84 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$array87 = array (
);return $renderingContext->getVariableProvider()->getByPath('validationResult.flattenedErrors', $array87);
};
$arguments85 = array();
$arguments85['subject'] = NULL;
$renderChildrenClosure86 = ($arguments85['subject'] !== null) ? function() use ($arguments85) { return $arguments85['subject']; } : $renderChildrenClosure86;$array84['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);
$array84['1'] = ' > 0';

$expression88 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments82['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression88(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array84)
					),
					$renderingContext
				);
$arguments82['__thenClosure'] = $renderChildrenClosure83;

$output65 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output65 .= '
	<br /><br />
	<div id="configuration">
		<ul>
			<li class="folder">
				';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['id'] = NULL;
$arguments114['value'] = NULL;
$arguments114['arguments'] = array (
);
$arguments114['source'] = 'Main';
$arguments114['package'] = NULL;
$arguments114['quantity'] = NULL;
$arguments114['locale'] = NULL;
$arguments114['id'] = 'configuration';
$arguments114['value'] = 'Configuration';

$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext)]);

$output65 .= '
				';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\ConfigurationTreeViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['configuration'] = NULL;
$array118 = array (
);$arguments116['configuration'] = $renderingContext->getVariableProvider()->getByPath('configuration', $array118);

$output65 .= Neos\Neos\ViewHelpers\Backend\ConfigurationTreeViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output65 .= '
			</li>
		</ul>
	</div>
	<script>
		$(function() {
			var cookieId = "typo3-neos-module-configuration-';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments119 = array();
$arguments119['value'] = NULL;
$arguments119['mode'] = 'upper';
$array121 = array (
);$arguments119['value'] = $renderingContext->getVariableProvider()->getByPath('type', $array121);
$arguments119['mode'] = 'lower';

$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Format\CaseViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext)]);

$output65 .= '";
			require(
				';
$output122 = '';

$output122 .= '{
					baseUrl: \'';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments123 = array();
$arguments123['path'] = NULL;
$arguments123['package'] = NULL;
$arguments123['resource'] = NULL;
$arguments123['localize'] = true;
$arguments123['path'] = 'JavaScript';

$output122 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output122 .= '\',
					paths: requirePaths,
					context: \'neos\',
					locale: \'en\'
				}';

$output65 .= $output122;

$output65 .= ',
				[
					\'Library/jquery-with-dependencies\'
				],
				function($) {
					$(\'#configuration\').dynatree(';

$output65 .= '{
						keyboard: true,
						selectMode: 1,
						minExpandLevel: 2,
						classNames: {
							container: \'neos-dynatree-container\',
							node: \'neos-dynatree-node\',
							folder: \'neos-dynatree-folder\',

							empty: \'neos-dynatree-empty\',
							vline: \'neos-dynatree-vline\',
							expander: \'neos-dynatree-expander\',
							connector: \'neos-dynatree-connector\',
							checkbox: \'neos-dynatree-checkbox\',
							nodeIcon: \'neos-dynatree-icon\',
							title: \'neos-dynatree-title\',
							noConnector: \'neos-dynatree-no-connector\',

							nodeError: \'neos-dynatree-statusnode-error\',
							nodeWait: \'neos-dynatree-statusnode-wait\',
							hidden: \'neos-dynatree-hidden\',
							combinedExpanderPrefix: \'neos-dynatree-exp-\',
							combinedIconPrefix: \'neos-dynatree-ico-\',
							nodeLoading: \'neos-dynatree-loading\',
							hasChildren: \'neos-dynatree-has-children\',
							active: \'neos-dynatree-active\',
							selected: \'neos-dynatree-selected\',
							expanded: \'neos-dynatree-expanded\',
							lazy: \'neos-dynatree-lazy\',
							focused: \'neos-dynatree-focused\',
							partsel: \'neos-dynatree-partsel\',
							lastsib: \'neos-dynatree-lastsib\'
						},
						noLink: true,
						autoFocus: false,
						clickFolderMode: 3,
						debugLevel: 0, // 0: quiet, 1: normal, 2: debug
						persist: true,
						cookieId: cookieId,
						cookie: {
							expires: 365
						}
					}';

$output65 .= ');
				}
			);
		});
	</script>
';
return $output65;
};
$arguments63 = array();
$arguments63['name'] = NULL;
$arguments63['name'] = 'content';

$output60 .= NULL;

$output60 .= '
';

return $output60;
}


}
#0             39281     