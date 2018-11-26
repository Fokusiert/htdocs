<?php 
class Module_Administration_Dimension_action_index_b52673e7855e44724f14d93574a37e8382a90c66 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'BackendSubModule';
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
  'xlink' => NULL,
  'neos' => 
  array (
    0 => 'Neos\\Neos\\ViewHelpers',
  ),
));
}

/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
          ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['id'] = NULL;
$arguments17['value'] = NULL;
$arguments17['arguments'] = array (
);
$arguments17['source'] = 'Main';
$arguments17['package'] = NULL;
$arguments17['quantity'] = NULL;
$arguments17['locale'] = NULL;
$output19 = '';

$output19 .= 'dimensions.';
$array20 = array (
);
$output19 .= $renderingContext->getVariableProvider()->getByPath('availableGraphType', $array20);

$output19 .= '.short';
$arguments17['id'] = $output19;
$arguments17['source'] = 'Modules';

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output16 .= '
        ';
return $output16;
};
$arguments5 = array();
$arguments5['additionalAttributes'] = NULL;
$arguments5['data'] = NULL;
$arguments5['class'] = NULL;
$arguments5['dir'] = NULL;
$arguments5['id'] = NULL;
$arguments5['lang'] = NULL;
$arguments5['style'] = NULL;
$arguments5['title'] = NULL;
$arguments5['accesskey'] = NULL;
$arguments5['tabindex'] = NULL;
$arguments5['onclick'] = NULL;
$arguments5['name'] = NULL;
$arguments5['rel'] = NULL;
$arguments5['rev'] = NULL;
$arguments5['target'] = NULL;
$arguments5['action'] = NULL;
$arguments5['arguments'] = array (
);
$arguments5['controller'] = NULL;
$arguments5['package'] = NULL;
$arguments5['subpackage'] = NULL;
$arguments5['section'] = '';
$arguments5['format'] = '';
$arguments5['additionalParams'] = array (
);
$arguments5['addQueryString'] = false;
$arguments5['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments5['useParentRequest'] = false;
$arguments5['absolute'] = true;
$arguments5['useMainRequest'] = false;
$arguments5['action'] = 'index';
// Rendering Array
$array7 = array();
$array8 = array (
);$array7['type'] = $renderingContext->getVariableProvider()->getByPath('availableGraphType', $array8);
$arguments5['arguments'] = $array7;
$output9 = '';

$output9 .= 'neos-button';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array12 = array();
$array13 = array (
);$array12['0'] = $renderingContext->getVariableProvider()->getByPath('availableGraphType', $array13);
$array12['1'] = ' == ';
$array14 = array (
);$array12['2'] = $renderingContext->getVariableProvider()->getByPath('type', $array14);

$expression15 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)
					),
					$renderingContext
				);
$arguments10['then'] = ' neos-active';

$output9 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);
$arguments5['class'] = $output9;

$output4 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
    ';
return $output4;
};
$arguments1 = array();
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$array3 = array (
);$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('availableGraphTypes', $array3);
$arguments1['as'] = 'availableGraphType';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    <br /><br />
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
        <legend>';
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
$output29 = '';

$output29 .= 'dimensions.';
$array30 = array (
);
$output29 .= $renderingContext->getVariableProvider()->getByPath('type', $array30);

$output29 .= '.legend';
$arguments27['id'] = $output29;
$arguments27['source'] = 'Modules';

$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);

$output26 .= '</legend>
        <p>';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['id'] = NULL;
$arguments34['value'] = NULL;
$arguments34['arguments'] = array (
);
$arguments34['source'] = 'Main';
$arguments34['package'] = NULL;
$arguments34['quantity'] = NULL;
$arguments34['locale'] = NULL;
$output36 = '';

$output36 .= 'dimensions.';
$array37 = array (
);
$output36 .= $renderingContext->getVariableProvider()->getByPath('type', $array37);

$output36 .= '.description';
$arguments34['id'] = $output36;
$arguments34['source'] = 'Modules';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);
};
$arguments31 = array();
$arguments31['value'] = NULL;
$value33 = ($arguments31['value'] !== null ? $arguments31['value'] : $renderChildrenClosure32());

$output26 .= nl2br($value33);

$output26 .= '</p>
        <div id="graph" style="position: relative; width: 100%; height: 100%; overflow:scroll">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['section'] = NULL;
$arguments38['partial'] = NULL;
$arguments38['delegate'] = NULL;
$arguments38['renderable'] = NULL;
$arguments38['arguments'] = array (
);
$arguments38['optional'] = false;
$arguments38['default'] = NULL;
$arguments38['contentAs'] = NULL;
$array40 = array (
);$arguments38['section'] = $renderingContext->getVariableProvider()->getByPath('type', $array40);
$arguments38['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output26 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output26 .= '
        </div>
    ';
return $output26;
};
$arguments21 = array();
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$arguments21['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['0'] = $renderingContext->getVariableProvider()->getByPath('graph', $array24);

$expression25 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments21['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression25(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)
					),
					$renderingContext
				);
$arguments21['__thenClosure'] = $renderChildrenClosure22;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output0 .= '

    <script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['path'] = NULL;
$arguments42['package'] = NULL;
$arguments42['resource'] = NULL;
$arguments42['localize'] = true;
$arguments42['path'] = 'resource://Neos.Neos/Public/JavaScript/Module/Administration/Dimension.js';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext)]);

$output0 .= '"></script>
';

return $output0;
}
/**
 * section intraDimension
 */
public function section_59e3eb9c596645bea4fd7d4b299ea046cd4693c8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output44 = '';

$output44 .= '
    <svg id="graph" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" baseProfile="full" width="';
$array45 = array (
);
$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('graph.width', $array45)]);

$output44 .= 'px" height="';
$array46 = array (
);
$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('graph.height', $array46)]);

$output44 .= 'px" style="position:relative; padding-top:50px;">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
                <circle cx="';
$array55 = array (
);
$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.x', $array55)]);

$output54 .= '" cy="';
$array56 = array (
);
$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.y', $array56)]);

$output54 .= '" r="40" stroke="#FFFFFF" stroke-width="2" fill="';
$array57 = array (
);
$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.color', $array57)]);

$output54 .= '" />
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
);$arguments51['each'] = $renderingContext->getVariableProvider()->getByPath('dimension.nodes', $array53);
$arguments51['as'] = 'node';

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
                <line x1="';
$array62 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('edge.x1', $array62)]);

$output61 .= '" y1="';
$array63 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('edge.y1', $array63)]);

$output61 .= '" x2="';
$array64 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('edge.x2', $array64)]);

$output61 .= '" y2="';
$array65 = array (
);
$output61 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('edge.y2', $array65)]);

$output61 .= '" stroke-width="2" stroke="#FFFFFF"/>
            ';
return $output61;
};
$arguments58 = array();
$arguments58['each'] = NULL;
$arguments58['as'] = NULL;
$arguments58['key'] = NULL;
$arguments58['reverse'] = false;
$arguments58['iteration'] = NULL;
$array60 = array (
);$arguments58['each'] = $renderingContext->getVariableProvider()->getByPath('dimension.edges', $array60);
$arguments58['as'] = 'edge';

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

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
);$arguments47['each'] = $renderingContext->getVariableProvider()->getByPath('graph.dimensions', $array49);
$arguments47['as'] = 'dimension';

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output44 .= '
    </svg>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
        <h2 style="position: absolute; top: 10px; left:';
$array70 = array (
);
$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dimension.offset', $array70)]);

$output69 .= 'px;">';
$array71 = array (
);
$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dimension.label', $array71)]);

$output69 .= '</h2>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
            <div style="position: absolute; top: ';
$array76 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.textY', $array76)]);

$output75 .= 'px; left:';
$array77 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.textX', $array77)]);

$output75 .= 'px; width: 80px; text-align: center; pointer-events: none;">';
$array78 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.name', $array78)]);

$output75 .= '</div>
        ';
return $output75;
};
$arguments72 = array();
$arguments72['each'] = NULL;
$arguments72['as'] = NULL;
$arguments72['key'] = NULL;
$arguments72['reverse'] = false;
$arguments72['iteration'] = NULL;
$array74 = array (
);$arguments72['each'] = $renderingContext->getVariableProvider()->getByPath('dimension.nodes', $array74);
$arguments72['as'] = 'node';

$output69 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output69 .= '
    ';
return $output69;
};
$arguments66 = array();
$arguments66['each'] = NULL;
$arguments66['as'] = NULL;
$arguments66['key'] = NULL;
$arguments66['reverse'] = false;
$arguments66['iteration'] = NULL;
$array68 = array (
);$arguments66['each'] = $renderingContext->getVariableProvider()->getByPath('graph.dimensions', $array68);
$arguments66['as'] = 'dimension';

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output44 .= '
  ';

return $output44;
}
/**
 * section interDimension
 */
public function section_6c5df480e9e4ee5b4ab3254363cb11ef12aaedb4(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output79 = '';

$output79 .= '
    <svg id="graph" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" baseProfile="full" width="';
$array80 = array (
);
$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('graph.width', $array80)]);

$output79 .= 'px" height="';
$array81 = array (
);
$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('graph.height', $array81)]);

$output79 .= 'px" style="position:relative; padding-top:50px;">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
          <line x1="';
$array86 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('edge.x1', $array86)]);

$output85 .= '" y1="';
$array87 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('edge.y1', $array87)]);

$output85 .= '" x2="';
$array88 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('edge.x2', $array88)]);

$output85 .= '" y2="';
$array89 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('edge.y2', $array89)]);

$output85 .= '" stroke-width="2" stroke="';
$array90 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('edge.color', $array90)]);

$output85 .= '" opacity="';
$array91 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('edge.opacity', $array91)]);

$output85 .= '" style="';
$array92 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('edge.style', $array92)]);

$output85 .= '" data-from="';
$array93 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('edge.from', $array93)]);

$output85 .= '" data-to="';
$array94 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('edge.to', $array94)]);

$output85 .= '"/>
      ';
return $output85;
};
$arguments82 = array();
$arguments82['each'] = NULL;
$arguments82['as'] = NULL;
$arguments82['key'] = NULL;
$arguments82['reverse'] = false;
$arguments82['iteration'] = NULL;
$array84 = array (
);$arguments82['each'] = $renderingContext->getVariableProvider()->getByPath('graph.edges', $array84);
$arguments82['as'] = 'edge';

$output79 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output79 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
$output129 = '';

$output129 .= '
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '
                        <circle id="';
$array135 = array (
);
$output134 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.id', $array135)]);

$output134 .= '" cx="';
$array136 = array (
);
$output134 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.x', $array136)]);

$output134 .= '" cy="';
$array137 = array (
);
$output134 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.y', $array137)]);

$output134 .= '" r="40" stroke="#FFFFFF" stroke-width="2" fill="';
$array138 = array (
);
$output134 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.color', $array138)]);

$output134 .= '" />
                    ';
return $output134;
};
$arguments130 = array();
$arguments130['additionalAttributes'] = NULL;
$arguments130['data'] = NULL;
$arguments130['class'] = NULL;
$arguments130['dir'] = NULL;
$arguments130['id'] = NULL;
$arguments130['lang'] = NULL;
$arguments130['style'] = NULL;
$arguments130['title'] = NULL;
$arguments130['accesskey'] = NULL;
$arguments130['tabindex'] = NULL;
$arguments130['onclick'] = NULL;
$arguments130['name'] = NULL;
$arguments130['rel'] = NULL;
$arguments130['rev'] = NULL;
$arguments130['target'] = NULL;
$arguments130['action'] = NULL;
$arguments130['arguments'] = array (
);
$arguments130['controller'] = NULL;
$arguments130['package'] = NULL;
$arguments130['subpackage'] = NULL;
$arguments130['section'] = '';
$arguments130['format'] = '';
$arguments130['additionalParams'] = array (
);
$arguments130['addQueryString'] = false;
$arguments130['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments130['useParentRequest'] = false;
$arguments130['absolute'] = true;
$arguments130['useMainRequest'] = false;
$arguments130['action'] = 'index';
// Rendering Array
$array132 = array();
$array133 = array (
);$array132['type'] = $renderingContext->getVariableProvider()->getByPath('type', $array133);
$arguments130['arguments'] = $array132;

$output129 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output129 .= '
                ';
return $output129;
};
$arguments127 = array();

$output126 .= '';

$output126 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$output141 = '';

$output141 .= '
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$output147 = '';

$output147 .= '
                        <circle id="';
$array148 = array (
);
$output147 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.id', $array148)]);

$output147 .= '" cx="';
$array149 = array (
);
$output147 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.x', $array149)]);

$output147 .= '" cy="';
$array150 = array (
);
$output147 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.y', $array150)]);

$output147 .= '" r="40" stroke="#FFFFFF" stroke-width="2" fill="';
$array151 = array (
);
$output147 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.color', $array151)]);

$output147 .= '" />
                    ';
return $output147;
};
$arguments142 = array();
$arguments142['additionalAttributes'] = NULL;
$arguments142['data'] = NULL;
$arguments142['class'] = NULL;
$arguments142['dir'] = NULL;
$arguments142['id'] = NULL;
$arguments142['lang'] = NULL;
$arguments142['style'] = NULL;
$arguments142['title'] = NULL;
$arguments142['accesskey'] = NULL;
$arguments142['tabindex'] = NULL;
$arguments142['onclick'] = NULL;
$arguments142['name'] = NULL;
$arguments142['rel'] = NULL;
$arguments142['rev'] = NULL;
$arguments142['target'] = NULL;
$arguments142['action'] = NULL;
$arguments142['arguments'] = array (
);
$arguments142['controller'] = NULL;
$arguments142['package'] = NULL;
$arguments142['subpackage'] = NULL;
$arguments142['section'] = '';
$arguments142['format'] = '';
$arguments142['additionalParams'] = array (
);
$arguments142['addQueryString'] = false;
$arguments142['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments142['useParentRequest'] = false;
$arguments142['absolute'] = true;
$arguments142['useMainRequest'] = false;
$arguments142['action'] = 'index';
// Rendering Array
$array144 = array();
$array145 = array (
);$array144['type'] = $renderingContext->getVariableProvider()->getByPath('type', $array145);
$array146 = array (
);$array144['subgraphIdentifier'] = $renderingContext->getVariableProvider()->getByPath('subgraphIdentifier', $array146);
$arguments142['arguments'] = $array144;

$output141 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output141 .= '
                ';
return $output141;
};
$arguments139 = array();
$arguments139['if'] = NULL;

$output126 .= '';

$output126 .= '
            ';
return $output126;
};
$arguments99 = array();
$arguments99['then'] = NULL;
$arguments99['else'] = NULL;
$arguments99['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array122 = array();
$array123 = array (
);$array122['0'] = $renderingContext->getVariableProvider()->getByPath('selectedSubgraphIdentifier', $array123);
$array122['1'] = ' == ';
$array124 = array (
);$array122['2'] = $renderingContext->getVariableProvider()->getByPath('subgraphIdentifier', $array124);

$expression125 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments99['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression125(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array122)
					),
					$renderingContext
				);
$arguments99['__thenClosure'] = function() use ($renderingContext, $self) {
$output101 = '';

$output101 .= '
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
                        <circle id="';
$array107 = array (
);
$output106 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.id', $array107)]);

$output106 .= '" cx="';
$array108 = array (
);
$output106 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.x', $array108)]);

$output106 .= '" cy="';
$array109 = array (
);
$output106 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.y', $array109)]);

$output106 .= '" r="40" stroke="#FFFFFF" stroke-width="2" fill="';
$array110 = array (
);
$output106 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.color', $array110)]);

$output106 .= '" />
                    ';
return $output106;
};
$arguments102 = array();
$arguments102['additionalAttributes'] = NULL;
$arguments102['data'] = NULL;
$arguments102['class'] = NULL;
$arguments102['dir'] = NULL;
$arguments102['id'] = NULL;
$arguments102['lang'] = NULL;
$arguments102['style'] = NULL;
$arguments102['title'] = NULL;
$arguments102['accesskey'] = NULL;
$arguments102['tabindex'] = NULL;
$arguments102['onclick'] = NULL;
$arguments102['name'] = NULL;
$arguments102['rel'] = NULL;
$arguments102['rev'] = NULL;
$arguments102['target'] = NULL;
$arguments102['action'] = NULL;
$arguments102['arguments'] = array (
);
$arguments102['controller'] = NULL;
$arguments102['package'] = NULL;
$arguments102['subpackage'] = NULL;
$arguments102['section'] = '';
$arguments102['format'] = '';
$arguments102['additionalParams'] = array (
);
$arguments102['addQueryString'] = false;
$arguments102['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments102['useParentRequest'] = false;
$arguments102['absolute'] = true;
$arguments102['useMainRequest'] = false;
$arguments102['action'] = 'index';
// Rendering Array
$array104 = array();
$array105 = array (
);$array104['type'] = $renderingContext->getVariableProvider()->getByPath('type', $array105);
$arguments102['arguments'] = $array104;

$output101 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output101 .= '
                ';
return $output101;
};
$arguments99['__elseClosures'][] = function() use ($renderingContext, $self) {
$output111 = '';

$output111 .= '
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output117 = '';

$output117 .= '
                        <circle id="';
$array118 = array (
);
$output117 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.id', $array118)]);

$output117 .= '" cx="';
$array119 = array (
);
$output117 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.x', $array119)]);

$output117 .= '" cy="';
$array120 = array (
);
$output117 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.y', $array120)]);

$output117 .= '" r="40" stroke="#FFFFFF" stroke-width="2" fill="';
$array121 = array (
);
$output117 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.color', $array121)]);

$output117 .= '" />
                    ';
return $output117;
};
$arguments112 = array();
$arguments112['additionalAttributes'] = NULL;
$arguments112['data'] = NULL;
$arguments112['class'] = NULL;
$arguments112['dir'] = NULL;
$arguments112['id'] = NULL;
$arguments112['lang'] = NULL;
$arguments112['style'] = NULL;
$arguments112['title'] = NULL;
$arguments112['accesskey'] = NULL;
$arguments112['tabindex'] = NULL;
$arguments112['onclick'] = NULL;
$arguments112['name'] = NULL;
$arguments112['rel'] = NULL;
$arguments112['rev'] = NULL;
$arguments112['target'] = NULL;
$arguments112['action'] = NULL;
$arguments112['arguments'] = array (
);
$arguments112['controller'] = NULL;
$arguments112['package'] = NULL;
$arguments112['subpackage'] = NULL;
$arguments112['section'] = '';
$arguments112['format'] = '';
$arguments112['additionalParams'] = array (
);
$arguments112['addQueryString'] = false;
$arguments112['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments112['useParentRequest'] = false;
$arguments112['absolute'] = true;
$arguments112['useMainRequest'] = false;
$arguments112['action'] = 'index';
// Rendering Array
$array114 = array();
$array115 = array (
);$array114['type'] = $renderingContext->getVariableProvider()->getByPath('type', $array115);
$array116 = array (
);$array114['subgraphIdentifier'] = $renderingContext->getVariableProvider()->getByPath('subgraphIdentifier', $array116);
$arguments112['arguments'] = $array114;

$output111 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output111 .= '
                ';
return $output111;
};

$output98 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output98 .= '
        ';
return $output98;
};
$arguments95 = array();
$arguments95['each'] = NULL;
$arguments95['as'] = NULL;
$arguments95['key'] = NULL;
$arguments95['reverse'] = false;
$arguments95['iteration'] = NULL;
$array97 = array (
);$arguments95['each'] = $renderingContext->getVariableProvider()->getByPath('graph.nodes', $array97);
$arguments95['as'] = 'node';
$arguments95['key'] = 'subgraphIdentifier';

$output79 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output79 .= '
    </svg>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$output155 = '';

$output155 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$output184 = '';

$output184 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
$output189 = '';

$output189 .= '
                    <div style="position: absolute; top: ';
$array190 = array (
);
$output189 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.textY', $array190)]);

$output189 .= 'px; left:';
$array191 = array (
);
$output189 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.textX', $array191)]);

$output189 .= 'px; width: 80px; text-align: center; pointer-events: none;">';
$array192 = array (
);
$output189 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.name', $array192)]);

$output189 .= '</div>
                ';
return $output189;
};
$arguments185 = array();
$arguments185['additionalAttributes'] = NULL;
$arguments185['data'] = NULL;
$arguments185['class'] = NULL;
$arguments185['dir'] = NULL;
$arguments185['id'] = NULL;
$arguments185['lang'] = NULL;
$arguments185['style'] = NULL;
$arguments185['title'] = NULL;
$arguments185['accesskey'] = NULL;
$arguments185['tabindex'] = NULL;
$arguments185['onclick'] = NULL;
$arguments185['name'] = NULL;
$arguments185['rel'] = NULL;
$arguments185['rev'] = NULL;
$arguments185['target'] = NULL;
$arguments185['action'] = NULL;
$arguments185['arguments'] = array (
);
$arguments185['controller'] = NULL;
$arguments185['package'] = NULL;
$arguments185['subpackage'] = NULL;
$arguments185['section'] = '';
$arguments185['format'] = '';
$arguments185['additionalParams'] = array (
);
$arguments185['addQueryString'] = false;
$arguments185['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments185['useParentRequest'] = false;
$arguments185['absolute'] = true;
$arguments185['useMainRequest'] = false;
$arguments185['action'] = 'index';
// Rendering Array
$array187 = array();
$array188 = array (
);$array187['type'] = $renderingContext->getVariableProvider()->getByPath('type', $array188);
$arguments185['arguments'] = $array187;

$output184 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output184 .= '
            ';
return $output184;
};
$arguments182 = array();

$output181 .= '';

$output181 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
$output195 = '';

$output195 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
$output201 = '';

$output201 .= '
                    <div style="position: absolute; top: ';
$array202 = array (
);
$output201 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.textY', $array202)]);

$output201 .= 'px; left:';
$array203 = array (
);
$output201 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.textX', $array203)]);

$output201 .= 'px; width: 80px; text-align: center; pointer-events: none;">';
$array204 = array (
);
$output201 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.name', $array204)]);

$output201 .= '</div>
                ';
return $output201;
};
$arguments196 = array();
$arguments196['additionalAttributes'] = NULL;
$arguments196['data'] = NULL;
$arguments196['class'] = NULL;
$arguments196['dir'] = NULL;
$arguments196['id'] = NULL;
$arguments196['lang'] = NULL;
$arguments196['style'] = NULL;
$arguments196['title'] = NULL;
$arguments196['accesskey'] = NULL;
$arguments196['tabindex'] = NULL;
$arguments196['onclick'] = NULL;
$arguments196['name'] = NULL;
$arguments196['rel'] = NULL;
$arguments196['rev'] = NULL;
$arguments196['target'] = NULL;
$arguments196['action'] = NULL;
$arguments196['arguments'] = array (
);
$arguments196['controller'] = NULL;
$arguments196['package'] = NULL;
$arguments196['subpackage'] = NULL;
$arguments196['section'] = '';
$arguments196['format'] = '';
$arguments196['additionalParams'] = array (
);
$arguments196['addQueryString'] = false;
$arguments196['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments196['useParentRequest'] = false;
$arguments196['absolute'] = true;
$arguments196['useMainRequest'] = false;
$arguments196['action'] = 'index';
// Rendering Array
$array198 = array();
$array199 = array (
);$array198['type'] = $renderingContext->getVariableProvider()->getByPath('type', $array199);
$array200 = array (
);$array198['subgraphIdentifier'] = $renderingContext->getVariableProvider()->getByPath('subgraphIdentifier', $array200);
$arguments196['arguments'] = $array198;

$output195 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext);

$output195 .= '
            ';
return $output195;
};
$arguments193 = array();
$arguments193['if'] = NULL;

$output181 .= '';

$output181 .= '
        ';
return $output181;
};
$arguments156 = array();
$arguments156['then'] = NULL;
$arguments156['else'] = NULL;
$arguments156['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array177 = array();
$array178 = array (
);$array177['0'] = $renderingContext->getVariableProvider()->getByPath('selectedSubgraphIdentifier', $array178);
$array177['1'] = ' == ';
$array179 = array (
);$array177['2'] = $renderingContext->getVariableProvider()->getByPath('subgraphIdentifier', $array179);

$expression180 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments156['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression180(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array177)
					),
					$renderingContext
				);
$arguments156['__thenClosure'] = function() use ($renderingContext, $self) {
$output158 = '';

$output158 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$output163 = '';

$output163 .= '
                    <div style="position: absolute; top: ';
$array164 = array (
);
$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.textY', $array164)]);

$output163 .= 'px; left:';
$array165 = array (
);
$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.textX', $array165)]);

$output163 .= 'px; width: 80px; text-align: center; pointer-events: none;">';
$array166 = array (
);
$output163 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.name', $array166)]);

$output163 .= '</div>
                ';
return $output163;
};
$arguments159 = array();
$arguments159['additionalAttributes'] = NULL;
$arguments159['data'] = NULL;
$arguments159['class'] = NULL;
$arguments159['dir'] = NULL;
$arguments159['id'] = NULL;
$arguments159['lang'] = NULL;
$arguments159['style'] = NULL;
$arguments159['title'] = NULL;
$arguments159['accesskey'] = NULL;
$arguments159['tabindex'] = NULL;
$arguments159['onclick'] = NULL;
$arguments159['name'] = NULL;
$arguments159['rel'] = NULL;
$arguments159['rev'] = NULL;
$arguments159['target'] = NULL;
$arguments159['action'] = NULL;
$arguments159['arguments'] = array (
);
$arguments159['controller'] = NULL;
$arguments159['package'] = NULL;
$arguments159['subpackage'] = NULL;
$arguments159['section'] = '';
$arguments159['format'] = '';
$arguments159['additionalParams'] = array (
);
$arguments159['addQueryString'] = false;
$arguments159['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments159['useParentRequest'] = false;
$arguments159['absolute'] = true;
$arguments159['useMainRequest'] = false;
$arguments159['action'] = 'index';
// Rendering Array
$array161 = array();
$array162 = array (
);$array161['type'] = $renderingContext->getVariableProvider()->getByPath('type', $array162);
$arguments159['arguments'] = $array161;

$output158 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output158 .= '
            ';
return $output158;
};
$arguments156['__elseClosures'][] = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$output173 = '';

$output173 .= '
                    <div style="position: absolute; top: ';
$array174 = array (
);
$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.textY', $array174)]);

$output173 .= 'px; left:';
$array175 = array (
);
$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.textX', $array175)]);

$output173 .= 'px; width: 80px; text-align: center; pointer-events: none;">';
$array176 = array (
);
$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.name', $array176)]);

$output173 .= '</div>
                ';
return $output173;
};
$arguments168 = array();
$arguments168['additionalAttributes'] = NULL;
$arguments168['data'] = NULL;
$arguments168['class'] = NULL;
$arguments168['dir'] = NULL;
$arguments168['id'] = NULL;
$arguments168['lang'] = NULL;
$arguments168['style'] = NULL;
$arguments168['title'] = NULL;
$arguments168['accesskey'] = NULL;
$arguments168['tabindex'] = NULL;
$arguments168['onclick'] = NULL;
$arguments168['name'] = NULL;
$arguments168['rel'] = NULL;
$arguments168['rev'] = NULL;
$arguments168['target'] = NULL;
$arguments168['action'] = NULL;
$arguments168['arguments'] = array (
);
$arguments168['controller'] = NULL;
$arguments168['package'] = NULL;
$arguments168['subpackage'] = NULL;
$arguments168['section'] = '';
$arguments168['format'] = '';
$arguments168['additionalParams'] = array (
);
$arguments168['addQueryString'] = false;
$arguments168['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments168['useParentRequest'] = false;
$arguments168['absolute'] = true;
$arguments168['useMainRequest'] = false;
$arguments168['action'] = 'index';
// Rendering Array
$array170 = array();
$array171 = array (
);$array170['type'] = $renderingContext->getVariableProvider()->getByPath('type', $array171);
$array172 = array (
);$array170['subgraphIdentifier'] = $renderingContext->getVariableProvider()->getByPath('subgraphIdentifier', $array172);
$arguments168['arguments'] = $array170;

$output167 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output167 .= '
            ';
return $output167;
};

$output155 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output155 .= '
    ';
return $output155;
};
$arguments152 = array();
$arguments152['each'] = NULL;
$arguments152['as'] = NULL;
$arguments152['key'] = NULL;
$arguments152['reverse'] = false;
$arguments152['iteration'] = NULL;
$array154 = array (
);$arguments152['each'] = $renderingContext->getVariableProvider()->getByPath('graph.nodes', $array154);
$arguments152['as'] = 'node';
$arguments152['key'] = 'subgraphIdentifier';

$output79 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output79 .= '
';

return $output79;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output205 = '';

$output205 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments206 = array();
$arguments206['name'] = NULL;
$arguments206['name'] = 'BackendSubModule';

$output205 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output205 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$output210 = '';

$output210 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
$output214 = '';

$output214 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
$output226 = '';

$output226 .= '
          ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['id'] = NULL;
$arguments227['value'] = NULL;
$arguments227['arguments'] = array (
);
$arguments227['source'] = 'Main';
$arguments227['package'] = NULL;
$arguments227['quantity'] = NULL;
$arguments227['locale'] = NULL;
$output229 = '';

$output229 .= 'dimensions.';
$array230 = array (
);
$output229 .= $renderingContext->getVariableProvider()->getByPath('availableGraphType', $array230);

$output229 .= '.short';
$arguments227['id'] = $output229;
$arguments227['source'] = 'Modules';

$output226 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext)]);

$output226 .= '
        ';
return $output226;
};
$arguments215 = array();
$arguments215['additionalAttributes'] = NULL;
$arguments215['data'] = NULL;
$arguments215['class'] = NULL;
$arguments215['dir'] = NULL;
$arguments215['id'] = NULL;
$arguments215['lang'] = NULL;
$arguments215['style'] = NULL;
$arguments215['title'] = NULL;
$arguments215['accesskey'] = NULL;
$arguments215['tabindex'] = NULL;
$arguments215['onclick'] = NULL;
$arguments215['name'] = NULL;
$arguments215['rel'] = NULL;
$arguments215['rev'] = NULL;
$arguments215['target'] = NULL;
$arguments215['action'] = NULL;
$arguments215['arguments'] = array (
);
$arguments215['controller'] = NULL;
$arguments215['package'] = NULL;
$arguments215['subpackage'] = NULL;
$arguments215['section'] = '';
$arguments215['format'] = '';
$arguments215['additionalParams'] = array (
);
$arguments215['addQueryString'] = false;
$arguments215['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments215['useParentRequest'] = false;
$arguments215['absolute'] = true;
$arguments215['useMainRequest'] = false;
$arguments215['action'] = 'index';
// Rendering Array
$array217 = array();
$array218 = array (
);$array217['type'] = $renderingContext->getVariableProvider()->getByPath('availableGraphType', $array218);
$arguments215['arguments'] = $array217;
$output219 = '';

$output219 .= 'neos-button';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments220 = array();
$arguments220['then'] = NULL;
$arguments220['else'] = NULL;
$arguments220['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array222 = array();
$array223 = array (
);$array222['0'] = $renderingContext->getVariableProvider()->getByPath('availableGraphType', $array223);
$array222['1'] = ' == ';
$array224 = array (
);$array222['2'] = $renderingContext->getVariableProvider()->getByPath('type', $array224);

$expression225 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments220['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression225(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array222)
					),
					$renderingContext
				);
$arguments220['then'] = ' neos-active';

$output219 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);
$arguments215['class'] = $output219;

$output214 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output214 .= '
    ';
return $output214;
};
$arguments211 = array();
$arguments211['each'] = NULL;
$arguments211['as'] = NULL;
$arguments211['key'] = NULL;
$arguments211['reverse'] = false;
$arguments211['iteration'] = NULL;
$array213 = array (
);$arguments211['each'] = $renderingContext->getVariableProvider()->getByPath('availableGraphTypes', $array213);
$arguments211['as'] = 'availableGraphType';

$output210 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output210 .= '
    <br /><br />
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
$output236 = '';

$output236 .= '
        <legend>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments237 = array();
$arguments237['id'] = NULL;
$arguments237['value'] = NULL;
$arguments237['arguments'] = array (
);
$arguments237['source'] = 'Main';
$arguments237['package'] = NULL;
$arguments237['quantity'] = NULL;
$arguments237['locale'] = NULL;
$output239 = '';

$output239 .= 'dimensions.';
$array240 = array (
);
$output239 .= $renderingContext->getVariableProvider()->getByPath('type', $array240);

$output239 .= '.legend';
$arguments237['id'] = $output239;
$arguments237['source'] = 'Modules';

$output236 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext)]);

$output236 .= '</legend>
        <p>';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments244 = array();
$arguments244['id'] = NULL;
$arguments244['value'] = NULL;
$arguments244['arguments'] = array (
);
$arguments244['source'] = 'Main';
$arguments244['package'] = NULL;
$arguments244['quantity'] = NULL;
$arguments244['locale'] = NULL;
$output246 = '';

$output246 .= 'dimensions.';
$array247 = array (
);
$output246 .= $renderingContext->getVariableProvider()->getByPath('type', $array247);

$output246 .= '.description';
$arguments244['id'] = $output246;
$arguments244['source'] = 'Modules';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext)]);
};
$arguments241 = array();
$arguments241['value'] = NULL;
$value243 = ($arguments241['value'] !== null ? $arguments241['value'] : $renderChildrenClosure242());

$output236 .= nl2br($value243);

$output236 .= '</p>
        <div id="graph" style="position: relative; width: 100%; height: 100%; overflow:scroll">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments248 = array();
$arguments248['section'] = NULL;
$arguments248['partial'] = NULL;
$arguments248['delegate'] = NULL;
$arguments248['renderable'] = NULL;
$arguments248['arguments'] = array (
);
$arguments248['optional'] = false;
$arguments248['default'] = NULL;
$arguments248['contentAs'] = NULL;
$array250 = array (
);$arguments248['section'] = $renderingContext->getVariableProvider()->getByPath('type', $array250);
$arguments248['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output236 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);

$output236 .= '
        </div>
    ';
return $output236;
};
$arguments231 = array();
$arguments231['then'] = NULL;
$arguments231['else'] = NULL;
$arguments231['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array233 = array();
$array234 = array (
);$array233['0'] = $renderingContext->getVariableProvider()->getByPath('graph', $array234);

$expression235 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments231['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression235(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array233)
					),
					$renderingContext
				);
$arguments231['__thenClosure'] = $renderChildrenClosure232;

$output210 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output210 .= '

    <script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments252 = array();
$arguments252['path'] = NULL;
$arguments252['package'] = NULL;
$arguments252['resource'] = NULL;
$arguments252['localize'] = true;
$arguments252['path'] = 'resource://Neos.Neos/Public/JavaScript/Module/Administration/Dimension.js';

$output210 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext)]);

$output210 .= '"></script>
';
return $output210;
};
$arguments208 = array();
$arguments208['name'] = NULL;
$arguments208['name'] = 'content';

$output205 .= NULL;

$output205 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$output256 = '';

$output256 .= '
    <svg id="graph" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" baseProfile="full" width="';
$array257 = array (
);
$output256 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('graph.width', $array257)]);

$output256 .= 'px" height="';
$array258 = array (
);
$output256 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('graph.height', $array258)]);

$output256 .= 'px" style="position:relative; padding-top:50px;">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
$output262 = '';

$output262 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
$output266 = '';

$output266 .= '
                <circle cx="';
$array267 = array (
);
$output266 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.x', $array267)]);

$output266 .= '" cy="';
$array268 = array (
);
$output266 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.y', $array268)]);

$output266 .= '" r="40" stroke="#FFFFFF" stroke-width="2" fill="';
$array269 = array (
);
$output266 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.color', $array269)]);

$output266 .= '" />
            ';
return $output266;
};
$arguments263 = array();
$arguments263['each'] = NULL;
$arguments263['as'] = NULL;
$arguments263['key'] = NULL;
$arguments263['reverse'] = false;
$arguments263['iteration'] = NULL;
$array265 = array (
);$arguments263['each'] = $renderingContext->getVariableProvider()->getByPath('dimension.nodes', $array265);
$arguments263['as'] = 'node';

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);

$output262 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
$output273 = '';

$output273 .= '
                <line x1="';
$array274 = array (
);
$output273 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('edge.x1', $array274)]);

$output273 .= '" y1="';
$array275 = array (
);
$output273 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('edge.y1', $array275)]);

$output273 .= '" x2="';
$array276 = array (
);
$output273 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('edge.x2', $array276)]);

$output273 .= '" y2="';
$array277 = array (
);
$output273 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('edge.y2', $array277)]);

$output273 .= '" stroke-width="2" stroke="#FFFFFF"/>
            ';
return $output273;
};
$arguments270 = array();
$arguments270['each'] = NULL;
$arguments270['as'] = NULL;
$arguments270['key'] = NULL;
$arguments270['reverse'] = false;
$arguments270['iteration'] = NULL;
$array272 = array (
);$arguments270['each'] = $renderingContext->getVariableProvider()->getByPath('dimension.edges', $array272);
$arguments270['as'] = 'edge';

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext);

$output262 .= '
        ';
return $output262;
};
$arguments259 = array();
$arguments259['each'] = NULL;
$arguments259['as'] = NULL;
$arguments259['key'] = NULL;
$arguments259['reverse'] = false;
$arguments259['iteration'] = NULL;
$array261 = array (
);$arguments259['each'] = $renderingContext->getVariableProvider()->getByPath('graph.dimensions', $array261);
$arguments259['as'] = 'dimension';

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);

$output256 .= '
    </svg>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
$output281 = '';

$output281 .= '
        <h2 style="position: absolute; top: 10px; left:';
$array282 = array (
);
$output281 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dimension.offset', $array282)]);

$output281 .= 'px;">';
$array283 = array (
);
$output281 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dimension.label', $array283)]);

$output281 .= '</h2>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
$output287 = '';

$output287 .= '
            <div style="position: absolute; top: ';
$array288 = array (
);
$output287 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.textY', $array288)]);

$output287 .= 'px; left:';
$array289 = array (
);
$output287 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.textX', $array289)]);

$output287 .= 'px; width: 80px; text-align: center; pointer-events: none;">';
$array290 = array (
);
$output287 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.name', $array290)]);

$output287 .= '</div>
        ';
return $output287;
};
$arguments284 = array();
$arguments284['each'] = NULL;
$arguments284['as'] = NULL;
$arguments284['key'] = NULL;
$arguments284['reverse'] = false;
$arguments284['iteration'] = NULL;
$array286 = array (
);$arguments284['each'] = $renderingContext->getVariableProvider()->getByPath('dimension.nodes', $array286);
$arguments284['as'] = 'node';

$output281 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments284, $renderChildrenClosure285, $renderingContext);

$output281 .= '
    ';
return $output281;
};
$arguments278 = array();
$arguments278['each'] = NULL;
$arguments278['as'] = NULL;
$arguments278['key'] = NULL;
$arguments278['reverse'] = false;
$arguments278['iteration'] = NULL;
$array280 = array (
);$arguments278['each'] = $renderingContext->getVariableProvider()->getByPath('graph.dimensions', $array280);
$arguments278['as'] = 'dimension';

$output256 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext);

$output256 .= '
  ';
return $output256;
};
$arguments254 = array();
$arguments254['name'] = NULL;
$arguments254['name'] = 'intraDimension';

$output205 .= NULL;

$output205 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
$output293 = '';

$output293 .= '
    <svg id="graph" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" baseProfile="full" width="';
$array294 = array (
);
$output293 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('graph.width', $array294)]);

$output293 .= 'px" height="';
$array295 = array (
);
$output293 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('graph.height', $array295)]);

$output293 .= 'px" style="position:relative; padding-top:50px;">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
$output299 = '';

$output299 .= '
          <line x1="';
$array300 = array (
);
$output299 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('edge.x1', $array300)]);

$output299 .= '" y1="';
$array301 = array (
);
$output299 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('edge.y1', $array301)]);

$output299 .= '" x2="';
$array302 = array (
);
$output299 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('edge.x2', $array302)]);

$output299 .= '" y2="';
$array303 = array (
);
$output299 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('edge.y2', $array303)]);

$output299 .= '" stroke-width="2" stroke="';
$array304 = array (
);
$output299 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('edge.color', $array304)]);

$output299 .= '" opacity="';
$array305 = array (
);
$output299 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('edge.opacity', $array305)]);

$output299 .= '" style="';
$array306 = array (
);
$output299 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('edge.style', $array306)]);

$output299 .= '" data-from="';
$array307 = array (
);
$output299 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('edge.from', $array307)]);

$output299 .= '" data-to="';
$array308 = array (
);
$output299 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('edge.to', $array308)]);

$output299 .= '"/>
      ';
return $output299;
};
$arguments296 = array();
$arguments296['each'] = NULL;
$arguments296['as'] = NULL;
$arguments296['key'] = NULL;
$arguments296['reverse'] = false;
$arguments296['iteration'] = NULL;
$array298 = array (
);$arguments296['each'] = $renderingContext->getVariableProvider()->getByPath('graph.edges', $array298);
$arguments296['as'] = 'edge';

$output293 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext);

$output293 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
$output312 = '';

$output312 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
$output340 = '';

$output340 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
$output343 = '';

$output343 .= '
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
$output348 = '';

$output348 .= '
                        <circle id="';
$array349 = array (
);
$output348 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.id', $array349)]);

$output348 .= '" cx="';
$array350 = array (
);
$output348 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.x', $array350)]);

$output348 .= '" cy="';
$array351 = array (
);
$output348 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.y', $array351)]);

$output348 .= '" r="40" stroke="#FFFFFF" stroke-width="2" fill="';
$array352 = array (
);
$output348 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.color', $array352)]);

$output348 .= '" />
                    ';
return $output348;
};
$arguments344 = array();
$arguments344['additionalAttributes'] = NULL;
$arguments344['data'] = NULL;
$arguments344['class'] = NULL;
$arguments344['dir'] = NULL;
$arguments344['id'] = NULL;
$arguments344['lang'] = NULL;
$arguments344['style'] = NULL;
$arguments344['title'] = NULL;
$arguments344['accesskey'] = NULL;
$arguments344['tabindex'] = NULL;
$arguments344['onclick'] = NULL;
$arguments344['name'] = NULL;
$arguments344['rel'] = NULL;
$arguments344['rev'] = NULL;
$arguments344['target'] = NULL;
$arguments344['action'] = NULL;
$arguments344['arguments'] = array (
);
$arguments344['controller'] = NULL;
$arguments344['package'] = NULL;
$arguments344['subpackage'] = NULL;
$arguments344['section'] = '';
$arguments344['format'] = '';
$arguments344['additionalParams'] = array (
);
$arguments344['addQueryString'] = false;
$arguments344['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments344['useParentRequest'] = false;
$arguments344['absolute'] = true;
$arguments344['useMainRequest'] = false;
$arguments344['action'] = 'index';
// Rendering Array
$array346 = array();
$array347 = array (
);$array346['type'] = $renderingContext->getVariableProvider()->getByPath('type', $array347);
$arguments344['arguments'] = $array346;

$output343 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments344, $renderChildrenClosure345, $renderingContext);

$output343 .= '
                ';
return $output343;
};
$arguments341 = array();

$output340 .= '';

$output340 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
$output355 = '';

$output355 .= '
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
$output361 = '';

$output361 .= '
                        <circle id="';
$array362 = array (
);
$output361 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.id', $array362)]);

$output361 .= '" cx="';
$array363 = array (
);
$output361 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.x', $array363)]);

$output361 .= '" cy="';
$array364 = array (
);
$output361 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.y', $array364)]);

$output361 .= '" r="40" stroke="#FFFFFF" stroke-width="2" fill="';
$array365 = array (
);
$output361 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.color', $array365)]);

$output361 .= '" />
                    ';
return $output361;
};
$arguments356 = array();
$arguments356['additionalAttributes'] = NULL;
$arguments356['data'] = NULL;
$arguments356['class'] = NULL;
$arguments356['dir'] = NULL;
$arguments356['id'] = NULL;
$arguments356['lang'] = NULL;
$arguments356['style'] = NULL;
$arguments356['title'] = NULL;
$arguments356['accesskey'] = NULL;
$arguments356['tabindex'] = NULL;
$arguments356['onclick'] = NULL;
$arguments356['name'] = NULL;
$arguments356['rel'] = NULL;
$arguments356['rev'] = NULL;
$arguments356['target'] = NULL;
$arguments356['action'] = NULL;
$arguments356['arguments'] = array (
);
$arguments356['controller'] = NULL;
$arguments356['package'] = NULL;
$arguments356['subpackage'] = NULL;
$arguments356['section'] = '';
$arguments356['format'] = '';
$arguments356['additionalParams'] = array (
);
$arguments356['addQueryString'] = false;
$arguments356['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments356['useParentRequest'] = false;
$arguments356['absolute'] = true;
$arguments356['useMainRequest'] = false;
$arguments356['action'] = 'index';
// Rendering Array
$array358 = array();
$array359 = array (
);$array358['type'] = $renderingContext->getVariableProvider()->getByPath('type', $array359);
$array360 = array (
);$array358['subgraphIdentifier'] = $renderingContext->getVariableProvider()->getByPath('subgraphIdentifier', $array360);
$arguments356['arguments'] = $array358;

$output355 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext);

$output355 .= '
                ';
return $output355;
};
$arguments353 = array();
$arguments353['if'] = NULL;

$output340 .= '';

$output340 .= '
            ';
return $output340;
};
$arguments313 = array();
$arguments313['then'] = NULL;
$arguments313['else'] = NULL;
$arguments313['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array336 = array();
$array337 = array (
);$array336['0'] = $renderingContext->getVariableProvider()->getByPath('selectedSubgraphIdentifier', $array337);
$array336['1'] = ' == ';
$array338 = array (
);$array336['2'] = $renderingContext->getVariableProvider()->getByPath('subgraphIdentifier', $array338);

$expression339 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments313['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression339(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array336)
					),
					$renderingContext
				);
$arguments313['__thenClosure'] = function() use ($renderingContext, $self) {
$output315 = '';

$output315 .= '
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
$output320 = '';

$output320 .= '
                        <circle id="';
$array321 = array (
);
$output320 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.id', $array321)]);

$output320 .= '" cx="';
$array322 = array (
);
$output320 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.x', $array322)]);

$output320 .= '" cy="';
$array323 = array (
);
$output320 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.y', $array323)]);

$output320 .= '" r="40" stroke="#FFFFFF" stroke-width="2" fill="';
$array324 = array (
);
$output320 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.color', $array324)]);

$output320 .= '" />
                    ';
return $output320;
};
$arguments316 = array();
$arguments316['additionalAttributes'] = NULL;
$arguments316['data'] = NULL;
$arguments316['class'] = NULL;
$arguments316['dir'] = NULL;
$arguments316['id'] = NULL;
$arguments316['lang'] = NULL;
$arguments316['style'] = NULL;
$arguments316['title'] = NULL;
$arguments316['accesskey'] = NULL;
$arguments316['tabindex'] = NULL;
$arguments316['onclick'] = NULL;
$arguments316['name'] = NULL;
$arguments316['rel'] = NULL;
$arguments316['rev'] = NULL;
$arguments316['target'] = NULL;
$arguments316['action'] = NULL;
$arguments316['arguments'] = array (
);
$arguments316['controller'] = NULL;
$arguments316['package'] = NULL;
$arguments316['subpackage'] = NULL;
$arguments316['section'] = '';
$arguments316['format'] = '';
$arguments316['additionalParams'] = array (
);
$arguments316['addQueryString'] = false;
$arguments316['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments316['useParentRequest'] = false;
$arguments316['absolute'] = true;
$arguments316['useMainRequest'] = false;
$arguments316['action'] = 'index';
// Rendering Array
$array318 = array();
$array319 = array (
);$array318['type'] = $renderingContext->getVariableProvider()->getByPath('type', $array319);
$arguments316['arguments'] = $array318;

$output315 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext);

$output315 .= '
                ';
return $output315;
};
$arguments313['__elseClosures'][] = function() use ($renderingContext, $self) {
$output325 = '';

$output325 .= '
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
$output331 = '';

$output331 .= '
                        <circle id="';
$array332 = array (
);
$output331 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.id', $array332)]);

$output331 .= '" cx="';
$array333 = array (
);
$output331 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.x', $array333)]);

$output331 .= '" cy="';
$array334 = array (
);
$output331 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.y', $array334)]);

$output331 .= '" r="40" stroke="#FFFFFF" stroke-width="2" fill="';
$array335 = array (
);
$output331 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.color', $array335)]);

$output331 .= '" />
                    ';
return $output331;
};
$arguments326 = array();
$arguments326['additionalAttributes'] = NULL;
$arguments326['data'] = NULL;
$arguments326['class'] = NULL;
$arguments326['dir'] = NULL;
$arguments326['id'] = NULL;
$arguments326['lang'] = NULL;
$arguments326['style'] = NULL;
$arguments326['title'] = NULL;
$arguments326['accesskey'] = NULL;
$arguments326['tabindex'] = NULL;
$arguments326['onclick'] = NULL;
$arguments326['name'] = NULL;
$arguments326['rel'] = NULL;
$arguments326['rev'] = NULL;
$arguments326['target'] = NULL;
$arguments326['action'] = NULL;
$arguments326['arguments'] = array (
);
$arguments326['controller'] = NULL;
$arguments326['package'] = NULL;
$arguments326['subpackage'] = NULL;
$arguments326['section'] = '';
$arguments326['format'] = '';
$arguments326['additionalParams'] = array (
);
$arguments326['addQueryString'] = false;
$arguments326['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments326['useParentRequest'] = false;
$arguments326['absolute'] = true;
$arguments326['useMainRequest'] = false;
$arguments326['action'] = 'index';
// Rendering Array
$array328 = array();
$array329 = array (
);$array328['type'] = $renderingContext->getVariableProvider()->getByPath('type', $array329);
$array330 = array (
);$array328['subgraphIdentifier'] = $renderingContext->getVariableProvider()->getByPath('subgraphIdentifier', $array330);
$arguments326['arguments'] = $array328;

$output325 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments326, $renderChildrenClosure327, $renderingContext);

$output325 .= '
                ';
return $output325;
};

$output312 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output312 .= '
        ';
return $output312;
};
$arguments309 = array();
$arguments309['each'] = NULL;
$arguments309['as'] = NULL;
$arguments309['key'] = NULL;
$arguments309['reverse'] = false;
$arguments309['iteration'] = NULL;
$array311 = array (
);$arguments309['each'] = $renderingContext->getVariableProvider()->getByPath('graph.nodes', $array311);
$arguments309['as'] = 'node';
$arguments309['key'] = 'subgraphIdentifier';

$output293 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);

$output293 .= '
    </svg>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
$output369 = '';

$output369 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure371 = function() use ($renderingContext, $self) {
$output395 = '';

$output395 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
$output398 = '';

$output398 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure400 = function() use ($renderingContext, $self) {
$output403 = '';

$output403 .= '
                    <div style="position: absolute; top: ';
$array404 = array (
);
$output403 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.textY', $array404)]);

$output403 .= 'px; left:';
$array405 = array (
);
$output403 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.textX', $array405)]);

$output403 .= 'px; width: 80px; text-align: center; pointer-events: none;">';
$array406 = array (
);
$output403 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.name', $array406)]);

$output403 .= '</div>
                ';
return $output403;
};
$arguments399 = array();
$arguments399['additionalAttributes'] = NULL;
$arguments399['data'] = NULL;
$arguments399['class'] = NULL;
$arguments399['dir'] = NULL;
$arguments399['id'] = NULL;
$arguments399['lang'] = NULL;
$arguments399['style'] = NULL;
$arguments399['title'] = NULL;
$arguments399['accesskey'] = NULL;
$arguments399['tabindex'] = NULL;
$arguments399['onclick'] = NULL;
$arguments399['name'] = NULL;
$arguments399['rel'] = NULL;
$arguments399['rev'] = NULL;
$arguments399['target'] = NULL;
$arguments399['action'] = NULL;
$arguments399['arguments'] = array (
);
$arguments399['controller'] = NULL;
$arguments399['package'] = NULL;
$arguments399['subpackage'] = NULL;
$arguments399['section'] = '';
$arguments399['format'] = '';
$arguments399['additionalParams'] = array (
);
$arguments399['addQueryString'] = false;
$arguments399['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments399['useParentRequest'] = false;
$arguments399['absolute'] = true;
$arguments399['useMainRequest'] = false;
$arguments399['action'] = 'index';
// Rendering Array
$array401 = array();
$array402 = array (
);$array401['type'] = $renderingContext->getVariableProvider()->getByPath('type', $array402);
$arguments399['arguments'] = $array401;

$output398 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments399, $renderChildrenClosure400, $renderingContext);

$output398 .= '
            ';
return $output398;
};
$arguments396 = array();

$output395 .= '';

$output395 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure408 = function() use ($renderingContext, $self) {
$output409 = '';

$output409 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure411 = function() use ($renderingContext, $self) {
$output415 = '';

$output415 .= '
                    <div style="position: absolute; top: ';
$array416 = array (
);
$output415 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.textY', $array416)]);

$output415 .= 'px; left:';
$array417 = array (
);
$output415 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.textX', $array417)]);

$output415 .= 'px; width: 80px; text-align: center; pointer-events: none;">';
$array418 = array (
);
$output415 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.name', $array418)]);

$output415 .= '</div>
                ';
return $output415;
};
$arguments410 = array();
$arguments410['additionalAttributes'] = NULL;
$arguments410['data'] = NULL;
$arguments410['class'] = NULL;
$arguments410['dir'] = NULL;
$arguments410['id'] = NULL;
$arguments410['lang'] = NULL;
$arguments410['style'] = NULL;
$arguments410['title'] = NULL;
$arguments410['accesskey'] = NULL;
$arguments410['tabindex'] = NULL;
$arguments410['onclick'] = NULL;
$arguments410['name'] = NULL;
$arguments410['rel'] = NULL;
$arguments410['rev'] = NULL;
$arguments410['target'] = NULL;
$arguments410['action'] = NULL;
$arguments410['arguments'] = array (
);
$arguments410['controller'] = NULL;
$arguments410['package'] = NULL;
$arguments410['subpackage'] = NULL;
$arguments410['section'] = '';
$arguments410['format'] = '';
$arguments410['additionalParams'] = array (
);
$arguments410['addQueryString'] = false;
$arguments410['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments410['useParentRequest'] = false;
$arguments410['absolute'] = true;
$arguments410['useMainRequest'] = false;
$arguments410['action'] = 'index';
// Rendering Array
$array412 = array();
$array413 = array (
);$array412['type'] = $renderingContext->getVariableProvider()->getByPath('type', $array413);
$array414 = array (
);$array412['subgraphIdentifier'] = $renderingContext->getVariableProvider()->getByPath('subgraphIdentifier', $array414);
$arguments410['arguments'] = $array412;

$output409 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments410, $renderChildrenClosure411, $renderingContext);

$output409 .= '
            ';
return $output409;
};
$arguments407 = array();
$arguments407['if'] = NULL;

$output395 .= '';

$output395 .= '
        ';
return $output395;
};
$arguments370 = array();
$arguments370['then'] = NULL;
$arguments370['else'] = NULL;
$arguments370['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array391 = array();
$array392 = array (
);$array391['0'] = $renderingContext->getVariableProvider()->getByPath('selectedSubgraphIdentifier', $array392);
$array391['1'] = ' == ';
$array393 = array (
);$array391['2'] = $renderingContext->getVariableProvider()->getByPath('subgraphIdentifier', $array393);

$expression394 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments370['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression394(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array391)
					),
					$renderingContext
				);
$arguments370['__thenClosure'] = function() use ($renderingContext, $self) {
$output372 = '';

$output372 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
$output377 = '';

$output377 .= '
                    <div style="position: absolute; top: ';
$array378 = array (
);
$output377 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.textY', $array378)]);

$output377 .= 'px; left:';
$array379 = array (
);
$output377 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.textX', $array379)]);

$output377 .= 'px; width: 80px; text-align: center; pointer-events: none;">';
$array380 = array (
);
$output377 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.name', $array380)]);

$output377 .= '</div>
                ';
return $output377;
};
$arguments373 = array();
$arguments373['additionalAttributes'] = NULL;
$arguments373['data'] = NULL;
$arguments373['class'] = NULL;
$arguments373['dir'] = NULL;
$arguments373['id'] = NULL;
$arguments373['lang'] = NULL;
$arguments373['style'] = NULL;
$arguments373['title'] = NULL;
$arguments373['accesskey'] = NULL;
$arguments373['tabindex'] = NULL;
$arguments373['onclick'] = NULL;
$arguments373['name'] = NULL;
$arguments373['rel'] = NULL;
$arguments373['rev'] = NULL;
$arguments373['target'] = NULL;
$arguments373['action'] = NULL;
$arguments373['arguments'] = array (
);
$arguments373['controller'] = NULL;
$arguments373['package'] = NULL;
$arguments373['subpackage'] = NULL;
$arguments373['section'] = '';
$arguments373['format'] = '';
$arguments373['additionalParams'] = array (
);
$arguments373['addQueryString'] = false;
$arguments373['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments373['useParentRequest'] = false;
$arguments373['absolute'] = true;
$arguments373['useMainRequest'] = false;
$arguments373['action'] = 'index';
// Rendering Array
$array375 = array();
$array376 = array (
);$array375['type'] = $renderingContext->getVariableProvider()->getByPath('type', $array376);
$arguments373['arguments'] = $array375;

$output372 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext);

$output372 .= '
            ';
return $output372;
};
$arguments370['__elseClosures'][] = function() use ($renderingContext, $self) {
$output381 = '';

$output381 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
$output387 = '';

$output387 .= '
                    <div style="position: absolute; top: ';
$array388 = array (
);
$output387 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.textY', $array388)]);

$output387 .= 'px; left:';
$array389 = array (
);
$output387 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.textX', $array389)]);

$output387 .= 'px; width: 80px; text-align: center; pointer-events: none;">';
$array390 = array (
);
$output387 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('node.name', $array390)]);

$output387 .= '</div>
                ';
return $output387;
};
$arguments382 = array();
$arguments382['additionalAttributes'] = NULL;
$arguments382['data'] = NULL;
$arguments382['class'] = NULL;
$arguments382['dir'] = NULL;
$arguments382['id'] = NULL;
$arguments382['lang'] = NULL;
$arguments382['style'] = NULL;
$arguments382['title'] = NULL;
$arguments382['accesskey'] = NULL;
$arguments382['tabindex'] = NULL;
$arguments382['onclick'] = NULL;
$arguments382['name'] = NULL;
$arguments382['rel'] = NULL;
$arguments382['rev'] = NULL;
$arguments382['target'] = NULL;
$arguments382['action'] = NULL;
$arguments382['arguments'] = array (
);
$arguments382['controller'] = NULL;
$arguments382['package'] = NULL;
$arguments382['subpackage'] = NULL;
$arguments382['section'] = '';
$arguments382['format'] = '';
$arguments382['additionalParams'] = array (
);
$arguments382['addQueryString'] = false;
$arguments382['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments382['useParentRequest'] = false;
$arguments382['absolute'] = true;
$arguments382['useMainRequest'] = false;
$arguments382['action'] = 'index';
// Rendering Array
$array384 = array();
$array385 = array (
);$array384['type'] = $renderingContext->getVariableProvider()->getByPath('type', $array385);
$array386 = array (
);$array384['subgraphIdentifier'] = $renderingContext->getVariableProvider()->getByPath('subgraphIdentifier', $array386);
$arguments382['arguments'] = $array384;

$output381 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);

$output381 .= '
            ';
return $output381;
};

$output369 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments370, $renderChildrenClosure371, $renderingContext);

$output369 .= '
    ';
return $output369;
};
$arguments366 = array();
$arguments366['each'] = NULL;
$arguments366['as'] = NULL;
$arguments366['key'] = NULL;
$arguments366['reverse'] = false;
$arguments366['iteration'] = NULL;
$array368 = array (
);$arguments366['each'] = $renderingContext->getVariableProvider()->getByPath('graph.nodes', $array368);
$arguments366['as'] = 'node';
$arguments366['key'] = 'subgraphIdentifier';

$output293 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext);

$output293 .= '
';
return $output293;
};
$arguments291 = array();
$arguments291['name'] = NULL;
$arguments291['name'] = 'interDimension';

$output205 .= NULL;

$output205 .= '
';

return $output205;
}


}
#0             114349    