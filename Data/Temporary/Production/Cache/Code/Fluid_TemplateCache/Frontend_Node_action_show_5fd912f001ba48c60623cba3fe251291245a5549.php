<?php 
class Frontend_Node_action_show_5fd912f001ba48c60623cba3fe251291245a5549 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
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
  'ts' => 
  array (
    0 => 'Neos\\Fusion\\ViewHelpers',
  ),
));
}

/**
 * section metadata
 */
public function section_4c24b2612e94e2ae622e54397663f2b7bf0a2e17(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
		';
}
/**
 * section stylesheets
 */
public function section_8b563540d8e2cf00c7aab74292484dfc45d600e7(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
			<link rel="stylesheet" href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['path'] = NULL;
$arguments1['package'] = NULL;
$arguments1['resource'] = NULL;
$arguments1['localize'] = true;
$arguments1['path'] = '3/css/bootstrap.min.css';
$arguments1['package'] = 'Neos.Twitter.Bootstrap';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '" media="all" />
			<link rel="stylesheet" href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['path'] = NULL;
$arguments3['package'] = NULL;
$arguments3['resource'] = NULL;
$arguments3['localize'] = true;
$arguments3['path'] = 'Styles/NeosDemo.css';
$arguments3['package'] = 'Neos.Demo';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '" media="all" />
			<link rel="stylesheet" href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['path'] = NULL;
$arguments5['package'] = NULL;
$arguments5['resource'] = NULL;
$arguments5['localize'] = true;
$arguments5['path'] = 'Styles/Print.css';
$arguments5['package'] = 'Neos.Demo';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output0 .= '" media="print" />
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
				<link rel="stylesheet" href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['path'] = NULL;
$arguments13['package'] = NULL;
$arguments13['resource'] = NULL;
$arguments13['localize'] = true;
$arguments13['path'] = 'Styles/Backend.css';
$arguments13['package'] = 'Neos.Demo';

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output12 .= '" media="all" />
			';
return $output12;
};
$arguments7 = array();
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$arguments7['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['0'] = $renderingContext->getVariableProvider()->getByPath('node.context.workspace.name', $array10);
$array9['1'] = ' != \'live\'';

$expression11 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 'live');};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)
					),
					$renderingContext
				);
$arguments7['__thenClosure'] = $renderChildrenClosure8;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
		';

return $output0;
}
/**
 * section body
 */
public function section_02083f4579e08a612425c0c1a17ee47add783b94(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output15 = '';

$output15 .= '
			<div class="top-navigation-wrap">
				<div class="container">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$array18 = array (
);return $renderingContext->getVariableProvider()->getByPath('parts.languageMenu', $array18);
};
$arguments16 = array();
$arguments16['value'] = NULL;

$output15 .= isset($arguments16['value']) ? $arguments16['value'] : $renderChildrenClosure17();

$output15 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$array21 = array (
);return $renderingContext->getVariableProvider()->getByPath('parts.mainMenu', $array21);
};
$arguments19 = array();
$arguments19['value'] = NULL;

$output15 .= isset($arguments19['value']) ? $arguments19['value'] : $renderChildrenClosure20();

$output15 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$array24 = array (
);return $renderingContext->getVariableProvider()->getByPath('parts.secondLevelMenu', $array24);
};
$arguments22 = array();
$arguments22['value'] = NULL;

$output15 .= isset($arguments22['value']) ? $arguments22['value'] : $renderChildrenClosure23();

$output15 .= '
				</div>
			</div>

			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
				<div class="main-header';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$arguments31['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['0'] = $renderingContext->getVariableProvider()->getByPath('imageUri', $array34);

$expression35 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$output36 = '';

$output36 .= ' image" style="background-image: url(';
$array37 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('imageUri', $array37)]);

$output36 .= ');';
$arguments31['then'] = $output36;

$output30 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['then'] = NULL;
$arguments38['else'] = NULL;
$arguments38['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array40 = array();
$array41 = array (
);$array40['0'] = $renderingContext->getVariableProvider()->getByPath('imageTitleText', $array41);

$expression42 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments38['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression42(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)
					),
					$renderingContext
				);
$output43 = '';

$output43 .= ' title="';
$array44 = array (
);
$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('imageTitleText', $array44)]);

$output43 .= '"';
$arguments38['then'] = $output43;

$output30 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output30 .= '>
					<div class="container">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$array47 = array (
);return $renderingContext->getVariableProvider()->getByPath('content.teaser', $array47);
};
$arguments45 = array();
$arguments45['value'] = NULL;

$output30 .= isset($arguments45['value']) ? $arguments45['value'] : $renderChildrenClosure46();

$output30 .= '
					</div>
				</div>
			';
return $output30;
};
$arguments25 = array();
$arguments25['then'] = NULL;
$arguments25['else'] = NULL;
$arguments25['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['0'] = $renderingContext->getVariableProvider()->getByPath('landingPage', $array28);

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments25['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)
					),
					$renderingContext
				);
$arguments25['__thenClosure'] = $renderChildrenClosure26;

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output15 .= '

			<div class="container">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$array50 = array (
);return $renderingContext->getVariableProvider()->getByPath('parts.breadcrumb', $array50);
};
$arguments48 = array();
$arguments48['value'] = NULL;

$output15 .= isset($arguments48['value']) ? $arguments48['value'] : $renderChildrenClosure49();

$output15 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$array53 = array (
);return $renderingContext->getVariableProvider()->getByPath('content.main', $array53);
};
$arguments51 = array();
$arguments51['value'] = NULL;

$output15 .= isset($arguments51['value']) ? $arguments51['value'] : $renderChildrenClosure52();

$output15 .= '
			</div>

			<footer role="navigation" class="navbar navbar-default">
				<div class="panel panel-default">
					<div class="panel-body clearfix">
						<div class="container">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$array56 = array (
);return $renderingContext->getVariableProvider()->getByPath('parts.metaMenu', $array56);
};
$arguments54 = array();
$arguments54['value'] = NULL;

$output15 .= isset($arguments54['value']) ? $arguments54['value'] : $renderChildrenClosure55();

$output15 .= '
						</div>
					</div>
					<div class="panel-footer">
						<div class="container">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$array59 = array (
);return $renderingContext->getVariableProvider()->getByPath('footer', $array59);
};
$arguments57 = array();
$arguments57['value'] = NULL;

$output15 .= isset($arguments57['value']) ? $arguments57['value'] : $renderChildrenClosure58();

$output15 .= '
						</div>
					</div>
				</div>
			</footer>

		';

return $output15;
}
/**
 * section bodyScripts
 */
public function section_1c1dd0596640090d96e10e9c178a187288240ef4(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output60 = '';

$output60 .= '
			<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['path'] = NULL;
$arguments61['package'] = NULL;
$arguments61['resource'] = NULL;
$arguments61['localize'] = true;
$arguments61['path'] = 'Libraries/jQuery/jquery-1.10.1.min.js';
$arguments61['package'] = 'Neos.Twitter.Bootstrap';

$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext)]);

$output60 .= '"></script>
			<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['path'] = NULL;
$arguments63['package'] = NULL;
$arguments63['resource'] = NULL;
$arguments63['localize'] = true;
$arguments63['path'] = '3/js/bootstrap.min.js';
$arguments63['package'] = 'Neos.Twitter.Bootstrap';

$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext)]);

$output60 .= '"></script>
			<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['path'] = NULL;
$arguments65['package'] = NULL;
$arguments65['resource'] = NULL;
$arguments65['localize'] = true;
$arguments65['path'] = 'JavaScript/main.min.js';
$arguments65['package'] = 'Neos.Demo';

$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext)]);

$output60 .= '"></script>
		';

return $output60;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output67 = '';

$output67 .= '
<!DOCTYPE html>
<html lang="en">
	<head>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return '
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
		';
};
$arguments68 = array();
$arguments68['name'] = NULL;
$arguments68['name'] = 'metadata';

$output67 .= NULL;

$output67 .= '

		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
			<link rel="stylesheet" href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments73 = array();
$arguments73['path'] = NULL;
$arguments73['package'] = NULL;
$arguments73['resource'] = NULL;
$arguments73['localize'] = true;
$arguments73['path'] = '3/css/bootstrap.min.css';
$arguments73['package'] = 'Neos.Twitter.Bootstrap';

$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext)]);

$output72 .= '" media="all" />
			<link rel="stylesheet" href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['path'] = NULL;
$arguments75['package'] = NULL;
$arguments75['resource'] = NULL;
$arguments75['localize'] = true;
$arguments75['path'] = 'Styles/NeosDemo.css';
$arguments75['package'] = 'Neos.Demo';

$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext)]);

$output72 .= '" media="all" />
			<link rel="stylesheet" href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['path'] = NULL;
$arguments77['package'] = NULL;
$arguments77['resource'] = NULL;
$arguments77['localize'] = true;
$arguments77['path'] = 'Styles/Print.css';
$arguments77['package'] = 'Neos.Demo';

$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext)]);

$output72 .= '" media="print" />
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
				<link rel="stylesheet" href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['path'] = NULL;
$arguments85['package'] = NULL;
$arguments85['resource'] = NULL;
$arguments85['localize'] = true;
$arguments85['path'] = 'Styles/Backend.css';
$arguments85['package'] = 'Neos.Demo';

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext)]);

$output84 .= '" media="all" />
			';
return $output84;
};
$arguments79 = array();
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$arguments79['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['0'] = $renderingContext->getVariableProvider()->getByPath('node.context.workspace.name', $array82);
$array81['1'] = ' != \'live\'';

$expression83 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 'live');};
$arguments79['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression83(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array81)
					),
					$renderingContext
				);
$arguments79['__thenClosure'] = $renderChildrenClosure80;

$output72 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output72 .= '
		';
return $output72;
};
$arguments70 = array();
$arguments70['name'] = NULL;
$arguments70['name'] = 'stylesheets';

$output67 .= NULL;

$output67 .= '
	</head>

	<body>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
			<div class="top-navigation-wrap">
				<div class="container">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$array92 = array (
);return $renderingContext->getVariableProvider()->getByPath('parts.languageMenu', $array92);
};
$arguments90 = array();
$arguments90['value'] = NULL;

$output89 .= isset($arguments90['value']) ? $arguments90['value'] : $renderChildrenClosure91();

$output89 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$array95 = array (
);return $renderingContext->getVariableProvider()->getByPath('parts.mainMenu', $array95);
};
$arguments93 = array();
$arguments93['value'] = NULL;

$output89 .= isset($arguments93['value']) ? $arguments93['value'] : $renderChildrenClosure94();

$output89 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$array98 = array (
);return $renderingContext->getVariableProvider()->getByPath('parts.secondLevelMenu', $array98);
};
$arguments96 = array();
$arguments96['value'] = NULL;

$output89 .= isset($arguments96['value']) ? $arguments96['value'] : $renderChildrenClosure97();

$output89 .= '
				</div>
			</div>

			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
				<div class="main-header';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments105 = array();
$arguments105['then'] = NULL;
$arguments105['else'] = NULL;
$arguments105['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array107 = array();
$array108 = array (
);$array107['0'] = $renderingContext->getVariableProvider()->getByPath('imageUri', $array108);

$expression109 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments105['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression109(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array107)
					),
					$renderingContext
				);
$output110 = '';

$output110 .= ' image" style="background-image: url(';
$array111 = array (
);
$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('imageUri', $array111)]);

$output110 .= ');';
$arguments105['then'] = $output110;

$output104 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output104 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments112 = array();
$arguments112['then'] = NULL;
$arguments112['else'] = NULL;
$arguments112['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array114 = array();
$array115 = array (
);$array114['0'] = $renderingContext->getVariableProvider()->getByPath('imageTitleText', $array115);

$expression116 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments112['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression116(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array114)
					),
					$renderingContext
				);
$output117 = '';

$output117 .= ' title="';
$array118 = array (
);
$output117 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('imageTitleText', $array118)]);

$output117 .= '"';
$arguments112['then'] = $output117;

$output104 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output104 .= '>
					<div class="container">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$array121 = array (
);return $renderingContext->getVariableProvider()->getByPath('content.teaser', $array121);
};
$arguments119 = array();
$arguments119['value'] = NULL;

$output104 .= isset($arguments119['value']) ? $arguments119['value'] : $renderChildrenClosure120();

$output104 .= '
					</div>
				</div>
			';
return $output104;
};
$arguments99 = array();
$arguments99['then'] = NULL;
$arguments99['else'] = NULL;
$arguments99['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array101 = array();
$array102 = array (
);$array101['0'] = $renderingContext->getVariableProvider()->getByPath('landingPage', $array102);

$expression103 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments99['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression103(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array101)
					),
					$renderingContext
				);
$arguments99['__thenClosure'] = $renderChildrenClosure100;

$output89 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output89 .= '

			<div class="container">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$array124 = array (
);return $renderingContext->getVariableProvider()->getByPath('parts.breadcrumb', $array124);
};
$arguments122 = array();
$arguments122['value'] = NULL;

$output89 .= isset($arguments122['value']) ? $arguments122['value'] : $renderChildrenClosure123();

$output89 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$array127 = array (
);return $renderingContext->getVariableProvider()->getByPath('content.main', $array127);
};
$arguments125 = array();
$arguments125['value'] = NULL;

$output89 .= isset($arguments125['value']) ? $arguments125['value'] : $renderChildrenClosure126();

$output89 .= '
			</div>

			<footer role="navigation" class="navbar navbar-default">
				<div class="panel panel-default">
					<div class="panel-body clearfix">
						<div class="container">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$array130 = array (
);return $renderingContext->getVariableProvider()->getByPath('parts.metaMenu', $array130);
};
$arguments128 = array();
$arguments128['value'] = NULL;

$output89 .= isset($arguments128['value']) ? $arguments128['value'] : $renderChildrenClosure129();

$output89 .= '
						</div>
					</div>
					<div class="panel-footer">
						<div class="container">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$array133 = array (
);return $renderingContext->getVariableProvider()->getByPath('footer', $array133);
};
$arguments131 = array();
$arguments131['value'] = NULL;

$output89 .= isset($arguments131['value']) ? $arguments131['value'] : $renderChildrenClosure132();

$output89 .= '
						</div>
					</div>
				</div>
			</footer>

		';
return $output89;
};
$arguments87 = array();
$arguments87['name'] = NULL;
$arguments87['name'] = 'body';

$output67 .= NULL;

$output67 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$output136 = '';

$output136 .= '
			<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments137 = array();
$arguments137['path'] = NULL;
$arguments137['package'] = NULL;
$arguments137['resource'] = NULL;
$arguments137['localize'] = true;
$arguments137['path'] = 'Libraries/jQuery/jquery-1.10.1.min.js';
$arguments137['package'] = 'Neos.Twitter.Bootstrap';

$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext)]);

$output136 .= '"></script>
			<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['path'] = NULL;
$arguments139['package'] = NULL;
$arguments139['resource'] = NULL;
$arguments139['localize'] = true;
$arguments139['path'] = '3/js/bootstrap.min.js';
$arguments139['package'] = 'Neos.Twitter.Bootstrap';

$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext)]);

$output136 .= '"></script>
			<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments141 = array();
$arguments141['path'] = NULL;
$arguments141['package'] = NULL;
$arguments141['resource'] = NULL;
$arguments141['localize'] = true;
$arguments141['path'] = 'JavaScript/main.min.js';
$arguments141['package'] = 'Neos.Demo';

$output136 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext)]);

$output136 .= '"></script>
		';
return $output136;
};
$arguments134 = array();
$arguments134['name'] = NULL;
$arguments134['name'] = 'bodyScripts';

$output67 .= NULL;

$output67 .= '
	</body>
</html>
';

return $output67;
}


}
#0             39051     