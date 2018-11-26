<?php 
class Login_action_index_da93119a88c052de1a1541bba1ba886cc908daac extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
return 'Login to';
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
$arguments1['id'] = 'login.index.title';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= ' ';
$array3 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.name', $array3)]);

$output0 .= '</title>
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
		<link rel="stylesheet" href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['path'] = NULL;
$arguments8['package'] = NULL;
$arguments8['resource'] = NULL;
$arguments8['localize'] = true;
$array10 = array (
);$arguments8['path'] = $renderingContext->getVariableProvider()->getByPath('style', $array10);

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output7 .= '" />
	';
return $output7;
};
$arguments4 = array();
$arguments4['each'] = NULL;
$arguments4['as'] = NULL;
$arguments4['key'] = NULL;
$arguments4['reverse'] = false;
$arguments4['iteration'] = NULL;
$array6 = array (
);$arguments4['each'] = $renderingContext->getVariableProvider()->getByPath('styles', $array6);
$arguments4['as'] = 'style';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
		<style type="text/css">
			.neos-login-box:before {
				background-image: url(';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['path'] = NULL;
$arguments17['package'] = NULL;
$arguments17['resource'] = NULL;
$arguments17['localize'] = true;
$array19 = array (
);$arguments17['path'] = $renderingContext->getVariableProvider()->getByPath('settings.userInterface.backendLoginForm.backgroundImage', $array19);

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output16 .= ');
			}
		</style>
	';
return $output16;
};
$arguments11 = array();
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['0'] = $renderingContext->getVariableProvider()->getByPath('settings.userInterface.backendLoginForm.backgroundImage', $array14);

$expression15 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)
					),
					$renderingContext
				);
$arguments11['__thenClosure'] = $renderChildrenClosure12;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output0 .= '
	<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['path'] = NULL;
$arguments20['package'] = NULL;
$arguments20['resource'] = NULL;
$arguments20['localize'] = true;
$arguments20['path'] = 'Library/jquery/jquery-2.0.3.js';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output0 .= '"></script>
	<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['path'] = NULL;
$arguments22['package'] = NULL;
$arguments22['resource'] = NULL;
$arguments22['localize'] = true;
$arguments22['path'] = 'Library/jquery-ui/js/jquery-ui-1.10.4.custom.js';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext)]);

$output0 .= '"></script>
';

return $output0;
}
/**
 * section body
 */
public function section_02083f4579e08a612425c0c1a17ee47add783b94(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output24 = '';

$output24 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
			<body class="neos" style="background-image:url(';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['path'] = NULL;
$arguments38['package'] = NULL;
$arguments38['resource'] = NULL;
$arguments38['localize'] = true;
$array40 = array (
);$arguments38['path'] = $renderingContext->getVariableProvider()->getByPath('settings.userInterface.backendLoginForm.backgroundImage', $array40);

$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);

$output37 .= ');">
		';
return $output37;
};
$arguments35 = array();

$output34 .= '';

$output34 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return '
			<body class="neos">
		';
};
$arguments41 = array();
$arguments41['if'] = NULL;

$output34 .= '';

$output34 .= '
	';
return $output34;
};
$arguments25 = array();
$arguments25['then'] = NULL;
$arguments25['else'] = NULL;
$arguments25['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array31 = array();
$array32 = array (
);$array31['0'] = $renderingContext->getVariableProvider()->getByPath('settings.userInterface.backendLoginForm.backgroundImage', $array32);

$expression33 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments25['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression33(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)
					),
					$renderingContext
				);
$arguments25['__thenClosure'] = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
			<body class="neos" style="background-image:url(';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['path'] = NULL;
$arguments28['package'] = NULL;
$arguments28['resource'] = NULL;
$arguments28['localize'] = true;
$array30 = array (
);$arguments28['path'] = $renderingContext->getVariableProvider()->getByPath('settings.userInterface.backendLoginForm.backgroundImage', $array30);

$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output27 .= ');">
		';
return $output27;
};
$arguments25['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
			<body class="neos">
		';
};

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
		<div class="neos-modal-centered">
			<main class="neos-login-main">
				<div class="neos-login-box ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['then'] = NULL;
$arguments43['else'] = NULL;
$arguments43['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array45 = array();
$array46 = array (
);$array45['0'] = $renderingContext->getVariableProvider()->getByPath('settings.userInterface.backendLoginForm.backgroundImage', $array46);

$expression47 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments43['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression47(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array45)
					),
					$renderingContext
				);
$arguments43['then'] = 'background-image-active';

$output24 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output24 .= '">
					<figure class="neos-login-box-logo">
						<img class="neos-login-box-logo-resource" src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['path'] = NULL;
$arguments48['package'] = NULL;
$arguments48['resource'] = NULL;
$arguments48['localize'] = true;
$arguments48['path'] = 'Images/Login/Logo.svg';

$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext)]);

$output24 .= '" width="200px" height="200px" alt="Neos Logo" />
					</figure>

					<h1 class="neos-login-heading">
						';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return 'Login to';
};
$arguments50 = array();
$arguments50['id'] = NULL;
$arguments50['value'] = NULL;
$arguments50['arguments'] = array (
);
$arguments50['source'] = 'Main';
$arguments50['package'] = NULL;
$arguments50['quantity'] = NULL;
$arguments50['locale'] = NULL;
$arguments50['id'] = 'login.index.title';

$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output24 .= '
						<strong>';
$array52 = array (
);
$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.name', $array52)]);

$output24 .= '</strong>
					</h1>
					<div class="neos-login-body neos">
						';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
							';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['additionalAttributes'] = NULL;
$arguments56['data'] = NULL;
$arguments56['name'] = NULL;
$arguments56['value'] = NULL;
$arguments56['property'] = NULL;
$arguments56['class'] = NULL;
$arguments56['dir'] = NULL;
$arguments56['id'] = NULL;
$arguments56['lang'] = NULL;
$arguments56['style'] = NULL;
$arguments56['title'] = NULL;
$arguments56['accesskey'] = NULL;
$arguments56['tabindex'] = NULL;
$arguments56['onclick'] = NULL;
$arguments56['name'] = 'lastVisitedNode';

$output55 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
							<fieldset>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output103 = '';

$output103 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
										<div class="neos-controls">
											';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['additionalAttributes'] = NULL;
$arguments107['data'] = NULL;
$arguments107['name'] = NULL;
$arguments107['value'] = NULL;
$arguments107['property'] = NULL;
$arguments107['disabled'] = false;
$arguments107['required'] = false;
$arguments107['maxlength'] = NULL;
$arguments107['readonly'] = NULL;
$arguments107['size'] = NULL;
$arguments107['placeholder'] = NULL;
$arguments107['autofocus'] = NULL;
$arguments107['type'] = 'text';
$arguments107['errorClass'] = 'f3-form-error';
$arguments107['class'] = NULL;
$arguments107['dir'] = NULL;
$arguments107['id'] = NULL;
$arguments107['lang'] = NULL;
$arguments107['style'] = NULL;
$arguments107['title'] = NULL;
$arguments107['accesskey'] = NULL;
$arguments107['tabindex'] = NULL;
$arguments107['onclick'] = NULL;
// Rendering Boolean node
// Rendering Array
$array109 = array();
$array109['0'] = 'required';

$expression110 = function($context) {return "required";};
$arguments107['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression110(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array109)
					),
					$renderingContext
				);
$arguments107['id'] = 'username';
$arguments107['type'] = 'text';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments111 = array();
$arguments111['id'] = NULL;
$arguments111['value'] = NULL;
$arguments111['arguments'] = array (
);
$arguments111['source'] = 'Main';
$arguments111['package'] = NULL;
$arguments111['quantity'] = NULL;
$arguments111['locale'] = NULL;
$arguments111['id'] = 'username';
$arguments111['value'] = 'Username';
$arguments107['placeholder'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);
$arguments107['class'] = 'neos-span12';
$arguments107['name'] = '__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][username]';
// Rendering Array
$array113 = array();
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
$arguments114['id'] = 'username';
$arguments114['value'] = 'Username';
$array113['aria-label'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);
$arguments107['additionalAttributes'] = $array113;
$array116 = array (
);$arguments107['value'] = $renderingContext->getVariableProvider()->getByPath('username', $array116);

$output106 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '
										</div>
										<div class="neos-controls">
											';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['additionalAttributes'] = NULL;
$arguments117['data'] = NULL;
$arguments117['name'] = NULL;
$arguments117['value'] = NULL;
$arguments117['property'] = NULL;
$arguments117['disabled'] = false;
$arguments117['required'] = false;
$arguments117['maxlength'] = NULL;
$arguments117['readonly'] = NULL;
$arguments117['size'] = NULL;
$arguments117['placeholder'] = NULL;
$arguments117['autofocus'] = NULL;
$arguments117['type'] = 'text';
$arguments117['errorClass'] = 'f3-form-error';
$arguments117['class'] = NULL;
$arguments117['dir'] = NULL;
$arguments117['id'] = NULL;
$arguments117['lang'] = NULL;
$arguments117['style'] = NULL;
$arguments117['title'] = NULL;
$arguments117['accesskey'] = NULL;
$arguments117['tabindex'] = NULL;
$arguments117['onclick'] = NULL;
// Rendering Boolean node
// Rendering Array
$array119 = array();
$array119['0'] = 'required';

$expression120 = function($context) {return "required";};
$arguments117['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression120(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array119)
					),
					$renderingContext
				);
$arguments117['id'] = 'password';
$arguments117['type'] = 'password';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments121 = array();
$arguments121['id'] = NULL;
$arguments121['value'] = NULL;
$arguments121['arguments'] = array (
);
$arguments121['source'] = 'Main';
$arguments121['package'] = NULL;
$arguments121['quantity'] = NULL;
$arguments121['locale'] = NULL;
$arguments121['id'] = 'password';
$arguments121['value'] = 'Password';
$arguments117['placeholder'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);
$arguments117['class'] = 'neos-span12';
$arguments117['name'] = '__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][password]';
// Rendering Array
$array123 = array();
$array123['autofocus'] = 'autofocus';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments124 = array();
$arguments124['id'] = NULL;
$arguments124['value'] = NULL;
$arguments124['arguments'] = array (
);
$arguments124['source'] = 'Main';
$arguments124['package'] = NULL;
$arguments124['quantity'] = NULL;
$arguments124['locale'] = NULL;
$arguments124['id'] = 'password';
$arguments124['value'] = 'Password';
$array123['aria-label'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);
$arguments117['additionalAttributes'] = $array123;

$output106 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output106 .= '
										</div>
									';
return $output106;
};
$arguments104 = array();

$output103 .= '';

$output103 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$output128 = '';

$output128 .= '
										<div class="neos-controls">
											';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments129 = array();
$arguments129['additionalAttributes'] = NULL;
$arguments129['data'] = NULL;
$arguments129['name'] = NULL;
$arguments129['value'] = NULL;
$arguments129['property'] = NULL;
$arguments129['disabled'] = false;
$arguments129['required'] = false;
$arguments129['maxlength'] = NULL;
$arguments129['readonly'] = NULL;
$arguments129['size'] = NULL;
$arguments129['placeholder'] = NULL;
$arguments129['autofocus'] = NULL;
$arguments129['type'] = 'text';
$arguments129['errorClass'] = 'f3-form-error';
$arguments129['class'] = NULL;
$arguments129['dir'] = NULL;
$arguments129['id'] = NULL;
$arguments129['lang'] = NULL;
$arguments129['style'] = NULL;
$arguments129['title'] = NULL;
$arguments129['accesskey'] = NULL;
$arguments129['tabindex'] = NULL;
$arguments129['onclick'] = NULL;
// Rendering Boolean node
// Rendering Array
$array131 = array();
$array131['0'] = 'required';

$expression132 = function($context) {return "required";};
$arguments129['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression132(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array131)
					),
					$renderingContext
				);
$arguments129['id'] = 'username';
$arguments129['type'] = 'text';
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
$arguments133['id'] = 'username';
$arguments133['value'] = 'Username';
$arguments129['placeholder'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);
$arguments129['class'] = 'neos-span12';
$arguments129['name'] = '__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][username]';
// Rendering Array
$array135 = array();
$array135['autofocus'] = 'autofocus';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments136 = array();
$arguments136['id'] = NULL;
$arguments136['value'] = NULL;
$arguments136['arguments'] = array (
);
$arguments136['source'] = 'Main';
$arguments136['package'] = NULL;
$arguments136['quantity'] = NULL;
$arguments136['locale'] = NULL;
$arguments136['id'] = 'username';
$arguments136['value'] = 'Username';
$array135['aria-label'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);
$arguments129['additionalAttributes'] = $array135;
$array138 = array (
);$arguments129['value'] = $renderingContext->getVariableProvider()->getByPath('username', $array138);

$output128 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output128 .= '
										</div>
										<div class="neos-controls">
											';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['additionalAttributes'] = NULL;
$arguments139['data'] = NULL;
$arguments139['name'] = NULL;
$arguments139['value'] = NULL;
$arguments139['property'] = NULL;
$arguments139['disabled'] = false;
$arguments139['required'] = false;
$arguments139['maxlength'] = NULL;
$arguments139['readonly'] = NULL;
$arguments139['size'] = NULL;
$arguments139['placeholder'] = NULL;
$arguments139['autofocus'] = NULL;
$arguments139['type'] = 'text';
$arguments139['errorClass'] = 'f3-form-error';
$arguments139['class'] = NULL;
$arguments139['dir'] = NULL;
$arguments139['id'] = NULL;
$arguments139['lang'] = NULL;
$arguments139['style'] = NULL;
$arguments139['title'] = NULL;
$arguments139['accesskey'] = NULL;
$arguments139['tabindex'] = NULL;
$arguments139['onclick'] = NULL;
// Rendering Boolean node
// Rendering Array
$array141 = array();
$array141['0'] = 'required';

$expression142 = function($context) {return "required";};
$arguments139['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression142(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array141)
					),
					$renderingContext
				);
$arguments139['id'] = 'password';
$arguments139['type'] = 'password';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments143 = array();
$arguments143['id'] = NULL;
$arguments143['value'] = NULL;
$arguments143['arguments'] = array (
);
$arguments143['source'] = 'Main';
$arguments143['package'] = NULL;
$arguments143['quantity'] = NULL;
$arguments143['locale'] = NULL;
$arguments143['id'] = 'password';
$arguments143['value'] = 'Password';
$arguments139['placeholder'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);
$arguments139['class'] = 'neos-span12';
$arguments139['name'] = '__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][password]';
// Rendering Array
$array145 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['id'] = NULL;
$arguments146['value'] = NULL;
$arguments146['arguments'] = array (
);
$arguments146['source'] = 'Main';
$arguments146['package'] = NULL;
$arguments146['quantity'] = NULL;
$arguments146['locale'] = NULL;
$arguments146['id'] = 'password';
$arguments146['value'] = 'Password';
$array145['aria-label'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);
$arguments139['additionalAttributes'] = $array145;

$output128 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output128 .= '
										</div>
									';
return $output128;
};
$arguments126 = array();
$arguments126['if'] = NULL;

$output103 .= '';

$output103 .= '
								';
return $output103;
};
$arguments58 = array();
$arguments58['then'] = NULL;
$arguments58['else'] = NULL;
$arguments58['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array100 = array();
$array101 = array (
);$array100['0'] = $renderingContext->getVariableProvider()->getByPath('username', $array101);

$expression102 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments58['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression102(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array100)
					),
					$renderingContext
				);
$arguments58['__thenClosure'] = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '
										<div class="neos-controls">
											';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['additionalAttributes'] = NULL;
$arguments61['data'] = NULL;
$arguments61['name'] = NULL;
$arguments61['value'] = NULL;
$arguments61['property'] = NULL;
$arguments61['disabled'] = false;
$arguments61['required'] = false;
$arguments61['maxlength'] = NULL;
$arguments61['readonly'] = NULL;
$arguments61['size'] = NULL;
$arguments61['placeholder'] = NULL;
$arguments61['autofocus'] = NULL;
$arguments61['type'] = 'text';
$arguments61['errorClass'] = 'f3-form-error';
$arguments61['class'] = NULL;
$arguments61['dir'] = NULL;
$arguments61['id'] = NULL;
$arguments61['lang'] = NULL;
$arguments61['style'] = NULL;
$arguments61['title'] = NULL;
$arguments61['accesskey'] = NULL;
$arguments61['tabindex'] = NULL;
$arguments61['onclick'] = NULL;
// Rendering Boolean node
// Rendering Array
$array63 = array();
$array63['0'] = 'required';

$expression64 = function($context) {return "required";};
$arguments61['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression64(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array63)
					),
					$renderingContext
				);
$arguments61['id'] = 'username';
$arguments61['type'] = 'text';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['id'] = NULL;
$arguments65['value'] = NULL;
$arguments65['arguments'] = array (
);
$arguments65['source'] = 'Main';
$arguments65['package'] = NULL;
$arguments65['quantity'] = NULL;
$arguments65['locale'] = NULL;
$arguments65['id'] = 'username';
$arguments65['value'] = 'Username';
$arguments61['placeholder'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);
$arguments61['class'] = 'neos-span12';
$arguments61['name'] = '__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][username]';
// Rendering Array
$array67 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['id'] = NULL;
$arguments68['value'] = NULL;
$arguments68['arguments'] = array (
);
$arguments68['source'] = 'Main';
$arguments68['package'] = NULL;
$arguments68['quantity'] = NULL;
$arguments68['locale'] = NULL;
$arguments68['id'] = 'username';
$arguments68['value'] = 'Username';
$array67['aria-label'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);
$arguments61['additionalAttributes'] = $array67;
$array70 = array (
);$arguments61['value'] = $renderingContext->getVariableProvider()->getByPath('username', $array70);

$output60 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
										</div>
										<div class="neos-controls">
											';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['additionalAttributes'] = NULL;
$arguments71['data'] = NULL;
$arguments71['name'] = NULL;
$arguments71['value'] = NULL;
$arguments71['property'] = NULL;
$arguments71['disabled'] = false;
$arguments71['required'] = false;
$arguments71['maxlength'] = NULL;
$arguments71['readonly'] = NULL;
$arguments71['size'] = NULL;
$arguments71['placeholder'] = NULL;
$arguments71['autofocus'] = NULL;
$arguments71['type'] = 'text';
$arguments71['errorClass'] = 'f3-form-error';
$arguments71['class'] = NULL;
$arguments71['dir'] = NULL;
$arguments71['id'] = NULL;
$arguments71['lang'] = NULL;
$arguments71['style'] = NULL;
$arguments71['title'] = NULL;
$arguments71['accesskey'] = NULL;
$arguments71['tabindex'] = NULL;
$arguments71['onclick'] = NULL;
// Rendering Boolean node
// Rendering Array
$array73 = array();
$array73['0'] = 'required';

$expression74 = function($context) {return "required";};
$arguments71['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression74(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array73)
					),
					$renderingContext
				);
$arguments71['id'] = 'password';
$arguments71['type'] = 'password';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['id'] = NULL;
$arguments75['value'] = NULL;
$arguments75['arguments'] = array (
);
$arguments75['source'] = 'Main';
$arguments75['package'] = NULL;
$arguments75['quantity'] = NULL;
$arguments75['locale'] = NULL;
$arguments75['id'] = 'password';
$arguments75['value'] = 'Password';
$arguments71['placeholder'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);
$arguments71['class'] = 'neos-span12';
$arguments71['name'] = '__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][password]';
// Rendering Array
$array77 = array();
$array77['autofocus'] = 'autofocus';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['id'] = NULL;
$arguments78['value'] = NULL;
$arguments78['arguments'] = array (
);
$arguments78['source'] = 'Main';
$arguments78['package'] = NULL;
$arguments78['quantity'] = NULL;
$arguments78['locale'] = NULL;
$arguments78['id'] = 'password';
$arguments78['value'] = 'Password';
$array77['aria-label'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);
$arguments71['additionalAttributes'] = $array77;

$output60 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output60 .= '
										</div>
									';
return $output60;
};
$arguments58['__elseClosures'][] = function() use ($renderingContext, $self) {
$output80 = '';

$output80 .= '
										<div class="neos-controls">
											';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments81 = array();
$arguments81['additionalAttributes'] = NULL;
$arguments81['data'] = NULL;
$arguments81['name'] = NULL;
$arguments81['value'] = NULL;
$arguments81['property'] = NULL;
$arguments81['disabled'] = false;
$arguments81['required'] = false;
$arguments81['maxlength'] = NULL;
$arguments81['readonly'] = NULL;
$arguments81['size'] = NULL;
$arguments81['placeholder'] = NULL;
$arguments81['autofocus'] = NULL;
$arguments81['type'] = 'text';
$arguments81['errorClass'] = 'f3-form-error';
$arguments81['class'] = NULL;
$arguments81['dir'] = NULL;
$arguments81['id'] = NULL;
$arguments81['lang'] = NULL;
$arguments81['style'] = NULL;
$arguments81['title'] = NULL;
$arguments81['accesskey'] = NULL;
$arguments81['tabindex'] = NULL;
$arguments81['onclick'] = NULL;
// Rendering Boolean node
// Rendering Array
$array83 = array();
$array83['0'] = 'required';

$expression84 = function($context) {return "required";};
$arguments81['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression84(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array83)
					),
					$renderingContext
				);
$arguments81['id'] = 'username';
$arguments81['type'] = 'text';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['id'] = NULL;
$arguments85['value'] = NULL;
$arguments85['arguments'] = array (
);
$arguments85['source'] = 'Main';
$arguments85['package'] = NULL;
$arguments85['quantity'] = NULL;
$arguments85['locale'] = NULL;
$arguments85['id'] = 'username';
$arguments85['value'] = 'Username';
$arguments81['placeholder'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);
$arguments81['class'] = 'neos-span12';
$arguments81['name'] = '__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][username]';
// Rendering Array
$array87 = array();
$array87['autofocus'] = 'autofocus';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['id'] = NULL;
$arguments88['value'] = NULL;
$arguments88['arguments'] = array (
);
$arguments88['source'] = 'Main';
$arguments88['package'] = NULL;
$arguments88['quantity'] = NULL;
$arguments88['locale'] = NULL;
$arguments88['id'] = 'username';
$arguments88['value'] = 'Username';
$array87['aria-label'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);
$arguments81['additionalAttributes'] = $array87;
$array90 = array (
);$arguments81['value'] = $renderingContext->getVariableProvider()->getByPath('username', $array90);

$output80 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output80 .= '
										</div>
										<div class="neos-controls">
											';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['additionalAttributes'] = NULL;
$arguments91['data'] = NULL;
$arguments91['name'] = NULL;
$arguments91['value'] = NULL;
$arguments91['property'] = NULL;
$arguments91['disabled'] = false;
$arguments91['required'] = false;
$arguments91['maxlength'] = NULL;
$arguments91['readonly'] = NULL;
$arguments91['size'] = NULL;
$arguments91['placeholder'] = NULL;
$arguments91['autofocus'] = NULL;
$arguments91['type'] = 'text';
$arguments91['errorClass'] = 'f3-form-error';
$arguments91['class'] = NULL;
$arguments91['dir'] = NULL;
$arguments91['id'] = NULL;
$arguments91['lang'] = NULL;
$arguments91['style'] = NULL;
$arguments91['title'] = NULL;
$arguments91['accesskey'] = NULL;
$arguments91['tabindex'] = NULL;
$arguments91['onclick'] = NULL;
// Rendering Boolean node
// Rendering Array
$array93 = array();
$array93['0'] = 'required';

$expression94 = function($context) {return "required";};
$arguments91['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression94(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)
					),
					$renderingContext
				);
$arguments91['id'] = 'password';
$arguments91['type'] = 'password';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['id'] = NULL;
$arguments95['value'] = NULL;
$arguments95['arguments'] = array (
);
$arguments95['source'] = 'Main';
$arguments95['package'] = NULL;
$arguments95['quantity'] = NULL;
$arguments95['locale'] = NULL;
$arguments95['id'] = 'password';
$arguments95['value'] = 'Password';
$arguments91['placeholder'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);
$arguments91['class'] = 'neos-span12';
$arguments91['name'] = '__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][password]';
// Rendering Array
$array97 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments98 = array();
$arguments98['id'] = NULL;
$arguments98['value'] = NULL;
$arguments98['arguments'] = array (
);
$arguments98['source'] = 'Main';
$arguments98['package'] = NULL;
$arguments98['quantity'] = NULL;
$arguments98['locale'] = NULL;
$arguments98['id'] = 'password';
$arguments98['value'] = 'Password';
$array97['aria-label'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);
$arguments91['additionalAttributes'] = $array97;

$output80 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output80 .= '
										</div>
									';
return $output80;
};

$output55 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output55 .= '
								<div class="neos-actions">
									<!-- Forgot password link will be here -->
									';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$output150 = '';

$output150 .= '
										';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments151 = array();
$arguments151['id'] = NULL;
$arguments151['value'] = NULL;
$arguments151['arguments'] = array (
);
$arguments151['source'] = 'Main';
$arguments151['package'] = NULL;
$arguments151['quantity'] = NULL;
$arguments151['locale'] = NULL;
$arguments151['id'] = 'login';
$arguments151['value'] = 'Login';

$output150 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext)]);

$output150 .= '
									';
return $output150;
};
$arguments148 = array();
$arguments148['additionalAttributes'] = NULL;
$arguments148['data'] = NULL;
$arguments148['name'] = NULL;
$arguments148['value'] = NULL;
$arguments148['property'] = NULL;
$arguments148['autofocus'] = NULL;
$arguments148['disabled'] = false;
$arguments148['form'] = NULL;
$arguments148['formaction'] = NULL;
$arguments148['formenctype'] = NULL;
$arguments148['formmethod'] = NULL;
$arguments148['formnovalidate'] = NULL;
$arguments148['formtarget'] = NULL;
$arguments148['type'] = 'submit';
$arguments148['class'] = NULL;
$arguments148['dir'] = NULL;
$arguments148['id'] = NULL;
$arguments148['lang'] = NULL;
$arguments148['style'] = NULL;
$arguments148['title'] = NULL;
$arguments148['accesskey'] = NULL;
$arguments148['tabindex'] = NULL;
$arguments148['onclick'] = NULL;
$arguments148['type'] = 'submit';
$arguments148['class'] = 'neos-span5 neos-pull-right neos-button neos-login-btn';

$output55 .= Neos\FluidAdaptor\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output55 .= '
									<button class="neos-span5 neos-pull-right neos-button neos-login-btn neos-disabled neos-hidden">
										';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['id'] = NULL;
$arguments153['value'] = NULL;
$arguments153['arguments'] = array (
);
$arguments153['source'] = 'Main';
$arguments153['package'] = NULL;
$arguments153['quantity'] = NULL;
$arguments153['locale'] = NULL;
$arguments153['id'] = 'authenticating';
$arguments153['value'] = 'Authenticating';

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext)]);

$output55 .= '
										<span class="neos-ellipsis"></span>
									</button>
									';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$output157 = '';

$output157 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$output161 = '';

$output161 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
return '
												<div class="neos-tooltip neos-bottom neos-in neos-tooltip-success">
											';
};
$arguments162 = array();
$arguments162['then'] = NULL;
$arguments162['else'] = NULL;
$arguments162['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array164 = array();
$array165 = array (
);$array164['0'] = $renderingContext->getVariableProvider()->getByPath('flashMessage.severity', $array165);
$array164['1'] = ' === \'OK\'';

$expression166 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'OK');};
$arguments162['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression166(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array164)
					),
					$renderingContext
				);
$arguments162['__thenClosure'] = $renderChildrenClosure163;

$output161 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output161 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return '
												<div class="neos-tooltip neos-bottom neos-in neos-tooltip-notice">
											';
};
$arguments167 = array();
$arguments167['then'] = NULL;
$arguments167['else'] = NULL;
$arguments167['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array169 = array();
$array170 = array (
);$array169['0'] = $renderingContext->getVariableProvider()->getByPath('flashMessage.severity', $array170);
$array169['1'] = ' === \'Notice\'';

$expression171 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Notice');};
$arguments167['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression171(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array169)
					),
					$renderingContext
				);
$arguments167['__thenClosure'] = $renderChildrenClosure168;

$output161 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output161 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
return '
												<div class="neos-tooltip neos-bottom neos-in neos-tooltip-warning">
											';
};
$arguments172 = array();
$arguments172['then'] = NULL;
$arguments172['else'] = NULL;
$arguments172['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array174 = array();
$array175 = array (
);$array174['0'] = $renderingContext->getVariableProvider()->getByPath('flashMessage.severity', $array175);
$array174['1'] = ' === \'Warning\'';

$expression176 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Warning');};
$arguments172['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression176(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array174)
					),
					$renderingContext
				);
$arguments172['__thenClosure'] = $renderChildrenClosure173;

$output161 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output161 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$output182 = '';

$output182 .= '
												<script>
													$(function () {
														$(\'fieldset\').effect(\'shake\', ';

$output182 .= '{times: 1}';

$output182 .= ', 60);
													});
												</script>
												<div class="neos-tooltip neos-bottom neos-in neos-tooltip-error">
											';
return $output182;
};
$arguments177 = array();
$arguments177['then'] = NULL;
$arguments177['else'] = NULL;
$arguments177['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array179 = array();
$array180 = array (
);$array179['0'] = $renderingContext->getVariableProvider()->getByPath('flashMessage.severity', $array180);
$array179['1'] = ' === \'Error\'';

$expression181 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Error');};
$arguments177['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression181(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array179)
					),
					$renderingContext
				);
$arguments177['__thenClosure'] = $renderChildrenClosure178;

$output161 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output161 .= '
											<div class="neos-tooltip-arrow"></div>
											<div class="neos-tooltip-inner" role="alert">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments183 = array();
$arguments183['id'] = NULL;
$arguments183['value'] = NULL;
$arguments183['arguments'] = array (
);
$arguments183['source'] = 'Main';
$arguments183['package'] = NULL;
$arguments183['quantity'] = NULL;
$arguments183['locale'] = NULL;
$output185 = '';

$output185 .= 'flashMessage.';
$array186 = array (
);
$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('flashMessage.code', $array186)]);
$arguments183['id'] = $output185;
$arguments183['package'] = 'Neos.Neos';
$array187 = array (
);$arguments183['value'] = $renderingContext->getVariableProvider()->getByPath('flashMessage', $array187);

$output161 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext)]);

$output161 .= '
											</div>
										';
return $output161;
};
$arguments158 = array();
$arguments158['each'] = NULL;
$arguments158['as'] = NULL;
$arguments158['key'] = NULL;
$arguments158['reverse'] = false;
$arguments158['iteration'] = NULL;
$array160 = array (
);$arguments158['each'] = $renderingContext->getVariableProvider()->getByPath('flashMessages', $array160);
$arguments158['as'] = 'flashMessage';

$output157 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output157 .= '
									';
return $output157;
};
$arguments155 = array();
$arguments155['additionalAttributes'] = NULL;
$arguments155['data'] = NULL;
$arguments155['class'] = NULL;
$arguments155['dir'] = NULL;
$arguments155['id'] = NULL;
$arguments155['lang'] = NULL;
$arguments155['style'] = NULL;
$arguments155['title'] = NULL;
$arguments155['accesskey'] = NULL;
$arguments155['tabindex'] = NULL;
$arguments155['onclick'] = NULL;
$arguments155['as'] = NULL;
$arguments155['severity'] = NULL;
$arguments155['as'] = 'flashMessages';

$output55 .= Neos\FluidAdaptor\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output55 .= '
								</div>
							</fieldset>
						';
return $output55;
};
$arguments53 = array();
$arguments53['additionalAttributes'] = NULL;
$arguments53['data'] = NULL;
$arguments53['enctype'] = NULL;
$arguments53['method'] = NULL;
$arguments53['name'] = NULL;
$arguments53['onreset'] = NULL;
$arguments53['onsubmit'] = NULL;
$arguments53['action'] = NULL;
$arguments53['arguments'] = array (
);
$arguments53['controller'] = NULL;
$arguments53['package'] = NULL;
$arguments53['subpackage'] = NULL;
$arguments53['object'] = NULL;
$arguments53['section'] = '';
$arguments53['format'] = '';
$arguments53['additionalParams'] = array (
);
$arguments53['absolute'] = false;
$arguments53['addQueryString'] = false;
$arguments53['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments53['fieldNamePrefix'] = NULL;
$arguments53['actionUri'] = NULL;
$arguments53['objectName'] = NULL;
$arguments53['useParentRequest'] = false;
$arguments53['class'] = NULL;
$arguments53['dir'] = NULL;
$arguments53['id'] = NULL;
$arguments53['lang'] = NULL;
$arguments53['style'] = NULL;
$arguments53['title'] = NULL;
$arguments53['accesskey'] = NULL;
$arguments53['tabindex'] = NULL;
$arguments53['onclick'] = NULL;
$arguments53['name'] = 'login';
$arguments53['action'] = 'authenticate';

$output24 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output24 .= '
					</div>
				</div>
			</main>
			<footer class="neos-login-footer">
				<p>
					<a href="http://neos.io" target="_blank">Neos</a> –
					© 2006-';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments188 = array();
$arguments188['forceLocale'] = NULL;
$arguments188['date'] = NULL;
$arguments188['format'] = 'Y-m-d';
$arguments188['localeFormatType'] = NULL;
$arguments188['localeFormatLength'] = NULL;
$arguments188['cldrFormat'] = NULL;
$arguments188['date'] = 'now';
$arguments188['format'] = 'Y';

$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Format\DateViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext)]);

$output24 .= ' This is free software, licensed under GPL3 or higher, and you are welcome to redistribute it under certain conditions;
					Neos comes with ABSOLUTELY NO WARRANTY;
					See <a href="http://neos.io" target="_blank">neos.io</a> for more details. Obstructing the appearance of this notice is prohibited by law.
				</p>
			</footer>
		</div>

		<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments190 = array();
$arguments190['path'] = NULL;
$arguments190['package'] = NULL;
$arguments190['resource'] = NULL;
$arguments190['localize'] = true;
$arguments190['path'] = '2/js/bootstrap.min.js';
$arguments190['package'] = 'Neos.Twitter.Bootstrap';

$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext)]);

$output24 .= '"></script>
		<script>
			if ($(\'#username\').val()) {
				$(\'#password\').focus();
			}
			$(\'form\').on(\'submit\', function() {
				$(\'.neos-login-btn\').toggleClass(\'neos-hidden\');
			});
			try {
				$(\'form[name="login"] input[name="lastVisitedNode"]\').val(sessionStorage.getItem(\'Neos.Neos.lastVisitedNode\'));
			} catch(e) {}
		</script>
	</body>
';

return $output24;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output192 = '';

$output192 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments193 = array();
$arguments193['name'] = NULL;
$arguments193['name'] = 'Default';

$output192 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output192 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$output197 = '';

$output197 .= '
	<title>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
return 'Login to';
};
$arguments198 = array();
$arguments198['id'] = NULL;
$arguments198['value'] = NULL;
$arguments198['arguments'] = array (
);
$arguments198['source'] = 'Main';
$arguments198['package'] = NULL;
$arguments198['quantity'] = NULL;
$arguments198['locale'] = NULL;
$arguments198['id'] = 'login.index.title';

$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext)]);

$output197 .= ' ';
$array200 = array (
);
$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.name', $array200)]);

$output197 .= '</title>
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$output204 = '';

$output204 .= '
		<link rel="stylesheet" href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments205 = array();
$arguments205['path'] = NULL;
$arguments205['package'] = NULL;
$arguments205['resource'] = NULL;
$arguments205['localize'] = true;
$array207 = array (
);$arguments205['path'] = $renderingContext->getVariableProvider()->getByPath('style', $array207);

$output204 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext)]);

$output204 .= '" />
	';
return $output204;
};
$arguments201 = array();
$arguments201['each'] = NULL;
$arguments201['as'] = NULL;
$arguments201['key'] = NULL;
$arguments201['reverse'] = false;
$arguments201['iteration'] = NULL;
$array203 = array (
);$arguments201['each'] = $renderingContext->getVariableProvider()->getByPath('styles', $array203);
$arguments201['as'] = 'style';

$output197 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output197 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$output213 = '';

$output213 .= '
		<style type="text/css">
			.neos-login-box:before {
				background-image: url(';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments214 = array();
$arguments214['path'] = NULL;
$arguments214['package'] = NULL;
$arguments214['resource'] = NULL;
$arguments214['localize'] = true;
$array216 = array (
);$arguments214['path'] = $renderingContext->getVariableProvider()->getByPath('settings.userInterface.backendLoginForm.backgroundImage', $array216);

$output213 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext)]);

$output213 .= ');
			}
		</style>
	';
return $output213;
};
$arguments208 = array();
$arguments208['then'] = NULL;
$arguments208['else'] = NULL;
$arguments208['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array210 = array();
$array211 = array (
);$array210['0'] = $renderingContext->getVariableProvider()->getByPath('settings.userInterface.backendLoginForm.backgroundImage', $array211);

$expression212 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments208['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression212(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array210)
					),
					$renderingContext
				);
$arguments208['__thenClosure'] = $renderChildrenClosure209;

$output197 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output197 .= '
	<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['path'] = NULL;
$arguments217['package'] = NULL;
$arguments217['resource'] = NULL;
$arguments217['localize'] = true;
$arguments217['path'] = 'Library/jquery/jquery-2.0.3.js';

$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext)]);

$output197 .= '"></script>
	<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments219 = array();
$arguments219['path'] = NULL;
$arguments219['package'] = NULL;
$arguments219['resource'] = NULL;
$arguments219['localize'] = true;
$arguments219['path'] = 'Library/jquery-ui/js/jquery-ui-1.10.4.custom.js';

$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext)]);

$output197 .= '"></script>
';
return $output197;
};
$arguments195 = array();
$arguments195['name'] = NULL;
$arguments195['name'] = 'head';

$output192 .= NULL;

$output192 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
$output223 = '';

$output223 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$output233 = '';

$output233 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$output236 = '';

$output236 .= '
			<body class="neos" style="background-image:url(';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments237 = array();
$arguments237['path'] = NULL;
$arguments237['package'] = NULL;
$arguments237['resource'] = NULL;
$arguments237['localize'] = true;
$array239 = array (
);$arguments237['path'] = $renderingContext->getVariableProvider()->getByPath('settings.userInterface.backendLoginForm.backgroundImage', $array239);

$output236 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext)]);

$output236 .= ');">
		';
return $output236;
};
$arguments234 = array();

$output233 .= '';

$output233 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
return '
			<body class="neos">
		';
};
$arguments240 = array();
$arguments240['if'] = NULL;

$output233 .= '';

$output233 .= '
	';
return $output233;
};
$arguments224 = array();
$arguments224['then'] = NULL;
$arguments224['else'] = NULL;
$arguments224['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array230 = array();
$array231 = array (
);$array230['0'] = $renderingContext->getVariableProvider()->getByPath('settings.userInterface.backendLoginForm.backgroundImage', $array231);

$expression232 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments224['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression232(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array230)
					),
					$renderingContext
				);
$arguments224['__thenClosure'] = function() use ($renderingContext, $self) {
$output226 = '';

$output226 .= '
			<body class="neos" style="background-image:url(';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['path'] = NULL;
$arguments227['package'] = NULL;
$arguments227['resource'] = NULL;
$arguments227['localize'] = true;
$array229 = array (
);$arguments227['path'] = $renderingContext->getVariableProvider()->getByPath('settings.userInterface.backendLoginForm.backgroundImage', $array229);

$output226 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext)]);

$output226 .= ');">
		';
return $output226;
};
$arguments224['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
			<body class="neos">
		';
};

$output223 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);

$output223 .= '
		<div class="neos-modal-centered">
			<main class="neos-login-main">
				<div class="neos-login-box ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments242 = array();
$arguments242['then'] = NULL;
$arguments242['else'] = NULL;
$arguments242['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array244 = array();
$array245 = array (
);$array244['0'] = $renderingContext->getVariableProvider()->getByPath('settings.userInterface.backendLoginForm.backgroundImage', $array245);

$expression246 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments242['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression246(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array244)
					),
					$renderingContext
				);
$arguments242['then'] = 'background-image-active';

$output223 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);

$output223 .= '">
					<figure class="neos-login-box-logo">
						<img class="neos-login-box-logo-resource" src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments247 = array();
$arguments247['path'] = NULL;
$arguments247['package'] = NULL;
$arguments247['resource'] = NULL;
$arguments247['localize'] = true;
$arguments247['path'] = 'Images/Login/Logo.svg';

$output223 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext)]);

$output223 .= '" width="200px" height="200px" alt="Neos Logo" />
					</figure>

					<h1 class="neos-login-heading">
						';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
return 'Login to';
};
$arguments249 = array();
$arguments249['id'] = NULL;
$arguments249['value'] = NULL;
$arguments249['arguments'] = array (
);
$arguments249['source'] = 'Main';
$arguments249['package'] = NULL;
$arguments249['quantity'] = NULL;
$arguments249['locale'] = NULL;
$arguments249['id'] = 'login.index.title';

$output223 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext)]);

$output223 .= '
						<strong>';
$array251 = array (
);
$output223 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.name', $array251)]);

$output223 .= '</strong>
					</h1>
					<div class="neos-login-body neos">
						';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
$output254 = '';

$output254 .= '
							';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments255 = array();
$arguments255['additionalAttributes'] = NULL;
$arguments255['data'] = NULL;
$arguments255['name'] = NULL;
$arguments255['value'] = NULL;
$arguments255['property'] = NULL;
$arguments255['class'] = NULL;
$arguments255['dir'] = NULL;
$arguments255['id'] = NULL;
$arguments255['lang'] = NULL;
$arguments255['style'] = NULL;
$arguments255['title'] = NULL;
$arguments255['accesskey'] = NULL;
$arguments255['tabindex'] = NULL;
$arguments255['onclick'] = NULL;
$arguments255['name'] = 'lastVisitedNode';

$output254 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);

$output254 .= '
							<fieldset>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
$output302 = '';

$output302 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
$output305 = '';

$output305 .= '
										<div class="neos-controls">
											';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments306 = array();
$arguments306['additionalAttributes'] = NULL;
$arguments306['data'] = NULL;
$arguments306['name'] = NULL;
$arguments306['value'] = NULL;
$arguments306['property'] = NULL;
$arguments306['disabled'] = false;
$arguments306['required'] = false;
$arguments306['maxlength'] = NULL;
$arguments306['readonly'] = NULL;
$arguments306['size'] = NULL;
$arguments306['placeholder'] = NULL;
$arguments306['autofocus'] = NULL;
$arguments306['type'] = 'text';
$arguments306['errorClass'] = 'f3-form-error';
$arguments306['class'] = NULL;
$arguments306['dir'] = NULL;
$arguments306['id'] = NULL;
$arguments306['lang'] = NULL;
$arguments306['style'] = NULL;
$arguments306['title'] = NULL;
$arguments306['accesskey'] = NULL;
$arguments306['tabindex'] = NULL;
$arguments306['onclick'] = NULL;
// Rendering Boolean node
// Rendering Array
$array308 = array();
$array308['0'] = 'required';

$expression309 = function($context) {return "required";};
$arguments306['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression309(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array308)
					),
					$renderingContext
				);
$arguments306['id'] = 'username';
$arguments306['type'] = 'text';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments310 = array();
$arguments310['id'] = NULL;
$arguments310['value'] = NULL;
$arguments310['arguments'] = array (
);
$arguments310['source'] = 'Main';
$arguments310['package'] = NULL;
$arguments310['quantity'] = NULL;
$arguments310['locale'] = NULL;
$arguments310['id'] = 'username';
$arguments310['value'] = 'Username';
$arguments306['placeholder'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments310, $renderChildrenClosure311, $renderingContext);
$arguments306['class'] = 'neos-span12';
$arguments306['name'] = '__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][username]';
// Rendering Array
$array312 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments313 = array();
$arguments313['id'] = NULL;
$arguments313['value'] = NULL;
$arguments313['arguments'] = array (
);
$arguments313['source'] = 'Main';
$arguments313['package'] = NULL;
$arguments313['quantity'] = NULL;
$arguments313['locale'] = NULL;
$arguments313['id'] = 'username';
$arguments313['value'] = 'Username';
$array312['aria-label'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);
$arguments306['additionalAttributes'] = $array312;
$array315 = array (
);$arguments306['value'] = $renderingContext->getVariableProvider()->getByPath('username', $array315);

$output305 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);

$output305 .= '
										</div>
										<div class="neos-controls">
											';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments316 = array();
$arguments316['additionalAttributes'] = NULL;
$arguments316['data'] = NULL;
$arguments316['name'] = NULL;
$arguments316['value'] = NULL;
$arguments316['property'] = NULL;
$arguments316['disabled'] = false;
$arguments316['required'] = false;
$arguments316['maxlength'] = NULL;
$arguments316['readonly'] = NULL;
$arguments316['size'] = NULL;
$arguments316['placeholder'] = NULL;
$arguments316['autofocus'] = NULL;
$arguments316['type'] = 'text';
$arguments316['errorClass'] = 'f3-form-error';
$arguments316['class'] = NULL;
$arguments316['dir'] = NULL;
$arguments316['id'] = NULL;
$arguments316['lang'] = NULL;
$arguments316['style'] = NULL;
$arguments316['title'] = NULL;
$arguments316['accesskey'] = NULL;
$arguments316['tabindex'] = NULL;
$arguments316['onclick'] = NULL;
// Rendering Boolean node
// Rendering Array
$array318 = array();
$array318['0'] = 'required';

$expression319 = function($context) {return "required";};
$arguments316['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression319(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array318)
					),
					$renderingContext
				);
$arguments316['id'] = 'password';
$arguments316['type'] = 'password';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments320 = array();
$arguments320['id'] = NULL;
$arguments320['value'] = NULL;
$arguments320['arguments'] = array (
);
$arguments320['source'] = 'Main';
$arguments320['package'] = NULL;
$arguments320['quantity'] = NULL;
$arguments320['locale'] = NULL;
$arguments320['id'] = 'password';
$arguments320['value'] = 'Password';
$arguments316['placeholder'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext);
$arguments316['class'] = 'neos-span12';
$arguments316['name'] = '__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][password]';
// Rendering Array
$array322 = array();
$array322['autofocus'] = 'autofocus';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments323 = array();
$arguments323['id'] = NULL;
$arguments323['value'] = NULL;
$arguments323['arguments'] = array (
);
$arguments323['source'] = 'Main';
$arguments323['package'] = NULL;
$arguments323['quantity'] = NULL;
$arguments323['locale'] = NULL;
$arguments323['id'] = 'password';
$arguments323['value'] = 'Password';
$array322['aria-label'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext);
$arguments316['additionalAttributes'] = $array322;

$output305 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext);

$output305 .= '
										</div>
									';
return $output305;
};
$arguments303 = array();

$output302 .= '';

$output302 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
$output327 = '';

$output327 .= '
										<div class="neos-controls">
											';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments328 = array();
$arguments328['additionalAttributes'] = NULL;
$arguments328['data'] = NULL;
$arguments328['name'] = NULL;
$arguments328['value'] = NULL;
$arguments328['property'] = NULL;
$arguments328['disabled'] = false;
$arguments328['required'] = false;
$arguments328['maxlength'] = NULL;
$arguments328['readonly'] = NULL;
$arguments328['size'] = NULL;
$arguments328['placeholder'] = NULL;
$arguments328['autofocus'] = NULL;
$arguments328['type'] = 'text';
$arguments328['errorClass'] = 'f3-form-error';
$arguments328['class'] = NULL;
$arguments328['dir'] = NULL;
$arguments328['id'] = NULL;
$arguments328['lang'] = NULL;
$arguments328['style'] = NULL;
$arguments328['title'] = NULL;
$arguments328['accesskey'] = NULL;
$arguments328['tabindex'] = NULL;
$arguments328['onclick'] = NULL;
// Rendering Boolean node
// Rendering Array
$array330 = array();
$array330['0'] = 'required';

$expression331 = function($context) {return "required";};
$arguments328['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression331(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array330)
					),
					$renderingContext
				);
$arguments328['id'] = 'username';
$arguments328['type'] = 'text';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments332 = array();
$arguments332['id'] = NULL;
$arguments332['value'] = NULL;
$arguments332['arguments'] = array (
);
$arguments332['source'] = 'Main';
$arguments332['package'] = NULL;
$arguments332['quantity'] = NULL;
$arguments332['locale'] = NULL;
$arguments332['id'] = 'username';
$arguments332['value'] = 'Username';
$arguments328['placeholder'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext);
$arguments328['class'] = 'neos-span12';
$arguments328['name'] = '__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][username]';
// Rendering Array
$array334 = array();
$array334['autofocus'] = 'autofocus';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments335 = array();
$arguments335['id'] = NULL;
$arguments335['value'] = NULL;
$arguments335['arguments'] = array (
);
$arguments335['source'] = 'Main';
$arguments335['package'] = NULL;
$arguments335['quantity'] = NULL;
$arguments335['locale'] = NULL;
$arguments335['id'] = 'username';
$arguments335['value'] = 'Username';
$array334['aria-label'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);
$arguments328['additionalAttributes'] = $array334;
$array337 = array (
);$arguments328['value'] = $renderingContext->getVariableProvider()->getByPath('username', $array337);

$output327 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments328, $renderChildrenClosure329, $renderingContext);

$output327 .= '
										</div>
										<div class="neos-controls">
											';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments338 = array();
$arguments338['additionalAttributes'] = NULL;
$arguments338['data'] = NULL;
$arguments338['name'] = NULL;
$arguments338['value'] = NULL;
$arguments338['property'] = NULL;
$arguments338['disabled'] = false;
$arguments338['required'] = false;
$arguments338['maxlength'] = NULL;
$arguments338['readonly'] = NULL;
$arguments338['size'] = NULL;
$arguments338['placeholder'] = NULL;
$arguments338['autofocus'] = NULL;
$arguments338['type'] = 'text';
$arguments338['errorClass'] = 'f3-form-error';
$arguments338['class'] = NULL;
$arguments338['dir'] = NULL;
$arguments338['id'] = NULL;
$arguments338['lang'] = NULL;
$arguments338['style'] = NULL;
$arguments338['title'] = NULL;
$arguments338['accesskey'] = NULL;
$arguments338['tabindex'] = NULL;
$arguments338['onclick'] = NULL;
// Rendering Boolean node
// Rendering Array
$array340 = array();
$array340['0'] = 'required';

$expression341 = function($context) {return "required";};
$arguments338['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression341(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array340)
					),
					$renderingContext
				);
$arguments338['id'] = 'password';
$arguments338['type'] = 'password';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure343 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments342 = array();
$arguments342['id'] = NULL;
$arguments342['value'] = NULL;
$arguments342['arguments'] = array (
);
$arguments342['source'] = 'Main';
$arguments342['package'] = NULL;
$arguments342['quantity'] = NULL;
$arguments342['locale'] = NULL;
$arguments342['id'] = 'password';
$arguments342['value'] = 'Password';
$arguments338['placeholder'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments342, $renderChildrenClosure343, $renderingContext);
$arguments338['class'] = 'neos-span12';
$arguments338['name'] = '__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][password]';
// Rendering Array
$array344 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure346 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments345 = array();
$arguments345['id'] = NULL;
$arguments345['value'] = NULL;
$arguments345['arguments'] = array (
);
$arguments345['source'] = 'Main';
$arguments345['package'] = NULL;
$arguments345['quantity'] = NULL;
$arguments345['locale'] = NULL;
$arguments345['id'] = 'password';
$arguments345['value'] = 'Password';
$array344['aria-label'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments345, $renderChildrenClosure346, $renderingContext);
$arguments338['additionalAttributes'] = $array344;

$output327 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments338, $renderChildrenClosure339, $renderingContext);

$output327 .= '
										</div>
									';
return $output327;
};
$arguments325 = array();
$arguments325['if'] = NULL;

$output302 .= '';

$output302 .= '
								';
return $output302;
};
$arguments257 = array();
$arguments257['then'] = NULL;
$arguments257['else'] = NULL;
$arguments257['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array299 = array();
$array300 = array (
);$array299['0'] = $renderingContext->getVariableProvider()->getByPath('username', $array300);

$expression301 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments257['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression301(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array299)
					),
					$renderingContext
				);
$arguments257['__thenClosure'] = function() use ($renderingContext, $self) {
$output259 = '';

$output259 .= '
										<div class="neos-controls">
											';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments260 = array();
$arguments260['additionalAttributes'] = NULL;
$arguments260['data'] = NULL;
$arguments260['name'] = NULL;
$arguments260['value'] = NULL;
$arguments260['property'] = NULL;
$arguments260['disabled'] = false;
$arguments260['required'] = false;
$arguments260['maxlength'] = NULL;
$arguments260['readonly'] = NULL;
$arguments260['size'] = NULL;
$arguments260['placeholder'] = NULL;
$arguments260['autofocus'] = NULL;
$arguments260['type'] = 'text';
$arguments260['errorClass'] = 'f3-form-error';
$arguments260['class'] = NULL;
$arguments260['dir'] = NULL;
$arguments260['id'] = NULL;
$arguments260['lang'] = NULL;
$arguments260['style'] = NULL;
$arguments260['title'] = NULL;
$arguments260['accesskey'] = NULL;
$arguments260['tabindex'] = NULL;
$arguments260['onclick'] = NULL;
// Rendering Boolean node
// Rendering Array
$array262 = array();
$array262['0'] = 'required';

$expression263 = function($context) {return "required";};
$arguments260['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression263(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array262)
					),
					$renderingContext
				);
$arguments260['id'] = 'username';
$arguments260['type'] = 'text';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments264 = array();
$arguments264['id'] = NULL;
$arguments264['value'] = NULL;
$arguments264['arguments'] = array (
);
$arguments264['source'] = 'Main';
$arguments264['package'] = NULL;
$arguments264['quantity'] = NULL;
$arguments264['locale'] = NULL;
$arguments264['id'] = 'username';
$arguments264['value'] = 'Username';
$arguments260['placeholder'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext);
$arguments260['class'] = 'neos-span12';
$arguments260['name'] = '__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][username]';
// Rendering Array
$array266 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments267 = array();
$arguments267['id'] = NULL;
$arguments267['value'] = NULL;
$arguments267['arguments'] = array (
);
$arguments267['source'] = 'Main';
$arguments267['package'] = NULL;
$arguments267['quantity'] = NULL;
$arguments267['locale'] = NULL;
$arguments267['id'] = 'username';
$arguments267['value'] = 'Username';
$array266['aria-label'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext);
$arguments260['additionalAttributes'] = $array266;
$array269 = array (
);$arguments260['value'] = $renderingContext->getVariableProvider()->getByPath('username', $array269);

$output259 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output259 .= '
										</div>
										<div class="neos-controls">
											';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments270 = array();
$arguments270['additionalAttributes'] = NULL;
$arguments270['data'] = NULL;
$arguments270['name'] = NULL;
$arguments270['value'] = NULL;
$arguments270['property'] = NULL;
$arguments270['disabled'] = false;
$arguments270['required'] = false;
$arguments270['maxlength'] = NULL;
$arguments270['readonly'] = NULL;
$arguments270['size'] = NULL;
$arguments270['placeholder'] = NULL;
$arguments270['autofocus'] = NULL;
$arguments270['type'] = 'text';
$arguments270['errorClass'] = 'f3-form-error';
$arguments270['class'] = NULL;
$arguments270['dir'] = NULL;
$arguments270['id'] = NULL;
$arguments270['lang'] = NULL;
$arguments270['style'] = NULL;
$arguments270['title'] = NULL;
$arguments270['accesskey'] = NULL;
$arguments270['tabindex'] = NULL;
$arguments270['onclick'] = NULL;
// Rendering Boolean node
// Rendering Array
$array272 = array();
$array272['0'] = 'required';

$expression273 = function($context) {return "required";};
$arguments270['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression273(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array272)
					),
					$renderingContext
				);
$arguments270['id'] = 'password';
$arguments270['type'] = 'password';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments274 = array();
$arguments274['id'] = NULL;
$arguments274['value'] = NULL;
$arguments274['arguments'] = array (
);
$arguments274['source'] = 'Main';
$arguments274['package'] = NULL;
$arguments274['quantity'] = NULL;
$arguments274['locale'] = NULL;
$arguments274['id'] = 'password';
$arguments274['value'] = 'Password';
$arguments270['placeholder'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments274, $renderChildrenClosure275, $renderingContext);
$arguments270['class'] = 'neos-span12';
$arguments270['name'] = '__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][password]';
// Rendering Array
$array276 = array();
$array276['autofocus'] = 'autofocus';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments277 = array();
$arguments277['id'] = NULL;
$arguments277['value'] = NULL;
$arguments277['arguments'] = array (
);
$arguments277['source'] = 'Main';
$arguments277['package'] = NULL;
$arguments277['quantity'] = NULL;
$arguments277['locale'] = NULL;
$arguments277['id'] = 'password';
$arguments277['value'] = 'Password';
$array276['aria-label'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments277, $renderChildrenClosure278, $renderingContext);
$arguments270['additionalAttributes'] = $array276;

$output259 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext);

$output259 .= '
										</div>
									';
return $output259;
};
$arguments257['__elseClosures'][] = function() use ($renderingContext, $self) {
$output279 = '';

$output279 .= '
										<div class="neos-controls">
											';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments280 = array();
$arguments280['additionalAttributes'] = NULL;
$arguments280['data'] = NULL;
$arguments280['name'] = NULL;
$arguments280['value'] = NULL;
$arguments280['property'] = NULL;
$arguments280['disabled'] = false;
$arguments280['required'] = false;
$arguments280['maxlength'] = NULL;
$arguments280['readonly'] = NULL;
$arguments280['size'] = NULL;
$arguments280['placeholder'] = NULL;
$arguments280['autofocus'] = NULL;
$arguments280['type'] = 'text';
$arguments280['errorClass'] = 'f3-form-error';
$arguments280['class'] = NULL;
$arguments280['dir'] = NULL;
$arguments280['id'] = NULL;
$arguments280['lang'] = NULL;
$arguments280['style'] = NULL;
$arguments280['title'] = NULL;
$arguments280['accesskey'] = NULL;
$arguments280['tabindex'] = NULL;
$arguments280['onclick'] = NULL;
// Rendering Boolean node
// Rendering Array
$array282 = array();
$array282['0'] = 'required';

$expression283 = function($context) {return "required";};
$arguments280['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression283(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array282)
					),
					$renderingContext
				);
$arguments280['id'] = 'username';
$arguments280['type'] = 'text';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments284 = array();
$arguments284['id'] = NULL;
$arguments284['value'] = NULL;
$arguments284['arguments'] = array (
);
$arguments284['source'] = 'Main';
$arguments284['package'] = NULL;
$arguments284['quantity'] = NULL;
$arguments284['locale'] = NULL;
$arguments284['id'] = 'username';
$arguments284['value'] = 'Username';
$arguments280['placeholder'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments284, $renderChildrenClosure285, $renderingContext);
$arguments280['class'] = 'neos-span12';
$arguments280['name'] = '__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][username]';
// Rendering Array
$array286 = array();
$array286['autofocus'] = 'autofocus';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments287 = array();
$arguments287['id'] = NULL;
$arguments287['value'] = NULL;
$arguments287['arguments'] = array (
);
$arguments287['source'] = 'Main';
$arguments287['package'] = NULL;
$arguments287['quantity'] = NULL;
$arguments287['locale'] = NULL;
$arguments287['id'] = 'username';
$arguments287['value'] = 'Username';
$array286['aria-label'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext);
$arguments280['additionalAttributes'] = $array286;
$array289 = array (
);$arguments280['value'] = $renderingContext->getVariableProvider()->getByPath('username', $array289);

$output279 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext);

$output279 .= '
										</div>
										<div class="neos-controls">
											';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments290 = array();
$arguments290['additionalAttributes'] = NULL;
$arguments290['data'] = NULL;
$arguments290['name'] = NULL;
$arguments290['value'] = NULL;
$arguments290['property'] = NULL;
$arguments290['disabled'] = false;
$arguments290['required'] = false;
$arguments290['maxlength'] = NULL;
$arguments290['readonly'] = NULL;
$arguments290['size'] = NULL;
$arguments290['placeholder'] = NULL;
$arguments290['autofocus'] = NULL;
$arguments290['type'] = 'text';
$arguments290['errorClass'] = 'f3-form-error';
$arguments290['class'] = NULL;
$arguments290['dir'] = NULL;
$arguments290['id'] = NULL;
$arguments290['lang'] = NULL;
$arguments290['style'] = NULL;
$arguments290['title'] = NULL;
$arguments290['accesskey'] = NULL;
$arguments290['tabindex'] = NULL;
$arguments290['onclick'] = NULL;
// Rendering Boolean node
// Rendering Array
$array292 = array();
$array292['0'] = 'required';

$expression293 = function($context) {return "required";};
$arguments290['required'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression293(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array292)
					),
					$renderingContext
				);
$arguments290['id'] = 'password';
$arguments290['type'] = 'password';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments294 = array();
$arguments294['id'] = NULL;
$arguments294['value'] = NULL;
$arguments294['arguments'] = array (
);
$arguments294['source'] = 'Main';
$arguments294['package'] = NULL;
$arguments294['quantity'] = NULL;
$arguments294['locale'] = NULL;
$arguments294['id'] = 'password';
$arguments294['value'] = 'Password';
$arguments290['placeholder'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext);
$arguments290['class'] = 'neos-span12';
$arguments290['name'] = '__authentication[Neos][Flow][Security][Authentication][Token][UsernamePassword][password]';
// Rendering Array
$array296 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments297 = array();
$arguments297['id'] = NULL;
$arguments297['value'] = NULL;
$arguments297['arguments'] = array (
);
$arguments297['source'] = 'Main';
$arguments297['package'] = NULL;
$arguments297['quantity'] = NULL;
$arguments297['locale'] = NULL;
$arguments297['id'] = 'password';
$arguments297['value'] = 'Password';
$array296['aria-label'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext);
$arguments290['additionalAttributes'] = $array296;

$output279 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments290, $renderChildrenClosure291, $renderingContext);

$output279 .= '
										</div>
									';
return $output279;
};

$output254 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);

$output254 .= '
								<div class="neos-actions">
									<!-- Forgot password link will be here -->
									';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
$output349 = '';

$output349 .= '
										';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure351 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments350 = array();
$arguments350['id'] = NULL;
$arguments350['value'] = NULL;
$arguments350['arguments'] = array (
);
$arguments350['source'] = 'Main';
$arguments350['package'] = NULL;
$arguments350['quantity'] = NULL;
$arguments350['locale'] = NULL;
$arguments350['id'] = 'login';
$arguments350['value'] = 'Login';

$output349 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments350, $renderChildrenClosure351, $renderingContext)]);

$output349 .= '
									';
return $output349;
};
$arguments347 = array();
$arguments347['additionalAttributes'] = NULL;
$arguments347['data'] = NULL;
$arguments347['name'] = NULL;
$arguments347['value'] = NULL;
$arguments347['property'] = NULL;
$arguments347['autofocus'] = NULL;
$arguments347['disabled'] = false;
$arguments347['form'] = NULL;
$arguments347['formaction'] = NULL;
$arguments347['formenctype'] = NULL;
$arguments347['formmethod'] = NULL;
$arguments347['formnovalidate'] = NULL;
$arguments347['formtarget'] = NULL;
$arguments347['type'] = 'submit';
$arguments347['class'] = NULL;
$arguments347['dir'] = NULL;
$arguments347['id'] = NULL;
$arguments347['lang'] = NULL;
$arguments347['style'] = NULL;
$arguments347['title'] = NULL;
$arguments347['accesskey'] = NULL;
$arguments347['tabindex'] = NULL;
$arguments347['onclick'] = NULL;
$arguments347['type'] = 'submit';
$arguments347['class'] = 'neos-span5 neos-pull-right neos-button neos-login-btn';

$output254 .= Neos\FluidAdaptor\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments347, $renderChildrenClosure348, $renderingContext);

$output254 .= '
									<button class="neos-span5 neos-pull-right neos-button neos-login-btn neos-disabled neos-hidden">
										';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure353 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments352 = array();
$arguments352['id'] = NULL;
$arguments352['value'] = NULL;
$arguments352['arguments'] = array (
);
$arguments352['source'] = 'Main';
$arguments352['package'] = NULL;
$arguments352['quantity'] = NULL;
$arguments352['locale'] = NULL;
$arguments352['id'] = 'authenticating';
$arguments352['value'] = 'Authenticating';

$output254 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments352, $renderChildrenClosure353, $renderingContext)]);

$output254 .= '
										<span class="neos-ellipsis"></span>
									</button>
									';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure355 = function() use ($renderingContext, $self) {
$output356 = '';

$output356 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure358 = function() use ($renderingContext, $self) {
$output360 = '';

$output360 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
return '
												<div class="neos-tooltip neos-bottom neos-in neos-tooltip-success">
											';
};
$arguments361 = array();
$arguments361['then'] = NULL;
$arguments361['else'] = NULL;
$arguments361['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array363 = array();
$array364 = array (
);$array363['0'] = $renderingContext->getVariableProvider()->getByPath('flashMessage.severity', $array364);
$array363['1'] = ' === \'OK\'';

$expression365 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'OK');};
$arguments361['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression365(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array363)
					),
					$renderingContext
				);
$arguments361['__thenClosure'] = $renderChildrenClosure362;

$output360 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments361, $renderChildrenClosure362, $renderingContext);

$output360 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
return '
												<div class="neos-tooltip neos-bottom neos-in neos-tooltip-notice">
											';
};
$arguments366 = array();
$arguments366['then'] = NULL;
$arguments366['else'] = NULL;
$arguments366['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array368 = array();
$array369 = array (
);$array368['0'] = $renderingContext->getVariableProvider()->getByPath('flashMessage.severity', $array369);
$array368['1'] = ' === \'Notice\'';

$expression370 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Notice');};
$arguments366['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression370(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array368)
					),
					$renderingContext
				);
$arguments366['__thenClosure'] = $renderChildrenClosure367;

$output360 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext);

$output360 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure372 = function() use ($renderingContext, $self) {
return '
												<div class="neos-tooltip neos-bottom neos-in neos-tooltip-warning">
											';
};
$arguments371 = array();
$arguments371['then'] = NULL;
$arguments371['else'] = NULL;
$arguments371['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array373 = array();
$array374 = array (
);$array373['0'] = $renderingContext->getVariableProvider()->getByPath('flashMessage.severity', $array374);
$array373['1'] = ' === \'Warning\'';

$expression375 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Warning');};
$arguments371['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression375(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array373)
					),
					$renderingContext
				);
$arguments371['__thenClosure'] = $renderChildrenClosure372;

$output360 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments371, $renderChildrenClosure372, $renderingContext);

$output360 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
$output381 = '';

$output381 .= '
												<script>
													$(function () {
														$(\'fieldset\').effect(\'shake\', ';

$output381 .= '{times: 1}';

$output381 .= ', 60);
													});
												</script>
												<div class="neos-tooltip neos-bottom neos-in neos-tooltip-error">
											';
return $output381;
};
$arguments376 = array();
$arguments376['then'] = NULL;
$arguments376['else'] = NULL;
$arguments376['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array378 = array();
$array379 = array (
);$array378['0'] = $renderingContext->getVariableProvider()->getByPath('flashMessage.severity', $array379);
$array378['1'] = ' === \'Error\'';

$expression380 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Error');};
$arguments376['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression380(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array378)
					),
					$renderingContext
				);
$arguments376['__thenClosure'] = $renderChildrenClosure377;

$output360 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments376, $renderChildrenClosure377, $renderingContext);

$output360 .= '
											<div class="neos-tooltip-arrow"></div>
											<div class="neos-tooltip-inner" role="alert">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments382 = array();
$arguments382['id'] = NULL;
$arguments382['value'] = NULL;
$arguments382['arguments'] = array (
);
$arguments382['source'] = 'Main';
$arguments382['package'] = NULL;
$arguments382['quantity'] = NULL;
$arguments382['locale'] = NULL;
$output384 = '';

$output384 .= 'flashMessage.';
$array385 = array (
);
$output384 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('flashMessage.code', $array385)]);
$arguments382['id'] = $output384;
$arguments382['package'] = 'Neos.Neos';
$array386 = array (
);$arguments382['value'] = $renderingContext->getVariableProvider()->getByPath('flashMessage', $array386);

$output360 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext)]);

$output360 .= '
											</div>
										';
return $output360;
};
$arguments357 = array();
$arguments357['each'] = NULL;
$arguments357['as'] = NULL;
$arguments357['key'] = NULL;
$arguments357['reverse'] = false;
$arguments357['iteration'] = NULL;
$array359 = array (
);$arguments357['each'] = $renderingContext->getVariableProvider()->getByPath('flashMessages', $array359);
$arguments357['as'] = 'flashMessage';

$output356 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext);

$output356 .= '
									';
return $output356;
};
$arguments354 = array();
$arguments354['additionalAttributes'] = NULL;
$arguments354['data'] = NULL;
$arguments354['class'] = NULL;
$arguments354['dir'] = NULL;
$arguments354['id'] = NULL;
$arguments354['lang'] = NULL;
$arguments354['style'] = NULL;
$arguments354['title'] = NULL;
$arguments354['accesskey'] = NULL;
$arguments354['tabindex'] = NULL;
$arguments354['onclick'] = NULL;
$arguments354['as'] = NULL;
$arguments354['severity'] = NULL;
$arguments354['as'] = 'flashMessages';

$output254 .= Neos\FluidAdaptor\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments354, $renderChildrenClosure355, $renderingContext);

$output254 .= '
								</div>
							</fieldset>
						';
return $output254;
};
$arguments252 = array();
$arguments252['additionalAttributes'] = NULL;
$arguments252['data'] = NULL;
$arguments252['enctype'] = NULL;
$arguments252['method'] = NULL;
$arguments252['name'] = NULL;
$arguments252['onreset'] = NULL;
$arguments252['onsubmit'] = NULL;
$arguments252['action'] = NULL;
$arguments252['arguments'] = array (
);
$arguments252['controller'] = NULL;
$arguments252['package'] = NULL;
$arguments252['subpackage'] = NULL;
$arguments252['object'] = NULL;
$arguments252['section'] = '';
$arguments252['format'] = '';
$arguments252['additionalParams'] = array (
);
$arguments252['absolute'] = false;
$arguments252['addQueryString'] = false;
$arguments252['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments252['fieldNamePrefix'] = NULL;
$arguments252['actionUri'] = NULL;
$arguments252['objectName'] = NULL;
$arguments252['useParentRequest'] = false;
$arguments252['class'] = NULL;
$arguments252['dir'] = NULL;
$arguments252['id'] = NULL;
$arguments252['lang'] = NULL;
$arguments252['style'] = NULL;
$arguments252['title'] = NULL;
$arguments252['accesskey'] = NULL;
$arguments252['tabindex'] = NULL;
$arguments252['onclick'] = NULL;
$arguments252['name'] = 'login';
$arguments252['action'] = 'authenticate';

$output223 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output223 .= '
					</div>
				</div>
			</main>
			<footer class="neos-login-footer">
				<p>
					<a href="http://neos.io" target="_blank">Neos</a> –
					© 2006-';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure388 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments387 = array();
$arguments387['forceLocale'] = NULL;
$arguments387['date'] = NULL;
$arguments387['format'] = 'Y-m-d';
$arguments387['localeFormatType'] = NULL;
$arguments387['localeFormatLength'] = NULL;
$arguments387['cldrFormat'] = NULL;
$arguments387['date'] = 'now';
$arguments387['format'] = 'Y';

$output223 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Format\DateViewHelper::renderStatic($arguments387, $renderChildrenClosure388, $renderingContext)]);

$output223 .= ' This is free software, licensed under GPL3 or higher, and you are welcome to redistribute it under certain conditions;
					Neos comes with ABSOLUTELY NO WARRANTY;
					See <a href="http://neos.io" target="_blank">neos.io</a> for more details. Obstructing the appearance of this notice is prohibited by law.
				</p>
			</footer>
		</div>

		<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure390 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments389 = array();
$arguments389['path'] = NULL;
$arguments389['package'] = NULL;
$arguments389['resource'] = NULL;
$arguments389['localize'] = true;
$arguments389['path'] = '2/js/bootstrap.min.js';
$arguments389['package'] = 'Neos.Twitter.Bootstrap';

$output223 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments389, $renderChildrenClosure390, $renderingContext)]);

$output223 .= '"></script>
		<script>
			if ($(\'#username\').val()) {
				$(\'#password\').focus();
			}
			$(\'form\').on(\'submit\', function() {
				$(\'.neos-login-btn\').toggleClass(\'neos-hidden\');
			});
			try {
				$(\'form[name="login"] input[name="lastVisitedNode"]\').val(sessionStorage.getItem(\'Neos.Neos.lastVisitedNode\'));
			} catch(e) {}
		</script>
	</body>
';
return $output223;
};
$arguments221 = array();
$arguments221['name'] = NULL;
$arguments221['name'] = 'body';

$output192 .= NULL;

$output192 .= '
';

return $output192;
}


}
#0             124357    