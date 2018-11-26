<?php 
class Asset_action_index_a823752a448abc0f29176dc21a05db2610382fb2 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section Title
 */
public function section_768e0c1c69573fb588f61f1308a015c11468e05f(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return 'Index view';
}
/**
 * section Options
 */
public function section_6bf5da9c080bee3a8142586c412aa39971137eee(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <div class="neos-file-options">
        <span class="count">
            ';
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
$arguments1['id'] = 'search.itemCount';
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('searchResultCount', $array4);
$arguments1['arguments'] = $array3;
$arguments1['package'] = 'Neos.Media.Browser';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= ' ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
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
$arguments11['id'] = 'search.foundMatches';
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['0'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array14);
$arguments11['arguments'] = $array13;
$arguments11['package'] = 'Neos.Media.Browser';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);
return $output10;
};
$arguments5 = array();
$arguments5['then'] = NULL;
$arguments5['else'] = NULL;
$arguments5['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array7 = array();
$array8 = array (
);$array7['0'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array8);

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments5['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression9(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)
					),
					$renderingContext
				);
$arguments5['__thenClosure'] = $renderChildrenClosure6;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
        </span>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '<i class="fas fa-upload"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['id'] = NULL;
$arguments24['value'] = NULL;
$arguments24['arguments'] = array (
);
$arguments24['source'] = 'Main';
$arguments24['package'] = NULL;
$arguments24['quantity'] = NULL;
$arguments24['locale'] = NULL;
$arguments24['id'] = 'upload';
$arguments24['package'] = 'Neos.Media.Browser';

$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext)]);
return $output23;
};
$arguments21 = array();
$arguments21['additionalAttributes'] = NULL;
$arguments21['data'] = NULL;
$arguments21['class'] = NULL;
$arguments21['dir'] = NULL;
$arguments21['id'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['title'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$arguments21['name'] = NULL;
$arguments21['rel'] = NULL;
$arguments21['rev'] = NULL;
$arguments21['target'] = NULL;
$arguments21['action'] = NULL;
$arguments21['arguments'] = array (
);
$arguments21['controller'] = NULL;
$arguments21['package'] = NULL;
$arguments21['subpackage'] = NULL;
$arguments21['section'] = '';
$arguments21['format'] = '';
$arguments21['additionalParams'] = array (
);
$arguments21['addQueryString'] = false;
$arguments21['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments21['useParentRequest'] = false;
$arguments21['absolute'] = true;
$arguments21['useMainRequest'] = false;
$arguments21['action'] = 'new';

$output20 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '
        ';
return $output20;
};
$arguments15 = array();
$arguments15['then'] = NULL;
$arguments15['else'] = NULL;
$arguments15['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array17 = array();
$array17['0'] = '!';
$array18 = array (
);$array17['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array18);

$expression19 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments15['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression19(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)
					),
					$renderingContext
				);
$arguments15['__thenClosure'] = $renderChildrenClosure16;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '
    </div>
    <div class="neos-view-options">
        <div class="neos-dropdown" id="neos-filter-menu">
            <span title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['id'] = NULL;
$arguments26['value'] = NULL;
$arguments26['arguments'] = array (
);
$arguments26['source'] = 'Main';
$arguments26['package'] = NULL;
$arguments26['quantity'] = NULL;
$arguments26['locale'] = NULL;
$arguments26['id'] = 'filterOptions';
$arguments26['package'] = 'Neos.Media.Browser';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext)]);

$output0 .= '" data-neos-toggle="tooltip">
                <a class="dropdown-toggle';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['then'] = NULL;
$arguments28['else'] = NULL;
$arguments28['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array30 = array();
$array31 = array (
);$array30['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('filter', $array31)]);
$array30['1'] = ' != \'All\'';

$expression32 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 'All');};
$arguments28['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression32(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)
					),
					$renderingContext
				);
$arguments28['then'] = ' neos-active';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output0 .= '" href="#" data-neos-toggle="dropdown" data-target="#neos-filter-menu">
                    <i class="fas fa-filter"></i>
                </a>
            </span>
            <ul class="neos-dropdown-menu neos-pull-right" role="menu">
                <li>
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '<i class="fas fa-filter"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['id'] = NULL;
$arguments47['value'] = NULL;
$arguments47['arguments'] = array (
);
$arguments47['source'] = 'Main';
$arguments47['package'] = NULL;
$arguments47['quantity'] = NULL;
$arguments47['locale'] = NULL;
$arguments47['id'] = 'filter.all';
$arguments47['package'] = 'Neos.Media.Browser';

$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext)]);
return $output46;
};
$arguments33 = array();
$arguments33['additionalAttributes'] = NULL;
$arguments33['data'] = NULL;
$arguments33['class'] = NULL;
$arguments33['dir'] = NULL;
$arguments33['id'] = NULL;
$arguments33['lang'] = NULL;
$arguments33['style'] = NULL;
$arguments33['title'] = NULL;
$arguments33['accesskey'] = NULL;
$arguments33['tabindex'] = NULL;
$arguments33['onclick'] = NULL;
$arguments33['name'] = NULL;
$arguments33['rel'] = NULL;
$arguments33['rev'] = NULL;
$arguments33['target'] = NULL;
$arguments33['action'] = NULL;
$arguments33['arguments'] = array (
);
$arguments33['controller'] = NULL;
$arguments33['package'] = NULL;
$arguments33['subpackage'] = NULL;
$arguments33['section'] = '';
$arguments33['format'] = '';
$arguments33['additionalParams'] = array (
);
$arguments33['addQueryString'] = false;
$arguments33['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments33['useParentRequest'] = false;
$arguments33['absolute'] = true;
$arguments33['useMainRequest'] = false;
$arguments33['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
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
$arguments35['id'] = 'filter.title.all';
$arguments35['package'] = 'Neos.Media.Browser';
$arguments33['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);
// Rendering Array
$array37 = array();
$array37['neos-toggle'] = 'tooltip';
$array37['placement'] = 'left';
$arguments33['data'] = $array37;
// Rendering Array
$array38 = array();
$array38['filter'] = 'All';
$arguments33['arguments'] = $array38;
// Rendering Boolean node
// Rendering Array
$array39 = array();
$array39['0'] = 'TRUE';

$expression40 = function($context) {return TRUE;};
$arguments33['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression40(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['then'] = NULL;
$arguments41['else'] = NULL;
$arguments41['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array43 = array();
$array44 = array (
);$array43['0'] = $renderingContext->getVariableProvider()->getByPath('filter', $array44);
$array43['1'] = ' === \'All\'';

$expression45 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'All');};
$arguments41['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression45(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array43)
					),
					$renderingContext
				);
$arguments41['then'] = 'neos-active';
$arguments33['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output0 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output0 .= '
                </li>
                <li>
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '<i class="fas fa-image"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['id'] = NULL;
$arguments63['value'] = NULL;
$arguments63['arguments'] = array (
);
$arguments63['source'] = 'Main';
$arguments63['package'] = NULL;
$arguments63['quantity'] = NULL;
$arguments63['locale'] = NULL;
$arguments63['id'] = 'filter.images';
$arguments63['package'] = 'Neos.Media.Browser';

$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext)]);
return $output62;
};
$arguments49 = array();
$arguments49['additionalAttributes'] = NULL;
$arguments49['data'] = NULL;
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
$arguments49['action'] = NULL;
$arguments49['arguments'] = array (
);
$arguments49['controller'] = NULL;
$arguments49['package'] = NULL;
$arguments49['subpackage'] = NULL;
$arguments49['section'] = '';
$arguments49['format'] = '';
$arguments49['additionalParams'] = array (
);
$arguments49['addQueryString'] = false;
$arguments49['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments49['useParentRequest'] = false;
$arguments49['absolute'] = true;
$arguments49['useMainRequest'] = false;
$arguments49['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['id'] = NULL;
$arguments51['value'] = NULL;
$arguments51['arguments'] = array (
);
$arguments51['source'] = 'Main';
$arguments51['package'] = NULL;
$arguments51['quantity'] = NULL;
$arguments51['locale'] = NULL;
$arguments51['id'] = 'filter.title.images';
$arguments51['package'] = 'Neos.Media.Browser';
$arguments49['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);
// Rendering Array
$array53 = array();
$array53['neos-toggle'] = 'tooltip';
$array53['placement'] = 'left';
$arguments49['data'] = $array53;
// Rendering Array
$array54 = array();
$array54['filter'] = 'Image';
$arguments49['arguments'] = $array54;
// Rendering Boolean node
// Rendering Array
$array55 = array();
$array55['0'] = 'TRUE';

$expression56 = function($context) {return TRUE;};
$arguments49['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression56(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array55)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['then'] = NULL;
$arguments57['else'] = NULL;
$arguments57['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array59 = array();
$array60 = array (
);$array59['0'] = $renderingContext->getVariableProvider()->getByPath('filter', $array60);
$array59['1'] = ' === \'Image\'';

$expression61 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Image');};
$arguments57['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression61(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array59)
					),
					$renderingContext
				);
$arguments57['then'] = 'neos-active';
$arguments49['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output0 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output0 .= '
                </li>
                <li>
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '<i class="fas fa-file-alt"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['id'] = NULL;
$arguments79['value'] = NULL;
$arguments79['arguments'] = array (
);
$arguments79['source'] = 'Main';
$arguments79['package'] = NULL;
$arguments79['quantity'] = NULL;
$arguments79['locale'] = NULL;
$arguments79['id'] = 'filter.documents';
$arguments79['package'] = 'Neos.Media.Browser';

$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext)]);
return $output78;
};
$arguments65 = array();
$arguments65['additionalAttributes'] = NULL;
$arguments65['data'] = NULL;
$arguments65['class'] = NULL;
$arguments65['dir'] = NULL;
$arguments65['id'] = NULL;
$arguments65['lang'] = NULL;
$arguments65['style'] = NULL;
$arguments65['title'] = NULL;
$arguments65['accesskey'] = NULL;
$arguments65['tabindex'] = NULL;
$arguments65['onclick'] = NULL;
$arguments65['name'] = NULL;
$arguments65['rel'] = NULL;
$arguments65['rev'] = NULL;
$arguments65['target'] = NULL;
$arguments65['action'] = NULL;
$arguments65['arguments'] = array (
);
$arguments65['controller'] = NULL;
$arguments65['package'] = NULL;
$arguments65['subpackage'] = NULL;
$arguments65['section'] = '';
$arguments65['format'] = '';
$arguments65['additionalParams'] = array (
);
$arguments65['addQueryString'] = false;
$arguments65['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments65['useParentRequest'] = false;
$arguments65['absolute'] = true;
$arguments65['useMainRequest'] = false;
$arguments65['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['id'] = NULL;
$arguments67['value'] = NULL;
$arguments67['arguments'] = array (
);
$arguments67['source'] = 'Main';
$arguments67['package'] = NULL;
$arguments67['quantity'] = NULL;
$arguments67['locale'] = NULL;
$arguments67['id'] = 'filter.title.documents';
$arguments67['package'] = 'Neos.Media.Browser';
$arguments65['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);
// Rendering Array
$array69 = array();
$array69['neos-toggle'] = 'tooltip';
$array69['placement'] = 'left';
$arguments65['data'] = $array69;
// Rendering Array
$array70 = array();
$array70['filter'] = 'Document';
$arguments65['arguments'] = $array70;
// Rendering Boolean node
// Rendering Array
$array71 = array();
$array71['0'] = 'TRUE';

$expression72 = function($context) {return TRUE;};
$arguments65['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression72(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array71)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments73 = array();
$arguments73['then'] = NULL;
$arguments73['else'] = NULL;
$arguments73['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array75 = array();
$array76 = array (
);$array75['0'] = $renderingContext->getVariableProvider()->getByPath('filter', $array76);
$array75['1'] = ' === \'Document\'';

$expression77 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Document');};
$arguments73['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression77(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array75)
					),
					$renderingContext
				);
$arguments73['then'] = 'neos-active';
$arguments65['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output0 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output0 .= '
                </li>
                <li>
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '<i class="fas fa-film"></i> ';
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
$arguments95['id'] = 'filter.video';
$arguments95['package'] = 'Neos.Media.Browser';

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext)]);
return $output94;
};
$arguments81 = array();
$arguments81['additionalAttributes'] = NULL;
$arguments81['data'] = NULL;
$arguments81['class'] = NULL;
$arguments81['dir'] = NULL;
$arguments81['id'] = NULL;
$arguments81['lang'] = NULL;
$arguments81['style'] = NULL;
$arguments81['title'] = NULL;
$arguments81['accesskey'] = NULL;
$arguments81['tabindex'] = NULL;
$arguments81['onclick'] = NULL;
$arguments81['name'] = NULL;
$arguments81['rel'] = NULL;
$arguments81['rev'] = NULL;
$arguments81['target'] = NULL;
$arguments81['action'] = NULL;
$arguments81['arguments'] = array (
);
$arguments81['controller'] = NULL;
$arguments81['package'] = NULL;
$arguments81['subpackage'] = NULL;
$arguments81['section'] = '';
$arguments81['format'] = '';
$arguments81['additionalParams'] = array (
);
$arguments81['addQueryString'] = false;
$arguments81['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments81['useParentRequest'] = false;
$arguments81['absolute'] = true;
$arguments81['useMainRequest'] = false;
$arguments81['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['id'] = NULL;
$arguments83['value'] = NULL;
$arguments83['arguments'] = array (
);
$arguments83['source'] = 'Main';
$arguments83['package'] = NULL;
$arguments83['quantity'] = NULL;
$arguments83['locale'] = NULL;
$arguments83['id'] = 'filter.title.video';
$arguments83['package'] = 'Neos.Media.Browser';
$arguments81['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);
// Rendering Array
$array85 = array();
$array85['neos-toggle'] = 'tooltip';
$array85['placement'] = 'left';
$arguments81['data'] = $array85;
// Rendering Array
$array86 = array();
$array86['filter'] = 'Video';
$arguments81['arguments'] = $array86;
// Rendering Boolean node
// Rendering Array
$array87 = array();
$array87['0'] = 'TRUE';

$expression88 = function($context) {return TRUE;};
$arguments81['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression88(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array87)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['then'] = NULL;
$arguments89['else'] = NULL;
$arguments89['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array91 = array();
$array92 = array (
);$array91['0'] = $renderingContext->getVariableProvider()->getByPath('filter', $array92);
$array91['1'] = ' === \'Video\'';

$expression93 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Video');};
$arguments89['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression93(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array91)
					),
					$renderingContext
				);
$arguments89['then'] = 'neos-active';
$arguments81['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output0 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output0 .= '
                </li>
                <li>
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output110 = '';

$output110 .= '<i class="fas fa-music"></i> ';
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
$arguments111['id'] = 'filter.audio';
$arguments111['package'] = 'Neos.Media.Browser';

$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext)]);
return $output110;
};
$arguments97 = array();
$arguments97['additionalAttributes'] = NULL;
$arguments97['data'] = NULL;
$arguments97['class'] = NULL;
$arguments97['dir'] = NULL;
$arguments97['id'] = NULL;
$arguments97['lang'] = NULL;
$arguments97['style'] = NULL;
$arguments97['title'] = NULL;
$arguments97['accesskey'] = NULL;
$arguments97['tabindex'] = NULL;
$arguments97['onclick'] = NULL;
$arguments97['name'] = NULL;
$arguments97['rel'] = NULL;
$arguments97['rev'] = NULL;
$arguments97['target'] = NULL;
$arguments97['action'] = NULL;
$arguments97['arguments'] = array (
);
$arguments97['controller'] = NULL;
$arguments97['package'] = NULL;
$arguments97['subpackage'] = NULL;
$arguments97['section'] = '';
$arguments97['format'] = '';
$arguments97['additionalParams'] = array (
);
$arguments97['addQueryString'] = false;
$arguments97['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments97['useParentRequest'] = false;
$arguments97['absolute'] = true;
$arguments97['useMainRequest'] = false;
$arguments97['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['id'] = NULL;
$arguments99['value'] = NULL;
$arguments99['arguments'] = array (
);
$arguments99['source'] = 'Main';
$arguments99['package'] = NULL;
$arguments99['quantity'] = NULL;
$arguments99['locale'] = NULL;
$arguments99['id'] = 'filter.title.audio';
$arguments99['package'] = 'Neos.Media.Browser';
$arguments97['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);
// Rendering Array
$array101 = array();
$array101['neos-toggle'] = 'tooltip';
$array101['placement'] = 'left';
$arguments97['data'] = $array101;
// Rendering Array
$array102 = array();
$array102['filter'] = 'Audio';
$arguments97['arguments'] = $array102;
// Rendering Boolean node
// Rendering Array
$array103 = array();
$array103['0'] = 'TRUE';

$expression104 = function($context) {return TRUE;};
$arguments97['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression104(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array103)
					),
					$renderingContext
				);
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
);$array107['0'] = $renderingContext->getVariableProvider()->getByPath('filter', $array108);
$array107['1'] = ' === \'Audio\'';

$expression109 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Audio');};
$arguments105['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression109(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array107)
					),
					$renderingContext
				);
$arguments105['then'] = 'neos-active';
$arguments97['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output0 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output0 .= '
                </li>
            </ul>
        </div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$output243 = '';

$output243 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$output246 = '';

$output246 .= '
        <div class="neos-dropdown" id="neos-sort-menu">
            <span title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments247 = array();
$arguments247['id'] = NULL;
$arguments247['value'] = NULL;
$arguments247['arguments'] = array (
);
$arguments247['source'] = 'Main';
$arguments247['package'] = NULL;
$arguments247['quantity'] = NULL;
$arguments247['locale'] = NULL;
$arguments247['id'] = 'tooltip.sortOptions';
$arguments247['package'] = 'Neos.Media.Browser';

$output246 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext)]);

$output246 .= '" data-neos-toggle="tooltip">
                <a class="dropdown-toggle" href="#" data-neos-toggle="dropdown" data-target="#neos-sort-menu">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
$output266 = '';

$output266 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
$output269 = '';

$output269 .= '
                            <i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments270 = array();
$arguments270['then'] = NULL;
$arguments270['else'] = NULL;
$arguments270['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array272 = array();
$array273 = array (
);$array272['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortBy', $array273)]);
$array272['1'] = ' === \'Modified\'';

$expression274 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments270['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression274(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array272)
					),
					$renderingContext
				);
$arguments270['then'] = 'sort-amount-up';
$arguments270['else'] = 'sort-alpha-up';

$output269 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext);

$output269 .= '"></i>
                        ';
return $output269;
};
$arguments267 = array();

$output266 .= '';

$output266 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
$output277 = '';

$output277 .= '
                            <i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments278 = array();
$arguments278['then'] = NULL;
$arguments278['else'] = NULL;
$arguments278['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array280 = array();
$array281 = array (
);$array280['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortBy', $array281)]);
$array280['1'] = ' === \'Modified\'';

$expression282 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments278['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression282(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array280)
					),
					$renderingContext
				);
$arguments278['then'] = 'sort-amount-down';
$arguments278['else'] = 'sort-alpha-down';

$output277 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext);

$output277 .= '"></i>
                        ';
return $output277;
};
$arguments275 = array();
$arguments275['if'] = NULL;

$output266 .= '';

$output266 .= '
                    ';
return $output266;
};
$arguments249 = array();
$arguments249['then'] = NULL;
$arguments249['else'] = NULL;
$arguments249['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array263 = array();
$array264 = array (
);$array263['0'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array264);
$array263['1'] = ' === \'ASC\'';

$expression265 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'ASC');};
$arguments249['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression265(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array263)
					),
					$renderingContext
				);
$arguments249['__thenClosure'] = function() use ($renderingContext, $self) {
$output251 = '';

$output251 .= '
                            <i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments252 = array();
$arguments252['then'] = NULL;
$arguments252['else'] = NULL;
$arguments252['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array254 = array();
$array255 = array (
);$array254['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortBy', $array255)]);
$array254['1'] = ' === \'Modified\'';

$expression256 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments252['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression256(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array254)
					),
					$renderingContext
				);
$arguments252['then'] = 'sort-amount-up';
$arguments252['else'] = 'sort-alpha-up';

$output251 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output251 .= '"></i>
                        ';
return $output251;
};
$arguments249['__elseClosures'][] = function() use ($renderingContext, $self) {
$output257 = '';

$output257 .= '
                            <i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments258 = array();
$arguments258['then'] = NULL;
$arguments258['else'] = NULL;
$arguments258['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array260 = array();
$array261 = array (
);$array260['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortBy', $array261)]);
$array260['1'] = ' === \'Modified\'';

$expression262 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments258['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression262(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array260)
					),
					$renderingContext
				);
$arguments258['then'] = 'sort-amount-down';
$arguments258['else'] = 'sort-alpha-down';

$output257 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext);

$output257 .= '"></i>
                        ';
return $output257;
};

$output246 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);

$output246 .= '
                </a>
            </span>
            <div class="neos-dropdown-menu-list neos-pull-right" role="menu">
                <span class="neos-dropdown-menu-list-title">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments283 = array();
$arguments283['id'] = NULL;
$arguments283['value'] = NULL;
$arguments283['arguments'] = array (
);
$arguments283['source'] = 'Main';
$arguments283['package'] = NULL;
$arguments283['quantity'] = NULL;
$arguments283['locale'] = NULL;
$arguments283['id'] = 'sortby';
$arguments283['package'] = 'Neos.Media.Browser';

$output246 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext)]);

$output246 .= '</span>
                <ul>
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
$output298 = '';

$output298 .= '<i class="fas ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments299 = array();
$arguments299['then'] = NULL;
$arguments299['else'] = NULL;
$arguments299['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array301 = array();
$array302 = array (
);$array301['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortDirection', $array302)]);
$array301['1'] = ' === \'ASC\'';

$expression303 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'ASC');};
$arguments299['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression303(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array301)
					),
					$renderingContext
				);
$arguments299['then'] = 'fa-sort-amount-up';
$arguments299['else'] = 'fa-sort-amount-down';

$output298 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output298 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments304 = array();
$arguments304['id'] = NULL;
$arguments304['value'] = NULL;
$arguments304['arguments'] = array (
);
$arguments304['source'] = 'Main';
$arguments304['package'] = NULL;
$arguments304['quantity'] = NULL;
$arguments304['locale'] = NULL;
$arguments304['id'] = 'field.lastModified';
$arguments304['package'] = 'Neos.Media.Browser';

$output298 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext)]);
return $output298;
};
$arguments285 = array();
$arguments285['additionalAttributes'] = NULL;
$arguments285['data'] = NULL;
$arguments285['class'] = NULL;
$arguments285['dir'] = NULL;
$arguments285['id'] = NULL;
$arguments285['lang'] = NULL;
$arguments285['style'] = NULL;
$arguments285['title'] = NULL;
$arguments285['accesskey'] = NULL;
$arguments285['tabindex'] = NULL;
$arguments285['onclick'] = NULL;
$arguments285['name'] = NULL;
$arguments285['rel'] = NULL;
$arguments285['rev'] = NULL;
$arguments285['target'] = NULL;
$arguments285['action'] = NULL;
$arguments285['arguments'] = array (
);
$arguments285['controller'] = NULL;
$arguments285['package'] = NULL;
$arguments285['subpackage'] = NULL;
$arguments285['section'] = '';
$arguments285['format'] = '';
$arguments285['additionalParams'] = array (
);
$arguments285['addQueryString'] = false;
$arguments285['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments285['useParentRequest'] = false;
$arguments285['absolute'] = true;
$arguments285['useMainRequest'] = false;
$arguments285['action'] = 'index';
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
$arguments287['id'] = 'sortByLastModified';
$arguments287['package'] = 'Neos.Media.Browser';
$arguments285['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments287, $renderChildrenClosure288, $renderingContext);
// Rendering Array
$array289 = array();
$array289['neos-toggle'] = 'tooltip';
$array289['placement'] = 'left';
$arguments285['data'] = $array289;
// Rendering Array
$array290 = array();
$array290['sortBy'] = 'Modified';
$arguments285['arguments'] = $array290;
// Rendering Boolean node
// Rendering Array
$array291 = array();
$array291['0'] = 'TRUE';

$expression292 = function($context) {return TRUE;};
$arguments285['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression292(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array291)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments293 = array();
$arguments293['then'] = NULL;
$arguments293['else'] = NULL;
$arguments293['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array295 = array();
$array296 = array (
);$array295['0'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array296);
$array295['1'] = ' === \'Modified\'';

$expression297 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments293['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression297(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array295)
					),
					$renderingContext
				);
$arguments293['then'] = 'neos-active';
$arguments285['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);

$output246 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);

$output246 .= '
                    </li>
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
$output319 = '';

$output319 .= '<i class="fas ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments320 = array();
$arguments320['then'] = NULL;
$arguments320['else'] = NULL;
$arguments320['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array322 = array();
$array323 = array (
);$array322['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortDirection', $array323)]);
$array322['1'] = ' === \'ASC\'';

$expression324 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'ASC');};
$arguments320['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression324(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array322)
					),
					$renderingContext
				);
$arguments320['then'] = 'fa-sort-alpha-up';
$arguments320['else'] = 'fa-sort-alpha-down';

$output319 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext);

$output319 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments325 = array();
$arguments325['id'] = NULL;
$arguments325['value'] = NULL;
$arguments325['arguments'] = array (
);
$arguments325['source'] = 'Main';
$arguments325['package'] = NULL;
$arguments325['quantity'] = NULL;
$arguments325['locale'] = NULL;
$arguments325['id'] = 'field.name';
$arguments325['package'] = 'Neos.Media.Browser';

$output319 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext)]);
return $output319;
};
$arguments306 = array();
$arguments306['additionalAttributes'] = NULL;
$arguments306['data'] = NULL;
$arguments306['class'] = NULL;
$arguments306['dir'] = NULL;
$arguments306['id'] = NULL;
$arguments306['lang'] = NULL;
$arguments306['style'] = NULL;
$arguments306['title'] = NULL;
$arguments306['accesskey'] = NULL;
$arguments306['tabindex'] = NULL;
$arguments306['onclick'] = NULL;
$arguments306['name'] = NULL;
$arguments306['rel'] = NULL;
$arguments306['rev'] = NULL;
$arguments306['target'] = NULL;
$arguments306['action'] = NULL;
$arguments306['arguments'] = array (
);
$arguments306['controller'] = NULL;
$arguments306['package'] = NULL;
$arguments306['subpackage'] = NULL;
$arguments306['section'] = '';
$arguments306['format'] = '';
$arguments306['additionalParams'] = array (
);
$arguments306['addQueryString'] = false;
$arguments306['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments306['useParentRequest'] = false;
$arguments306['absolute'] = true;
$arguments306['useMainRequest'] = false;
$arguments306['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments308 = array();
$arguments308['id'] = NULL;
$arguments308['value'] = NULL;
$arguments308['arguments'] = array (
);
$arguments308['source'] = 'Main';
$arguments308['package'] = NULL;
$arguments308['quantity'] = NULL;
$arguments308['locale'] = NULL;
$arguments308['id'] = 'sortByName';
$arguments308['package'] = 'Neos.Media.Browser';
$arguments306['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext);
// Rendering Array
$array310 = array();
$array310['neos-toggle'] = 'tooltip';
$array310['placement'] = 'left';
$arguments306['data'] = $array310;
// Rendering Array
$array311 = array();
$array311['sortBy'] = 'Name';
$arguments306['arguments'] = $array311;
// Rendering Boolean node
// Rendering Array
$array312 = array();
$array312['0'] = 'TRUE';

$expression313 = function($context) {return TRUE;};
$arguments306['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression313(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array312)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments314 = array();
$arguments314['then'] = NULL;
$arguments314['else'] = NULL;
$arguments314['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array316 = array();
$array317 = array (
);$array316['0'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array317);
$array316['1'] = ' === \'Name\'';

$expression318 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Name');};
$arguments314['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression318(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array316)
					),
					$renderingContext
				);
$arguments314['then'] = 'neos-active';
$arguments306['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext);

$output246 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);

$output246 .= '
                    </li>
                </ul>
                <span class="neos-dropdown-menu-list-title">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments327 = array();
$arguments327['id'] = NULL;
$arguments327['value'] = NULL;
$arguments327['arguments'] = array (
);
$arguments327['source'] = 'Main';
$arguments327['package'] = NULL;
$arguments327['quantity'] = NULL;
$arguments327['locale'] = NULL;
$arguments327['id'] = 'sortDirection';
$arguments327['package'] = 'Neos.Media.Browser';

$output246 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments327, $renderChildrenClosure328, $renderingContext)]);

$output246 .= '</span>
                <ul>
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure330 = function() use ($renderingContext, $self) {
$output342 = '';

$output342 .= '<i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure344 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments343 = array();
$arguments343['then'] = NULL;
$arguments343['else'] = NULL;
$arguments343['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array345 = array();
$array346 = array (
);$array345['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortBy', $array346)]);
$array345['1'] = ' === \'Name\'';

$expression347 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Name');};
$arguments343['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression347(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array345)
					),
					$renderingContext
				);
$arguments343['then'] = 'sort-alpha-up';
$arguments343['else'] = 'sort-amount-up';

$output342 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments343, $renderChildrenClosure344, $renderingContext);

$output342 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure349 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments348 = array();
$arguments348['id'] = NULL;
$arguments348['value'] = NULL;
$arguments348['arguments'] = array (
);
$arguments348['source'] = 'Main';
$arguments348['package'] = NULL;
$arguments348['quantity'] = NULL;
$arguments348['locale'] = NULL;
$arguments348['id'] = 'sortDirection.asc';
$arguments348['package'] = 'Neos.Media.Browser';

$output342 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments348, $renderChildrenClosure349, $renderingContext)]);
return $output342;
};
$arguments329 = array();
$arguments329['additionalAttributes'] = NULL;
$arguments329['data'] = NULL;
$arguments329['class'] = NULL;
$arguments329['dir'] = NULL;
$arguments329['id'] = NULL;
$arguments329['lang'] = NULL;
$arguments329['style'] = NULL;
$arguments329['title'] = NULL;
$arguments329['accesskey'] = NULL;
$arguments329['tabindex'] = NULL;
$arguments329['onclick'] = NULL;
$arguments329['name'] = NULL;
$arguments329['rel'] = NULL;
$arguments329['rev'] = NULL;
$arguments329['target'] = NULL;
$arguments329['action'] = NULL;
$arguments329['arguments'] = array (
);
$arguments329['controller'] = NULL;
$arguments329['package'] = NULL;
$arguments329['subpackage'] = NULL;
$arguments329['section'] = '';
$arguments329['format'] = '';
$arguments329['additionalParams'] = array (
);
$arguments329['addQueryString'] = false;
$arguments329['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments329['useParentRequest'] = false;
$arguments329['absolute'] = true;
$arguments329['useMainRequest'] = false;
$arguments329['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments331 = array();
$arguments331['id'] = NULL;
$arguments331['value'] = NULL;
$arguments331['arguments'] = array (
);
$arguments331['source'] = 'Main';
$arguments331['package'] = NULL;
$arguments331['quantity'] = NULL;
$arguments331['locale'] = NULL;
$arguments331['id'] = 'sortDirection.asc.tooltip';
$arguments331['package'] = 'Neos.Media.Browser';
$arguments329['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments331, $renderChildrenClosure332, $renderingContext);
// Rendering Array
$array333 = array();
$array333['neos-toggle'] = 'tooltip';
$array333['placement'] = 'left';
$arguments329['data'] = $array333;
// Rendering Array
$array334 = array();
$array334['sortDirection'] = 'ASC';
$arguments329['arguments'] = $array334;
// Rendering Boolean node
// Rendering Array
$array335 = array();
$array335['0'] = 'TRUE';

$expression336 = function($context) {return TRUE;};
$arguments329['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression336(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array335)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments337 = array();
$arguments337['then'] = NULL;
$arguments337['else'] = NULL;
$arguments337['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array339 = array();
$array340 = array (
);$array339['0'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array340);
$array339['1'] = ' === \'ASC\'';

$expression341 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'ASC');};
$arguments337['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression341(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array339)
					),
					$renderingContext
				);
$arguments337['then'] = 'neos-active';
$arguments329['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments337, $renderChildrenClosure338, $renderingContext);

$output246 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments329, $renderChildrenClosure330, $renderingContext);

$output246 .= '
                    </li>
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure351 = function() use ($renderingContext, $self) {
$output363 = '';

$output363 .= '<i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments364 = array();
$arguments364['then'] = NULL;
$arguments364['else'] = NULL;
$arguments364['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array366 = array();
$array367 = array (
);$array366['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortBy', $array367)]);
$array366['1'] = ' === \'Name\'';

$expression368 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Name');};
$arguments364['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression368(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array366)
					),
					$renderingContext
				);
$arguments364['then'] = 'sort-alpha-down';
$arguments364['else'] = 'sort-amount-down';

$output363 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments364, $renderChildrenClosure365, $renderingContext);

$output363 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments369 = array();
$arguments369['id'] = NULL;
$arguments369['value'] = NULL;
$arguments369['arguments'] = array (
);
$arguments369['source'] = 'Main';
$arguments369['package'] = NULL;
$arguments369['quantity'] = NULL;
$arguments369['locale'] = NULL;
$arguments369['id'] = 'sortDirection.desc';
$arguments369['package'] = 'Neos.Media.Browser';

$output363 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments369, $renderChildrenClosure370, $renderingContext)]);
return $output363;
};
$arguments350 = array();
$arguments350['additionalAttributes'] = NULL;
$arguments350['data'] = NULL;
$arguments350['class'] = NULL;
$arguments350['dir'] = NULL;
$arguments350['id'] = NULL;
$arguments350['lang'] = NULL;
$arguments350['style'] = NULL;
$arguments350['title'] = NULL;
$arguments350['accesskey'] = NULL;
$arguments350['tabindex'] = NULL;
$arguments350['onclick'] = NULL;
$arguments350['name'] = NULL;
$arguments350['rel'] = NULL;
$arguments350['rev'] = NULL;
$arguments350['target'] = NULL;
$arguments350['action'] = NULL;
$arguments350['arguments'] = array (
);
$arguments350['controller'] = NULL;
$arguments350['package'] = NULL;
$arguments350['subpackage'] = NULL;
$arguments350['section'] = '';
$arguments350['format'] = '';
$arguments350['additionalParams'] = array (
);
$arguments350['addQueryString'] = false;
$arguments350['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments350['useParentRequest'] = false;
$arguments350['absolute'] = true;
$arguments350['useMainRequest'] = false;
$arguments350['action'] = 'index';
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
$arguments352['id'] = 'sortDirection.desc.tooltip';
$arguments352['package'] = 'Neos.Media.Browser';
$arguments350['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments352, $renderChildrenClosure353, $renderingContext);
// Rendering Array
$array354 = array();
$array354['neos-toggle'] = 'tooltip';
$array354['placement'] = 'left';
$arguments350['data'] = $array354;
// Rendering Array
$array355 = array();
$array355['sortDirection'] = 'DESC';
$arguments350['arguments'] = $array355;
// Rendering Boolean node
// Rendering Array
$array356 = array();
$array356['0'] = 'TRUE';

$expression357 = function($context) {return TRUE;};
$arguments350['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression357(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array356)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments358 = array();
$arguments358['then'] = NULL;
$arguments358['else'] = NULL;
$arguments358['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array360 = array();
$array361 = array (
);$array360['0'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array361);
$array360['1'] = ' === \'DESC\'';

$expression362 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'DESC');};
$arguments358['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression362(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array360)
					),
					$renderingContext
				);
$arguments358['then'] = 'neos-active';
$arguments350['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments358, $renderChildrenClosure359, $renderingContext);

$output246 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments350, $renderChildrenClosure351, $renderingContext);

$output246 .= '
                    </li>
                </ul>
            </div>
        </div>
            ';
return $output246;
};
$arguments244 = array();

$output243 .= '';

$output243 .= '
        ';
return $output243;
};
$arguments113 = array();
$arguments113['then'] = NULL;
$arguments113['else'] = NULL;
$arguments113['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array240 = array();
$array241 = array (
);$array240['0'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSourceSupportsSorting', $array241);

$expression242 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments113['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression242(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array240)
					),
					$renderingContext
				);
$arguments113['__thenClosure'] = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
        <div class="neos-dropdown" id="neos-sort-menu">
            <span title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['id'] = NULL;
$arguments116['value'] = NULL;
$arguments116['arguments'] = array (
);
$arguments116['source'] = 'Main';
$arguments116['package'] = NULL;
$arguments116['quantity'] = NULL;
$arguments116['locale'] = NULL;
$arguments116['id'] = 'tooltip.sortOptions';
$arguments116['package'] = 'Neos.Media.Browser';

$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext)]);

$output115 .= '" data-neos-toggle="tooltip">
                <a class="dropdown-toggle" href="#" data-neos-toggle="dropdown" data-target="#neos-sort-menu">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
                            <i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['then'] = NULL;
$arguments139['else'] = NULL;
$arguments139['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array141 = array();
$array142 = array (
);$array141['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortBy', $array142)]);
$array141['1'] = ' === \'Modified\'';

$expression143 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments139['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression143(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array141)
					),
					$renderingContext
				);
$arguments139['then'] = 'sort-amount-up';
$arguments139['else'] = 'sort-alpha-up';

$output138 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output138 .= '"></i>
                        ';
return $output138;
};
$arguments136 = array();

$output135 .= '';

$output135 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$output146 = '';

$output146 .= '
                            <i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments147 = array();
$arguments147['then'] = NULL;
$arguments147['else'] = NULL;
$arguments147['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array149 = array();
$array150 = array (
);$array149['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortBy', $array150)]);
$array149['1'] = ' === \'Modified\'';

$expression151 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments147['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression151(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array149)
					),
					$renderingContext
				);
$arguments147['then'] = 'sort-amount-down';
$arguments147['else'] = 'sort-alpha-down';

$output146 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output146 .= '"></i>
                        ';
return $output146;
};
$arguments144 = array();
$arguments144['if'] = NULL;

$output135 .= '';

$output135 .= '
                    ';
return $output135;
};
$arguments118 = array();
$arguments118['then'] = NULL;
$arguments118['else'] = NULL;
$arguments118['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array132 = array();
$array133 = array (
);$array132['0'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array133);
$array132['1'] = ' === \'ASC\'';

$expression134 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'ASC');};
$arguments118['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression134(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array132)
					),
					$renderingContext
				);
$arguments118['__thenClosure'] = function() use ($renderingContext, $self) {
$output120 = '';

$output120 .= '
                            <i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments121 = array();
$arguments121['then'] = NULL;
$arguments121['else'] = NULL;
$arguments121['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array123 = array();
$array124 = array (
);$array123['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortBy', $array124)]);
$array123['1'] = ' === \'Modified\'';

$expression125 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments121['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression125(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array123)
					),
					$renderingContext
				);
$arguments121['then'] = 'sort-amount-up';
$arguments121['else'] = 'sort-alpha-up';

$output120 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output120 .= '"></i>
                        ';
return $output120;
};
$arguments118['__elseClosures'][] = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
                            <i class="fas fa-';
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
);$array129['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortBy', $array130)]);
$array129['1'] = ' === \'Modified\'';

$expression131 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments127['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression131(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array129)
					),
					$renderingContext
				);
$arguments127['then'] = 'sort-amount-down';
$arguments127['else'] = 'sort-alpha-down';

$output126 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output126 .= '"></i>
                        ';
return $output126;
};

$output115 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output115 .= '
                </a>
            </span>
            <div class="neos-dropdown-menu-list neos-pull-right" role="menu">
                <span class="neos-dropdown-menu-list-title">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments152 = array();
$arguments152['id'] = NULL;
$arguments152['value'] = NULL;
$arguments152['arguments'] = array (
);
$arguments152['source'] = 'Main';
$arguments152['package'] = NULL;
$arguments152['quantity'] = NULL;
$arguments152['locale'] = NULL;
$arguments152['id'] = 'sortby';
$arguments152['package'] = 'Neos.Media.Browser';

$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext)]);

$output115 .= '</span>
                <ul>
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '<i class="fas ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments168 = array();
$arguments168['then'] = NULL;
$arguments168['else'] = NULL;
$arguments168['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array170 = array();
$array171 = array (
);$array170['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortDirection', $array171)]);
$array170['1'] = ' === \'ASC\'';

$expression172 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'ASC');};
$arguments168['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression172(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array170)
					),
					$renderingContext
				);
$arguments168['then'] = 'fa-sort-amount-up';
$arguments168['else'] = 'fa-sort-amount-down';

$output167 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output167 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments173 = array();
$arguments173['id'] = NULL;
$arguments173['value'] = NULL;
$arguments173['arguments'] = array (
);
$arguments173['source'] = 'Main';
$arguments173['package'] = NULL;
$arguments173['quantity'] = NULL;
$arguments173['locale'] = NULL;
$arguments173['id'] = 'field.lastModified';
$arguments173['package'] = 'Neos.Media.Browser';

$output167 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext)]);
return $output167;
};
$arguments154 = array();
$arguments154['additionalAttributes'] = NULL;
$arguments154['data'] = NULL;
$arguments154['class'] = NULL;
$arguments154['dir'] = NULL;
$arguments154['id'] = NULL;
$arguments154['lang'] = NULL;
$arguments154['style'] = NULL;
$arguments154['title'] = NULL;
$arguments154['accesskey'] = NULL;
$arguments154['tabindex'] = NULL;
$arguments154['onclick'] = NULL;
$arguments154['name'] = NULL;
$arguments154['rel'] = NULL;
$arguments154['rev'] = NULL;
$arguments154['target'] = NULL;
$arguments154['action'] = NULL;
$arguments154['arguments'] = array (
);
$arguments154['controller'] = NULL;
$arguments154['package'] = NULL;
$arguments154['subpackage'] = NULL;
$arguments154['section'] = '';
$arguments154['format'] = '';
$arguments154['additionalParams'] = array (
);
$arguments154['addQueryString'] = false;
$arguments154['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments154['useParentRequest'] = false;
$arguments154['absolute'] = true;
$arguments154['useMainRequest'] = false;
$arguments154['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments156 = array();
$arguments156['id'] = NULL;
$arguments156['value'] = NULL;
$arguments156['arguments'] = array (
);
$arguments156['source'] = 'Main';
$arguments156['package'] = NULL;
$arguments156['quantity'] = NULL;
$arguments156['locale'] = NULL;
$arguments156['id'] = 'sortByLastModified';
$arguments156['package'] = 'Neos.Media.Browser';
$arguments154['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);
// Rendering Array
$array158 = array();
$array158['neos-toggle'] = 'tooltip';
$array158['placement'] = 'left';
$arguments154['data'] = $array158;
// Rendering Array
$array159 = array();
$array159['sortBy'] = 'Modified';
$arguments154['arguments'] = $array159;
// Rendering Boolean node
// Rendering Array
$array160 = array();
$array160['0'] = 'TRUE';

$expression161 = function($context) {return TRUE;};
$arguments154['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression161(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array160)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments162 = array();
$arguments162['then'] = NULL;
$arguments162['else'] = NULL;
$arguments162['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array164 = array();
$array165 = array (
);$array164['0'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array165);
$array164['1'] = ' === \'Modified\'';

$expression166 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments162['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression166(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array164)
					),
					$renderingContext
				);
$arguments162['then'] = 'neos-active';
$arguments154['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments162, $renderChildrenClosure163, $renderingContext);

$output115 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output115 .= '
                    </li>
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
$output188 = '';

$output188 .= '<i class="fas ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['then'] = NULL;
$arguments189['else'] = NULL;
$arguments189['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array191 = array();
$array192 = array (
);$array191['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortDirection', $array192)]);
$array191['1'] = ' === \'ASC\'';

$expression193 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'ASC');};
$arguments189['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression193(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array191)
					),
					$renderingContext
				);
$arguments189['then'] = 'fa-sort-alpha-up';
$arguments189['else'] = 'fa-sort-alpha-down';

$output188 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output188 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments194 = array();
$arguments194['id'] = NULL;
$arguments194['value'] = NULL;
$arguments194['arguments'] = array (
);
$arguments194['source'] = 'Main';
$arguments194['package'] = NULL;
$arguments194['quantity'] = NULL;
$arguments194['locale'] = NULL;
$arguments194['id'] = 'field.name';
$arguments194['package'] = 'Neos.Media.Browser';

$output188 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext)]);
return $output188;
};
$arguments175 = array();
$arguments175['additionalAttributes'] = NULL;
$arguments175['data'] = NULL;
$arguments175['class'] = NULL;
$arguments175['dir'] = NULL;
$arguments175['id'] = NULL;
$arguments175['lang'] = NULL;
$arguments175['style'] = NULL;
$arguments175['title'] = NULL;
$arguments175['accesskey'] = NULL;
$arguments175['tabindex'] = NULL;
$arguments175['onclick'] = NULL;
$arguments175['name'] = NULL;
$arguments175['rel'] = NULL;
$arguments175['rev'] = NULL;
$arguments175['target'] = NULL;
$arguments175['action'] = NULL;
$arguments175['arguments'] = array (
);
$arguments175['controller'] = NULL;
$arguments175['package'] = NULL;
$arguments175['subpackage'] = NULL;
$arguments175['section'] = '';
$arguments175['format'] = '';
$arguments175['additionalParams'] = array (
);
$arguments175['addQueryString'] = false;
$arguments175['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments175['useParentRequest'] = false;
$arguments175['absolute'] = true;
$arguments175['useMainRequest'] = false;
$arguments175['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments177 = array();
$arguments177['id'] = NULL;
$arguments177['value'] = NULL;
$arguments177['arguments'] = array (
);
$arguments177['source'] = 'Main';
$arguments177['package'] = NULL;
$arguments177['quantity'] = NULL;
$arguments177['locale'] = NULL;
$arguments177['id'] = 'sortByName';
$arguments177['package'] = 'Neos.Media.Browser';
$arguments175['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);
// Rendering Array
$array179 = array();
$array179['neos-toggle'] = 'tooltip';
$array179['placement'] = 'left';
$arguments175['data'] = $array179;
// Rendering Array
$array180 = array();
$array180['sortBy'] = 'Name';
$arguments175['arguments'] = $array180;
// Rendering Boolean node
// Rendering Array
$array181 = array();
$array181['0'] = 'TRUE';

$expression182 = function($context) {return TRUE;};
$arguments175['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression182(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array181)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments183 = array();
$arguments183['then'] = NULL;
$arguments183['else'] = NULL;
$arguments183['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array185 = array();
$array186 = array (
);$array185['0'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array186);
$array185['1'] = ' === \'Name\'';

$expression187 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Name');};
$arguments183['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression187(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array185)
					),
					$renderingContext
				);
$arguments183['then'] = 'neos-active';
$arguments175['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output115 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output115 .= '
                    </li>
                </ul>
                <span class="neos-dropdown-menu-list-title">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments196 = array();
$arguments196['id'] = NULL;
$arguments196['value'] = NULL;
$arguments196['arguments'] = array (
);
$arguments196['source'] = 'Main';
$arguments196['package'] = NULL;
$arguments196['quantity'] = NULL;
$arguments196['locale'] = NULL;
$arguments196['id'] = 'sortDirection';
$arguments196['package'] = 'Neos.Media.Browser';

$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext)]);

$output115 .= '</span>
                <ul>
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
$output211 = '';

$output211 .= '<i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments212 = array();
$arguments212['then'] = NULL;
$arguments212['else'] = NULL;
$arguments212['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array214 = array();
$array215 = array (
);$array214['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortBy', $array215)]);
$array214['1'] = ' === \'Name\'';

$expression216 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Name');};
$arguments212['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression216(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array214)
					),
					$renderingContext
				);
$arguments212['then'] = 'sort-alpha-up';
$arguments212['else'] = 'sort-amount-up';

$output211 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output211 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['id'] = NULL;
$arguments217['value'] = NULL;
$arguments217['arguments'] = array (
);
$arguments217['source'] = 'Main';
$arguments217['package'] = NULL;
$arguments217['quantity'] = NULL;
$arguments217['locale'] = NULL;
$arguments217['id'] = 'sortDirection.asc';
$arguments217['package'] = 'Neos.Media.Browser';

$output211 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext)]);
return $output211;
};
$arguments198 = array();
$arguments198['additionalAttributes'] = NULL;
$arguments198['data'] = NULL;
$arguments198['class'] = NULL;
$arguments198['dir'] = NULL;
$arguments198['id'] = NULL;
$arguments198['lang'] = NULL;
$arguments198['style'] = NULL;
$arguments198['title'] = NULL;
$arguments198['accesskey'] = NULL;
$arguments198['tabindex'] = NULL;
$arguments198['onclick'] = NULL;
$arguments198['name'] = NULL;
$arguments198['rel'] = NULL;
$arguments198['rev'] = NULL;
$arguments198['target'] = NULL;
$arguments198['action'] = NULL;
$arguments198['arguments'] = array (
);
$arguments198['controller'] = NULL;
$arguments198['package'] = NULL;
$arguments198['subpackage'] = NULL;
$arguments198['section'] = '';
$arguments198['format'] = '';
$arguments198['additionalParams'] = array (
);
$arguments198['addQueryString'] = false;
$arguments198['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments198['useParentRequest'] = false;
$arguments198['absolute'] = true;
$arguments198['useMainRequest'] = false;
$arguments198['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments200 = array();
$arguments200['id'] = NULL;
$arguments200['value'] = NULL;
$arguments200['arguments'] = array (
);
$arguments200['source'] = 'Main';
$arguments200['package'] = NULL;
$arguments200['quantity'] = NULL;
$arguments200['locale'] = NULL;
$arguments200['id'] = 'sortDirection.asc.tooltip';
$arguments200['package'] = 'Neos.Media.Browser';
$arguments198['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);
// Rendering Array
$array202 = array();
$array202['neos-toggle'] = 'tooltip';
$array202['placement'] = 'left';
$arguments198['data'] = $array202;
// Rendering Array
$array203 = array();
$array203['sortDirection'] = 'ASC';
$arguments198['arguments'] = $array203;
// Rendering Boolean node
// Rendering Array
$array204 = array();
$array204['0'] = 'TRUE';

$expression205 = function($context) {return TRUE;};
$arguments198['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression205(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array204)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments206 = array();
$arguments206['then'] = NULL;
$arguments206['else'] = NULL;
$arguments206['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array208 = array();
$array209 = array (
);$array208['0'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array209);
$array208['1'] = ' === \'ASC\'';

$expression210 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'ASC');};
$arguments206['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression210(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array208)
					),
					$renderingContext
				);
$arguments206['then'] = 'neos-active';
$arguments198['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output115 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);

$output115 .= '
                    </li>
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
$output232 = '';

$output232 .= '<i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments233 = array();
$arguments233['then'] = NULL;
$arguments233['else'] = NULL;
$arguments233['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array235 = array();
$array236 = array (
);$array235['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortBy', $array236)]);
$array235['1'] = ' === \'Name\'';

$expression237 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Name');};
$arguments233['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression237(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array235)
					),
					$renderingContext
				);
$arguments233['then'] = 'sort-alpha-down';
$arguments233['else'] = 'sort-amount-down';

$output232 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output232 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments238 = array();
$arguments238['id'] = NULL;
$arguments238['value'] = NULL;
$arguments238['arguments'] = array (
);
$arguments238['source'] = 'Main';
$arguments238['package'] = NULL;
$arguments238['quantity'] = NULL;
$arguments238['locale'] = NULL;
$arguments238['id'] = 'sortDirection.desc';
$arguments238['package'] = 'Neos.Media.Browser';

$output232 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext)]);
return $output232;
};
$arguments219 = array();
$arguments219['additionalAttributes'] = NULL;
$arguments219['data'] = NULL;
$arguments219['class'] = NULL;
$arguments219['dir'] = NULL;
$arguments219['id'] = NULL;
$arguments219['lang'] = NULL;
$arguments219['style'] = NULL;
$arguments219['title'] = NULL;
$arguments219['accesskey'] = NULL;
$arguments219['tabindex'] = NULL;
$arguments219['onclick'] = NULL;
$arguments219['name'] = NULL;
$arguments219['rel'] = NULL;
$arguments219['rev'] = NULL;
$arguments219['target'] = NULL;
$arguments219['action'] = NULL;
$arguments219['arguments'] = array (
);
$arguments219['controller'] = NULL;
$arguments219['package'] = NULL;
$arguments219['subpackage'] = NULL;
$arguments219['section'] = '';
$arguments219['format'] = '';
$arguments219['additionalParams'] = array (
);
$arguments219['addQueryString'] = false;
$arguments219['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments219['useParentRequest'] = false;
$arguments219['absolute'] = true;
$arguments219['useMainRequest'] = false;
$arguments219['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments221 = array();
$arguments221['id'] = NULL;
$arguments221['value'] = NULL;
$arguments221['arguments'] = array (
);
$arguments221['source'] = 'Main';
$arguments221['package'] = NULL;
$arguments221['quantity'] = NULL;
$arguments221['locale'] = NULL;
$arguments221['id'] = 'sortDirection.desc.tooltip';
$arguments221['package'] = 'Neos.Media.Browser';
$arguments219['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);
// Rendering Array
$array223 = array();
$array223['neos-toggle'] = 'tooltip';
$array223['placement'] = 'left';
$arguments219['data'] = $array223;
// Rendering Array
$array224 = array();
$array224['sortDirection'] = 'DESC';
$arguments219['arguments'] = $array224;
// Rendering Boolean node
// Rendering Array
$array225 = array();
$array225['0'] = 'TRUE';

$expression226 = function($context) {return TRUE;};
$arguments219['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression226(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array225)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['then'] = NULL;
$arguments227['else'] = NULL;
$arguments227['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array229 = array();
$array230 = array (
);$array229['0'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array230);
$array229['1'] = ' === \'DESC\'';

$expression231 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'DESC');};
$arguments227['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression231(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array229)
					),
					$renderingContext
				);
$arguments227['then'] = 'neos-active';
$arguments219['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output115 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);

$output115 .= '
                    </li>
                </ul>
            </div>
        </div>
            ';
return $output115;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output0 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure372 = function() use ($renderingContext, $self) {
$output394 = '';

$output394 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure396 = function() use ($renderingContext, $self) {
$output397 = '';

$output397 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure399 = function() use ($renderingContext, $self) {
return '<i class="fas fa-th-list"></i>';
};
$arguments398 = array();
$arguments398['additionalAttributes'] = NULL;
$arguments398['data'] = NULL;
$arguments398['class'] = NULL;
$arguments398['dir'] = NULL;
$arguments398['id'] = NULL;
$arguments398['lang'] = NULL;
$arguments398['style'] = NULL;
$arguments398['title'] = NULL;
$arguments398['accesskey'] = NULL;
$arguments398['tabindex'] = NULL;
$arguments398['onclick'] = NULL;
$arguments398['name'] = NULL;
$arguments398['rel'] = NULL;
$arguments398['rev'] = NULL;
$arguments398['target'] = NULL;
$arguments398['action'] = NULL;
$arguments398['arguments'] = array (
);
$arguments398['controller'] = NULL;
$arguments398['package'] = NULL;
$arguments398['subpackage'] = NULL;
$arguments398['section'] = '';
$arguments398['format'] = '';
$arguments398['additionalParams'] = array (
);
$arguments398['addQueryString'] = false;
$arguments398['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments398['useParentRequest'] = false;
$arguments398['absolute'] = true;
$arguments398['useMainRequest'] = false;
$arguments398['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure401 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments400 = array();
$arguments400['id'] = NULL;
$arguments400['value'] = NULL;
$arguments400['arguments'] = array (
);
$arguments400['source'] = 'Main';
$arguments400['package'] = NULL;
$arguments400['quantity'] = NULL;
$arguments400['locale'] = NULL;
$arguments400['id'] = 'tooltip.listView';
$arguments400['package'] = 'Neos.Media.Browser';
$arguments398['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments400, $renderChildrenClosure401, $renderingContext);
// Rendering Array
$array402 = array();
$array402['view'] = 'List';
$arguments398['arguments'] = $array402;
// Rendering Boolean node
// Rendering Array
$array403 = array();
$array403['0'] = 'TRUE';

$expression404 = function($context) {return TRUE;};
$arguments398['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression404(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array403)
					),
					$renderingContext
				);
// Rendering Array
$array405 = array();
$array405['neos-toggle'] = 'tooltip';
$arguments398['data'] = $array405;

$output397 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments398, $renderChildrenClosure399, $renderingContext);

$output397 .= '
            ';
return $output397;
};
$arguments395 = array();

$output394 .= '';

$output394 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
$output408 = '';

$output408 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure410 = function() use ($renderingContext, $self) {
return '<i class="fas fa-th"></i>';
};
$arguments409 = array();
$arguments409['additionalAttributes'] = NULL;
$arguments409['data'] = NULL;
$arguments409['class'] = NULL;
$arguments409['dir'] = NULL;
$arguments409['id'] = NULL;
$arguments409['lang'] = NULL;
$arguments409['style'] = NULL;
$arguments409['title'] = NULL;
$arguments409['accesskey'] = NULL;
$arguments409['tabindex'] = NULL;
$arguments409['onclick'] = NULL;
$arguments409['name'] = NULL;
$arguments409['rel'] = NULL;
$arguments409['rev'] = NULL;
$arguments409['target'] = NULL;
$arguments409['action'] = NULL;
$arguments409['arguments'] = array (
);
$arguments409['controller'] = NULL;
$arguments409['package'] = NULL;
$arguments409['subpackage'] = NULL;
$arguments409['section'] = '';
$arguments409['format'] = '';
$arguments409['additionalParams'] = array (
);
$arguments409['addQueryString'] = false;
$arguments409['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments409['useParentRequest'] = false;
$arguments409['absolute'] = true;
$arguments409['useMainRequest'] = false;
$arguments409['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure412 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments411 = array();
$arguments411['id'] = NULL;
$arguments411['value'] = NULL;
$arguments411['arguments'] = array (
);
$arguments411['source'] = 'Main';
$arguments411['package'] = NULL;
$arguments411['quantity'] = NULL;
$arguments411['locale'] = NULL;
$arguments411['id'] = 'tooltip.thumbnailView';
$arguments411['package'] = 'Neos.Media.Browser';
$arguments409['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments411, $renderChildrenClosure412, $renderingContext);
// Rendering Array
$array413 = array();
$array413['view'] = 'Thumbnail';
$arguments409['arguments'] = $array413;
// Rendering Boolean node
// Rendering Array
$array414 = array();
$array414['0'] = 'TRUE';

$expression415 = function($context) {return TRUE;};
$arguments409['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression415(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array414)
					),
					$renderingContext
				);
// Rendering Array
$array416 = array();
$array416['neos-toggle'] = 'tooltip';
$arguments409['data'] = $array416;

$output408 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments409, $renderChildrenClosure410, $renderingContext);

$output408 .= '
            ';
return $output408;
};
$arguments406 = array();
$arguments406['if'] = NULL;

$output394 .= '';

$output394 .= '
        ';
return $output394;
};
$arguments371 = array();
$arguments371['then'] = NULL;
$arguments371['else'] = NULL;
$arguments371['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array391 = array();
$array392 = array (
);$array391['0'] = $renderingContext->getVariableProvider()->getByPath('view', $array392);
$array391['1'] = ' === \'Thumbnail\'';

$expression393 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Thumbnail');};
$arguments371['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression393(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array391)
					),
					$renderingContext
				);
$arguments371['__thenClosure'] = function() use ($renderingContext, $self) {
$output373 = '';

$output373 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure375 = function() use ($renderingContext, $self) {
return '<i class="fas fa-th-list"></i>';
};
$arguments374 = array();
$arguments374['additionalAttributes'] = NULL;
$arguments374['data'] = NULL;
$arguments374['class'] = NULL;
$arguments374['dir'] = NULL;
$arguments374['id'] = NULL;
$arguments374['lang'] = NULL;
$arguments374['style'] = NULL;
$arguments374['title'] = NULL;
$arguments374['accesskey'] = NULL;
$arguments374['tabindex'] = NULL;
$arguments374['onclick'] = NULL;
$arguments374['name'] = NULL;
$arguments374['rel'] = NULL;
$arguments374['rev'] = NULL;
$arguments374['target'] = NULL;
$arguments374['action'] = NULL;
$arguments374['arguments'] = array (
);
$arguments374['controller'] = NULL;
$arguments374['package'] = NULL;
$arguments374['subpackage'] = NULL;
$arguments374['section'] = '';
$arguments374['format'] = '';
$arguments374['additionalParams'] = array (
);
$arguments374['addQueryString'] = false;
$arguments374['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments374['useParentRequest'] = false;
$arguments374['absolute'] = true;
$arguments374['useMainRequest'] = false;
$arguments374['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments376 = array();
$arguments376['id'] = NULL;
$arguments376['value'] = NULL;
$arguments376['arguments'] = array (
);
$arguments376['source'] = 'Main';
$arguments376['package'] = NULL;
$arguments376['quantity'] = NULL;
$arguments376['locale'] = NULL;
$arguments376['id'] = 'tooltip.listView';
$arguments376['package'] = 'Neos.Media.Browser';
$arguments374['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments376, $renderChildrenClosure377, $renderingContext);
// Rendering Array
$array378 = array();
$array378['view'] = 'List';
$arguments374['arguments'] = $array378;
// Rendering Boolean node
// Rendering Array
$array379 = array();
$array379['0'] = 'TRUE';

$expression380 = function($context) {return TRUE;};
$arguments374['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression380(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array379)
					),
					$renderingContext
				);
// Rendering Array
$array381 = array();
$array381['neos-toggle'] = 'tooltip';
$arguments374['data'] = $array381;

$output373 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments374, $renderChildrenClosure375, $renderingContext);

$output373 .= '
            ';
return $output373;
};
$arguments371['__elseClosures'][] = function() use ($renderingContext, $self) {
$output382 = '';

$output382 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure384 = function() use ($renderingContext, $self) {
return '<i class="fas fa-th"></i>';
};
$arguments383 = array();
$arguments383['additionalAttributes'] = NULL;
$arguments383['data'] = NULL;
$arguments383['class'] = NULL;
$arguments383['dir'] = NULL;
$arguments383['id'] = NULL;
$arguments383['lang'] = NULL;
$arguments383['style'] = NULL;
$arguments383['title'] = NULL;
$arguments383['accesskey'] = NULL;
$arguments383['tabindex'] = NULL;
$arguments383['onclick'] = NULL;
$arguments383['name'] = NULL;
$arguments383['rel'] = NULL;
$arguments383['rev'] = NULL;
$arguments383['target'] = NULL;
$arguments383['action'] = NULL;
$arguments383['arguments'] = array (
);
$arguments383['controller'] = NULL;
$arguments383['package'] = NULL;
$arguments383['subpackage'] = NULL;
$arguments383['section'] = '';
$arguments383['format'] = '';
$arguments383['additionalParams'] = array (
);
$arguments383['addQueryString'] = false;
$arguments383['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments383['useParentRequest'] = false;
$arguments383['absolute'] = true;
$arguments383['useMainRequest'] = false;
$arguments383['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments385 = array();
$arguments385['id'] = NULL;
$arguments385['value'] = NULL;
$arguments385['arguments'] = array (
);
$arguments385['source'] = 'Main';
$arguments385['package'] = NULL;
$arguments385['quantity'] = NULL;
$arguments385['locale'] = NULL;
$arguments385['id'] = 'tooltip.thumbnailView';
$arguments385['package'] = 'Neos.Media.Browser';
$arguments383['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext);
// Rendering Array
$array387 = array();
$array387['view'] = 'Thumbnail';
$arguments383['arguments'] = $array387;
// Rendering Boolean node
// Rendering Array
$array388 = array();
$array388['0'] = 'TRUE';

$expression389 = function($context) {return TRUE;};
$arguments383['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression389(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array388)
					),
					$renderingContext
				);
// Rendering Array
$array390 = array();
$array390['neos-toggle'] = 'tooltip';
$arguments383['data'] = $array390;

$output382 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments383, $renderChildrenClosure384, $renderingContext);

$output382 .= '
            ';
return $output382;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments371, $renderChildrenClosure372, $renderingContext);

$output0 .= '
    </div>
';

return $output0;
}
/**
 * section Sidebar
 */
public function section_f5171c931c5c70d4dc3557fd20c356b636c92e04(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output417 = '';

$output417 .= '
    <form action="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure419 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments418 = array();
$arguments418['action'] = NULL;
$arguments418['arguments'] = array (
);
$arguments418['controller'] = NULL;
$arguments418['package'] = NULL;
$arguments418['subpackage'] = NULL;
$arguments418['section'] = '';
$arguments418['format'] = '';
$arguments418['additionalParams'] = array (
);
$arguments418['absolute'] = false;
$arguments418['addQueryString'] = false;
$arguments418['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments418['useParentRequest'] = false;
$arguments418['useMainRequest'] = false;
$arguments418['action'] = 'index';

$output417 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments418, $renderChildrenClosure419, $renderingContext)]);

$output417 .= '" method="get" class="neos-search">
        <button type="submit" title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure421 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments420 = array();
$arguments420['id'] = NULL;
$arguments420['value'] = NULL;
$arguments420['arguments'] = array (
);
$arguments420['source'] = 'Main';
$arguments420['package'] = NULL;
$arguments420['quantity'] = NULL;
$arguments420['locale'] = NULL;
$arguments420['id'] = 'search.title';
$arguments420['package'] = 'Neos.Media.Browser';

$output417 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments420, $renderChildrenClosure421, $renderingContext)]);

$output417 .= '" data-neos-toggle="tooltip"><i class="fas fa-search"></i></button>
        <div>
            <input type="search" name="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure423 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments422 = array();
$arguments422['then'] = NULL;
$arguments422['else'] = NULL;
$arguments422['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array424 = array();
$array425 = array (
);$array424['0'] = $renderingContext->getVariableProvider()->getByPath('argumentNamespace', $array425);

$expression426 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments422['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression426(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array424)
					),
					$renderingContext
				);
$output427 = '';
$array428 = array (
);
$output427 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('argumentNamespace', $array428)]);

$output427 .= '[searchTerm]';
$arguments422['then'] = $output427;
$arguments422['else'] = 'searchTerm';

$output417 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments422, $renderChildrenClosure423, $renderingContext);

$output417 .= '" placeholder="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure430 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments429 = array();
$arguments429['id'] = NULL;
$arguments429['value'] = NULL;
$arguments429['arguments'] = array (
);
$arguments429['source'] = 'Main';
$arguments429['package'] = NULL;
$arguments429['quantity'] = NULL;
$arguments429['locale'] = NULL;
$arguments429['id'] = 'search.placeholder';
$arguments429['package'] = 'Neos.Media.Browser';

$output417 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments429, $renderChildrenClosure430, $renderingContext)]);

$output417 .= '" value="';
$array431 = array (
);
$output417 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchTerm', $array431)]);

$output417 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments432 = array();
$arguments432['then'] = NULL;
$arguments432['else'] = NULL;
$arguments432['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array434 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure436 = function() use ($renderingContext, $self) {
$array437 = array (
);return $renderingContext->getVariableProvider()->getByPath('tags', $array437);
};
$arguments435 = array();
$arguments435['subject'] = NULL;
$renderChildrenClosure436 = ($arguments435['subject'] !== null) ? function() use ($arguments435) { return $arguments435['subject']; } : $renderChildrenClosure436;$array434['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments435, $renderChildrenClosure436, $renderingContext);
$array434['1'] = ' <= 25';

$expression438 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) <= 25);};
$arguments432['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression438(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array434)
					),
					$renderingContext
				);
$arguments432['then'] = ' autofocus="autofocus"';

$output417 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments432, $renderChildrenClosure433, $renderingContext);

$output417 .= ' />
        </div>
    </form>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
$output446 = '';

$output446 .= '
    <div class="neos-media-aside-group">
        <h2>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments447 = array();
$arguments447['id'] = NULL;
$arguments447['value'] = NULL;
$arguments447['arguments'] = array (
);
$arguments447['source'] = 'Main';
$arguments447['package'] = NULL;
$arguments447['quantity'] = NULL;
$arguments447['locale'] = NULL;
$arguments447['id'] = 'mediaSources';
$arguments447['package'] = 'Neos.Media.Browser';

$output446 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments447, $renderChildrenClosure448, $renderingContext)]);

$output446 .= '</h2>
        <ul class="neos-media-aside-list">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure450 = function() use ($renderingContext, $self) {
$output452 = '';

$output452 .= '
                <li>
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure454 = function() use ($renderingContext, $self) {
$output464 = '';

$output464 .= '
                        ';
$array465 = array (
);
$output464 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('assetSource.label', $array465)]);

$output464 .= '
                    ';
return $output464;
};
$arguments453 = array();
$arguments453['additionalAttributes'] = NULL;
$arguments453['data'] = NULL;
$arguments453['class'] = NULL;
$arguments453['dir'] = NULL;
$arguments453['id'] = NULL;
$arguments453['lang'] = NULL;
$arguments453['style'] = NULL;
$arguments453['title'] = NULL;
$arguments453['accesskey'] = NULL;
$arguments453['tabindex'] = NULL;
$arguments453['onclick'] = NULL;
$arguments453['name'] = NULL;
$arguments453['rel'] = NULL;
$arguments453['rev'] = NULL;
$arguments453['target'] = NULL;
$arguments453['action'] = NULL;
$arguments453['arguments'] = array (
);
$arguments453['controller'] = NULL;
$arguments453['package'] = NULL;
$arguments453['subpackage'] = NULL;
$arguments453['section'] = '';
$arguments453['format'] = '';
$arguments453['additionalParams'] = array (
);
$arguments453['addQueryString'] = false;
$arguments453['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments453['useParentRequest'] = false;
$arguments453['absolute'] = true;
$arguments453['useMainRequest'] = false;
$arguments453['action'] = 'index';
$array455 = array (
);$arguments453['title'] = $renderingContext->getVariableProvider()->getByPath('assetSource.label', $array455);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments456 = array();
$arguments456['then'] = NULL;
$arguments456['else'] = NULL;
$arguments456['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array458 = array();
$array459 = array (
);$array458['0'] = $renderingContext->getVariableProvider()->getByPath('assetSourceIdentifier', $array459);
$array458['1'] = ' === ';
$array460 = array (
);$array458['2'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.identifier', $array460);

$expression461 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments456['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression461(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array458)
					),
					$renderingContext
				);
$arguments456['then'] = ' neos-active';
$arguments453['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext);
// Rendering Array
$array462 = array();
$array463 = array (
);$array462['assetSourceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('assetSourceIdentifier', $array463);
$arguments453['arguments'] = $array462;

$output452 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments453, $renderChildrenClosure454, $renderingContext);

$output452 .= '
                </li>
            ';
return $output452;
};
$arguments449 = array();
$arguments449['each'] = NULL;
$arguments449['as'] = NULL;
$arguments449['key'] = NULL;
$arguments449['reverse'] = false;
$arguments449['iteration'] = NULL;
$array451 = array (
);$arguments449['each'] = $renderingContext->getVariableProvider()->getByPath('assetSources', $array451);
$arguments449['key'] = 'assetSourceIdentifier';
$arguments449['as'] = 'assetSource';

$output446 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments449, $renderChildrenClosure450, $renderingContext);

$output446 .= '
        </ul>
    </div>
    ';
return $output446;
};
$arguments439 = array();
$arguments439['then'] = NULL;
$arguments439['else'] = NULL;
$arguments439['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array441 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure443 = function() use ($renderingContext, $self) {
$array444 = array (
);return $renderingContext->getVariableProvider()->getByPath('assetSources', $array444);
};
$arguments442 = array();
$arguments442['subject'] = NULL;
$renderChildrenClosure443 = ($arguments442['subject'] !== null) ? function() use ($arguments442) { return $arguments442['subject']; } : $renderChildrenClosure443;$array441['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments442, $renderChildrenClosure443, $renderingContext);
$array441['1'] = ' > 1';

$expression445 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments439['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression445(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array441)
					),
					$renderingContext
				);
$arguments439['__thenClosure'] = $renderChildrenClosure440;

$output417 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext);

$output417 .= '
    <div class="neos-media-aside-group">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure467 = function() use ($renderingContext, $self) {
$output471 = '';

$output471 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Security\IfAccessViewHelper
$renderChildrenClosure473 = function() use ($renderingContext, $self) {
$output493 = '';

$output493 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure495 = function() use ($renderingContext, $self) {
$output496 = '';

$output496 .= '
                <h2>
                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure498 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments497 = array();
$arguments497['id'] = NULL;
$arguments497['value'] = NULL;
$arguments497['arguments'] = array (
);
$arguments497['source'] = 'Main';
$arguments497['package'] = NULL;
$arguments497['quantity'] = NULL;
$arguments497['locale'] = NULL;
$arguments497['id'] = 'collections';
$arguments497['package'] = 'Neos.Media.Browser';

$output496 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments497, $renderChildrenClosure498, $renderingContext)]);

$output496 .= '
                    <span class="neos-media-aside-list-edit-toggle neos-button" title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure500 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments499 = array();
$arguments499['id'] = NULL;
$arguments499['value'] = NULL;
$arguments499['arguments'] = array (
);
$arguments499['source'] = 'Main';
$arguments499['package'] = NULL;
$arguments499['quantity'] = NULL;
$arguments499['locale'] = NULL;
$arguments499['id'] = 'editCollections';
$arguments499['package'] = 'Neos.Media.Browser';

$output496 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments499, $renderChildrenClosure500, $renderingContext)]);

$output496 .= '" data-neos-toggle="tooltip"><i class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure502 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments501 = array();
$arguments501['then'] = NULL;
$arguments501['else'] = NULL;
$arguments501['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array503 = array();
$array504 = array (
);$array503['0'] = $renderingContext->getVariableProvider()->getByPath('assetCollections', $array504);

$expression505 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments501['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression505(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array503)
					),
					$renderingContext
				);
$arguments501['then'] = 'fas fa-pencil-alt';
$arguments501['else'] = 'fas fa-plus';

$output496 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments501, $renderChildrenClosure502, $renderingContext);

$output496 .= '"></i></span>
                </h2>
            ';
return $output496;
};
$arguments494 = array();

$output493 .= '';

$output493 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure507 = function() use ($renderingContext, $self) {
$output508 = '';

$output508 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure510 = function() use ($renderingContext, $self) {
$output514 = '';

$output514 .= '
                    <h2>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure516 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments515 = array();
$arguments515['id'] = NULL;
$arguments515['value'] = NULL;
$arguments515['arguments'] = array (
);
$arguments515['source'] = 'Main';
$arguments515['package'] = NULL;
$arguments515['quantity'] = NULL;
$arguments515['locale'] = NULL;
$arguments515['id'] = 'collections';
$arguments515['package'] = 'Neos.Media.Browser';

$output514 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments515, $renderChildrenClosure516, $renderingContext)]);

$output514 .= '</h2>
                ';
return $output514;
};
$arguments509 = array();
$arguments509['then'] = NULL;
$arguments509['else'] = NULL;
$arguments509['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array511 = array();
$array512 = array (
);$array511['0'] = $renderingContext->getVariableProvider()->getByPath('assetCollections', $array512);

$expression513 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments509['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression513(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array511)
					),
					$renderingContext
				);
$arguments509['__thenClosure'] = $renderChildrenClosure510;

$output508 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments509, $renderChildrenClosure510, $renderingContext);

$output508 .= '
            ';
return $output508;
};
$arguments506 = array();
$arguments506['if'] = NULL;

$output493 .= '';

$output493 .= '
        ';
return $output493;
};
$arguments472 = array();
$arguments472['then'] = NULL;
$arguments472['else'] = NULL;
$arguments472['condition'] = false;
$arguments472['privilegeTarget'] = NULL;
$arguments472['parameters'] = array (
);
$arguments472['privilegeTarget'] = 'Neos.Media.Browser:ManageAssetCollections';
$arguments472['__thenClosure'] = function() use ($renderingContext, $self) {
$output474 = '';

$output474 .= '
                <h2>
                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure476 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments475 = array();
$arguments475['id'] = NULL;
$arguments475['value'] = NULL;
$arguments475['arguments'] = array (
);
$arguments475['source'] = 'Main';
$arguments475['package'] = NULL;
$arguments475['quantity'] = NULL;
$arguments475['locale'] = NULL;
$arguments475['id'] = 'collections';
$arguments475['package'] = 'Neos.Media.Browser';

$output474 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments475, $renderChildrenClosure476, $renderingContext)]);

$output474 .= '
                    <span class="neos-media-aside-list-edit-toggle neos-button" title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure478 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments477 = array();
$arguments477['id'] = NULL;
$arguments477['value'] = NULL;
$arguments477['arguments'] = array (
);
$arguments477['source'] = 'Main';
$arguments477['package'] = NULL;
$arguments477['quantity'] = NULL;
$arguments477['locale'] = NULL;
$arguments477['id'] = 'editCollections';
$arguments477['package'] = 'Neos.Media.Browser';

$output474 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments477, $renderChildrenClosure478, $renderingContext)]);

$output474 .= '" data-neos-toggle="tooltip"><i class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure480 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments479 = array();
$arguments479['then'] = NULL;
$arguments479['else'] = NULL;
$arguments479['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array481 = array();
$array482 = array (
);$array481['0'] = $renderingContext->getVariableProvider()->getByPath('assetCollections', $array482);

$expression483 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments479['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression483(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array481)
					),
					$renderingContext
				);
$arguments479['then'] = 'fas fa-pencil-alt';
$arguments479['else'] = 'fas fa-plus';

$output474 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments479, $renderChildrenClosure480, $renderingContext);

$output474 .= '"></i></span>
                </h2>
            ';
return $output474;
};
$arguments472['__elseClosures'][] = function() use ($renderingContext, $self) {
$output484 = '';

$output484 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure486 = function() use ($renderingContext, $self) {
$output490 = '';

$output490 .= '
                    <h2>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure492 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments491 = array();
$arguments491['id'] = NULL;
$arguments491['value'] = NULL;
$arguments491['arguments'] = array (
);
$arguments491['source'] = 'Main';
$arguments491['package'] = NULL;
$arguments491['quantity'] = NULL;
$arguments491['locale'] = NULL;
$arguments491['id'] = 'collections';
$arguments491['package'] = 'Neos.Media.Browser';

$output490 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments491, $renderChildrenClosure492, $renderingContext)]);

$output490 .= '</h2>
                ';
return $output490;
};
$arguments485 = array();
$arguments485['then'] = NULL;
$arguments485['else'] = NULL;
$arguments485['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array487 = array();
$array488 = array (
);$array487['0'] = $renderingContext->getVariableProvider()->getByPath('assetCollections', $array488);

$expression489 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments485['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression489(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array487)
					),
					$renderingContext
				);
$arguments485['__thenClosure'] = $renderChildrenClosure486;

$output484 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments485, $renderChildrenClosure486, $renderingContext);

$output484 .= '
            ';
return $output484;
};

$output471 .= Neos\FluidAdaptor\ViewHelpers\Security\IfAccessViewHelper::renderStatic($arguments472, $renderChildrenClosure473, $renderingContext);

$output471 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure518 = function() use ($renderingContext, $self) {
$output524 = '';

$output524 .= '
            <ul class="neos-media-aside-list">
                <li>
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure526 = function() use ($renderingContext, $self) {
$output536 = '';

$output536 .= '
                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure538 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments537 = array();
$arguments537['id'] = NULL;
$arguments537['value'] = NULL;
$arguments537['arguments'] = array (
);
$arguments537['source'] = 'Main';
$arguments537['package'] = NULL;
$arguments537['quantity'] = NULL;
$arguments537['locale'] = NULL;
$arguments537['id'] = 'filter.all';
$arguments537['package'] = 'Neos.Media.Browser';

$output536 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments537, $renderChildrenClosure538, $renderingContext)]);

$output536 .= '
                        <span class="count">';
$array539 = array (
);
$output536 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('allCollectionsCount', $array539)]);

$output536 .= '</span>
                    ';
return $output536;
};
$arguments525 = array();
$arguments525['additionalAttributes'] = NULL;
$arguments525['data'] = NULL;
$arguments525['class'] = NULL;
$arguments525['dir'] = NULL;
$arguments525['id'] = NULL;
$arguments525['lang'] = NULL;
$arguments525['style'] = NULL;
$arguments525['title'] = NULL;
$arguments525['accesskey'] = NULL;
$arguments525['tabindex'] = NULL;
$arguments525['onclick'] = NULL;
$arguments525['name'] = NULL;
$arguments525['rel'] = NULL;
$arguments525['rev'] = NULL;
$arguments525['target'] = NULL;
$arguments525['action'] = NULL;
$arguments525['arguments'] = array (
);
$arguments525['controller'] = NULL;
$arguments525['package'] = NULL;
$arguments525['subpackage'] = NULL;
$arguments525['section'] = '';
$arguments525['format'] = '';
$arguments525['additionalParams'] = array (
);
$arguments525['addQueryString'] = false;
$arguments525['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments525['useParentRequest'] = false;
$arguments525['absolute'] = true;
$arguments525['useMainRequest'] = false;
$arguments525['action'] = 'index';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure528 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments527 = array();
$arguments527['then'] = NULL;
$arguments527['else'] = NULL;
$arguments527['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array529 = array();
$array530 = array (
);$array529['0'] = $renderingContext->getVariableProvider()->getByPath('activeAssetCollection', $array530);

$expression531 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments527['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression531(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array529)
					),
					$renderingContext
				);
$arguments527['else'] = ' neos-active';
$arguments527['__thenClosure'] = $renderChildrenClosure528;
$arguments525['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments527, $renderChildrenClosure528, $renderingContext);
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure533 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments532 = array();
$arguments532['id'] = NULL;
$arguments532['value'] = NULL;
$arguments532['arguments'] = array (
);
$arguments532['source'] = 'Main';
$arguments532['package'] = NULL;
$arguments532['quantity'] = NULL;
$arguments532['locale'] = NULL;
$arguments532['id'] = 'allCollections';
$arguments532['package'] = 'Neos.Media.Browser';
$arguments525['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments532, $renderChildrenClosure533, $renderingContext);
// Rendering Array
$array534 = array();
$array535 = array (
);$array534['view'] = $renderingContext->getVariableProvider()->getByPath('view', $array535);
$array534['collectionMode'] = 1;
$arguments525['arguments'] = $array534;

$output524 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments525, $renderChildrenClosure526, $renderingContext);

$output524 .= '
                </li>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure541 = function() use ($renderingContext, $self) {
$output543 = '';

$output543 .= '
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure545 = function() use ($renderingContext, $self) {
$output562 = '';

$output562 .= '
                            ';
$array563 = array (
);
$output562 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('assetCollection.object.title', $array563)]);

$output562 .= '
                            <span class="count">';
$array564 = array (
);
$output562 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('assetCollection.count', $array564)]);

$output562 .= '</span>
                        ';
return $output562;
};
$arguments544 = array();
$arguments544['additionalAttributes'] = NULL;
$arguments544['data'] = NULL;
$arguments544['class'] = NULL;
$arguments544['dir'] = NULL;
$arguments544['id'] = NULL;
$arguments544['lang'] = NULL;
$arguments544['style'] = NULL;
$arguments544['title'] = NULL;
$arguments544['accesskey'] = NULL;
$arguments544['tabindex'] = NULL;
$arguments544['onclick'] = NULL;
$arguments544['name'] = NULL;
$arguments544['rel'] = NULL;
$arguments544['rev'] = NULL;
$arguments544['target'] = NULL;
$arguments544['action'] = NULL;
$arguments544['arguments'] = array (
);
$arguments544['controller'] = NULL;
$arguments544['package'] = NULL;
$arguments544['subpackage'] = NULL;
$arguments544['section'] = '';
$arguments544['format'] = '';
$arguments544['additionalParams'] = array (
);
$arguments544['addQueryString'] = false;
$arguments544['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments544['useParentRequest'] = false;
$arguments544['absolute'] = true;
$arguments544['useMainRequest'] = false;
$arguments544['action'] = 'index';
$array546 = array (
);$arguments544['title'] = $renderingContext->getVariableProvider()->getByPath('assetCollection.object.title', $array546);
$output547 = '';

$output547 .= 'droppable-assetcollection';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure549 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments548 = array();
$arguments548['then'] = NULL;
$arguments548['else'] = NULL;
$arguments548['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array550 = array();
$array551 = array (
);$array550['0'] = $renderingContext->getVariableProvider()->getByPath('assetCollection.object', $array551);
$array550['1'] = ' === ';
$array552 = array (
);$array550['2'] = $renderingContext->getVariableProvider()->getByPath('activeAssetCollection', $array552);

$expression553 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments548['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression553(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array550)
					),
					$renderingContext
				);
$arguments548['then'] = ' neos-active';

$output547 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments548, $renderChildrenClosure549, $renderingContext);
$arguments544['class'] = $output547;
// Rendering Array
$array554 = array();
$array555 = array (
);$array554['view'] = $renderingContext->getVariableProvider()->getByPath('view', $array555);
$array556 = array (
);$array554['assetCollection'] = $renderingContext->getVariableProvider()->getByPath('assetCollection.object', $array556);
$arguments544['arguments'] = $array554;
// Rendering Array
$array557 = array();
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Format\IdentifierViewHelper
$renderChildrenClosure559 = function() use ($renderingContext, $self) {
$array561 = array (
);return $renderingContext->getVariableProvider()->getByPath('assetCollection.object', $array561);
};
$arguments558 = array();
$arguments558['value'] = NULL;
$value560 = ($arguments558['value'] !== null ? $arguments558['value'] : $renderChildrenClosure559());
if (!is_object($value560) && $value560 !== null) { throw new \Neos\FluidAdaptor\Core\ViewHelper\Exception('f:format.identifier expects an object, ' . gettype($value560) . ' given.', 1337700024); }
$array557['assetcollection-identifier'] = $value560 === null ? null : $renderingContext->getObjectManager()->get(\Neos\Flow\Persistence\PersistenceManagerInterface::class)->getIdentifierByObject($value560);
$arguments544['data'] = $array557;

$output543 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments544, $renderChildrenClosure545, $renderingContext);

$output543 .= '
                        <div class="neos-sidelist-edit-actions">
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure566 = function() use ($renderingContext, $self) {
return '<i class="fas fa-pencil-alt"></i>';
};
$arguments565 = array();
$arguments565['additionalAttributes'] = NULL;
$arguments565['data'] = NULL;
$arguments565['class'] = NULL;
$arguments565['dir'] = NULL;
$arguments565['id'] = NULL;
$arguments565['lang'] = NULL;
$arguments565['style'] = NULL;
$arguments565['title'] = NULL;
$arguments565['accesskey'] = NULL;
$arguments565['tabindex'] = NULL;
$arguments565['onclick'] = NULL;
$arguments565['name'] = NULL;
$arguments565['rel'] = NULL;
$arguments565['rev'] = NULL;
$arguments565['target'] = NULL;
$arguments565['action'] = NULL;
$arguments565['arguments'] = array (
);
$arguments565['controller'] = NULL;
$arguments565['package'] = NULL;
$arguments565['subpackage'] = NULL;
$arguments565['section'] = '';
$arguments565['format'] = '';
$arguments565['additionalParams'] = array (
);
$arguments565['addQueryString'] = false;
$arguments565['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments565['useParentRequest'] = false;
$arguments565['absolute'] = true;
$arguments565['useMainRequest'] = false;
$arguments565['class'] = 'neos-button';
$arguments565['action'] = 'editAssetCollection';
// Rendering Array
$array567 = array();
$array568 = array (
);$array567['assetCollection'] = $renderingContext->getVariableProvider()->getByPath('assetCollection.object', $array568);
$arguments565['arguments'] = $array567;
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure570 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments569 = array();
$arguments569['id'] = NULL;
$arguments569['value'] = NULL;
$arguments569['arguments'] = array (
);
$arguments569['source'] = 'Main';
$arguments569['package'] = NULL;
$arguments569['quantity'] = NULL;
$arguments569['locale'] = NULL;
$arguments569['id'] = 'editCollection';
$arguments569['package'] = 'Neos.Media.Browser';
$arguments565['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments569, $renderChildrenClosure570, $renderingContext);
// Rendering Array
$array571 = array();
$array571['neos-toggle'] = 'tooltip';
$arguments565['data'] = $array571;

$output543 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments565, $renderChildrenClosure566, $renderingContext);

$output543 .= '
                            <button type="submit" class="neos-button-danger" data-modal="delete-assetcollection-modal" data-object-identifier="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Format\IdentifierViewHelper
$renderChildrenClosure573 = function() use ($renderingContext, $self) {
$array575 = array (
);return $renderingContext->getVariableProvider()->getByPath('assetCollection.object', $array575);
};
$arguments572 = array();
$arguments572['value'] = NULL;
$value574 = ($arguments572['value'] !== null ? $arguments572['value'] : $renderChildrenClosure573());
if (!is_object($value574) && $value574 !== null) { throw new \Neos\FluidAdaptor\Core\ViewHelper\Exception('f:format.identifier expects an object, ' . gettype($value574) . ' given.', 1337700024); }

$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$value574 === null ? null : $renderingContext->getObjectManager()->get(\Neos\Flow\Persistence\PersistenceManagerInterface::class)->getIdentifierByObject($value574)]);

$output543 .= '" data-label="';
$array576 = array (
);
$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('assetCollection.object.title', $array576)]);

$output543 .= '" title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure578 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments577 = array();
$arguments577['id'] = NULL;
$arguments577['value'] = NULL;
$arguments577['arguments'] = array (
);
$arguments577['source'] = 'Main';
$arguments577['package'] = NULL;
$arguments577['quantity'] = NULL;
$arguments577['locale'] = NULL;
$arguments577['id'] = 'deleteCollection';
$arguments577['package'] = 'Neos.Media.Browser';

$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments577, $renderChildrenClosure578, $renderingContext)]);

$output543 .= '" data-neos-toggle="tooltip"><i class="fas fa-trash"></i></button>
                        </div>
                    </li>
                ';
return $output543;
};
$arguments540 = array();
$arguments540['each'] = NULL;
$arguments540['as'] = NULL;
$arguments540['key'] = NULL;
$arguments540['reverse'] = false;
$arguments540['iteration'] = NULL;
$array542 = array (
);$arguments540['each'] = $renderingContext->getVariableProvider()->getByPath('assetCollections', $array542);
$arguments540['as'] = 'assetCollection';

$output524 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments540, $renderChildrenClosure541, $renderingContext);

$output524 .= '
            </ul>
            <div class="neos-hide" id="delete-assetcollection-modal">
                <div class="neos-modal-centered">
                    <div class="neos-modal-content">
                        <div class="neos-modal-header">
                            <button type="button" class="neos-close neos-button" data-dismiss="modal"></button>
                            <div class="neos-header">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure580 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments579 = array();
$arguments579['id'] = NULL;
$arguments579['value'] = NULL;
$arguments579['arguments'] = array (
);
$arguments579['source'] = 'Main';
$arguments579['package'] = NULL;
$arguments579['quantity'] = NULL;
$arguments579['locale'] = NULL;
$arguments579['id'] = 'message.reallyDeleteCollection';
$arguments579['package'] = 'Neos.Media.Browser';

$output524 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments579, $renderChildrenClosure580, $renderingContext)]);

$output524 .= '</div>
                            <div>
                                <div class="neos-subheader">
                                    <p>
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure582 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments581 = array();
$arguments581['id'] = NULL;
$arguments581['value'] = NULL;
$arguments581['arguments'] = array (
);
$arguments581['source'] = 'Main';
$arguments581['package'] = NULL;
$arguments581['quantity'] = NULL;
$arguments581['locale'] = NULL;
$arguments581['id'] = 'message.willDeleteCollection';
$arguments581['package'] = 'Neos.Media.Browser';

$output524 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments581, $renderChildrenClosure582, $renderingContext)]);

$output524 .= '<br />
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure584 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments583 = array();
$arguments583['id'] = NULL;
$arguments583['value'] = NULL;
$arguments583['arguments'] = array (
);
$arguments583['source'] = 'Main';
$arguments583['package'] = NULL;
$arguments583['quantity'] = NULL;
$arguments583['locale'] = NULL;
$arguments583['id'] = 'message.operationCannotBeUndone';
$arguments583['package'] = 'Neos.Media.Browser';

$output524 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments583, $renderChildrenClosure584, $renderingContext)]);

$output524 .= '
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="neos-modal-footer">
                            <a href="#" class="neos-button" data-dismiss="modal">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure586 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments585 = array();
$arguments585['id'] = NULL;
$arguments585['value'] = NULL;
$arguments585['arguments'] = array (
);
$arguments585['source'] = 'Main';
$arguments585['package'] = NULL;
$arguments585['quantity'] = NULL;
$arguments585['locale'] = NULL;
$arguments585['id'] = 'cancel';
$arguments585['package'] = 'Neos.Neos';

$output524 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments585, $renderChildrenClosure586, $renderingContext)]);

$output524 .= '</a>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure588 = function() use ($renderingContext, $self) {
$output589 = '';

$output589 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure591 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments590 = array();
$arguments590['additionalAttributes'] = NULL;
$arguments590['data'] = NULL;
$arguments590['name'] = NULL;
$arguments590['value'] = NULL;
$arguments590['property'] = NULL;
$arguments590['class'] = NULL;
$arguments590['dir'] = NULL;
$arguments590['id'] = NULL;
$arguments590['lang'] = NULL;
$arguments590['style'] = NULL;
$arguments590['title'] = NULL;
$arguments590['accesskey'] = NULL;
$arguments590['tabindex'] = NULL;
$arguments590['onclick'] = NULL;
$arguments590['name'] = 'assetCollection';
$arguments590['id'] = 'modal-form-object';

$output589 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments590, $renderChildrenClosure591, $renderingContext);

$output589 .= '
                                <button type="submit" class="neos-button neos-button-danger">
                                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure593 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments592 = array();
$arguments592['id'] = NULL;
$arguments592['value'] = NULL;
$arguments592['arguments'] = array (
);
$arguments592['source'] = 'Main';
$arguments592['package'] = NULL;
$arguments592['quantity'] = NULL;
$arguments592['locale'] = NULL;
$arguments592['id'] = 'message.confirmDeleteCollection';
$arguments592['package'] = 'Neos.Media.Browser';

$output589 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments592, $renderChildrenClosure593, $renderingContext)]);

$output589 .= '
                                </button>
                            ';
return $output589;
};
$arguments587 = array();
$arguments587['additionalAttributes'] = NULL;
$arguments587['data'] = NULL;
$arguments587['enctype'] = NULL;
$arguments587['method'] = NULL;
$arguments587['name'] = NULL;
$arguments587['onreset'] = NULL;
$arguments587['onsubmit'] = NULL;
$arguments587['action'] = NULL;
$arguments587['arguments'] = array (
);
$arguments587['controller'] = NULL;
$arguments587['package'] = NULL;
$arguments587['subpackage'] = NULL;
$arguments587['object'] = NULL;
$arguments587['section'] = '';
$arguments587['format'] = '';
$arguments587['additionalParams'] = array (
);
$arguments587['absolute'] = false;
$arguments587['addQueryString'] = false;
$arguments587['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments587['fieldNamePrefix'] = NULL;
$arguments587['actionUri'] = NULL;
$arguments587['objectName'] = NULL;
$arguments587['useParentRequest'] = false;
$arguments587['class'] = NULL;
$arguments587['dir'] = NULL;
$arguments587['id'] = NULL;
$arguments587['lang'] = NULL;
$arguments587['style'] = NULL;
$arguments587['title'] = NULL;
$arguments587['accesskey'] = NULL;
$arguments587['tabindex'] = NULL;
$arguments587['onclick'] = NULL;
$arguments587['action'] = 'deleteAssetCollection';
$arguments587['class'] = 'neos-inline';

$output524 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments587, $renderChildrenClosure588, $renderingContext);

$output524 .= '
                        </div>
                    </div>
                </div>
                <div class="neos-modal-backdrop neos-in"></div>
            </div>
        ';
return $output524;
};
$arguments517 = array();
$arguments517['then'] = NULL;
$arguments517['else'] = NULL;
$arguments517['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array519 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure521 = function() use ($renderingContext, $self) {
$array522 = array (
);return $renderingContext->getVariableProvider()->getByPath('assetCollections', $array522);
};
$arguments520 = array();
$arguments520['subject'] = NULL;
$renderChildrenClosure521 = ($arguments520['subject'] !== null) ? function() use ($arguments520) { return $arguments520['subject']; } : $renderChildrenClosure521;$array519['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments520, $renderChildrenClosure521, $renderingContext);

$expression523 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments517['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression523(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array519)
					),
					$renderingContext
				);
$arguments517['__thenClosure'] = $renderChildrenClosure518;

$output471 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments517, $renderChildrenClosure518, $renderingContext);

$output471 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Security\IfAccessViewHelper
$renderChildrenClosure595 = function() use ($renderingContext, $self) {
$output596 = '';

$output596 .= '
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure598 = function() use ($renderingContext, $self) {
$output599 = '';

$output599 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure601 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments600 = array();
$arguments600['additionalAttributes'] = NULL;
$arguments600['data'] = NULL;
$arguments600['name'] = NULL;
$arguments600['value'] = NULL;
$arguments600['property'] = NULL;
$arguments600['disabled'] = false;
$arguments600['required'] = false;
$arguments600['maxlength'] = NULL;
$arguments600['readonly'] = NULL;
$arguments600['size'] = NULL;
$arguments600['placeholder'] = NULL;
$arguments600['autofocus'] = NULL;
$arguments600['type'] = 'text';
$arguments600['errorClass'] = 'f3-form-error';
$arguments600['class'] = NULL;
$arguments600['dir'] = NULL;
$arguments600['id'] = NULL;
$arguments600['lang'] = NULL;
$arguments600['style'] = NULL;
$arguments600['title'] = NULL;
$arguments600['accesskey'] = NULL;
$arguments600['tabindex'] = NULL;
$arguments600['onclick'] = NULL;
$arguments600['name'] = 'title';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure603 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments602 = array();
$arguments602['id'] = NULL;
$arguments602['value'] = NULL;
$arguments602['arguments'] = array (
);
$arguments602['source'] = 'Main';
$arguments602['package'] = NULL;
$arguments602['quantity'] = NULL;
$arguments602['locale'] = NULL;
$arguments602['id'] = 'newCollection.placeholder';
$arguments602['package'] = 'Neos.Media.Browser';
$arguments600['placeholder'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments602, $renderChildrenClosure603, $renderingContext);

$output599 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments600, $renderChildrenClosure601, $renderingContext);

$output599 .= '<br /><br />
                <button type="submit" class="neos-button neos-button-primary">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure605 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments604 = array();
$arguments604['id'] = NULL;
$arguments604['value'] = NULL;
$arguments604['arguments'] = array (
);
$arguments604['source'] = 'Main';
$arguments604['package'] = NULL;
$arguments604['quantity'] = NULL;
$arguments604['locale'] = NULL;
$arguments604['id'] = 'createCollection';
$arguments604['package'] = 'Neos.Media.Browser';

$output599 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments604, $renderChildrenClosure605, $renderingContext)]);

$output599 .= '</button>
            ';
return $output599;
};
$arguments597 = array();
$arguments597['additionalAttributes'] = NULL;
$arguments597['data'] = NULL;
$arguments597['enctype'] = NULL;
$arguments597['method'] = NULL;
$arguments597['name'] = NULL;
$arguments597['onreset'] = NULL;
$arguments597['onsubmit'] = NULL;
$arguments597['action'] = NULL;
$arguments597['arguments'] = array (
);
$arguments597['controller'] = NULL;
$arguments597['package'] = NULL;
$arguments597['subpackage'] = NULL;
$arguments597['object'] = NULL;
$arguments597['section'] = '';
$arguments597['format'] = '';
$arguments597['additionalParams'] = array (
);
$arguments597['absolute'] = false;
$arguments597['addQueryString'] = false;
$arguments597['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments597['fieldNamePrefix'] = NULL;
$arguments597['actionUri'] = NULL;
$arguments597['objectName'] = NULL;
$arguments597['useParentRequest'] = false;
$arguments597['class'] = NULL;
$arguments597['dir'] = NULL;
$arguments597['id'] = NULL;
$arguments597['lang'] = NULL;
$arguments597['style'] = NULL;
$arguments597['title'] = NULL;
$arguments597['accesskey'] = NULL;
$arguments597['tabindex'] = NULL;
$arguments597['onclick'] = NULL;
$arguments597['action'] = 'createAssetCollection';
$arguments597['id'] = 'neos-assetcollections-create-form';

$output596 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments597, $renderChildrenClosure598, $renderingContext);

$output596 .= '
        ';
return $output596;
};
$arguments594 = array();
$arguments594['then'] = NULL;
$arguments594['else'] = NULL;
$arguments594['condition'] = false;
$arguments594['privilegeTarget'] = NULL;
$arguments594['parameters'] = array (
);
$arguments594['privilegeTarget'] = 'Neos.Media.Browser:ManageAssetCollections';
$arguments594['__thenClosure'] = $renderChildrenClosure595;

$output471 .= Neos\FluidAdaptor\ViewHelpers\Security\IfAccessViewHelper::renderStatic($arguments594, $renderChildrenClosure595, $renderingContext);

$output471 .= '
        ';
return $output471;
};
$arguments466 = array();
$arguments466['then'] = NULL;
$arguments466['else'] = NULL;
$arguments466['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array468 = array();
$array468['0'] = '!';
$array469 = array (
);$array468['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array469);

$expression470 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments466['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression470(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array468)
					),
					$renderingContext
				);
$arguments466['__thenClosure'] = $renderChildrenClosure467;

$output417 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments466, $renderChildrenClosure467, $renderingContext);

$output417 .= '
    </div>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure607 = function() use ($renderingContext, $self) {
$output611 = '';

$output611 .= '
    <div class="neos-media-aside-group">
        <h2>
            ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure613 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments612 = array();
$arguments612['id'] = NULL;
$arguments612['value'] = NULL;
$arguments612['arguments'] = array (
);
$arguments612['source'] = 'Main';
$arguments612['package'] = NULL;
$arguments612['quantity'] = NULL;
$arguments612['locale'] = NULL;
$arguments612['id'] = 'tags';
$arguments612['package'] = 'Neos.Media.Browser';

$output611 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments612, $renderChildrenClosure613, $renderingContext)]);

$output611 .= '
            <span class="neos-media-aside-list-edit-toggle neos-button" title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure615 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments614 = array();
$arguments614['id'] = NULL;
$arguments614['value'] = NULL;
$arguments614['arguments'] = array (
);
$arguments614['source'] = 'Main';
$arguments614['package'] = NULL;
$arguments614['quantity'] = NULL;
$arguments614['locale'] = NULL;
$arguments614['id'] = 'editTags';
$arguments614['package'] = 'Neos.Media.Browser';

$output611 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments614, $renderChildrenClosure615, $renderingContext)]);

$output611 .= '" data-neos-toggle="tooltip"><i class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure617 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments616 = array();
$arguments616['then'] = NULL;
$arguments616['else'] = NULL;
$arguments616['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array618 = array();
$array619 = array (
);$array618['0'] = $renderingContext->getVariableProvider()->getByPath('tags', $array619);

$expression620 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments616['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression620(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array618)
					),
					$renderingContext
				);
$arguments616['then'] = 'fas fa-pencil-alt';
$arguments616['else'] = 'fas fa-plus';

$output611 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments616, $renderChildrenClosure617, $renderingContext);

$output611 .= '"></i></span>
        </h2>
        <ul class="neos-media-aside-list">
            <li class="neos-media-list-all">
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure622 = function() use ($renderingContext, $self) {
$output631 = '';

$output631 .= '
                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure633 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments632 = array();
$arguments632['id'] = NULL;
$arguments632['value'] = NULL;
$arguments632['arguments'] = array (
);
$arguments632['source'] = 'Main';
$arguments632['package'] = NULL;
$arguments632['quantity'] = NULL;
$arguments632['locale'] = NULL;
$arguments632['id'] = 'tags.all';
$arguments632['package'] = 'Neos.Media.Browser';

$output631 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments632, $renderChildrenClosure633, $renderingContext)]);

$output631 .= '
                    <span class="count">';
$array634 = array (
);
$output631 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('allCount', $array634)]);

$output631 .= '</span>
                ';
return $output631;
};
$arguments621 = array();
$arguments621['additionalAttributes'] = NULL;
$arguments621['data'] = NULL;
$arguments621['class'] = NULL;
$arguments621['dir'] = NULL;
$arguments621['id'] = NULL;
$arguments621['lang'] = NULL;
$arguments621['style'] = NULL;
$arguments621['title'] = NULL;
$arguments621['accesskey'] = NULL;
$arguments621['tabindex'] = NULL;
$arguments621['onclick'] = NULL;
$arguments621['name'] = NULL;
$arguments621['rel'] = NULL;
$arguments621['rev'] = NULL;
$arguments621['target'] = NULL;
$arguments621['action'] = NULL;
$arguments621['arguments'] = array (
);
$arguments621['controller'] = NULL;
$arguments621['package'] = NULL;
$arguments621['subpackage'] = NULL;
$arguments621['section'] = '';
$arguments621['format'] = '';
$arguments621['additionalParams'] = array (
);
$arguments621['addQueryString'] = false;
$arguments621['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments621['useParentRequest'] = false;
$arguments621['absolute'] = true;
$arguments621['useMainRequest'] = false;
$arguments621['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure624 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments623 = array();
$arguments623['id'] = NULL;
$arguments623['value'] = NULL;
$arguments623['arguments'] = array (
);
$arguments623['source'] = 'Main';
$arguments623['package'] = NULL;
$arguments623['quantity'] = NULL;
$arguments623['locale'] = NULL;
$arguments623['id'] = 'tags.title.all';
$arguments623['package'] = 'Neos.Media.Browser';
$arguments621['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments623, $renderChildrenClosure624, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure626 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments625 = array();
$arguments625['then'] = NULL;
$arguments625['else'] = NULL;
$arguments625['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array627 = array();
$array628 = array (
);$array627['0'] = $renderingContext->getVariableProvider()->getByPath('tagMode', $array628);
$array627['1'] = ' === 1';

$expression629 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 1);};
$arguments625['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression629(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array627)
					),
					$renderingContext
				);
$arguments625['then'] = 'neos-active';
$arguments621['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments625, $renderChildrenClosure626, $renderingContext);
// Rendering Array
$array630 = array();
$array630['tagMode'] = 1;
$arguments621['arguments'] = $array630;

$output611 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments621, $renderChildrenClosure622, $renderingContext);

$output611 .= '
            </li>
            <li class="neos-media-list-untagged">
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure636 = function() use ($renderingContext, $self) {
$output645 = '';

$output645 .= '
                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure647 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments646 = array();
$arguments646['id'] = NULL;
$arguments646['value'] = NULL;
$arguments646['arguments'] = array (
);
$arguments646['source'] = 'Main';
$arguments646['package'] = NULL;
$arguments646['quantity'] = NULL;
$arguments646['locale'] = NULL;
$arguments646['id'] = 'untagged';
$arguments646['package'] = 'Neos.Media.Browser';

$output645 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments646, $renderChildrenClosure647, $renderingContext)]);

$output645 .= '
                    <span class="count">';
$array648 = array (
);
$output645 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('untaggedCount', $array648)]);

$output645 .= '</span>
                ';
return $output645;
};
$arguments635 = array();
$arguments635['additionalAttributes'] = NULL;
$arguments635['data'] = NULL;
$arguments635['class'] = NULL;
$arguments635['dir'] = NULL;
$arguments635['id'] = NULL;
$arguments635['lang'] = NULL;
$arguments635['style'] = NULL;
$arguments635['title'] = NULL;
$arguments635['accesskey'] = NULL;
$arguments635['tabindex'] = NULL;
$arguments635['onclick'] = NULL;
$arguments635['name'] = NULL;
$arguments635['rel'] = NULL;
$arguments635['rev'] = NULL;
$arguments635['target'] = NULL;
$arguments635['action'] = NULL;
$arguments635['arguments'] = array (
);
$arguments635['controller'] = NULL;
$arguments635['package'] = NULL;
$arguments635['subpackage'] = NULL;
$arguments635['section'] = '';
$arguments635['format'] = '';
$arguments635['additionalParams'] = array (
);
$arguments635['addQueryString'] = false;
$arguments635['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments635['useParentRequest'] = false;
$arguments635['absolute'] = true;
$arguments635['useMainRequest'] = false;
$arguments635['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure638 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments637 = array();
$arguments637['id'] = NULL;
$arguments637['value'] = NULL;
$arguments637['arguments'] = array (
);
$arguments637['source'] = 'Main';
$arguments637['package'] = NULL;
$arguments637['quantity'] = NULL;
$arguments637['locale'] = NULL;
$arguments637['id'] = 'untaggedAssets';
$arguments637['package'] = 'Neos.Media.Browser';
$arguments635['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments637, $renderChildrenClosure638, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure640 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments639 = array();
$arguments639['then'] = NULL;
$arguments639['else'] = NULL;
$arguments639['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array641 = array();
$array642 = array (
);$array641['0'] = $renderingContext->getVariableProvider()->getByPath('tagMode', $array642);
$array641['1'] = ' === 2';

$expression643 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 2);};
$arguments639['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression643(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array641)
					),
					$renderingContext
				);
$arguments639['then'] = 'neos-active';
$arguments635['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments639, $renderChildrenClosure640, $renderingContext);
// Rendering Array
$array644 = array();
$array644['tagMode'] = 2;
$arguments635['arguments'] = $array644;

$output611 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments635, $renderChildrenClosure636, $renderingContext);

$output611 .= '
            </li>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure650 = function() use ($renderingContext, $self) {
$output652 = '';

$output652 .= '
                <li>
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure654 = function() use ($renderingContext, $self) {
$output670 = '';

$output670 .= '
                        ';
$array671 = array (
);
$output670 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tag.object.label', $array671)]);

$output670 .= '
                        <span class="count">';
$array672 = array (
);
$output670 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tag.count', $array672)]);

$output670 .= '</span>
                    ';
return $output670;
};
$arguments653 = array();
$arguments653['additionalAttributes'] = NULL;
$arguments653['data'] = NULL;
$arguments653['class'] = NULL;
$arguments653['dir'] = NULL;
$arguments653['id'] = NULL;
$arguments653['lang'] = NULL;
$arguments653['style'] = NULL;
$arguments653['title'] = NULL;
$arguments653['accesskey'] = NULL;
$arguments653['tabindex'] = NULL;
$arguments653['onclick'] = NULL;
$arguments653['name'] = NULL;
$arguments653['rel'] = NULL;
$arguments653['rev'] = NULL;
$arguments653['target'] = NULL;
$arguments653['action'] = NULL;
$arguments653['arguments'] = array (
);
$arguments653['controller'] = NULL;
$arguments653['package'] = NULL;
$arguments653['subpackage'] = NULL;
$arguments653['section'] = '';
$arguments653['format'] = '';
$arguments653['additionalParams'] = array (
);
$arguments653['addQueryString'] = false;
$arguments653['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments653['useParentRequest'] = false;
$arguments653['absolute'] = true;
$arguments653['useMainRequest'] = false;
$arguments653['action'] = 'index';
$array655 = array (
);$arguments653['title'] = $renderingContext->getVariableProvider()->getByPath('tag.object.label', $array655);
$output656 = '';

$output656 .= 'droppable-tag';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure658 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments657 = array();
$arguments657['then'] = NULL;
$arguments657['else'] = NULL;
$arguments657['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array659 = array();
$array660 = array (
);$array659['0'] = $renderingContext->getVariableProvider()->getByPath('tag.object', $array660);
$array659['1'] = ' === ';
$array661 = array (
);$array659['2'] = $renderingContext->getVariableProvider()->getByPath('activeTag', $array661);

$expression662 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments657['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression662(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array659)
					),
					$renderingContext
				);
$arguments657['then'] = ' neos-active';

$output656 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments657, $renderChildrenClosure658, $renderingContext);
$arguments653['class'] = $output656;
// Rendering Array
$array663 = array();
$array664 = array (
);$array663['tag'] = $renderingContext->getVariableProvider()->getByPath('tag.object', $array664);
$arguments653['arguments'] = $array663;
// Rendering Array
$array665 = array();
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Format\IdentifierViewHelper
$renderChildrenClosure667 = function() use ($renderingContext, $self) {
$array669 = array (
);return $renderingContext->getVariableProvider()->getByPath('tag.object', $array669);
};
$arguments666 = array();
$arguments666['value'] = NULL;
$value668 = ($arguments666['value'] !== null ? $arguments666['value'] : $renderChildrenClosure667());
if (!is_object($value668) && $value668 !== null) { throw new \Neos\FluidAdaptor\Core\ViewHelper\Exception('f:format.identifier expects an object, ' . gettype($value668) . ' given.', 1337700024); }
$array665['tag-identifier'] = $value668 === null ? null : $renderingContext->getObjectManager()->get(\Neos\Flow\Persistence\PersistenceManagerInterface::class)->getIdentifierByObject($value668);
$arguments653['data'] = $array665;

$output652 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments653, $renderChildrenClosure654, $renderingContext);

$output652 .= '
                    <div class="neos-sidelist-edit-actions">
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure674 = function() use ($renderingContext, $self) {
return '<i class="fas fa-pencil-alt"></i>';
};
$arguments673 = array();
$arguments673['additionalAttributes'] = NULL;
$arguments673['data'] = NULL;
$arguments673['class'] = NULL;
$arguments673['dir'] = NULL;
$arguments673['id'] = NULL;
$arguments673['lang'] = NULL;
$arguments673['style'] = NULL;
$arguments673['title'] = NULL;
$arguments673['accesskey'] = NULL;
$arguments673['tabindex'] = NULL;
$arguments673['onclick'] = NULL;
$arguments673['name'] = NULL;
$arguments673['rel'] = NULL;
$arguments673['rev'] = NULL;
$arguments673['target'] = NULL;
$arguments673['action'] = NULL;
$arguments673['arguments'] = array (
);
$arguments673['controller'] = NULL;
$arguments673['package'] = NULL;
$arguments673['subpackage'] = NULL;
$arguments673['section'] = '';
$arguments673['format'] = '';
$arguments673['additionalParams'] = array (
);
$arguments673['addQueryString'] = false;
$arguments673['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments673['useParentRequest'] = false;
$arguments673['absolute'] = true;
$arguments673['useMainRequest'] = false;
$arguments673['class'] = 'neos-button';
$arguments673['action'] = 'editTag';
// Rendering Array
$array675 = array();
$array676 = array (
);$array675['tag'] = $renderingContext->getVariableProvider()->getByPath('tag.object', $array676);
$arguments673['arguments'] = $array675;
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure678 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments677 = array();
$arguments677['id'] = NULL;
$arguments677['value'] = NULL;
$arguments677['arguments'] = array (
);
$arguments677['source'] = 'Main';
$arguments677['package'] = NULL;
$arguments677['quantity'] = NULL;
$arguments677['locale'] = NULL;
$arguments677['id'] = 'editTag';
$arguments677['package'] = 'Neos.Media.Browser';
$arguments673['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments677, $renderChildrenClosure678, $renderingContext);
// Rendering Array
$array679 = array();
$array679['neos-toggle'] = 'tooltip';
$arguments673['data'] = $array679;

$output652 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments673, $renderChildrenClosure674, $renderingContext);

$output652 .= '
                        <button class="neos-button-danger" title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure681 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments680 = array();
$arguments680['id'] = NULL;
$arguments680['value'] = NULL;
$arguments680['arguments'] = array (
);
$arguments680['source'] = 'Main';
$arguments680['package'] = NULL;
$arguments680['quantity'] = NULL;
$arguments680['locale'] = NULL;
$arguments680['id'] = 'deleteTag';
$arguments680['package'] = 'Neos.Media.Browser';

$output652 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments680, $renderChildrenClosure681, $renderingContext)]);

$output652 .= '" data-neos-toggle="tooltip" data-modal="delete-tag-modal" data-object-identifier="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Format\IdentifierViewHelper
$renderChildrenClosure683 = function() use ($renderingContext, $self) {
$array685 = array (
);return $renderingContext->getVariableProvider()->getByPath('tag.object', $array685);
};
$arguments682 = array();
$arguments682['value'] = NULL;
$value684 = ($arguments682['value'] !== null ? $arguments682['value'] : $renderChildrenClosure683());
if (!is_object($value684) && $value684 !== null) { throw new \Neos\FluidAdaptor\Core\ViewHelper\Exception('f:format.identifier expects an object, ' . gettype($value684) . ' given.', 1337700024); }

$output652 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$value684 === null ? null : $renderingContext->getObjectManager()->get(\Neos\Flow\Persistence\PersistenceManagerInterface::class)->getIdentifierByObject($value684)]);

$output652 .= '" data-label="';
$array686 = array (
);
$output652 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tag.object.label', $array686)]);

$output652 .= '"><i class="fas fa-trash"></i></button>
                    </div>
                </li>
            ';
return $output652;
};
$arguments649 = array();
$arguments649['each'] = NULL;
$arguments649['as'] = NULL;
$arguments649['key'] = NULL;
$arguments649['reverse'] = false;
$arguments649['iteration'] = NULL;
$array651 = array (
);$arguments649['each'] = $renderingContext->getVariableProvider()->getByPath('tags', $array651);
$arguments649['as'] = 'tag';

$output611 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments649, $renderChildrenClosure650, $renderingContext);

$output611 .= '
            <div class="neos-hide" id="delete-tag-modal">
                <div class="neos-modal-centered">
                    <div class="neos-modal-content">
                        <div class="neos-modal-header">
                            <button type="button" class="neos-close neos-button" data-dismiss="modal"></button>
                            <div class="neos-header">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure688 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments687 = array();
$arguments687['id'] = NULL;
$arguments687['value'] = NULL;
$arguments687['arguments'] = array (
);
$arguments687['source'] = 'Main';
$arguments687['package'] = NULL;
$arguments687['quantity'] = NULL;
$arguments687['locale'] = NULL;
$arguments687['id'] = 'message.reallyDeleteTag';
$arguments687['package'] = 'Neos.Media.Browser';

$output611 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments687, $renderChildrenClosure688, $renderingContext)]);

$output611 .= '</div>
                            <div>
                                <div class="neos-subheader">
                                    <p>
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure690 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments689 = array();
$arguments689['id'] = NULL;
$arguments689['value'] = NULL;
$arguments689['arguments'] = array (
);
$arguments689['source'] = 'Main';
$arguments689['package'] = NULL;
$arguments689['quantity'] = NULL;
$arguments689['locale'] = NULL;
$arguments689['id'] = 'message.willDeleteTag';
$arguments689['package'] = 'Neos.Media.Browser';

$output611 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments689, $renderChildrenClosure690, $renderingContext)]);

$output611 .= '<br />
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure692 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments691 = array();
$arguments691['id'] = NULL;
$arguments691['value'] = NULL;
$arguments691['arguments'] = array (
);
$arguments691['source'] = 'Main';
$arguments691['package'] = NULL;
$arguments691['quantity'] = NULL;
$arguments691['locale'] = NULL;
$arguments691['id'] = 'message.operationCannotBeUndone';
$arguments691['package'] = 'Neos.Media.Browser';

$output611 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments691, $renderChildrenClosure692, $renderingContext)]);

$output611 .= '
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="neos-modal-footer">
                            <a href="#" class="neos-button" data-dismiss="modal">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure694 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments693 = array();
$arguments693['id'] = NULL;
$arguments693['value'] = NULL;
$arguments693['arguments'] = array (
);
$arguments693['source'] = 'Main';
$arguments693['package'] = NULL;
$arguments693['quantity'] = NULL;
$arguments693['locale'] = NULL;
$arguments693['id'] = 'cancel';
$arguments693['package'] = 'Neos.Neos';

$output611 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments693, $renderChildrenClosure694, $renderingContext)]);

$output611 .= '</a>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure696 = function() use ($renderingContext, $self) {
$output697 = '';

$output697 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure699 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments698 = array();
$arguments698['additionalAttributes'] = NULL;
$arguments698['data'] = NULL;
$arguments698['name'] = NULL;
$arguments698['value'] = NULL;
$arguments698['property'] = NULL;
$arguments698['class'] = NULL;
$arguments698['dir'] = NULL;
$arguments698['id'] = NULL;
$arguments698['lang'] = NULL;
$arguments698['style'] = NULL;
$arguments698['title'] = NULL;
$arguments698['accesskey'] = NULL;
$arguments698['tabindex'] = NULL;
$arguments698['onclick'] = NULL;
$arguments698['name'] = 'tag';
$arguments698['id'] = 'modal-form-object';

$output697 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments698, $renderChildrenClosure699, $renderingContext);

$output697 .= '
                                <button type="submit" class="neos-button neos-button-danger">
                                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure701 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments700 = array();
$arguments700['id'] = NULL;
$arguments700['value'] = NULL;
$arguments700['arguments'] = array (
);
$arguments700['source'] = 'Main';
$arguments700['package'] = NULL;
$arguments700['quantity'] = NULL;
$arguments700['locale'] = NULL;
$arguments700['id'] = 'message.confirmDeleteTag';
$arguments700['package'] = 'Neos.Media.Browser';

$output697 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments700, $renderChildrenClosure701, $renderingContext)]);

$output697 .= '
                                </button>
                            ';
return $output697;
};
$arguments695 = array();
$arguments695['additionalAttributes'] = NULL;
$arguments695['data'] = NULL;
$arguments695['enctype'] = NULL;
$arguments695['method'] = NULL;
$arguments695['name'] = NULL;
$arguments695['onreset'] = NULL;
$arguments695['onsubmit'] = NULL;
$arguments695['action'] = NULL;
$arguments695['arguments'] = array (
);
$arguments695['controller'] = NULL;
$arguments695['package'] = NULL;
$arguments695['subpackage'] = NULL;
$arguments695['object'] = NULL;
$arguments695['section'] = '';
$arguments695['format'] = '';
$arguments695['additionalParams'] = array (
);
$arguments695['absolute'] = false;
$arguments695['addQueryString'] = false;
$arguments695['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments695['fieldNamePrefix'] = NULL;
$arguments695['actionUri'] = NULL;
$arguments695['objectName'] = NULL;
$arguments695['useParentRequest'] = false;
$arguments695['class'] = NULL;
$arguments695['dir'] = NULL;
$arguments695['id'] = NULL;
$arguments695['lang'] = NULL;
$arguments695['style'] = NULL;
$arguments695['title'] = NULL;
$arguments695['accesskey'] = NULL;
$arguments695['tabindex'] = NULL;
$arguments695['onclick'] = NULL;
$arguments695['action'] = 'deleteTag';
$arguments695['class'] = 'neos-inline';

$output611 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments695, $renderChildrenClosure696, $renderingContext);

$output611 .= '
                        </div>
                    </div>
                </div>
                <div class="neos-modal-backdrop neos-in"></div>
            </div>
        </ul>
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure703 = function() use ($renderingContext, $self) {
$output704 = '';

$output704 .= '
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure706 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments705 = array();
$arguments705['additionalAttributes'] = NULL;
$arguments705['data'] = NULL;
$arguments705['name'] = NULL;
$arguments705['value'] = NULL;
$arguments705['property'] = NULL;
$arguments705['disabled'] = false;
$arguments705['required'] = false;
$arguments705['maxlength'] = NULL;
$arguments705['readonly'] = NULL;
$arguments705['size'] = NULL;
$arguments705['placeholder'] = NULL;
$arguments705['autofocus'] = NULL;
$arguments705['type'] = 'text';
$arguments705['errorClass'] = 'f3-form-error';
$arguments705['class'] = NULL;
$arguments705['dir'] = NULL;
$arguments705['id'] = NULL;
$arguments705['lang'] = NULL;
$arguments705['style'] = NULL;
$arguments705['title'] = NULL;
$arguments705['accesskey'] = NULL;
$arguments705['tabindex'] = NULL;
$arguments705['onclick'] = NULL;
$arguments705['name'] = 'label';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure708 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments707 = array();
$arguments707['id'] = NULL;
$arguments707['value'] = NULL;
$arguments707['arguments'] = array (
);
$arguments707['source'] = 'Main';
$arguments707['package'] = NULL;
$arguments707['quantity'] = NULL;
$arguments707['locale'] = NULL;
$arguments707['id'] = 'placeholder.createTag';
$arguments707['package'] = 'Neos.Media.Browser';
$arguments705['placeholder'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments707, $renderChildrenClosure708, $renderingContext);

$output704 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments705, $renderChildrenClosure706, $renderingContext);

$output704 .= '<br /><br />
            <button type="submit" class="neos-button neos-button-primary">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure710 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments709 = array();
$arguments709['id'] = NULL;
$arguments709['value'] = NULL;
$arguments709['arguments'] = array (
);
$arguments709['source'] = 'Main';
$arguments709['package'] = NULL;
$arguments709['quantity'] = NULL;
$arguments709['locale'] = NULL;
$arguments709['id'] = 'createTag';
$arguments709['package'] = 'Neos.Media.Browser';

$output704 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments709, $renderChildrenClosure710, $renderingContext)]);

$output704 .= '</button>
        ';
return $output704;
};
$arguments702 = array();
$arguments702['additionalAttributes'] = NULL;
$arguments702['data'] = NULL;
$arguments702['enctype'] = NULL;
$arguments702['method'] = NULL;
$arguments702['name'] = NULL;
$arguments702['onreset'] = NULL;
$arguments702['onsubmit'] = NULL;
$arguments702['action'] = NULL;
$arguments702['arguments'] = array (
);
$arguments702['controller'] = NULL;
$arguments702['package'] = NULL;
$arguments702['subpackage'] = NULL;
$arguments702['object'] = NULL;
$arguments702['section'] = '';
$arguments702['format'] = '';
$arguments702['additionalParams'] = array (
);
$arguments702['absolute'] = false;
$arguments702['addQueryString'] = false;
$arguments702['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments702['fieldNamePrefix'] = NULL;
$arguments702['actionUri'] = NULL;
$arguments702['objectName'] = NULL;
$arguments702['useParentRequest'] = false;
$arguments702['class'] = NULL;
$arguments702['dir'] = NULL;
$arguments702['id'] = NULL;
$arguments702['lang'] = NULL;
$arguments702['style'] = NULL;
$arguments702['title'] = NULL;
$arguments702['accesskey'] = NULL;
$arguments702['tabindex'] = NULL;
$arguments702['onclick'] = NULL;
$arguments702['action'] = 'createTag';
$arguments702['id'] = 'neos-tags-create-form';

$output611 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments702, $renderChildrenClosure703, $renderingContext);

$output611 .= '
    </div>
    ';
return $output611;
};
$arguments606 = array();
$arguments606['then'] = NULL;
$arguments606['else'] = NULL;
$arguments606['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array608 = array();
$array608['0'] = '!';
$array609 = array (
);$array608['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array609);

$expression610 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments606['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression610(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array608)
					),
					$renderingContext
				);
$arguments606['__thenClosure'] = $renderChildrenClosure607;

$output417 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments606, $renderChildrenClosure607, $renderingContext);

$output417 .= '
';

return $output417;
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output711 = '';

$output711 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure713 = function() use ($renderingContext, $self) {
$output717 = '';

$output717 .= '
    <div id="dropzone" class="neos-upload-area">
        <div title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure719 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments718 = array();
$arguments718['id'] = NULL;
$arguments718['value'] = NULL;
$arguments718['arguments'] = array (
);
$arguments718['source'] = 'Main';
$arguments718['package'] = NULL;
$arguments718['quantity'] = NULL;
$arguments718['locale'] = NULL;
$arguments718['id'] = 'maxUploadSize';
// Rendering Array
$array720 = array();
$array721 = array (
);$array720['0'] = $renderingContext->getVariableProvider()->getByPath('humanReadableMaximumFileUploadSize', $array721);
$arguments718['arguments'] = $array720;
$arguments718['package'] = 'Neos.Media.Browser';

$output717 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments718, $renderChildrenClosure719, $renderingContext)]);

$output717 .= '" data-neos-toggle="tooltip">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure723 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments722 = array();
$arguments722['id'] = NULL;
$arguments722['value'] = NULL;
$arguments722['arguments'] = array (
);
$arguments722['source'] = 'Main';
$arguments722['package'] = NULL;
$arguments722['quantity'] = NULL;
$arguments722['locale'] = NULL;
$arguments722['id'] = 'dropFiles';
$arguments722['package'] = 'Neos.Media.Browser';

$output717 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments722, $renderChildrenClosure723, $renderingContext)]);

$output717 .= '<i class="fas fa-arrow-down"></i><span> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure725 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments724 = array();
$arguments724['id'] = NULL;
$arguments724['value'] = NULL;
$arguments724['arguments'] = array (
);
$arguments724['source'] = 'Main';
$arguments724['package'] = NULL;
$arguments724['quantity'] = NULL;
$arguments724['locale'] = NULL;
$arguments724['id'] = 'clickToUpload';
$arguments724['package'] = 'Neos.Media.Browser';

$output717 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments724, $renderChildrenClosure725, $renderingContext)]);

$output717 .= '</span></div>
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure727 = function() use ($renderingContext, $self) {
$output729 = '';

$output729 .= '
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\UploadViewHelper
$renderChildrenClosure731 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments730 = array();
$arguments730['additionalAttributes'] = NULL;
$arguments730['data'] = NULL;
$arguments730['name'] = NULL;
$arguments730['value'] = NULL;
$arguments730['property'] = NULL;
$arguments730['disabled'] = false;
$arguments730['errorClass'] = 'f3-form-error';
$arguments730['collection'] = '';
$arguments730['class'] = NULL;
$arguments730['dir'] = NULL;
$arguments730['id'] = NULL;
$arguments730['lang'] = NULL;
$arguments730['style'] = NULL;
$arguments730['title'] = NULL;
$arguments730['accesskey'] = NULL;
$arguments730['tabindex'] = NULL;
$arguments730['onclick'] = NULL;
$arguments730['id'] = 'resource';
$arguments730['property'] = 'resource';
// Rendering Array
$array732 = array();
$array732['required'] = 'required';
$arguments730['additionalAttributes'] = $array732;

$output729 .= Neos\FluidAdaptor\ViewHelpers\Form\UploadViewHelper::renderStatic($arguments730, $renderChildrenClosure731, $renderingContext);

$output729 .= '
        ';
return $output729;
};
$arguments726 = array();
$arguments726['additionalAttributes'] = NULL;
$arguments726['data'] = NULL;
$arguments726['enctype'] = NULL;
$arguments726['method'] = NULL;
$arguments726['name'] = NULL;
$arguments726['onreset'] = NULL;
$arguments726['onsubmit'] = NULL;
$arguments726['action'] = NULL;
$arguments726['arguments'] = array (
);
$arguments726['controller'] = NULL;
$arguments726['package'] = NULL;
$arguments726['subpackage'] = NULL;
$arguments726['object'] = NULL;
$arguments726['section'] = '';
$arguments726['format'] = '';
$arguments726['additionalParams'] = array (
);
$arguments726['absolute'] = false;
$arguments726['addQueryString'] = false;
$arguments726['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments726['fieldNamePrefix'] = NULL;
$arguments726['actionUri'] = NULL;
$arguments726['objectName'] = NULL;
$arguments726['useParentRequest'] = false;
$arguments726['class'] = NULL;
$arguments726['dir'] = NULL;
$arguments726['id'] = NULL;
$arguments726['lang'] = NULL;
$arguments726['style'] = NULL;
$arguments726['title'] = NULL;
$arguments726['accesskey'] = NULL;
$arguments726['tabindex'] = NULL;
$arguments726['onclick'] = NULL;
$arguments726['method'] = 'post';
$arguments726['action'] = 'create';
$array728 = array (
);$arguments726['object'] = $renderingContext->getVariableProvider()->getByPath('asset', $array728);
$arguments726['objectName'] = 'asset';
$arguments726['enctype'] = 'multipart/form-data';

$output717 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments726, $renderChildrenClosure727, $renderingContext);

$output717 .= '
    </div>
    <div id="uploader">
        <div id="filelist"></div>
    </div>
    ';
return $output717;
};
$arguments712 = array();
$arguments712['then'] = NULL;
$arguments712['else'] = NULL;
$arguments712['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array714 = array();
$array714['0'] = '!';
$array715 = array (
);$array714['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array715);

$expression716 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments712['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression716(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array714)
					),
					$renderingContext
				);
$arguments712['__thenClosure'] = $renderChildrenClosure713;

$output711 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments712, $renderChildrenClosure713, $renderingContext);

$output711 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure734 = function() use ($renderingContext, $self) {
$output829 = '';

$output829 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure831 = function() use ($renderingContext, $self) {
$output832 = '';

$output832 .= '
            <h2>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure834 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments833 = array();
$arguments833['id'] = NULL;
$arguments833['value'] = NULL;
$arguments833['arguments'] = array (
);
$arguments833['source'] = 'Main';
$arguments833['package'] = NULL;
$arguments833['quantity'] = NULL;
$arguments833['locale'] = NULL;
$arguments833['id'] = 'connectionError';
$arguments833['package'] = 'Neos.Media.Browser';

$output832 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments833, $renderChildrenClosure834, $renderingContext)]);

$output832 .= '</h2>
            <p>';
$array835 = array (
);
$output832 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('connectionError.message', $array835)]);

$output832 .= '</p>
        ';
return $output832;
};
$arguments830 = array();

$output829 .= '';

$output829 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure837 = function() use ($renderingContext, $self) {
$output838 = '';

$output838 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure840 = function() use ($renderingContext, $self) {
$output883 = '';

$output883 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure885 = function() use ($renderingContext, $self) {
$output886 = '';

$output886 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure888 = function() use ($renderingContext, $self) {
$output892 = '';

$output892 .= '
            <div class="neos-media-content-help">
                <i class="fas fa-info-circle"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure894 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments893 = array();
$arguments893['id'] = NULL;
$arguments893['value'] = NULL;
$arguments893['arguments'] = array (
);
$arguments893['source'] = 'Main';
$arguments893['package'] = NULL;
$arguments893['quantity'] = NULL;
$arguments893['locale'] = NULL;
$arguments893['id'] = 'dragHelp';
$arguments893['package'] = 'Neos.Media.Browser';

$output892 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments893, $renderChildrenClosure894, $renderingContext)]);

$output892 .= '
            </div>
                    ';
return $output892;
};
$arguments887 = array();
$arguments887['then'] = NULL;
$arguments887['else'] = NULL;
$arguments887['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array889 = array();
$array889['0'] = '!';
$array890 = array (
);$array889['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array890);

$expression891 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments887['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression891(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array889)
					),
					$renderingContext
				);
$arguments887['__thenClosure'] = $renderChildrenClosure888;

$output886 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments887, $renderChildrenClosure888, $renderingContext);

$output886 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure896 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments895 = array();
$arguments895['section'] = NULL;
$arguments895['partial'] = NULL;
$arguments895['delegate'] = NULL;
$arguments895['renderable'] = NULL;
$arguments895['arguments'] = array (
);
$arguments895['optional'] = false;
$arguments895['default'] = NULL;
$arguments895['contentAs'] = NULL;
$output897 = '';
$array898 = array (
);
$output897 .= $renderingContext->getVariableProvider()->getByPath('view', $array898);

$output897 .= 'View';
$arguments895['partial'] = $output897;
// Rendering Array
$array899 = array();
$array900 = array (
);$array899['assetProxies'] = $renderingContext->getVariableProvider()->getByPath('assetProxies', $array900);
$array901 = array (
);$array899['activeAssetSource'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource', $array901);
$array902 = array (
);$array899['activeAssetSourceSupportsSorting'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSourceSupportsSorting', $array902);
$array903 = array (
);$array899['sortBy'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array903);
$array904 = array (
);$array899['sortDirection'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array904);
$arguments895['arguments'] = $array899;

$output886 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments895, $renderChildrenClosure896, $renderingContext);

$output886 .= '

            <div class="neos-hide" id="delete-asset-modal">
                <div class="neos-modal-centered">
                    <div class="neos-modal-content">
                        <div class="neos-modal-header">
                            <button type="button" class="neos-close neos-button" data-dismiss="modal"></button>
                            <div class="neos-header">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure906 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments905 = array();
$arguments905['id'] = NULL;
$arguments905['value'] = NULL;
$arguments905['arguments'] = array (
);
$arguments905['source'] = 'Main';
$arguments905['package'] = NULL;
$arguments905['quantity'] = NULL;
$arguments905['locale'] = NULL;
$arguments905['id'] = 'message.reallyDeleteAsset';
$arguments905['package'] = 'Neos.Media.Browser';

$output886 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments905, $renderChildrenClosure906, $renderingContext)]);

$output886 .= '</div>
                            <div>
                                <div class="neos-subheader">
                                    <p>
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure908 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments907 = array();
$arguments907['id'] = NULL;
$arguments907['value'] = NULL;
$arguments907['arguments'] = array (
);
$arguments907['source'] = 'Main';
$arguments907['package'] = NULL;
$arguments907['quantity'] = NULL;
$arguments907['locale'] = NULL;
$arguments907['id'] = 'message.willBeDeleted';
$arguments907['package'] = 'Neos.Media.Browser';

$output886 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments907, $renderChildrenClosure908, $renderingContext)]);

$output886 .= '<br />
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure910 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments909 = array();
$arguments909['id'] = NULL;
$arguments909['value'] = NULL;
$arguments909['arguments'] = array (
);
$arguments909['source'] = 'Main';
$arguments909['package'] = NULL;
$arguments909['quantity'] = NULL;
$arguments909['locale'] = NULL;
$arguments909['id'] = 'message.operationCannotBeUndone';
$arguments909['package'] = 'Neos.Media.Browser';

$output886 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments909, $renderChildrenClosure910, $renderingContext)]);

$output886 .= '
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="neos-modal-footer">
                            <a href="#" class="neos-button" data-dismiss="modal">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure912 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments911 = array();
$arguments911['id'] = NULL;
$arguments911['value'] = NULL;
$arguments911['arguments'] = array (
);
$arguments911['source'] = 'Main';
$arguments911['package'] = NULL;
$arguments911['quantity'] = NULL;
$arguments911['locale'] = NULL;
$arguments911['id'] = 'cancel';
$arguments911['package'] = 'Neos.Neos';

$output886 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments911, $renderChildrenClosure912, $renderingContext)]);

$output886 .= '</a>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure914 = function() use ($renderingContext, $self) {
$output915 = '';

$output915 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure917 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments916 = array();
$arguments916['additionalAttributes'] = NULL;
$arguments916['data'] = NULL;
$arguments916['name'] = NULL;
$arguments916['value'] = NULL;
$arguments916['property'] = NULL;
$arguments916['class'] = NULL;
$arguments916['dir'] = NULL;
$arguments916['id'] = NULL;
$arguments916['lang'] = NULL;
$arguments916['style'] = NULL;
$arguments916['title'] = NULL;
$arguments916['accesskey'] = NULL;
$arguments916['tabindex'] = NULL;
$arguments916['onclick'] = NULL;
$arguments916['name'] = 'asset';
$arguments916['id'] = 'modal-form-object';

$output915 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments916, $renderChildrenClosure917, $renderingContext);

$output915 .= '
                                <button type="submit" class="neos-button neos-button-mini neos-button-danger">
                                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure919 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments918 = array();
$arguments918['id'] = NULL;
$arguments918['value'] = NULL;
$arguments918['arguments'] = array (
);
$arguments918['source'] = 'Main';
$arguments918['package'] = NULL;
$arguments918['quantity'] = NULL;
$arguments918['locale'] = NULL;
$arguments918['id'] = 'message.confirmDelete';
$arguments918['package'] = 'Neos.Media.Browser';

$output915 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments918, $renderChildrenClosure919, $renderingContext)]);

$output915 .= '
                                </button>
                            ';
return $output915;
};
$arguments913 = array();
$arguments913['additionalAttributes'] = NULL;
$arguments913['data'] = NULL;
$arguments913['enctype'] = NULL;
$arguments913['method'] = NULL;
$arguments913['name'] = NULL;
$arguments913['onreset'] = NULL;
$arguments913['onsubmit'] = NULL;
$arguments913['action'] = NULL;
$arguments913['arguments'] = array (
);
$arguments913['controller'] = NULL;
$arguments913['package'] = NULL;
$arguments913['subpackage'] = NULL;
$arguments913['object'] = NULL;
$arguments913['section'] = '';
$arguments913['format'] = '';
$arguments913['additionalParams'] = array (
);
$arguments913['absolute'] = false;
$arguments913['addQueryString'] = false;
$arguments913['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments913['fieldNamePrefix'] = NULL;
$arguments913['actionUri'] = NULL;
$arguments913['objectName'] = NULL;
$arguments913['useParentRequest'] = false;
$arguments913['class'] = NULL;
$arguments913['dir'] = NULL;
$arguments913['id'] = NULL;
$arguments913['lang'] = NULL;
$arguments913['style'] = NULL;
$arguments913['title'] = NULL;
$arguments913['accesskey'] = NULL;
$arguments913['tabindex'] = NULL;
$arguments913['onclick'] = NULL;
$arguments913['action'] = 'delete';
$arguments913['method'] = 'post';
$arguments913['class'] = 'neos-inline';

$output886 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments913, $renderChildrenClosure914, $renderingContext);

$output886 .= '
                        </div>
                    </div>
                </div>
                <div class="neos-modal-backdrop neos-in"></div>
            </div>
        ';
return $output886;
};
$arguments884 = array();

$output883 .= '';

$output883 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure921 = function() use ($renderingContext, $self) {
$output922 = '';

$output922 .= '
            <p>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure924 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments923 = array();
$arguments923['id'] = NULL;
$arguments923['value'] = NULL;
$arguments923['arguments'] = array (
);
$arguments923['source'] = 'Main';
$arguments923['package'] = NULL;
$arguments923['quantity'] = NULL;
$arguments923['locale'] = NULL;
$arguments923['id'] = 'noAssetsFound';
$arguments923['package'] = 'Neos.Media.Browser';

$output922 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments923, $renderChildrenClosure924, $renderingContext)]);

$output922 .= '</p>
                ';
return $output922;
};
$arguments920 = array();
$arguments920['if'] = NULL;

$output883 .= '';

$output883 .= '
            ';
return $output883;
};
$arguments839 = array();
$arguments839['then'] = NULL;
$arguments839['else'] = NULL;
$arguments839['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array878 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure880 = function() use ($renderingContext, $self) {
$array881 = array (
);return $renderingContext->getVariableProvider()->getByPath('assetProxies', $array881);
};
$arguments879 = array();
$arguments879['subject'] = NULL;
$renderChildrenClosure880 = ($arguments879['subject'] !== null) ? function() use ($arguments879) { return $arguments879['subject']; } : $renderChildrenClosure880;$array878['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments879, $renderChildrenClosure880, $renderingContext);

$expression882 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments839['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression882(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array878)
					),
					$renderingContext
				);
$arguments839['__thenClosure'] = function() use ($renderingContext, $self) {
$output841 = '';

$output841 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure843 = function() use ($renderingContext, $self) {
$output847 = '';

$output847 .= '
            <div class="neos-media-content-help">
                <i class="fas fa-info-circle"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure849 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments848 = array();
$arguments848['id'] = NULL;
$arguments848['value'] = NULL;
$arguments848['arguments'] = array (
);
$arguments848['source'] = 'Main';
$arguments848['package'] = NULL;
$arguments848['quantity'] = NULL;
$arguments848['locale'] = NULL;
$arguments848['id'] = 'dragHelp';
$arguments848['package'] = 'Neos.Media.Browser';

$output847 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments848, $renderChildrenClosure849, $renderingContext)]);

$output847 .= '
            </div>
                    ';
return $output847;
};
$arguments842 = array();
$arguments842['then'] = NULL;
$arguments842['else'] = NULL;
$arguments842['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array844 = array();
$array844['0'] = '!';
$array845 = array (
);$array844['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array845);

$expression846 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments842['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression846(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array844)
					),
					$renderingContext
				);
$arguments842['__thenClosure'] = $renderChildrenClosure843;

$output841 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments842, $renderChildrenClosure843, $renderingContext);

$output841 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure851 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments850 = array();
$arguments850['section'] = NULL;
$arguments850['partial'] = NULL;
$arguments850['delegate'] = NULL;
$arguments850['renderable'] = NULL;
$arguments850['arguments'] = array (
);
$arguments850['optional'] = false;
$arguments850['default'] = NULL;
$arguments850['contentAs'] = NULL;
$output852 = '';
$array853 = array (
);
$output852 .= $renderingContext->getVariableProvider()->getByPath('view', $array853);

$output852 .= 'View';
$arguments850['partial'] = $output852;
// Rendering Array
$array854 = array();
$array855 = array (
);$array854['assetProxies'] = $renderingContext->getVariableProvider()->getByPath('assetProxies', $array855);
$array856 = array (
);$array854['activeAssetSource'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource', $array856);
$array857 = array (
);$array854['activeAssetSourceSupportsSorting'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSourceSupportsSorting', $array857);
$array858 = array (
);$array854['sortBy'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array858);
$array859 = array (
);$array854['sortDirection'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array859);
$arguments850['arguments'] = $array854;

$output841 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments850, $renderChildrenClosure851, $renderingContext);

$output841 .= '

            <div class="neos-hide" id="delete-asset-modal">
                <div class="neos-modal-centered">
                    <div class="neos-modal-content">
                        <div class="neos-modal-header">
                            <button type="button" class="neos-close neos-button" data-dismiss="modal"></button>
                            <div class="neos-header">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure861 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments860 = array();
$arguments860['id'] = NULL;
$arguments860['value'] = NULL;
$arguments860['arguments'] = array (
);
$arguments860['source'] = 'Main';
$arguments860['package'] = NULL;
$arguments860['quantity'] = NULL;
$arguments860['locale'] = NULL;
$arguments860['id'] = 'message.reallyDeleteAsset';
$arguments860['package'] = 'Neos.Media.Browser';

$output841 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments860, $renderChildrenClosure861, $renderingContext)]);

$output841 .= '</div>
                            <div>
                                <div class="neos-subheader">
                                    <p>
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure863 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments862 = array();
$arguments862['id'] = NULL;
$arguments862['value'] = NULL;
$arguments862['arguments'] = array (
);
$arguments862['source'] = 'Main';
$arguments862['package'] = NULL;
$arguments862['quantity'] = NULL;
$arguments862['locale'] = NULL;
$arguments862['id'] = 'message.willBeDeleted';
$arguments862['package'] = 'Neos.Media.Browser';

$output841 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments862, $renderChildrenClosure863, $renderingContext)]);

$output841 .= '<br />
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure865 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments864 = array();
$arguments864['id'] = NULL;
$arguments864['value'] = NULL;
$arguments864['arguments'] = array (
);
$arguments864['source'] = 'Main';
$arguments864['package'] = NULL;
$arguments864['quantity'] = NULL;
$arguments864['locale'] = NULL;
$arguments864['id'] = 'message.operationCannotBeUndone';
$arguments864['package'] = 'Neos.Media.Browser';

$output841 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments864, $renderChildrenClosure865, $renderingContext)]);

$output841 .= '
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="neos-modal-footer">
                            <a href="#" class="neos-button" data-dismiss="modal">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure867 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments866 = array();
$arguments866['id'] = NULL;
$arguments866['value'] = NULL;
$arguments866['arguments'] = array (
);
$arguments866['source'] = 'Main';
$arguments866['package'] = NULL;
$arguments866['quantity'] = NULL;
$arguments866['locale'] = NULL;
$arguments866['id'] = 'cancel';
$arguments866['package'] = 'Neos.Neos';

$output841 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments866, $renderChildrenClosure867, $renderingContext)]);

$output841 .= '</a>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure869 = function() use ($renderingContext, $self) {
$output870 = '';

$output870 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure872 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments871 = array();
$arguments871['additionalAttributes'] = NULL;
$arguments871['data'] = NULL;
$arguments871['name'] = NULL;
$arguments871['value'] = NULL;
$arguments871['property'] = NULL;
$arguments871['class'] = NULL;
$arguments871['dir'] = NULL;
$arguments871['id'] = NULL;
$arguments871['lang'] = NULL;
$arguments871['style'] = NULL;
$arguments871['title'] = NULL;
$arguments871['accesskey'] = NULL;
$arguments871['tabindex'] = NULL;
$arguments871['onclick'] = NULL;
$arguments871['name'] = 'asset';
$arguments871['id'] = 'modal-form-object';

$output870 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments871, $renderChildrenClosure872, $renderingContext);

$output870 .= '
                                <button type="submit" class="neos-button neos-button-mini neos-button-danger">
                                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure874 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments873 = array();
$arguments873['id'] = NULL;
$arguments873['value'] = NULL;
$arguments873['arguments'] = array (
);
$arguments873['source'] = 'Main';
$arguments873['package'] = NULL;
$arguments873['quantity'] = NULL;
$arguments873['locale'] = NULL;
$arguments873['id'] = 'message.confirmDelete';
$arguments873['package'] = 'Neos.Media.Browser';

$output870 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments873, $renderChildrenClosure874, $renderingContext)]);

$output870 .= '
                                </button>
                            ';
return $output870;
};
$arguments868 = array();
$arguments868['additionalAttributes'] = NULL;
$arguments868['data'] = NULL;
$arguments868['enctype'] = NULL;
$arguments868['method'] = NULL;
$arguments868['name'] = NULL;
$arguments868['onreset'] = NULL;
$arguments868['onsubmit'] = NULL;
$arguments868['action'] = NULL;
$arguments868['arguments'] = array (
);
$arguments868['controller'] = NULL;
$arguments868['package'] = NULL;
$arguments868['subpackage'] = NULL;
$arguments868['object'] = NULL;
$arguments868['section'] = '';
$arguments868['format'] = '';
$arguments868['additionalParams'] = array (
);
$arguments868['absolute'] = false;
$arguments868['addQueryString'] = false;
$arguments868['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments868['fieldNamePrefix'] = NULL;
$arguments868['actionUri'] = NULL;
$arguments868['objectName'] = NULL;
$arguments868['useParentRequest'] = false;
$arguments868['class'] = NULL;
$arguments868['dir'] = NULL;
$arguments868['id'] = NULL;
$arguments868['lang'] = NULL;
$arguments868['style'] = NULL;
$arguments868['title'] = NULL;
$arguments868['accesskey'] = NULL;
$arguments868['tabindex'] = NULL;
$arguments868['onclick'] = NULL;
$arguments868['action'] = 'delete';
$arguments868['method'] = 'post';
$arguments868['class'] = 'neos-inline';

$output841 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments868, $renderChildrenClosure869, $renderingContext);

$output841 .= '
                        </div>
                    </div>
                </div>
                <div class="neos-modal-backdrop neos-in"></div>
            </div>
        ';
return $output841;
};
$arguments839['__elseClosures'][] = function() use ($renderingContext, $self) {
$output875 = '';

$output875 .= '
            <p>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure877 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments876 = array();
$arguments876['id'] = NULL;
$arguments876['value'] = NULL;
$arguments876['arguments'] = array (
);
$arguments876['source'] = 'Main';
$arguments876['package'] = NULL;
$arguments876['quantity'] = NULL;
$arguments876['locale'] = NULL;
$arguments876['id'] = 'noAssetsFound';
$arguments876['package'] = 'Neos.Media.Browser';

$output875 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments876, $renderChildrenClosure877, $renderingContext)]);

$output875 .= '</p>
                ';
return $output875;
};

$output838 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments839, $renderChildrenClosure840, $renderingContext);

$output838 .= '
        ';
return $output838;
};
$arguments836 = array();
$arguments836['if'] = NULL;

$output829 .= '';

$output829 .= '
    ';
return $output829;
};
$arguments733 = array();
$arguments733['then'] = NULL;
$arguments733['else'] = NULL;
$arguments733['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array826 = array();
$array827 = array (
);$array826['0'] = $renderingContext->getVariableProvider()->getByPath('connectionError', $array827);

$expression828 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments733['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression828(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array826)
					),
					$renderingContext
				);
$arguments733['__thenClosure'] = function() use ($renderingContext, $self) {
$output735 = '';

$output735 .= '
            <h2>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure737 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments736 = array();
$arguments736['id'] = NULL;
$arguments736['value'] = NULL;
$arguments736['arguments'] = array (
);
$arguments736['source'] = 'Main';
$arguments736['package'] = NULL;
$arguments736['quantity'] = NULL;
$arguments736['locale'] = NULL;
$arguments736['id'] = 'connectionError';
$arguments736['package'] = 'Neos.Media.Browser';

$output735 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments736, $renderChildrenClosure737, $renderingContext)]);

$output735 .= '</h2>
            <p>';
$array738 = array (
);
$output735 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('connectionError.message', $array738)]);

$output735 .= '</p>
        ';
return $output735;
};
$arguments733['__elseClosures'][] = function() use ($renderingContext, $self) {
$output739 = '';

$output739 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure741 = function() use ($renderingContext, $self) {
$output784 = '';

$output784 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure786 = function() use ($renderingContext, $self) {
$output787 = '';

$output787 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure789 = function() use ($renderingContext, $self) {
$output793 = '';

$output793 .= '
            <div class="neos-media-content-help">
                <i class="fas fa-info-circle"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure795 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments794 = array();
$arguments794['id'] = NULL;
$arguments794['value'] = NULL;
$arguments794['arguments'] = array (
);
$arguments794['source'] = 'Main';
$arguments794['package'] = NULL;
$arguments794['quantity'] = NULL;
$arguments794['locale'] = NULL;
$arguments794['id'] = 'dragHelp';
$arguments794['package'] = 'Neos.Media.Browser';

$output793 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments794, $renderChildrenClosure795, $renderingContext)]);

$output793 .= '
            </div>
                    ';
return $output793;
};
$arguments788 = array();
$arguments788['then'] = NULL;
$arguments788['else'] = NULL;
$arguments788['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array790 = array();
$array790['0'] = '!';
$array791 = array (
);$array790['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array791);

$expression792 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments788['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression792(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array790)
					),
					$renderingContext
				);
$arguments788['__thenClosure'] = $renderChildrenClosure789;

$output787 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments788, $renderChildrenClosure789, $renderingContext);

$output787 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure797 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments796 = array();
$arguments796['section'] = NULL;
$arguments796['partial'] = NULL;
$arguments796['delegate'] = NULL;
$arguments796['renderable'] = NULL;
$arguments796['arguments'] = array (
);
$arguments796['optional'] = false;
$arguments796['default'] = NULL;
$arguments796['contentAs'] = NULL;
$output798 = '';
$array799 = array (
);
$output798 .= $renderingContext->getVariableProvider()->getByPath('view', $array799);

$output798 .= 'View';
$arguments796['partial'] = $output798;
// Rendering Array
$array800 = array();
$array801 = array (
);$array800['assetProxies'] = $renderingContext->getVariableProvider()->getByPath('assetProxies', $array801);
$array802 = array (
);$array800['activeAssetSource'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource', $array802);
$array803 = array (
);$array800['activeAssetSourceSupportsSorting'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSourceSupportsSorting', $array803);
$array804 = array (
);$array800['sortBy'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array804);
$array805 = array (
);$array800['sortDirection'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array805);
$arguments796['arguments'] = $array800;

$output787 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments796, $renderChildrenClosure797, $renderingContext);

$output787 .= '

            <div class="neos-hide" id="delete-asset-modal">
                <div class="neos-modal-centered">
                    <div class="neos-modal-content">
                        <div class="neos-modal-header">
                            <button type="button" class="neos-close neos-button" data-dismiss="modal"></button>
                            <div class="neos-header">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure807 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments806 = array();
$arguments806['id'] = NULL;
$arguments806['value'] = NULL;
$arguments806['arguments'] = array (
);
$arguments806['source'] = 'Main';
$arguments806['package'] = NULL;
$arguments806['quantity'] = NULL;
$arguments806['locale'] = NULL;
$arguments806['id'] = 'message.reallyDeleteAsset';
$arguments806['package'] = 'Neos.Media.Browser';

$output787 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments806, $renderChildrenClosure807, $renderingContext)]);

$output787 .= '</div>
                            <div>
                                <div class="neos-subheader">
                                    <p>
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure809 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments808 = array();
$arguments808['id'] = NULL;
$arguments808['value'] = NULL;
$arguments808['arguments'] = array (
);
$arguments808['source'] = 'Main';
$arguments808['package'] = NULL;
$arguments808['quantity'] = NULL;
$arguments808['locale'] = NULL;
$arguments808['id'] = 'message.willBeDeleted';
$arguments808['package'] = 'Neos.Media.Browser';

$output787 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments808, $renderChildrenClosure809, $renderingContext)]);

$output787 .= '<br />
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure811 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments810 = array();
$arguments810['id'] = NULL;
$arguments810['value'] = NULL;
$arguments810['arguments'] = array (
);
$arguments810['source'] = 'Main';
$arguments810['package'] = NULL;
$arguments810['quantity'] = NULL;
$arguments810['locale'] = NULL;
$arguments810['id'] = 'message.operationCannotBeUndone';
$arguments810['package'] = 'Neos.Media.Browser';

$output787 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments810, $renderChildrenClosure811, $renderingContext)]);

$output787 .= '
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="neos-modal-footer">
                            <a href="#" class="neos-button" data-dismiss="modal">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure813 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments812 = array();
$arguments812['id'] = NULL;
$arguments812['value'] = NULL;
$arguments812['arguments'] = array (
);
$arguments812['source'] = 'Main';
$arguments812['package'] = NULL;
$arguments812['quantity'] = NULL;
$arguments812['locale'] = NULL;
$arguments812['id'] = 'cancel';
$arguments812['package'] = 'Neos.Neos';

$output787 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments812, $renderChildrenClosure813, $renderingContext)]);

$output787 .= '</a>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure815 = function() use ($renderingContext, $self) {
$output816 = '';

$output816 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure818 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments817 = array();
$arguments817['additionalAttributes'] = NULL;
$arguments817['data'] = NULL;
$arguments817['name'] = NULL;
$arguments817['value'] = NULL;
$arguments817['property'] = NULL;
$arguments817['class'] = NULL;
$arguments817['dir'] = NULL;
$arguments817['id'] = NULL;
$arguments817['lang'] = NULL;
$arguments817['style'] = NULL;
$arguments817['title'] = NULL;
$arguments817['accesskey'] = NULL;
$arguments817['tabindex'] = NULL;
$arguments817['onclick'] = NULL;
$arguments817['name'] = 'asset';
$arguments817['id'] = 'modal-form-object';

$output816 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments817, $renderChildrenClosure818, $renderingContext);

$output816 .= '
                                <button type="submit" class="neos-button neos-button-mini neos-button-danger">
                                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure820 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments819 = array();
$arguments819['id'] = NULL;
$arguments819['value'] = NULL;
$arguments819['arguments'] = array (
);
$arguments819['source'] = 'Main';
$arguments819['package'] = NULL;
$arguments819['quantity'] = NULL;
$arguments819['locale'] = NULL;
$arguments819['id'] = 'message.confirmDelete';
$arguments819['package'] = 'Neos.Media.Browser';

$output816 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments819, $renderChildrenClosure820, $renderingContext)]);

$output816 .= '
                                </button>
                            ';
return $output816;
};
$arguments814 = array();
$arguments814['additionalAttributes'] = NULL;
$arguments814['data'] = NULL;
$arguments814['enctype'] = NULL;
$arguments814['method'] = NULL;
$arguments814['name'] = NULL;
$arguments814['onreset'] = NULL;
$arguments814['onsubmit'] = NULL;
$arguments814['action'] = NULL;
$arguments814['arguments'] = array (
);
$arguments814['controller'] = NULL;
$arguments814['package'] = NULL;
$arguments814['subpackage'] = NULL;
$arguments814['object'] = NULL;
$arguments814['section'] = '';
$arguments814['format'] = '';
$arguments814['additionalParams'] = array (
);
$arguments814['absolute'] = false;
$arguments814['addQueryString'] = false;
$arguments814['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments814['fieldNamePrefix'] = NULL;
$arguments814['actionUri'] = NULL;
$arguments814['objectName'] = NULL;
$arguments814['useParentRequest'] = false;
$arguments814['class'] = NULL;
$arguments814['dir'] = NULL;
$arguments814['id'] = NULL;
$arguments814['lang'] = NULL;
$arguments814['style'] = NULL;
$arguments814['title'] = NULL;
$arguments814['accesskey'] = NULL;
$arguments814['tabindex'] = NULL;
$arguments814['onclick'] = NULL;
$arguments814['action'] = 'delete';
$arguments814['method'] = 'post';
$arguments814['class'] = 'neos-inline';

$output787 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments814, $renderChildrenClosure815, $renderingContext);

$output787 .= '
                        </div>
                    </div>
                </div>
                <div class="neos-modal-backdrop neos-in"></div>
            </div>
        ';
return $output787;
};
$arguments785 = array();

$output784 .= '';

$output784 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure822 = function() use ($renderingContext, $self) {
$output823 = '';

$output823 .= '
            <p>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure825 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments824 = array();
$arguments824['id'] = NULL;
$arguments824['value'] = NULL;
$arguments824['arguments'] = array (
);
$arguments824['source'] = 'Main';
$arguments824['package'] = NULL;
$arguments824['quantity'] = NULL;
$arguments824['locale'] = NULL;
$arguments824['id'] = 'noAssetsFound';
$arguments824['package'] = 'Neos.Media.Browser';

$output823 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments824, $renderChildrenClosure825, $renderingContext)]);

$output823 .= '</p>
                ';
return $output823;
};
$arguments821 = array();
$arguments821['if'] = NULL;

$output784 .= '';

$output784 .= '
            ';
return $output784;
};
$arguments740 = array();
$arguments740['then'] = NULL;
$arguments740['else'] = NULL;
$arguments740['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array779 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure781 = function() use ($renderingContext, $self) {
$array782 = array (
);return $renderingContext->getVariableProvider()->getByPath('assetProxies', $array782);
};
$arguments780 = array();
$arguments780['subject'] = NULL;
$renderChildrenClosure781 = ($arguments780['subject'] !== null) ? function() use ($arguments780) { return $arguments780['subject']; } : $renderChildrenClosure781;$array779['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments780, $renderChildrenClosure781, $renderingContext);

$expression783 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments740['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression783(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array779)
					),
					$renderingContext
				);
$arguments740['__thenClosure'] = function() use ($renderingContext, $self) {
$output742 = '';

$output742 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure744 = function() use ($renderingContext, $self) {
$output748 = '';

$output748 .= '
            <div class="neos-media-content-help">
                <i class="fas fa-info-circle"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure750 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments749 = array();
$arguments749['id'] = NULL;
$arguments749['value'] = NULL;
$arguments749['arguments'] = array (
);
$arguments749['source'] = 'Main';
$arguments749['package'] = NULL;
$arguments749['quantity'] = NULL;
$arguments749['locale'] = NULL;
$arguments749['id'] = 'dragHelp';
$arguments749['package'] = 'Neos.Media.Browser';

$output748 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments749, $renderChildrenClosure750, $renderingContext)]);

$output748 .= '
            </div>
                    ';
return $output748;
};
$arguments743 = array();
$arguments743['then'] = NULL;
$arguments743['else'] = NULL;
$arguments743['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array745 = array();
$array745['0'] = '!';
$array746 = array (
);$array745['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array746);

$expression747 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments743['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression747(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array745)
					),
					$renderingContext
				);
$arguments743['__thenClosure'] = $renderChildrenClosure744;

$output742 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments743, $renderChildrenClosure744, $renderingContext);

$output742 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure752 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments751 = array();
$arguments751['section'] = NULL;
$arguments751['partial'] = NULL;
$arguments751['delegate'] = NULL;
$arguments751['renderable'] = NULL;
$arguments751['arguments'] = array (
);
$arguments751['optional'] = false;
$arguments751['default'] = NULL;
$arguments751['contentAs'] = NULL;
$output753 = '';
$array754 = array (
);
$output753 .= $renderingContext->getVariableProvider()->getByPath('view', $array754);

$output753 .= 'View';
$arguments751['partial'] = $output753;
// Rendering Array
$array755 = array();
$array756 = array (
);$array755['assetProxies'] = $renderingContext->getVariableProvider()->getByPath('assetProxies', $array756);
$array757 = array (
);$array755['activeAssetSource'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource', $array757);
$array758 = array (
);$array755['activeAssetSourceSupportsSorting'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSourceSupportsSorting', $array758);
$array759 = array (
);$array755['sortBy'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array759);
$array760 = array (
);$array755['sortDirection'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array760);
$arguments751['arguments'] = $array755;

$output742 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments751, $renderChildrenClosure752, $renderingContext);

$output742 .= '

            <div class="neos-hide" id="delete-asset-modal">
                <div class="neos-modal-centered">
                    <div class="neos-modal-content">
                        <div class="neos-modal-header">
                            <button type="button" class="neos-close neos-button" data-dismiss="modal"></button>
                            <div class="neos-header">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure762 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments761 = array();
$arguments761['id'] = NULL;
$arguments761['value'] = NULL;
$arguments761['arguments'] = array (
);
$arguments761['source'] = 'Main';
$arguments761['package'] = NULL;
$arguments761['quantity'] = NULL;
$arguments761['locale'] = NULL;
$arguments761['id'] = 'message.reallyDeleteAsset';
$arguments761['package'] = 'Neos.Media.Browser';

$output742 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments761, $renderChildrenClosure762, $renderingContext)]);

$output742 .= '</div>
                            <div>
                                <div class="neos-subheader">
                                    <p>
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure764 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments763 = array();
$arguments763['id'] = NULL;
$arguments763['value'] = NULL;
$arguments763['arguments'] = array (
);
$arguments763['source'] = 'Main';
$arguments763['package'] = NULL;
$arguments763['quantity'] = NULL;
$arguments763['locale'] = NULL;
$arguments763['id'] = 'message.willBeDeleted';
$arguments763['package'] = 'Neos.Media.Browser';

$output742 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments763, $renderChildrenClosure764, $renderingContext)]);

$output742 .= '<br />
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure766 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments765 = array();
$arguments765['id'] = NULL;
$arguments765['value'] = NULL;
$arguments765['arguments'] = array (
);
$arguments765['source'] = 'Main';
$arguments765['package'] = NULL;
$arguments765['quantity'] = NULL;
$arguments765['locale'] = NULL;
$arguments765['id'] = 'message.operationCannotBeUndone';
$arguments765['package'] = 'Neos.Media.Browser';

$output742 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments765, $renderChildrenClosure766, $renderingContext)]);

$output742 .= '
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="neos-modal-footer">
                            <a href="#" class="neos-button" data-dismiss="modal">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure768 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments767 = array();
$arguments767['id'] = NULL;
$arguments767['value'] = NULL;
$arguments767['arguments'] = array (
);
$arguments767['source'] = 'Main';
$arguments767['package'] = NULL;
$arguments767['quantity'] = NULL;
$arguments767['locale'] = NULL;
$arguments767['id'] = 'cancel';
$arguments767['package'] = 'Neos.Neos';

$output742 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments767, $renderChildrenClosure768, $renderingContext)]);

$output742 .= '</a>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure770 = function() use ($renderingContext, $self) {
$output771 = '';

$output771 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure773 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments772 = array();
$arguments772['additionalAttributes'] = NULL;
$arguments772['data'] = NULL;
$arguments772['name'] = NULL;
$arguments772['value'] = NULL;
$arguments772['property'] = NULL;
$arguments772['class'] = NULL;
$arguments772['dir'] = NULL;
$arguments772['id'] = NULL;
$arguments772['lang'] = NULL;
$arguments772['style'] = NULL;
$arguments772['title'] = NULL;
$arguments772['accesskey'] = NULL;
$arguments772['tabindex'] = NULL;
$arguments772['onclick'] = NULL;
$arguments772['name'] = 'asset';
$arguments772['id'] = 'modal-form-object';

$output771 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments772, $renderChildrenClosure773, $renderingContext);

$output771 .= '
                                <button type="submit" class="neos-button neos-button-mini neos-button-danger">
                                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure775 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments774 = array();
$arguments774['id'] = NULL;
$arguments774['value'] = NULL;
$arguments774['arguments'] = array (
);
$arguments774['source'] = 'Main';
$arguments774['package'] = NULL;
$arguments774['quantity'] = NULL;
$arguments774['locale'] = NULL;
$arguments774['id'] = 'message.confirmDelete';
$arguments774['package'] = 'Neos.Media.Browser';

$output771 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments774, $renderChildrenClosure775, $renderingContext)]);

$output771 .= '
                                </button>
                            ';
return $output771;
};
$arguments769 = array();
$arguments769['additionalAttributes'] = NULL;
$arguments769['data'] = NULL;
$arguments769['enctype'] = NULL;
$arguments769['method'] = NULL;
$arguments769['name'] = NULL;
$arguments769['onreset'] = NULL;
$arguments769['onsubmit'] = NULL;
$arguments769['action'] = NULL;
$arguments769['arguments'] = array (
);
$arguments769['controller'] = NULL;
$arguments769['package'] = NULL;
$arguments769['subpackage'] = NULL;
$arguments769['object'] = NULL;
$arguments769['section'] = '';
$arguments769['format'] = '';
$arguments769['additionalParams'] = array (
);
$arguments769['absolute'] = false;
$arguments769['addQueryString'] = false;
$arguments769['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments769['fieldNamePrefix'] = NULL;
$arguments769['actionUri'] = NULL;
$arguments769['objectName'] = NULL;
$arguments769['useParentRequest'] = false;
$arguments769['class'] = NULL;
$arguments769['dir'] = NULL;
$arguments769['id'] = NULL;
$arguments769['lang'] = NULL;
$arguments769['style'] = NULL;
$arguments769['title'] = NULL;
$arguments769['accesskey'] = NULL;
$arguments769['tabindex'] = NULL;
$arguments769['onclick'] = NULL;
$arguments769['action'] = 'delete';
$arguments769['method'] = 'post';
$arguments769['class'] = 'neos-inline';

$output742 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments769, $renderChildrenClosure770, $renderingContext);

$output742 .= '
                        </div>
                    </div>
                </div>
                <div class="neos-modal-backdrop neos-in"></div>
            </div>
        ';
return $output742;
};
$arguments740['__elseClosures'][] = function() use ($renderingContext, $self) {
$output776 = '';

$output776 .= '
            <p>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure778 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments777 = array();
$arguments777['id'] = NULL;
$arguments777['value'] = NULL;
$arguments777['arguments'] = array (
);
$arguments777['source'] = 'Main';
$arguments777['package'] = NULL;
$arguments777['quantity'] = NULL;
$arguments777['locale'] = NULL;
$arguments777['id'] = 'noAssetsFound';
$arguments777['package'] = 'Neos.Media.Browser';

$output776 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments777, $renderChildrenClosure778, $renderingContext)]);

$output776 .= '</p>
                ';
return $output776;
};

$output739 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments740, $renderChildrenClosure741, $renderingContext);

$output739 .= '
        ';
return $output739;
};

$output711 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments733, $renderChildrenClosure734, $renderingContext);

$output711 .= '
';

return $output711;
}
/**
 * section Scripts
 */
public function section_381e3298b2b8f6caeb2208b57d805ada38402f0b(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output925 = '';

$output925 .= '
    <script type="text/javascript" src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure927 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments926 = array();
$arguments926['path'] = NULL;
$arguments926['package'] = NULL;
$arguments926['resource'] = NULL;
$arguments926['localize'] = true;
$arguments926['package'] = 'Neos.Media.Browser';
$arguments926['path'] = 'Libraries/jquery-ui/js/jquery-ui-1.10.3.custom.js';

$output925 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments926, $renderChildrenClosure927, $renderingContext)]);

$output925 .= '"></script>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure929 = function() use ($renderingContext, $self) {
$output933 = '';

$output933 .= '
    <script type="text/javascript">
        var uploadUrl = \'';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure935 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments934 = array();
$arguments934['action'] = NULL;
$arguments934['arguments'] = array (
);
$arguments934['controller'] = NULL;
$arguments934['package'] = NULL;
$arguments934['subpackage'] = NULL;
$arguments934['section'] = '';
$arguments934['format'] = '';
$arguments934['additionalParams'] = array (
);
$arguments934['absolute'] = false;
$arguments934['addQueryString'] = false;
$arguments934['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments934['useParentRequest'] = false;
$arguments934['useMainRequest'] = false;
$arguments934['action'] = 'upload';
// Rendering Array
$array936 = array();
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Security\CsrfTokenViewHelper
$renderChildrenClosure938 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments937 = array();
$array936['__csrfToken'] = $renderingContext->getObjectManager()->get(\Neos\Flow\Security\Context::class)->getCsrfProtectionToken();
$arguments934['additionalParams'] = $array936;
// Rendering Boolean node
// Rendering Array
$array939 = array();
$array939['0'] = 'true';

$expression940 = function($context) {return TRUE;};
$arguments934['absolute'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression940(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array939)
					),
					$renderingContext
				);

$output933 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments934, $renderChildrenClosure935, $renderingContext)]);

$output933 .= '\';
        var maximumFileUploadSize = ';
$array941 = array (
);
$output933 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('maximumFileUploadSize', $array941)]);

$output933 .= ';

        if (window.parent !== window && window.parent.NeosMediaBrowserCallbacks && window.parent.NeosMediaBrowserCallbacks.refreshThumbnail) {
            window.parent.NeosMediaBrowserCallbacks.refreshThumbnail();
        }
    </script>
    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure943 = function() use ($renderingContext, $self) {
$output944 = '';

$output944 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure946 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments945 = array();
$arguments945['additionalAttributes'] = NULL;
$arguments945['data'] = NULL;
$arguments945['name'] = NULL;
$arguments945['value'] = NULL;
$arguments945['property'] = NULL;
$arguments945['class'] = NULL;
$arguments945['dir'] = NULL;
$arguments945['id'] = NULL;
$arguments945['lang'] = NULL;
$arguments945['style'] = NULL;
$arguments945['title'] = NULL;
$arguments945['accesskey'] = NULL;
$arguments945['tabindex'] = NULL;
$arguments945['onclick'] = NULL;
$arguments945['name'] = 'asset[__identity]';
$arguments945['id'] = 'tag-asset-form-asset';

$output944 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments945, $renderChildrenClosure946, $renderingContext);

$output944 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure948 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments947 = array();
$arguments947['additionalAttributes'] = NULL;
$arguments947['data'] = NULL;
$arguments947['name'] = NULL;
$arguments947['value'] = NULL;
$arguments947['property'] = NULL;
$arguments947['class'] = NULL;
$arguments947['dir'] = NULL;
$arguments947['id'] = NULL;
$arguments947['lang'] = NULL;
$arguments947['style'] = NULL;
$arguments947['title'] = NULL;
$arguments947['accesskey'] = NULL;
$arguments947['tabindex'] = NULL;
$arguments947['onclick'] = NULL;
$arguments947['name'] = 'tag[__identity]';
$arguments947['id'] = 'tag-asset-form-tag';

$output944 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments947, $renderChildrenClosure948, $renderingContext);

$output944 .= '
    ';
return $output944;
};
$arguments942 = array();
$arguments942['additionalAttributes'] = NULL;
$arguments942['data'] = NULL;
$arguments942['enctype'] = NULL;
$arguments942['method'] = NULL;
$arguments942['name'] = NULL;
$arguments942['onreset'] = NULL;
$arguments942['onsubmit'] = NULL;
$arguments942['action'] = NULL;
$arguments942['arguments'] = array (
);
$arguments942['controller'] = NULL;
$arguments942['package'] = NULL;
$arguments942['subpackage'] = NULL;
$arguments942['object'] = NULL;
$arguments942['section'] = '';
$arguments942['format'] = '';
$arguments942['additionalParams'] = array (
);
$arguments942['absolute'] = false;
$arguments942['addQueryString'] = false;
$arguments942['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments942['fieldNamePrefix'] = NULL;
$arguments942['actionUri'] = NULL;
$arguments942['objectName'] = NULL;
$arguments942['useParentRequest'] = false;
$arguments942['class'] = NULL;
$arguments942['dir'] = NULL;
$arguments942['id'] = NULL;
$arguments942['lang'] = NULL;
$arguments942['style'] = NULL;
$arguments942['title'] = NULL;
$arguments942['accesskey'] = NULL;
$arguments942['tabindex'] = NULL;
$arguments942['onclick'] = NULL;
$arguments942['action'] = 'tagAsset';
$arguments942['id'] = 'tag-asset-form';
$arguments942['format'] = 'json';

$output933 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments942, $renderChildrenClosure943, $renderingContext);

$output933 .= '
    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure950 = function() use ($renderingContext, $self) {
$output951 = '';

$output951 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure953 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments952 = array();
$arguments952['additionalAttributes'] = NULL;
$arguments952['data'] = NULL;
$arguments952['name'] = NULL;
$arguments952['value'] = NULL;
$arguments952['property'] = NULL;
$arguments952['class'] = NULL;
$arguments952['dir'] = NULL;
$arguments952['id'] = NULL;
$arguments952['lang'] = NULL;
$arguments952['style'] = NULL;
$arguments952['title'] = NULL;
$arguments952['accesskey'] = NULL;
$arguments952['tabindex'] = NULL;
$arguments952['onclick'] = NULL;
$arguments952['name'] = 'asset[__identity]';
$arguments952['id'] = 'link-asset-to-assetcollection-form-asset';

$output951 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments952, $renderChildrenClosure953, $renderingContext);

$output951 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure955 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments954 = array();
$arguments954['additionalAttributes'] = NULL;
$arguments954['data'] = NULL;
$arguments954['name'] = NULL;
$arguments954['value'] = NULL;
$arguments954['property'] = NULL;
$arguments954['class'] = NULL;
$arguments954['dir'] = NULL;
$arguments954['id'] = NULL;
$arguments954['lang'] = NULL;
$arguments954['style'] = NULL;
$arguments954['title'] = NULL;
$arguments954['accesskey'] = NULL;
$arguments954['tabindex'] = NULL;
$arguments954['onclick'] = NULL;
$arguments954['name'] = 'assetCollection[__identity]';
$arguments954['id'] = 'link-asset-to-assetcollection-form-assetcollection';

$output951 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments954, $renderChildrenClosure955, $renderingContext);

$output951 .= '
    ';
return $output951;
};
$arguments949 = array();
$arguments949['additionalAttributes'] = NULL;
$arguments949['data'] = NULL;
$arguments949['enctype'] = NULL;
$arguments949['method'] = NULL;
$arguments949['name'] = NULL;
$arguments949['onreset'] = NULL;
$arguments949['onsubmit'] = NULL;
$arguments949['action'] = NULL;
$arguments949['arguments'] = array (
);
$arguments949['controller'] = NULL;
$arguments949['package'] = NULL;
$arguments949['subpackage'] = NULL;
$arguments949['object'] = NULL;
$arguments949['section'] = '';
$arguments949['format'] = '';
$arguments949['additionalParams'] = array (
);
$arguments949['absolute'] = false;
$arguments949['addQueryString'] = false;
$arguments949['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments949['fieldNamePrefix'] = NULL;
$arguments949['actionUri'] = NULL;
$arguments949['objectName'] = NULL;
$arguments949['useParentRequest'] = false;
$arguments949['class'] = NULL;
$arguments949['dir'] = NULL;
$arguments949['id'] = NULL;
$arguments949['lang'] = NULL;
$arguments949['style'] = NULL;
$arguments949['title'] = NULL;
$arguments949['accesskey'] = NULL;
$arguments949['tabindex'] = NULL;
$arguments949['onclick'] = NULL;
$arguments949['action'] = 'addAssetToCollection';
$arguments949['id'] = 'link-asset-to-assetcollection-form';
$arguments949['format'] = 'json';

$output933 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments949, $renderChildrenClosure950, $renderingContext);

$output933 .= '
    <script type="text/javascript" src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure957 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments956 = array();
$arguments956['path'] = NULL;
$arguments956['package'] = NULL;
$arguments956['resource'] = NULL;
$arguments956['localize'] = true;
$arguments956['package'] = 'Neos.Media.Browser';
$arguments956['path'] = 'Libraries/plupload/plupload.full.js';

$output933 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments956, $renderChildrenClosure957, $renderingContext)]);

$output933 .= '"></script>
    <script type="text/javascript" src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure959 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments958 = array();
$arguments958['path'] = NULL;
$arguments958['package'] = NULL;
$arguments958['resource'] = NULL;
$arguments958['localize'] = true;
$arguments958['package'] = 'Neos.Media.Browser';
$arguments958['path'] = 'JavaScript/upload.js';

$output933 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments958, $renderChildrenClosure959, $renderingContext)]);

$output933 .= '"></script>
    <script type="text/javascript" src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure961 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments960 = array();
$arguments960['path'] = NULL;
$arguments960['package'] = NULL;
$arguments960['resource'] = NULL;
$arguments960['localize'] = true;
$arguments960['package'] = 'Neos.Media.Browser';
$arguments960['path'] = 'JavaScript/collections-and-tagging.js';

$output933 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments960, $renderChildrenClosure961, $renderingContext)]);

$output933 .= '"></script>
    ';
return $output933;
};
$arguments928 = array();
$arguments928['then'] = NULL;
$arguments928['else'] = NULL;
$arguments928['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array930 = array();
$array930['0'] = '!';
$array931 = array (
);$array930['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array931);

$expression932 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments928['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression932(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array930)
					),
					$renderingContext
				);
$arguments928['__thenClosure'] = $renderChildrenClosure929;

$output925 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments928, $renderChildrenClosure929, $renderingContext);

$output925 .= '
    <script type="text/javascript" src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure963 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments962 = array();
$arguments962['path'] = NULL;
$arguments962['package'] = NULL;
$arguments962['resource'] = NULL;
$arguments962['localize'] = true;
$arguments962['package'] = 'Neos.Media.Browser';
$arguments962['path'] = 'JavaScript/select.js';

$output925 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments962, $renderChildrenClosure963, $renderingContext)]);

$output925 .= '"></script>
';

return $output925;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output964 = '';

$output964 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure966 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments965 = array();
$arguments965['name'] = NULL;
$arguments965['name'] = 'Default';

$output964 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output964 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure968 = function() use ($renderingContext, $self) {
return 'Index view';
};
$arguments967 = array();
$arguments967['name'] = NULL;
$arguments967['name'] = 'Title';

$output964 .= NULL;

$output964 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure970 = function() use ($renderingContext, $self) {
$output971 = '';

$output971 .= '
    <div class="neos-file-options">
        <span class="count">
            ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure973 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments972 = array();
$arguments972['id'] = NULL;
$arguments972['value'] = NULL;
$arguments972['arguments'] = array (
);
$arguments972['source'] = 'Main';
$arguments972['package'] = NULL;
$arguments972['quantity'] = NULL;
$arguments972['locale'] = NULL;
$arguments972['id'] = 'search.itemCount';
// Rendering Array
$array974 = array();
$array975 = array (
);$array974['0'] = $renderingContext->getVariableProvider()->getByPath('searchResultCount', $array975);
$arguments972['arguments'] = $array974;
$arguments972['package'] = 'Neos.Media.Browser';

$output971 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments972, $renderChildrenClosure973, $renderingContext)]);

$output971 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure977 = function() use ($renderingContext, $self) {
$output981 = '';

$output981 .= ' ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure983 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments982 = array();
$arguments982['id'] = NULL;
$arguments982['value'] = NULL;
$arguments982['arguments'] = array (
);
$arguments982['source'] = 'Main';
$arguments982['package'] = NULL;
$arguments982['quantity'] = NULL;
$arguments982['locale'] = NULL;
$arguments982['id'] = 'search.foundMatches';
// Rendering Array
$array984 = array();
$array985 = array (
);$array984['0'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array985);
$arguments982['arguments'] = $array984;
$arguments982['package'] = 'Neos.Media.Browser';

$output981 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments982, $renderChildrenClosure983, $renderingContext)]);
return $output981;
};
$arguments976 = array();
$arguments976['then'] = NULL;
$arguments976['else'] = NULL;
$arguments976['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array978 = array();
$array979 = array (
);$array978['0'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array979);

$expression980 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments976['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression980(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array978)
					),
					$renderingContext
				);
$arguments976['__thenClosure'] = $renderChildrenClosure977;

$output971 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments976, $renderChildrenClosure977, $renderingContext);

$output971 .= '
        </span>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure987 = function() use ($renderingContext, $self) {
$output991 = '';

$output991 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure993 = function() use ($renderingContext, $self) {
$output994 = '';

$output994 .= '<i class="fas fa-upload"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure996 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments995 = array();
$arguments995['id'] = NULL;
$arguments995['value'] = NULL;
$arguments995['arguments'] = array (
);
$arguments995['source'] = 'Main';
$arguments995['package'] = NULL;
$arguments995['quantity'] = NULL;
$arguments995['locale'] = NULL;
$arguments995['id'] = 'upload';
$arguments995['package'] = 'Neos.Media.Browser';

$output994 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments995, $renderChildrenClosure996, $renderingContext)]);
return $output994;
};
$arguments992 = array();
$arguments992['additionalAttributes'] = NULL;
$arguments992['data'] = NULL;
$arguments992['class'] = NULL;
$arguments992['dir'] = NULL;
$arguments992['id'] = NULL;
$arguments992['lang'] = NULL;
$arguments992['style'] = NULL;
$arguments992['title'] = NULL;
$arguments992['accesskey'] = NULL;
$arguments992['tabindex'] = NULL;
$arguments992['onclick'] = NULL;
$arguments992['name'] = NULL;
$arguments992['rel'] = NULL;
$arguments992['rev'] = NULL;
$arguments992['target'] = NULL;
$arguments992['action'] = NULL;
$arguments992['arguments'] = array (
);
$arguments992['controller'] = NULL;
$arguments992['package'] = NULL;
$arguments992['subpackage'] = NULL;
$arguments992['section'] = '';
$arguments992['format'] = '';
$arguments992['additionalParams'] = array (
);
$arguments992['addQueryString'] = false;
$arguments992['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments992['useParentRequest'] = false;
$arguments992['absolute'] = true;
$arguments992['useMainRequest'] = false;
$arguments992['action'] = 'new';

$output991 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments992, $renderChildrenClosure993, $renderingContext);

$output991 .= '
        ';
return $output991;
};
$arguments986 = array();
$arguments986['then'] = NULL;
$arguments986['else'] = NULL;
$arguments986['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array988 = array();
$array988['0'] = '!';
$array989 = array (
);$array988['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array989);

$expression990 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments986['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression990(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array988)
					),
					$renderingContext
				);
$arguments986['__thenClosure'] = $renderChildrenClosure987;

$output971 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments986, $renderChildrenClosure987, $renderingContext);

$output971 .= '
    </div>
    <div class="neos-view-options">
        <div class="neos-dropdown" id="neos-filter-menu">
            <span title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure998 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments997 = array();
$arguments997['id'] = NULL;
$arguments997['value'] = NULL;
$arguments997['arguments'] = array (
);
$arguments997['source'] = 'Main';
$arguments997['package'] = NULL;
$arguments997['quantity'] = NULL;
$arguments997['locale'] = NULL;
$arguments997['id'] = 'filterOptions';
$arguments997['package'] = 'Neos.Media.Browser';

$output971 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments997, $renderChildrenClosure998, $renderingContext)]);

$output971 .= '" data-neos-toggle="tooltip">
                <a class="dropdown-toggle';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1000 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments999 = array();
$arguments999['then'] = NULL;
$arguments999['else'] = NULL;
$arguments999['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1001 = array();
$array1002 = array (
);$array1001['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('filter', $array1002)]);
$array1001['1'] = ' != \'All\'';

$expression1003 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 'All');};
$arguments999['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1003(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1001)
					),
					$renderingContext
				);
$arguments999['then'] = ' neos-active';

$output971 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments999, $renderChildrenClosure1000, $renderingContext);

$output971 .= '" href="#" data-neos-toggle="dropdown" data-target="#neos-filter-menu">
                    <i class="fas fa-filter"></i>
                </a>
            </span>
            <ul class="neos-dropdown-menu neos-pull-right" role="menu">
                <li>
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1005 = function() use ($renderingContext, $self) {
$output1017 = '';

$output1017 .= '<i class="fas fa-filter"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1019 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1018 = array();
$arguments1018['id'] = NULL;
$arguments1018['value'] = NULL;
$arguments1018['arguments'] = array (
);
$arguments1018['source'] = 'Main';
$arguments1018['package'] = NULL;
$arguments1018['quantity'] = NULL;
$arguments1018['locale'] = NULL;
$arguments1018['id'] = 'filter.all';
$arguments1018['package'] = 'Neos.Media.Browser';

$output1017 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1018, $renderChildrenClosure1019, $renderingContext)]);
return $output1017;
};
$arguments1004 = array();
$arguments1004['additionalAttributes'] = NULL;
$arguments1004['data'] = NULL;
$arguments1004['class'] = NULL;
$arguments1004['dir'] = NULL;
$arguments1004['id'] = NULL;
$arguments1004['lang'] = NULL;
$arguments1004['style'] = NULL;
$arguments1004['title'] = NULL;
$arguments1004['accesskey'] = NULL;
$arguments1004['tabindex'] = NULL;
$arguments1004['onclick'] = NULL;
$arguments1004['name'] = NULL;
$arguments1004['rel'] = NULL;
$arguments1004['rev'] = NULL;
$arguments1004['target'] = NULL;
$arguments1004['action'] = NULL;
$arguments1004['arguments'] = array (
);
$arguments1004['controller'] = NULL;
$arguments1004['package'] = NULL;
$arguments1004['subpackage'] = NULL;
$arguments1004['section'] = '';
$arguments1004['format'] = '';
$arguments1004['additionalParams'] = array (
);
$arguments1004['addQueryString'] = false;
$arguments1004['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1004['useParentRequest'] = false;
$arguments1004['absolute'] = true;
$arguments1004['useMainRequest'] = false;
$arguments1004['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1007 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1006 = array();
$arguments1006['id'] = NULL;
$arguments1006['value'] = NULL;
$arguments1006['arguments'] = array (
);
$arguments1006['source'] = 'Main';
$arguments1006['package'] = NULL;
$arguments1006['quantity'] = NULL;
$arguments1006['locale'] = NULL;
$arguments1006['id'] = 'filter.title.all';
$arguments1006['package'] = 'Neos.Media.Browser';
$arguments1004['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1006, $renderChildrenClosure1007, $renderingContext);
// Rendering Array
$array1008 = array();
$array1008['neos-toggle'] = 'tooltip';
$array1008['placement'] = 'left';
$arguments1004['data'] = $array1008;
// Rendering Array
$array1009 = array();
$array1009['filter'] = 'All';
$arguments1004['arguments'] = $array1009;
// Rendering Boolean node
// Rendering Array
$array1010 = array();
$array1010['0'] = 'TRUE';

$expression1011 = function($context) {return TRUE;};
$arguments1004['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1011(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1010)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1013 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1012 = array();
$arguments1012['then'] = NULL;
$arguments1012['else'] = NULL;
$arguments1012['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1014 = array();
$array1015 = array (
);$array1014['0'] = $renderingContext->getVariableProvider()->getByPath('filter', $array1015);
$array1014['1'] = ' === \'All\'';

$expression1016 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'All');};
$arguments1012['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1016(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1014)
					),
					$renderingContext
				);
$arguments1012['then'] = 'neos-active';
$arguments1004['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1012, $renderChildrenClosure1013, $renderingContext);

$output971 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1004, $renderChildrenClosure1005, $renderingContext);

$output971 .= '
                </li>
                <li>
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1021 = function() use ($renderingContext, $self) {
$output1033 = '';

$output1033 .= '<i class="fas fa-image"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1035 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1034 = array();
$arguments1034['id'] = NULL;
$arguments1034['value'] = NULL;
$arguments1034['arguments'] = array (
);
$arguments1034['source'] = 'Main';
$arguments1034['package'] = NULL;
$arguments1034['quantity'] = NULL;
$arguments1034['locale'] = NULL;
$arguments1034['id'] = 'filter.images';
$arguments1034['package'] = 'Neos.Media.Browser';

$output1033 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1034, $renderChildrenClosure1035, $renderingContext)]);
return $output1033;
};
$arguments1020 = array();
$arguments1020['additionalAttributes'] = NULL;
$arguments1020['data'] = NULL;
$arguments1020['class'] = NULL;
$arguments1020['dir'] = NULL;
$arguments1020['id'] = NULL;
$arguments1020['lang'] = NULL;
$arguments1020['style'] = NULL;
$arguments1020['title'] = NULL;
$arguments1020['accesskey'] = NULL;
$arguments1020['tabindex'] = NULL;
$arguments1020['onclick'] = NULL;
$arguments1020['name'] = NULL;
$arguments1020['rel'] = NULL;
$arguments1020['rev'] = NULL;
$arguments1020['target'] = NULL;
$arguments1020['action'] = NULL;
$arguments1020['arguments'] = array (
);
$arguments1020['controller'] = NULL;
$arguments1020['package'] = NULL;
$arguments1020['subpackage'] = NULL;
$arguments1020['section'] = '';
$arguments1020['format'] = '';
$arguments1020['additionalParams'] = array (
);
$arguments1020['addQueryString'] = false;
$arguments1020['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1020['useParentRequest'] = false;
$arguments1020['absolute'] = true;
$arguments1020['useMainRequest'] = false;
$arguments1020['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1023 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1022 = array();
$arguments1022['id'] = NULL;
$arguments1022['value'] = NULL;
$arguments1022['arguments'] = array (
);
$arguments1022['source'] = 'Main';
$arguments1022['package'] = NULL;
$arguments1022['quantity'] = NULL;
$arguments1022['locale'] = NULL;
$arguments1022['id'] = 'filter.title.images';
$arguments1022['package'] = 'Neos.Media.Browser';
$arguments1020['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1022, $renderChildrenClosure1023, $renderingContext);
// Rendering Array
$array1024 = array();
$array1024['neos-toggle'] = 'tooltip';
$array1024['placement'] = 'left';
$arguments1020['data'] = $array1024;
// Rendering Array
$array1025 = array();
$array1025['filter'] = 'Image';
$arguments1020['arguments'] = $array1025;
// Rendering Boolean node
// Rendering Array
$array1026 = array();
$array1026['0'] = 'TRUE';

$expression1027 = function($context) {return TRUE;};
$arguments1020['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1027(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1026)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1029 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1028 = array();
$arguments1028['then'] = NULL;
$arguments1028['else'] = NULL;
$arguments1028['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1030 = array();
$array1031 = array (
);$array1030['0'] = $renderingContext->getVariableProvider()->getByPath('filter', $array1031);
$array1030['1'] = ' === \'Image\'';

$expression1032 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Image');};
$arguments1028['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1032(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1030)
					),
					$renderingContext
				);
$arguments1028['then'] = 'neos-active';
$arguments1020['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1028, $renderChildrenClosure1029, $renderingContext);

$output971 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1020, $renderChildrenClosure1021, $renderingContext);

$output971 .= '
                </li>
                <li>
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1037 = function() use ($renderingContext, $self) {
$output1049 = '';

$output1049 .= '<i class="fas fa-file-alt"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1051 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1050 = array();
$arguments1050['id'] = NULL;
$arguments1050['value'] = NULL;
$arguments1050['arguments'] = array (
);
$arguments1050['source'] = 'Main';
$arguments1050['package'] = NULL;
$arguments1050['quantity'] = NULL;
$arguments1050['locale'] = NULL;
$arguments1050['id'] = 'filter.documents';
$arguments1050['package'] = 'Neos.Media.Browser';

$output1049 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1050, $renderChildrenClosure1051, $renderingContext)]);
return $output1049;
};
$arguments1036 = array();
$arguments1036['additionalAttributes'] = NULL;
$arguments1036['data'] = NULL;
$arguments1036['class'] = NULL;
$arguments1036['dir'] = NULL;
$arguments1036['id'] = NULL;
$arguments1036['lang'] = NULL;
$arguments1036['style'] = NULL;
$arguments1036['title'] = NULL;
$arguments1036['accesskey'] = NULL;
$arguments1036['tabindex'] = NULL;
$arguments1036['onclick'] = NULL;
$arguments1036['name'] = NULL;
$arguments1036['rel'] = NULL;
$arguments1036['rev'] = NULL;
$arguments1036['target'] = NULL;
$arguments1036['action'] = NULL;
$arguments1036['arguments'] = array (
);
$arguments1036['controller'] = NULL;
$arguments1036['package'] = NULL;
$arguments1036['subpackage'] = NULL;
$arguments1036['section'] = '';
$arguments1036['format'] = '';
$arguments1036['additionalParams'] = array (
);
$arguments1036['addQueryString'] = false;
$arguments1036['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1036['useParentRequest'] = false;
$arguments1036['absolute'] = true;
$arguments1036['useMainRequest'] = false;
$arguments1036['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1039 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1038 = array();
$arguments1038['id'] = NULL;
$arguments1038['value'] = NULL;
$arguments1038['arguments'] = array (
);
$arguments1038['source'] = 'Main';
$arguments1038['package'] = NULL;
$arguments1038['quantity'] = NULL;
$arguments1038['locale'] = NULL;
$arguments1038['id'] = 'filter.title.documents';
$arguments1038['package'] = 'Neos.Media.Browser';
$arguments1036['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1038, $renderChildrenClosure1039, $renderingContext);
// Rendering Array
$array1040 = array();
$array1040['neos-toggle'] = 'tooltip';
$array1040['placement'] = 'left';
$arguments1036['data'] = $array1040;
// Rendering Array
$array1041 = array();
$array1041['filter'] = 'Document';
$arguments1036['arguments'] = $array1041;
// Rendering Boolean node
// Rendering Array
$array1042 = array();
$array1042['0'] = 'TRUE';

$expression1043 = function($context) {return TRUE;};
$arguments1036['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1043(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1042)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1045 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1044 = array();
$arguments1044['then'] = NULL;
$arguments1044['else'] = NULL;
$arguments1044['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1046 = array();
$array1047 = array (
);$array1046['0'] = $renderingContext->getVariableProvider()->getByPath('filter', $array1047);
$array1046['1'] = ' === \'Document\'';

$expression1048 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Document');};
$arguments1044['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1048(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1046)
					),
					$renderingContext
				);
$arguments1044['then'] = 'neos-active';
$arguments1036['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1044, $renderChildrenClosure1045, $renderingContext);

$output971 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1036, $renderChildrenClosure1037, $renderingContext);

$output971 .= '
                </li>
                <li>
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1053 = function() use ($renderingContext, $self) {
$output1065 = '';

$output1065 .= '<i class="fas fa-film"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1067 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1066 = array();
$arguments1066['id'] = NULL;
$arguments1066['value'] = NULL;
$arguments1066['arguments'] = array (
);
$arguments1066['source'] = 'Main';
$arguments1066['package'] = NULL;
$arguments1066['quantity'] = NULL;
$arguments1066['locale'] = NULL;
$arguments1066['id'] = 'filter.video';
$arguments1066['package'] = 'Neos.Media.Browser';

$output1065 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1066, $renderChildrenClosure1067, $renderingContext)]);
return $output1065;
};
$arguments1052 = array();
$arguments1052['additionalAttributes'] = NULL;
$arguments1052['data'] = NULL;
$arguments1052['class'] = NULL;
$arguments1052['dir'] = NULL;
$arguments1052['id'] = NULL;
$arguments1052['lang'] = NULL;
$arguments1052['style'] = NULL;
$arguments1052['title'] = NULL;
$arguments1052['accesskey'] = NULL;
$arguments1052['tabindex'] = NULL;
$arguments1052['onclick'] = NULL;
$arguments1052['name'] = NULL;
$arguments1052['rel'] = NULL;
$arguments1052['rev'] = NULL;
$arguments1052['target'] = NULL;
$arguments1052['action'] = NULL;
$arguments1052['arguments'] = array (
);
$arguments1052['controller'] = NULL;
$arguments1052['package'] = NULL;
$arguments1052['subpackage'] = NULL;
$arguments1052['section'] = '';
$arguments1052['format'] = '';
$arguments1052['additionalParams'] = array (
);
$arguments1052['addQueryString'] = false;
$arguments1052['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1052['useParentRequest'] = false;
$arguments1052['absolute'] = true;
$arguments1052['useMainRequest'] = false;
$arguments1052['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1055 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1054 = array();
$arguments1054['id'] = NULL;
$arguments1054['value'] = NULL;
$arguments1054['arguments'] = array (
);
$arguments1054['source'] = 'Main';
$arguments1054['package'] = NULL;
$arguments1054['quantity'] = NULL;
$arguments1054['locale'] = NULL;
$arguments1054['id'] = 'filter.title.video';
$arguments1054['package'] = 'Neos.Media.Browser';
$arguments1052['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1054, $renderChildrenClosure1055, $renderingContext);
// Rendering Array
$array1056 = array();
$array1056['neos-toggle'] = 'tooltip';
$array1056['placement'] = 'left';
$arguments1052['data'] = $array1056;
// Rendering Array
$array1057 = array();
$array1057['filter'] = 'Video';
$arguments1052['arguments'] = $array1057;
// Rendering Boolean node
// Rendering Array
$array1058 = array();
$array1058['0'] = 'TRUE';

$expression1059 = function($context) {return TRUE;};
$arguments1052['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1059(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1058)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1061 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1060 = array();
$arguments1060['then'] = NULL;
$arguments1060['else'] = NULL;
$arguments1060['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1062 = array();
$array1063 = array (
);$array1062['0'] = $renderingContext->getVariableProvider()->getByPath('filter', $array1063);
$array1062['1'] = ' === \'Video\'';

$expression1064 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Video');};
$arguments1060['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1064(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1062)
					),
					$renderingContext
				);
$arguments1060['then'] = 'neos-active';
$arguments1052['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1060, $renderChildrenClosure1061, $renderingContext);

$output971 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1052, $renderChildrenClosure1053, $renderingContext);

$output971 .= '
                </li>
                <li>
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1069 = function() use ($renderingContext, $self) {
$output1081 = '';

$output1081 .= '<i class="fas fa-music"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1083 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1082 = array();
$arguments1082['id'] = NULL;
$arguments1082['value'] = NULL;
$arguments1082['arguments'] = array (
);
$arguments1082['source'] = 'Main';
$arguments1082['package'] = NULL;
$arguments1082['quantity'] = NULL;
$arguments1082['locale'] = NULL;
$arguments1082['id'] = 'filter.audio';
$arguments1082['package'] = 'Neos.Media.Browser';

$output1081 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1082, $renderChildrenClosure1083, $renderingContext)]);
return $output1081;
};
$arguments1068 = array();
$arguments1068['additionalAttributes'] = NULL;
$arguments1068['data'] = NULL;
$arguments1068['class'] = NULL;
$arguments1068['dir'] = NULL;
$arguments1068['id'] = NULL;
$arguments1068['lang'] = NULL;
$arguments1068['style'] = NULL;
$arguments1068['title'] = NULL;
$arguments1068['accesskey'] = NULL;
$arguments1068['tabindex'] = NULL;
$arguments1068['onclick'] = NULL;
$arguments1068['name'] = NULL;
$arguments1068['rel'] = NULL;
$arguments1068['rev'] = NULL;
$arguments1068['target'] = NULL;
$arguments1068['action'] = NULL;
$arguments1068['arguments'] = array (
);
$arguments1068['controller'] = NULL;
$arguments1068['package'] = NULL;
$arguments1068['subpackage'] = NULL;
$arguments1068['section'] = '';
$arguments1068['format'] = '';
$arguments1068['additionalParams'] = array (
);
$arguments1068['addQueryString'] = false;
$arguments1068['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1068['useParentRequest'] = false;
$arguments1068['absolute'] = true;
$arguments1068['useMainRequest'] = false;
$arguments1068['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1071 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1070 = array();
$arguments1070['id'] = NULL;
$arguments1070['value'] = NULL;
$arguments1070['arguments'] = array (
);
$arguments1070['source'] = 'Main';
$arguments1070['package'] = NULL;
$arguments1070['quantity'] = NULL;
$arguments1070['locale'] = NULL;
$arguments1070['id'] = 'filter.title.audio';
$arguments1070['package'] = 'Neos.Media.Browser';
$arguments1068['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1070, $renderChildrenClosure1071, $renderingContext);
// Rendering Array
$array1072 = array();
$array1072['neos-toggle'] = 'tooltip';
$array1072['placement'] = 'left';
$arguments1068['data'] = $array1072;
// Rendering Array
$array1073 = array();
$array1073['filter'] = 'Audio';
$arguments1068['arguments'] = $array1073;
// Rendering Boolean node
// Rendering Array
$array1074 = array();
$array1074['0'] = 'TRUE';

$expression1075 = function($context) {return TRUE;};
$arguments1068['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1075(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1074)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1077 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1076 = array();
$arguments1076['then'] = NULL;
$arguments1076['else'] = NULL;
$arguments1076['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1078 = array();
$array1079 = array (
);$array1078['0'] = $renderingContext->getVariableProvider()->getByPath('filter', $array1079);
$array1078['1'] = ' === \'Audio\'';

$expression1080 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Audio');};
$arguments1076['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1080(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1078)
					),
					$renderingContext
				);
$arguments1076['then'] = 'neos-active';
$arguments1068['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1076, $renderChildrenClosure1077, $renderingContext);

$output971 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1068, $renderChildrenClosure1069, $renderingContext);

$output971 .= '
                </li>
            </ul>
        </div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1085 = function() use ($renderingContext, $self) {
$output1214 = '';

$output1214 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1216 = function() use ($renderingContext, $self) {
$output1217 = '';

$output1217 .= '
        <div class="neos-dropdown" id="neos-sort-menu">
            <span title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1219 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1218 = array();
$arguments1218['id'] = NULL;
$arguments1218['value'] = NULL;
$arguments1218['arguments'] = array (
);
$arguments1218['source'] = 'Main';
$arguments1218['package'] = NULL;
$arguments1218['quantity'] = NULL;
$arguments1218['locale'] = NULL;
$arguments1218['id'] = 'tooltip.sortOptions';
$arguments1218['package'] = 'Neos.Media.Browser';

$output1217 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1218, $renderChildrenClosure1219, $renderingContext)]);

$output1217 .= '" data-neos-toggle="tooltip">
                <a class="dropdown-toggle" href="#" data-neos-toggle="dropdown" data-target="#neos-sort-menu">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1221 = function() use ($renderingContext, $self) {
$output1237 = '';

$output1237 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1239 = function() use ($renderingContext, $self) {
$output1240 = '';

$output1240 .= '
                            <i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1241 = array();
$arguments1241['then'] = NULL;
$arguments1241['else'] = NULL;
$arguments1241['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1243 = array();
$array1244 = array (
);$array1243['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortBy', $array1244)]);
$array1243['1'] = ' === \'Modified\'';

$expression1245 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments1241['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1245(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1243)
					),
					$renderingContext
				);
$arguments1241['then'] = 'sort-amount-up';
$arguments1241['else'] = 'sort-alpha-up';

$output1240 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1241, $renderChildrenClosure1242, $renderingContext);

$output1240 .= '"></i>
                        ';
return $output1240;
};
$arguments1238 = array();

$output1237 .= '';

$output1237 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1247 = function() use ($renderingContext, $self) {
$output1248 = '';

$output1248 .= '
                            <i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1250 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1249 = array();
$arguments1249['then'] = NULL;
$arguments1249['else'] = NULL;
$arguments1249['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1251 = array();
$array1252 = array (
);$array1251['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortBy', $array1252)]);
$array1251['1'] = ' === \'Modified\'';

$expression1253 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments1249['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1253(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1251)
					),
					$renderingContext
				);
$arguments1249['then'] = 'sort-amount-down';
$arguments1249['else'] = 'sort-alpha-down';

$output1248 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1249, $renderChildrenClosure1250, $renderingContext);

$output1248 .= '"></i>
                        ';
return $output1248;
};
$arguments1246 = array();
$arguments1246['if'] = NULL;

$output1237 .= '';

$output1237 .= '
                    ';
return $output1237;
};
$arguments1220 = array();
$arguments1220['then'] = NULL;
$arguments1220['else'] = NULL;
$arguments1220['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1234 = array();
$array1235 = array (
);$array1234['0'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array1235);
$array1234['1'] = ' === \'ASC\'';

$expression1236 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'ASC');};
$arguments1220['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1236(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1234)
					),
					$renderingContext
				);
$arguments1220['__thenClosure'] = function() use ($renderingContext, $self) {
$output1222 = '';

$output1222 .= '
                            <i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1224 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1223 = array();
$arguments1223['then'] = NULL;
$arguments1223['else'] = NULL;
$arguments1223['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1225 = array();
$array1226 = array (
);$array1225['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortBy', $array1226)]);
$array1225['1'] = ' === \'Modified\'';

$expression1227 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments1223['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1227(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1225)
					),
					$renderingContext
				);
$arguments1223['then'] = 'sort-amount-up';
$arguments1223['else'] = 'sort-alpha-up';

$output1222 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1223, $renderChildrenClosure1224, $renderingContext);

$output1222 .= '"></i>
                        ';
return $output1222;
};
$arguments1220['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1228 = '';

$output1228 .= '
                            <i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1229 = array();
$arguments1229['then'] = NULL;
$arguments1229['else'] = NULL;
$arguments1229['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1231 = array();
$array1232 = array (
);$array1231['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortBy', $array1232)]);
$array1231['1'] = ' === \'Modified\'';

$expression1233 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments1229['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1233(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1231)
					),
					$renderingContext
				);
$arguments1229['then'] = 'sort-amount-down';
$arguments1229['else'] = 'sort-alpha-down';

$output1228 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1229, $renderChildrenClosure1230, $renderingContext);

$output1228 .= '"></i>
                        ';
return $output1228;
};

$output1217 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1220, $renderChildrenClosure1221, $renderingContext);

$output1217 .= '
                </a>
            </span>
            <div class="neos-dropdown-menu-list neos-pull-right" role="menu">
                <span class="neos-dropdown-menu-list-title">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1255 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1254 = array();
$arguments1254['id'] = NULL;
$arguments1254['value'] = NULL;
$arguments1254['arguments'] = array (
);
$arguments1254['source'] = 'Main';
$arguments1254['package'] = NULL;
$arguments1254['quantity'] = NULL;
$arguments1254['locale'] = NULL;
$arguments1254['id'] = 'sortby';
$arguments1254['package'] = 'Neos.Media.Browser';

$output1217 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1254, $renderChildrenClosure1255, $renderingContext)]);

$output1217 .= '</span>
                <ul>
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1257 = function() use ($renderingContext, $self) {
$output1269 = '';

$output1269 .= '<i class="fas ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1271 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1270 = array();
$arguments1270['then'] = NULL;
$arguments1270['else'] = NULL;
$arguments1270['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1272 = array();
$array1273 = array (
);$array1272['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortDirection', $array1273)]);
$array1272['1'] = ' === \'ASC\'';

$expression1274 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'ASC');};
$arguments1270['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1274(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1272)
					),
					$renderingContext
				);
$arguments1270['then'] = 'fa-sort-amount-up';
$arguments1270['else'] = 'fa-sort-amount-down';

$output1269 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1270, $renderChildrenClosure1271, $renderingContext);

$output1269 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1276 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1275 = array();
$arguments1275['id'] = NULL;
$arguments1275['value'] = NULL;
$arguments1275['arguments'] = array (
);
$arguments1275['source'] = 'Main';
$arguments1275['package'] = NULL;
$arguments1275['quantity'] = NULL;
$arguments1275['locale'] = NULL;
$arguments1275['id'] = 'field.lastModified';
$arguments1275['package'] = 'Neos.Media.Browser';

$output1269 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1275, $renderChildrenClosure1276, $renderingContext)]);
return $output1269;
};
$arguments1256 = array();
$arguments1256['additionalAttributes'] = NULL;
$arguments1256['data'] = NULL;
$arguments1256['class'] = NULL;
$arguments1256['dir'] = NULL;
$arguments1256['id'] = NULL;
$arguments1256['lang'] = NULL;
$arguments1256['style'] = NULL;
$arguments1256['title'] = NULL;
$arguments1256['accesskey'] = NULL;
$arguments1256['tabindex'] = NULL;
$arguments1256['onclick'] = NULL;
$arguments1256['name'] = NULL;
$arguments1256['rel'] = NULL;
$arguments1256['rev'] = NULL;
$arguments1256['target'] = NULL;
$arguments1256['action'] = NULL;
$arguments1256['arguments'] = array (
);
$arguments1256['controller'] = NULL;
$arguments1256['package'] = NULL;
$arguments1256['subpackage'] = NULL;
$arguments1256['section'] = '';
$arguments1256['format'] = '';
$arguments1256['additionalParams'] = array (
);
$arguments1256['addQueryString'] = false;
$arguments1256['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1256['useParentRequest'] = false;
$arguments1256['absolute'] = true;
$arguments1256['useMainRequest'] = false;
$arguments1256['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1259 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1258 = array();
$arguments1258['id'] = NULL;
$arguments1258['value'] = NULL;
$arguments1258['arguments'] = array (
);
$arguments1258['source'] = 'Main';
$arguments1258['package'] = NULL;
$arguments1258['quantity'] = NULL;
$arguments1258['locale'] = NULL;
$arguments1258['id'] = 'sortByLastModified';
$arguments1258['package'] = 'Neos.Media.Browser';
$arguments1256['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1258, $renderChildrenClosure1259, $renderingContext);
// Rendering Array
$array1260 = array();
$array1260['neos-toggle'] = 'tooltip';
$array1260['placement'] = 'left';
$arguments1256['data'] = $array1260;
// Rendering Array
$array1261 = array();
$array1261['sortBy'] = 'Modified';
$arguments1256['arguments'] = $array1261;
// Rendering Boolean node
// Rendering Array
$array1262 = array();
$array1262['0'] = 'TRUE';

$expression1263 = function($context) {return TRUE;};
$arguments1256['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1263(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1262)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1265 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1264 = array();
$arguments1264['then'] = NULL;
$arguments1264['else'] = NULL;
$arguments1264['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1266 = array();
$array1267 = array (
);$array1266['0'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array1267);
$array1266['1'] = ' === \'Modified\'';

$expression1268 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments1264['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1268(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1266)
					),
					$renderingContext
				);
$arguments1264['then'] = 'neos-active';
$arguments1256['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1264, $renderChildrenClosure1265, $renderingContext);

$output1217 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1256, $renderChildrenClosure1257, $renderingContext);

$output1217 .= '
                    </li>
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1278 = function() use ($renderingContext, $self) {
$output1290 = '';

$output1290 .= '<i class="fas ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1292 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1291 = array();
$arguments1291['then'] = NULL;
$arguments1291['else'] = NULL;
$arguments1291['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1293 = array();
$array1294 = array (
);$array1293['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortDirection', $array1294)]);
$array1293['1'] = ' === \'ASC\'';

$expression1295 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'ASC');};
$arguments1291['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1295(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1293)
					),
					$renderingContext
				);
$arguments1291['then'] = 'fa-sort-alpha-up';
$arguments1291['else'] = 'fa-sort-alpha-down';

$output1290 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1291, $renderChildrenClosure1292, $renderingContext);

$output1290 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1297 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1296 = array();
$arguments1296['id'] = NULL;
$arguments1296['value'] = NULL;
$arguments1296['arguments'] = array (
);
$arguments1296['source'] = 'Main';
$arguments1296['package'] = NULL;
$arguments1296['quantity'] = NULL;
$arguments1296['locale'] = NULL;
$arguments1296['id'] = 'field.name';
$arguments1296['package'] = 'Neos.Media.Browser';

$output1290 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1296, $renderChildrenClosure1297, $renderingContext)]);
return $output1290;
};
$arguments1277 = array();
$arguments1277['additionalAttributes'] = NULL;
$arguments1277['data'] = NULL;
$arguments1277['class'] = NULL;
$arguments1277['dir'] = NULL;
$arguments1277['id'] = NULL;
$arguments1277['lang'] = NULL;
$arguments1277['style'] = NULL;
$arguments1277['title'] = NULL;
$arguments1277['accesskey'] = NULL;
$arguments1277['tabindex'] = NULL;
$arguments1277['onclick'] = NULL;
$arguments1277['name'] = NULL;
$arguments1277['rel'] = NULL;
$arguments1277['rev'] = NULL;
$arguments1277['target'] = NULL;
$arguments1277['action'] = NULL;
$arguments1277['arguments'] = array (
);
$arguments1277['controller'] = NULL;
$arguments1277['package'] = NULL;
$arguments1277['subpackage'] = NULL;
$arguments1277['section'] = '';
$arguments1277['format'] = '';
$arguments1277['additionalParams'] = array (
);
$arguments1277['addQueryString'] = false;
$arguments1277['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1277['useParentRequest'] = false;
$arguments1277['absolute'] = true;
$arguments1277['useMainRequest'] = false;
$arguments1277['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1280 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1279 = array();
$arguments1279['id'] = NULL;
$arguments1279['value'] = NULL;
$arguments1279['arguments'] = array (
);
$arguments1279['source'] = 'Main';
$arguments1279['package'] = NULL;
$arguments1279['quantity'] = NULL;
$arguments1279['locale'] = NULL;
$arguments1279['id'] = 'sortByName';
$arguments1279['package'] = 'Neos.Media.Browser';
$arguments1277['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1279, $renderChildrenClosure1280, $renderingContext);
// Rendering Array
$array1281 = array();
$array1281['neos-toggle'] = 'tooltip';
$array1281['placement'] = 'left';
$arguments1277['data'] = $array1281;
// Rendering Array
$array1282 = array();
$array1282['sortBy'] = 'Name';
$arguments1277['arguments'] = $array1282;
// Rendering Boolean node
// Rendering Array
$array1283 = array();
$array1283['0'] = 'TRUE';

$expression1284 = function($context) {return TRUE;};
$arguments1277['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1284(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1283)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1286 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1285 = array();
$arguments1285['then'] = NULL;
$arguments1285['else'] = NULL;
$arguments1285['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1287 = array();
$array1288 = array (
);$array1287['0'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array1288);
$array1287['1'] = ' === \'Name\'';

$expression1289 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Name');};
$arguments1285['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1289(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1287)
					),
					$renderingContext
				);
$arguments1285['then'] = 'neos-active';
$arguments1277['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1285, $renderChildrenClosure1286, $renderingContext);

$output1217 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1277, $renderChildrenClosure1278, $renderingContext);

$output1217 .= '
                    </li>
                </ul>
                <span class="neos-dropdown-menu-list-title">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1299 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1298 = array();
$arguments1298['id'] = NULL;
$arguments1298['value'] = NULL;
$arguments1298['arguments'] = array (
);
$arguments1298['source'] = 'Main';
$arguments1298['package'] = NULL;
$arguments1298['quantity'] = NULL;
$arguments1298['locale'] = NULL;
$arguments1298['id'] = 'sortDirection';
$arguments1298['package'] = 'Neos.Media.Browser';

$output1217 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1298, $renderChildrenClosure1299, $renderingContext)]);

$output1217 .= '</span>
                <ul>
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1301 = function() use ($renderingContext, $self) {
$output1313 = '';

$output1313 .= '<i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1315 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1314 = array();
$arguments1314['then'] = NULL;
$arguments1314['else'] = NULL;
$arguments1314['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1316 = array();
$array1317 = array (
);$array1316['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortBy', $array1317)]);
$array1316['1'] = ' === \'Name\'';

$expression1318 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Name');};
$arguments1314['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1318(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1316)
					),
					$renderingContext
				);
$arguments1314['then'] = 'sort-alpha-up';
$arguments1314['else'] = 'sort-amount-up';

$output1313 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1314, $renderChildrenClosure1315, $renderingContext);

$output1313 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1320 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1319 = array();
$arguments1319['id'] = NULL;
$arguments1319['value'] = NULL;
$arguments1319['arguments'] = array (
);
$arguments1319['source'] = 'Main';
$arguments1319['package'] = NULL;
$arguments1319['quantity'] = NULL;
$arguments1319['locale'] = NULL;
$arguments1319['id'] = 'sortDirection.asc';
$arguments1319['package'] = 'Neos.Media.Browser';

$output1313 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1319, $renderChildrenClosure1320, $renderingContext)]);
return $output1313;
};
$arguments1300 = array();
$arguments1300['additionalAttributes'] = NULL;
$arguments1300['data'] = NULL;
$arguments1300['class'] = NULL;
$arguments1300['dir'] = NULL;
$arguments1300['id'] = NULL;
$arguments1300['lang'] = NULL;
$arguments1300['style'] = NULL;
$arguments1300['title'] = NULL;
$arguments1300['accesskey'] = NULL;
$arguments1300['tabindex'] = NULL;
$arguments1300['onclick'] = NULL;
$arguments1300['name'] = NULL;
$arguments1300['rel'] = NULL;
$arguments1300['rev'] = NULL;
$arguments1300['target'] = NULL;
$arguments1300['action'] = NULL;
$arguments1300['arguments'] = array (
);
$arguments1300['controller'] = NULL;
$arguments1300['package'] = NULL;
$arguments1300['subpackage'] = NULL;
$arguments1300['section'] = '';
$arguments1300['format'] = '';
$arguments1300['additionalParams'] = array (
);
$arguments1300['addQueryString'] = false;
$arguments1300['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1300['useParentRequest'] = false;
$arguments1300['absolute'] = true;
$arguments1300['useMainRequest'] = false;
$arguments1300['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1303 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1302 = array();
$arguments1302['id'] = NULL;
$arguments1302['value'] = NULL;
$arguments1302['arguments'] = array (
);
$arguments1302['source'] = 'Main';
$arguments1302['package'] = NULL;
$arguments1302['quantity'] = NULL;
$arguments1302['locale'] = NULL;
$arguments1302['id'] = 'sortDirection.asc.tooltip';
$arguments1302['package'] = 'Neos.Media.Browser';
$arguments1300['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1302, $renderChildrenClosure1303, $renderingContext);
// Rendering Array
$array1304 = array();
$array1304['neos-toggle'] = 'tooltip';
$array1304['placement'] = 'left';
$arguments1300['data'] = $array1304;
// Rendering Array
$array1305 = array();
$array1305['sortDirection'] = 'ASC';
$arguments1300['arguments'] = $array1305;
// Rendering Boolean node
// Rendering Array
$array1306 = array();
$array1306['0'] = 'TRUE';

$expression1307 = function($context) {return TRUE;};
$arguments1300['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1307(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1306)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1309 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1308 = array();
$arguments1308['then'] = NULL;
$arguments1308['else'] = NULL;
$arguments1308['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1310 = array();
$array1311 = array (
);$array1310['0'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array1311);
$array1310['1'] = ' === \'ASC\'';

$expression1312 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'ASC');};
$arguments1308['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1312(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1310)
					),
					$renderingContext
				);
$arguments1308['then'] = 'neos-active';
$arguments1300['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1308, $renderChildrenClosure1309, $renderingContext);

$output1217 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1300, $renderChildrenClosure1301, $renderingContext);

$output1217 .= '
                    </li>
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1322 = function() use ($renderingContext, $self) {
$output1334 = '';

$output1334 .= '<i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1336 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1335 = array();
$arguments1335['then'] = NULL;
$arguments1335['else'] = NULL;
$arguments1335['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1337 = array();
$array1338 = array (
);$array1337['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortBy', $array1338)]);
$array1337['1'] = ' === \'Name\'';

$expression1339 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Name');};
$arguments1335['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1339(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1337)
					),
					$renderingContext
				);
$arguments1335['then'] = 'sort-alpha-down';
$arguments1335['else'] = 'sort-amount-down';

$output1334 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1335, $renderChildrenClosure1336, $renderingContext);

$output1334 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1341 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1340 = array();
$arguments1340['id'] = NULL;
$arguments1340['value'] = NULL;
$arguments1340['arguments'] = array (
);
$arguments1340['source'] = 'Main';
$arguments1340['package'] = NULL;
$arguments1340['quantity'] = NULL;
$arguments1340['locale'] = NULL;
$arguments1340['id'] = 'sortDirection.desc';
$arguments1340['package'] = 'Neos.Media.Browser';

$output1334 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1340, $renderChildrenClosure1341, $renderingContext)]);
return $output1334;
};
$arguments1321 = array();
$arguments1321['additionalAttributes'] = NULL;
$arguments1321['data'] = NULL;
$arguments1321['class'] = NULL;
$arguments1321['dir'] = NULL;
$arguments1321['id'] = NULL;
$arguments1321['lang'] = NULL;
$arguments1321['style'] = NULL;
$arguments1321['title'] = NULL;
$arguments1321['accesskey'] = NULL;
$arguments1321['tabindex'] = NULL;
$arguments1321['onclick'] = NULL;
$arguments1321['name'] = NULL;
$arguments1321['rel'] = NULL;
$arguments1321['rev'] = NULL;
$arguments1321['target'] = NULL;
$arguments1321['action'] = NULL;
$arguments1321['arguments'] = array (
);
$arguments1321['controller'] = NULL;
$arguments1321['package'] = NULL;
$arguments1321['subpackage'] = NULL;
$arguments1321['section'] = '';
$arguments1321['format'] = '';
$arguments1321['additionalParams'] = array (
);
$arguments1321['addQueryString'] = false;
$arguments1321['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1321['useParentRequest'] = false;
$arguments1321['absolute'] = true;
$arguments1321['useMainRequest'] = false;
$arguments1321['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1324 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1323 = array();
$arguments1323['id'] = NULL;
$arguments1323['value'] = NULL;
$arguments1323['arguments'] = array (
);
$arguments1323['source'] = 'Main';
$arguments1323['package'] = NULL;
$arguments1323['quantity'] = NULL;
$arguments1323['locale'] = NULL;
$arguments1323['id'] = 'sortDirection.desc.tooltip';
$arguments1323['package'] = 'Neos.Media.Browser';
$arguments1321['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1323, $renderChildrenClosure1324, $renderingContext);
// Rendering Array
$array1325 = array();
$array1325['neos-toggle'] = 'tooltip';
$array1325['placement'] = 'left';
$arguments1321['data'] = $array1325;
// Rendering Array
$array1326 = array();
$array1326['sortDirection'] = 'DESC';
$arguments1321['arguments'] = $array1326;
// Rendering Boolean node
// Rendering Array
$array1327 = array();
$array1327['0'] = 'TRUE';

$expression1328 = function($context) {return TRUE;};
$arguments1321['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1328(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1327)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1330 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1329 = array();
$arguments1329['then'] = NULL;
$arguments1329['else'] = NULL;
$arguments1329['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1331 = array();
$array1332 = array (
);$array1331['0'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array1332);
$array1331['1'] = ' === \'DESC\'';

$expression1333 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'DESC');};
$arguments1329['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1333(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1331)
					),
					$renderingContext
				);
$arguments1329['then'] = 'neos-active';
$arguments1321['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1329, $renderChildrenClosure1330, $renderingContext);

$output1217 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1321, $renderChildrenClosure1322, $renderingContext);

$output1217 .= '
                    </li>
                </ul>
            </div>
        </div>
            ';
return $output1217;
};
$arguments1215 = array();

$output1214 .= '';

$output1214 .= '
        ';
return $output1214;
};
$arguments1084 = array();
$arguments1084['then'] = NULL;
$arguments1084['else'] = NULL;
$arguments1084['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1211 = array();
$array1212 = array (
);$array1211['0'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSourceSupportsSorting', $array1212);

$expression1213 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1084['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1213(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1211)
					),
					$renderingContext
				);
$arguments1084['__thenClosure'] = function() use ($renderingContext, $self) {
$output1086 = '';

$output1086 .= '
        <div class="neos-dropdown" id="neos-sort-menu">
            <span title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1088 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1087 = array();
$arguments1087['id'] = NULL;
$arguments1087['value'] = NULL;
$arguments1087['arguments'] = array (
);
$arguments1087['source'] = 'Main';
$arguments1087['package'] = NULL;
$arguments1087['quantity'] = NULL;
$arguments1087['locale'] = NULL;
$arguments1087['id'] = 'tooltip.sortOptions';
$arguments1087['package'] = 'Neos.Media.Browser';

$output1086 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1087, $renderChildrenClosure1088, $renderingContext)]);

$output1086 .= '" data-neos-toggle="tooltip">
                <a class="dropdown-toggle" href="#" data-neos-toggle="dropdown" data-target="#neos-sort-menu">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1090 = function() use ($renderingContext, $self) {
$output1106 = '';

$output1106 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1108 = function() use ($renderingContext, $self) {
$output1109 = '';

$output1109 .= '
                            <i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1110 = array();
$arguments1110['then'] = NULL;
$arguments1110['else'] = NULL;
$arguments1110['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1112 = array();
$array1113 = array (
);$array1112['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortBy', $array1113)]);
$array1112['1'] = ' === \'Modified\'';

$expression1114 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments1110['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1114(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1112)
					),
					$renderingContext
				);
$arguments1110['then'] = 'sort-amount-up';
$arguments1110['else'] = 'sort-alpha-up';

$output1109 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1110, $renderChildrenClosure1111, $renderingContext);

$output1109 .= '"></i>
                        ';
return $output1109;
};
$arguments1107 = array();

$output1106 .= '';

$output1106 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1116 = function() use ($renderingContext, $self) {
$output1117 = '';

$output1117 .= '
                            <i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1118 = array();
$arguments1118['then'] = NULL;
$arguments1118['else'] = NULL;
$arguments1118['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1120 = array();
$array1121 = array (
);$array1120['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortBy', $array1121)]);
$array1120['1'] = ' === \'Modified\'';

$expression1122 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments1118['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1122(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1120)
					),
					$renderingContext
				);
$arguments1118['then'] = 'sort-amount-down';
$arguments1118['else'] = 'sort-alpha-down';

$output1117 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1118, $renderChildrenClosure1119, $renderingContext);

$output1117 .= '"></i>
                        ';
return $output1117;
};
$arguments1115 = array();
$arguments1115['if'] = NULL;

$output1106 .= '';

$output1106 .= '
                    ';
return $output1106;
};
$arguments1089 = array();
$arguments1089['then'] = NULL;
$arguments1089['else'] = NULL;
$arguments1089['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1103 = array();
$array1104 = array (
);$array1103['0'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array1104);
$array1103['1'] = ' === \'ASC\'';

$expression1105 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'ASC');};
$arguments1089['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1105(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1103)
					),
					$renderingContext
				);
$arguments1089['__thenClosure'] = function() use ($renderingContext, $self) {
$output1091 = '';

$output1091 .= '
                            <i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1093 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1092 = array();
$arguments1092['then'] = NULL;
$arguments1092['else'] = NULL;
$arguments1092['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1094 = array();
$array1095 = array (
);$array1094['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortBy', $array1095)]);
$array1094['1'] = ' === \'Modified\'';

$expression1096 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments1092['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1096(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1094)
					),
					$renderingContext
				);
$arguments1092['then'] = 'sort-amount-up';
$arguments1092['else'] = 'sort-alpha-up';

$output1091 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1092, $renderChildrenClosure1093, $renderingContext);

$output1091 .= '"></i>
                        ';
return $output1091;
};
$arguments1089['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1097 = '';

$output1097 .= '
                            <i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1099 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1098 = array();
$arguments1098['then'] = NULL;
$arguments1098['else'] = NULL;
$arguments1098['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1100 = array();
$array1101 = array (
);$array1100['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortBy', $array1101)]);
$array1100['1'] = ' === \'Modified\'';

$expression1102 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments1098['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1102(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1100)
					),
					$renderingContext
				);
$arguments1098['then'] = 'sort-amount-down';
$arguments1098['else'] = 'sort-alpha-down';

$output1097 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1098, $renderChildrenClosure1099, $renderingContext);

$output1097 .= '"></i>
                        ';
return $output1097;
};

$output1086 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1089, $renderChildrenClosure1090, $renderingContext);

$output1086 .= '
                </a>
            </span>
            <div class="neos-dropdown-menu-list neos-pull-right" role="menu">
                <span class="neos-dropdown-menu-list-title">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1124 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1123 = array();
$arguments1123['id'] = NULL;
$arguments1123['value'] = NULL;
$arguments1123['arguments'] = array (
);
$arguments1123['source'] = 'Main';
$arguments1123['package'] = NULL;
$arguments1123['quantity'] = NULL;
$arguments1123['locale'] = NULL;
$arguments1123['id'] = 'sortby';
$arguments1123['package'] = 'Neos.Media.Browser';

$output1086 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1123, $renderChildrenClosure1124, $renderingContext)]);

$output1086 .= '</span>
                <ul>
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1126 = function() use ($renderingContext, $self) {
$output1138 = '';

$output1138 .= '<i class="fas ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1139 = array();
$arguments1139['then'] = NULL;
$arguments1139['else'] = NULL;
$arguments1139['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1141 = array();
$array1142 = array (
);$array1141['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortDirection', $array1142)]);
$array1141['1'] = ' === \'ASC\'';

$expression1143 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'ASC');};
$arguments1139['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1143(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1141)
					),
					$renderingContext
				);
$arguments1139['then'] = 'fa-sort-amount-up';
$arguments1139['else'] = 'fa-sort-amount-down';

$output1138 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1139, $renderChildrenClosure1140, $renderingContext);

$output1138 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1145 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1144 = array();
$arguments1144['id'] = NULL;
$arguments1144['value'] = NULL;
$arguments1144['arguments'] = array (
);
$arguments1144['source'] = 'Main';
$arguments1144['package'] = NULL;
$arguments1144['quantity'] = NULL;
$arguments1144['locale'] = NULL;
$arguments1144['id'] = 'field.lastModified';
$arguments1144['package'] = 'Neos.Media.Browser';

$output1138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1144, $renderChildrenClosure1145, $renderingContext)]);
return $output1138;
};
$arguments1125 = array();
$arguments1125['additionalAttributes'] = NULL;
$arguments1125['data'] = NULL;
$arguments1125['class'] = NULL;
$arguments1125['dir'] = NULL;
$arguments1125['id'] = NULL;
$arguments1125['lang'] = NULL;
$arguments1125['style'] = NULL;
$arguments1125['title'] = NULL;
$arguments1125['accesskey'] = NULL;
$arguments1125['tabindex'] = NULL;
$arguments1125['onclick'] = NULL;
$arguments1125['name'] = NULL;
$arguments1125['rel'] = NULL;
$arguments1125['rev'] = NULL;
$arguments1125['target'] = NULL;
$arguments1125['action'] = NULL;
$arguments1125['arguments'] = array (
);
$arguments1125['controller'] = NULL;
$arguments1125['package'] = NULL;
$arguments1125['subpackage'] = NULL;
$arguments1125['section'] = '';
$arguments1125['format'] = '';
$arguments1125['additionalParams'] = array (
);
$arguments1125['addQueryString'] = false;
$arguments1125['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1125['useParentRequest'] = false;
$arguments1125['absolute'] = true;
$arguments1125['useMainRequest'] = false;
$arguments1125['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1128 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1127 = array();
$arguments1127['id'] = NULL;
$arguments1127['value'] = NULL;
$arguments1127['arguments'] = array (
);
$arguments1127['source'] = 'Main';
$arguments1127['package'] = NULL;
$arguments1127['quantity'] = NULL;
$arguments1127['locale'] = NULL;
$arguments1127['id'] = 'sortByLastModified';
$arguments1127['package'] = 'Neos.Media.Browser';
$arguments1125['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1127, $renderChildrenClosure1128, $renderingContext);
// Rendering Array
$array1129 = array();
$array1129['neos-toggle'] = 'tooltip';
$array1129['placement'] = 'left';
$arguments1125['data'] = $array1129;
// Rendering Array
$array1130 = array();
$array1130['sortBy'] = 'Modified';
$arguments1125['arguments'] = $array1130;
// Rendering Boolean node
// Rendering Array
$array1131 = array();
$array1131['0'] = 'TRUE';

$expression1132 = function($context) {return TRUE;};
$arguments1125['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1132(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1131)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1133 = array();
$arguments1133['then'] = NULL;
$arguments1133['else'] = NULL;
$arguments1133['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1135 = array();
$array1136 = array (
);$array1135['0'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array1136);
$array1135['1'] = ' === \'Modified\'';

$expression1137 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments1133['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1137(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1135)
					),
					$renderingContext
				);
$arguments1133['then'] = 'neos-active';
$arguments1125['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1133, $renderChildrenClosure1134, $renderingContext);

$output1086 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1125, $renderChildrenClosure1126, $renderingContext);

$output1086 .= '
                    </li>
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1147 = function() use ($renderingContext, $self) {
$output1159 = '';

$output1159 .= '<i class="fas ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1161 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1160 = array();
$arguments1160['then'] = NULL;
$arguments1160['else'] = NULL;
$arguments1160['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1162 = array();
$array1163 = array (
);$array1162['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortDirection', $array1163)]);
$array1162['1'] = ' === \'ASC\'';

$expression1164 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'ASC');};
$arguments1160['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1164(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1162)
					),
					$renderingContext
				);
$arguments1160['then'] = 'fa-sort-alpha-up';
$arguments1160['else'] = 'fa-sort-alpha-down';

$output1159 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1160, $renderChildrenClosure1161, $renderingContext);

$output1159 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1166 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1165 = array();
$arguments1165['id'] = NULL;
$arguments1165['value'] = NULL;
$arguments1165['arguments'] = array (
);
$arguments1165['source'] = 'Main';
$arguments1165['package'] = NULL;
$arguments1165['quantity'] = NULL;
$arguments1165['locale'] = NULL;
$arguments1165['id'] = 'field.name';
$arguments1165['package'] = 'Neos.Media.Browser';

$output1159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1165, $renderChildrenClosure1166, $renderingContext)]);
return $output1159;
};
$arguments1146 = array();
$arguments1146['additionalAttributes'] = NULL;
$arguments1146['data'] = NULL;
$arguments1146['class'] = NULL;
$arguments1146['dir'] = NULL;
$arguments1146['id'] = NULL;
$arguments1146['lang'] = NULL;
$arguments1146['style'] = NULL;
$arguments1146['title'] = NULL;
$arguments1146['accesskey'] = NULL;
$arguments1146['tabindex'] = NULL;
$arguments1146['onclick'] = NULL;
$arguments1146['name'] = NULL;
$arguments1146['rel'] = NULL;
$arguments1146['rev'] = NULL;
$arguments1146['target'] = NULL;
$arguments1146['action'] = NULL;
$arguments1146['arguments'] = array (
);
$arguments1146['controller'] = NULL;
$arguments1146['package'] = NULL;
$arguments1146['subpackage'] = NULL;
$arguments1146['section'] = '';
$arguments1146['format'] = '';
$arguments1146['additionalParams'] = array (
);
$arguments1146['addQueryString'] = false;
$arguments1146['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1146['useParentRequest'] = false;
$arguments1146['absolute'] = true;
$arguments1146['useMainRequest'] = false;
$arguments1146['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1149 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1148 = array();
$arguments1148['id'] = NULL;
$arguments1148['value'] = NULL;
$arguments1148['arguments'] = array (
);
$arguments1148['source'] = 'Main';
$arguments1148['package'] = NULL;
$arguments1148['quantity'] = NULL;
$arguments1148['locale'] = NULL;
$arguments1148['id'] = 'sortByName';
$arguments1148['package'] = 'Neos.Media.Browser';
$arguments1146['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1148, $renderChildrenClosure1149, $renderingContext);
// Rendering Array
$array1150 = array();
$array1150['neos-toggle'] = 'tooltip';
$array1150['placement'] = 'left';
$arguments1146['data'] = $array1150;
// Rendering Array
$array1151 = array();
$array1151['sortBy'] = 'Name';
$arguments1146['arguments'] = $array1151;
// Rendering Boolean node
// Rendering Array
$array1152 = array();
$array1152['0'] = 'TRUE';

$expression1153 = function($context) {return TRUE;};
$arguments1146['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1153(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1152)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1155 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1154 = array();
$arguments1154['then'] = NULL;
$arguments1154['else'] = NULL;
$arguments1154['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1156 = array();
$array1157 = array (
);$array1156['0'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array1157);
$array1156['1'] = ' === \'Name\'';

$expression1158 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Name');};
$arguments1154['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1158(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1156)
					),
					$renderingContext
				);
$arguments1154['then'] = 'neos-active';
$arguments1146['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1154, $renderChildrenClosure1155, $renderingContext);

$output1086 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1146, $renderChildrenClosure1147, $renderingContext);

$output1086 .= '
                    </li>
                </ul>
                <span class="neos-dropdown-menu-list-title">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1167 = array();
$arguments1167['id'] = NULL;
$arguments1167['value'] = NULL;
$arguments1167['arguments'] = array (
);
$arguments1167['source'] = 'Main';
$arguments1167['package'] = NULL;
$arguments1167['quantity'] = NULL;
$arguments1167['locale'] = NULL;
$arguments1167['id'] = 'sortDirection';
$arguments1167['package'] = 'Neos.Media.Browser';

$output1086 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1167, $renderChildrenClosure1168, $renderingContext)]);

$output1086 .= '</span>
                <ul>
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1170 = function() use ($renderingContext, $self) {
$output1182 = '';

$output1182 .= '<i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1184 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1183 = array();
$arguments1183['then'] = NULL;
$arguments1183['else'] = NULL;
$arguments1183['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1185 = array();
$array1186 = array (
);$array1185['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortBy', $array1186)]);
$array1185['1'] = ' === \'Name\'';

$expression1187 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Name');};
$arguments1183['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1187(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1185)
					),
					$renderingContext
				);
$arguments1183['then'] = 'sort-alpha-up';
$arguments1183['else'] = 'sort-amount-up';

$output1182 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1183, $renderChildrenClosure1184, $renderingContext);

$output1182 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1188 = array();
$arguments1188['id'] = NULL;
$arguments1188['value'] = NULL;
$arguments1188['arguments'] = array (
);
$arguments1188['source'] = 'Main';
$arguments1188['package'] = NULL;
$arguments1188['quantity'] = NULL;
$arguments1188['locale'] = NULL;
$arguments1188['id'] = 'sortDirection.asc';
$arguments1188['package'] = 'Neos.Media.Browser';

$output1182 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1188, $renderChildrenClosure1189, $renderingContext)]);
return $output1182;
};
$arguments1169 = array();
$arguments1169['additionalAttributes'] = NULL;
$arguments1169['data'] = NULL;
$arguments1169['class'] = NULL;
$arguments1169['dir'] = NULL;
$arguments1169['id'] = NULL;
$arguments1169['lang'] = NULL;
$arguments1169['style'] = NULL;
$arguments1169['title'] = NULL;
$arguments1169['accesskey'] = NULL;
$arguments1169['tabindex'] = NULL;
$arguments1169['onclick'] = NULL;
$arguments1169['name'] = NULL;
$arguments1169['rel'] = NULL;
$arguments1169['rev'] = NULL;
$arguments1169['target'] = NULL;
$arguments1169['action'] = NULL;
$arguments1169['arguments'] = array (
);
$arguments1169['controller'] = NULL;
$arguments1169['package'] = NULL;
$arguments1169['subpackage'] = NULL;
$arguments1169['section'] = '';
$arguments1169['format'] = '';
$arguments1169['additionalParams'] = array (
);
$arguments1169['addQueryString'] = false;
$arguments1169['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1169['useParentRequest'] = false;
$arguments1169['absolute'] = true;
$arguments1169['useMainRequest'] = false;
$arguments1169['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1172 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1171 = array();
$arguments1171['id'] = NULL;
$arguments1171['value'] = NULL;
$arguments1171['arguments'] = array (
);
$arguments1171['source'] = 'Main';
$arguments1171['package'] = NULL;
$arguments1171['quantity'] = NULL;
$arguments1171['locale'] = NULL;
$arguments1171['id'] = 'sortDirection.asc.tooltip';
$arguments1171['package'] = 'Neos.Media.Browser';
$arguments1169['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1171, $renderChildrenClosure1172, $renderingContext);
// Rendering Array
$array1173 = array();
$array1173['neos-toggle'] = 'tooltip';
$array1173['placement'] = 'left';
$arguments1169['data'] = $array1173;
// Rendering Array
$array1174 = array();
$array1174['sortDirection'] = 'ASC';
$arguments1169['arguments'] = $array1174;
// Rendering Boolean node
// Rendering Array
$array1175 = array();
$array1175['0'] = 'TRUE';

$expression1176 = function($context) {return TRUE;};
$arguments1169['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1176(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1175)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1178 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1177 = array();
$arguments1177['then'] = NULL;
$arguments1177['else'] = NULL;
$arguments1177['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1179 = array();
$array1180 = array (
);$array1179['0'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array1180);
$array1179['1'] = ' === \'ASC\'';

$expression1181 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'ASC');};
$arguments1177['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1181(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1179)
					),
					$renderingContext
				);
$arguments1177['then'] = 'neos-active';
$arguments1169['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1177, $renderChildrenClosure1178, $renderingContext);

$output1086 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1169, $renderChildrenClosure1170, $renderingContext);

$output1086 .= '
                    </li>
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1191 = function() use ($renderingContext, $self) {
$output1203 = '';

$output1203 .= '<i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1205 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1204 = array();
$arguments1204['then'] = NULL;
$arguments1204['else'] = NULL;
$arguments1204['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1206 = array();
$array1207 = array (
);$array1206['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sortBy', $array1207)]);
$array1206['1'] = ' === \'Name\'';

$expression1208 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Name');};
$arguments1204['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1208(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1206)
					),
					$renderingContext
				);
$arguments1204['then'] = 'sort-alpha-down';
$arguments1204['else'] = 'sort-amount-down';

$output1203 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1204, $renderChildrenClosure1205, $renderingContext);

$output1203 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1210 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1209 = array();
$arguments1209['id'] = NULL;
$arguments1209['value'] = NULL;
$arguments1209['arguments'] = array (
);
$arguments1209['source'] = 'Main';
$arguments1209['package'] = NULL;
$arguments1209['quantity'] = NULL;
$arguments1209['locale'] = NULL;
$arguments1209['id'] = 'sortDirection.desc';
$arguments1209['package'] = 'Neos.Media.Browser';

$output1203 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1209, $renderChildrenClosure1210, $renderingContext)]);
return $output1203;
};
$arguments1190 = array();
$arguments1190['additionalAttributes'] = NULL;
$arguments1190['data'] = NULL;
$arguments1190['class'] = NULL;
$arguments1190['dir'] = NULL;
$arguments1190['id'] = NULL;
$arguments1190['lang'] = NULL;
$arguments1190['style'] = NULL;
$arguments1190['title'] = NULL;
$arguments1190['accesskey'] = NULL;
$arguments1190['tabindex'] = NULL;
$arguments1190['onclick'] = NULL;
$arguments1190['name'] = NULL;
$arguments1190['rel'] = NULL;
$arguments1190['rev'] = NULL;
$arguments1190['target'] = NULL;
$arguments1190['action'] = NULL;
$arguments1190['arguments'] = array (
);
$arguments1190['controller'] = NULL;
$arguments1190['package'] = NULL;
$arguments1190['subpackage'] = NULL;
$arguments1190['section'] = '';
$arguments1190['format'] = '';
$arguments1190['additionalParams'] = array (
);
$arguments1190['addQueryString'] = false;
$arguments1190['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1190['useParentRequest'] = false;
$arguments1190['absolute'] = true;
$arguments1190['useMainRequest'] = false;
$arguments1190['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1193 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1192 = array();
$arguments1192['id'] = NULL;
$arguments1192['value'] = NULL;
$arguments1192['arguments'] = array (
);
$arguments1192['source'] = 'Main';
$arguments1192['package'] = NULL;
$arguments1192['quantity'] = NULL;
$arguments1192['locale'] = NULL;
$arguments1192['id'] = 'sortDirection.desc.tooltip';
$arguments1192['package'] = 'Neos.Media.Browser';
$arguments1190['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1192, $renderChildrenClosure1193, $renderingContext);
// Rendering Array
$array1194 = array();
$array1194['neos-toggle'] = 'tooltip';
$array1194['placement'] = 'left';
$arguments1190['data'] = $array1194;
// Rendering Array
$array1195 = array();
$array1195['sortDirection'] = 'DESC';
$arguments1190['arguments'] = $array1195;
// Rendering Boolean node
// Rendering Array
$array1196 = array();
$array1196['0'] = 'TRUE';

$expression1197 = function($context) {return TRUE;};
$arguments1190['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1197(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1196)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1199 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1198 = array();
$arguments1198['then'] = NULL;
$arguments1198['else'] = NULL;
$arguments1198['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1200 = array();
$array1201 = array (
);$array1200['0'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array1201);
$array1200['1'] = ' === \'DESC\'';

$expression1202 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'DESC');};
$arguments1198['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1202(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1200)
					),
					$renderingContext
				);
$arguments1198['then'] = 'neos-active';
$arguments1190['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1198, $renderChildrenClosure1199, $renderingContext);

$output1086 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1190, $renderChildrenClosure1191, $renderingContext);

$output1086 .= '
                    </li>
                </ul>
            </div>
        </div>
            ';
return $output1086;
};

$output971 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1084, $renderChildrenClosure1085, $renderingContext);

$output971 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1343 = function() use ($renderingContext, $self) {
$output1365 = '';

$output1365 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1367 = function() use ($renderingContext, $self) {
$output1368 = '';

$output1368 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1370 = function() use ($renderingContext, $self) {
return '<i class="fas fa-th-list"></i>';
};
$arguments1369 = array();
$arguments1369['additionalAttributes'] = NULL;
$arguments1369['data'] = NULL;
$arguments1369['class'] = NULL;
$arguments1369['dir'] = NULL;
$arguments1369['id'] = NULL;
$arguments1369['lang'] = NULL;
$arguments1369['style'] = NULL;
$arguments1369['title'] = NULL;
$arguments1369['accesskey'] = NULL;
$arguments1369['tabindex'] = NULL;
$arguments1369['onclick'] = NULL;
$arguments1369['name'] = NULL;
$arguments1369['rel'] = NULL;
$arguments1369['rev'] = NULL;
$arguments1369['target'] = NULL;
$arguments1369['action'] = NULL;
$arguments1369['arguments'] = array (
);
$arguments1369['controller'] = NULL;
$arguments1369['package'] = NULL;
$arguments1369['subpackage'] = NULL;
$arguments1369['section'] = '';
$arguments1369['format'] = '';
$arguments1369['additionalParams'] = array (
);
$arguments1369['addQueryString'] = false;
$arguments1369['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1369['useParentRequest'] = false;
$arguments1369['absolute'] = true;
$arguments1369['useMainRequest'] = false;
$arguments1369['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1372 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1371 = array();
$arguments1371['id'] = NULL;
$arguments1371['value'] = NULL;
$arguments1371['arguments'] = array (
);
$arguments1371['source'] = 'Main';
$arguments1371['package'] = NULL;
$arguments1371['quantity'] = NULL;
$arguments1371['locale'] = NULL;
$arguments1371['id'] = 'tooltip.listView';
$arguments1371['package'] = 'Neos.Media.Browser';
$arguments1369['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1371, $renderChildrenClosure1372, $renderingContext);
// Rendering Array
$array1373 = array();
$array1373['view'] = 'List';
$arguments1369['arguments'] = $array1373;
// Rendering Boolean node
// Rendering Array
$array1374 = array();
$array1374['0'] = 'TRUE';

$expression1375 = function($context) {return TRUE;};
$arguments1369['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1375(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1374)
					),
					$renderingContext
				);
// Rendering Array
$array1376 = array();
$array1376['neos-toggle'] = 'tooltip';
$arguments1369['data'] = $array1376;

$output1368 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1369, $renderChildrenClosure1370, $renderingContext);

$output1368 .= '
            ';
return $output1368;
};
$arguments1366 = array();

$output1365 .= '';

$output1365 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1378 = function() use ($renderingContext, $self) {
$output1379 = '';

$output1379 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1381 = function() use ($renderingContext, $self) {
return '<i class="fas fa-th"></i>';
};
$arguments1380 = array();
$arguments1380['additionalAttributes'] = NULL;
$arguments1380['data'] = NULL;
$arguments1380['class'] = NULL;
$arguments1380['dir'] = NULL;
$arguments1380['id'] = NULL;
$arguments1380['lang'] = NULL;
$arguments1380['style'] = NULL;
$arguments1380['title'] = NULL;
$arguments1380['accesskey'] = NULL;
$arguments1380['tabindex'] = NULL;
$arguments1380['onclick'] = NULL;
$arguments1380['name'] = NULL;
$arguments1380['rel'] = NULL;
$arguments1380['rev'] = NULL;
$arguments1380['target'] = NULL;
$arguments1380['action'] = NULL;
$arguments1380['arguments'] = array (
);
$arguments1380['controller'] = NULL;
$arguments1380['package'] = NULL;
$arguments1380['subpackage'] = NULL;
$arguments1380['section'] = '';
$arguments1380['format'] = '';
$arguments1380['additionalParams'] = array (
);
$arguments1380['addQueryString'] = false;
$arguments1380['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1380['useParentRequest'] = false;
$arguments1380['absolute'] = true;
$arguments1380['useMainRequest'] = false;
$arguments1380['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1383 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1382 = array();
$arguments1382['id'] = NULL;
$arguments1382['value'] = NULL;
$arguments1382['arguments'] = array (
);
$arguments1382['source'] = 'Main';
$arguments1382['package'] = NULL;
$arguments1382['quantity'] = NULL;
$arguments1382['locale'] = NULL;
$arguments1382['id'] = 'tooltip.thumbnailView';
$arguments1382['package'] = 'Neos.Media.Browser';
$arguments1380['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1382, $renderChildrenClosure1383, $renderingContext);
// Rendering Array
$array1384 = array();
$array1384['view'] = 'Thumbnail';
$arguments1380['arguments'] = $array1384;
// Rendering Boolean node
// Rendering Array
$array1385 = array();
$array1385['0'] = 'TRUE';

$expression1386 = function($context) {return TRUE;};
$arguments1380['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1386(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1385)
					),
					$renderingContext
				);
// Rendering Array
$array1387 = array();
$array1387['neos-toggle'] = 'tooltip';
$arguments1380['data'] = $array1387;

$output1379 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1380, $renderChildrenClosure1381, $renderingContext);

$output1379 .= '
            ';
return $output1379;
};
$arguments1377 = array();
$arguments1377['if'] = NULL;

$output1365 .= '';

$output1365 .= '
        ';
return $output1365;
};
$arguments1342 = array();
$arguments1342['then'] = NULL;
$arguments1342['else'] = NULL;
$arguments1342['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1362 = array();
$array1363 = array (
);$array1362['0'] = $renderingContext->getVariableProvider()->getByPath('view', $array1363);
$array1362['1'] = ' === \'Thumbnail\'';

$expression1364 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Thumbnail');};
$arguments1342['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1364(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1362)
					),
					$renderingContext
				);
$arguments1342['__thenClosure'] = function() use ($renderingContext, $self) {
$output1344 = '';

$output1344 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1346 = function() use ($renderingContext, $self) {
return '<i class="fas fa-th-list"></i>';
};
$arguments1345 = array();
$arguments1345['additionalAttributes'] = NULL;
$arguments1345['data'] = NULL;
$arguments1345['class'] = NULL;
$arguments1345['dir'] = NULL;
$arguments1345['id'] = NULL;
$arguments1345['lang'] = NULL;
$arguments1345['style'] = NULL;
$arguments1345['title'] = NULL;
$arguments1345['accesskey'] = NULL;
$arguments1345['tabindex'] = NULL;
$arguments1345['onclick'] = NULL;
$arguments1345['name'] = NULL;
$arguments1345['rel'] = NULL;
$arguments1345['rev'] = NULL;
$arguments1345['target'] = NULL;
$arguments1345['action'] = NULL;
$arguments1345['arguments'] = array (
);
$arguments1345['controller'] = NULL;
$arguments1345['package'] = NULL;
$arguments1345['subpackage'] = NULL;
$arguments1345['section'] = '';
$arguments1345['format'] = '';
$arguments1345['additionalParams'] = array (
);
$arguments1345['addQueryString'] = false;
$arguments1345['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1345['useParentRequest'] = false;
$arguments1345['absolute'] = true;
$arguments1345['useMainRequest'] = false;
$arguments1345['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1348 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1347 = array();
$arguments1347['id'] = NULL;
$arguments1347['value'] = NULL;
$arguments1347['arguments'] = array (
);
$arguments1347['source'] = 'Main';
$arguments1347['package'] = NULL;
$arguments1347['quantity'] = NULL;
$arguments1347['locale'] = NULL;
$arguments1347['id'] = 'tooltip.listView';
$arguments1347['package'] = 'Neos.Media.Browser';
$arguments1345['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1347, $renderChildrenClosure1348, $renderingContext);
// Rendering Array
$array1349 = array();
$array1349['view'] = 'List';
$arguments1345['arguments'] = $array1349;
// Rendering Boolean node
// Rendering Array
$array1350 = array();
$array1350['0'] = 'TRUE';

$expression1351 = function($context) {return TRUE;};
$arguments1345['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1351(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1350)
					),
					$renderingContext
				);
// Rendering Array
$array1352 = array();
$array1352['neos-toggle'] = 'tooltip';
$arguments1345['data'] = $array1352;

$output1344 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1345, $renderChildrenClosure1346, $renderingContext);

$output1344 .= '
            ';
return $output1344;
};
$arguments1342['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1353 = '';

$output1353 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1355 = function() use ($renderingContext, $self) {
return '<i class="fas fa-th"></i>';
};
$arguments1354 = array();
$arguments1354['additionalAttributes'] = NULL;
$arguments1354['data'] = NULL;
$arguments1354['class'] = NULL;
$arguments1354['dir'] = NULL;
$arguments1354['id'] = NULL;
$arguments1354['lang'] = NULL;
$arguments1354['style'] = NULL;
$arguments1354['title'] = NULL;
$arguments1354['accesskey'] = NULL;
$arguments1354['tabindex'] = NULL;
$arguments1354['onclick'] = NULL;
$arguments1354['name'] = NULL;
$arguments1354['rel'] = NULL;
$arguments1354['rev'] = NULL;
$arguments1354['target'] = NULL;
$arguments1354['action'] = NULL;
$arguments1354['arguments'] = array (
);
$arguments1354['controller'] = NULL;
$arguments1354['package'] = NULL;
$arguments1354['subpackage'] = NULL;
$arguments1354['section'] = '';
$arguments1354['format'] = '';
$arguments1354['additionalParams'] = array (
);
$arguments1354['addQueryString'] = false;
$arguments1354['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1354['useParentRequest'] = false;
$arguments1354['absolute'] = true;
$arguments1354['useMainRequest'] = false;
$arguments1354['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1357 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1356 = array();
$arguments1356['id'] = NULL;
$arguments1356['value'] = NULL;
$arguments1356['arguments'] = array (
);
$arguments1356['source'] = 'Main';
$arguments1356['package'] = NULL;
$arguments1356['quantity'] = NULL;
$arguments1356['locale'] = NULL;
$arguments1356['id'] = 'tooltip.thumbnailView';
$arguments1356['package'] = 'Neos.Media.Browser';
$arguments1354['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1356, $renderChildrenClosure1357, $renderingContext);
// Rendering Array
$array1358 = array();
$array1358['view'] = 'Thumbnail';
$arguments1354['arguments'] = $array1358;
// Rendering Boolean node
// Rendering Array
$array1359 = array();
$array1359['0'] = 'TRUE';

$expression1360 = function($context) {return TRUE;};
$arguments1354['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1360(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1359)
					),
					$renderingContext
				);
// Rendering Array
$array1361 = array();
$array1361['neos-toggle'] = 'tooltip';
$arguments1354['data'] = $array1361;

$output1353 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1354, $renderChildrenClosure1355, $renderingContext);

$output1353 .= '
            ';
return $output1353;
};

$output971 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1342, $renderChildrenClosure1343, $renderingContext);

$output971 .= '
    </div>
';
return $output971;
};
$arguments969 = array();
$arguments969['name'] = NULL;
$arguments969['name'] = 'Options';

$output964 .= NULL;

$output964 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure1389 = function() use ($renderingContext, $self) {
$output1390 = '';

$output1390 .= '
    <form action="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure1392 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1391 = array();
$arguments1391['action'] = NULL;
$arguments1391['arguments'] = array (
);
$arguments1391['controller'] = NULL;
$arguments1391['package'] = NULL;
$arguments1391['subpackage'] = NULL;
$arguments1391['section'] = '';
$arguments1391['format'] = '';
$arguments1391['additionalParams'] = array (
);
$arguments1391['absolute'] = false;
$arguments1391['addQueryString'] = false;
$arguments1391['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1391['useParentRequest'] = false;
$arguments1391['useMainRequest'] = false;
$arguments1391['action'] = 'index';

$output1390 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments1391, $renderChildrenClosure1392, $renderingContext)]);

$output1390 .= '" method="get" class="neos-search">
        <button type="submit" title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1394 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1393 = array();
$arguments1393['id'] = NULL;
$arguments1393['value'] = NULL;
$arguments1393['arguments'] = array (
);
$arguments1393['source'] = 'Main';
$arguments1393['package'] = NULL;
$arguments1393['quantity'] = NULL;
$arguments1393['locale'] = NULL;
$arguments1393['id'] = 'search.title';
$arguments1393['package'] = 'Neos.Media.Browser';

$output1390 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1393, $renderChildrenClosure1394, $renderingContext)]);

$output1390 .= '" data-neos-toggle="tooltip"><i class="fas fa-search"></i></button>
        <div>
            <input type="search" name="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1396 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1395 = array();
$arguments1395['then'] = NULL;
$arguments1395['else'] = NULL;
$arguments1395['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1397 = array();
$array1398 = array (
);$array1397['0'] = $renderingContext->getVariableProvider()->getByPath('argumentNamespace', $array1398);

$expression1399 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1395['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1399(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1397)
					),
					$renderingContext
				);
$output1400 = '';
$array1401 = array (
);
$output1400 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('argumentNamespace', $array1401)]);

$output1400 .= '[searchTerm]';
$arguments1395['then'] = $output1400;
$arguments1395['else'] = 'searchTerm';

$output1390 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1395, $renderChildrenClosure1396, $renderingContext);

$output1390 .= '" placeholder="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1403 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1402 = array();
$arguments1402['id'] = NULL;
$arguments1402['value'] = NULL;
$arguments1402['arguments'] = array (
);
$arguments1402['source'] = 'Main';
$arguments1402['package'] = NULL;
$arguments1402['quantity'] = NULL;
$arguments1402['locale'] = NULL;
$arguments1402['id'] = 'search.placeholder';
$arguments1402['package'] = 'Neos.Media.Browser';

$output1390 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1402, $renderChildrenClosure1403, $renderingContext)]);

$output1390 .= '" value="';
$array1404 = array (
);
$output1390 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchTerm', $array1404)]);

$output1390 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1406 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1405 = array();
$arguments1405['then'] = NULL;
$arguments1405['else'] = NULL;
$arguments1405['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1407 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure1409 = function() use ($renderingContext, $self) {
$array1410 = array (
);return $renderingContext->getVariableProvider()->getByPath('tags', $array1410);
};
$arguments1408 = array();
$arguments1408['subject'] = NULL;
$renderChildrenClosure1409 = ($arguments1408['subject'] !== null) ? function() use ($arguments1408) { return $arguments1408['subject']; } : $renderChildrenClosure1409;$array1407['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments1408, $renderChildrenClosure1409, $renderingContext);
$array1407['1'] = ' <= 25';

$expression1411 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) <= 25);};
$arguments1405['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1411(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1407)
					),
					$renderingContext
				);
$arguments1405['then'] = ' autofocus="autofocus"';

$output1390 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1405, $renderChildrenClosure1406, $renderingContext);

$output1390 .= ' />
        </div>
    </form>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1413 = function() use ($renderingContext, $self) {
$output1419 = '';

$output1419 .= '
    <div class="neos-media-aside-group">
        <h2>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1421 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1420 = array();
$arguments1420['id'] = NULL;
$arguments1420['value'] = NULL;
$arguments1420['arguments'] = array (
);
$arguments1420['source'] = 'Main';
$arguments1420['package'] = NULL;
$arguments1420['quantity'] = NULL;
$arguments1420['locale'] = NULL;
$arguments1420['id'] = 'mediaSources';
$arguments1420['package'] = 'Neos.Media.Browser';

$output1419 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1420, $renderChildrenClosure1421, $renderingContext)]);

$output1419 .= '</h2>
        <ul class="neos-media-aside-list">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1423 = function() use ($renderingContext, $self) {
$output1425 = '';

$output1425 .= '
                <li>
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1427 = function() use ($renderingContext, $self) {
$output1437 = '';

$output1437 .= '
                        ';
$array1438 = array (
);
$output1437 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('assetSource.label', $array1438)]);

$output1437 .= '
                    ';
return $output1437;
};
$arguments1426 = array();
$arguments1426['additionalAttributes'] = NULL;
$arguments1426['data'] = NULL;
$arguments1426['class'] = NULL;
$arguments1426['dir'] = NULL;
$arguments1426['id'] = NULL;
$arguments1426['lang'] = NULL;
$arguments1426['style'] = NULL;
$arguments1426['title'] = NULL;
$arguments1426['accesskey'] = NULL;
$arguments1426['tabindex'] = NULL;
$arguments1426['onclick'] = NULL;
$arguments1426['name'] = NULL;
$arguments1426['rel'] = NULL;
$arguments1426['rev'] = NULL;
$arguments1426['target'] = NULL;
$arguments1426['action'] = NULL;
$arguments1426['arguments'] = array (
);
$arguments1426['controller'] = NULL;
$arguments1426['package'] = NULL;
$arguments1426['subpackage'] = NULL;
$arguments1426['section'] = '';
$arguments1426['format'] = '';
$arguments1426['additionalParams'] = array (
);
$arguments1426['addQueryString'] = false;
$arguments1426['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1426['useParentRequest'] = false;
$arguments1426['absolute'] = true;
$arguments1426['useMainRequest'] = false;
$arguments1426['action'] = 'index';
$array1428 = array (
);$arguments1426['title'] = $renderingContext->getVariableProvider()->getByPath('assetSource.label', $array1428);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1430 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1429 = array();
$arguments1429['then'] = NULL;
$arguments1429['else'] = NULL;
$arguments1429['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1431 = array();
$array1432 = array (
);$array1431['0'] = $renderingContext->getVariableProvider()->getByPath('assetSourceIdentifier', $array1432);
$array1431['1'] = ' === ';
$array1433 = array (
);$array1431['2'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.identifier', $array1433);

$expression1434 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1429['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1434(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1431)
					),
					$renderingContext
				);
$arguments1429['then'] = ' neos-active';
$arguments1426['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1429, $renderChildrenClosure1430, $renderingContext);
// Rendering Array
$array1435 = array();
$array1436 = array (
);$array1435['assetSourceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('assetSourceIdentifier', $array1436);
$arguments1426['arguments'] = $array1435;

$output1425 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1426, $renderChildrenClosure1427, $renderingContext);

$output1425 .= '
                </li>
            ';
return $output1425;
};
$arguments1422 = array();
$arguments1422['each'] = NULL;
$arguments1422['as'] = NULL;
$arguments1422['key'] = NULL;
$arguments1422['reverse'] = false;
$arguments1422['iteration'] = NULL;
$array1424 = array (
);$arguments1422['each'] = $renderingContext->getVariableProvider()->getByPath('assetSources', $array1424);
$arguments1422['key'] = 'assetSourceIdentifier';
$arguments1422['as'] = 'assetSource';

$output1419 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1422, $renderChildrenClosure1423, $renderingContext);

$output1419 .= '
        </ul>
    </div>
    ';
return $output1419;
};
$arguments1412 = array();
$arguments1412['then'] = NULL;
$arguments1412['else'] = NULL;
$arguments1412['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1414 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure1416 = function() use ($renderingContext, $self) {
$array1417 = array (
);return $renderingContext->getVariableProvider()->getByPath('assetSources', $array1417);
};
$arguments1415 = array();
$arguments1415['subject'] = NULL;
$renderChildrenClosure1416 = ($arguments1415['subject'] !== null) ? function() use ($arguments1415) { return $arguments1415['subject']; } : $renderChildrenClosure1416;$array1414['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments1415, $renderChildrenClosure1416, $renderingContext);
$array1414['1'] = ' > 1';

$expression1418 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments1412['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1418(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1414)
					),
					$renderingContext
				);
$arguments1412['__thenClosure'] = $renderChildrenClosure1413;

$output1390 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1412, $renderChildrenClosure1413, $renderingContext);

$output1390 .= '
    <div class="neos-media-aside-group">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1440 = function() use ($renderingContext, $self) {
$output1444 = '';

$output1444 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Security\IfAccessViewHelper
$renderChildrenClosure1446 = function() use ($renderingContext, $self) {
$output1466 = '';

$output1466 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1468 = function() use ($renderingContext, $self) {
$output1469 = '';

$output1469 .= '
                <h2>
                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1471 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1470 = array();
$arguments1470['id'] = NULL;
$arguments1470['value'] = NULL;
$arguments1470['arguments'] = array (
);
$arguments1470['source'] = 'Main';
$arguments1470['package'] = NULL;
$arguments1470['quantity'] = NULL;
$arguments1470['locale'] = NULL;
$arguments1470['id'] = 'collections';
$arguments1470['package'] = 'Neos.Media.Browser';

$output1469 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1470, $renderChildrenClosure1471, $renderingContext)]);

$output1469 .= '
                    <span class="neos-media-aside-list-edit-toggle neos-button" title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1473 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1472 = array();
$arguments1472['id'] = NULL;
$arguments1472['value'] = NULL;
$arguments1472['arguments'] = array (
);
$arguments1472['source'] = 'Main';
$arguments1472['package'] = NULL;
$arguments1472['quantity'] = NULL;
$arguments1472['locale'] = NULL;
$arguments1472['id'] = 'editCollections';
$arguments1472['package'] = 'Neos.Media.Browser';

$output1469 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1472, $renderChildrenClosure1473, $renderingContext)]);

$output1469 .= '" data-neos-toggle="tooltip"><i class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1475 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1474 = array();
$arguments1474['then'] = NULL;
$arguments1474['else'] = NULL;
$arguments1474['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1476 = array();
$array1477 = array (
);$array1476['0'] = $renderingContext->getVariableProvider()->getByPath('assetCollections', $array1477);

$expression1478 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1474['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1478(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1476)
					),
					$renderingContext
				);
$arguments1474['then'] = 'fas fa-pencil-alt';
$arguments1474['else'] = 'fas fa-plus';

$output1469 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1474, $renderChildrenClosure1475, $renderingContext);

$output1469 .= '"></i></span>
                </h2>
            ';
return $output1469;
};
$arguments1467 = array();

$output1466 .= '';

$output1466 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1480 = function() use ($renderingContext, $self) {
$output1481 = '';

$output1481 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1483 = function() use ($renderingContext, $self) {
$output1487 = '';

$output1487 .= '
                    <h2>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1489 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1488 = array();
$arguments1488['id'] = NULL;
$arguments1488['value'] = NULL;
$arguments1488['arguments'] = array (
);
$arguments1488['source'] = 'Main';
$arguments1488['package'] = NULL;
$arguments1488['quantity'] = NULL;
$arguments1488['locale'] = NULL;
$arguments1488['id'] = 'collections';
$arguments1488['package'] = 'Neos.Media.Browser';

$output1487 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1488, $renderChildrenClosure1489, $renderingContext)]);

$output1487 .= '</h2>
                ';
return $output1487;
};
$arguments1482 = array();
$arguments1482['then'] = NULL;
$arguments1482['else'] = NULL;
$arguments1482['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1484 = array();
$array1485 = array (
);$array1484['0'] = $renderingContext->getVariableProvider()->getByPath('assetCollections', $array1485);

$expression1486 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1482['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1486(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1484)
					),
					$renderingContext
				);
$arguments1482['__thenClosure'] = $renderChildrenClosure1483;

$output1481 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1482, $renderChildrenClosure1483, $renderingContext);

$output1481 .= '
            ';
return $output1481;
};
$arguments1479 = array();
$arguments1479['if'] = NULL;

$output1466 .= '';

$output1466 .= '
        ';
return $output1466;
};
$arguments1445 = array();
$arguments1445['then'] = NULL;
$arguments1445['else'] = NULL;
$arguments1445['condition'] = false;
$arguments1445['privilegeTarget'] = NULL;
$arguments1445['parameters'] = array (
);
$arguments1445['privilegeTarget'] = 'Neos.Media.Browser:ManageAssetCollections';
$arguments1445['__thenClosure'] = function() use ($renderingContext, $self) {
$output1447 = '';

$output1447 .= '
                <h2>
                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1449 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1448 = array();
$arguments1448['id'] = NULL;
$arguments1448['value'] = NULL;
$arguments1448['arguments'] = array (
);
$arguments1448['source'] = 'Main';
$arguments1448['package'] = NULL;
$arguments1448['quantity'] = NULL;
$arguments1448['locale'] = NULL;
$arguments1448['id'] = 'collections';
$arguments1448['package'] = 'Neos.Media.Browser';

$output1447 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1448, $renderChildrenClosure1449, $renderingContext)]);

$output1447 .= '
                    <span class="neos-media-aside-list-edit-toggle neos-button" title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1451 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1450 = array();
$arguments1450['id'] = NULL;
$arguments1450['value'] = NULL;
$arguments1450['arguments'] = array (
);
$arguments1450['source'] = 'Main';
$arguments1450['package'] = NULL;
$arguments1450['quantity'] = NULL;
$arguments1450['locale'] = NULL;
$arguments1450['id'] = 'editCollections';
$arguments1450['package'] = 'Neos.Media.Browser';

$output1447 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1450, $renderChildrenClosure1451, $renderingContext)]);

$output1447 .= '" data-neos-toggle="tooltip"><i class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1453 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1452 = array();
$arguments1452['then'] = NULL;
$arguments1452['else'] = NULL;
$arguments1452['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1454 = array();
$array1455 = array (
);$array1454['0'] = $renderingContext->getVariableProvider()->getByPath('assetCollections', $array1455);

$expression1456 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1452['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1456(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1454)
					),
					$renderingContext
				);
$arguments1452['then'] = 'fas fa-pencil-alt';
$arguments1452['else'] = 'fas fa-plus';

$output1447 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1452, $renderChildrenClosure1453, $renderingContext);

$output1447 .= '"></i></span>
                </h2>
            ';
return $output1447;
};
$arguments1445['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1457 = '';

$output1457 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1459 = function() use ($renderingContext, $self) {
$output1463 = '';

$output1463 .= '
                    <h2>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1465 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1464 = array();
$arguments1464['id'] = NULL;
$arguments1464['value'] = NULL;
$arguments1464['arguments'] = array (
);
$arguments1464['source'] = 'Main';
$arguments1464['package'] = NULL;
$arguments1464['quantity'] = NULL;
$arguments1464['locale'] = NULL;
$arguments1464['id'] = 'collections';
$arguments1464['package'] = 'Neos.Media.Browser';

$output1463 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1464, $renderChildrenClosure1465, $renderingContext)]);

$output1463 .= '</h2>
                ';
return $output1463;
};
$arguments1458 = array();
$arguments1458['then'] = NULL;
$arguments1458['else'] = NULL;
$arguments1458['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1460 = array();
$array1461 = array (
);$array1460['0'] = $renderingContext->getVariableProvider()->getByPath('assetCollections', $array1461);

$expression1462 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1458['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1462(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1460)
					),
					$renderingContext
				);
$arguments1458['__thenClosure'] = $renderChildrenClosure1459;

$output1457 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1458, $renderChildrenClosure1459, $renderingContext);

$output1457 .= '
            ';
return $output1457;
};

$output1444 .= Neos\FluidAdaptor\ViewHelpers\Security\IfAccessViewHelper::renderStatic($arguments1445, $renderChildrenClosure1446, $renderingContext);

$output1444 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1491 = function() use ($renderingContext, $self) {
$output1497 = '';

$output1497 .= '
            <ul class="neos-media-aside-list">
                <li>
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1499 = function() use ($renderingContext, $self) {
$output1509 = '';

$output1509 .= '
                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1511 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1510 = array();
$arguments1510['id'] = NULL;
$arguments1510['value'] = NULL;
$arguments1510['arguments'] = array (
);
$arguments1510['source'] = 'Main';
$arguments1510['package'] = NULL;
$arguments1510['quantity'] = NULL;
$arguments1510['locale'] = NULL;
$arguments1510['id'] = 'filter.all';
$arguments1510['package'] = 'Neos.Media.Browser';

$output1509 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1510, $renderChildrenClosure1511, $renderingContext)]);

$output1509 .= '
                        <span class="count">';
$array1512 = array (
);
$output1509 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('allCollectionsCount', $array1512)]);

$output1509 .= '</span>
                    ';
return $output1509;
};
$arguments1498 = array();
$arguments1498['additionalAttributes'] = NULL;
$arguments1498['data'] = NULL;
$arguments1498['class'] = NULL;
$arguments1498['dir'] = NULL;
$arguments1498['id'] = NULL;
$arguments1498['lang'] = NULL;
$arguments1498['style'] = NULL;
$arguments1498['title'] = NULL;
$arguments1498['accesskey'] = NULL;
$arguments1498['tabindex'] = NULL;
$arguments1498['onclick'] = NULL;
$arguments1498['name'] = NULL;
$arguments1498['rel'] = NULL;
$arguments1498['rev'] = NULL;
$arguments1498['target'] = NULL;
$arguments1498['action'] = NULL;
$arguments1498['arguments'] = array (
);
$arguments1498['controller'] = NULL;
$arguments1498['package'] = NULL;
$arguments1498['subpackage'] = NULL;
$arguments1498['section'] = '';
$arguments1498['format'] = '';
$arguments1498['additionalParams'] = array (
);
$arguments1498['addQueryString'] = false;
$arguments1498['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1498['useParentRequest'] = false;
$arguments1498['absolute'] = true;
$arguments1498['useMainRequest'] = false;
$arguments1498['action'] = 'index';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1501 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1500 = array();
$arguments1500['then'] = NULL;
$arguments1500['else'] = NULL;
$arguments1500['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1502 = array();
$array1503 = array (
);$array1502['0'] = $renderingContext->getVariableProvider()->getByPath('activeAssetCollection', $array1503);

$expression1504 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1500['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1504(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1502)
					),
					$renderingContext
				);
$arguments1500['else'] = ' neos-active';
$arguments1500['__thenClosure'] = $renderChildrenClosure1501;
$arguments1498['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1500, $renderChildrenClosure1501, $renderingContext);
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1506 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1505 = array();
$arguments1505['id'] = NULL;
$arguments1505['value'] = NULL;
$arguments1505['arguments'] = array (
);
$arguments1505['source'] = 'Main';
$arguments1505['package'] = NULL;
$arguments1505['quantity'] = NULL;
$arguments1505['locale'] = NULL;
$arguments1505['id'] = 'allCollections';
$arguments1505['package'] = 'Neos.Media.Browser';
$arguments1498['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1505, $renderChildrenClosure1506, $renderingContext);
// Rendering Array
$array1507 = array();
$array1508 = array (
);$array1507['view'] = $renderingContext->getVariableProvider()->getByPath('view', $array1508);
$array1507['collectionMode'] = 1;
$arguments1498['arguments'] = $array1507;

$output1497 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1498, $renderChildrenClosure1499, $renderingContext);

$output1497 .= '
                </li>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1514 = function() use ($renderingContext, $self) {
$output1516 = '';

$output1516 .= '
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1518 = function() use ($renderingContext, $self) {
$output1535 = '';

$output1535 .= '
                            ';
$array1536 = array (
);
$output1535 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('assetCollection.object.title', $array1536)]);

$output1535 .= '
                            <span class="count">';
$array1537 = array (
);
$output1535 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('assetCollection.count', $array1537)]);

$output1535 .= '</span>
                        ';
return $output1535;
};
$arguments1517 = array();
$arguments1517['additionalAttributes'] = NULL;
$arguments1517['data'] = NULL;
$arguments1517['class'] = NULL;
$arguments1517['dir'] = NULL;
$arguments1517['id'] = NULL;
$arguments1517['lang'] = NULL;
$arguments1517['style'] = NULL;
$arguments1517['title'] = NULL;
$arguments1517['accesskey'] = NULL;
$arguments1517['tabindex'] = NULL;
$arguments1517['onclick'] = NULL;
$arguments1517['name'] = NULL;
$arguments1517['rel'] = NULL;
$arguments1517['rev'] = NULL;
$arguments1517['target'] = NULL;
$arguments1517['action'] = NULL;
$arguments1517['arguments'] = array (
);
$arguments1517['controller'] = NULL;
$arguments1517['package'] = NULL;
$arguments1517['subpackage'] = NULL;
$arguments1517['section'] = '';
$arguments1517['format'] = '';
$arguments1517['additionalParams'] = array (
);
$arguments1517['addQueryString'] = false;
$arguments1517['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1517['useParentRequest'] = false;
$arguments1517['absolute'] = true;
$arguments1517['useMainRequest'] = false;
$arguments1517['action'] = 'index';
$array1519 = array (
);$arguments1517['title'] = $renderingContext->getVariableProvider()->getByPath('assetCollection.object.title', $array1519);
$output1520 = '';

$output1520 .= 'droppable-assetcollection';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1522 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1521 = array();
$arguments1521['then'] = NULL;
$arguments1521['else'] = NULL;
$arguments1521['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1523 = array();
$array1524 = array (
);$array1523['0'] = $renderingContext->getVariableProvider()->getByPath('assetCollection.object', $array1524);
$array1523['1'] = ' === ';
$array1525 = array (
);$array1523['2'] = $renderingContext->getVariableProvider()->getByPath('activeAssetCollection', $array1525);

$expression1526 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1521['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1526(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1523)
					),
					$renderingContext
				);
$arguments1521['then'] = ' neos-active';

$output1520 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1521, $renderChildrenClosure1522, $renderingContext);
$arguments1517['class'] = $output1520;
// Rendering Array
$array1527 = array();
$array1528 = array (
);$array1527['view'] = $renderingContext->getVariableProvider()->getByPath('view', $array1528);
$array1529 = array (
);$array1527['assetCollection'] = $renderingContext->getVariableProvider()->getByPath('assetCollection.object', $array1529);
$arguments1517['arguments'] = $array1527;
// Rendering Array
$array1530 = array();
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Format\IdentifierViewHelper
$renderChildrenClosure1532 = function() use ($renderingContext, $self) {
$array1534 = array (
);return $renderingContext->getVariableProvider()->getByPath('assetCollection.object', $array1534);
};
$arguments1531 = array();
$arguments1531['value'] = NULL;
$value1533 = ($arguments1531['value'] !== null ? $arguments1531['value'] : $renderChildrenClosure1532());
if (!is_object($value1533) && $value1533 !== null) { throw new \Neos\FluidAdaptor\Core\ViewHelper\Exception('f:format.identifier expects an object, ' . gettype($value1533) . ' given.', 1337700024); }
$array1530['assetcollection-identifier'] = $value1533 === null ? null : $renderingContext->getObjectManager()->get(\Neos\Flow\Persistence\PersistenceManagerInterface::class)->getIdentifierByObject($value1533);
$arguments1517['data'] = $array1530;

$output1516 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1517, $renderChildrenClosure1518, $renderingContext);

$output1516 .= '
                        <div class="neos-sidelist-edit-actions">
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1539 = function() use ($renderingContext, $self) {
return '<i class="fas fa-pencil-alt"></i>';
};
$arguments1538 = array();
$arguments1538['additionalAttributes'] = NULL;
$arguments1538['data'] = NULL;
$arguments1538['class'] = NULL;
$arguments1538['dir'] = NULL;
$arguments1538['id'] = NULL;
$arguments1538['lang'] = NULL;
$arguments1538['style'] = NULL;
$arguments1538['title'] = NULL;
$arguments1538['accesskey'] = NULL;
$arguments1538['tabindex'] = NULL;
$arguments1538['onclick'] = NULL;
$arguments1538['name'] = NULL;
$arguments1538['rel'] = NULL;
$arguments1538['rev'] = NULL;
$arguments1538['target'] = NULL;
$arguments1538['action'] = NULL;
$arguments1538['arguments'] = array (
);
$arguments1538['controller'] = NULL;
$arguments1538['package'] = NULL;
$arguments1538['subpackage'] = NULL;
$arguments1538['section'] = '';
$arguments1538['format'] = '';
$arguments1538['additionalParams'] = array (
);
$arguments1538['addQueryString'] = false;
$arguments1538['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1538['useParentRequest'] = false;
$arguments1538['absolute'] = true;
$arguments1538['useMainRequest'] = false;
$arguments1538['class'] = 'neos-button';
$arguments1538['action'] = 'editAssetCollection';
// Rendering Array
$array1540 = array();
$array1541 = array (
);$array1540['assetCollection'] = $renderingContext->getVariableProvider()->getByPath('assetCollection.object', $array1541);
$arguments1538['arguments'] = $array1540;
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1543 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1542 = array();
$arguments1542['id'] = NULL;
$arguments1542['value'] = NULL;
$arguments1542['arguments'] = array (
);
$arguments1542['source'] = 'Main';
$arguments1542['package'] = NULL;
$arguments1542['quantity'] = NULL;
$arguments1542['locale'] = NULL;
$arguments1542['id'] = 'editCollection';
$arguments1542['package'] = 'Neos.Media.Browser';
$arguments1538['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1542, $renderChildrenClosure1543, $renderingContext);
// Rendering Array
$array1544 = array();
$array1544['neos-toggle'] = 'tooltip';
$arguments1538['data'] = $array1544;

$output1516 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1538, $renderChildrenClosure1539, $renderingContext);

$output1516 .= '
                            <button type="submit" class="neos-button-danger" data-modal="delete-assetcollection-modal" data-object-identifier="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Format\IdentifierViewHelper
$renderChildrenClosure1546 = function() use ($renderingContext, $self) {
$array1548 = array (
);return $renderingContext->getVariableProvider()->getByPath('assetCollection.object', $array1548);
};
$arguments1545 = array();
$arguments1545['value'] = NULL;
$value1547 = ($arguments1545['value'] !== null ? $arguments1545['value'] : $renderChildrenClosure1546());
if (!is_object($value1547) && $value1547 !== null) { throw new \Neos\FluidAdaptor\Core\ViewHelper\Exception('f:format.identifier expects an object, ' . gettype($value1547) . ' given.', 1337700024); }

$output1516 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$value1547 === null ? null : $renderingContext->getObjectManager()->get(\Neos\Flow\Persistence\PersistenceManagerInterface::class)->getIdentifierByObject($value1547)]);

$output1516 .= '" data-label="';
$array1549 = array (
);
$output1516 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('assetCollection.object.title', $array1549)]);

$output1516 .= '" title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1551 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1550 = array();
$arguments1550['id'] = NULL;
$arguments1550['value'] = NULL;
$arguments1550['arguments'] = array (
);
$arguments1550['source'] = 'Main';
$arguments1550['package'] = NULL;
$arguments1550['quantity'] = NULL;
$arguments1550['locale'] = NULL;
$arguments1550['id'] = 'deleteCollection';
$arguments1550['package'] = 'Neos.Media.Browser';

$output1516 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1550, $renderChildrenClosure1551, $renderingContext)]);

$output1516 .= '" data-neos-toggle="tooltip"><i class="fas fa-trash"></i></button>
                        </div>
                    </li>
                ';
return $output1516;
};
$arguments1513 = array();
$arguments1513['each'] = NULL;
$arguments1513['as'] = NULL;
$arguments1513['key'] = NULL;
$arguments1513['reverse'] = false;
$arguments1513['iteration'] = NULL;
$array1515 = array (
);$arguments1513['each'] = $renderingContext->getVariableProvider()->getByPath('assetCollections', $array1515);
$arguments1513['as'] = 'assetCollection';

$output1497 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1513, $renderChildrenClosure1514, $renderingContext);

$output1497 .= '
            </ul>
            <div class="neos-hide" id="delete-assetcollection-modal">
                <div class="neos-modal-centered">
                    <div class="neos-modal-content">
                        <div class="neos-modal-header">
                            <button type="button" class="neos-close neos-button" data-dismiss="modal"></button>
                            <div class="neos-header">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1553 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1552 = array();
$arguments1552['id'] = NULL;
$arguments1552['value'] = NULL;
$arguments1552['arguments'] = array (
);
$arguments1552['source'] = 'Main';
$arguments1552['package'] = NULL;
$arguments1552['quantity'] = NULL;
$arguments1552['locale'] = NULL;
$arguments1552['id'] = 'message.reallyDeleteCollection';
$arguments1552['package'] = 'Neos.Media.Browser';

$output1497 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1552, $renderChildrenClosure1553, $renderingContext)]);

$output1497 .= '</div>
                            <div>
                                <div class="neos-subheader">
                                    <p>
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1555 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1554 = array();
$arguments1554['id'] = NULL;
$arguments1554['value'] = NULL;
$arguments1554['arguments'] = array (
);
$arguments1554['source'] = 'Main';
$arguments1554['package'] = NULL;
$arguments1554['quantity'] = NULL;
$arguments1554['locale'] = NULL;
$arguments1554['id'] = 'message.willDeleteCollection';
$arguments1554['package'] = 'Neos.Media.Browser';

$output1497 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1554, $renderChildrenClosure1555, $renderingContext)]);

$output1497 .= '<br />
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1557 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1556 = array();
$arguments1556['id'] = NULL;
$arguments1556['value'] = NULL;
$arguments1556['arguments'] = array (
);
$arguments1556['source'] = 'Main';
$arguments1556['package'] = NULL;
$arguments1556['quantity'] = NULL;
$arguments1556['locale'] = NULL;
$arguments1556['id'] = 'message.operationCannotBeUndone';
$arguments1556['package'] = 'Neos.Media.Browser';

$output1497 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1556, $renderChildrenClosure1557, $renderingContext)]);

$output1497 .= '
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="neos-modal-footer">
                            <a href="#" class="neos-button" data-dismiss="modal">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1559 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1558 = array();
$arguments1558['id'] = NULL;
$arguments1558['value'] = NULL;
$arguments1558['arguments'] = array (
);
$arguments1558['source'] = 'Main';
$arguments1558['package'] = NULL;
$arguments1558['quantity'] = NULL;
$arguments1558['locale'] = NULL;
$arguments1558['id'] = 'cancel';
$arguments1558['package'] = 'Neos.Neos';

$output1497 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1558, $renderChildrenClosure1559, $renderingContext)]);

$output1497 .= '</a>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure1561 = function() use ($renderingContext, $self) {
$output1562 = '';

$output1562 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure1564 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1563 = array();
$arguments1563['additionalAttributes'] = NULL;
$arguments1563['data'] = NULL;
$arguments1563['name'] = NULL;
$arguments1563['value'] = NULL;
$arguments1563['property'] = NULL;
$arguments1563['class'] = NULL;
$arguments1563['dir'] = NULL;
$arguments1563['id'] = NULL;
$arguments1563['lang'] = NULL;
$arguments1563['style'] = NULL;
$arguments1563['title'] = NULL;
$arguments1563['accesskey'] = NULL;
$arguments1563['tabindex'] = NULL;
$arguments1563['onclick'] = NULL;
$arguments1563['name'] = 'assetCollection';
$arguments1563['id'] = 'modal-form-object';

$output1562 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments1563, $renderChildrenClosure1564, $renderingContext);

$output1562 .= '
                                <button type="submit" class="neos-button neos-button-danger">
                                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1566 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1565 = array();
$arguments1565['id'] = NULL;
$arguments1565['value'] = NULL;
$arguments1565['arguments'] = array (
);
$arguments1565['source'] = 'Main';
$arguments1565['package'] = NULL;
$arguments1565['quantity'] = NULL;
$arguments1565['locale'] = NULL;
$arguments1565['id'] = 'message.confirmDeleteCollection';
$arguments1565['package'] = 'Neos.Media.Browser';

$output1562 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1565, $renderChildrenClosure1566, $renderingContext)]);

$output1562 .= '
                                </button>
                            ';
return $output1562;
};
$arguments1560 = array();
$arguments1560['additionalAttributes'] = NULL;
$arguments1560['data'] = NULL;
$arguments1560['enctype'] = NULL;
$arguments1560['method'] = NULL;
$arguments1560['name'] = NULL;
$arguments1560['onreset'] = NULL;
$arguments1560['onsubmit'] = NULL;
$arguments1560['action'] = NULL;
$arguments1560['arguments'] = array (
);
$arguments1560['controller'] = NULL;
$arguments1560['package'] = NULL;
$arguments1560['subpackage'] = NULL;
$arguments1560['object'] = NULL;
$arguments1560['section'] = '';
$arguments1560['format'] = '';
$arguments1560['additionalParams'] = array (
);
$arguments1560['absolute'] = false;
$arguments1560['addQueryString'] = false;
$arguments1560['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1560['fieldNamePrefix'] = NULL;
$arguments1560['actionUri'] = NULL;
$arguments1560['objectName'] = NULL;
$arguments1560['useParentRequest'] = false;
$arguments1560['class'] = NULL;
$arguments1560['dir'] = NULL;
$arguments1560['id'] = NULL;
$arguments1560['lang'] = NULL;
$arguments1560['style'] = NULL;
$arguments1560['title'] = NULL;
$arguments1560['accesskey'] = NULL;
$arguments1560['tabindex'] = NULL;
$arguments1560['onclick'] = NULL;
$arguments1560['action'] = 'deleteAssetCollection';
$arguments1560['class'] = 'neos-inline';

$output1497 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments1560, $renderChildrenClosure1561, $renderingContext);

$output1497 .= '
                        </div>
                    </div>
                </div>
                <div class="neos-modal-backdrop neos-in"></div>
            </div>
        ';
return $output1497;
};
$arguments1490 = array();
$arguments1490['then'] = NULL;
$arguments1490['else'] = NULL;
$arguments1490['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1492 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure1494 = function() use ($renderingContext, $self) {
$array1495 = array (
);return $renderingContext->getVariableProvider()->getByPath('assetCollections', $array1495);
};
$arguments1493 = array();
$arguments1493['subject'] = NULL;
$renderChildrenClosure1494 = ($arguments1493['subject'] !== null) ? function() use ($arguments1493) { return $arguments1493['subject']; } : $renderChildrenClosure1494;$array1492['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments1493, $renderChildrenClosure1494, $renderingContext);

$expression1496 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1490['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1496(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1492)
					),
					$renderingContext
				);
$arguments1490['__thenClosure'] = $renderChildrenClosure1491;

$output1444 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1490, $renderChildrenClosure1491, $renderingContext);

$output1444 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Security\IfAccessViewHelper
$renderChildrenClosure1568 = function() use ($renderingContext, $self) {
$output1569 = '';

$output1569 .= '
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure1571 = function() use ($renderingContext, $self) {
$output1572 = '';

$output1572 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1574 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1573 = array();
$arguments1573['additionalAttributes'] = NULL;
$arguments1573['data'] = NULL;
$arguments1573['name'] = NULL;
$arguments1573['value'] = NULL;
$arguments1573['property'] = NULL;
$arguments1573['disabled'] = false;
$arguments1573['required'] = false;
$arguments1573['maxlength'] = NULL;
$arguments1573['readonly'] = NULL;
$arguments1573['size'] = NULL;
$arguments1573['placeholder'] = NULL;
$arguments1573['autofocus'] = NULL;
$arguments1573['type'] = 'text';
$arguments1573['errorClass'] = 'f3-form-error';
$arguments1573['class'] = NULL;
$arguments1573['dir'] = NULL;
$arguments1573['id'] = NULL;
$arguments1573['lang'] = NULL;
$arguments1573['style'] = NULL;
$arguments1573['title'] = NULL;
$arguments1573['accesskey'] = NULL;
$arguments1573['tabindex'] = NULL;
$arguments1573['onclick'] = NULL;
$arguments1573['name'] = 'title';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1576 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1575 = array();
$arguments1575['id'] = NULL;
$arguments1575['value'] = NULL;
$arguments1575['arguments'] = array (
);
$arguments1575['source'] = 'Main';
$arguments1575['package'] = NULL;
$arguments1575['quantity'] = NULL;
$arguments1575['locale'] = NULL;
$arguments1575['id'] = 'newCollection.placeholder';
$arguments1575['package'] = 'Neos.Media.Browser';
$arguments1573['placeholder'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1575, $renderChildrenClosure1576, $renderingContext);

$output1572 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1573, $renderChildrenClosure1574, $renderingContext);

$output1572 .= '<br /><br />
                <button type="submit" class="neos-button neos-button-primary">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1578 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1577 = array();
$arguments1577['id'] = NULL;
$arguments1577['value'] = NULL;
$arguments1577['arguments'] = array (
);
$arguments1577['source'] = 'Main';
$arguments1577['package'] = NULL;
$arguments1577['quantity'] = NULL;
$arguments1577['locale'] = NULL;
$arguments1577['id'] = 'createCollection';
$arguments1577['package'] = 'Neos.Media.Browser';

$output1572 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1577, $renderChildrenClosure1578, $renderingContext)]);

$output1572 .= '</button>
            ';
return $output1572;
};
$arguments1570 = array();
$arguments1570['additionalAttributes'] = NULL;
$arguments1570['data'] = NULL;
$arguments1570['enctype'] = NULL;
$arguments1570['method'] = NULL;
$arguments1570['name'] = NULL;
$arguments1570['onreset'] = NULL;
$arguments1570['onsubmit'] = NULL;
$arguments1570['action'] = NULL;
$arguments1570['arguments'] = array (
);
$arguments1570['controller'] = NULL;
$arguments1570['package'] = NULL;
$arguments1570['subpackage'] = NULL;
$arguments1570['object'] = NULL;
$arguments1570['section'] = '';
$arguments1570['format'] = '';
$arguments1570['additionalParams'] = array (
);
$arguments1570['absolute'] = false;
$arguments1570['addQueryString'] = false;
$arguments1570['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1570['fieldNamePrefix'] = NULL;
$arguments1570['actionUri'] = NULL;
$arguments1570['objectName'] = NULL;
$arguments1570['useParentRequest'] = false;
$arguments1570['class'] = NULL;
$arguments1570['dir'] = NULL;
$arguments1570['id'] = NULL;
$arguments1570['lang'] = NULL;
$arguments1570['style'] = NULL;
$arguments1570['title'] = NULL;
$arguments1570['accesskey'] = NULL;
$arguments1570['tabindex'] = NULL;
$arguments1570['onclick'] = NULL;
$arguments1570['action'] = 'createAssetCollection';
$arguments1570['id'] = 'neos-assetcollections-create-form';

$output1569 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments1570, $renderChildrenClosure1571, $renderingContext);

$output1569 .= '
        ';
return $output1569;
};
$arguments1567 = array();
$arguments1567['then'] = NULL;
$arguments1567['else'] = NULL;
$arguments1567['condition'] = false;
$arguments1567['privilegeTarget'] = NULL;
$arguments1567['parameters'] = array (
);
$arguments1567['privilegeTarget'] = 'Neos.Media.Browser:ManageAssetCollections';
$arguments1567['__thenClosure'] = $renderChildrenClosure1568;

$output1444 .= Neos\FluidAdaptor\ViewHelpers\Security\IfAccessViewHelper::renderStatic($arguments1567, $renderChildrenClosure1568, $renderingContext);

$output1444 .= '
        ';
return $output1444;
};
$arguments1439 = array();
$arguments1439['then'] = NULL;
$arguments1439['else'] = NULL;
$arguments1439['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1441 = array();
$array1441['0'] = '!';
$array1442 = array (
);$array1441['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array1442);

$expression1443 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments1439['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1443(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1441)
					),
					$renderingContext
				);
$arguments1439['__thenClosure'] = $renderChildrenClosure1440;

$output1390 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1439, $renderChildrenClosure1440, $renderingContext);

$output1390 .= '
    </div>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1580 = function() use ($renderingContext, $self) {
$output1584 = '';

$output1584 .= '
    <div class="neos-media-aside-group">
        <h2>
            ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1586 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1585 = array();
$arguments1585['id'] = NULL;
$arguments1585['value'] = NULL;
$arguments1585['arguments'] = array (
);
$arguments1585['source'] = 'Main';
$arguments1585['package'] = NULL;
$arguments1585['quantity'] = NULL;
$arguments1585['locale'] = NULL;
$arguments1585['id'] = 'tags';
$arguments1585['package'] = 'Neos.Media.Browser';

$output1584 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1585, $renderChildrenClosure1586, $renderingContext)]);

$output1584 .= '
            <span class="neos-media-aside-list-edit-toggle neos-button" title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1588 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1587 = array();
$arguments1587['id'] = NULL;
$arguments1587['value'] = NULL;
$arguments1587['arguments'] = array (
);
$arguments1587['source'] = 'Main';
$arguments1587['package'] = NULL;
$arguments1587['quantity'] = NULL;
$arguments1587['locale'] = NULL;
$arguments1587['id'] = 'editTags';
$arguments1587['package'] = 'Neos.Media.Browser';

$output1584 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1587, $renderChildrenClosure1588, $renderingContext)]);

$output1584 .= '" data-neos-toggle="tooltip"><i class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1590 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1589 = array();
$arguments1589['then'] = NULL;
$arguments1589['else'] = NULL;
$arguments1589['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1591 = array();
$array1592 = array (
);$array1591['0'] = $renderingContext->getVariableProvider()->getByPath('tags', $array1592);

$expression1593 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1589['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1593(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1591)
					),
					$renderingContext
				);
$arguments1589['then'] = 'fas fa-pencil-alt';
$arguments1589['else'] = 'fas fa-plus';

$output1584 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1589, $renderChildrenClosure1590, $renderingContext);

$output1584 .= '"></i></span>
        </h2>
        <ul class="neos-media-aside-list">
            <li class="neos-media-list-all">
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1595 = function() use ($renderingContext, $self) {
$output1604 = '';

$output1604 .= '
                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1606 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1605 = array();
$arguments1605['id'] = NULL;
$arguments1605['value'] = NULL;
$arguments1605['arguments'] = array (
);
$arguments1605['source'] = 'Main';
$arguments1605['package'] = NULL;
$arguments1605['quantity'] = NULL;
$arguments1605['locale'] = NULL;
$arguments1605['id'] = 'tags.all';
$arguments1605['package'] = 'Neos.Media.Browser';

$output1604 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1605, $renderChildrenClosure1606, $renderingContext)]);

$output1604 .= '
                    <span class="count">';
$array1607 = array (
);
$output1604 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('allCount', $array1607)]);

$output1604 .= '</span>
                ';
return $output1604;
};
$arguments1594 = array();
$arguments1594['additionalAttributes'] = NULL;
$arguments1594['data'] = NULL;
$arguments1594['class'] = NULL;
$arguments1594['dir'] = NULL;
$arguments1594['id'] = NULL;
$arguments1594['lang'] = NULL;
$arguments1594['style'] = NULL;
$arguments1594['title'] = NULL;
$arguments1594['accesskey'] = NULL;
$arguments1594['tabindex'] = NULL;
$arguments1594['onclick'] = NULL;
$arguments1594['name'] = NULL;
$arguments1594['rel'] = NULL;
$arguments1594['rev'] = NULL;
$arguments1594['target'] = NULL;
$arguments1594['action'] = NULL;
$arguments1594['arguments'] = array (
);
$arguments1594['controller'] = NULL;
$arguments1594['package'] = NULL;
$arguments1594['subpackage'] = NULL;
$arguments1594['section'] = '';
$arguments1594['format'] = '';
$arguments1594['additionalParams'] = array (
);
$arguments1594['addQueryString'] = false;
$arguments1594['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1594['useParentRequest'] = false;
$arguments1594['absolute'] = true;
$arguments1594['useMainRequest'] = false;
$arguments1594['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1597 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1596 = array();
$arguments1596['id'] = NULL;
$arguments1596['value'] = NULL;
$arguments1596['arguments'] = array (
);
$arguments1596['source'] = 'Main';
$arguments1596['package'] = NULL;
$arguments1596['quantity'] = NULL;
$arguments1596['locale'] = NULL;
$arguments1596['id'] = 'tags.title.all';
$arguments1596['package'] = 'Neos.Media.Browser';
$arguments1594['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1596, $renderChildrenClosure1597, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1599 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1598 = array();
$arguments1598['then'] = NULL;
$arguments1598['else'] = NULL;
$arguments1598['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1600 = array();
$array1601 = array (
);$array1600['0'] = $renderingContext->getVariableProvider()->getByPath('tagMode', $array1601);
$array1600['1'] = ' === 1';

$expression1602 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 1);};
$arguments1598['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1602(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1600)
					),
					$renderingContext
				);
$arguments1598['then'] = 'neos-active';
$arguments1594['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1598, $renderChildrenClosure1599, $renderingContext);
// Rendering Array
$array1603 = array();
$array1603['tagMode'] = 1;
$arguments1594['arguments'] = $array1603;

$output1584 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1594, $renderChildrenClosure1595, $renderingContext);

$output1584 .= '
            </li>
            <li class="neos-media-list-untagged">
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1609 = function() use ($renderingContext, $self) {
$output1618 = '';

$output1618 .= '
                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1620 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1619 = array();
$arguments1619['id'] = NULL;
$arguments1619['value'] = NULL;
$arguments1619['arguments'] = array (
);
$arguments1619['source'] = 'Main';
$arguments1619['package'] = NULL;
$arguments1619['quantity'] = NULL;
$arguments1619['locale'] = NULL;
$arguments1619['id'] = 'untagged';
$arguments1619['package'] = 'Neos.Media.Browser';

$output1618 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1619, $renderChildrenClosure1620, $renderingContext)]);

$output1618 .= '
                    <span class="count">';
$array1621 = array (
);
$output1618 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('untaggedCount', $array1621)]);

$output1618 .= '</span>
                ';
return $output1618;
};
$arguments1608 = array();
$arguments1608['additionalAttributes'] = NULL;
$arguments1608['data'] = NULL;
$arguments1608['class'] = NULL;
$arguments1608['dir'] = NULL;
$arguments1608['id'] = NULL;
$arguments1608['lang'] = NULL;
$arguments1608['style'] = NULL;
$arguments1608['title'] = NULL;
$arguments1608['accesskey'] = NULL;
$arguments1608['tabindex'] = NULL;
$arguments1608['onclick'] = NULL;
$arguments1608['name'] = NULL;
$arguments1608['rel'] = NULL;
$arguments1608['rev'] = NULL;
$arguments1608['target'] = NULL;
$arguments1608['action'] = NULL;
$arguments1608['arguments'] = array (
);
$arguments1608['controller'] = NULL;
$arguments1608['package'] = NULL;
$arguments1608['subpackage'] = NULL;
$arguments1608['section'] = '';
$arguments1608['format'] = '';
$arguments1608['additionalParams'] = array (
);
$arguments1608['addQueryString'] = false;
$arguments1608['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1608['useParentRequest'] = false;
$arguments1608['absolute'] = true;
$arguments1608['useMainRequest'] = false;
$arguments1608['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1611 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1610 = array();
$arguments1610['id'] = NULL;
$arguments1610['value'] = NULL;
$arguments1610['arguments'] = array (
);
$arguments1610['source'] = 'Main';
$arguments1610['package'] = NULL;
$arguments1610['quantity'] = NULL;
$arguments1610['locale'] = NULL;
$arguments1610['id'] = 'untaggedAssets';
$arguments1610['package'] = 'Neos.Media.Browser';
$arguments1608['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1610, $renderChildrenClosure1611, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1613 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1612 = array();
$arguments1612['then'] = NULL;
$arguments1612['else'] = NULL;
$arguments1612['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1614 = array();
$array1615 = array (
);$array1614['0'] = $renderingContext->getVariableProvider()->getByPath('tagMode', $array1615);
$array1614['1'] = ' === 2';

$expression1616 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 2);};
$arguments1612['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1616(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1614)
					),
					$renderingContext
				);
$arguments1612['then'] = 'neos-active';
$arguments1608['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1612, $renderChildrenClosure1613, $renderingContext);
// Rendering Array
$array1617 = array();
$array1617['tagMode'] = 2;
$arguments1608['arguments'] = $array1617;

$output1584 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1608, $renderChildrenClosure1609, $renderingContext);

$output1584 .= '
            </li>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1623 = function() use ($renderingContext, $self) {
$output1625 = '';

$output1625 .= '
                <li>
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1627 = function() use ($renderingContext, $self) {
$output1643 = '';

$output1643 .= '
                        ';
$array1644 = array (
);
$output1643 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tag.object.label', $array1644)]);

$output1643 .= '
                        <span class="count">';
$array1645 = array (
);
$output1643 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tag.count', $array1645)]);

$output1643 .= '</span>
                    ';
return $output1643;
};
$arguments1626 = array();
$arguments1626['additionalAttributes'] = NULL;
$arguments1626['data'] = NULL;
$arguments1626['class'] = NULL;
$arguments1626['dir'] = NULL;
$arguments1626['id'] = NULL;
$arguments1626['lang'] = NULL;
$arguments1626['style'] = NULL;
$arguments1626['title'] = NULL;
$arguments1626['accesskey'] = NULL;
$arguments1626['tabindex'] = NULL;
$arguments1626['onclick'] = NULL;
$arguments1626['name'] = NULL;
$arguments1626['rel'] = NULL;
$arguments1626['rev'] = NULL;
$arguments1626['target'] = NULL;
$arguments1626['action'] = NULL;
$arguments1626['arguments'] = array (
);
$arguments1626['controller'] = NULL;
$arguments1626['package'] = NULL;
$arguments1626['subpackage'] = NULL;
$arguments1626['section'] = '';
$arguments1626['format'] = '';
$arguments1626['additionalParams'] = array (
);
$arguments1626['addQueryString'] = false;
$arguments1626['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1626['useParentRequest'] = false;
$arguments1626['absolute'] = true;
$arguments1626['useMainRequest'] = false;
$arguments1626['action'] = 'index';
$array1628 = array (
);$arguments1626['title'] = $renderingContext->getVariableProvider()->getByPath('tag.object.label', $array1628);
$output1629 = '';

$output1629 .= 'droppable-tag';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1631 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1630 = array();
$arguments1630['then'] = NULL;
$arguments1630['else'] = NULL;
$arguments1630['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1632 = array();
$array1633 = array (
);$array1632['0'] = $renderingContext->getVariableProvider()->getByPath('tag.object', $array1633);
$array1632['1'] = ' === ';
$array1634 = array (
);$array1632['2'] = $renderingContext->getVariableProvider()->getByPath('activeTag', $array1634);

$expression1635 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1630['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1635(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1632)
					),
					$renderingContext
				);
$arguments1630['then'] = ' neos-active';

$output1629 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1630, $renderChildrenClosure1631, $renderingContext);
$arguments1626['class'] = $output1629;
// Rendering Array
$array1636 = array();
$array1637 = array (
);$array1636['tag'] = $renderingContext->getVariableProvider()->getByPath('tag.object', $array1637);
$arguments1626['arguments'] = $array1636;
// Rendering Array
$array1638 = array();
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Format\IdentifierViewHelper
$renderChildrenClosure1640 = function() use ($renderingContext, $self) {
$array1642 = array (
);return $renderingContext->getVariableProvider()->getByPath('tag.object', $array1642);
};
$arguments1639 = array();
$arguments1639['value'] = NULL;
$value1641 = ($arguments1639['value'] !== null ? $arguments1639['value'] : $renderChildrenClosure1640());
if (!is_object($value1641) && $value1641 !== null) { throw new \Neos\FluidAdaptor\Core\ViewHelper\Exception('f:format.identifier expects an object, ' . gettype($value1641) . ' given.', 1337700024); }
$array1638['tag-identifier'] = $value1641 === null ? null : $renderingContext->getObjectManager()->get(\Neos\Flow\Persistence\PersistenceManagerInterface::class)->getIdentifierByObject($value1641);
$arguments1626['data'] = $array1638;

$output1625 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1626, $renderChildrenClosure1627, $renderingContext);

$output1625 .= '
                    <div class="neos-sidelist-edit-actions">
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1647 = function() use ($renderingContext, $self) {
return '<i class="fas fa-pencil-alt"></i>';
};
$arguments1646 = array();
$arguments1646['additionalAttributes'] = NULL;
$arguments1646['data'] = NULL;
$arguments1646['class'] = NULL;
$arguments1646['dir'] = NULL;
$arguments1646['id'] = NULL;
$arguments1646['lang'] = NULL;
$arguments1646['style'] = NULL;
$arguments1646['title'] = NULL;
$arguments1646['accesskey'] = NULL;
$arguments1646['tabindex'] = NULL;
$arguments1646['onclick'] = NULL;
$arguments1646['name'] = NULL;
$arguments1646['rel'] = NULL;
$arguments1646['rev'] = NULL;
$arguments1646['target'] = NULL;
$arguments1646['action'] = NULL;
$arguments1646['arguments'] = array (
);
$arguments1646['controller'] = NULL;
$arguments1646['package'] = NULL;
$arguments1646['subpackage'] = NULL;
$arguments1646['section'] = '';
$arguments1646['format'] = '';
$arguments1646['additionalParams'] = array (
);
$arguments1646['addQueryString'] = false;
$arguments1646['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1646['useParentRequest'] = false;
$arguments1646['absolute'] = true;
$arguments1646['useMainRequest'] = false;
$arguments1646['class'] = 'neos-button';
$arguments1646['action'] = 'editTag';
// Rendering Array
$array1648 = array();
$array1649 = array (
);$array1648['tag'] = $renderingContext->getVariableProvider()->getByPath('tag.object', $array1649);
$arguments1646['arguments'] = $array1648;
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1651 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1650 = array();
$arguments1650['id'] = NULL;
$arguments1650['value'] = NULL;
$arguments1650['arguments'] = array (
);
$arguments1650['source'] = 'Main';
$arguments1650['package'] = NULL;
$arguments1650['quantity'] = NULL;
$arguments1650['locale'] = NULL;
$arguments1650['id'] = 'editTag';
$arguments1650['package'] = 'Neos.Media.Browser';
$arguments1646['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1650, $renderChildrenClosure1651, $renderingContext);
// Rendering Array
$array1652 = array();
$array1652['neos-toggle'] = 'tooltip';
$arguments1646['data'] = $array1652;

$output1625 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1646, $renderChildrenClosure1647, $renderingContext);

$output1625 .= '
                        <button class="neos-button-danger" title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1654 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1653 = array();
$arguments1653['id'] = NULL;
$arguments1653['value'] = NULL;
$arguments1653['arguments'] = array (
);
$arguments1653['source'] = 'Main';
$arguments1653['package'] = NULL;
$arguments1653['quantity'] = NULL;
$arguments1653['locale'] = NULL;
$arguments1653['id'] = 'deleteTag';
$arguments1653['package'] = 'Neos.Media.Browser';

$output1625 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1653, $renderChildrenClosure1654, $renderingContext)]);

$output1625 .= '" data-neos-toggle="tooltip" data-modal="delete-tag-modal" data-object-identifier="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Format\IdentifierViewHelper
$renderChildrenClosure1656 = function() use ($renderingContext, $self) {
$array1658 = array (
);return $renderingContext->getVariableProvider()->getByPath('tag.object', $array1658);
};
$arguments1655 = array();
$arguments1655['value'] = NULL;
$value1657 = ($arguments1655['value'] !== null ? $arguments1655['value'] : $renderChildrenClosure1656());
if (!is_object($value1657) && $value1657 !== null) { throw new \Neos\FluidAdaptor\Core\ViewHelper\Exception('f:format.identifier expects an object, ' . gettype($value1657) . ' given.', 1337700024); }

$output1625 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$value1657 === null ? null : $renderingContext->getObjectManager()->get(\Neos\Flow\Persistence\PersistenceManagerInterface::class)->getIdentifierByObject($value1657)]);

$output1625 .= '" data-label="';
$array1659 = array (
);
$output1625 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tag.object.label', $array1659)]);

$output1625 .= '"><i class="fas fa-trash"></i></button>
                    </div>
                </li>
            ';
return $output1625;
};
$arguments1622 = array();
$arguments1622['each'] = NULL;
$arguments1622['as'] = NULL;
$arguments1622['key'] = NULL;
$arguments1622['reverse'] = false;
$arguments1622['iteration'] = NULL;
$array1624 = array (
);$arguments1622['each'] = $renderingContext->getVariableProvider()->getByPath('tags', $array1624);
$arguments1622['as'] = 'tag';

$output1584 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1622, $renderChildrenClosure1623, $renderingContext);

$output1584 .= '
            <div class="neos-hide" id="delete-tag-modal">
                <div class="neos-modal-centered">
                    <div class="neos-modal-content">
                        <div class="neos-modal-header">
                            <button type="button" class="neos-close neos-button" data-dismiss="modal"></button>
                            <div class="neos-header">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1661 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1660 = array();
$arguments1660['id'] = NULL;
$arguments1660['value'] = NULL;
$arguments1660['arguments'] = array (
);
$arguments1660['source'] = 'Main';
$arguments1660['package'] = NULL;
$arguments1660['quantity'] = NULL;
$arguments1660['locale'] = NULL;
$arguments1660['id'] = 'message.reallyDeleteTag';
$arguments1660['package'] = 'Neos.Media.Browser';

$output1584 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1660, $renderChildrenClosure1661, $renderingContext)]);

$output1584 .= '</div>
                            <div>
                                <div class="neos-subheader">
                                    <p>
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1663 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1662 = array();
$arguments1662['id'] = NULL;
$arguments1662['value'] = NULL;
$arguments1662['arguments'] = array (
);
$arguments1662['source'] = 'Main';
$arguments1662['package'] = NULL;
$arguments1662['quantity'] = NULL;
$arguments1662['locale'] = NULL;
$arguments1662['id'] = 'message.willDeleteTag';
$arguments1662['package'] = 'Neos.Media.Browser';

$output1584 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1662, $renderChildrenClosure1663, $renderingContext)]);

$output1584 .= '<br />
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1665 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1664 = array();
$arguments1664['id'] = NULL;
$arguments1664['value'] = NULL;
$arguments1664['arguments'] = array (
);
$arguments1664['source'] = 'Main';
$arguments1664['package'] = NULL;
$arguments1664['quantity'] = NULL;
$arguments1664['locale'] = NULL;
$arguments1664['id'] = 'message.operationCannotBeUndone';
$arguments1664['package'] = 'Neos.Media.Browser';

$output1584 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1664, $renderChildrenClosure1665, $renderingContext)]);

$output1584 .= '
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="neos-modal-footer">
                            <a href="#" class="neos-button" data-dismiss="modal">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1667 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1666 = array();
$arguments1666['id'] = NULL;
$arguments1666['value'] = NULL;
$arguments1666['arguments'] = array (
);
$arguments1666['source'] = 'Main';
$arguments1666['package'] = NULL;
$arguments1666['quantity'] = NULL;
$arguments1666['locale'] = NULL;
$arguments1666['id'] = 'cancel';
$arguments1666['package'] = 'Neos.Neos';

$output1584 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1666, $renderChildrenClosure1667, $renderingContext)]);

$output1584 .= '</a>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure1669 = function() use ($renderingContext, $self) {
$output1670 = '';

$output1670 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure1672 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1671 = array();
$arguments1671['additionalAttributes'] = NULL;
$arguments1671['data'] = NULL;
$arguments1671['name'] = NULL;
$arguments1671['value'] = NULL;
$arguments1671['property'] = NULL;
$arguments1671['class'] = NULL;
$arguments1671['dir'] = NULL;
$arguments1671['id'] = NULL;
$arguments1671['lang'] = NULL;
$arguments1671['style'] = NULL;
$arguments1671['title'] = NULL;
$arguments1671['accesskey'] = NULL;
$arguments1671['tabindex'] = NULL;
$arguments1671['onclick'] = NULL;
$arguments1671['name'] = 'tag';
$arguments1671['id'] = 'modal-form-object';

$output1670 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments1671, $renderChildrenClosure1672, $renderingContext);

$output1670 .= '
                                <button type="submit" class="neos-button neos-button-danger">
                                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1674 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1673 = array();
$arguments1673['id'] = NULL;
$arguments1673['value'] = NULL;
$arguments1673['arguments'] = array (
);
$arguments1673['source'] = 'Main';
$arguments1673['package'] = NULL;
$arguments1673['quantity'] = NULL;
$arguments1673['locale'] = NULL;
$arguments1673['id'] = 'message.confirmDeleteTag';
$arguments1673['package'] = 'Neos.Media.Browser';

$output1670 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1673, $renderChildrenClosure1674, $renderingContext)]);

$output1670 .= '
                                </button>
                            ';
return $output1670;
};
$arguments1668 = array();
$arguments1668['additionalAttributes'] = NULL;
$arguments1668['data'] = NULL;
$arguments1668['enctype'] = NULL;
$arguments1668['method'] = NULL;
$arguments1668['name'] = NULL;
$arguments1668['onreset'] = NULL;
$arguments1668['onsubmit'] = NULL;
$arguments1668['action'] = NULL;
$arguments1668['arguments'] = array (
);
$arguments1668['controller'] = NULL;
$arguments1668['package'] = NULL;
$arguments1668['subpackage'] = NULL;
$arguments1668['object'] = NULL;
$arguments1668['section'] = '';
$arguments1668['format'] = '';
$arguments1668['additionalParams'] = array (
);
$arguments1668['absolute'] = false;
$arguments1668['addQueryString'] = false;
$arguments1668['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1668['fieldNamePrefix'] = NULL;
$arguments1668['actionUri'] = NULL;
$arguments1668['objectName'] = NULL;
$arguments1668['useParentRequest'] = false;
$arguments1668['class'] = NULL;
$arguments1668['dir'] = NULL;
$arguments1668['id'] = NULL;
$arguments1668['lang'] = NULL;
$arguments1668['style'] = NULL;
$arguments1668['title'] = NULL;
$arguments1668['accesskey'] = NULL;
$arguments1668['tabindex'] = NULL;
$arguments1668['onclick'] = NULL;
$arguments1668['action'] = 'deleteTag';
$arguments1668['class'] = 'neos-inline';

$output1584 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments1668, $renderChildrenClosure1669, $renderingContext);

$output1584 .= '
                        </div>
                    </div>
                </div>
                <div class="neos-modal-backdrop neos-in"></div>
            </div>
        </ul>
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure1676 = function() use ($renderingContext, $self) {
$output1677 = '';

$output1677 .= '
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1679 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1678 = array();
$arguments1678['additionalAttributes'] = NULL;
$arguments1678['data'] = NULL;
$arguments1678['name'] = NULL;
$arguments1678['value'] = NULL;
$arguments1678['property'] = NULL;
$arguments1678['disabled'] = false;
$arguments1678['required'] = false;
$arguments1678['maxlength'] = NULL;
$arguments1678['readonly'] = NULL;
$arguments1678['size'] = NULL;
$arguments1678['placeholder'] = NULL;
$arguments1678['autofocus'] = NULL;
$arguments1678['type'] = 'text';
$arguments1678['errorClass'] = 'f3-form-error';
$arguments1678['class'] = NULL;
$arguments1678['dir'] = NULL;
$arguments1678['id'] = NULL;
$arguments1678['lang'] = NULL;
$arguments1678['style'] = NULL;
$arguments1678['title'] = NULL;
$arguments1678['accesskey'] = NULL;
$arguments1678['tabindex'] = NULL;
$arguments1678['onclick'] = NULL;
$arguments1678['name'] = 'label';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1681 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1680 = array();
$arguments1680['id'] = NULL;
$arguments1680['value'] = NULL;
$arguments1680['arguments'] = array (
);
$arguments1680['source'] = 'Main';
$arguments1680['package'] = NULL;
$arguments1680['quantity'] = NULL;
$arguments1680['locale'] = NULL;
$arguments1680['id'] = 'placeholder.createTag';
$arguments1680['package'] = 'Neos.Media.Browser';
$arguments1678['placeholder'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1680, $renderChildrenClosure1681, $renderingContext);

$output1677 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1678, $renderChildrenClosure1679, $renderingContext);

$output1677 .= '<br /><br />
            <button type="submit" class="neos-button neos-button-primary">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1683 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1682 = array();
$arguments1682['id'] = NULL;
$arguments1682['value'] = NULL;
$arguments1682['arguments'] = array (
);
$arguments1682['source'] = 'Main';
$arguments1682['package'] = NULL;
$arguments1682['quantity'] = NULL;
$arguments1682['locale'] = NULL;
$arguments1682['id'] = 'createTag';
$arguments1682['package'] = 'Neos.Media.Browser';

$output1677 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1682, $renderChildrenClosure1683, $renderingContext)]);

$output1677 .= '</button>
        ';
return $output1677;
};
$arguments1675 = array();
$arguments1675['additionalAttributes'] = NULL;
$arguments1675['data'] = NULL;
$arguments1675['enctype'] = NULL;
$arguments1675['method'] = NULL;
$arguments1675['name'] = NULL;
$arguments1675['onreset'] = NULL;
$arguments1675['onsubmit'] = NULL;
$arguments1675['action'] = NULL;
$arguments1675['arguments'] = array (
);
$arguments1675['controller'] = NULL;
$arguments1675['package'] = NULL;
$arguments1675['subpackage'] = NULL;
$arguments1675['object'] = NULL;
$arguments1675['section'] = '';
$arguments1675['format'] = '';
$arguments1675['additionalParams'] = array (
);
$arguments1675['absolute'] = false;
$arguments1675['addQueryString'] = false;
$arguments1675['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1675['fieldNamePrefix'] = NULL;
$arguments1675['actionUri'] = NULL;
$arguments1675['objectName'] = NULL;
$arguments1675['useParentRequest'] = false;
$arguments1675['class'] = NULL;
$arguments1675['dir'] = NULL;
$arguments1675['id'] = NULL;
$arguments1675['lang'] = NULL;
$arguments1675['style'] = NULL;
$arguments1675['title'] = NULL;
$arguments1675['accesskey'] = NULL;
$arguments1675['tabindex'] = NULL;
$arguments1675['onclick'] = NULL;
$arguments1675['action'] = 'createTag';
$arguments1675['id'] = 'neos-tags-create-form';

$output1584 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments1675, $renderChildrenClosure1676, $renderingContext);

$output1584 .= '
    </div>
    ';
return $output1584;
};
$arguments1579 = array();
$arguments1579['then'] = NULL;
$arguments1579['else'] = NULL;
$arguments1579['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1581 = array();
$array1581['0'] = '!';
$array1582 = array (
);$array1581['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array1582);

$expression1583 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments1579['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1583(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1581)
					),
					$renderingContext
				);
$arguments1579['__thenClosure'] = $renderChildrenClosure1580;

$output1390 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1579, $renderChildrenClosure1580, $renderingContext);

$output1390 .= '
';
return $output1390;
};
$arguments1388 = array();
$arguments1388['name'] = NULL;
$arguments1388['name'] = 'Sidebar';

$output964 .= NULL;

$output964 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure1685 = function() use ($renderingContext, $self) {
$output1686 = '';

$output1686 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1688 = function() use ($renderingContext, $self) {
$output1692 = '';

$output1692 .= '
    <div id="dropzone" class="neos-upload-area">
        <div title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1694 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1693 = array();
$arguments1693['id'] = NULL;
$arguments1693['value'] = NULL;
$arguments1693['arguments'] = array (
);
$arguments1693['source'] = 'Main';
$arguments1693['package'] = NULL;
$arguments1693['quantity'] = NULL;
$arguments1693['locale'] = NULL;
$arguments1693['id'] = 'maxUploadSize';
// Rendering Array
$array1695 = array();
$array1696 = array (
);$array1695['0'] = $renderingContext->getVariableProvider()->getByPath('humanReadableMaximumFileUploadSize', $array1696);
$arguments1693['arguments'] = $array1695;
$arguments1693['package'] = 'Neos.Media.Browser';

$output1692 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1693, $renderChildrenClosure1694, $renderingContext)]);

$output1692 .= '" data-neos-toggle="tooltip">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1698 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1697 = array();
$arguments1697['id'] = NULL;
$arguments1697['value'] = NULL;
$arguments1697['arguments'] = array (
);
$arguments1697['source'] = 'Main';
$arguments1697['package'] = NULL;
$arguments1697['quantity'] = NULL;
$arguments1697['locale'] = NULL;
$arguments1697['id'] = 'dropFiles';
$arguments1697['package'] = 'Neos.Media.Browser';

$output1692 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1697, $renderChildrenClosure1698, $renderingContext)]);

$output1692 .= '<i class="fas fa-arrow-down"></i><span> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1700 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1699 = array();
$arguments1699['id'] = NULL;
$arguments1699['value'] = NULL;
$arguments1699['arguments'] = array (
);
$arguments1699['source'] = 'Main';
$arguments1699['package'] = NULL;
$arguments1699['quantity'] = NULL;
$arguments1699['locale'] = NULL;
$arguments1699['id'] = 'clickToUpload';
$arguments1699['package'] = 'Neos.Media.Browser';

$output1692 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1699, $renderChildrenClosure1700, $renderingContext)]);

$output1692 .= '</span></div>
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure1702 = function() use ($renderingContext, $self) {
$output1704 = '';

$output1704 .= '
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\UploadViewHelper
$renderChildrenClosure1706 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1705 = array();
$arguments1705['additionalAttributes'] = NULL;
$arguments1705['data'] = NULL;
$arguments1705['name'] = NULL;
$arguments1705['value'] = NULL;
$arguments1705['property'] = NULL;
$arguments1705['disabled'] = false;
$arguments1705['errorClass'] = 'f3-form-error';
$arguments1705['collection'] = '';
$arguments1705['class'] = NULL;
$arguments1705['dir'] = NULL;
$arguments1705['id'] = NULL;
$arguments1705['lang'] = NULL;
$arguments1705['style'] = NULL;
$arguments1705['title'] = NULL;
$arguments1705['accesskey'] = NULL;
$arguments1705['tabindex'] = NULL;
$arguments1705['onclick'] = NULL;
$arguments1705['id'] = 'resource';
$arguments1705['property'] = 'resource';
// Rendering Array
$array1707 = array();
$array1707['required'] = 'required';
$arguments1705['additionalAttributes'] = $array1707;

$output1704 .= Neos\FluidAdaptor\ViewHelpers\Form\UploadViewHelper::renderStatic($arguments1705, $renderChildrenClosure1706, $renderingContext);

$output1704 .= '
        ';
return $output1704;
};
$arguments1701 = array();
$arguments1701['additionalAttributes'] = NULL;
$arguments1701['data'] = NULL;
$arguments1701['enctype'] = NULL;
$arguments1701['method'] = NULL;
$arguments1701['name'] = NULL;
$arguments1701['onreset'] = NULL;
$arguments1701['onsubmit'] = NULL;
$arguments1701['action'] = NULL;
$arguments1701['arguments'] = array (
);
$arguments1701['controller'] = NULL;
$arguments1701['package'] = NULL;
$arguments1701['subpackage'] = NULL;
$arguments1701['object'] = NULL;
$arguments1701['section'] = '';
$arguments1701['format'] = '';
$arguments1701['additionalParams'] = array (
);
$arguments1701['absolute'] = false;
$arguments1701['addQueryString'] = false;
$arguments1701['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1701['fieldNamePrefix'] = NULL;
$arguments1701['actionUri'] = NULL;
$arguments1701['objectName'] = NULL;
$arguments1701['useParentRequest'] = false;
$arguments1701['class'] = NULL;
$arguments1701['dir'] = NULL;
$arguments1701['id'] = NULL;
$arguments1701['lang'] = NULL;
$arguments1701['style'] = NULL;
$arguments1701['title'] = NULL;
$arguments1701['accesskey'] = NULL;
$arguments1701['tabindex'] = NULL;
$arguments1701['onclick'] = NULL;
$arguments1701['method'] = 'post';
$arguments1701['action'] = 'create';
$array1703 = array (
);$arguments1701['object'] = $renderingContext->getVariableProvider()->getByPath('asset', $array1703);
$arguments1701['objectName'] = 'asset';
$arguments1701['enctype'] = 'multipart/form-data';

$output1692 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments1701, $renderChildrenClosure1702, $renderingContext);

$output1692 .= '
    </div>
    <div id="uploader">
        <div id="filelist"></div>
    </div>
    ';
return $output1692;
};
$arguments1687 = array();
$arguments1687['then'] = NULL;
$arguments1687['else'] = NULL;
$arguments1687['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1689 = array();
$array1689['0'] = '!';
$array1690 = array (
);$array1689['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array1690);

$expression1691 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments1687['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1691(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1689)
					),
					$renderingContext
				);
$arguments1687['__thenClosure'] = $renderChildrenClosure1688;

$output1686 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1687, $renderChildrenClosure1688, $renderingContext);

$output1686 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1709 = function() use ($renderingContext, $self) {
$output1804 = '';

$output1804 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1806 = function() use ($renderingContext, $self) {
$output1807 = '';

$output1807 .= '
            <h2>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1809 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1808 = array();
$arguments1808['id'] = NULL;
$arguments1808['value'] = NULL;
$arguments1808['arguments'] = array (
);
$arguments1808['source'] = 'Main';
$arguments1808['package'] = NULL;
$arguments1808['quantity'] = NULL;
$arguments1808['locale'] = NULL;
$arguments1808['id'] = 'connectionError';
$arguments1808['package'] = 'Neos.Media.Browser';

$output1807 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1808, $renderChildrenClosure1809, $renderingContext)]);

$output1807 .= '</h2>
            <p>';
$array1810 = array (
);
$output1807 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('connectionError.message', $array1810)]);

$output1807 .= '</p>
        ';
return $output1807;
};
$arguments1805 = array();

$output1804 .= '';

$output1804 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1812 = function() use ($renderingContext, $self) {
$output1813 = '';

$output1813 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1815 = function() use ($renderingContext, $self) {
$output1858 = '';

$output1858 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1860 = function() use ($renderingContext, $self) {
$output1861 = '';

$output1861 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1863 = function() use ($renderingContext, $self) {
$output1867 = '';

$output1867 .= '
            <div class="neos-media-content-help">
                <i class="fas fa-info-circle"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1869 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1868 = array();
$arguments1868['id'] = NULL;
$arguments1868['value'] = NULL;
$arguments1868['arguments'] = array (
);
$arguments1868['source'] = 'Main';
$arguments1868['package'] = NULL;
$arguments1868['quantity'] = NULL;
$arguments1868['locale'] = NULL;
$arguments1868['id'] = 'dragHelp';
$arguments1868['package'] = 'Neos.Media.Browser';

$output1867 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1868, $renderChildrenClosure1869, $renderingContext)]);

$output1867 .= '
            </div>
                    ';
return $output1867;
};
$arguments1862 = array();
$arguments1862['then'] = NULL;
$arguments1862['else'] = NULL;
$arguments1862['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1864 = array();
$array1864['0'] = '!';
$array1865 = array (
);$array1864['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array1865);

$expression1866 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments1862['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1866(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1864)
					),
					$renderingContext
				);
$arguments1862['__thenClosure'] = $renderChildrenClosure1863;

$output1861 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1862, $renderChildrenClosure1863, $renderingContext);

$output1861 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1871 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1870 = array();
$arguments1870['section'] = NULL;
$arguments1870['partial'] = NULL;
$arguments1870['delegate'] = NULL;
$arguments1870['renderable'] = NULL;
$arguments1870['arguments'] = array (
);
$arguments1870['optional'] = false;
$arguments1870['default'] = NULL;
$arguments1870['contentAs'] = NULL;
$output1872 = '';
$array1873 = array (
);
$output1872 .= $renderingContext->getVariableProvider()->getByPath('view', $array1873);

$output1872 .= 'View';
$arguments1870['partial'] = $output1872;
// Rendering Array
$array1874 = array();
$array1875 = array (
);$array1874['assetProxies'] = $renderingContext->getVariableProvider()->getByPath('assetProxies', $array1875);
$array1876 = array (
);$array1874['activeAssetSource'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource', $array1876);
$array1877 = array (
);$array1874['activeAssetSourceSupportsSorting'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSourceSupportsSorting', $array1877);
$array1878 = array (
);$array1874['sortBy'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array1878);
$array1879 = array (
);$array1874['sortDirection'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array1879);
$arguments1870['arguments'] = $array1874;

$output1861 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1870, $renderChildrenClosure1871, $renderingContext);

$output1861 .= '

            <div class="neos-hide" id="delete-asset-modal">
                <div class="neos-modal-centered">
                    <div class="neos-modal-content">
                        <div class="neos-modal-header">
                            <button type="button" class="neos-close neos-button" data-dismiss="modal"></button>
                            <div class="neos-header">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1881 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1880 = array();
$arguments1880['id'] = NULL;
$arguments1880['value'] = NULL;
$arguments1880['arguments'] = array (
);
$arguments1880['source'] = 'Main';
$arguments1880['package'] = NULL;
$arguments1880['quantity'] = NULL;
$arguments1880['locale'] = NULL;
$arguments1880['id'] = 'message.reallyDeleteAsset';
$arguments1880['package'] = 'Neos.Media.Browser';

$output1861 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1880, $renderChildrenClosure1881, $renderingContext)]);

$output1861 .= '</div>
                            <div>
                                <div class="neos-subheader">
                                    <p>
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1883 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1882 = array();
$arguments1882['id'] = NULL;
$arguments1882['value'] = NULL;
$arguments1882['arguments'] = array (
);
$arguments1882['source'] = 'Main';
$arguments1882['package'] = NULL;
$arguments1882['quantity'] = NULL;
$arguments1882['locale'] = NULL;
$arguments1882['id'] = 'message.willBeDeleted';
$arguments1882['package'] = 'Neos.Media.Browser';

$output1861 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1882, $renderChildrenClosure1883, $renderingContext)]);

$output1861 .= '<br />
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1885 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1884 = array();
$arguments1884['id'] = NULL;
$arguments1884['value'] = NULL;
$arguments1884['arguments'] = array (
);
$arguments1884['source'] = 'Main';
$arguments1884['package'] = NULL;
$arguments1884['quantity'] = NULL;
$arguments1884['locale'] = NULL;
$arguments1884['id'] = 'message.operationCannotBeUndone';
$arguments1884['package'] = 'Neos.Media.Browser';

$output1861 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1884, $renderChildrenClosure1885, $renderingContext)]);

$output1861 .= '
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="neos-modal-footer">
                            <a href="#" class="neos-button" data-dismiss="modal">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1887 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1886 = array();
$arguments1886['id'] = NULL;
$arguments1886['value'] = NULL;
$arguments1886['arguments'] = array (
);
$arguments1886['source'] = 'Main';
$arguments1886['package'] = NULL;
$arguments1886['quantity'] = NULL;
$arguments1886['locale'] = NULL;
$arguments1886['id'] = 'cancel';
$arguments1886['package'] = 'Neos.Neos';

$output1861 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1886, $renderChildrenClosure1887, $renderingContext)]);

$output1861 .= '</a>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure1889 = function() use ($renderingContext, $self) {
$output1890 = '';

$output1890 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure1892 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1891 = array();
$arguments1891['additionalAttributes'] = NULL;
$arguments1891['data'] = NULL;
$arguments1891['name'] = NULL;
$arguments1891['value'] = NULL;
$arguments1891['property'] = NULL;
$arguments1891['class'] = NULL;
$arguments1891['dir'] = NULL;
$arguments1891['id'] = NULL;
$arguments1891['lang'] = NULL;
$arguments1891['style'] = NULL;
$arguments1891['title'] = NULL;
$arguments1891['accesskey'] = NULL;
$arguments1891['tabindex'] = NULL;
$arguments1891['onclick'] = NULL;
$arguments1891['name'] = 'asset';
$arguments1891['id'] = 'modal-form-object';

$output1890 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments1891, $renderChildrenClosure1892, $renderingContext);

$output1890 .= '
                                <button type="submit" class="neos-button neos-button-mini neos-button-danger">
                                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1894 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1893 = array();
$arguments1893['id'] = NULL;
$arguments1893['value'] = NULL;
$arguments1893['arguments'] = array (
);
$arguments1893['source'] = 'Main';
$arguments1893['package'] = NULL;
$arguments1893['quantity'] = NULL;
$arguments1893['locale'] = NULL;
$arguments1893['id'] = 'message.confirmDelete';
$arguments1893['package'] = 'Neos.Media.Browser';

$output1890 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1893, $renderChildrenClosure1894, $renderingContext)]);

$output1890 .= '
                                </button>
                            ';
return $output1890;
};
$arguments1888 = array();
$arguments1888['additionalAttributes'] = NULL;
$arguments1888['data'] = NULL;
$arguments1888['enctype'] = NULL;
$arguments1888['method'] = NULL;
$arguments1888['name'] = NULL;
$arguments1888['onreset'] = NULL;
$arguments1888['onsubmit'] = NULL;
$arguments1888['action'] = NULL;
$arguments1888['arguments'] = array (
);
$arguments1888['controller'] = NULL;
$arguments1888['package'] = NULL;
$arguments1888['subpackage'] = NULL;
$arguments1888['object'] = NULL;
$arguments1888['section'] = '';
$arguments1888['format'] = '';
$arguments1888['additionalParams'] = array (
);
$arguments1888['absolute'] = false;
$arguments1888['addQueryString'] = false;
$arguments1888['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1888['fieldNamePrefix'] = NULL;
$arguments1888['actionUri'] = NULL;
$arguments1888['objectName'] = NULL;
$arguments1888['useParentRequest'] = false;
$arguments1888['class'] = NULL;
$arguments1888['dir'] = NULL;
$arguments1888['id'] = NULL;
$arguments1888['lang'] = NULL;
$arguments1888['style'] = NULL;
$arguments1888['title'] = NULL;
$arguments1888['accesskey'] = NULL;
$arguments1888['tabindex'] = NULL;
$arguments1888['onclick'] = NULL;
$arguments1888['action'] = 'delete';
$arguments1888['method'] = 'post';
$arguments1888['class'] = 'neos-inline';

$output1861 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments1888, $renderChildrenClosure1889, $renderingContext);

$output1861 .= '
                        </div>
                    </div>
                </div>
                <div class="neos-modal-backdrop neos-in"></div>
            </div>
        ';
return $output1861;
};
$arguments1859 = array();

$output1858 .= '';

$output1858 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1896 = function() use ($renderingContext, $self) {
$output1897 = '';

$output1897 .= '
            <p>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1899 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1898 = array();
$arguments1898['id'] = NULL;
$arguments1898['value'] = NULL;
$arguments1898['arguments'] = array (
);
$arguments1898['source'] = 'Main';
$arguments1898['package'] = NULL;
$arguments1898['quantity'] = NULL;
$arguments1898['locale'] = NULL;
$arguments1898['id'] = 'noAssetsFound';
$arguments1898['package'] = 'Neos.Media.Browser';

$output1897 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1898, $renderChildrenClosure1899, $renderingContext)]);

$output1897 .= '</p>
                ';
return $output1897;
};
$arguments1895 = array();
$arguments1895['if'] = NULL;

$output1858 .= '';

$output1858 .= '
            ';
return $output1858;
};
$arguments1814 = array();
$arguments1814['then'] = NULL;
$arguments1814['else'] = NULL;
$arguments1814['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1853 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure1855 = function() use ($renderingContext, $self) {
$array1856 = array (
);return $renderingContext->getVariableProvider()->getByPath('assetProxies', $array1856);
};
$arguments1854 = array();
$arguments1854['subject'] = NULL;
$renderChildrenClosure1855 = ($arguments1854['subject'] !== null) ? function() use ($arguments1854) { return $arguments1854['subject']; } : $renderChildrenClosure1855;$array1853['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments1854, $renderChildrenClosure1855, $renderingContext);

$expression1857 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1814['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1857(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1853)
					),
					$renderingContext
				);
$arguments1814['__thenClosure'] = function() use ($renderingContext, $self) {
$output1816 = '';

$output1816 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1818 = function() use ($renderingContext, $self) {
$output1822 = '';

$output1822 .= '
            <div class="neos-media-content-help">
                <i class="fas fa-info-circle"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1824 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1823 = array();
$arguments1823['id'] = NULL;
$arguments1823['value'] = NULL;
$arguments1823['arguments'] = array (
);
$arguments1823['source'] = 'Main';
$arguments1823['package'] = NULL;
$arguments1823['quantity'] = NULL;
$arguments1823['locale'] = NULL;
$arguments1823['id'] = 'dragHelp';
$arguments1823['package'] = 'Neos.Media.Browser';

$output1822 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1823, $renderChildrenClosure1824, $renderingContext)]);

$output1822 .= '
            </div>
                    ';
return $output1822;
};
$arguments1817 = array();
$arguments1817['then'] = NULL;
$arguments1817['else'] = NULL;
$arguments1817['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1819 = array();
$array1819['0'] = '!';
$array1820 = array (
);$array1819['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array1820);

$expression1821 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments1817['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1821(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1819)
					),
					$renderingContext
				);
$arguments1817['__thenClosure'] = $renderChildrenClosure1818;

$output1816 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1817, $renderChildrenClosure1818, $renderingContext);

$output1816 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1826 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1825 = array();
$arguments1825['section'] = NULL;
$arguments1825['partial'] = NULL;
$arguments1825['delegate'] = NULL;
$arguments1825['renderable'] = NULL;
$arguments1825['arguments'] = array (
);
$arguments1825['optional'] = false;
$arguments1825['default'] = NULL;
$arguments1825['contentAs'] = NULL;
$output1827 = '';
$array1828 = array (
);
$output1827 .= $renderingContext->getVariableProvider()->getByPath('view', $array1828);

$output1827 .= 'View';
$arguments1825['partial'] = $output1827;
// Rendering Array
$array1829 = array();
$array1830 = array (
);$array1829['assetProxies'] = $renderingContext->getVariableProvider()->getByPath('assetProxies', $array1830);
$array1831 = array (
);$array1829['activeAssetSource'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource', $array1831);
$array1832 = array (
);$array1829['activeAssetSourceSupportsSorting'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSourceSupportsSorting', $array1832);
$array1833 = array (
);$array1829['sortBy'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array1833);
$array1834 = array (
);$array1829['sortDirection'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array1834);
$arguments1825['arguments'] = $array1829;

$output1816 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1825, $renderChildrenClosure1826, $renderingContext);

$output1816 .= '

            <div class="neos-hide" id="delete-asset-modal">
                <div class="neos-modal-centered">
                    <div class="neos-modal-content">
                        <div class="neos-modal-header">
                            <button type="button" class="neos-close neos-button" data-dismiss="modal"></button>
                            <div class="neos-header">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1836 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1835 = array();
$arguments1835['id'] = NULL;
$arguments1835['value'] = NULL;
$arguments1835['arguments'] = array (
);
$arguments1835['source'] = 'Main';
$arguments1835['package'] = NULL;
$arguments1835['quantity'] = NULL;
$arguments1835['locale'] = NULL;
$arguments1835['id'] = 'message.reallyDeleteAsset';
$arguments1835['package'] = 'Neos.Media.Browser';

$output1816 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1835, $renderChildrenClosure1836, $renderingContext)]);

$output1816 .= '</div>
                            <div>
                                <div class="neos-subheader">
                                    <p>
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1838 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1837 = array();
$arguments1837['id'] = NULL;
$arguments1837['value'] = NULL;
$arguments1837['arguments'] = array (
);
$arguments1837['source'] = 'Main';
$arguments1837['package'] = NULL;
$arguments1837['quantity'] = NULL;
$arguments1837['locale'] = NULL;
$arguments1837['id'] = 'message.willBeDeleted';
$arguments1837['package'] = 'Neos.Media.Browser';

$output1816 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1837, $renderChildrenClosure1838, $renderingContext)]);

$output1816 .= '<br />
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1840 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1839 = array();
$arguments1839['id'] = NULL;
$arguments1839['value'] = NULL;
$arguments1839['arguments'] = array (
);
$arguments1839['source'] = 'Main';
$arguments1839['package'] = NULL;
$arguments1839['quantity'] = NULL;
$arguments1839['locale'] = NULL;
$arguments1839['id'] = 'message.operationCannotBeUndone';
$arguments1839['package'] = 'Neos.Media.Browser';

$output1816 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1839, $renderChildrenClosure1840, $renderingContext)]);

$output1816 .= '
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="neos-modal-footer">
                            <a href="#" class="neos-button" data-dismiss="modal">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1842 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1841 = array();
$arguments1841['id'] = NULL;
$arguments1841['value'] = NULL;
$arguments1841['arguments'] = array (
);
$arguments1841['source'] = 'Main';
$arguments1841['package'] = NULL;
$arguments1841['quantity'] = NULL;
$arguments1841['locale'] = NULL;
$arguments1841['id'] = 'cancel';
$arguments1841['package'] = 'Neos.Neos';

$output1816 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1841, $renderChildrenClosure1842, $renderingContext)]);

$output1816 .= '</a>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure1844 = function() use ($renderingContext, $self) {
$output1845 = '';

$output1845 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure1847 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1846 = array();
$arguments1846['additionalAttributes'] = NULL;
$arguments1846['data'] = NULL;
$arguments1846['name'] = NULL;
$arguments1846['value'] = NULL;
$arguments1846['property'] = NULL;
$arguments1846['class'] = NULL;
$arguments1846['dir'] = NULL;
$arguments1846['id'] = NULL;
$arguments1846['lang'] = NULL;
$arguments1846['style'] = NULL;
$arguments1846['title'] = NULL;
$arguments1846['accesskey'] = NULL;
$arguments1846['tabindex'] = NULL;
$arguments1846['onclick'] = NULL;
$arguments1846['name'] = 'asset';
$arguments1846['id'] = 'modal-form-object';

$output1845 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments1846, $renderChildrenClosure1847, $renderingContext);

$output1845 .= '
                                <button type="submit" class="neos-button neos-button-mini neos-button-danger">
                                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1849 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1848 = array();
$arguments1848['id'] = NULL;
$arguments1848['value'] = NULL;
$arguments1848['arguments'] = array (
);
$arguments1848['source'] = 'Main';
$arguments1848['package'] = NULL;
$arguments1848['quantity'] = NULL;
$arguments1848['locale'] = NULL;
$arguments1848['id'] = 'message.confirmDelete';
$arguments1848['package'] = 'Neos.Media.Browser';

$output1845 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1848, $renderChildrenClosure1849, $renderingContext)]);

$output1845 .= '
                                </button>
                            ';
return $output1845;
};
$arguments1843 = array();
$arguments1843['additionalAttributes'] = NULL;
$arguments1843['data'] = NULL;
$arguments1843['enctype'] = NULL;
$arguments1843['method'] = NULL;
$arguments1843['name'] = NULL;
$arguments1843['onreset'] = NULL;
$arguments1843['onsubmit'] = NULL;
$arguments1843['action'] = NULL;
$arguments1843['arguments'] = array (
);
$arguments1843['controller'] = NULL;
$arguments1843['package'] = NULL;
$arguments1843['subpackage'] = NULL;
$arguments1843['object'] = NULL;
$arguments1843['section'] = '';
$arguments1843['format'] = '';
$arguments1843['additionalParams'] = array (
);
$arguments1843['absolute'] = false;
$arguments1843['addQueryString'] = false;
$arguments1843['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1843['fieldNamePrefix'] = NULL;
$arguments1843['actionUri'] = NULL;
$arguments1843['objectName'] = NULL;
$arguments1843['useParentRequest'] = false;
$arguments1843['class'] = NULL;
$arguments1843['dir'] = NULL;
$arguments1843['id'] = NULL;
$arguments1843['lang'] = NULL;
$arguments1843['style'] = NULL;
$arguments1843['title'] = NULL;
$arguments1843['accesskey'] = NULL;
$arguments1843['tabindex'] = NULL;
$arguments1843['onclick'] = NULL;
$arguments1843['action'] = 'delete';
$arguments1843['method'] = 'post';
$arguments1843['class'] = 'neos-inline';

$output1816 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments1843, $renderChildrenClosure1844, $renderingContext);

$output1816 .= '
                        </div>
                    </div>
                </div>
                <div class="neos-modal-backdrop neos-in"></div>
            </div>
        ';
return $output1816;
};
$arguments1814['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1850 = '';

$output1850 .= '
            <p>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1852 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1851 = array();
$arguments1851['id'] = NULL;
$arguments1851['value'] = NULL;
$arguments1851['arguments'] = array (
);
$arguments1851['source'] = 'Main';
$arguments1851['package'] = NULL;
$arguments1851['quantity'] = NULL;
$arguments1851['locale'] = NULL;
$arguments1851['id'] = 'noAssetsFound';
$arguments1851['package'] = 'Neos.Media.Browser';

$output1850 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1851, $renderChildrenClosure1852, $renderingContext)]);

$output1850 .= '</p>
                ';
return $output1850;
};

$output1813 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1814, $renderChildrenClosure1815, $renderingContext);

$output1813 .= '
        ';
return $output1813;
};
$arguments1811 = array();
$arguments1811['if'] = NULL;

$output1804 .= '';

$output1804 .= '
    ';
return $output1804;
};
$arguments1708 = array();
$arguments1708['then'] = NULL;
$arguments1708['else'] = NULL;
$arguments1708['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1801 = array();
$array1802 = array (
);$array1801['0'] = $renderingContext->getVariableProvider()->getByPath('connectionError', $array1802);

$expression1803 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1708['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1803(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1801)
					),
					$renderingContext
				);
$arguments1708['__thenClosure'] = function() use ($renderingContext, $self) {
$output1710 = '';

$output1710 .= '
            <h2>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1712 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1711 = array();
$arguments1711['id'] = NULL;
$arguments1711['value'] = NULL;
$arguments1711['arguments'] = array (
);
$arguments1711['source'] = 'Main';
$arguments1711['package'] = NULL;
$arguments1711['quantity'] = NULL;
$arguments1711['locale'] = NULL;
$arguments1711['id'] = 'connectionError';
$arguments1711['package'] = 'Neos.Media.Browser';

$output1710 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1711, $renderChildrenClosure1712, $renderingContext)]);

$output1710 .= '</h2>
            <p>';
$array1713 = array (
);
$output1710 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('connectionError.message', $array1713)]);

$output1710 .= '</p>
        ';
return $output1710;
};
$arguments1708['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1714 = '';

$output1714 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1716 = function() use ($renderingContext, $self) {
$output1759 = '';

$output1759 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1761 = function() use ($renderingContext, $self) {
$output1762 = '';

$output1762 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1764 = function() use ($renderingContext, $self) {
$output1768 = '';

$output1768 .= '
            <div class="neos-media-content-help">
                <i class="fas fa-info-circle"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1770 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1769 = array();
$arguments1769['id'] = NULL;
$arguments1769['value'] = NULL;
$arguments1769['arguments'] = array (
);
$arguments1769['source'] = 'Main';
$arguments1769['package'] = NULL;
$arguments1769['quantity'] = NULL;
$arguments1769['locale'] = NULL;
$arguments1769['id'] = 'dragHelp';
$arguments1769['package'] = 'Neos.Media.Browser';

$output1768 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1769, $renderChildrenClosure1770, $renderingContext)]);

$output1768 .= '
            </div>
                    ';
return $output1768;
};
$arguments1763 = array();
$arguments1763['then'] = NULL;
$arguments1763['else'] = NULL;
$arguments1763['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1765 = array();
$array1765['0'] = '!';
$array1766 = array (
);$array1765['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array1766);

$expression1767 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments1763['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1767(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1765)
					),
					$renderingContext
				);
$arguments1763['__thenClosure'] = $renderChildrenClosure1764;

$output1762 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1763, $renderChildrenClosure1764, $renderingContext);

$output1762 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1772 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1771 = array();
$arguments1771['section'] = NULL;
$arguments1771['partial'] = NULL;
$arguments1771['delegate'] = NULL;
$arguments1771['renderable'] = NULL;
$arguments1771['arguments'] = array (
);
$arguments1771['optional'] = false;
$arguments1771['default'] = NULL;
$arguments1771['contentAs'] = NULL;
$output1773 = '';
$array1774 = array (
);
$output1773 .= $renderingContext->getVariableProvider()->getByPath('view', $array1774);

$output1773 .= 'View';
$arguments1771['partial'] = $output1773;
// Rendering Array
$array1775 = array();
$array1776 = array (
);$array1775['assetProxies'] = $renderingContext->getVariableProvider()->getByPath('assetProxies', $array1776);
$array1777 = array (
);$array1775['activeAssetSource'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource', $array1777);
$array1778 = array (
);$array1775['activeAssetSourceSupportsSorting'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSourceSupportsSorting', $array1778);
$array1779 = array (
);$array1775['sortBy'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array1779);
$array1780 = array (
);$array1775['sortDirection'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array1780);
$arguments1771['arguments'] = $array1775;

$output1762 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1771, $renderChildrenClosure1772, $renderingContext);

$output1762 .= '

            <div class="neos-hide" id="delete-asset-modal">
                <div class="neos-modal-centered">
                    <div class="neos-modal-content">
                        <div class="neos-modal-header">
                            <button type="button" class="neos-close neos-button" data-dismiss="modal"></button>
                            <div class="neos-header">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1782 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1781 = array();
$arguments1781['id'] = NULL;
$arguments1781['value'] = NULL;
$arguments1781['arguments'] = array (
);
$arguments1781['source'] = 'Main';
$arguments1781['package'] = NULL;
$arguments1781['quantity'] = NULL;
$arguments1781['locale'] = NULL;
$arguments1781['id'] = 'message.reallyDeleteAsset';
$arguments1781['package'] = 'Neos.Media.Browser';

$output1762 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1781, $renderChildrenClosure1782, $renderingContext)]);

$output1762 .= '</div>
                            <div>
                                <div class="neos-subheader">
                                    <p>
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1784 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1783 = array();
$arguments1783['id'] = NULL;
$arguments1783['value'] = NULL;
$arguments1783['arguments'] = array (
);
$arguments1783['source'] = 'Main';
$arguments1783['package'] = NULL;
$arguments1783['quantity'] = NULL;
$arguments1783['locale'] = NULL;
$arguments1783['id'] = 'message.willBeDeleted';
$arguments1783['package'] = 'Neos.Media.Browser';

$output1762 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1783, $renderChildrenClosure1784, $renderingContext)]);

$output1762 .= '<br />
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1786 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1785 = array();
$arguments1785['id'] = NULL;
$arguments1785['value'] = NULL;
$arguments1785['arguments'] = array (
);
$arguments1785['source'] = 'Main';
$arguments1785['package'] = NULL;
$arguments1785['quantity'] = NULL;
$arguments1785['locale'] = NULL;
$arguments1785['id'] = 'message.operationCannotBeUndone';
$arguments1785['package'] = 'Neos.Media.Browser';

$output1762 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1785, $renderChildrenClosure1786, $renderingContext)]);

$output1762 .= '
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="neos-modal-footer">
                            <a href="#" class="neos-button" data-dismiss="modal">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1788 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1787 = array();
$arguments1787['id'] = NULL;
$arguments1787['value'] = NULL;
$arguments1787['arguments'] = array (
);
$arguments1787['source'] = 'Main';
$arguments1787['package'] = NULL;
$arguments1787['quantity'] = NULL;
$arguments1787['locale'] = NULL;
$arguments1787['id'] = 'cancel';
$arguments1787['package'] = 'Neos.Neos';

$output1762 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1787, $renderChildrenClosure1788, $renderingContext)]);

$output1762 .= '</a>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure1790 = function() use ($renderingContext, $self) {
$output1791 = '';

$output1791 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure1793 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1792 = array();
$arguments1792['additionalAttributes'] = NULL;
$arguments1792['data'] = NULL;
$arguments1792['name'] = NULL;
$arguments1792['value'] = NULL;
$arguments1792['property'] = NULL;
$arguments1792['class'] = NULL;
$arguments1792['dir'] = NULL;
$arguments1792['id'] = NULL;
$arguments1792['lang'] = NULL;
$arguments1792['style'] = NULL;
$arguments1792['title'] = NULL;
$arguments1792['accesskey'] = NULL;
$arguments1792['tabindex'] = NULL;
$arguments1792['onclick'] = NULL;
$arguments1792['name'] = 'asset';
$arguments1792['id'] = 'modal-form-object';

$output1791 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments1792, $renderChildrenClosure1793, $renderingContext);

$output1791 .= '
                                <button type="submit" class="neos-button neos-button-mini neos-button-danger">
                                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1795 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1794 = array();
$arguments1794['id'] = NULL;
$arguments1794['value'] = NULL;
$arguments1794['arguments'] = array (
);
$arguments1794['source'] = 'Main';
$arguments1794['package'] = NULL;
$arguments1794['quantity'] = NULL;
$arguments1794['locale'] = NULL;
$arguments1794['id'] = 'message.confirmDelete';
$arguments1794['package'] = 'Neos.Media.Browser';

$output1791 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1794, $renderChildrenClosure1795, $renderingContext)]);

$output1791 .= '
                                </button>
                            ';
return $output1791;
};
$arguments1789 = array();
$arguments1789['additionalAttributes'] = NULL;
$arguments1789['data'] = NULL;
$arguments1789['enctype'] = NULL;
$arguments1789['method'] = NULL;
$arguments1789['name'] = NULL;
$arguments1789['onreset'] = NULL;
$arguments1789['onsubmit'] = NULL;
$arguments1789['action'] = NULL;
$arguments1789['arguments'] = array (
);
$arguments1789['controller'] = NULL;
$arguments1789['package'] = NULL;
$arguments1789['subpackage'] = NULL;
$arguments1789['object'] = NULL;
$arguments1789['section'] = '';
$arguments1789['format'] = '';
$arguments1789['additionalParams'] = array (
);
$arguments1789['absolute'] = false;
$arguments1789['addQueryString'] = false;
$arguments1789['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1789['fieldNamePrefix'] = NULL;
$arguments1789['actionUri'] = NULL;
$arguments1789['objectName'] = NULL;
$arguments1789['useParentRequest'] = false;
$arguments1789['class'] = NULL;
$arguments1789['dir'] = NULL;
$arguments1789['id'] = NULL;
$arguments1789['lang'] = NULL;
$arguments1789['style'] = NULL;
$arguments1789['title'] = NULL;
$arguments1789['accesskey'] = NULL;
$arguments1789['tabindex'] = NULL;
$arguments1789['onclick'] = NULL;
$arguments1789['action'] = 'delete';
$arguments1789['method'] = 'post';
$arguments1789['class'] = 'neos-inline';

$output1762 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments1789, $renderChildrenClosure1790, $renderingContext);

$output1762 .= '
                        </div>
                    </div>
                </div>
                <div class="neos-modal-backdrop neos-in"></div>
            </div>
        ';
return $output1762;
};
$arguments1760 = array();

$output1759 .= '';

$output1759 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1797 = function() use ($renderingContext, $self) {
$output1798 = '';

$output1798 .= '
            <p>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1800 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1799 = array();
$arguments1799['id'] = NULL;
$arguments1799['value'] = NULL;
$arguments1799['arguments'] = array (
);
$arguments1799['source'] = 'Main';
$arguments1799['package'] = NULL;
$arguments1799['quantity'] = NULL;
$arguments1799['locale'] = NULL;
$arguments1799['id'] = 'noAssetsFound';
$arguments1799['package'] = 'Neos.Media.Browser';

$output1798 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1799, $renderChildrenClosure1800, $renderingContext)]);

$output1798 .= '</p>
                ';
return $output1798;
};
$arguments1796 = array();
$arguments1796['if'] = NULL;

$output1759 .= '';

$output1759 .= '
            ';
return $output1759;
};
$arguments1715 = array();
$arguments1715['then'] = NULL;
$arguments1715['else'] = NULL;
$arguments1715['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1754 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure1756 = function() use ($renderingContext, $self) {
$array1757 = array (
);return $renderingContext->getVariableProvider()->getByPath('assetProxies', $array1757);
};
$arguments1755 = array();
$arguments1755['subject'] = NULL;
$renderChildrenClosure1756 = ($arguments1755['subject'] !== null) ? function() use ($arguments1755) { return $arguments1755['subject']; } : $renderChildrenClosure1756;$array1754['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments1755, $renderChildrenClosure1756, $renderingContext);

$expression1758 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1715['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1758(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1754)
					),
					$renderingContext
				);
$arguments1715['__thenClosure'] = function() use ($renderingContext, $self) {
$output1717 = '';

$output1717 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1719 = function() use ($renderingContext, $self) {
$output1723 = '';

$output1723 .= '
            <div class="neos-media-content-help">
                <i class="fas fa-info-circle"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1725 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1724 = array();
$arguments1724['id'] = NULL;
$arguments1724['value'] = NULL;
$arguments1724['arguments'] = array (
);
$arguments1724['source'] = 'Main';
$arguments1724['package'] = NULL;
$arguments1724['quantity'] = NULL;
$arguments1724['locale'] = NULL;
$arguments1724['id'] = 'dragHelp';
$arguments1724['package'] = 'Neos.Media.Browser';

$output1723 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1724, $renderChildrenClosure1725, $renderingContext)]);

$output1723 .= '
            </div>
                    ';
return $output1723;
};
$arguments1718 = array();
$arguments1718['then'] = NULL;
$arguments1718['else'] = NULL;
$arguments1718['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1720 = array();
$array1720['0'] = '!';
$array1721 = array (
);$array1720['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array1721);

$expression1722 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments1718['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1722(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1720)
					),
					$renderingContext
				);
$arguments1718['__thenClosure'] = $renderChildrenClosure1719;

$output1717 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1718, $renderChildrenClosure1719, $renderingContext);

$output1717 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1727 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1726 = array();
$arguments1726['section'] = NULL;
$arguments1726['partial'] = NULL;
$arguments1726['delegate'] = NULL;
$arguments1726['renderable'] = NULL;
$arguments1726['arguments'] = array (
);
$arguments1726['optional'] = false;
$arguments1726['default'] = NULL;
$arguments1726['contentAs'] = NULL;
$output1728 = '';
$array1729 = array (
);
$output1728 .= $renderingContext->getVariableProvider()->getByPath('view', $array1729);

$output1728 .= 'View';
$arguments1726['partial'] = $output1728;
// Rendering Array
$array1730 = array();
$array1731 = array (
);$array1730['assetProxies'] = $renderingContext->getVariableProvider()->getByPath('assetProxies', $array1731);
$array1732 = array (
);$array1730['activeAssetSource'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource', $array1732);
$array1733 = array (
);$array1730['activeAssetSourceSupportsSorting'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSourceSupportsSorting', $array1733);
$array1734 = array (
);$array1730['sortBy'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array1734);
$array1735 = array (
);$array1730['sortDirection'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array1735);
$arguments1726['arguments'] = $array1730;

$output1717 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1726, $renderChildrenClosure1727, $renderingContext);

$output1717 .= '

            <div class="neos-hide" id="delete-asset-modal">
                <div class="neos-modal-centered">
                    <div class="neos-modal-content">
                        <div class="neos-modal-header">
                            <button type="button" class="neos-close neos-button" data-dismiss="modal"></button>
                            <div class="neos-header">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1737 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1736 = array();
$arguments1736['id'] = NULL;
$arguments1736['value'] = NULL;
$arguments1736['arguments'] = array (
);
$arguments1736['source'] = 'Main';
$arguments1736['package'] = NULL;
$arguments1736['quantity'] = NULL;
$arguments1736['locale'] = NULL;
$arguments1736['id'] = 'message.reallyDeleteAsset';
$arguments1736['package'] = 'Neos.Media.Browser';

$output1717 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1736, $renderChildrenClosure1737, $renderingContext)]);

$output1717 .= '</div>
                            <div>
                                <div class="neos-subheader">
                                    <p>
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1739 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1738 = array();
$arguments1738['id'] = NULL;
$arguments1738['value'] = NULL;
$arguments1738['arguments'] = array (
);
$arguments1738['source'] = 'Main';
$arguments1738['package'] = NULL;
$arguments1738['quantity'] = NULL;
$arguments1738['locale'] = NULL;
$arguments1738['id'] = 'message.willBeDeleted';
$arguments1738['package'] = 'Neos.Media.Browser';

$output1717 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1738, $renderChildrenClosure1739, $renderingContext)]);

$output1717 .= '<br />
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1741 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1740 = array();
$arguments1740['id'] = NULL;
$arguments1740['value'] = NULL;
$arguments1740['arguments'] = array (
);
$arguments1740['source'] = 'Main';
$arguments1740['package'] = NULL;
$arguments1740['quantity'] = NULL;
$arguments1740['locale'] = NULL;
$arguments1740['id'] = 'message.operationCannotBeUndone';
$arguments1740['package'] = 'Neos.Media.Browser';

$output1717 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1740, $renderChildrenClosure1741, $renderingContext)]);

$output1717 .= '
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="neos-modal-footer">
                            <a href="#" class="neos-button" data-dismiss="modal">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1743 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1742 = array();
$arguments1742['id'] = NULL;
$arguments1742['value'] = NULL;
$arguments1742['arguments'] = array (
);
$arguments1742['source'] = 'Main';
$arguments1742['package'] = NULL;
$arguments1742['quantity'] = NULL;
$arguments1742['locale'] = NULL;
$arguments1742['id'] = 'cancel';
$arguments1742['package'] = 'Neos.Neos';

$output1717 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1742, $renderChildrenClosure1743, $renderingContext)]);

$output1717 .= '</a>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure1745 = function() use ($renderingContext, $self) {
$output1746 = '';

$output1746 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure1748 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1747 = array();
$arguments1747['additionalAttributes'] = NULL;
$arguments1747['data'] = NULL;
$arguments1747['name'] = NULL;
$arguments1747['value'] = NULL;
$arguments1747['property'] = NULL;
$arguments1747['class'] = NULL;
$arguments1747['dir'] = NULL;
$arguments1747['id'] = NULL;
$arguments1747['lang'] = NULL;
$arguments1747['style'] = NULL;
$arguments1747['title'] = NULL;
$arguments1747['accesskey'] = NULL;
$arguments1747['tabindex'] = NULL;
$arguments1747['onclick'] = NULL;
$arguments1747['name'] = 'asset';
$arguments1747['id'] = 'modal-form-object';

$output1746 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments1747, $renderChildrenClosure1748, $renderingContext);

$output1746 .= '
                                <button type="submit" class="neos-button neos-button-mini neos-button-danger">
                                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1750 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1749 = array();
$arguments1749['id'] = NULL;
$arguments1749['value'] = NULL;
$arguments1749['arguments'] = array (
);
$arguments1749['source'] = 'Main';
$arguments1749['package'] = NULL;
$arguments1749['quantity'] = NULL;
$arguments1749['locale'] = NULL;
$arguments1749['id'] = 'message.confirmDelete';
$arguments1749['package'] = 'Neos.Media.Browser';

$output1746 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1749, $renderChildrenClosure1750, $renderingContext)]);

$output1746 .= '
                                </button>
                            ';
return $output1746;
};
$arguments1744 = array();
$arguments1744['additionalAttributes'] = NULL;
$arguments1744['data'] = NULL;
$arguments1744['enctype'] = NULL;
$arguments1744['method'] = NULL;
$arguments1744['name'] = NULL;
$arguments1744['onreset'] = NULL;
$arguments1744['onsubmit'] = NULL;
$arguments1744['action'] = NULL;
$arguments1744['arguments'] = array (
);
$arguments1744['controller'] = NULL;
$arguments1744['package'] = NULL;
$arguments1744['subpackage'] = NULL;
$arguments1744['object'] = NULL;
$arguments1744['section'] = '';
$arguments1744['format'] = '';
$arguments1744['additionalParams'] = array (
);
$arguments1744['absolute'] = false;
$arguments1744['addQueryString'] = false;
$arguments1744['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1744['fieldNamePrefix'] = NULL;
$arguments1744['actionUri'] = NULL;
$arguments1744['objectName'] = NULL;
$arguments1744['useParentRequest'] = false;
$arguments1744['class'] = NULL;
$arguments1744['dir'] = NULL;
$arguments1744['id'] = NULL;
$arguments1744['lang'] = NULL;
$arguments1744['style'] = NULL;
$arguments1744['title'] = NULL;
$arguments1744['accesskey'] = NULL;
$arguments1744['tabindex'] = NULL;
$arguments1744['onclick'] = NULL;
$arguments1744['action'] = 'delete';
$arguments1744['method'] = 'post';
$arguments1744['class'] = 'neos-inline';

$output1717 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments1744, $renderChildrenClosure1745, $renderingContext);

$output1717 .= '
                        </div>
                    </div>
                </div>
                <div class="neos-modal-backdrop neos-in"></div>
            </div>
        ';
return $output1717;
};
$arguments1715['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1751 = '';

$output1751 .= '
            <p>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1753 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1752 = array();
$arguments1752['id'] = NULL;
$arguments1752['value'] = NULL;
$arguments1752['arguments'] = array (
);
$arguments1752['source'] = 'Main';
$arguments1752['package'] = NULL;
$arguments1752['quantity'] = NULL;
$arguments1752['locale'] = NULL;
$arguments1752['id'] = 'noAssetsFound';
$arguments1752['package'] = 'Neos.Media.Browser';

$output1751 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1752, $renderChildrenClosure1753, $renderingContext)]);

$output1751 .= '</p>
                ';
return $output1751;
};

$output1714 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1715, $renderChildrenClosure1716, $renderingContext);

$output1714 .= '
        ';
return $output1714;
};

$output1686 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1708, $renderChildrenClosure1709, $renderingContext);

$output1686 .= '
';
return $output1686;
};
$arguments1684 = array();
$arguments1684['name'] = NULL;
$arguments1684['name'] = 'Content';

$output964 .= NULL;

$output964 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure1901 = function() use ($renderingContext, $self) {
$output1902 = '';

$output1902 .= '
    <script type="text/javascript" src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure1904 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1903 = array();
$arguments1903['path'] = NULL;
$arguments1903['package'] = NULL;
$arguments1903['resource'] = NULL;
$arguments1903['localize'] = true;
$arguments1903['package'] = 'Neos.Media.Browser';
$arguments1903['path'] = 'Libraries/jquery-ui/js/jquery-ui-1.10.3.custom.js';

$output1902 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments1903, $renderChildrenClosure1904, $renderingContext)]);

$output1902 .= '"></script>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1906 = function() use ($renderingContext, $self) {
$output1910 = '';

$output1910 .= '
    <script type="text/javascript">
        var uploadUrl = \'';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure1912 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1911 = array();
$arguments1911['action'] = NULL;
$arguments1911['arguments'] = array (
);
$arguments1911['controller'] = NULL;
$arguments1911['package'] = NULL;
$arguments1911['subpackage'] = NULL;
$arguments1911['section'] = '';
$arguments1911['format'] = '';
$arguments1911['additionalParams'] = array (
);
$arguments1911['absolute'] = false;
$arguments1911['addQueryString'] = false;
$arguments1911['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1911['useParentRequest'] = false;
$arguments1911['useMainRequest'] = false;
$arguments1911['action'] = 'upload';
// Rendering Array
$array1913 = array();
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Security\CsrfTokenViewHelper
$renderChildrenClosure1915 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1914 = array();
$array1913['__csrfToken'] = $renderingContext->getObjectManager()->get(\Neos\Flow\Security\Context::class)->getCsrfProtectionToken();
$arguments1911['additionalParams'] = $array1913;
// Rendering Boolean node
// Rendering Array
$array1916 = array();
$array1916['0'] = 'true';

$expression1917 = function($context) {return TRUE;};
$arguments1911['absolute'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1917(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1916)
					),
					$renderingContext
				);

$output1910 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments1911, $renderChildrenClosure1912, $renderingContext)]);

$output1910 .= '\';
        var maximumFileUploadSize = ';
$array1918 = array (
);
$output1910 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('maximumFileUploadSize', $array1918)]);

$output1910 .= ';

        if (window.parent !== window && window.parent.NeosMediaBrowserCallbacks && window.parent.NeosMediaBrowserCallbacks.refreshThumbnail) {
            window.parent.NeosMediaBrowserCallbacks.refreshThumbnail();
        }
    </script>
    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure1920 = function() use ($renderingContext, $self) {
$output1921 = '';

$output1921 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure1923 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1922 = array();
$arguments1922['additionalAttributes'] = NULL;
$arguments1922['data'] = NULL;
$arguments1922['name'] = NULL;
$arguments1922['value'] = NULL;
$arguments1922['property'] = NULL;
$arguments1922['class'] = NULL;
$arguments1922['dir'] = NULL;
$arguments1922['id'] = NULL;
$arguments1922['lang'] = NULL;
$arguments1922['style'] = NULL;
$arguments1922['title'] = NULL;
$arguments1922['accesskey'] = NULL;
$arguments1922['tabindex'] = NULL;
$arguments1922['onclick'] = NULL;
$arguments1922['name'] = 'asset[__identity]';
$arguments1922['id'] = 'tag-asset-form-asset';

$output1921 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments1922, $renderChildrenClosure1923, $renderingContext);

$output1921 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure1925 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1924 = array();
$arguments1924['additionalAttributes'] = NULL;
$arguments1924['data'] = NULL;
$arguments1924['name'] = NULL;
$arguments1924['value'] = NULL;
$arguments1924['property'] = NULL;
$arguments1924['class'] = NULL;
$arguments1924['dir'] = NULL;
$arguments1924['id'] = NULL;
$arguments1924['lang'] = NULL;
$arguments1924['style'] = NULL;
$arguments1924['title'] = NULL;
$arguments1924['accesskey'] = NULL;
$arguments1924['tabindex'] = NULL;
$arguments1924['onclick'] = NULL;
$arguments1924['name'] = 'tag[__identity]';
$arguments1924['id'] = 'tag-asset-form-tag';

$output1921 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments1924, $renderChildrenClosure1925, $renderingContext);

$output1921 .= '
    ';
return $output1921;
};
$arguments1919 = array();
$arguments1919['additionalAttributes'] = NULL;
$arguments1919['data'] = NULL;
$arguments1919['enctype'] = NULL;
$arguments1919['method'] = NULL;
$arguments1919['name'] = NULL;
$arguments1919['onreset'] = NULL;
$arguments1919['onsubmit'] = NULL;
$arguments1919['action'] = NULL;
$arguments1919['arguments'] = array (
);
$arguments1919['controller'] = NULL;
$arguments1919['package'] = NULL;
$arguments1919['subpackage'] = NULL;
$arguments1919['object'] = NULL;
$arguments1919['section'] = '';
$arguments1919['format'] = '';
$arguments1919['additionalParams'] = array (
);
$arguments1919['absolute'] = false;
$arguments1919['addQueryString'] = false;
$arguments1919['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1919['fieldNamePrefix'] = NULL;
$arguments1919['actionUri'] = NULL;
$arguments1919['objectName'] = NULL;
$arguments1919['useParentRequest'] = false;
$arguments1919['class'] = NULL;
$arguments1919['dir'] = NULL;
$arguments1919['id'] = NULL;
$arguments1919['lang'] = NULL;
$arguments1919['style'] = NULL;
$arguments1919['title'] = NULL;
$arguments1919['accesskey'] = NULL;
$arguments1919['tabindex'] = NULL;
$arguments1919['onclick'] = NULL;
$arguments1919['action'] = 'tagAsset';
$arguments1919['id'] = 'tag-asset-form';
$arguments1919['format'] = 'json';

$output1910 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments1919, $renderChildrenClosure1920, $renderingContext);

$output1910 .= '
    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure1927 = function() use ($renderingContext, $self) {
$output1928 = '';

$output1928 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure1930 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1929 = array();
$arguments1929['additionalAttributes'] = NULL;
$arguments1929['data'] = NULL;
$arguments1929['name'] = NULL;
$arguments1929['value'] = NULL;
$arguments1929['property'] = NULL;
$arguments1929['class'] = NULL;
$arguments1929['dir'] = NULL;
$arguments1929['id'] = NULL;
$arguments1929['lang'] = NULL;
$arguments1929['style'] = NULL;
$arguments1929['title'] = NULL;
$arguments1929['accesskey'] = NULL;
$arguments1929['tabindex'] = NULL;
$arguments1929['onclick'] = NULL;
$arguments1929['name'] = 'asset[__identity]';
$arguments1929['id'] = 'link-asset-to-assetcollection-form-asset';

$output1928 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments1929, $renderChildrenClosure1930, $renderingContext);

$output1928 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure1932 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1931 = array();
$arguments1931['additionalAttributes'] = NULL;
$arguments1931['data'] = NULL;
$arguments1931['name'] = NULL;
$arguments1931['value'] = NULL;
$arguments1931['property'] = NULL;
$arguments1931['class'] = NULL;
$arguments1931['dir'] = NULL;
$arguments1931['id'] = NULL;
$arguments1931['lang'] = NULL;
$arguments1931['style'] = NULL;
$arguments1931['title'] = NULL;
$arguments1931['accesskey'] = NULL;
$arguments1931['tabindex'] = NULL;
$arguments1931['onclick'] = NULL;
$arguments1931['name'] = 'assetCollection[__identity]';
$arguments1931['id'] = 'link-asset-to-assetcollection-form-assetcollection';

$output1928 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments1931, $renderChildrenClosure1932, $renderingContext);

$output1928 .= '
    ';
return $output1928;
};
$arguments1926 = array();
$arguments1926['additionalAttributes'] = NULL;
$arguments1926['data'] = NULL;
$arguments1926['enctype'] = NULL;
$arguments1926['method'] = NULL;
$arguments1926['name'] = NULL;
$arguments1926['onreset'] = NULL;
$arguments1926['onsubmit'] = NULL;
$arguments1926['action'] = NULL;
$arguments1926['arguments'] = array (
);
$arguments1926['controller'] = NULL;
$arguments1926['package'] = NULL;
$arguments1926['subpackage'] = NULL;
$arguments1926['object'] = NULL;
$arguments1926['section'] = '';
$arguments1926['format'] = '';
$arguments1926['additionalParams'] = array (
);
$arguments1926['absolute'] = false;
$arguments1926['addQueryString'] = false;
$arguments1926['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1926['fieldNamePrefix'] = NULL;
$arguments1926['actionUri'] = NULL;
$arguments1926['objectName'] = NULL;
$arguments1926['useParentRequest'] = false;
$arguments1926['class'] = NULL;
$arguments1926['dir'] = NULL;
$arguments1926['id'] = NULL;
$arguments1926['lang'] = NULL;
$arguments1926['style'] = NULL;
$arguments1926['title'] = NULL;
$arguments1926['accesskey'] = NULL;
$arguments1926['tabindex'] = NULL;
$arguments1926['onclick'] = NULL;
$arguments1926['action'] = 'addAssetToCollection';
$arguments1926['id'] = 'link-asset-to-assetcollection-form';
$arguments1926['format'] = 'json';

$output1910 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments1926, $renderChildrenClosure1927, $renderingContext);

$output1910 .= '
    <script type="text/javascript" src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure1934 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1933 = array();
$arguments1933['path'] = NULL;
$arguments1933['package'] = NULL;
$arguments1933['resource'] = NULL;
$arguments1933['localize'] = true;
$arguments1933['package'] = 'Neos.Media.Browser';
$arguments1933['path'] = 'Libraries/plupload/plupload.full.js';

$output1910 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments1933, $renderChildrenClosure1934, $renderingContext)]);

$output1910 .= '"></script>
    <script type="text/javascript" src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure1936 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1935 = array();
$arguments1935['path'] = NULL;
$arguments1935['package'] = NULL;
$arguments1935['resource'] = NULL;
$arguments1935['localize'] = true;
$arguments1935['package'] = 'Neos.Media.Browser';
$arguments1935['path'] = 'JavaScript/upload.js';

$output1910 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments1935, $renderChildrenClosure1936, $renderingContext)]);

$output1910 .= '"></script>
    <script type="text/javascript" src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure1938 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1937 = array();
$arguments1937['path'] = NULL;
$arguments1937['package'] = NULL;
$arguments1937['resource'] = NULL;
$arguments1937['localize'] = true;
$arguments1937['package'] = 'Neos.Media.Browser';
$arguments1937['path'] = 'JavaScript/collections-and-tagging.js';

$output1910 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments1937, $renderChildrenClosure1938, $renderingContext)]);

$output1910 .= '"></script>
    ';
return $output1910;
};
$arguments1905 = array();
$arguments1905['then'] = NULL;
$arguments1905['else'] = NULL;
$arguments1905['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1907 = array();
$array1907['0'] = '!';
$array1908 = array (
);$array1907['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array1908);

$expression1909 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments1905['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1909(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1907)
					),
					$renderingContext
				);
$arguments1905['__thenClosure'] = $renderChildrenClosure1906;

$output1902 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1905, $renderChildrenClosure1906, $renderingContext);

$output1902 .= '
    <script type="text/javascript" src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure1940 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1939 = array();
$arguments1939['path'] = NULL;
$arguments1939['package'] = NULL;
$arguments1939['resource'] = NULL;
$arguments1939['localize'] = true;
$arguments1939['package'] = 'Neos.Media.Browser';
$arguments1939['path'] = 'JavaScript/select.js';

$output1902 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments1939, $renderChildrenClosure1940, $renderingContext)]);

$output1902 .= '"></script>
';
return $output1902;
};
$arguments1900 = array();
$arguments1900['name'] = NULL;
$arguments1900['name'] = 'Scripts';

$output964 .= NULL;

$output964 .= '
';

return $output964;
}


}
#0             601311    