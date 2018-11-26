<?php 
class Backend_Module_action_index_761c0847c51058e8bbb6e4b4efa48f99a3c70293 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'Default';
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
 * section head
 */
public function section_1a954628a960aaef81d7b2d4521929579f3541e6(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<title>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['id'] = NULL;
$arguments1['value'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['source'] = 'Main';
$arguments1['package'] = NULL;
$arguments1['quantity'] = NULL;
$arguments1['locale'] = NULL;
$array3 = array (
);$arguments1['id'] = $renderingContext->getVariableProvider()->getByPath('title', $array3);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</title>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
			<link rel="stylesheet" type="text/css"
				  href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['path'] = NULL;
$arguments22['package'] = NULL;
$arguments22['resource'] = NULL;
$arguments22['localize'] = true;
$arguments22['path'] = 'Styles/Includes-built.css';
$arguments22['package'] = 'Neos.Neos';

$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext)]);

$output21 .= '?bust=';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\CssBuiltVersionViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();

$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\CssBuiltVersionViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext)]);

$output21 .= '"/>
		';
return $output21;
};
$arguments19 = array();

$output18 .= '';

$output18 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
			<link rel="stylesheet" type="text/css"
				  href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['path'] = NULL;
$arguments29['package'] = NULL;
$arguments29['resource'] = NULL;
$arguments29['localize'] = true;
$arguments29['path'] = 'Styles/Includes.css';
$arguments29['package'] = 'Neos.Neos';

$output28 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output28 .= '"/>
		';
return $output28;
};
$arguments26 = array();
$arguments26['if'] = NULL;

$output18 .= '';

$output18 .= '
	';
return $output18;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array14 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\ShouldLoadMinifiedJavascriptViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$array14['0'] = Neos\Neos\ViewHelpers\Backend\ShouldLoadMinifiedJavascriptViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$expression17 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)
					),
					$renderingContext
				);
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
			<link rel="stylesheet" type="text/css"
				  href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['path'] = NULL;
$arguments7['package'] = NULL;
$arguments7['resource'] = NULL;
$arguments7['localize'] = true;
$arguments7['path'] = 'Styles/Includes-built.css';
$arguments7['package'] = 'Neos.Neos';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output6 .= '?bust=';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\CssBuiltVersionViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\CssBuiltVersionViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output6 .= '"/>
		';
return $output6;
};
$arguments4['__elseClosures'][] = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
			<link rel="stylesheet" type="text/css"
				  href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['path'] = NULL;
$arguments12['package'] = NULL;
$arguments12['resource'] = NULL;
$arguments12['localize'] = true;
$arguments12['path'] = 'Styles/Includes.css';
$arguments12['package'] = 'Neos.Neos';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

$output11 .= '"/>
		';
return $output11;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
			<link rel="stylesheet" href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['path'] = NULL;
$arguments41['package'] = NULL;
$arguments41['resource'] = NULL;
$arguments41['localize'] = true;
$array43 = array (
);$arguments41['path'] = $renderingContext->getVariableProvider()->getByPath('additionalResource', $array43);

$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext)]);

$output40 .= '" />
		';
return $output40;
};
$arguments37 = array();
$arguments37['each'] = NULL;
$arguments37['as'] = NULL;
$arguments37['key'] = NULL;
$arguments37['reverse'] = false;
$arguments37['iteration'] = NULL;
$array39 = array (
);$arguments37['each'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration.additionalResources.styleSheets', $array39);
$arguments37['as'] = 'additionalResource';

$output36 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
	';
return $output36;
};
$arguments31 = array();
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$arguments31['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['0'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration.additionalResources.styleSheets', $array34);

$expression35 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$arguments31['__thenClosure'] = $renderChildrenClosure32;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output0 .= '

	<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['path'] = NULL;
$arguments44['package'] = NULL;
$arguments44['resource'] = NULL;
$arguments44['localize'] = true;
$arguments44['path'] = 'Library/jquery/jquery-2.0.3.js';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output0 .= '"></script>
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
			<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['path'] = NULL;
$arguments56['package'] = NULL;
$arguments56['resource'] = NULL;
$arguments56['localize'] = true;
$array58 = array (
);$arguments56['path'] = $renderingContext->getVariableProvider()->getByPath('additionalResource', $array58);

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output55 .= '"></script>
		';
return $output55;
};
$arguments52 = array();
$arguments52['each'] = NULL;
$arguments52['as'] = NULL;
$arguments52['key'] = NULL;
$arguments52['reverse'] = false;
$arguments52['iteration'] = NULL;
$array54 = array (
);$arguments52['each'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration.additionalResources.javaScripts', $array54);
$arguments52['as'] = 'additionalResource';

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
	';
return $output51;
};
$arguments46 = array();
$arguments46['then'] = NULL;
$arguments46['else'] = NULL;
$arguments46['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array48 = array();
$array49 = array (
);$array48['0'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration.additionalResources.javaScripts', $array49);

$expression50 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments46['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression50(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array48)
					),
					$renderingContext
				);
$arguments46['__thenClosure'] = $renderChildrenClosure47;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output0 .= '

	<script type="text/javascript">
		// TODO: Get rid of those global variables
		';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\JavascriptConfigurationViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();

$output0 .= Neos\Neos\ViewHelpers\Backend\JavascriptConfigurationViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output0 .= '
	</script>

	<link rel="neos-menudata" href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['action'] = NULL;
$arguments61['arguments'] = array (
);
$arguments61['controller'] = NULL;
$arguments61['package'] = NULL;
$arguments61['subpackage'] = NULL;
$arguments61['section'] = '';
$arguments61['format'] = '';
$arguments61['additionalParams'] = array (
);
$arguments61['absolute'] = false;
$arguments61['addQueryString'] = false;
$arguments61['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments61['useParentRequest'] = false;
$arguments61['useMainRequest'] = false;
$arguments61['action'] = 'index';
$arguments61['controller'] = 'Backend\\Menu';
$arguments61['package'] = 'Neos.Neos';
// Rendering Boolean node
// Rendering Array
$array63 = array();
$array64 = array (
);$array63['0'] = $renderingContext->getVariableProvider()->getByPath('true', $array64);

$expression65 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments61['absolute'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression65(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array63)
					),
					$renderingContext
				);
// Rendering Array
$array66 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\ConfigurationCacheVersionViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$array66['version'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\ConfigurationCacheVersionViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext)]);
$arguments61['arguments'] = $array66;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext)]);

$output0 .= '" />
	<!-- TODO: Make sure the schema information and edit / preview panel data isn\'t necessary in backend modules -->
	<link rel="neos-vieschema" href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['action'] = NULL;
$arguments69['arguments'] = array (
);
$arguments69['controller'] = NULL;
$arguments69['package'] = NULL;
$arguments69['subpackage'] = NULL;
$arguments69['section'] = '';
$arguments69['format'] = '';
$arguments69['additionalParams'] = array (
);
$arguments69['absolute'] = false;
$arguments69['addQueryString'] = false;
$arguments69['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments69['useParentRequest'] = false;
$arguments69['useMainRequest'] = false;
$arguments69['action'] = 'vieSchema';
$arguments69['controller'] = 'Backend\\Schema';
$arguments69['package'] = 'Neos.Neos';
// Rendering Boolean node
// Rendering Array
$array71 = array();
$array72 = array (
);$array71['0'] = $renderingContext->getVariableProvider()->getByPath('true', $array72);

$expression73 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments69['absolute'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression73(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array71)
					),
					$renderingContext
				);
// Rendering Array
$array74 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\ConfigurationCacheVersionViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$array74['version'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\ConfigurationCacheVersionViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext)]);
$arguments69['arguments'] = $array74;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext)]);

$output0 .= '" />
	<link rel="neos-nodetypeschema" href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['action'] = NULL;
$arguments77['arguments'] = array (
);
$arguments77['controller'] = NULL;
$arguments77['package'] = NULL;
$arguments77['subpackage'] = NULL;
$arguments77['section'] = '';
$arguments77['format'] = '';
$arguments77['additionalParams'] = array (
);
$arguments77['absolute'] = false;
$arguments77['addQueryString'] = false;
$arguments77['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments77['useParentRequest'] = false;
$arguments77['useMainRequest'] = false;
$arguments77['action'] = 'nodeTypeSchema';
$arguments77['controller'] = 'Backend\\Schema';
$arguments77['package'] = 'Neos.Neos';
// Rendering Boolean node
// Rendering Array
$array79 = array();
$array80 = array (
);$array79['0'] = $renderingContext->getVariableProvider()->getByPath('true', $array80);

$expression81 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments77['absolute'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression81(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array79)
					),
					$renderingContext
				);
// Rendering Array
$array82 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\ConfigurationCacheVersionViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$array82['version'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\ConfigurationCacheVersionViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext)]);
$arguments77['arguments'] = $array82;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext)]);

$output0 .= '" />
	<link rel="neos-editpreviewdata" href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['action'] = NULL;
$arguments85['arguments'] = array (
);
$arguments85['controller'] = NULL;
$arguments85['package'] = NULL;
$arguments85['subpackage'] = NULL;
$arguments85['section'] = '';
$arguments85['format'] = '';
$arguments85['additionalParams'] = array (
);
$arguments85['absolute'] = false;
$arguments85['addQueryString'] = false;
$arguments85['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments85['useParentRequest'] = false;
$arguments85['useMainRequest'] = false;
$arguments85['action'] = 'editPreview';
$arguments85['controller'] = 'Backend\\Settings';
$arguments85['package'] = 'Neos.Neos';
// Rendering Boolean node
// Rendering Array
$array87 = array();
$array88 = array (
);$array87['0'] = $renderingContext->getVariableProvider()->getByPath('true', $array88);

$expression89 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments85['absolute'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression89(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array87)
					),
					$renderingContext
				);
// Rendering Array
$array90 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\ConfigurationCacheVersionViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$array90['version'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\ConfigurationCacheVersionViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext)]);
$arguments85['arguments'] = $array90;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext)]);

$output0 .= '" />
	<link rel="neos-xliff" href="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['action'] = NULL;
$arguments95['arguments'] = array (
);
$arguments95['controller'] = NULL;
$arguments95['package'] = NULL;
$arguments95['subpackage'] = NULL;
$arguments95['section'] = '';
$arguments95['format'] = '';
$arguments95['additionalParams'] = array (
);
$arguments95['absolute'] = false;
$arguments95['addQueryString'] = false;
$arguments95['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments95['useParentRequest'] = false;
$arguments95['useMainRequest'] = false;
$arguments95['action'] = 'xliffAsJson';
// Rendering Array
$array97 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\InterfaceLanguageViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments98 = array();
$array97['locale'] = Neos\Neos\ViewHelpers\Backend\InterfaceLanguageViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\XliffCacheVersionViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$array97['version'] = Neos\Neos\ViewHelpers\Backend\XliffCacheVersionViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);
$arguments95['arguments'] = $array97;
$arguments95['controller'] = 'Backend\\Backend';
$arguments95['package'] = 'Neos.Neos';
// Rendering Boolean node
// Rendering Array
$array102 = array();
$array103 = array (
);$array102['0'] = $renderingContext->getVariableProvider()->getByPath('true', $array103);

$expression104 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments95['absolute'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression104(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array102)
					),
					$renderingContext
				);
return Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);
};
$arguments93 = array();
$arguments93['value'] = NULL;

$output0 .= isset($arguments93['value']) ? $arguments93['value'] : $renderChildrenClosure94();

$output0 .= '" />
';

return $output0;
}
/**
 * section body
 */
public function section_02083f4579e08a612425c0c1a17ee47add783b94(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output105 = '';

$output105 .= '
	<body class="neos neos-module neos-controls neos-module-';
$array106 = array (
);
$output105 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleClass', $array106)]);

$output105 .= '">
		<div class="neos-module-wrap">
			<ul class="neos-breadcrumb">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output110 = '';

$output110 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output146 = '';

$output146 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
							<li>
								';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\ModuleViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '<i class="';
$array168 = array (
);
$output167 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('configuration.icon', $array168)]);

$output167 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments169 = array();
$arguments169['id'] = NULL;
$arguments169['value'] = NULL;
$arguments169['arguments'] = array (
);
$arguments169['source'] = 'Main';
$arguments169['package'] = NULL;
$arguments169['quantity'] = NULL;
$arguments169['locale'] = NULL;
$arguments169['source'] = 'Modules';
$array171 = array (
);$arguments169['id'] = $renderingContext->getVariableProvider()->getByPath('configuration.label', $array171);

$output167 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext)]);
return $output167;
};
$arguments150 = array();
$arguments150['additionalAttributes'] = NULL;
$arguments150['data'] = NULL;
$arguments150['path'] = NULL;
$arguments150['action'] = NULL;
$arguments150['arguments'] = array (
);
$arguments150['section'] = '';
$arguments150['format'] = '';
$arguments150['additionalParams'] = array (
);
$arguments150['addQueryString'] = false;
$arguments150['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments150['class'] = NULL;
$arguments150['dir'] = NULL;
$arguments150['id'] = NULL;
$arguments150['lang'] = NULL;
$arguments150['style'] = NULL;
$arguments150['title'] = NULL;
$arguments150['accesskey'] = NULL;
$arguments150['tabindex'] = NULL;
$arguments150['onclick'] = NULL;
$arguments150['name'] = NULL;
$arguments150['rel'] = NULL;
$arguments150['rev'] = NULL;
$arguments150['target'] = NULL;
$array152 = array (
);$arguments150['path'] = $renderingContext->getVariableProvider()->getByPath('path', $array152);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['then'] = NULL;
$arguments153['else'] = NULL;
$arguments153['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array155 = array();
$array156 = array (
);$array155['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isLast', $array156);

$expression157 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments153['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression157(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array155)
					),
					$renderingContext
				);
$arguments153['then'] = 'active';
$arguments150['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['then'] = NULL;
$arguments158['else'] = NULL;
$arguments158['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array160 = array();
$array161 = array (
);$array160['0'] = $renderingContext->getVariableProvider()->getByPath('configuration.description', $array161);

$expression162 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments158['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression162(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array160)
					),
					$renderingContext
				);
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments163 = array();
$arguments163['id'] = NULL;
$arguments163['value'] = NULL;
$arguments163['arguments'] = array (
);
$arguments163['source'] = 'Main';
$arguments163['package'] = NULL;
$arguments163['quantity'] = NULL;
$arguments163['locale'] = NULL;
$array165 = array (
);$arguments163['id'] = $renderingContext->getVariableProvider()->getByPath('configuration.description', $array165);
$arguments158['then'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);
$arguments150['title'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);
// Rendering Array
$array166 = array();
$array166['data-neos-toggle'] = 'tooltip';
$array166['data-placement'] = 'bottom';
$arguments150['additionalAttributes'] = $array166;

$output149 .= Neos\Neos\ViewHelpers\Link\ModuleViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return '<span class="neos-divider">/</span>';
};
$arguments177 = array();
$arguments177['if'] = NULL;
return '';
};
$arguments172 = array();
$arguments172['then'] = NULL;
$arguments172['else'] = NULL;
$arguments172['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array174 = array();
$array175 = array (
);$array174['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isLast', $array175);

$expression176 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments172['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression176(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array174)
					),
					$renderingContext
				);
$arguments172['__elseClosures'][] = function() use ($renderingContext, $self) {
return '<span class="neos-divider">/</span>';
};

$output149 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output149 .= '
							</li>
						';
return $output149;
};
$arguments147 = array();
$arguments147['if'] = NULL;

$output146 .= '';

$output146 .= '
					';
return $output146;
};
$arguments111 = array();
$arguments111['then'] = NULL;
$arguments111['else'] = NULL;
$arguments111['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array143 = array();
$array144 = array (
);$array143['0'] = $renderingContext->getVariableProvider()->getByPath('configuration.hideInMenu', $array144);

$expression145 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments111['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression145(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array143)
					),
					$renderingContext
				);
$arguments111['__elseClosures'][] = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
							<li>
								';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\ModuleViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output131 = '';

$output131 .= '<i class="';
$array132 = array (
);
$output131 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('configuration.icon', $array132)]);

$output131 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['id'] = NULL;
$arguments133['value'] = NULL;
$arguments133['arguments'] = array (
);
$arguments133['source'] = 'Main';
$arguments133['package'] = NULL;
$arguments133['quantity'] = NULL;
$arguments133['locale'] = NULL;
$arguments133['source'] = 'Modules';
$array135 = array (
);$arguments133['id'] = $renderingContext->getVariableProvider()->getByPath('configuration.label', $array135);

$output131 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext)]);
return $output131;
};
$arguments114 = array();
$arguments114['additionalAttributes'] = NULL;
$arguments114['data'] = NULL;
$arguments114['path'] = NULL;
$arguments114['action'] = NULL;
$arguments114['arguments'] = array (
);
$arguments114['section'] = '';
$arguments114['format'] = '';
$arguments114['additionalParams'] = array (
);
$arguments114['addQueryString'] = false;
$arguments114['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments114['class'] = NULL;
$arguments114['dir'] = NULL;
$arguments114['id'] = NULL;
$arguments114['lang'] = NULL;
$arguments114['style'] = NULL;
$arguments114['title'] = NULL;
$arguments114['accesskey'] = NULL;
$arguments114['tabindex'] = NULL;
$arguments114['onclick'] = NULL;
$arguments114['name'] = NULL;
$arguments114['rel'] = NULL;
$arguments114['rev'] = NULL;
$arguments114['target'] = NULL;
$array116 = array (
);$arguments114['path'] = $renderingContext->getVariableProvider()->getByPath('path', $array116);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['then'] = NULL;
$arguments117['else'] = NULL;
$arguments117['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array119 = array();
$array120 = array (
);$array119['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isLast', $array120);

$expression121 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments117['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression121(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array119)
					),
					$renderingContext
				);
$arguments117['then'] = 'active';
$arguments114['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments122 = array();
$arguments122['then'] = NULL;
$arguments122['else'] = NULL;
$arguments122['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array124 = array();
$array125 = array (
);$array124['0'] = $renderingContext->getVariableProvider()->getByPath('configuration.description', $array125);

$expression126 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments122['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression126(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array124)
					),
					$renderingContext
				);
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments127 = array();
$arguments127['id'] = NULL;
$arguments127['value'] = NULL;
$arguments127['arguments'] = array (
);
$arguments127['source'] = 'Main';
$arguments127['package'] = NULL;
$arguments127['quantity'] = NULL;
$arguments127['locale'] = NULL;
$array129 = array (
);$arguments127['id'] = $renderingContext->getVariableProvider()->getByPath('configuration.description', $array129);
$arguments122['then'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);
$arguments114['title'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);
// Rendering Array
$array130 = array();
$array130['data-neos-toggle'] = 'tooltip';
$array130['data-placement'] = 'bottom';
$arguments114['additionalAttributes'] = $array130;

$output113 .= Neos\Neos\ViewHelpers\Link\ModuleViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output113 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
return '<span class="neos-divider">/</span>';
};
$arguments141 = array();
$arguments141['if'] = NULL;
return '';
};
$arguments136 = array();
$arguments136['then'] = NULL;
$arguments136['else'] = NULL;
$arguments136['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array138 = array();
$array139 = array (
);$array138['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isLast', $array139);

$expression140 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments136['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression140(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array138)
					),
					$renderingContext
				);
$arguments136['__elseClosures'][] = function() use ($renderingContext, $self) {
return '<span class="neos-divider">/</span>';
};

$output113 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output113 .= '
							</li>
						';
return $output113;
};

$output110 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output110 .= '
				';
return $output110;
};
$arguments107 = array();
$arguments107['each'] = NULL;
$arguments107['as'] = NULL;
$arguments107['key'] = NULL;
$arguments107['reverse'] = false;
$arguments107['iteration'] = NULL;
$array109 = array (
);$arguments107['each'] = $renderingContext->getVariableProvider()->getByPath('moduleBreadcrumb', $array109);
$arguments107['key'] = 'path';
$arguments107['as'] = 'configuration';
$arguments107['iteration'] = 'iterator';

$output105 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output105 .= '
			</ul>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$output184 = '';

$output184 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
$array187 = array (
);return $renderingContext->getVariableProvider()->getByPath('moduleContents', $array187);
};
$arguments185 = array();
$arguments185['value'] = NULL;

$output184 .= isset($arguments185['value']) ? $arguments185['value'] : $renderChildrenClosure186();

$output184 .= '
			';
return $output184;
};
$arguments179 = array();
$arguments179['then'] = NULL;
$arguments179['else'] = NULL;
$arguments179['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array181 = array();
$array182 = array (
);$array181['0'] = $renderingContext->getVariableProvider()->getByPath('moduleContents', $array182);

$expression183 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments179['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression183(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array181)
					),
					$renderingContext
				);
$arguments179['__thenClosure'] = $renderChildrenClosure180;

$output105 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output105 .= '
			<div id="neos-application" class="neos">
				<div id="neos-top-bar">
					<div id="neos-top-bar-right">
						<div id="neos-user-actions">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments188 = array();
$arguments188['section'] = NULL;
$arguments188['partial'] = NULL;
$arguments188['delegate'] = NULL;
$arguments188['renderable'] = NULL;
$arguments188['arguments'] = array (
);
$arguments188['optional'] = false;
$arguments188['default'] = NULL;
$arguments188['contentAs'] = NULL;
$arguments188['partial'] = 'Backend/UserMenu';
$arguments188['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output105 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output105 .= '
						</div>
					</div>
				</div>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['section'] = NULL;
$arguments191['partial'] = NULL;
$arguments191['delegate'] = NULL;
$arguments191['renderable'] = NULL;
$arguments191['arguments'] = array (
);
$arguments191['optional'] = false;
$arguments191['default'] = NULL;
$arguments191['contentAs'] = NULL;
$arguments191['partial'] = 'Backend/Menu';
// Rendering Array
$array193 = array();
$array194 = array (
);$array193['sites'] = $renderingContext->getVariableProvider()->getByPath('sites', $array194);
$array195 = array (
);$array193['modules'] = $renderingContext->getVariableProvider()->getByPath('modules', $array195);
$array196 = array (
);$array193['modulePath'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration.path', $array196);
$arguments191['arguments'] = $array193;

$output105 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output105 .= '
			</div>
		</div>
		<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments197 = array();
$arguments197['path'] = NULL;
$arguments197['package'] = NULL;
$arguments197['resource'] = NULL;
$arguments197['localize'] = true;
$arguments197['path'] = '2/js/bootstrap.min.js';
$arguments197['package'] = 'Neos.Twitter.Bootstrap';

$output105 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext)]);

$output105 .= '"></script>
		<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments199 = array();
$arguments199['path'] = NULL;
$arguments199['package'] = NULL;
$arguments199['resource'] = NULL;
$arguments199['localize'] = true;
$arguments199['path'] = 'Library/fixedsticky/fixedsticky.js';
$arguments199['package'] = 'Neos.Neos';

$output105 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext)]);

$output105 .= '"></script>

		<script type="text/javascript">
			(function($) {
				$(function() {
					$(\'.neos-footer\').fixedsticky();
				});
			})(jQuery);
		</script>

		<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments201 = array();
$arguments201['path'] = NULL;
$arguments201['package'] = NULL;
$arguments201['resource'] = NULL;
$arguments201['localize'] = true;
$arguments201['path'] = 'Library/requirejs/require.js';
$arguments201['package'] = 'Neos.Neos';

$output105 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext)]);

$output105 .= '"></script>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
$output217 = '';

$output217 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
$output220 = '';

$output220 .= '
				<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments221 = array();
$arguments221['path'] = NULL;
$arguments221['package'] = NULL;
$arguments221['resource'] = NULL;
$arguments221['localize'] = true;
$arguments221['path'] = 'JavaScript/ContentModule-built.js';
$arguments221['package'] = 'Neos.Neos';

$output220 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext)]);

$output220 .= '?bust=';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\JavascriptBuiltVersionViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments223 = array();

$output220 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\JavascriptBuiltVersionViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext)]);

$output220 .= '"></script>
			';
return $output220;
};
$arguments218 = array();

$output217 .= '';

$output217 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
$output227 = '';

$output227 .= '
				<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments228 = array();
$arguments228['path'] = NULL;
$arguments228['package'] = NULL;
$arguments228['resource'] = NULL;
$arguments228['localize'] = true;
$arguments228['path'] = 'JavaScript/ContentModuleBootstrap.js';
$arguments228['package'] = 'Neos.Neos';

$output227 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext)]);

$output227 .= '"></script>
			';
return $output227;
};
$arguments225 = array();
$arguments225['if'] = NULL;

$output217 .= '';

$output217 .= '
		';
return $output217;
};
$arguments203 = array();
$arguments203['then'] = NULL;
$arguments203['else'] = NULL;
$arguments203['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array213 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\ShouldLoadMinifiedJavascriptViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments214 = array();
$array213['0'] = Neos\Neos\ViewHelpers\Backend\ShouldLoadMinifiedJavascriptViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$expression216 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments203['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression216(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array213)
					),
					$renderingContext
				);
$arguments203['__thenClosure'] = function() use ($renderingContext, $self) {
$output205 = '';

$output205 .= '
				<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments206 = array();
$arguments206['path'] = NULL;
$arguments206['package'] = NULL;
$arguments206['resource'] = NULL;
$arguments206['localize'] = true;
$arguments206['path'] = 'JavaScript/ContentModule-built.js';
$arguments206['package'] = 'Neos.Neos';

$output205 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext)]);

$output205 .= '?bust=';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\JavascriptBuiltVersionViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments208 = array();

$output205 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\JavascriptBuiltVersionViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext)]);

$output205 .= '"></script>
			';
return $output205;
};
$arguments203['__elseClosures'][] = function() use ($renderingContext, $self) {
$output210 = '';

$output210 .= '
				<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments211 = array();
$arguments211['path'] = NULL;
$arguments211['package'] = NULL;
$arguments211['resource'] = NULL;
$arguments211['localize'] = true;
$arguments211['path'] = 'JavaScript/ContentModuleBootstrap.js';
$arguments211['package'] = 'Neos.Neos';

$output210 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext)]);

$output210 .= '"></script>
			';
return $output210;
};

$output105 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output105 .= '

		<script>
			$(function() {
				require(
					';
$output230 = '';

$output230 .= '{
						baseUrl: \'';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments231 = array();
$arguments231['path'] = NULL;
$arguments231['package'] = NULL;
$arguments231['resource'] = NULL;
$arguments231['localize'] = true;
$arguments231['path'] = 'JavaScript';

$output230 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output230 .= '\',
						paths: requirePaths,
						context: \'neos\',
						locale: \'en\'
					}';

$output105 .= $output230;

$output105 .= ',
					[
						\'Library/jquery-with-dependencies\'
					],
					function($) {
						$(\'[data-neos-toggle="popover"]\').popover();
						$(\'[data-neos-toggle="tooltip"]\').tooltip();
					}
				)
			});
		</script>
	</body>
';

return $output105;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output233 = '';

$output233 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments234 = array();
$arguments234['name'] = NULL;
$arguments234['name'] = 'Default';

$output233 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output233 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
$output238 = '';

$output238 .= '
	<title>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments239 = array();
$arguments239['id'] = NULL;
$arguments239['value'] = NULL;
$arguments239['arguments'] = array (
);
$arguments239['source'] = 'Main';
$arguments239['package'] = NULL;
$arguments239['quantity'] = NULL;
$arguments239['locale'] = NULL;
$array241 = array (
);$arguments239['id'] = $renderingContext->getVariableProvider()->getByPath('title', $array241);

$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext)]);

$output238 .= '</title>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
$output256 = '';

$output256 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
$output259 = '';

$output259 .= '
			<link rel="stylesheet" type="text/css"
				  href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments260 = array();
$arguments260['path'] = NULL;
$arguments260['package'] = NULL;
$arguments260['resource'] = NULL;
$arguments260['localize'] = true;
$arguments260['path'] = 'Styles/Includes-built.css';
$arguments260['package'] = 'Neos.Neos';

$output259 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext)]);

$output259 .= '?bust=';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\CssBuiltVersionViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments262 = array();

$output259 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\CssBuiltVersionViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext)]);

$output259 .= '"/>
		';
return $output259;
};
$arguments257 = array();

$output256 .= '';

$output256 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
$output266 = '';

$output266 .= '
			<link rel="stylesheet" type="text/css"
				  href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments267 = array();
$arguments267['path'] = NULL;
$arguments267['package'] = NULL;
$arguments267['resource'] = NULL;
$arguments267['localize'] = true;
$arguments267['path'] = 'Styles/Includes.css';
$arguments267['package'] = 'Neos.Neos';

$output266 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext)]);

$output266 .= '"/>
		';
return $output266;
};
$arguments264 = array();
$arguments264['if'] = NULL;

$output256 .= '';

$output256 .= '
	';
return $output256;
};
$arguments242 = array();
$arguments242['then'] = NULL;
$arguments242['else'] = NULL;
$arguments242['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array252 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\ShouldLoadMinifiedJavascriptViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments253 = array();
$array252['0'] = Neos\Neos\ViewHelpers\Backend\ShouldLoadMinifiedJavascriptViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);

$expression255 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments242['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression255(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array252)
					),
					$renderingContext
				);
$arguments242['__thenClosure'] = function() use ($renderingContext, $self) {
$output244 = '';

$output244 .= '
			<link rel="stylesheet" type="text/css"
				  href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments245 = array();
$arguments245['path'] = NULL;
$arguments245['package'] = NULL;
$arguments245['resource'] = NULL;
$arguments245['localize'] = true;
$arguments245['path'] = 'Styles/Includes-built.css';
$arguments245['package'] = 'Neos.Neos';

$output244 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext)]);

$output244 .= '?bust=';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\CssBuiltVersionViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments247 = array();

$output244 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\CssBuiltVersionViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext)]);

$output244 .= '"/>
		';
return $output244;
};
$arguments242['__elseClosures'][] = function() use ($renderingContext, $self) {
$output249 = '';

$output249 .= '
			<link rel="stylesheet" type="text/css"
				  href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments250 = array();
$arguments250['path'] = NULL;
$arguments250['package'] = NULL;
$arguments250['resource'] = NULL;
$arguments250['localize'] = true;
$arguments250['path'] = 'Styles/Includes.css';
$arguments250['package'] = 'Neos.Neos';

$output249 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext)]);

$output249 .= '"/>
		';
return $output249;
};

$output238 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);

$output238 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$output274 = '';

$output274 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
$output278 = '';

$output278 .= '
			<link rel="stylesheet" href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments279 = array();
$arguments279['path'] = NULL;
$arguments279['package'] = NULL;
$arguments279['resource'] = NULL;
$arguments279['localize'] = true;
$array281 = array (
);$arguments279['path'] = $renderingContext->getVariableProvider()->getByPath('additionalResource', $array281);

$output278 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments279, $renderChildrenClosure280, $renderingContext)]);

$output278 .= '" />
		';
return $output278;
};
$arguments275 = array();
$arguments275['each'] = NULL;
$arguments275['as'] = NULL;
$arguments275['key'] = NULL;
$arguments275['reverse'] = false;
$arguments275['iteration'] = NULL;
$array277 = array (
);$arguments275['each'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration.additionalResources.styleSheets', $array277);
$arguments275['as'] = 'additionalResource';

$output274 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output274 .= '
	';
return $output274;
};
$arguments269 = array();
$arguments269['then'] = NULL;
$arguments269['else'] = NULL;
$arguments269['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array271 = array();
$array272 = array (
);$array271['0'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration.additionalResources.styleSheets', $array272);

$expression273 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments269['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression273(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array271)
					),
					$renderingContext
				);
$arguments269['__thenClosure'] = $renderChildrenClosure270;

$output238 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output238 .= '

	<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments282 = array();
$arguments282['path'] = NULL;
$arguments282['package'] = NULL;
$arguments282['resource'] = NULL;
$arguments282['localize'] = true;
$arguments282['path'] = 'Library/jquery/jquery-2.0.3.js';

$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext)]);

$output238 .= '"></script>
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
$output289 = '';

$output289 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
$output293 = '';

$output293 .= '
			<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments294 = array();
$arguments294['path'] = NULL;
$arguments294['package'] = NULL;
$arguments294['resource'] = NULL;
$arguments294['localize'] = true;
$array296 = array (
);$arguments294['path'] = $renderingContext->getVariableProvider()->getByPath('additionalResource', $array296);

$output293 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext)]);

$output293 .= '"></script>
		';
return $output293;
};
$arguments290 = array();
$arguments290['each'] = NULL;
$arguments290['as'] = NULL;
$arguments290['key'] = NULL;
$arguments290['reverse'] = false;
$arguments290['iteration'] = NULL;
$array292 = array (
);$arguments290['each'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration.additionalResources.javaScripts', $array292);
$arguments290['as'] = 'additionalResource';

$output289 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments290, $renderChildrenClosure291, $renderingContext);

$output289 .= '
	';
return $output289;
};
$arguments284 = array();
$arguments284['then'] = NULL;
$arguments284['else'] = NULL;
$arguments284['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array286 = array();
$array287 = array (
);$array286['0'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration.additionalResources.javaScripts', $array287);

$expression288 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments284['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression288(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array286)
					),
					$renderingContext
				);
$arguments284['__thenClosure'] = $renderChildrenClosure285;

$output238 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments284, $renderChildrenClosure285, $renderingContext);

$output238 .= '

	<script type="text/javascript">
		// TODO: Get rid of those global variables
		';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\JavascriptConfigurationViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments297 = array();

$output238 .= Neos\Neos\ViewHelpers\Backend\JavascriptConfigurationViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext);

$output238 .= '
	</script>

	<link rel="neos-menudata" href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments299 = array();
$arguments299['action'] = NULL;
$arguments299['arguments'] = array (
);
$arguments299['controller'] = NULL;
$arguments299['package'] = NULL;
$arguments299['subpackage'] = NULL;
$arguments299['section'] = '';
$arguments299['format'] = '';
$arguments299['additionalParams'] = array (
);
$arguments299['absolute'] = false;
$arguments299['addQueryString'] = false;
$arguments299['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments299['useParentRequest'] = false;
$arguments299['useMainRequest'] = false;
$arguments299['action'] = 'index';
$arguments299['controller'] = 'Backend\\Menu';
$arguments299['package'] = 'Neos.Neos';
// Rendering Boolean node
// Rendering Array
$array301 = array();
$array302 = array (
);$array301['0'] = $renderingContext->getVariableProvider()->getByPath('true', $array302);

$expression303 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments299['absolute'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression303(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array301)
					),
					$renderingContext
				);
// Rendering Array
$array304 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\ConfigurationCacheVersionViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments305 = array();
$array304['version'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\ConfigurationCacheVersionViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext)]);
$arguments299['arguments'] = $array304;

$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext)]);

$output238 .= '" />
	<!-- TODO: Make sure the schema information and edit / preview panel data isn\'t necessary in backend modules -->
	<link rel="neos-vieschema" href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments307 = array();
$arguments307['action'] = NULL;
$arguments307['arguments'] = array (
);
$arguments307['controller'] = NULL;
$arguments307['package'] = NULL;
$arguments307['subpackage'] = NULL;
$arguments307['section'] = '';
$arguments307['format'] = '';
$arguments307['additionalParams'] = array (
);
$arguments307['absolute'] = false;
$arguments307['addQueryString'] = false;
$arguments307['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments307['useParentRequest'] = false;
$arguments307['useMainRequest'] = false;
$arguments307['action'] = 'vieSchema';
$arguments307['controller'] = 'Backend\\Schema';
$arguments307['package'] = 'Neos.Neos';
// Rendering Boolean node
// Rendering Array
$array309 = array();
$array310 = array (
);$array309['0'] = $renderingContext->getVariableProvider()->getByPath('true', $array310);

$expression311 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments307['absolute'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression311(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array309)
					),
					$renderingContext
				);
// Rendering Array
$array312 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\ConfigurationCacheVersionViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments313 = array();
$array312['version'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\ConfigurationCacheVersionViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext)]);
$arguments307['arguments'] = $array312;

$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext)]);

$output238 .= '" />
	<link rel="neos-nodetypeschema" href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments315 = array();
$arguments315['action'] = NULL;
$arguments315['arguments'] = array (
);
$arguments315['controller'] = NULL;
$arguments315['package'] = NULL;
$arguments315['subpackage'] = NULL;
$arguments315['section'] = '';
$arguments315['format'] = '';
$arguments315['additionalParams'] = array (
);
$arguments315['absolute'] = false;
$arguments315['addQueryString'] = false;
$arguments315['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments315['useParentRequest'] = false;
$arguments315['useMainRequest'] = false;
$arguments315['action'] = 'nodeTypeSchema';
$arguments315['controller'] = 'Backend\\Schema';
$arguments315['package'] = 'Neos.Neos';
// Rendering Boolean node
// Rendering Array
$array317 = array();
$array318 = array (
);$array317['0'] = $renderingContext->getVariableProvider()->getByPath('true', $array318);

$expression319 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments315['absolute'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression319(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array317)
					),
					$renderingContext
				);
// Rendering Array
$array320 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\ConfigurationCacheVersionViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments321 = array();
$array320['version'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\ConfigurationCacheVersionViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext)]);
$arguments315['arguments'] = $array320;

$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext)]);

$output238 .= '" />
	<link rel="neos-editpreviewdata" href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments323 = array();
$arguments323['action'] = NULL;
$arguments323['arguments'] = array (
);
$arguments323['controller'] = NULL;
$arguments323['package'] = NULL;
$arguments323['subpackage'] = NULL;
$arguments323['section'] = '';
$arguments323['format'] = '';
$arguments323['additionalParams'] = array (
);
$arguments323['absolute'] = false;
$arguments323['addQueryString'] = false;
$arguments323['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments323['useParentRequest'] = false;
$arguments323['useMainRequest'] = false;
$arguments323['action'] = 'editPreview';
$arguments323['controller'] = 'Backend\\Settings';
$arguments323['package'] = 'Neos.Neos';
// Rendering Boolean node
// Rendering Array
$array325 = array();
$array326 = array (
);$array325['0'] = $renderingContext->getVariableProvider()->getByPath('true', $array326);

$expression327 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments323['absolute'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression327(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array325)
					),
					$renderingContext
				);
// Rendering Array
$array328 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\ConfigurationCacheVersionViewHelper
$renderChildrenClosure330 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments329 = array();
$array328['version'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\ConfigurationCacheVersionViewHelper::renderStatic($arguments329, $renderChildrenClosure330, $renderingContext)]);
$arguments323['arguments'] = $array328;

$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext)]);

$output238 .= '" />
	<link rel="neos-xliff" href="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure334 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments333 = array();
$arguments333['action'] = NULL;
$arguments333['arguments'] = array (
);
$arguments333['controller'] = NULL;
$arguments333['package'] = NULL;
$arguments333['subpackage'] = NULL;
$arguments333['section'] = '';
$arguments333['format'] = '';
$arguments333['additionalParams'] = array (
);
$arguments333['absolute'] = false;
$arguments333['addQueryString'] = false;
$arguments333['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments333['useParentRequest'] = false;
$arguments333['useMainRequest'] = false;
$arguments333['action'] = 'xliffAsJson';
// Rendering Array
$array335 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\InterfaceLanguageViewHelper
$renderChildrenClosure337 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments336 = array();
$array335['locale'] = Neos\Neos\ViewHelpers\Backend\InterfaceLanguageViewHelper::renderStatic($arguments336, $renderChildrenClosure337, $renderingContext);
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\XliffCacheVersionViewHelper
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments338 = array();
$array335['version'] = Neos\Neos\ViewHelpers\Backend\XliffCacheVersionViewHelper::renderStatic($arguments338, $renderChildrenClosure339, $renderingContext);
$arguments333['arguments'] = $array335;
$arguments333['controller'] = 'Backend\\Backend';
$arguments333['package'] = 'Neos.Neos';
// Rendering Boolean node
// Rendering Array
$array340 = array();
$array341 = array (
);$array340['0'] = $renderingContext->getVariableProvider()->getByPath('true', $array341);

$expression342 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments333['absolute'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression342(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array340)
					),
					$renderingContext
				);
return Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments333, $renderChildrenClosure334, $renderingContext);
};
$arguments331 = array();
$arguments331['value'] = NULL;

$output238 .= isset($arguments331['value']) ? $arguments331['value'] : $renderChildrenClosure332();

$output238 .= '" />
';
return $output238;
};
$arguments236 = array();
$arguments236['name'] = NULL;
$arguments236['name'] = 'head';

$output233 .= NULL;

$output233 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure344 = function() use ($renderingContext, $self) {
$output345 = '';

$output345 .= '
	<body class="neos neos-module neos-controls neos-module-';
$array346 = array (
);
$output345 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleClass', $array346)]);

$output345 .= '">
		<div class="neos-module-wrap">
			<ul class="neos-breadcrumb">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
$output350 = '';

$output350 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
$output386 = '';

$output386 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure388 = function() use ($renderingContext, $self) {
$output389 = '';

$output389 .= '
							<li>
								';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\ModuleViewHelper
$renderChildrenClosure391 = function() use ($renderingContext, $self) {
$output407 = '';

$output407 .= '<i class="';
$array408 = array (
);
$output407 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('configuration.icon', $array408)]);

$output407 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure410 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments409 = array();
$arguments409['id'] = NULL;
$arguments409['value'] = NULL;
$arguments409['arguments'] = array (
);
$arguments409['source'] = 'Main';
$arguments409['package'] = NULL;
$arguments409['quantity'] = NULL;
$arguments409['locale'] = NULL;
$arguments409['source'] = 'Modules';
$array411 = array (
);$arguments409['id'] = $renderingContext->getVariableProvider()->getByPath('configuration.label', $array411);

$output407 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments409, $renderChildrenClosure410, $renderingContext)]);
return $output407;
};
$arguments390 = array();
$arguments390['additionalAttributes'] = NULL;
$arguments390['data'] = NULL;
$arguments390['path'] = NULL;
$arguments390['action'] = NULL;
$arguments390['arguments'] = array (
);
$arguments390['section'] = '';
$arguments390['format'] = '';
$arguments390['additionalParams'] = array (
);
$arguments390['addQueryString'] = false;
$arguments390['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments390['class'] = NULL;
$arguments390['dir'] = NULL;
$arguments390['id'] = NULL;
$arguments390['lang'] = NULL;
$arguments390['style'] = NULL;
$arguments390['title'] = NULL;
$arguments390['accesskey'] = NULL;
$arguments390['tabindex'] = NULL;
$arguments390['onclick'] = NULL;
$arguments390['name'] = NULL;
$arguments390['rel'] = NULL;
$arguments390['rev'] = NULL;
$arguments390['target'] = NULL;
$array392 = array (
);$arguments390['path'] = $renderingContext->getVariableProvider()->getByPath('path', $array392);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure394 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments393 = array();
$arguments393['then'] = NULL;
$arguments393['else'] = NULL;
$arguments393['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array395 = array();
$array396 = array (
);$array395['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isLast', $array396);

$expression397 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments393['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression397(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array395)
					),
					$renderingContext
				);
$arguments393['then'] = 'active';
$arguments390['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments393, $renderChildrenClosure394, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure399 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments398 = array();
$arguments398['then'] = NULL;
$arguments398['else'] = NULL;
$arguments398['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array400 = array();
$array401 = array (
);$array400['0'] = $renderingContext->getVariableProvider()->getByPath('configuration.description', $array401);

$expression402 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments398['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression402(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array400)
					),
					$renderingContext
				);
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure404 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments403 = array();
$arguments403['id'] = NULL;
$arguments403['value'] = NULL;
$arguments403['arguments'] = array (
);
$arguments403['source'] = 'Main';
$arguments403['package'] = NULL;
$arguments403['quantity'] = NULL;
$arguments403['locale'] = NULL;
$array405 = array (
);$arguments403['id'] = $renderingContext->getVariableProvider()->getByPath('configuration.description', $array405);
$arguments398['then'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments403, $renderChildrenClosure404, $renderingContext);
$arguments390['title'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments398, $renderChildrenClosure399, $renderingContext);
// Rendering Array
$array406 = array();
$array406['data-neos-toggle'] = 'tooltip';
$array406['data-placement'] = 'bottom';
$arguments390['additionalAttributes'] = $array406;

$output389 .= Neos\Neos\ViewHelpers\Link\ModuleViewHelper::renderStatic($arguments390, $renderChildrenClosure391, $renderingContext);

$output389 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure418 = function() use ($renderingContext, $self) {
return '<span class="neos-divider">/</span>';
};
$arguments417 = array();
$arguments417['if'] = NULL;
return '';
};
$arguments412 = array();
$arguments412['then'] = NULL;
$arguments412['else'] = NULL;
$arguments412['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array414 = array();
$array415 = array (
);$array414['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isLast', $array415);

$expression416 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments412['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression416(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array414)
					),
					$renderingContext
				);
$arguments412['__elseClosures'][] = function() use ($renderingContext, $self) {
return '<span class="neos-divider">/</span>';
};

$output389 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments412, $renderChildrenClosure413, $renderingContext);

$output389 .= '
							</li>
						';
return $output389;
};
$arguments387 = array();
$arguments387['if'] = NULL;

$output386 .= '';

$output386 .= '
					';
return $output386;
};
$arguments351 = array();
$arguments351['then'] = NULL;
$arguments351['else'] = NULL;
$arguments351['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array383 = array();
$array384 = array (
);$array383['0'] = $renderingContext->getVariableProvider()->getByPath('configuration.hideInMenu', $array384);

$expression385 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments351['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression385(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array383)
					),
					$renderingContext
				);
$arguments351['__elseClosures'][] = function() use ($renderingContext, $self) {
$output353 = '';

$output353 .= '
							<li>
								';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\ModuleViewHelper
$renderChildrenClosure355 = function() use ($renderingContext, $self) {
$output371 = '';

$output371 .= '<i class="';
$array372 = array (
);
$output371 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('configuration.icon', $array372)]);

$output371 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments373 = array();
$arguments373['id'] = NULL;
$arguments373['value'] = NULL;
$arguments373['arguments'] = array (
);
$arguments373['source'] = 'Main';
$arguments373['package'] = NULL;
$arguments373['quantity'] = NULL;
$arguments373['locale'] = NULL;
$arguments373['source'] = 'Modules';
$array375 = array (
);$arguments373['id'] = $renderingContext->getVariableProvider()->getByPath('configuration.label', $array375);

$output371 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext)]);
return $output371;
};
$arguments354 = array();
$arguments354['additionalAttributes'] = NULL;
$arguments354['data'] = NULL;
$arguments354['path'] = NULL;
$arguments354['action'] = NULL;
$arguments354['arguments'] = array (
);
$arguments354['section'] = '';
$arguments354['format'] = '';
$arguments354['additionalParams'] = array (
);
$arguments354['addQueryString'] = false;
$arguments354['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments354['class'] = NULL;
$arguments354['dir'] = NULL;
$arguments354['id'] = NULL;
$arguments354['lang'] = NULL;
$arguments354['style'] = NULL;
$arguments354['title'] = NULL;
$arguments354['accesskey'] = NULL;
$arguments354['tabindex'] = NULL;
$arguments354['onclick'] = NULL;
$arguments354['name'] = NULL;
$arguments354['rel'] = NULL;
$arguments354['rev'] = NULL;
$arguments354['target'] = NULL;
$array356 = array (
);$arguments354['path'] = $renderingContext->getVariableProvider()->getByPath('path', $array356);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments357 = array();
$arguments357['then'] = NULL;
$arguments357['else'] = NULL;
$arguments357['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array359 = array();
$array360 = array (
);$array359['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isLast', $array360);

$expression361 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments357['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression361(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array359)
					),
					$renderingContext
				);
$arguments357['then'] = 'active';
$arguments354['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments362 = array();
$arguments362['then'] = NULL;
$arguments362['else'] = NULL;
$arguments362['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array364 = array();
$array365 = array (
);$array364['0'] = $renderingContext->getVariableProvider()->getByPath('configuration.description', $array365);

$expression366 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments362['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression366(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array364)
					),
					$renderingContext
				);
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure368 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments367 = array();
$arguments367['id'] = NULL;
$arguments367['value'] = NULL;
$arguments367['arguments'] = array (
);
$arguments367['source'] = 'Main';
$arguments367['package'] = NULL;
$arguments367['quantity'] = NULL;
$arguments367['locale'] = NULL;
$array369 = array (
);$arguments367['id'] = $renderingContext->getVariableProvider()->getByPath('configuration.description', $array369);
$arguments362['then'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments367, $renderChildrenClosure368, $renderingContext);
$arguments354['title'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments362, $renderChildrenClosure363, $renderingContext);
// Rendering Array
$array370 = array();
$array370['data-neos-toggle'] = 'tooltip';
$array370['data-placement'] = 'bottom';
$arguments354['additionalAttributes'] = $array370;

$output353 .= Neos\Neos\ViewHelpers\Link\ModuleViewHelper::renderStatic($arguments354, $renderChildrenClosure355, $renderingContext);

$output353 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure382 = function() use ($renderingContext, $self) {
return '<span class="neos-divider">/</span>';
};
$arguments381 = array();
$arguments381['if'] = NULL;
return '';
};
$arguments376 = array();
$arguments376['then'] = NULL;
$arguments376['else'] = NULL;
$arguments376['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array378 = array();
$array379 = array (
);$array378['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isLast', $array379);

$expression380 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments376['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression380(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array378)
					),
					$renderingContext
				);
$arguments376['__elseClosures'][] = function() use ($renderingContext, $self) {
return '<span class="neos-divider">/</span>';
};

$output353 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments376, $renderChildrenClosure377, $renderingContext);

$output353 .= '
							</li>
						';
return $output353;
};

$output350 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext);

$output350 .= '
				';
return $output350;
};
$arguments347 = array();
$arguments347['each'] = NULL;
$arguments347['as'] = NULL;
$arguments347['key'] = NULL;
$arguments347['reverse'] = false;
$arguments347['iteration'] = NULL;
$array349 = array (
);$arguments347['each'] = $renderingContext->getVariableProvider()->getByPath('moduleBreadcrumb', $array349);
$arguments347['key'] = 'path';
$arguments347['as'] = 'configuration';
$arguments347['iteration'] = 'iterator';

$output345 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments347, $renderChildrenClosure348, $renderingContext);

$output345 .= '
			</ul>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure420 = function() use ($renderingContext, $self) {
$output424 = '';

$output424 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure426 = function() use ($renderingContext, $self) {
$array427 = array (
);return $renderingContext->getVariableProvider()->getByPath('moduleContents', $array427);
};
$arguments425 = array();
$arguments425['value'] = NULL;

$output424 .= isset($arguments425['value']) ? $arguments425['value'] : $renderChildrenClosure426();

$output424 .= '
			';
return $output424;
};
$arguments419 = array();
$arguments419['then'] = NULL;
$arguments419['else'] = NULL;
$arguments419['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array421 = array();
$array422 = array (
);$array421['0'] = $renderingContext->getVariableProvider()->getByPath('moduleContents', $array422);

$expression423 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments419['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression423(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array421)
					),
					$renderingContext
				);
$arguments419['__thenClosure'] = $renderChildrenClosure420;

$output345 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments419, $renderChildrenClosure420, $renderingContext);

$output345 .= '
			<div id="neos-application" class="neos">
				<div id="neos-top-bar">
					<div id="neos-top-bar-right">
						<div id="neos-user-actions">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure429 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments428 = array();
$arguments428['section'] = NULL;
$arguments428['partial'] = NULL;
$arguments428['delegate'] = NULL;
$arguments428['renderable'] = NULL;
$arguments428['arguments'] = array (
);
$arguments428['optional'] = false;
$arguments428['default'] = NULL;
$arguments428['contentAs'] = NULL;
$arguments428['partial'] = 'Backend/UserMenu';
$arguments428['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output345 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments428, $renderChildrenClosure429, $renderingContext);

$output345 .= '
						</div>
					</div>
				</div>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure432 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments431 = array();
$arguments431['section'] = NULL;
$arguments431['partial'] = NULL;
$arguments431['delegate'] = NULL;
$arguments431['renderable'] = NULL;
$arguments431['arguments'] = array (
);
$arguments431['optional'] = false;
$arguments431['default'] = NULL;
$arguments431['contentAs'] = NULL;
$arguments431['partial'] = 'Backend/Menu';
// Rendering Array
$array433 = array();
$array434 = array (
);$array433['sites'] = $renderingContext->getVariableProvider()->getByPath('sites', $array434);
$array435 = array (
);$array433['modules'] = $renderingContext->getVariableProvider()->getByPath('modules', $array435);
$array436 = array (
);$array433['modulePath'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration.path', $array436);
$arguments431['arguments'] = $array433;

$output345 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments431, $renderChildrenClosure432, $renderingContext);

$output345 .= '
			</div>
		</div>
		<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure438 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments437 = array();
$arguments437['path'] = NULL;
$arguments437['package'] = NULL;
$arguments437['resource'] = NULL;
$arguments437['localize'] = true;
$arguments437['path'] = '2/js/bootstrap.min.js';
$arguments437['package'] = 'Neos.Twitter.Bootstrap';

$output345 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments437, $renderChildrenClosure438, $renderingContext)]);

$output345 .= '"></script>
		<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments439 = array();
$arguments439['path'] = NULL;
$arguments439['package'] = NULL;
$arguments439['resource'] = NULL;
$arguments439['localize'] = true;
$arguments439['path'] = 'Library/fixedsticky/fixedsticky.js';
$arguments439['package'] = 'Neos.Neos';

$output345 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext)]);

$output345 .= '"></script>

		<script type="text/javascript">
			(function($) {
				$(function() {
					$(\'.neos-footer\').fixedsticky();
				});
			})(jQuery);
		</script>

		<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure442 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments441 = array();
$arguments441['path'] = NULL;
$arguments441['package'] = NULL;
$arguments441['resource'] = NULL;
$arguments441['localize'] = true;
$arguments441['path'] = 'Library/requirejs/require.js';
$arguments441['package'] = 'Neos.Neos';

$output345 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments441, $renderChildrenClosure442, $renderingContext)]);

$output345 .= '"></script>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure444 = function() use ($renderingContext, $self) {
$output457 = '';

$output457 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure459 = function() use ($renderingContext, $self) {
$output460 = '';

$output460 .= '
				<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure462 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments461 = array();
$arguments461['path'] = NULL;
$arguments461['package'] = NULL;
$arguments461['resource'] = NULL;
$arguments461['localize'] = true;
$arguments461['path'] = 'JavaScript/ContentModule-built.js';
$arguments461['package'] = 'Neos.Neos';

$output460 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments461, $renderChildrenClosure462, $renderingContext)]);

$output460 .= '?bust=';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\JavascriptBuiltVersionViewHelper
$renderChildrenClosure464 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments463 = array();

$output460 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\JavascriptBuiltVersionViewHelper::renderStatic($arguments463, $renderChildrenClosure464, $renderingContext)]);

$output460 .= '"></script>
			';
return $output460;
};
$arguments458 = array();

$output457 .= '';

$output457 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure466 = function() use ($renderingContext, $self) {
$output467 = '';

$output467 .= '
				<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure469 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments468 = array();
$arguments468['path'] = NULL;
$arguments468['package'] = NULL;
$arguments468['resource'] = NULL;
$arguments468['localize'] = true;
$arguments468['path'] = 'JavaScript/ContentModuleBootstrap.js';
$arguments468['package'] = 'Neos.Neos';

$output467 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments468, $renderChildrenClosure469, $renderingContext)]);

$output467 .= '"></script>
			';
return $output467;
};
$arguments465 = array();
$arguments465['if'] = NULL;

$output457 .= '';

$output457 .= '
		';
return $output457;
};
$arguments443 = array();
$arguments443['then'] = NULL;
$arguments443['else'] = NULL;
$arguments443['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array453 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\ShouldLoadMinifiedJavascriptViewHelper
$renderChildrenClosure455 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments454 = array();
$array453['0'] = Neos\Neos\ViewHelpers\Backend\ShouldLoadMinifiedJavascriptViewHelper::renderStatic($arguments454, $renderChildrenClosure455, $renderingContext);

$expression456 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments443['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression456(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array453)
					),
					$renderingContext
				);
$arguments443['__thenClosure'] = function() use ($renderingContext, $self) {
$output445 = '';

$output445 .= '
				<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure447 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments446 = array();
$arguments446['path'] = NULL;
$arguments446['package'] = NULL;
$arguments446['resource'] = NULL;
$arguments446['localize'] = true;
$arguments446['path'] = 'JavaScript/ContentModule-built.js';
$arguments446['package'] = 'Neos.Neos';

$output445 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments446, $renderChildrenClosure447, $renderingContext)]);

$output445 .= '?bust=';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\JavascriptBuiltVersionViewHelper
$renderChildrenClosure449 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments448 = array();

$output445 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\JavascriptBuiltVersionViewHelper::renderStatic($arguments448, $renderChildrenClosure449, $renderingContext)]);

$output445 .= '"></script>
			';
return $output445;
};
$arguments443['__elseClosures'][] = function() use ($renderingContext, $self) {
$output450 = '';

$output450 .= '
				<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure452 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments451 = array();
$arguments451['path'] = NULL;
$arguments451['package'] = NULL;
$arguments451['resource'] = NULL;
$arguments451['localize'] = true;
$arguments451['path'] = 'JavaScript/ContentModuleBootstrap.js';
$arguments451['package'] = 'Neos.Neos';

$output450 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments451, $renderChildrenClosure452, $renderingContext)]);

$output450 .= '"></script>
			';
return $output450;
};

$output345 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments443, $renderChildrenClosure444, $renderingContext);

$output345 .= '

		<script>
			$(function() {
				require(
					';
$output470 = '';

$output470 .= '{
						baseUrl: \'';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure472 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments471 = array();
$arguments471['path'] = NULL;
$arguments471['package'] = NULL;
$arguments471['resource'] = NULL;
$arguments471['localize'] = true;
$arguments471['path'] = 'JavaScript';

$output470 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments471, $renderChildrenClosure472, $renderingContext);

$output470 .= '\',
						paths: requirePaths,
						context: \'neos\',
						locale: \'en\'
					}';

$output345 .= $output470;

$output345 .= ',
					[
						\'Library/jquery-with-dependencies\'
					],
					function($) {
						$(\'[data-neos-toggle="popover"]\').popover();
						$(\'[data-neos-toggle="tooltip"]\').tooltip();
					}
				)
			});
		</script>
	</body>
';
return $output345;
};
$arguments343 = array();
$arguments343['name'] = NULL;
$arguments343['name'] = 'body';

$output233 .= NULL;

$output233 .= '
';

return $output233;
}


}
#0             121883    