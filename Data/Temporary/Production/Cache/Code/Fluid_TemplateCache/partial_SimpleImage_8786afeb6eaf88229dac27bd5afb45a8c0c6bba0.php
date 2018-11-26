<?php 
class partial_SimpleImage_8786afeb6eaf88229dac27bd5afb45a8c0c6bba0 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'neos' => 
  array (
    0 => 'Neos\\Neos\\ViewHelpers',
  ),
  'media' => 
  array (
    0 => 'Neos\\Media\\ViewHelpers',
  ),
));
}

/**
 * section imageRendering
 */
public function section_8d57ad2609e7e01e64562e0b563832efa8824260(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper Neos\Media\ViewHelpers\ImageViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['image'] = NULL;
$arguments1['width'] = NULL;
$arguments1['maximumWidth'] = NULL;
$arguments1['height'] = NULL;
$arguments1['maximumHeight'] = NULL;
$arguments1['allowCropping'] = false;
$arguments1['allowUpScaling'] = false;
$arguments1['async'] = false;
$arguments1['preset'] = NULL;
$arguments1['quality'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['alt'] = NULL;
$arguments1['ismap'] = NULL;
$arguments1['usemap'] = NULL;
$array3 = array (
);$arguments1['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array3);
$array4 = array (
);$arguments1['alt'] = $renderingContext->getVariableProvider()->getByPath('alternativeText', $array4);
$array5 = array (
);$arguments1['title'] = $renderingContext->getVariableProvider()->getByPath('title', $array5);
$array6 = array (
);$arguments1['width'] = $renderingContext->getVariableProvider()->getByPath('width', $array6);
$array7 = array (
);$arguments1['maximumWidth'] = $renderingContext->getVariableProvider()->getByPath('maximumWidth', $array7);
$array8 = array (
);$arguments1['height'] = $renderingContext->getVariableProvider()->getByPath('height', $array8);
$array9 = array (
);$arguments1['maximumHeight'] = $renderingContext->getVariableProvider()->getByPath('maximumHeight', $array9);
// Rendering Boolean node
// Rendering Array
$array10 = array();
$array11 = array (
);$array10['0'] = $renderingContext->getVariableProvider()->getByPath('allowUpScaling', $array11);

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['allowUpScaling'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression12(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)
					),
					$renderingContext
				);
// Rendering Boolean node
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['0'] = $renderingContext->getVariableProvider()->getByPath('allowCropping', $array14);

$expression15 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['allowCropping'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)
					),
					$renderingContext
				);

$output0 .= Neos\Media\ViewHelpers\ImageViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output16 = '';

$output16 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
				<a href="';
$array83 = array (
);
$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('link', $array83)]);

$output82 .= '">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['section'] = NULL;
$arguments84['partial'] = NULL;
$arguments84['delegate'] = NULL;
$arguments84['renderable'] = NULL;
$arguments84['arguments'] = array (
);
$arguments84['optional'] = false;
$arguments84['default'] = NULL;
$arguments84['contentAs'] = NULL;
$arguments84['section'] = 'imageRendering';
$arguments84['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output82 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output82 .= '
				</a>
			';
return $output82;
};
$arguments80 = array();

$output79 .= '';

$output79 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['section'] = NULL;
$arguments90['partial'] = NULL;
$arguments90['delegate'] = NULL;
$arguments90['renderable'] = NULL;
$arguments90['arguments'] = array (
);
$arguments90['optional'] = false;
$arguments90['default'] = NULL;
$arguments90['contentAs'] = NULL;
$arguments90['section'] = 'imageRendering';
$arguments90['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output89 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '
			';
return $output89;
};
$arguments87 = array();
$arguments87['if'] = NULL;

$output79 .= '';

$output79 .= '
		';
return $output79;
};
$arguments65 = array();
$arguments65['then'] = NULL;
$arguments65['else'] = NULL;
$arguments65['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array76 = array();
$array77 = array (
);$array76['0'] = $renderingContext->getVariableProvider()->getByPath('link', $array77);

$expression78 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments65['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression78(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array76)
					),
					$renderingContext
				);
$arguments65['__thenClosure'] = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
				<a href="';
$array68 = array (
);
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('link', $array68)]);

$output67 .= '">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['section'] = NULL;
$arguments69['partial'] = NULL;
$arguments69['delegate'] = NULL;
$arguments69['renderable'] = NULL;
$arguments69['arguments'] = array (
);
$arguments69['optional'] = false;
$arguments69['default'] = NULL;
$arguments69['contentAs'] = NULL;
$arguments69['section'] = 'imageRendering';
$arguments69['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output67 .= '
				</a>
			';
return $output67;
};
$arguments65['__elseClosures'][] = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments73 = array();
$arguments73['section'] = NULL;
$arguments73['partial'] = NULL;
$arguments73['delegate'] = NULL;
$arguments73['renderable'] = NULL;
$arguments73['arguments'] = array (
);
$arguments73['optional'] = false;
$arguments73['default'] = NULL;
$arguments73['contentAs'] = NULL;
$arguments73['section'] = 'imageRendering';
$arguments73['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output72 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output72 .= '
			';
return $output72;
};

$output64 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output64 .= '
	';
return $output64;
};
$arguments62 = array();

$output61 .= '';

$output61 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$output95 = '';

$output95 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$output102 = '';

$output102 .= '
			<img src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments103 = array();
$arguments103['path'] = NULL;
$arguments103['package'] = NULL;
$arguments103['resource'] = NULL;
$arguments103['localize'] = true;
$arguments103['package'] = 'Neos.Neos';
$arguments103['path'] = 'Images/dummy-image.svg';

$output102 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext)]);

$output102 .= '" title="Dummy image" alt="Dummy image" class="neos-handle" />
		';
return $output102;
};
$arguments96 = array();
$arguments96['then'] = NULL;
$arguments96['else'] = NULL;
$arguments96['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array98 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Rendering\InEditModeViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['node'] = NULL;
$arguments99['mode'] = NULL;
$array98['0'] = Neos\Neos\ViewHelpers\Rendering\InEditModeViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$expression101 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments96['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression101(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array98)
					),
					$renderingContext
				);
$arguments96['__thenClosure'] = $renderChildrenClosure97;

$output95 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output95 .= '
	';
return $output95;
};
$arguments93 = array();
$arguments93['if'] = NULL;

$output61 .= '';

$output61 .= '
';
return $output61;
};
$arguments17 = array();
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$arguments17['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array58 = array();
$array59 = array (
);$array58['0'] = $renderingContext->getVariableProvider()->getByPath('image', $array59);

$expression60 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments17['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression60(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array58)
					),
					$renderingContext
				);
$arguments17['__thenClosure'] = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
				<a href="';
$array38 = array (
);
$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('link', $array38)]);

$output37 .= '">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['section'] = NULL;
$arguments39['partial'] = NULL;
$arguments39['delegate'] = NULL;
$arguments39['renderable'] = NULL;
$arguments39['arguments'] = array (
);
$arguments39['optional'] = false;
$arguments39['default'] = NULL;
$arguments39['contentAs'] = NULL;
$arguments39['section'] = 'imageRendering';
$arguments39['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output37 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output37 .= '
				</a>
			';
return $output37;
};
$arguments35 = array();

$output34 .= '';

$output34 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['section'] = NULL;
$arguments45['partial'] = NULL;
$arguments45['delegate'] = NULL;
$arguments45['renderable'] = NULL;
$arguments45['arguments'] = array (
);
$arguments45['optional'] = false;
$arguments45['default'] = NULL;
$arguments45['contentAs'] = NULL;
$arguments45['section'] = 'imageRendering';
$arguments45['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '
			';
return $output44;
};
$arguments42 = array();
$arguments42['if'] = NULL;

$output34 .= '';

$output34 .= '
		';
return $output34;
};
$arguments20 = array();
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$arguments20['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array31 = array();
$array32 = array (
);$array31['0'] = $renderingContext->getVariableProvider()->getByPath('link', $array32);

$expression33 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments20['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression33(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)
					),
					$renderingContext
				);
$arguments20['__thenClosure'] = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
				<a href="';
$array23 = array (
);
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('link', $array23)]);

$output22 .= '">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['section'] = NULL;
$arguments24['partial'] = NULL;
$arguments24['delegate'] = NULL;
$arguments24['renderable'] = NULL;
$arguments24['arguments'] = array (
);
$arguments24['optional'] = false;
$arguments24['default'] = NULL;
$arguments24['contentAs'] = NULL;
$arguments24['section'] = 'imageRendering';
$arguments24['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output22 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output22 .= '
				</a>
			';
return $output22;
};
$arguments20['__elseClosures'][] = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['section'] = NULL;
$arguments28['partial'] = NULL;
$arguments28['delegate'] = NULL;
$arguments28['renderable'] = NULL;
$arguments28['arguments'] = array (
);
$arguments28['optional'] = false;
$arguments28['default'] = NULL;
$arguments28['contentAs'] = NULL;
$arguments28['section'] = 'imageRendering';
$arguments28['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output27 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '
			';
return $output27;
};

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
	';
return $output19;
};
$arguments17['__elseClosures'][] = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
			<img src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['path'] = NULL;
$arguments56['package'] = NULL;
$arguments56['resource'] = NULL;
$arguments56['localize'] = true;
$arguments56['package'] = 'Neos.Neos';
$arguments56['path'] = 'Images/dummy-image.svg';

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output55 .= '" title="Dummy image" alt="Dummy image" class="neos-handle" />
		';
return $output55;
};
$arguments49 = array();
$arguments49['then'] = NULL;
$arguments49['else'] = NULL;
$arguments49['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array51 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Rendering\InEditModeViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['node'] = NULL;
$arguments52['mode'] = NULL;
$array51['0'] = Neos\Neos\ViewHelpers\Rendering\InEditModeViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$expression54 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments49['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression54(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)
					),
					$renderingContext
				);
$arguments49['__thenClosure'] = $renderChildrenClosure50;

$output48 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '
	';
return $output48;
};

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
	';
// Rendering ViewHelper Neos\Media\ViewHelpers\ImageViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['additionalAttributes'] = NULL;
$arguments108['data'] = NULL;
$arguments108['image'] = NULL;
$arguments108['width'] = NULL;
$arguments108['maximumWidth'] = NULL;
$arguments108['height'] = NULL;
$arguments108['maximumHeight'] = NULL;
$arguments108['allowCropping'] = false;
$arguments108['allowUpScaling'] = false;
$arguments108['async'] = false;
$arguments108['preset'] = NULL;
$arguments108['quality'] = NULL;
$arguments108['class'] = NULL;
$arguments108['dir'] = NULL;
$arguments108['id'] = NULL;
$arguments108['lang'] = NULL;
$arguments108['style'] = NULL;
$arguments108['title'] = NULL;
$arguments108['accesskey'] = NULL;
$arguments108['tabindex'] = NULL;
$arguments108['onclick'] = NULL;
$arguments108['alt'] = NULL;
$arguments108['ismap'] = NULL;
$arguments108['usemap'] = NULL;
$array110 = array (
);$arguments108['image'] = $renderingContext->getVariableProvider()->getByPath('image', $array110);
$array111 = array (
);$arguments108['alt'] = $renderingContext->getVariableProvider()->getByPath('alternativeText', $array111);
$array112 = array (
);$arguments108['title'] = $renderingContext->getVariableProvider()->getByPath('title', $array112);
$array113 = array (
);$arguments108['width'] = $renderingContext->getVariableProvider()->getByPath('width', $array113);
$array114 = array (
);$arguments108['maximumWidth'] = $renderingContext->getVariableProvider()->getByPath('maximumWidth', $array114);
$array115 = array (
);$arguments108['height'] = $renderingContext->getVariableProvider()->getByPath('height', $array115);
$array116 = array (
);$arguments108['maximumHeight'] = $renderingContext->getVariableProvider()->getByPath('maximumHeight', $array116);
// Rendering Boolean node
// Rendering Array
$array117 = array();
$array118 = array (
);$array117['0'] = $renderingContext->getVariableProvider()->getByPath('allowUpScaling', $array118);

$expression119 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments108['allowUpScaling'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression119(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array117)
					),
					$renderingContext
				);
// Rendering Boolean node
// Rendering Array
$array120 = array();
$array121 = array (
);$array120['0'] = $renderingContext->getVariableProvider()->getByPath('allowCropping', $array121);

$expression122 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments108['allowCropping'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression122(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array120)
					),
					$renderingContext
				);

$output107 .= Neos\Media\ViewHelpers\ImageViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output107 .= '
';
return $output107;
};
$arguments105 = array();
$arguments105['name'] = NULL;
$arguments105['name'] = 'imageRendering';

$output16 .= NULL;

return $output16;
}


}
#0             31399     