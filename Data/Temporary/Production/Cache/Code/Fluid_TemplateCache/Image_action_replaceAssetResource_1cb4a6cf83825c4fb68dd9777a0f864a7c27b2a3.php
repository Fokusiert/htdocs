<?php 
class Image_action_replaceAssetResource_1cb4a6cf83825c4fb68dd9777a0f864a7c27b2a3 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'UploadImage';
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
  'm' => 
  array (
    0 => 'Neos\\Media\\ViewHelpers',
  ),
  'neos' => 
  array (
    0 => 'Neos\\Neos\\ViewHelpers',
  ),
));
}

/**
 * section Title
 */
public function section_768e0c1c69573fb588f61f1308a015c11468e05f(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return 'Replace view of AssetController';
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output5 = '';

$output5 .= '
        <div class="neos-row-fluid">
            <div class="neos-span8">
                <fieldset>
                    <legend>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['id'] = NULL;
$arguments6['value'] = NULL;
$arguments6['arguments'] = array (
);
$arguments6['source'] = 'Main';
$arguments6['package'] = NULL;
$arguments6['quantity'] = NULL;
$arguments6['locale'] = NULL;
$arguments6['id'] = 'replaceAsset.replaceFilename';
$arguments6['package'] = 'Neos.Media.Browser';
// Rendering Array
$array8 = array();
$array9 = array (
);$array8['filename'] = $renderingContext->getVariableProvider()->getByPath('asset.resource.filename', $array9);
$arguments6['arguments'] = $array8;

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output5 .= '</legend>
                    <p class="neos-buffer-below">
                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['id'] = NULL;
$arguments10['value'] = NULL;
$arguments10['arguments'] = array (
);
$arguments10['source'] = 'Main';
$arguments10['package'] = NULL;
$arguments10['quantity'] = NULL;
$arguments10['locale'] = NULL;
$arguments10['id'] = 'replaceAsset.description';
$arguments10['package'] = 'Neos.Media.Browser';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output5 .= '<br/>
                        <b>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['id'] = NULL;
$arguments12['value'] = NULL;
$arguments12['arguments'] = array (
);
$arguments12['source'] = 'Main';
$arguments12['package'] = NULL;
$arguments12['quantity'] = NULL;
$arguments12['locale'] = NULL;
$arguments12['id'] = 'replaceAsset.note';
$arguments12['package'] = 'Neos.Media.Browser';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

$output5 .= ': </b> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['id'] = NULL;
$arguments14['value'] = NULL;
$arguments14['arguments'] = array (
);
$arguments14['source'] = 'Main';
$arguments14['package'] = NULL;
$arguments14['quantity'] = NULL;
$arguments14['locale'] = NULL;
$arguments14['id'] = 'replaceAsset.noteText';
$arguments14['package'] = 'Neos.Media.Browser';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext)]);

$output5 .= '
                    </p>
                    <span class="neos-file-input">
                        <label class="neos-button neos-button-primary" for="resource" title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['id'] = NULL;
$arguments16['value'] = NULL;
$arguments16['arguments'] = array (
);
$arguments16['source'] = 'Main';
$arguments16['package'] = NULL;
$arguments16['quantity'] = NULL;
$arguments16['locale'] = NULL;
$arguments16['id'] = 'maxUploadSize';
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['0'] = $renderingContext->getVariableProvider()->getByPath('humanReadableMaximumFileUploadSize', $array19);
$arguments16['arguments'] = $array18;
$arguments16['package'] = 'Neos.Media.Browser';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext)]);

$output5 .= '" data-neos-toggle="tooltip">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['id'] = NULL;
$arguments20['value'] = NULL;
$arguments20['arguments'] = array (
);
$arguments20['source'] = 'Main';
$arguments20['package'] = NULL;
$arguments20['quantity'] = NULL;
$arguments20['locale'] = NULL;
$arguments20['id'] = 'replaceAsset.chooseNewFile';
$arguments20['package'] = 'Neos.Media.Browser';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output5 .= ' <i class="fas fa-file"></i></label>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\UploadViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['additionalAttributes'] = NULL;
$arguments22['data'] = NULL;
$arguments22['name'] = NULL;
$arguments22['value'] = NULL;
$arguments22['property'] = NULL;
$arguments22['disabled'] = false;
$arguments22['errorClass'] = 'f3-form-error';
$arguments22['collection'] = '';
$arguments22['class'] = NULL;
$arguments22['dir'] = NULL;
$arguments22['id'] = NULL;
$arguments22['lang'] = NULL;
$arguments22['style'] = NULL;
$arguments22['title'] = NULL;
$arguments22['accesskey'] = NULL;
$arguments22['tabindex'] = NULL;
$arguments22['onclick'] = NULL;
$arguments22['id'] = 'resource';
$arguments22['name'] = 'resource';
// Rendering Array
$array24 = array();
$array24['required'] = 'required';
$arguments22['additionalAttributes'] = $array24;

$output5 .= Neos\FluidAdaptor\ViewHelpers\Form\UploadViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output5 .= '
                    </span>
                </fieldset>
                <fieldset>
                    <div>
                        <label class="neos-checkbox neos-inline">
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['additionalAttributes'] = NULL;
$arguments25['data'] = NULL;
$arguments25['name'] = NULL;
$arguments25['value'] = NULL;
$arguments25['property'] = NULL;
$arguments25['disabled'] = false;
$arguments25['errorClass'] = 'f3-form-error';
$arguments25['checked'] = NULL;
$arguments25['multiple'] = NULL;
$arguments25['class'] = NULL;
$arguments25['dir'] = NULL;
$arguments25['id'] = NULL;
$arguments25['lang'] = NULL;
$arguments25['style'] = NULL;
$arguments25['title'] = NULL;
$arguments25['accesskey'] = NULL;
$arguments25['tabindex'] = NULL;
$arguments25['onclick'] = NULL;
$arguments25['name'] = 'options[keepOriginalFilename]';
$arguments25['value'] = 1;

$output5 .= Neos\FluidAdaptor\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output5 .= '
                            <span></span> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['id'] = NULL;
$arguments27['value'] = NULL;
$arguments27['arguments'] = array (
);
$arguments27['source'] = 'Main';
$arguments27['package'] = NULL;
$arguments27['quantity'] = NULL;
$arguments27['locale'] = NULL;
$arguments27['id'] = 'replace.options.keepOriginalFilename';
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['0'] = $renderingContext->getVariableProvider()->getByPath('asset.resource.filename', $array30);
$arguments27['arguments'] = $array29;
$arguments27['package'] = 'Neos.Media.Browser';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);

$output5 .= '
                        </label>
                    </div>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output36 = '';

$output36 .= '
                        <div>
                            <label class="neos-checkbox neos-inline">
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['additionalAttributes'] = NULL;
$arguments37['data'] = NULL;
$arguments37['name'] = NULL;
$arguments37['value'] = NULL;
$arguments37['property'] = NULL;
$arguments37['disabled'] = false;
$arguments37['errorClass'] = 'f3-form-error';
$arguments37['checked'] = NULL;
$arguments37['multiple'] = NULL;
$arguments37['class'] = NULL;
$arguments37['dir'] = NULL;
$arguments37['id'] = NULL;
$arguments37['lang'] = NULL;
$arguments37['style'] = NULL;
$arguments37['title'] = NULL;
$arguments37['accesskey'] = NULL;
$arguments37['tabindex'] = NULL;
$arguments37['onclick'] = NULL;
$arguments37['name'] = 'options[generateRedirects]';
$arguments37['value'] = 1;
// Rendering Boolean node
// Rendering Array
$array39 = array();
$array39['0'] = 'true';

$expression40 = function($context) {return TRUE;};
$arguments37['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression40(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)
					),
					$renderingContext
				);

$output36 .= Neos\FluidAdaptor\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
                                <span></span> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['id'] = NULL;
$arguments41['value'] = NULL;
$arguments41['arguments'] = array (
);
$arguments41['source'] = 'Main';
$arguments41['package'] = NULL;
$arguments41['quantity'] = NULL;
$arguments41['locale'] = NULL;
$arguments41['id'] = 'replace.options.generateRedirects';
$arguments41['package'] = 'Neos.Media.Browser';

$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext)]);

$output36 .= '
                            </label>
                        </div>
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
);$array33['0'] = $renderingContext->getVariableProvider()->getByPath('redirectPackageEnabled', $array34);

$expression35 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$arguments31['__thenClosure'] = $renderChildrenClosure32;

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output5 .= '
                </fieldset>
                <fieldset>
                    <legend>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['id'] = NULL;
$arguments43['value'] = NULL;
$arguments43['arguments'] = array (
);
$arguments43['source'] = 'Main';
$arguments43['package'] = NULL;
$arguments43['quantity'] = NULL;
$arguments43['locale'] = NULL;
$arguments43['id'] = 'relatedNodes.referencesTo';
$arguments43['package'] = 'Neos.Media.Browser';
// Rendering Array
$array45 = array();
$array46 = array (
);$array45['asset'] = $renderingContext->getVariableProvider()->getByPath('asset.label', $array46);
$arguments43['arguments'] = $array45;

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);

$output5 .= '</legend>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
                            <p class="neos-buffer-below"><i class="fas fa-exclamation-sign"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
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
$arguments71['id'] = 'replace.usageCount';
// Rendering Array
$array73 = array();
$array74 = array (
);$array73['usageCount'] = $renderingContext->getVariableProvider()->getByPath('asset.usageCount', $array74);
$arguments71['arguments'] = $array73;
$arguments71['package'] = 'Neos.Media.Browser';

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);

$output70 .= '</p>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
                                ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['id'] = NULL;
$arguments80['value'] = NULL;
$arguments80['arguments'] = array (
);
$arguments80['source'] = 'Main';
$arguments80['package'] = NULL;
$arguments80['quantity'] = NULL;
$arguments80['locale'] = NULL;
$arguments80['id'] = 'replace.allUsages';
$arguments80['package'] = 'Neos.Media.Browser';

$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext)]);

$output79 .= '
                            ';
return $output79;
};
$arguments75 = array();
$arguments75['additionalAttributes'] = NULL;
$arguments75['data'] = NULL;
$arguments75['class'] = NULL;
$arguments75['dir'] = NULL;
$arguments75['id'] = NULL;
$arguments75['lang'] = NULL;
$arguments75['style'] = NULL;
$arguments75['title'] = NULL;
$arguments75['accesskey'] = NULL;
$arguments75['tabindex'] = NULL;
$arguments75['onclick'] = NULL;
$arguments75['name'] = NULL;
$arguments75['rel'] = NULL;
$arguments75['rev'] = NULL;
$arguments75['target'] = NULL;
$arguments75['action'] = NULL;
$arguments75['arguments'] = array (
);
$arguments75['controller'] = NULL;
$arguments75['package'] = NULL;
$arguments75['subpackage'] = NULL;
$arguments75['section'] = '';
$arguments75['format'] = '';
$arguments75['additionalParams'] = array (
);
$arguments75['addQueryString'] = false;
$arguments75['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments75['useParentRequest'] = false;
$arguments75['absolute'] = true;
$arguments75['useMainRequest'] = false;
$arguments75['action'] = 'relatedNodes';
// Rendering Array
$array77 = array();
$array78 = array (
);$array77['asset'] = $renderingContext->getVariableProvider()->getByPath('asset', $array78);
$arguments75['arguments'] = $array77;
$arguments75['class'] = 'neos-button';

$output70 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output70 .= '
                        ';
return $output70;
};
$arguments68 = array();

$output67 .= '';

$output67 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
                            <p><i class="fas fa-ok-sign"></i> ';
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
$arguments85['id'] = 'replace.notUsed';
$arguments85['package'] = 'Neos.Media.Browser';

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext)]);

$output84 .= '</p>
                        ';
return $output84;
};
$arguments82 = array();
$arguments82['if'] = NULL;

$output67 .= '';

$output67 .= '
                    ';
return $output67;
};
$arguments47 = array();
$arguments47['then'] = NULL;
$arguments47['else'] = NULL;
$arguments47['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array64 = array();
$array65 = array (
);$array64['0'] = $renderingContext->getVariableProvider()->getByPath('asset.inUse', $array65);

$expression66 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments47['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression66(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array64)
					),
					$renderingContext
				);
$arguments47['__thenClosure'] = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
                            <p class="neos-buffer-below"><i class="fas fa-exclamation-sign"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
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
$arguments50['id'] = 'replace.usageCount';
// Rendering Array
$array52 = array();
$array53 = array (
);$array52['usageCount'] = $renderingContext->getVariableProvider()->getByPath('asset.usageCount', $array53);
$arguments50['arguments'] = $array52;
$arguments50['package'] = 'Neos.Media.Browser';

$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output49 .= '</p>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
                                ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['id'] = NULL;
$arguments59['value'] = NULL;
$arguments59['arguments'] = array (
);
$arguments59['source'] = 'Main';
$arguments59['package'] = NULL;
$arguments59['quantity'] = NULL;
$arguments59['locale'] = NULL;
$arguments59['id'] = 'replace.allUsages';
$arguments59['package'] = 'Neos.Media.Browser';

$output58 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext)]);

$output58 .= '
                            ';
return $output58;
};
$arguments54 = array();
$arguments54['additionalAttributes'] = NULL;
$arguments54['data'] = NULL;
$arguments54['class'] = NULL;
$arguments54['dir'] = NULL;
$arguments54['id'] = NULL;
$arguments54['lang'] = NULL;
$arguments54['style'] = NULL;
$arguments54['title'] = NULL;
$arguments54['accesskey'] = NULL;
$arguments54['tabindex'] = NULL;
$arguments54['onclick'] = NULL;
$arguments54['name'] = NULL;
$arguments54['rel'] = NULL;
$arguments54['rev'] = NULL;
$arguments54['target'] = NULL;
$arguments54['action'] = NULL;
$arguments54['arguments'] = array (
);
$arguments54['controller'] = NULL;
$arguments54['package'] = NULL;
$arguments54['subpackage'] = NULL;
$arguments54['section'] = '';
$arguments54['format'] = '';
$arguments54['additionalParams'] = array (
);
$arguments54['addQueryString'] = false;
$arguments54['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments54['useParentRequest'] = false;
$arguments54['absolute'] = true;
$arguments54['useMainRequest'] = false;
$arguments54['action'] = 'relatedNodes';
// Rendering Array
$array56 = array();
$array57 = array (
);$array56['asset'] = $renderingContext->getVariableProvider()->getByPath('asset', $array57);
$arguments54['arguments'] = $array56;
$arguments54['class'] = 'neos-button';

$output49 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output49 .= '
                        ';
return $output49;
};
$arguments47['__elseClosures'][] = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
                            <p><i class="fas fa-ok-sign"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['id'] = NULL;
$arguments62['value'] = NULL;
$arguments62['arguments'] = array (
);
$arguments62['source'] = 'Main';
$arguments62['package'] = NULL;
$arguments62['quantity'] = NULL;
$arguments62['locale'] = NULL;
$arguments62['id'] = 'replace.notUsed';
$arguments62['package'] = 'Neos.Media.Browser';

$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext)]);

$output61 .= '</p>
                        ';
return $output61;
};

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output5 .= '
                </fieldset>
            </div>
            <div class="neos-span4 neos-image-example">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['section'] = NULL;
$arguments87['partial'] = NULL;
$arguments87['delegate'] = NULL;
$arguments87['renderable'] = NULL;
$arguments87['arguments'] = array (
);
$arguments87['optional'] = false;
$arguments87['default'] = NULL;
$arguments87['contentAs'] = NULL;
$arguments87['section'] = 'ContentImage';
$arguments87['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output5 .= '
            </div>
        </div>
        <div class="neos-footer">
            <!-- TODO: Find a nicer way to send the referer for a get request -->
            <a href="javascript:window.history.back(1);" class="neos-button">';
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
$arguments90['id'] = 'cancel';
$arguments90['package'] = 'Neos.Neos';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext)]);

$output5 .= '</a>
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['additionalAttributes'] = NULL;
$arguments92['data'] = NULL;
$arguments92['name'] = NULL;
$arguments92['value'] = NULL;
$arguments92['property'] = NULL;
$arguments92['disabled'] = false;
$arguments92['class'] = NULL;
$arguments92['dir'] = NULL;
$arguments92['id'] = NULL;
$arguments92['lang'] = NULL;
$arguments92['style'] = NULL;
$arguments92['title'] = NULL;
$arguments92['accesskey'] = NULL;
$arguments92['tabindex'] = NULL;
$arguments92['onclick'] = NULL;
$arguments92['id'] = 'replace';
$arguments92['class'] = 'neos-button neos-button-primary';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['id'] = NULL;
$arguments94['value'] = NULL;
$arguments94['arguments'] = array (
);
$arguments94['source'] = 'Main';
$arguments94['package'] = NULL;
$arguments94['quantity'] = NULL;
$arguments94['locale'] = NULL;
$arguments94['id'] = 'replaceAssetResource';
$arguments94['package'] = 'Neos.Media.Browser';
$arguments92['value'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output5 .= Neos\FluidAdaptor\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output5 .= '
        </div>
    ';
return $output5;
};
$arguments1 = array();
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['enctype'] = NULL;
$arguments1['method'] = NULL;
$arguments1['name'] = NULL;
$arguments1['onreset'] = NULL;
$arguments1['onsubmit'] = NULL;
$arguments1['action'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['controller'] = NULL;
$arguments1['package'] = NULL;
$arguments1['subpackage'] = NULL;
$arguments1['object'] = NULL;
$arguments1['section'] = '';
$arguments1['format'] = '';
$arguments1['additionalParams'] = array (
);
$arguments1['absolute'] = false;
$arguments1['addQueryString'] = false;
$arguments1['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1['fieldNamePrefix'] = NULL;
$arguments1['actionUri'] = NULL;
$arguments1['objectName'] = NULL;
$arguments1['useParentRequest'] = false;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['method'] = 'post';
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['asset'] = $renderingContext->getVariableProvider()->getByPath('asset', $array4);
$arguments1['arguments'] = $array3;
$arguments1['action'] = 'updateAssetResource';
$arguments1['enctype'] = 'multipart/form-data';

$output0 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * section ContentImage
 */
public function section_73388ee6d547712d99e8f2a39f98ec2df7522ae3(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output96 = '';

$output96 .= '
    <label>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['id'] = NULL;
$arguments97['value'] = NULL;
$arguments97['arguments'] = array (
);
$arguments97['source'] = 'Main';
$arguments97['package'] = NULL;
$arguments97['quantity'] = NULL;
$arguments97['locale'] = NULL;
$arguments97['id'] = 'replace.previewFile';
$arguments97['package'] = 'Neos.Media.Browser';

$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext)]);

$output96 .= '</label>
    <div class="neos-preview-image">
        <a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['path'] = NULL;
$arguments99['package'] = NULL;
$arguments99['resource'] = NULL;
$arguments99['localize'] = true;
$array101 = array (
);$arguments99['resource'] = $renderingContext->getVariableProvider()->getByPath('asset.resource', $array101);

$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext)]);

$output96 .= '" target="_blank">
            ';
// Rendering ViewHelper Neos\Media\ViewHelpers\ThumbnailViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments102 = array();
$arguments102['additionalAttributes'] = NULL;
$arguments102['data'] = NULL;
$arguments102['asset'] = NULL;
$arguments102['width'] = NULL;
$arguments102['maximumWidth'] = NULL;
$arguments102['height'] = NULL;
$arguments102['maximumHeight'] = NULL;
$arguments102['allowCropping'] = false;
$arguments102['allowUpScaling'] = false;
$arguments102['async'] = false;
$arguments102['preset'] = NULL;
$arguments102['quality'] = NULL;
$arguments102['class'] = NULL;
$arguments102['dir'] = NULL;
$arguments102['id'] = NULL;
$arguments102['lang'] = NULL;
$arguments102['style'] = NULL;
$arguments102['title'] = NULL;
$arguments102['accesskey'] = NULL;
$arguments102['tabindex'] = NULL;
$arguments102['onclick'] = NULL;
$arguments102['alt'] = NULL;
$array104 = array (
);$arguments102['asset'] = $renderingContext->getVariableProvider()->getByPath('asset', $array104);
$arguments102['maximumWidth'] = 1000;
$arguments102['maximumHeight'] = 1000;
$array105 = array (
);$arguments102['alt'] = $renderingContext->getVariableProvider()->getByPath('asset.label', $array105);
$arguments102['class'] = 'img-polaroid';

$output96 .= Neos\Media\ViewHelpers\ThumbnailViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output96 .= '
        </a>
    </div>
';

return $output96;
}
/**
 * section Scripts
 */
public function section_381e3298b2b8f6caeb2208b57d805ada38402f0b(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output106 = '';

$output106 .= '
    <script type="text/javascript">
        var maximumFileUploadSize = ';
$array107 = array (
);
$output106 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('maximumFileUploadSize', $array107)]);

$output106 .= ';
    </script>
    <script type="text/javascript" src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments108 = array();
$arguments108['path'] = NULL;
$arguments108['package'] = NULL;
$arguments108['resource'] = NULL;
$arguments108['localize'] = true;
$arguments108['package'] = 'Neos.Media.Browser';
$arguments108['path'] = 'JavaScript/new.js';

$output106 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext)]);

$output106 .= '"></script>
';

return $output106;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output110 = '';

$output110 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments111 = array();
$arguments111['name'] = NULL;
$arguments111['name'] = 'UploadImage';

$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output110 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return 'Replace view of AssetController';
};
$arguments113 = array();
$arguments113['name'] = NULL;
$arguments113['name'] = 'Title';

$output110 .= NULL;

$output110 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$output117 = '';

$output117 .= '
    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '
        <div class="neos-row-fluid">
            <div class="neos-span8">
                <fieldset>
                    <legend>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments123 = array();
$arguments123['id'] = NULL;
$arguments123['value'] = NULL;
$arguments123['arguments'] = array (
);
$arguments123['source'] = 'Main';
$arguments123['package'] = NULL;
$arguments123['quantity'] = NULL;
$arguments123['locale'] = NULL;
$arguments123['id'] = 'replaceAsset.replaceFilename';
$arguments123['package'] = 'Neos.Media.Browser';
// Rendering Array
$array125 = array();
$array126 = array (
);$array125['filename'] = $renderingContext->getVariableProvider()->getByPath('asset.resource.filename', $array126);
$arguments123['arguments'] = $array125;

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext)]);

$output122 .= '</legend>
                    <p class="neos-buffer-below">
                        ';
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
$arguments127['id'] = 'replaceAsset.description';
$arguments127['package'] = 'Neos.Media.Browser';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext)]);

$output122 .= '<br/>
                        <b>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments129 = array();
$arguments129['id'] = NULL;
$arguments129['value'] = NULL;
$arguments129['arguments'] = array (
);
$arguments129['source'] = 'Main';
$arguments129['package'] = NULL;
$arguments129['quantity'] = NULL;
$arguments129['locale'] = NULL;
$arguments129['id'] = 'replaceAsset.note';
$arguments129['package'] = 'Neos.Media.Browser';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext)]);

$output122 .= ': </b> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments131 = array();
$arguments131['id'] = NULL;
$arguments131['value'] = NULL;
$arguments131['arguments'] = array (
);
$arguments131['source'] = 'Main';
$arguments131['package'] = NULL;
$arguments131['quantity'] = NULL;
$arguments131['locale'] = NULL;
$arguments131['id'] = 'replaceAsset.noteText';
$arguments131['package'] = 'Neos.Media.Browser';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext)]);

$output122 .= '
                    </p>
                    <span class="neos-file-input">
                        <label class="neos-button neos-button-primary" for="resource" title="';
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
$arguments133['id'] = 'maxUploadSize';
// Rendering Array
$array135 = array();
$array136 = array (
);$array135['0'] = $renderingContext->getVariableProvider()->getByPath('humanReadableMaximumFileUploadSize', $array136);
$arguments133['arguments'] = $array135;
$arguments133['package'] = 'Neos.Media.Browser';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext)]);

$output122 .= '" data-neos-toggle="tooltip">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments137 = array();
$arguments137['id'] = NULL;
$arguments137['value'] = NULL;
$arguments137['arguments'] = array (
);
$arguments137['source'] = 'Main';
$arguments137['package'] = NULL;
$arguments137['quantity'] = NULL;
$arguments137['locale'] = NULL;
$arguments137['id'] = 'replaceAsset.chooseNewFile';
$arguments137['package'] = 'Neos.Media.Browser';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext)]);

$output122 .= ' <i class="fas fa-file"></i></label>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\UploadViewHelper
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
$arguments139['errorClass'] = 'f3-form-error';
$arguments139['collection'] = '';
$arguments139['class'] = NULL;
$arguments139['dir'] = NULL;
$arguments139['id'] = NULL;
$arguments139['lang'] = NULL;
$arguments139['style'] = NULL;
$arguments139['title'] = NULL;
$arguments139['accesskey'] = NULL;
$arguments139['tabindex'] = NULL;
$arguments139['onclick'] = NULL;
$arguments139['id'] = 'resource';
$arguments139['name'] = 'resource';
// Rendering Array
$array141 = array();
$array141['required'] = 'required';
$arguments139['additionalAttributes'] = $array141;

$output122 .= Neos\FluidAdaptor\ViewHelpers\Form\UploadViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output122 .= '
                    </span>
                </fieldset>
                <fieldset>
                    <div>
                        <label class="neos-checkbox neos-inline">
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['additionalAttributes'] = NULL;
$arguments142['data'] = NULL;
$arguments142['name'] = NULL;
$arguments142['value'] = NULL;
$arguments142['property'] = NULL;
$arguments142['disabled'] = false;
$arguments142['errorClass'] = 'f3-form-error';
$arguments142['checked'] = NULL;
$arguments142['multiple'] = NULL;
$arguments142['class'] = NULL;
$arguments142['dir'] = NULL;
$arguments142['id'] = NULL;
$arguments142['lang'] = NULL;
$arguments142['style'] = NULL;
$arguments142['title'] = NULL;
$arguments142['accesskey'] = NULL;
$arguments142['tabindex'] = NULL;
$arguments142['onclick'] = NULL;
$arguments142['name'] = 'options[keepOriginalFilename]';
$arguments142['value'] = 1;

$output122 .= Neos\FluidAdaptor\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output122 .= '
                            <span></span> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments144 = array();
$arguments144['id'] = NULL;
$arguments144['value'] = NULL;
$arguments144['arguments'] = array (
);
$arguments144['source'] = 'Main';
$arguments144['package'] = NULL;
$arguments144['quantity'] = NULL;
$arguments144['locale'] = NULL;
$arguments144['id'] = 'replace.options.keepOriginalFilename';
// Rendering Array
$array146 = array();
$array147 = array (
);$array146['0'] = $renderingContext->getVariableProvider()->getByPath('asset.resource.filename', $array147);
$arguments144['arguments'] = $array146;
$arguments144['package'] = 'Neos.Media.Browser';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext)]);

$output122 .= '
                        </label>
                    </div>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$output153 = '';

$output153 .= '
                        <div>
                            <label class="neos-checkbox neos-inline">
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments154 = array();
$arguments154['additionalAttributes'] = NULL;
$arguments154['data'] = NULL;
$arguments154['name'] = NULL;
$arguments154['value'] = NULL;
$arguments154['property'] = NULL;
$arguments154['disabled'] = false;
$arguments154['errorClass'] = 'f3-form-error';
$arguments154['checked'] = NULL;
$arguments154['multiple'] = NULL;
$arguments154['class'] = NULL;
$arguments154['dir'] = NULL;
$arguments154['id'] = NULL;
$arguments154['lang'] = NULL;
$arguments154['style'] = NULL;
$arguments154['title'] = NULL;
$arguments154['accesskey'] = NULL;
$arguments154['tabindex'] = NULL;
$arguments154['onclick'] = NULL;
$arguments154['name'] = 'options[generateRedirects]';
$arguments154['value'] = 1;
// Rendering Boolean node
// Rendering Array
$array156 = array();
$array156['0'] = 'true';

$expression157 = function($context) {return TRUE;};
$arguments154['checked'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression157(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array156)
					),
					$renderingContext
				);

$output153 .= Neos\FluidAdaptor\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output153 .= '
                                <span></span> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['id'] = NULL;
$arguments158['value'] = NULL;
$arguments158['arguments'] = array (
);
$arguments158['source'] = 'Main';
$arguments158['package'] = NULL;
$arguments158['quantity'] = NULL;
$arguments158['locale'] = NULL;
$arguments158['id'] = 'replace.options.generateRedirects';
$arguments158['package'] = 'Neos.Media.Browser';

$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext)]);

$output153 .= '
                            </label>
                        </div>
                    ';
return $output153;
};
$arguments148 = array();
$arguments148['then'] = NULL;
$arguments148['else'] = NULL;
$arguments148['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array150 = array();
$array151 = array (
);$array150['0'] = $renderingContext->getVariableProvider()->getByPath('redirectPackageEnabled', $array151);

$expression152 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments148['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression152(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array150)
					),
					$renderingContext
				);
$arguments148['__thenClosure'] = $renderChildrenClosure149;

$output122 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output122 .= '
                </fieldset>
                <fieldset>
                    <legend>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments160 = array();
$arguments160['id'] = NULL;
$arguments160['value'] = NULL;
$arguments160['arguments'] = array (
);
$arguments160['source'] = 'Main';
$arguments160['package'] = NULL;
$arguments160['quantity'] = NULL;
$arguments160['locale'] = NULL;
$arguments160['id'] = 'relatedNodes.referencesTo';
$arguments160['package'] = 'Neos.Media.Browser';
// Rendering Array
$array162 = array();
$array163 = array (
);$array162['asset'] = $renderingContext->getVariableProvider()->getByPath('asset.label', $array163);
$arguments160['arguments'] = $array162;

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext)]);

$output122 .= '</legend>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
$output184 = '';

$output184 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
$output187 = '';

$output187 .= '
                            <p class="neos-buffer-below"><i class="fas fa-exclamation-sign"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments188 = array();
$arguments188['id'] = NULL;
$arguments188['value'] = NULL;
$arguments188['arguments'] = array (
);
$arguments188['source'] = 'Main';
$arguments188['package'] = NULL;
$arguments188['quantity'] = NULL;
$arguments188['locale'] = NULL;
$arguments188['id'] = 'replace.usageCount';
// Rendering Array
$array190 = array();
$array191 = array (
);$array190['usageCount'] = $renderingContext->getVariableProvider()->getByPath('asset.usageCount', $array191);
$arguments188['arguments'] = $array190;
$arguments188['package'] = 'Neos.Media.Browser';

$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext)]);

$output187 .= '</p>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
$output196 = '';

$output196 .= '
                                ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments197 = array();
$arguments197['id'] = NULL;
$arguments197['value'] = NULL;
$arguments197['arguments'] = array (
);
$arguments197['source'] = 'Main';
$arguments197['package'] = NULL;
$arguments197['quantity'] = NULL;
$arguments197['locale'] = NULL;
$arguments197['id'] = 'replace.allUsages';
$arguments197['package'] = 'Neos.Media.Browser';

$output196 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext)]);

$output196 .= '
                            ';
return $output196;
};
$arguments192 = array();
$arguments192['additionalAttributes'] = NULL;
$arguments192['data'] = NULL;
$arguments192['class'] = NULL;
$arguments192['dir'] = NULL;
$arguments192['id'] = NULL;
$arguments192['lang'] = NULL;
$arguments192['style'] = NULL;
$arguments192['title'] = NULL;
$arguments192['accesskey'] = NULL;
$arguments192['tabindex'] = NULL;
$arguments192['onclick'] = NULL;
$arguments192['name'] = NULL;
$arguments192['rel'] = NULL;
$arguments192['rev'] = NULL;
$arguments192['target'] = NULL;
$arguments192['action'] = NULL;
$arguments192['arguments'] = array (
);
$arguments192['controller'] = NULL;
$arguments192['package'] = NULL;
$arguments192['subpackage'] = NULL;
$arguments192['section'] = '';
$arguments192['format'] = '';
$arguments192['additionalParams'] = array (
);
$arguments192['addQueryString'] = false;
$arguments192['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments192['useParentRequest'] = false;
$arguments192['absolute'] = true;
$arguments192['useMainRequest'] = false;
$arguments192['action'] = 'relatedNodes';
// Rendering Array
$array194 = array();
$array195 = array (
);$array194['asset'] = $renderingContext->getVariableProvider()->getByPath('asset', $array195);
$arguments192['arguments'] = $array194;
$arguments192['class'] = 'neos-button';

$output187 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);

$output187 .= '
                        ';
return $output187;
};
$arguments185 = array();

$output184 .= '';

$output184 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
$output201 = '';

$output201 .= '
                            <p><i class="fas fa-ok-sign"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments202 = array();
$arguments202['id'] = NULL;
$arguments202['value'] = NULL;
$arguments202['arguments'] = array (
);
$arguments202['source'] = 'Main';
$arguments202['package'] = NULL;
$arguments202['quantity'] = NULL;
$arguments202['locale'] = NULL;
$arguments202['id'] = 'replace.notUsed';
$arguments202['package'] = 'Neos.Media.Browser';

$output201 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext)]);

$output201 .= '</p>
                        ';
return $output201;
};
$arguments199 = array();
$arguments199['if'] = NULL;

$output184 .= '';

$output184 .= '
                    ';
return $output184;
};
$arguments164 = array();
$arguments164['then'] = NULL;
$arguments164['else'] = NULL;
$arguments164['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array181 = array();
$array182 = array (
);$array181['0'] = $renderingContext->getVariableProvider()->getByPath('asset.inUse', $array182);

$expression183 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments164['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression183(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array181)
					),
					$renderingContext
				);
$arguments164['__thenClosure'] = function() use ($renderingContext, $self) {
$output166 = '';

$output166 .= '
                            <p class="neos-buffer-below"><i class="fas fa-exclamation-sign"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments167 = array();
$arguments167['id'] = NULL;
$arguments167['value'] = NULL;
$arguments167['arguments'] = array (
);
$arguments167['source'] = 'Main';
$arguments167['package'] = NULL;
$arguments167['quantity'] = NULL;
$arguments167['locale'] = NULL;
$arguments167['id'] = 'replace.usageCount';
// Rendering Array
$array169 = array();
$array170 = array (
);$array169['usageCount'] = $renderingContext->getVariableProvider()->getByPath('asset.usageCount', $array170);
$arguments167['arguments'] = $array169;
$arguments167['package'] = 'Neos.Media.Browser';

$output166 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext)]);

$output166 .= '</p>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$output175 = '';

$output175 .= '
                                ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments176 = array();
$arguments176['id'] = NULL;
$arguments176['value'] = NULL;
$arguments176['arguments'] = array (
);
$arguments176['source'] = 'Main';
$arguments176['package'] = NULL;
$arguments176['quantity'] = NULL;
$arguments176['locale'] = NULL;
$arguments176['id'] = 'replace.allUsages';
$arguments176['package'] = 'Neos.Media.Browser';

$output175 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext)]);

$output175 .= '
                            ';
return $output175;
};
$arguments171 = array();
$arguments171['additionalAttributes'] = NULL;
$arguments171['data'] = NULL;
$arguments171['class'] = NULL;
$arguments171['dir'] = NULL;
$arguments171['id'] = NULL;
$arguments171['lang'] = NULL;
$arguments171['style'] = NULL;
$arguments171['title'] = NULL;
$arguments171['accesskey'] = NULL;
$arguments171['tabindex'] = NULL;
$arguments171['onclick'] = NULL;
$arguments171['name'] = NULL;
$arguments171['rel'] = NULL;
$arguments171['rev'] = NULL;
$arguments171['target'] = NULL;
$arguments171['action'] = NULL;
$arguments171['arguments'] = array (
);
$arguments171['controller'] = NULL;
$arguments171['package'] = NULL;
$arguments171['subpackage'] = NULL;
$arguments171['section'] = '';
$arguments171['format'] = '';
$arguments171['additionalParams'] = array (
);
$arguments171['addQueryString'] = false;
$arguments171['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments171['useParentRequest'] = false;
$arguments171['absolute'] = true;
$arguments171['useMainRequest'] = false;
$arguments171['action'] = 'relatedNodes';
// Rendering Array
$array173 = array();
$array174 = array (
);$array173['asset'] = $renderingContext->getVariableProvider()->getByPath('asset', $array174);
$arguments171['arguments'] = $array173;
$arguments171['class'] = 'neos-button';

$output166 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output166 .= '
                        ';
return $output166;
};
$arguments164['__elseClosures'][] = function() use ($renderingContext, $self) {
$output178 = '';

$output178 .= '
                            <p><i class="fas fa-ok-sign"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments179 = array();
$arguments179['id'] = NULL;
$arguments179['value'] = NULL;
$arguments179['arguments'] = array (
);
$arguments179['source'] = 'Main';
$arguments179['package'] = NULL;
$arguments179['quantity'] = NULL;
$arguments179['locale'] = NULL;
$arguments179['id'] = 'replace.notUsed';
$arguments179['package'] = 'Neos.Media.Browser';

$output178 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext)]);

$output178 .= '</p>
                        ';
return $output178;
};

$output122 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output122 .= '
                </fieldset>
            </div>
            <div class="neos-span4 neos-image-example">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments204 = array();
$arguments204['section'] = NULL;
$arguments204['partial'] = NULL;
$arguments204['delegate'] = NULL;
$arguments204['renderable'] = NULL;
$arguments204['arguments'] = array (
);
$arguments204['optional'] = false;
$arguments204['default'] = NULL;
$arguments204['contentAs'] = NULL;
$arguments204['section'] = 'ContentImage';
$arguments204['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output122 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext);

$output122 .= '
            </div>
        </div>
        <div class="neos-footer">
            <!-- TODO: Find a nicer way to send the referer for a get request -->
            <a href="javascript:window.history.back(1);" class="neos-button">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments207 = array();
$arguments207['id'] = NULL;
$arguments207['value'] = NULL;
$arguments207['arguments'] = array (
);
$arguments207['source'] = 'Main';
$arguments207['package'] = NULL;
$arguments207['quantity'] = NULL;
$arguments207['locale'] = NULL;
$arguments207['id'] = 'cancel';
$arguments207['package'] = 'Neos.Neos';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext)]);

$output122 .= '</a>
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments209 = array();
$arguments209['additionalAttributes'] = NULL;
$arguments209['data'] = NULL;
$arguments209['name'] = NULL;
$arguments209['value'] = NULL;
$arguments209['property'] = NULL;
$arguments209['disabled'] = false;
$arguments209['class'] = NULL;
$arguments209['dir'] = NULL;
$arguments209['id'] = NULL;
$arguments209['lang'] = NULL;
$arguments209['style'] = NULL;
$arguments209['title'] = NULL;
$arguments209['accesskey'] = NULL;
$arguments209['tabindex'] = NULL;
$arguments209['onclick'] = NULL;
$arguments209['id'] = 'replace';
$arguments209['class'] = 'neos-button neos-button-primary';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments211 = array();
$arguments211['id'] = NULL;
$arguments211['value'] = NULL;
$arguments211['arguments'] = array (
);
$arguments211['source'] = 'Main';
$arguments211['package'] = NULL;
$arguments211['quantity'] = NULL;
$arguments211['locale'] = NULL;
$arguments211['id'] = 'replaceAssetResource';
$arguments211['package'] = 'Neos.Media.Browser';
$arguments209['value'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output122 .= Neos\FluidAdaptor\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);

$output122 .= '
        </div>
    ';
return $output122;
};
$arguments118 = array();
$arguments118['additionalAttributes'] = NULL;
$arguments118['data'] = NULL;
$arguments118['enctype'] = NULL;
$arguments118['method'] = NULL;
$arguments118['name'] = NULL;
$arguments118['onreset'] = NULL;
$arguments118['onsubmit'] = NULL;
$arguments118['action'] = NULL;
$arguments118['arguments'] = array (
);
$arguments118['controller'] = NULL;
$arguments118['package'] = NULL;
$arguments118['subpackage'] = NULL;
$arguments118['object'] = NULL;
$arguments118['section'] = '';
$arguments118['format'] = '';
$arguments118['additionalParams'] = array (
);
$arguments118['absolute'] = false;
$arguments118['addQueryString'] = false;
$arguments118['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments118['fieldNamePrefix'] = NULL;
$arguments118['actionUri'] = NULL;
$arguments118['objectName'] = NULL;
$arguments118['useParentRequest'] = false;
$arguments118['class'] = NULL;
$arguments118['dir'] = NULL;
$arguments118['id'] = NULL;
$arguments118['lang'] = NULL;
$arguments118['style'] = NULL;
$arguments118['title'] = NULL;
$arguments118['accesskey'] = NULL;
$arguments118['tabindex'] = NULL;
$arguments118['onclick'] = NULL;
$arguments118['method'] = 'post';
// Rendering Array
$array120 = array();
$array121 = array (
);$array120['asset'] = $renderingContext->getVariableProvider()->getByPath('asset', $array121);
$arguments118['arguments'] = $array120;
$arguments118['action'] = 'updateAssetResource';
$arguments118['enctype'] = 'multipart/form-data';

$output117 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output117 .= '
';
return $output117;
};
$arguments115 = array();
$arguments115['name'] = NULL;
$arguments115['name'] = 'Content';

$output110 .= NULL;

$output110 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
$output215 = '';

$output215 .= '
    <label>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments216 = array();
$arguments216['id'] = NULL;
$arguments216['value'] = NULL;
$arguments216['arguments'] = array (
);
$arguments216['source'] = 'Main';
$arguments216['package'] = NULL;
$arguments216['quantity'] = NULL;
$arguments216['locale'] = NULL;
$arguments216['id'] = 'replace.previewFile';
$arguments216['package'] = 'Neos.Media.Browser';

$output215 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext)]);

$output215 .= '</label>
    <div class="neos-preview-image">
        <a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments218 = array();
$arguments218['path'] = NULL;
$arguments218['package'] = NULL;
$arguments218['resource'] = NULL;
$arguments218['localize'] = true;
$array220 = array (
);$arguments218['resource'] = $renderingContext->getVariableProvider()->getByPath('asset.resource', $array220);

$output215 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext)]);

$output215 .= '" target="_blank">
            ';
// Rendering ViewHelper Neos\Media\ViewHelpers\ThumbnailViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments221 = array();
$arguments221['additionalAttributes'] = NULL;
$arguments221['data'] = NULL;
$arguments221['asset'] = NULL;
$arguments221['width'] = NULL;
$arguments221['maximumWidth'] = NULL;
$arguments221['height'] = NULL;
$arguments221['maximumHeight'] = NULL;
$arguments221['allowCropping'] = false;
$arguments221['allowUpScaling'] = false;
$arguments221['async'] = false;
$arguments221['preset'] = NULL;
$arguments221['quality'] = NULL;
$arguments221['class'] = NULL;
$arguments221['dir'] = NULL;
$arguments221['id'] = NULL;
$arguments221['lang'] = NULL;
$arguments221['style'] = NULL;
$arguments221['title'] = NULL;
$arguments221['accesskey'] = NULL;
$arguments221['tabindex'] = NULL;
$arguments221['onclick'] = NULL;
$arguments221['alt'] = NULL;
$array223 = array (
);$arguments221['asset'] = $renderingContext->getVariableProvider()->getByPath('asset', $array223);
$arguments221['maximumWidth'] = 1000;
$arguments221['maximumHeight'] = 1000;
$array224 = array (
);$arguments221['alt'] = $renderingContext->getVariableProvider()->getByPath('asset.label', $array224);
$arguments221['class'] = 'img-polaroid';

$output215 .= Neos\Media\ViewHelpers\ThumbnailViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output215 .= '
        </a>
    </div>
';
return $output215;
};
$arguments213 = array();
$arguments213['name'] = NULL;
$arguments213['name'] = 'ContentImage';

$output110 .= NULL;

$output110 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
$output227 = '';

$output227 .= '
    <script type="text/javascript">
        var maximumFileUploadSize = ';
$array228 = array (
);
$output227 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('maximumFileUploadSize', $array228)]);

$output227 .= ';
    </script>
    <script type="text/javascript" src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments229 = array();
$arguments229['path'] = NULL;
$arguments229['package'] = NULL;
$arguments229['resource'] = NULL;
$arguments229['localize'] = true;
$arguments229['package'] = 'Neos.Media.Browser';
$arguments229['path'] = 'JavaScript/new.js';

$output227 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext)]);

$output227 .= '"></script>
';
return $output227;
};
$arguments225 = array();
$arguments225['name'] = NULL;
$arguments225['name'] = 'Scripts';

$output110 .= NULL;

$output110 .= '


';

return $output110;
}


}
#0             81180     