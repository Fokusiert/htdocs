<?php 
class partial_Module_SubmoduleOverview_e2d6368350daf81954223901ff7b7ce5f3175a76 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section submodule
 */
public function section_8e32a6259737327ddebae65a01b9bdcc36da31e5(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<div class="neos-span4">
		';
// Rendering ViewHelper Neos\Neos\ViewHelpers\StandaloneViewViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['templatePathAndFilename'] = NULL;
$arguments1['arguments'] = array (
);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$arguments3['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array5 = array();
$array6 = array (
);$array5['0'] = $renderingContext->getVariableProvider()->getByPath('submoduleConfiguration.widgetTemplatePathAndFileName', $array6);

$expression7 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression7(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array5)
					),
					$renderingContext
				);
$array8 = array (
);$arguments3['then'] = $renderingContext->getVariableProvider()->getByPath('submoduleConfiguration.widgetTemplatePathAndFileName', $array8);
$array9 = array (
);$arguments3['else'] = $renderingContext->getVariableProvider()->getByPath('settings.moduleConfiguration.widgetTemplatePathAndFileName', $array9);
$arguments1['templatePathAndFilename'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);
// Rendering Array
$array10 = array();
$array11 = array (
);$array10['moduleConfiguration'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration', $array11);
$array12 = array (
);$array10['submoduleIdentifier'] = $renderingContext->getVariableProvider()->getByPath('submoduleIdentifier', $array12);
$array13 = array (
);$array10['submoduleConfiguration'] = $renderingContext->getVariableProvider()->getByPath('submoduleConfiguration', $array13);
$arguments1['arguments'] = $array10;

$output0 .= Neos\Neos\ViewHelpers\StandaloneViewViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
	</div>
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return '
					</div><div class="neos-row-fluid">
				';
};
$arguments38 = array();
$arguments38['if'] = NULL;

$output37 .= '';

$output37 .= '
			';
return $output37;
};
$arguments32 = array();
$arguments32['then'] = NULL;
$arguments32['else'] = NULL;
$arguments32['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isLast', $array35);

$expression36 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments32['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression36(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)
					),
					$renderingContext
				);
$arguments32['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
					</div><div class="neos-row-fluid">
				';
};

$output31 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
		';
return $output31;
};
$arguments29 = array();
$arguments29['if'] = NULL;

$output28 .= '';

$output28 .= '
	';
return $output28;
};
$arguments14 = array();
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array25 = array();
$array26 = array (
);$array25['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.cycle', $array26);
$array25['1'] = ' % 3';

$expression27 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) % 3);};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression27(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array25)
					),
					$renderingContext
				);
$arguments14['__elseClosures'][] = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return '
					</div><div class="neos-row-fluid">
				';
};
$arguments23 = array();
$arguments23['if'] = NULL;

$output22 .= '';

$output22 .= '
			';
return $output22;
};
$arguments17 = array();
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$arguments17['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array19 = array();
$array20 = array (
);$array19['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isLast', $array20);

$expression21 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments17['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression21(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)
					),
					$renderingContext
				);
$arguments17['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
					</div><div class="neos-row-fluid">
				';
};

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
		';
return $output16;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output40 = '';

$output40 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
	<div class="neos-row-fluid">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
						';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Security\IfAccessViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['section'] = NULL;
$arguments82['partial'] = NULL;
$arguments82['delegate'] = NULL;
$arguments82['renderable'] = NULL;
$arguments82['arguments'] = array (
);
$arguments82['optional'] = false;
$arguments82['default'] = NULL;
$arguments82['contentAs'] = NULL;
$arguments82['section'] = 'submodule';
$arguments82['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output81 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '
						';
return $output81;
};
$arguments78 = array();
$arguments78['then'] = NULL;
$arguments78['else'] = NULL;
$arguments78['condition'] = false;
$arguments78['privilegeTarget'] = NULL;
$arguments78['parameters'] = array (
);
$array80 = array (
);$arguments78['privilegeTarget'] = $renderingContext->getVariableProvider()->getByPath('submoduleConfiguration.privilegeTarget', $array80);
$arguments78['__thenClosure'] = $renderChildrenClosure79;

$output77 .= Neos\FluidAdaptor\ViewHelpers\Security\IfAccessViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '
					';
return $output77;
};
$arguments75 = array();

$output74 .= '';

$output74 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['section'] = NULL;
$arguments88['partial'] = NULL;
$arguments88['delegate'] = NULL;
$arguments88['renderable'] = NULL;
$arguments88['arguments'] = array (
);
$arguments88['optional'] = false;
$arguments88['default'] = NULL;
$arguments88['contentAs'] = NULL;
$arguments88['section'] = 'submodule';
$arguments88['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output87 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '
					';
return $output87;
};
$arguments85 = array();
$arguments85['if'] = NULL;

$output74 .= '';

$output74 .= '
				';
return $output74;
};
$arguments57 = array();
$arguments57['then'] = NULL;
$arguments57['else'] = NULL;
$arguments57['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array71 = array();
$array72 = array (
);$array71['0'] = $renderingContext->getVariableProvider()->getByPath('submoduleConfiguration.privilegeTarget', $array72);

$expression73 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments57['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression73(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array71)
					),
					$renderingContext
				);
$arguments57['__thenClosure'] = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
						';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Security\IfAccessViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['section'] = NULL;
$arguments64['partial'] = NULL;
$arguments64['delegate'] = NULL;
$arguments64['renderable'] = NULL;
$arguments64['arguments'] = array (
);
$arguments64['optional'] = false;
$arguments64['default'] = NULL;
$arguments64['contentAs'] = NULL;
$arguments64['section'] = 'submodule';
$arguments64['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
						';
return $output63;
};
$arguments60 = array();
$arguments60['then'] = NULL;
$arguments60['else'] = NULL;
$arguments60['condition'] = false;
$arguments60['privilegeTarget'] = NULL;
$arguments60['parameters'] = array (
);
$array62 = array (
);$arguments60['privilegeTarget'] = $renderingContext->getVariableProvider()->getByPath('submoduleConfiguration.privilegeTarget', $array62);
$arguments60['__thenClosure'] = $renderChildrenClosure61;

$output59 .= Neos\FluidAdaptor\ViewHelpers\Security\IfAccessViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= '
					';
return $output59;
};
$arguments57['__elseClosures'][] = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['section'] = NULL;
$arguments68['partial'] = NULL;
$arguments68['delegate'] = NULL;
$arguments68['renderable'] = NULL;
$arguments68['arguments'] = array (
);
$arguments68['optional'] = false;
$arguments68['default'] = NULL;
$arguments68['contentAs'] = NULL;
$arguments68['section'] = 'submodule';
$arguments68['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output67 .= '
					';
return $output67;
};

$output56 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
			';
return $output56;
};
$arguments51 = array();
$arguments51['then'] = NULL;
$arguments51['else'] = NULL;
$arguments51['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array53 = array();
$array54 = array (
);$array53['0'] = $renderingContext->getVariableProvider()->getByPath('submoduleConfiguration.enabled', $array54);
$array53['1'] = ' !== false';

$expression55 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) !== FALSE);};
$arguments51['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression55(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array53)
					),
					$renderingContext
				);
$arguments51['__thenClosure'] = $renderChildrenClosure52;

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
		';
return $output50;
};
$arguments47 = array();
$arguments47['each'] = NULL;
$arguments47['as'] = NULL;
$arguments47['key'] = NULL;
$arguments47['reverse'] = false;
$arguments47['iteration'] = NULL;
$array49 = array (
);$arguments47['each'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration.submodules', $array49);
$arguments47['key'] = 'submoduleIdentifier';
$arguments47['as'] = 'submoduleConfiguration';
$arguments47['iteration'] = 'iterator';

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
	</div>
';
return $output46;
};
$arguments41 = array();
$arguments41['then'] = NULL;
$arguments41['else'] = NULL;
$arguments41['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array43 = array();
$array44 = array (
);$array43['0'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration.submodules', $array44);

$expression45 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments41['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression45(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array43)
					),
					$renderingContext
				);
$arguments41['__thenClosure'] = $renderChildrenClosure42;

$output40 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output40 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
	<div class="neos-span4">
		';
// Rendering ViewHelper Neos\Neos\ViewHelpers\StandaloneViewViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['templatePathAndFilename'] = NULL;
$arguments94['arguments'] = array (
);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments96 = array();
$arguments96['then'] = NULL;
$arguments96['else'] = NULL;
$arguments96['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array98 = array();
$array99 = array (
);$array98['0'] = $renderingContext->getVariableProvider()->getByPath('submoduleConfiguration.widgetTemplatePathAndFileName', $array99);

$expression100 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments96['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression100(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array98)
					),
					$renderingContext
				);
$array101 = array (
);$arguments96['then'] = $renderingContext->getVariableProvider()->getByPath('submoduleConfiguration.widgetTemplatePathAndFileName', $array101);
$array102 = array (
);$arguments96['else'] = $renderingContext->getVariableProvider()->getByPath('settings.moduleConfiguration.widgetTemplatePathAndFileName', $array102);
$arguments94['templatePathAndFilename'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);
// Rendering Array
$array103 = array();
$array104 = array (
);$array103['moduleConfiguration'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration', $array104);
$array105 = array (
);$array103['submoduleIdentifier'] = $renderingContext->getVariableProvider()->getByPath('submoduleIdentifier', $array105);
$array106 = array (
);$array103['submoduleConfiguration'] = $renderingContext->getVariableProvider()->getByPath('submoduleConfiguration', $array106);
$arguments94['arguments'] = $array103;

$output93 .= Neos\Neos\ViewHelpers\StandaloneViewViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output93 .= '
	</div>
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$output124 = '';

$output124 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$output130 = '';

$output130 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
return '
					</div><div class="neos-row-fluid">
				';
};
$arguments131 = array();
$arguments131['if'] = NULL;

$output130 .= '';

$output130 .= '
			';
return $output130;
};
$arguments125 = array();
$arguments125['then'] = NULL;
$arguments125['else'] = NULL;
$arguments125['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array127 = array();
$array128 = array (
);$array127['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isLast', $array128);

$expression129 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments125['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression129(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array127)
					),
					$renderingContext
				);
$arguments125['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
					</div><div class="neos-row-fluid">
				';
};

$output124 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output124 .= '
		';
return $output124;
};
$arguments122 = array();
$arguments122['if'] = NULL;

$output121 .= '';

$output121 .= '
	';
return $output121;
};
$arguments107 = array();
$arguments107['then'] = NULL;
$arguments107['else'] = NULL;
$arguments107['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array118 = array();
$array119 = array (
);$array118['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.cycle', $array119);
$array118['1'] = ' % 3';

$expression120 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) % 3);};
$arguments107['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression120(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array118)
					),
					$renderingContext
				);
$arguments107['__elseClosures'][] = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return '
					</div><div class="neos-row-fluid">
				';
};
$arguments116 = array();
$arguments116['if'] = NULL;

$output115 .= '';

$output115 .= '
			';
return $output115;
};
$arguments110 = array();
$arguments110['then'] = NULL;
$arguments110['else'] = NULL;
$arguments110['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array112 = array();
$array113 = array (
);$array112['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isLast', $array113);

$expression114 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments110['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression114(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array112)
					),
					$renderingContext
				);
$arguments110['__elseClosures'][] = function() use ($renderingContext, $self) {
return '
					</div><div class="neos-row-fluid">
				';
};

$output109 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output109 .= '
		';
return $output109;
};

$output93 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output93 .= '
';
return $output93;
};
$arguments91 = array();
$arguments91['name'] = NULL;
$arguments91['name'] = 'submodule';

$output40 .= NULL;

$output40 .= '
';

return $output40;
}


}
#0             31094     