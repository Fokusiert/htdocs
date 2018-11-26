<?php 
class Frontend_Node_action_show_64c98ca82cde121c076034ef960ff33f326303bf extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'xlink' => NULL,
  'neos' => 
  array (
    0 => 'Neos\\Neos\\ViewHelpers',
  ),
));
}

/**
 * section itemList
 */
public function section_a1d0c67e66bff372f088d05bb40a9d0d493b8993(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<nav class="navbar navbar-static-top navbar-default first-level-navigation" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<a href="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Uri\NodeViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['node'] = NULL;
$arguments1['format'] = NULL;
$arguments1['absolute'] = false;
$arguments1['arguments'] = array (
);
$arguments1['section'] = '';
$arguments1['addQueryString'] = false;
$arguments1['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1['baseNodeName'] = 'documentNode';
$arguments1['resolveShortcuts'] = true;
$arguments1['node'] = '~';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Uri\NodeViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '">
				<svg version="1.1" class="navbar-brandlogo"
					 xmlns="http://www.w3.org/2000/svg"
					 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="200px" height="200px" viewBox="0 0 200 200"
					 enable-background="new 0 0 200 200" xml:space="preserve">
					<g>
						<polygon fill="#26224C" points="132.984,37.5 112.342,52.662 112.342,84.378 132.984,113.791 	"/>
						<polygon fill="#26224C" points="132.984,150.564 53.627,37.5 44.434,44.273 44.434,162.5 65.076,147.338 65.076,88.79
							116.695,162.5 139.275,162.5 155.566,150.564 	"/>
						<polygon fill="#00ADEE" points="65.076,88.79 65.076,147.338 44.434,162.5 67.016,162.5 87.658,147.338 87.658,121.038 	"/>
						<polygon fill="#00ADEE" points="132.984,113.791 132.984,37.5 155.566,37.5 155.566,150.564 132.984,150.564 53.627,37.5
							79.436,37.5 	"/>
					</g>
				</svg>
			</a>
		</div>
		<div class="collapse navbar-collapse navbar-main-collapse">
			<ul class="nav nav-pills nav-justified">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
					<li class="';
$array7 = array (
);
$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.state', $array7)]);

$output6 .= '">
						';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$array11 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.label', $array11)]);
};
$arguments8 = array();
$arguments8['additionalAttributes'] = NULL;
$arguments8['data'] = NULL;
$arguments8['node'] = NULL;
$arguments8['format'] = NULL;
$arguments8['absolute'] = false;
$arguments8['arguments'] = array (
);
$arguments8['section'] = '';
$arguments8['addQueryString'] = false;
$arguments8['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments8['baseNodeName'] = 'documentNode';
$arguments8['nodeVariableName'] = 'linkedNode';
$arguments8['resolveShortcuts'] = true;
$arguments8['class'] = NULL;
$arguments8['dir'] = NULL;
$arguments8['id'] = NULL;
$arguments8['lang'] = NULL;
$arguments8['style'] = NULL;
$arguments8['title'] = NULL;
$arguments8['accesskey'] = NULL;
$arguments8['tabindex'] = NULL;
$arguments8['onclick'] = NULL;
$arguments8['name'] = NULL;
$arguments8['rel'] = NULL;
$arguments8['rev'] = NULL;
$arguments8['target'] = NULL;
$array10 = array (
);$arguments8['node'] = $renderingContext->getVariableProvider()->getByPath('item.node', $array10);

$output6 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output6 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['section'] = NULL;
$arguments26['partial'] = NULL;
$arguments26['delegate'] = NULL;
$arguments26['renderable'] = NULL;
$arguments26['arguments'] = array (
);
$arguments26['optional'] = false;
$arguments26['default'] = NULL;
$arguments26['contentAs'] = NULL;
$arguments26['section'] = 'subList';
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['items'] = $renderingContext->getVariableProvider()->getByPath('item.subItems', $array29);
$arguments26['arguments'] = $array28;

$output25 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
							';
return $output25;
};
$arguments18 = array();
$arguments18['then'] = NULL;
$arguments18['else'] = NULL;
$arguments18['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array20 = array();
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['0'] = $renderingContext->getVariableProvider()->getByPath('item.state', $array22);
$array20['0'] = $array21;
$array20['1'] = ' != ';
// Rendering Array
$array23 = array();
$array23['0'] = 'normal';
$array20['2'] = $array23;

$expression24 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments18['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression24(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)
					),
					$renderingContext
				);
$arguments18['__thenClosure'] = $renderChildrenClosure19;

$output17 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
						';
return $output17;
};
$arguments12 = array();
$arguments12['then'] = NULL;
$arguments12['else'] = NULL;
$arguments12['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array14 = array();
$array15 = array (
);$array14['0'] = $renderingContext->getVariableProvider()->getByPath('item.subItems', $array15);

$expression16 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments12['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression16(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)
					),
					$renderingContext
				);
$arguments12['__thenClosure'] = $renderChildrenClosure13;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output6 .= '
					</li>
				';
return $output6;
};
$arguments3 = array();
$arguments3['each'] = NULL;
$arguments3['as'] = NULL;
$arguments3['key'] = NULL;
$arguments3['reverse'] = false;
$arguments3['iteration'] = NULL;
$array5 = array (
);$arguments3['each'] = $renderingContext->getVariableProvider()->getByPath('items', $array5);
$arguments3['as'] = 'item';
$arguments3['iteration'] = 'menuItemIterator';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
			</ul>
		 </div>
	</nav>
';

return $output0;
}
/**
 * section subList
 */
public function section_fbcf3405bb812bc324611152aa0edf9ee316a605(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output30 = '';

$output30 .= '
	<ul class="second-level-sub-navigation nav nav-justified visible-xs">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
			<li class="';
$array35 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.state', $array35)]);

$output34 .= '">
				';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$array39 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.label', $array39)]);
};
$arguments36 = array();
$arguments36['additionalAttributes'] = NULL;
$arguments36['data'] = NULL;
$arguments36['node'] = NULL;
$arguments36['format'] = NULL;
$arguments36['absolute'] = false;
$arguments36['arguments'] = array (
);
$arguments36['section'] = '';
$arguments36['addQueryString'] = false;
$arguments36['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments36['baseNodeName'] = 'documentNode';
$arguments36['nodeVariableName'] = 'linkedNode';
$arguments36['resolveShortcuts'] = true;
$arguments36['class'] = NULL;
$arguments36['dir'] = NULL;
$arguments36['id'] = NULL;
$arguments36['lang'] = NULL;
$arguments36['style'] = NULL;
$arguments36['title'] = NULL;
$arguments36['accesskey'] = NULL;
$arguments36['tabindex'] = NULL;
$arguments36['onclick'] = NULL;
$arguments36['name'] = NULL;
$arguments36['rel'] = NULL;
$arguments36['rev'] = NULL;
$arguments36['target'] = NULL;
$array38 = array (
);$arguments36['node'] = $renderingContext->getVariableProvider()->getByPath('item.node', $array38);

$output34 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output34 .= '
			</li>
		';
return $output34;
};
$arguments31 = array();
$arguments31['each'] = NULL;
$arguments31['as'] = NULL;
$arguments31['key'] = NULL;
$arguments31['reverse'] = false;
$arguments31['iteration'] = NULL;
$array33 = array (
);$arguments31['each'] = $renderingContext->getVariableProvider()->getByPath('items', $array33);
$arguments31['as'] = 'item';

$output30 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
	</ul>
';

return $output30;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output40 = '';

$output40 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['section'] = NULL;
$arguments41['partial'] = NULL;
$arguments41['delegate'] = NULL;
$arguments41['renderable'] = NULL;
$arguments41['arguments'] = array (
);
$arguments41['optional'] = false;
$arguments41['default'] = NULL;
$arguments41['contentAs'] = NULL;
$arguments41['section'] = 'itemList';
// Rendering Array
$array43 = array();
$array44 = array (
);$array43['items'] = $renderingContext->getVariableProvider()->getByPath('items', $array44);
$array45 = array (
);$array43['site'] = $renderingContext->getVariableProvider()->getByPath('site', $array45);
$arguments41['arguments'] = $array43;

$output40 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output40 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
	<nav class="navbar navbar-static-top navbar-default first-level-navigation" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<a href="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Uri\NodeViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['node'] = NULL;
$arguments49['format'] = NULL;
$arguments49['absolute'] = false;
$arguments49['arguments'] = array (
);
$arguments49['section'] = '';
$arguments49['addQueryString'] = false;
$arguments49['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments49['baseNodeName'] = 'documentNode';
$arguments49['resolveShortcuts'] = true;
$arguments49['node'] = '~';

$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Uri\NodeViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext)]);

$output48 .= '">
				<svg version="1.1" class="navbar-brandlogo"
					 xmlns="http://www.w3.org/2000/svg"
					 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="200px" height="200px" viewBox="0 0 200 200"
					 enable-background="new 0 0 200 200" xml:space="preserve">
					<g>
						<polygon fill="#26224C" points="132.984,37.5 112.342,52.662 112.342,84.378 132.984,113.791 	"/>
						<polygon fill="#26224C" points="132.984,150.564 53.627,37.5 44.434,44.273 44.434,162.5 65.076,147.338 65.076,88.79
							116.695,162.5 139.275,162.5 155.566,150.564 	"/>
						<polygon fill="#00ADEE" points="65.076,88.79 65.076,147.338 44.434,162.5 67.016,162.5 87.658,147.338 87.658,121.038 	"/>
						<polygon fill="#00ADEE" points="132.984,113.791 132.984,37.5 155.566,37.5 155.566,150.564 132.984,150.564 53.627,37.5
							79.436,37.5 	"/>
					</g>
				</svg>
			</a>
		</div>
		<div class="collapse navbar-collapse navbar-main-collapse">
			<ul class="nav nav-pills nav-justified">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
					<li class="';
$array55 = array (
);
$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.state', $array55)]);

$output54 .= '">
						';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$array59 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.label', $array59)]);
};
$arguments56 = array();
$arguments56['additionalAttributes'] = NULL;
$arguments56['data'] = NULL;
$arguments56['node'] = NULL;
$arguments56['format'] = NULL;
$arguments56['absolute'] = false;
$arguments56['arguments'] = array (
);
$arguments56['section'] = '';
$arguments56['addQueryString'] = false;
$arguments56['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments56['baseNodeName'] = 'documentNode';
$arguments56['nodeVariableName'] = 'linkedNode';
$arguments56['resolveShortcuts'] = true;
$arguments56['class'] = NULL;
$arguments56['dir'] = NULL;
$arguments56['id'] = NULL;
$arguments56['lang'] = NULL;
$arguments56['style'] = NULL;
$arguments56['title'] = NULL;
$arguments56['accesskey'] = NULL;
$arguments56['tabindex'] = NULL;
$arguments56['onclick'] = NULL;
$arguments56['name'] = NULL;
$arguments56['rel'] = NULL;
$arguments56['rev'] = NULL;
$arguments56['target'] = NULL;
$array58 = array (
);$arguments56['node'] = $renderingContext->getVariableProvider()->getByPath('item.node', $array58);

$output54 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output54 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments74 = array();
$arguments74['section'] = NULL;
$arguments74['partial'] = NULL;
$arguments74['delegate'] = NULL;
$arguments74['renderable'] = NULL;
$arguments74['arguments'] = array (
);
$arguments74['optional'] = false;
$arguments74['default'] = NULL;
$arguments74['contentAs'] = NULL;
$arguments74['section'] = 'subList';
// Rendering Array
$array76 = array();
$array77 = array (
);$array76['items'] = $renderingContext->getVariableProvider()->getByPath('item.subItems', $array77);
$arguments74['arguments'] = $array76;

$output73 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '
							';
return $output73;
};
$arguments66 = array();
$arguments66['then'] = NULL;
$arguments66['else'] = NULL;
$arguments66['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array68 = array();
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['0'] = $renderingContext->getVariableProvider()->getByPath('item.state', $array70);
$array68['0'] = $array69;
$array68['1'] = ' != ';
// Rendering Array
$array71 = array();
$array71['0'] = 'normal';
$array68['2'] = $array71;

$expression72 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments66['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression72(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)
					),
					$renderingContext
				);
$arguments66['__thenClosure'] = $renderChildrenClosure67;

$output65 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '
						';
return $output65;
};
$arguments60 = array();
$arguments60['then'] = NULL;
$arguments60['else'] = NULL;
$arguments60['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array62 = array();
$array63 = array (
);$array62['0'] = $renderingContext->getVariableProvider()->getByPath('item.subItems', $array63);

$expression64 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments60['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression64(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array62)
					),
					$renderingContext
				);
$arguments60['__thenClosure'] = $renderChildrenClosure61;

$output54 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output54 .= '
					</li>
				';
return $output54;
};
$arguments51 = array();
$arguments51['each'] = NULL;
$arguments51['as'] = NULL;
$arguments51['key'] = NULL;
$arguments51['reverse'] = false;
$arguments51['iteration'] = NULL;
$array53 = array (
);$arguments51['each'] = $renderingContext->getVariableProvider()->getByPath('items', $array53);
$arguments51['as'] = 'item';
$arguments51['iteration'] = 'menuItemIterator';

$output48 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output48 .= '
			</ul>
		 </div>
	</nav>
';
return $output48;
};
$arguments46 = array();
$arguments46['name'] = NULL;
$arguments46['name'] = 'itemList';

$output40 .= NULL;

$output40 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$output80 = '';

$output80 .= '
	<ul class="second-level-sub-navigation nav nav-justified visible-xs">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
			<li class="';
$array85 = array (
);
$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.state', $array85)]);

$output84 .= '">
				';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$array89 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.label', $array89)]);
};
$arguments86 = array();
$arguments86['additionalAttributes'] = NULL;
$arguments86['data'] = NULL;
$arguments86['node'] = NULL;
$arguments86['format'] = NULL;
$arguments86['absolute'] = false;
$arguments86['arguments'] = array (
);
$arguments86['section'] = '';
$arguments86['addQueryString'] = false;
$arguments86['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments86['baseNodeName'] = 'documentNode';
$arguments86['nodeVariableName'] = 'linkedNode';
$arguments86['resolveShortcuts'] = true;
$arguments86['class'] = NULL;
$arguments86['dir'] = NULL;
$arguments86['id'] = NULL;
$arguments86['lang'] = NULL;
$arguments86['style'] = NULL;
$arguments86['title'] = NULL;
$arguments86['accesskey'] = NULL;
$arguments86['tabindex'] = NULL;
$arguments86['onclick'] = NULL;
$arguments86['name'] = NULL;
$arguments86['rel'] = NULL;
$arguments86['rev'] = NULL;
$arguments86['target'] = NULL;
$array88 = array (
);$arguments86['node'] = $renderingContext->getVariableProvider()->getByPath('item.node', $array88);

$output84 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output84 .= '
			</li>
		';
return $output84;
};
$arguments81 = array();
$arguments81['each'] = NULL;
$arguments81['as'] = NULL;
$arguments81['key'] = NULL;
$arguments81['reverse'] = false;
$arguments81['iteration'] = NULL;
$array83 = array (
);$arguments81['each'] = $renderingContext->getVariableProvider()->getByPath('items', $array83);
$arguments81['as'] = 'item';

$output80 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output80 .= '
	</ul>
';
return $output80;
};
$arguments78 = array();
$arguments78['name'] = NULL;
$arguments78['name'] = 'subList';

$output40 .= NULL;

$output40 .= '
';

return $output40;
}


}
#0             31392     