<?php 
class partial_Neos_Form_Form_Navigation_4d0db7045e7cbacf011b42ff68314ec6df7d41f8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'form' => 
  array (
    0 => 'Neos\\Form\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<nav class="form-navigation">
	<ul>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
			<li class="previous">
				';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['id'] = NULL;
$arguments11['value'] = NULL;
$arguments11['arguments'] = array (
);
$arguments11['source'] = 'Main';
$arguments11['package'] = NULL;
$arguments11['quantity'] = NULL;
$arguments11['locale'] = NULL;
$arguments11['id'] = 'forms.navigation.previousPage';
$array13 = array (
);$arguments11['package'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.renderingOptions.translationPackage', $array13)]);
$arguments11['value'] = 'Previous page';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);
};
$arguments7 = array();
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['name'] = NULL;
$arguments7['value'] = NULL;
$arguments7['property'] = NULL;
$arguments7['autofocus'] = NULL;
$arguments7['disabled'] = false;
$arguments7['form'] = NULL;
$arguments7['formaction'] = NULL;
$arguments7['formenctype'] = NULL;
$arguments7['formmethod'] = NULL;
$arguments7['formnovalidate'] = NULL;
$arguments7['formtarget'] = NULL;
$arguments7['type'] = 'submit';
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['name'] = '__currentPage';
$array9 = array (
);$arguments7['value'] = $renderingContext->getVariableProvider()->getByPath('form.previousPage.index', $array9);
$arguments7['formnovalidate'] = 'formnovalidate';
$array10 = array (
);$arguments7['class'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.previousButtonClassAttribute', $array10);

$output6 .= Neos\FluidAdaptor\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
			</li>
		';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('form.previousPage', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
				<li class="next">
					';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['id'] = NULL;
$arguments71['value'] = NULL;
$arguments71['arguments'] = array (
);
$arguments71['source'] = 'Main';
$arguments71['package'] = NULL;
$arguments71['quantity'] = NULL;
$arguments71['locale'] = NULL;
$arguments71['id'] = 'forms.navigation.nextPage';
$array73 = array (
);$arguments71['package'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.renderingOptions.translationPackage', $array73)]);
$arguments71['value'] = 'Next page';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);
};
$arguments67 = array();
$arguments67['additionalAttributes'] = NULL;
$arguments67['data'] = NULL;
$arguments67['name'] = NULL;
$arguments67['value'] = NULL;
$arguments67['property'] = NULL;
$arguments67['autofocus'] = NULL;
$arguments67['disabled'] = false;
$arguments67['form'] = NULL;
$arguments67['formaction'] = NULL;
$arguments67['formenctype'] = NULL;
$arguments67['formmethod'] = NULL;
$arguments67['formnovalidate'] = NULL;
$arguments67['formtarget'] = NULL;
$arguments67['type'] = 'submit';
$arguments67['class'] = NULL;
$arguments67['dir'] = NULL;
$arguments67['id'] = NULL;
$arguments67['lang'] = NULL;
$arguments67['style'] = NULL;
$arguments67['title'] = NULL;
$arguments67['accesskey'] = NULL;
$arguments67['tabindex'] = NULL;
$arguments67['onclick'] = NULL;
$arguments67['name'] = '__currentPage';
$array69 = array (
);$arguments67['value'] = $renderingContext->getVariableProvider()->getByPath('form.nextPage.index', $array69);
$array70 = array (
);$arguments67['class'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.nextButtonClassAttribute', $array70);

$output66 .= Neos\FluidAdaptor\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output66 .= '
				</li>
			';
return $output66;
};
$arguments64 = array();

$output63 .= '';

$output63 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
				<li class="next submit">
					';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
								';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['id'] = NULL;
$arguments102['value'] = NULL;
$arguments102['arguments'] = array (
);
$arguments102['source'] = 'Main';
$arguments102['package'] = NULL;
$arguments102['quantity'] = NULL;
$arguments102['locale'] = NULL;
$arguments102['id'] = 'forms.navigation.submit';
$array104 = array (
);$arguments102['package'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.renderingOptions.translationPackage', $array104)]);
$array105 = array (
);$arguments102['value'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.submitButtonLabel', $array105);

$output101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext)]);

$output101 .= '
							';
return $output101;
};
$arguments99 = array();

$output98 .= '';

$output98 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$output108 = '';

$output108 .= '
								';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper
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
$arguments109['id'] = 'forms.navigation.submit';
$array111 = array (
);$arguments109['package'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.renderingOptions.translationPackage', $array111)]);
$arguments109['value'] = 'Submit';

$output108 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext)]);

$output108 .= '
							';
return $output108;
};
$arguments106 = array();
$arguments106['if'] = NULL;

$output98 .= '';

$output98 .= '
						';
return $output98;
};
$arguments84 = array();
$arguments84['then'] = NULL;
$arguments84['else'] = NULL;
$arguments84['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array95 = array();
$array96 = array (
);$array95['0'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.submitButtonLabel', $array96);

$expression97 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments84['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression97(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array95)
					),
					$renderingContext
				);
$arguments84['__thenClosure'] = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
								';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['id'] = NULL;
$arguments87['value'] = NULL;
$arguments87['arguments'] = array (
);
$arguments87['source'] = 'Main';
$arguments87['package'] = NULL;
$arguments87['quantity'] = NULL;
$arguments87['locale'] = NULL;
$arguments87['id'] = 'forms.navigation.submit';
$array89 = array (
);$arguments87['package'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.renderingOptions.translationPackage', $array89)]);
$array90 = array (
);$arguments87['value'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.submitButtonLabel', $array90);

$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext)]);

$output86 .= '
							';
return $output86;
};
$arguments84['__elseClosures'][] = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
								';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['id'] = NULL;
$arguments92['value'] = NULL;
$arguments92['arguments'] = array (
);
$arguments92['source'] = 'Main';
$arguments92['package'] = NULL;
$arguments92['quantity'] = NULL;
$arguments92['locale'] = NULL;
$arguments92['id'] = 'forms.navigation.submit';
$array94 = array (
);$arguments92['package'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.renderingOptions.translationPackage', $array94)]);
$arguments92['value'] = 'Submit';

$output91 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext)]);

$output91 .= '
							';
return $output91;
};

$output83 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output83 .= '
					';
return $output83;
};
$arguments77 = array();
$arguments77['additionalAttributes'] = NULL;
$arguments77['data'] = NULL;
$arguments77['name'] = NULL;
$arguments77['value'] = NULL;
$arguments77['property'] = NULL;
$arguments77['autofocus'] = NULL;
$arguments77['disabled'] = false;
$arguments77['form'] = NULL;
$arguments77['formaction'] = NULL;
$arguments77['formenctype'] = NULL;
$arguments77['formmethod'] = NULL;
$arguments77['formnovalidate'] = NULL;
$arguments77['formtarget'] = NULL;
$arguments77['type'] = 'submit';
$arguments77['class'] = NULL;
$arguments77['dir'] = NULL;
$arguments77['id'] = NULL;
$arguments77['lang'] = NULL;
$arguments77['style'] = NULL;
$arguments77['title'] = NULL;
$arguments77['accesskey'] = NULL;
$arguments77['tabindex'] = NULL;
$arguments77['onclick'] = NULL;
$arguments77['name'] = '__currentPage';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$array81 = array (
);return $renderingContext->getVariableProvider()->getByPath('form.pages', $array81);
};
$arguments79 = array();
$arguments79['subject'] = NULL;
$renderChildrenClosure80 = ($arguments79['subject'] !== null) ? function() use ($arguments79) { return $arguments79['subject']; } : $renderChildrenClosure80;$arguments77['value'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);
$array82 = array (
);$arguments77['class'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.submitButtonClassAttribute', $array82);

$output76 .= Neos\FluidAdaptor\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output76 .= '
				</li>
			';
return $output76;
};
$arguments74 = array();
$arguments74['if'] = NULL;

$output63 .= '';

$output63 .= '
		';
return $output63;
};
$arguments14 = array();
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array60 = array();
$array61 = array (
);$array60['0'] = $renderingContext->getVariableProvider()->getByPath('form.nextPage', $array61);

$expression62 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression62(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)
					),
					$renderingContext
				);
$arguments14['__thenClosure'] = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
				<li class="next">
					';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['id'] = NULL;
$arguments21['value'] = NULL;
$arguments21['arguments'] = array (
);
$arguments21['source'] = 'Main';
$arguments21['package'] = NULL;
$arguments21['quantity'] = NULL;
$arguments21['locale'] = NULL;
$arguments21['id'] = 'forms.navigation.nextPage';
$array23 = array (
);$arguments21['package'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.renderingOptions.translationPackage', $array23)]);
$arguments21['value'] = 'Next page';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);
};
$arguments17 = array();
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['name'] = NULL;
$arguments17['value'] = NULL;
$arguments17['property'] = NULL;
$arguments17['autofocus'] = NULL;
$arguments17['disabled'] = false;
$arguments17['form'] = NULL;
$arguments17['formaction'] = NULL;
$arguments17['formenctype'] = NULL;
$arguments17['formmethod'] = NULL;
$arguments17['formnovalidate'] = NULL;
$arguments17['formtarget'] = NULL;
$arguments17['type'] = 'submit';
$arguments17['class'] = NULL;
$arguments17['dir'] = NULL;
$arguments17['id'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$arguments17['name'] = '__currentPage';
$array19 = array (
);$arguments17['value'] = $renderingContext->getVariableProvider()->getByPath('form.nextPage.index', $array19);
$array20 = array (
);$arguments17['class'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.nextButtonClassAttribute', $array20);

$output16 .= Neos\FluidAdaptor\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
				</li>
			';
return $output16;
};
$arguments14['__elseClosures'][] = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
				<li class="next submit">
					';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
								';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
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
$arguments50['id'] = 'forms.navigation.submit';
$array52 = array (
);$arguments50['package'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.renderingOptions.translationPackage', $array52)]);
$array53 = array (
);$arguments50['value'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.submitButtonLabel', $array53);

$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output49 .= '
							';
return $output49;
};
$arguments47 = array();

$output46 .= '';

$output46 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
								';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['id'] = NULL;
$arguments57['value'] = NULL;
$arguments57['arguments'] = array (
);
$arguments57['source'] = 'Main';
$arguments57['package'] = NULL;
$arguments57['quantity'] = NULL;
$arguments57['locale'] = NULL;
$arguments57['id'] = 'forms.navigation.submit';
$array59 = array (
);$arguments57['package'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.renderingOptions.translationPackage', $array59)]);
$arguments57['value'] = 'Submit';

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output56 .= '
							';
return $output56;
};
$arguments54 = array();
$arguments54['if'] = NULL;

$output46 .= '';

$output46 .= '
						';
return $output46;
};
$arguments32 = array();
$arguments32['then'] = NULL;
$arguments32['else'] = NULL;
$arguments32['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array43 = array();
$array44 = array (
);$array43['0'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.submitButtonLabel', $array44);

$expression45 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments32['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression45(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array43)
					),
					$renderingContext
				);
$arguments32['__thenClosure'] = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
								';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['id'] = NULL;
$arguments35['value'] = NULL;
$arguments35['arguments'] = array (
);
$arguments35['source'] = 'Main';
$arguments35['package'] = NULL;
$arguments35['quantity'] = NULL;
$arguments35['locale'] = NULL;
$arguments35['id'] = 'forms.navigation.submit';
$array37 = array (
);$arguments35['package'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.renderingOptions.translationPackage', $array37)]);
$array38 = array (
);$arguments35['value'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.submitButtonLabel', $array38);

$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext)]);

$output34 .= '
							';
return $output34;
};
$arguments32['__elseClosures'][] = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
								';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['id'] = NULL;
$arguments40['value'] = NULL;
$arguments40['arguments'] = array (
);
$arguments40['source'] = 'Main';
$arguments40['package'] = NULL;
$arguments40['quantity'] = NULL;
$arguments40['locale'] = NULL;
$arguments40['id'] = 'forms.navigation.submit';
$array42 = array (
);$arguments40['package'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.renderingOptions.translationPackage', $array42)]);
$arguments40['value'] = 'Submit';

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext)]);

$output39 .= '
							';
return $output39;
};

$output31 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
					';
return $output31;
};
$arguments25 = array();
$arguments25['additionalAttributes'] = NULL;
$arguments25['data'] = NULL;
$arguments25['name'] = NULL;
$arguments25['value'] = NULL;
$arguments25['property'] = NULL;
$arguments25['autofocus'] = NULL;
$arguments25['disabled'] = false;
$arguments25['form'] = NULL;
$arguments25['formaction'] = NULL;
$arguments25['formenctype'] = NULL;
$arguments25['formmethod'] = NULL;
$arguments25['formnovalidate'] = NULL;
$arguments25['formtarget'] = NULL;
$arguments25['type'] = 'submit';
$arguments25['class'] = NULL;
$arguments25['dir'] = NULL;
$arguments25['id'] = NULL;
$arguments25['lang'] = NULL;
$arguments25['style'] = NULL;
$arguments25['title'] = NULL;
$arguments25['accesskey'] = NULL;
$arguments25['tabindex'] = NULL;
$arguments25['onclick'] = NULL;
$arguments25['name'] = '__currentPage';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$array29 = array (
);return $renderingContext->getVariableProvider()->getByPath('form.pages', $array29);
};
$arguments27 = array();
$arguments27['subject'] = NULL;
$renderChildrenClosure28 = ($arguments27['subject'] !== null) ? function() use ($arguments27) { return $arguments27['subject']; } : $renderChildrenClosure28;$arguments25['value'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);
$array30 = array (
);$arguments25['class'] = $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.submitButtonClassAttribute', $array30);

$output24 .= Neos\FluidAdaptor\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
				</li>
			';
return $output24;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output0 .= '
	</ul>
</nav>
';

return $output0;
}


}
#0             35966     