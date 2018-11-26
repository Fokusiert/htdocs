<?php 
class partial_Backend_Menu_50e26b067610f13851cd7302a24a25fb78c17987 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
));
}

/**
 * section moduleMenu
 */
public function section_f5e58f59b4cf43b09094648bf94e6f9a9115a00e(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<div class="neos-menu-section">
		';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\ModuleViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
			<i class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['then'] = NULL;
$arguments12['else'] = NULL;
$arguments12['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array14 = array();
$array15 = array (
);$array14['0'] = $renderingContext->getVariableProvider()->getByPath('module.icon', $array15);

$expression16 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments12['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression16(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)
					),
					$renderingContext
				);
$array17 = array (
);$arguments12['then'] = $renderingContext->getVariableProvider()->getByPath('module.icon', $array17);
$arguments12['else'] = 'fas fa-puzzle-piece';

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '"></i>
			';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['id'] = NULL;
$arguments18['value'] = NULL;
$arguments18['arguments'] = array (
);
$arguments18['source'] = 'Main';
$arguments18['package'] = NULL;
$arguments18['quantity'] = NULL;
$arguments18['locale'] = NULL;
$array20 = array (
);$arguments18['id'] = $renderingContext->getVariableProvider()->getByPath('module.label', $array20);
$arguments18['source'] = 'Modules';
$array21 = array (
);$arguments18['value'] = $renderingContext->getVariableProvider()->getByPath('module.label', $array21);

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext)]);

$output11 .= '
		';
return $output11;
};
$arguments1 = array();
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['path'] = NULL;
$arguments1['action'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['section'] = '';
$arguments1['format'] = '';
$arguments1['additionalParams'] = array (
);
$arguments1['addQueryString'] = false;
$arguments1['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['name'] = NULL;
$arguments1['rel'] = NULL;
$arguments1['rev'] = NULL;
$arguments1['target'] = NULL;
$array3 = array (
);$arguments1['path'] = $renderingContext->getVariableProvider()->getByPath('module.modulePath', $array3);
$output4 = '';

$output4 .= 'neos-menu-headline';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['then'] = NULL;
$arguments5['else'] = NULL;
$arguments5['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array7 = array();
$array8 = array (
);$array7['0'] = $renderingContext->getVariableProvider()->getByPath('module.modulePath', $array8);
$array7['1'] = ' === ';
$array9 = array (
);$array7['2'] = $renderingContext->getVariableProvider()->getByPath('modulePath', $array9);

$expression10 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments5['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression10(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)
					),
					$renderingContext
				);
$arguments5['then'] = ' neos-active';

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);
$arguments1['class'] = $output4;

$output0 .= Neos\Neos\ViewHelpers\Link\ModuleViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
			<div class="neos-menu-list">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output41 = '';

$output41 .= '
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
$arguments45['section'] = 'submoduleMenu';
$arguments45['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '
						';
return $output44;
};
$arguments42 = array();
$arguments42['if'] = NULL;

$output41 .= '';

$output41 .= '
					';
return $output41;
};
$arguments32 = array();
$arguments32['then'] = NULL;
$arguments32['else'] = NULL;
$arguments32['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array38 = array();
$array39 = array (
);$array38['0'] = $renderingContext->getVariableProvider()->getByPath('submodule.hideInMenu', $array39);

$expression40 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments32['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression40(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array38)
					),
					$renderingContext
				);
$arguments32['__elseClosures'][] = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['section'] = NULL;
$arguments35['partial'] = NULL;
$arguments35['delegate'] = NULL;
$arguments35['renderable'] = NULL;
$arguments35['arguments'] = array (
);
$arguments35['optional'] = false;
$arguments35['default'] = NULL;
$arguments35['contentAs'] = NULL;
$arguments35['section'] = 'submoduleMenu';
$arguments35['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
						';
return $output34;
};

$output31 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
				';
return $output31;
};
$arguments28 = array();
$arguments28['each'] = NULL;
$arguments28['as'] = NULL;
$arguments28['key'] = NULL;
$arguments28['reverse'] = false;
$arguments28['iteration'] = NULL;
$array30 = array (
);$arguments28['each'] = $renderingContext->getVariableProvider()->getByPath('module.submodules', $array30);
$arguments28['as'] = 'submodule';

$output27 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '
			</div>
		';
return $output27;
};
$arguments22 = array();
$arguments22['then'] = NULL;
$arguments22['else'] = NULL;
$arguments22['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['0'] = $renderingContext->getVariableProvider()->getByPath('module.submodules', $array25);

$expression26 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments22['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression26(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)
					),
					$renderingContext
				);
$arguments22['__thenClosure'] = $renderChildrenClosure23;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output0 .= '
	</div>
';

return $output0;
}
/**
 * section submoduleMenu
 */
public function section_8accdf636c223cfda421823bb877c78e4efcda9a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output48 = '';

$output48 .= '
	';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\ModuleViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
		<i class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['then'] = NULL;
$arguments59['else'] = NULL;
$arguments59['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array61 = array();
$array62 = array (
);$array61['0'] = $renderingContext->getVariableProvider()->getByPath('submodule.icon', $array62);

$expression63 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments59['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression63(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array61)
					),
					$renderingContext
				);
$array64 = array (
);$arguments59['then'] = $renderingContext->getVariableProvider()->getByPath('submodule.icon', $array64);
$arguments59['else'] = 'fas fa-puzzle-piece';

$output58 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output58 .= '"></i>
		';
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
$array67 = array (
);$arguments65['id'] = $renderingContext->getVariableProvider()->getByPath('submodule.label', $array67);
$arguments65['source'] = 'Modules';
$array68 = array (
);$arguments65['value'] = $renderingContext->getVariableProvider()->getByPath('submodule.label', $array68);

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext)]);

$output58 .= '
	';
return $output58;
};
$arguments49 = array();
$arguments49['additionalAttributes'] = NULL;
$arguments49['data'] = NULL;
$arguments49['path'] = NULL;
$arguments49['action'] = NULL;
$arguments49['arguments'] = array (
);
$arguments49['section'] = '';
$arguments49['format'] = '';
$arguments49['additionalParams'] = array (
);
$arguments49['addQueryString'] = false;
$arguments49['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments49['class'] = NULL;
$arguments49['dir'] = NULL;
$arguments49['id'] = NULL;
$arguments49['lang'] = NULL;
$arguments49['style'] = NULL;
$arguments49['title'] = NULL;
$arguments49['accesskey'] = NULL;
$arguments49['tabindex'] = NULL;
$arguments49['onclick'] = NULL;
$arguments49['name'] = NULL;
$arguments49['rel'] = NULL;
$arguments49['rev'] = NULL;
$arguments49['target'] = NULL;
$array51 = array (
);$arguments49['path'] = $renderingContext->getVariableProvider()->getByPath('submodule.modulePath', $array51);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['then'] = NULL;
$arguments52['else'] = NULL;
$arguments52['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array54 = array();
$array55 = array (
);$array54['0'] = $renderingContext->getVariableProvider()->getByPath('submodule.modulePath', $array55);
$array54['1'] = ' === ';
$array56 = array (
);$array54['2'] = $renderingContext->getVariableProvider()->getByPath('modulePath', $array56);

$expression57 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments52['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression57(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)
					),
					$renderingContext
				);
$arguments52['then'] = ' neos-active';
$arguments49['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output48 .= Neos\Neos\ViewHelpers\Link\ModuleViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '
';

return $output48;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output69 = '';

$output69 .= '
<noscript>
	<div id="neos-menu-panel" class="neos-noscript">
		<div class="neos-menu-section">
			';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
				<i class="fas fa-file"></i> ';
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
$arguments75['id'] = 'content';
$arguments75['value'] = 'Content';

$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext)]);

$output74 .= '
			';
return $output74;
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
$arguments70['package'] = 'Neos.Neos';
$arguments70['controller'] = 'Backend\\Backend';
$arguments70['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments72 = array();
$arguments72['id'] = NULL;
$arguments72['value'] = NULL;
$arguments72['arguments'] = array (
);
$arguments72['source'] = 'Main';
$arguments72['package'] = NULL;
$arguments72['quantity'] = NULL;
$arguments72['locale'] = NULL;
$arguments72['id'] = 'contentView';
$arguments72['value'] = 'Content View';
$arguments70['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);
$arguments70['class'] = 'neos-menu-headline';

$output69 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output69 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
				<div class="neos-menu-list">
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output146 = '';

$output146 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$output175 = '';

$output175 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output178 = '';

$output178 .= '
										<a href="';
$array179 = array (
);
$output178 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.uri', $array179)]);

$output178 .= '" title="';
$array180 = array (
);
$output178 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.nodeName', $array180)]);

$output178 .= '">
											<i class="fas fa-globe"></i> ';
$array181 = array (
);
$output178 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.name', $array181)]);

$output178 .= '
										</a>
									';
return $output178;
};
$arguments176 = array();

$output175 .= '';

$output175 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$output184 = '';

$output184 .= '
										<a href="';
$array185 = array (
);
$output184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.uri', $array185)]);

$output184 .= '" title="';
$array186 = array (
);
$output184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.nodeName', $array186)]);

$output184 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments187 = array();
$arguments187['then'] = NULL;
$arguments187['else'] = NULL;
$arguments187['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array189 = array();
$array190 = array (
);$array189['0'] = $renderingContext->getVariableProvider()->getByPath('site.active', $array190);

$expression191 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments187['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression191(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array189)
					),
					$renderingContext
				);
$arguments187['then'] = 'neos-active';

$output184 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments187, $renderChildrenClosure188, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments192 = array();
$arguments192['then'] = NULL;
$arguments192['else'] = NULL;
$arguments192['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array194 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$array197 = array (
);return $renderingContext->getVariableProvider()->getByPath('sites', $array197);
};
$arguments195 = array();
$arguments195['subject'] = NULL;
$renderChildrenClosure196 = ($arguments195['subject'] !== null) ? function() use ($arguments195) { return $arguments195['subject']; } : $renderChildrenClosure196;$array194['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);
$array194['1'] = ' === 1';

$expression198 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 1);};
$arguments192['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression198(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array194)
					),
					$renderingContext
				);
$arguments192['then'] = ' neos-active';

$output184 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);

$output184 .= '">
											<i class="fas fa-globe"></i> ';
$array199 = array (
);
$output184 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.name', $array199)]);

$output184 .= '
										</a>
									';
return $output184;
};
$arguments182 = array();
$arguments182['if'] = NULL;

$output175 .= '';

$output175 .= '
								';
return $output175;
};
$arguments150 = array();
$arguments150['then'] = NULL;
$arguments150['else'] = NULL;
$arguments150['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array172 = array();
$array173 = array (
);$array172['0'] = $renderingContext->getVariableProvider()->getByPath('modulePath', $array173);

$expression174 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments150['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression174(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array172)
					),
					$renderingContext
				);
$arguments150['__thenClosure'] = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '
										<a href="';
$array153 = array (
);
$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.uri', $array153)]);

$output152 .= '" title="';
$array154 = array (
);
$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.nodeName', $array154)]);

$output152 .= '">
											<i class="fas fa-globe"></i> ';
$array155 = array (
);
$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.name', $array155)]);

$output152 .= '
										</a>
									';
return $output152;
};
$arguments150['__elseClosures'][] = function() use ($renderingContext, $self) {
$output156 = '';

$output156 .= '
										<a href="';
$array157 = array (
);
$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.uri', $array157)]);

$output156 .= '" title="';
$array158 = array (
);
$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.nodeName', $array158)]);

$output156 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments159 = array();
$arguments159['then'] = NULL;
$arguments159['else'] = NULL;
$arguments159['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array161 = array();
$array162 = array (
);$array161['0'] = $renderingContext->getVariableProvider()->getByPath('site.active', $array162);

$expression163 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments159['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression163(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array161)
					),
					$renderingContext
				);
$arguments159['then'] = 'neos-active';

$output156 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments164 = array();
$arguments164['then'] = NULL;
$arguments164['else'] = NULL;
$arguments164['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array166 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
$array169 = array (
);return $renderingContext->getVariableProvider()->getByPath('sites', $array169);
};
$arguments167 = array();
$arguments167['subject'] = NULL;
$renderChildrenClosure168 = ($arguments167['subject'] !== null) ? function() use ($arguments167) { return $arguments167['subject']; } : $renderChildrenClosure168;$array166['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);
$array166['1'] = ' === 1';

$expression170 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 1);};
$arguments164['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression170(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array166)
					),
					$renderingContext
				);
$arguments164['then'] = ' neos-active';

$output156 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output156 .= '">
											<i class="fas fa-globe"></i> ';
$array171 = array (
);
$output156 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.name', $array171)]);

$output156 .= '
										</a>
									';
return $output156;
};

$output149 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '
							';
return $output149;
};
$arguments147 = array();

$output146 .= '';

$output146 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
$output202 = '';

$output202 .= '
								<span title="';
$array203 = array (
);
$output202 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.nodeName', $array203)]);

$output202 .= '" class="neos-menu-item neos-disabled">
									<i class="fas fa-globe"></i> ';
$array204 = array (
);
$output202 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.name', $array204)]);

$output202 .= '
								</span>
							';
return $output202;
};
$arguments200 = array();
$arguments200['if'] = NULL;

$output146 .= '';

$output146 .= '
						';
return $output146;
};
$arguments87 = array();
$arguments87['then'] = NULL;
$arguments87['else'] = NULL;
$arguments87['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array143 = array();
$array144 = array (
);$array143['0'] = $renderingContext->getVariableProvider()->getByPath('site.uri', $array144);

$expression145 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments87['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression145(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array143)
					),
					$renderingContext
				);
$arguments87['__thenClosure'] = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '
										<a href="';
$array119 = array (
);
$output118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.uri', $array119)]);

$output118 .= '" title="';
$array120 = array (
);
$output118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.nodeName', $array120)]);

$output118 .= '">
											<i class="fas fa-globe"></i> ';
$array121 = array (
);
$output118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.name', $array121)]);

$output118 .= '
										</a>
									';
return $output118;
};
$arguments116 = array();

$output115 .= '';

$output115 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$output124 = '';

$output124 .= '
										<a href="';
$array125 = array (
);
$output124 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.uri', $array125)]);

$output124 .= '" title="';
$array126 = array (
);
$output124 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.nodeName', $array126)]);

$output124 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments127 = array();
$arguments127['then'] = NULL;
$arguments127['else'] = NULL;
$arguments127['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array129 = array();
$array130 = array (
);$array129['0'] = $renderingContext->getVariableProvider()->getByPath('site.active', $array130);

$expression131 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments127['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression131(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array129)
					),
					$renderingContext
				);
$arguments127['then'] = 'neos-active';

$output124 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments132 = array();
$arguments132['then'] = NULL;
$arguments132['else'] = NULL;
$arguments132['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array134 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$array137 = array (
);return $renderingContext->getVariableProvider()->getByPath('sites', $array137);
};
$arguments135 = array();
$arguments135['subject'] = NULL;
$renderChildrenClosure136 = ($arguments135['subject'] !== null) ? function() use ($arguments135) { return $arguments135['subject']; } : $renderChildrenClosure136;$array134['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);
$array134['1'] = ' === 1';

$expression138 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 1);};
$arguments132['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression138(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array134)
					),
					$renderingContext
				);
$arguments132['then'] = ' neos-active';

$output124 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output124 .= '">
											<i class="fas fa-globe"></i> ';
$array139 = array (
);
$output124 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.name', $array139)]);

$output124 .= '
										</a>
									';
return $output124;
};
$arguments122 = array();
$arguments122['if'] = NULL;

$output115 .= '';

$output115 .= '
								';
return $output115;
};
$arguments90 = array();
$arguments90['then'] = NULL;
$arguments90['else'] = NULL;
$arguments90['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array112 = array();
$array113 = array (
);$array112['0'] = $renderingContext->getVariableProvider()->getByPath('modulePath', $array113);

$expression114 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments90['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression114(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array112)
					),
					$renderingContext
				);
$arguments90['__thenClosure'] = function() use ($renderingContext, $self) {
$output92 = '';

$output92 .= '
										<a href="';
$array93 = array (
);
$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.uri', $array93)]);

$output92 .= '" title="';
$array94 = array (
);
$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.nodeName', $array94)]);

$output92 .= '">
											<i class="fas fa-globe"></i> ';
$array95 = array (
);
$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.name', $array95)]);

$output92 .= '
										</a>
									';
return $output92;
};
$arguments90['__elseClosures'][] = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
										<a href="';
$array97 = array (
);
$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.uri', $array97)]);

$output96 .= '" title="';
$array98 = array (
);
$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.nodeName', $array98)]);

$output96 .= '" class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['then'] = NULL;
$arguments99['else'] = NULL;
$arguments99['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array101 = array();
$array102 = array (
);$array101['0'] = $renderingContext->getVariableProvider()->getByPath('site.active', $array102);

$expression103 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments99['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression103(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array101)
					),
					$renderingContext
				);
$arguments99['then'] = 'neos-active';

$output96 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['then'] = NULL;
$arguments104['else'] = NULL;
$arguments104['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array106 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$array109 = array (
);return $renderingContext->getVariableProvider()->getByPath('sites', $array109);
};
$arguments107 = array();
$arguments107['subject'] = NULL;
$renderChildrenClosure108 = ($arguments107['subject'] !== null) ? function() use ($arguments107) { return $arguments107['subject']; } : $renderChildrenClosure108;$array106['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);
$array106['1'] = ' === 1';

$expression110 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 1);};
$arguments104['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression110(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array106)
					),
					$renderingContext
				);
$arguments104['then'] = ' neos-active';

$output96 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output96 .= '">
											<i class="fas fa-globe"></i> ';
$array111 = array (
);
$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.name', $array111)]);

$output96 .= '
										</a>
									';
return $output96;
};

$output89 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '
							';
return $output89;
};
$arguments87['__elseClosures'][] = function() use ($renderingContext, $self) {
$output140 = '';

$output140 .= '
								<span title="';
$array141 = array (
);
$output140 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.nodeName', $array141)]);

$output140 .= '" class="neos-menu-item neos-disabled">
									<i class="fas fa-globe"></i> ';
$array142 = array (
);
$output140 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('site.name', $array142)]);

$output140 .= '
								</span>
							';
return $output140;
};

$output86 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output86 .= '
					';
return $output86;
};
$arguments83 = array();
$arguments83['each'] = NULL;
$arguments83['as'] = NULL;
$arguments83['key'] = NULL;
$arguments83['reverse'] = false;
$arguments83['iteration'] = NULL;
$array85 = array (
);$arguments83['each'] = $renderingContext->getVariableProvider()->getByPath('sites', $array85);
$arguments83['as'] = 'site';

$output82 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '
				</div>
			';
return $output82;
};
$arguments77 = array();
$arguments77['then'] = NULL;
$arguments77['else'] = NULL;
$arguments77['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array79 = array();
$array80 = array (
);$array79['0'] = $renderingContext->getVariableProvider()->getByPath('sites', $array80);

$expression81 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments77['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression81(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array79)
					),
					$renderingContext
				);
$arguments77['__thenClosure'] = $renderChildrenClosure78;

$output69 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output69 .= '
		</div>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
$output208 = '';

$output208 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
$output218 = '';

$output218 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
$output221 = '';

$output221 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments222 = array();
$arguments222['section'] = NULL;
$arguments222['partial'] = NULL;
$arguments222['delegate'] = NULL;
$arguments222['renderable'] = NULL;
$arguments222['arguments'] = array (
);
$arguments222['optional'] = false;
$arguments222['default'] = NULL;
$arguments222['contentAs'] = NULL;
$arguments222['section'] = 'moduleMenu';
$arguments222['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output221 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);

$output221 .= '
				';
return $output221;
};
$arguments219 = array();
$arguments219['if'] = NULL;

$output218 .= '';

$output218 .= '
			';
return $output218;
};
$arguments209 = array();
$arguments209['then'] = NULL;
$arguments209['else'] = NULL;
$arguments209['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array215 = array();
$array216 = array (
);$array215['0'] = $renderingContext->getVariableProvider()->getByPath('module.hideInMenu', $array216);

$expression217 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments209['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression217(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array215)
					),
					$renderingContext
				);
$arguments209['__elseClosures'][] = function() use ($renderingContext, $self) {
$output211 = '';

$output211 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments212 = array();
$arguments212['section'] = NULL;
$arguments212['partial'] = NULL;
$arguments212['delegate'] = NULL;
$arguments212['renderable'] = NULL;
$arguments212['arguments'] = array (
);
$arguments212['optional'] = false;
$arguments212['default'] = NULL;
$arguments212['contentAs'] = NULL;
$arguments212['section'] = 'moduleMenu';
$arguments212['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output211 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output211 .= '
				';
return $output211;
};

$output208 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);

$output208 .= '
		';
return $output208;
};
$arguments205 = array();
$arguments205['each'] = NULL;
$arguments205['as'] = NULL;
$arguments205['key'] = NULL;
$arguments205['reverse'] = false;
$arguments205['iteration'] = NULL;
$array207 = array (
);$arguments205['each'] = $renderingContext->getVariableProvider()->getByPath('modules', $array207);
$arguments205['as'] = 'module';

$output69 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output69 .= '
	</div>
</noscript>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
$output227 = '';

$output227 .= '
	<div class="neos-menu-section">
		';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\ModuleViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
$output238 = '';

$output238 .= '
			<i class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments239 = array();
$arguments239['then'] = NULL;
$arguments239['else'] = NULL;
$arguments239['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array241 = array();
$array242 = array (
);$array241['0'] = $renderingContext->getVariableProvider()->getByPath('module.icon', $array242);

$expression243 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments239['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression243(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array241)
					),
					$renderingContext
				);
$array244 = array (
);$arguments239['then'] = $renderingContext->getVariableProvider()->getByPath('module.icon', $array244);
$arguments239['else'] = 'fas fa-puzzle-piece';

$output238 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);

$output238 .= '"></i>
			';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments245 = array();
$arguments245['id'] = NULL;
$arguments245['value'] = NULL;
$arguments245['arguments'] = array (
);
$arguments245['source'] = 'Main';
$arguments245['package'] = NULL;
$arguments245['quantity'] = NULL;
$arguments245['locale'] = NULL;
$array247 = array (
);$arguments245['id'] = $renderingContext->getVariableProvider()->getByPath('module.label', $array247);
$arguments245['source'] = 'Modules';
$array248 = array (
);$arguments245['value'] = $renderingContext->getVariableProvider()->getByPath('module.label', $array248);

$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext)]);

$output238 .= '
		';
return $output238;
};
$arguments228 = array();
$arguments228['additionalAttributes'] = NULL;
$arguments228['data'] = NULL;
$arguments228['path'] = NULL;
$arguments228['action'] = NULL;
$arguments228['arguments'] = array (
);
$arguments228['section'] = '';
$arguments228['format'] = '';
$arguments228['additionalParams'] = array (
);
$arguments228['addQueryString'] = false;
$arguments228['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments228['class'] = NULL;
$arguments228['dir'] = NULL;
$arguments228['id'] = NULL;
$arguments228['lang'] = NULL;
$arguments228['style'] = NULL;
$arguments228['title'] = NULL;
$arguments228['accesskey'] = NULL;
$arguments228['tabindex'] = NULL;
$arguments228['onclick'] = NULL;
$arguments228['name'] = NULL;
$arguments228['rel'] = NULL;
$arguments228['rev'] = NULL;
$arguments228['target'] = NULL;
$array230 = array (
);$arguments228['path'] = $renderingContext->getVariableProvider()->getByPath('module.modulePath', $array230);
$output231 = '';

$output231 .= 'neos-menu-headline';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments232 = array();
$arguments232['then'] = NULL;
$arguments232['else'] = NULL;
$arguments232['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array234 = array();
$array235 = array (
);$array234['0'] = $renderingContext->getVariableProvider()->getByPath('module.modulePath', $array235);
$array234['1'] = ' === ';
$array236 = array (
);$array234['2'] = $renderingContext->getVariableProvider()->getByPath('modulePath', $array236);

$expression237 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments232['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression237(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array234)
					),
					$renderingContext
				);
$arguments232['then'] = ' neos-active';

$output231 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext);
$arguments228['class'] = $output231;

$output227 .= Neos\Neos\ViewHelpers\Link\ModuleViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext);

$output227 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
$output254 = '';

$output254 .= '
			<div class="neos-menu-list">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
$output258 = '';

$output258 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
$output268 = '';

$output268 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$output271 = '';

$output271 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments272 = array();
$arguments272['section'] = NULL;
$arguments272['partial'] = NULL;
$arguments272['delegate'] = NULL;
$arguments272['renderable'] = NULL;
$arguments272['arguments'] = array (
);
$arguments272['optional'] = false;
$arguments272['default'] = NULL;
$arguments272['contentAs'] = NULL;
$arguments272['section'] = 'submoduleMenu';
$arguments272['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output271 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext);

$output271 .= '
						';
return $output271;
};
$arguments269 = array();
$arguments269['if'] = NULL;

$output268 .= '';

$output268 .= '
					';
return $output268;
};
$arguments259 = array();
$arguments259['then'] = NULL;
$arguments259['else'] = NULL;
$arguments259['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array265 = array();
$array266 = array (
);$array265['0'] = $renderingContext->getVariableProvider()->getByPath('submodule.hideInMenu', $array266);

$expression267 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments259['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression267(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array265)
					),
					$renderingContext
				);
$arguments259['__elseClosures'][] = function() use ($renderingContext, $self) {
$output261 = '';

$output261 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments262 = array();
$arguments262['section'] = NULL;
$arguments262['partial'] = NULL;
$arguments262['delegate'] = NULL;
$arguments262['renderable'] = NULL;
$arguments262['arguments'] = array (
);
$arguments262['optional'] = false;
$arguments262['default'] = NULL;
$arguments262['contentAs'] = NULL;
$arguments262['section'] = 'submoduleMenu';
$arguments262['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output261 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext);

$output261 .= '
						';
return $output261;
};

$output258 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);

$output258 .= '
				';
return $output258;
};
$arguments255 = array();
$arguments255['each'] = NULL;
$arguments255['as'] = NULL;
$arguments255['key'] = NULL;
$arguments255['reverse'] = false;
$arguments255['iteration'] = NULL;
$array257 = array (
);$arguments255['each'] = $renderingContext->getVariableProvider()->getByPath('module.submodules', $array257);
$arguments255['as'] = 'submodule';

$output254 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);

$output254 .= '
			</div>
		';
return $output254;
};
$arguments249 = array();
$arguments249['then'] = NULL;
$arguments249['else'] = NULL;
$arguments249['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array251 = array();
$array252 = array (
);$array251['0'] = $renderingContext->getVariableProvider()->getByPath('module.submodules', $array252);

$expression253 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments249['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression253(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array251)
					),
					$renderingContext
				);
$arguments249['__thenClosure'] = $renderChildrenClosure250;

$output227 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);

$output227 .= '
	</div>
';
return $output227;
};
$arguments225 = array();
$arguments225['name'] = NULL;
$arguments225['name'] = 'moduleMenu';

$output69 .= NULL;

$output69 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
$output277 = '';

$output277 .= '
	';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\ModuleViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
$output287 = '';

$output287 .= '
		<i class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments288 = array();
$arguments288['then'] = NULL;
$arguments288['else'] = NULL;
$arguments288['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array290 = array();
$array291 = array (
);$array290['0'] = $renderingContext->getVariableProvider()->getByPath('submodule.icon', $array291);

$expression292 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments288['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression292(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array290)
					),
					$renderingContext
				);
$array293 = array (
);$arguments288['then'] = $renderingContext->getVariableProvider()->getByPath('submodule.icon', $array293);
$arguments288['else'] = 'fas fa-puzzle-piece';

$output287 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext);

$output287 .= '"></i>
		';
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
$array296 = array (
);$arguments294['id'] = $renderingContext->getVariableProvider()->getByPath('submodule.label', $array296);
$arguments294['source'] = 'Modules';
$array297 = array (
);$arguments294['value'] = $renderingContext->getVariableProvider()->getByPath('submodule.label', $array297);

$output287 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext)]);

$output287 .= '
	';
return $output287;
};
$arguments278 = array();
$arguments278['additionalAttributes'] = NULL;
$arguments278['data'] = NULL;
$arguments278['path'] = NULL;
$arguments278['action'] = NULL;
$arguments278['arguments'] = array (
);
$arguments278['section'] = '';
$arguments278['format'] = '';
$arguments278['additionalParams'] = array (
);
$arguments278['addQueryString'] = false;
$arguments278['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments278['class'] = NULL;
$arguments278['dir'] = NULL;
$arguments278['id'] = NULL;
$arguments278['lang'] = NULL;
$arguments278['style'] = NULL;
$arguments278['title'] = NULL;
$arguments278['accesskey'] = NULL;
$arguments278['tabindex'] = NULL;
$arguments278['onclick'] = NULL;
$arguments278['name'] = NULL;
$arguments278['rel'] = NULL;
$arguments278['rev'] = NULL;
$arguments278['target'] = NULL;
$array280 = array (
);$arguments278['path'] = $renderingContext->getVariableProvider()->getByPath('submodule.modulePath', $array280);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments281 = array();
$arguments281['then'] = NULL;
$arguments281['else'] = NULL;
$arguments281['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array283 = array();
$array284 = array (
);$array283['0'] = $renderingContext->getVariableProvider()->getByPath('submodule.modulePath', $array284);
$array283['1'] = ' === ';
$array285 = array (
);$array283['2'] = $renderingContext->getVariableProvider()->getByPath('modulePath', $array285);

$expression286 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments281['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression286(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array283)
					),
					$renderingContext
				);
$arguments281['then'] = ' neos-active';
$arguments278['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext);

$output277 .= Neos\Neos\ViewHelpers\Link\ModuleViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext);

$output277 .= '
';
return $output277;
};
$arguments275 = array();
$arguments275['name'] = NULL;
$arguments275['name'] = 'submoduleMenu';

$output69 .= NULL;

$output69 .= '
';

return $output69;
}


}
#0             72188     