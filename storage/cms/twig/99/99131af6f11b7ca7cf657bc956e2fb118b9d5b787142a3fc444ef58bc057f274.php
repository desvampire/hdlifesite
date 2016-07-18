<?php

/* /home/u312/domains/hdlife.center/public/themes/humandesignlife/partials/js-scripts.htm */
class __TwigTemplate_96fa56a069fb823e9329eb911270cb1029e5905f0860f057342c236c338d64c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script src=\"//yastatic.net/jquery/2.2.3/jquery.min.js\"></script>
        <script>window.jQuery || document.write('<script src=\"js/vendor/jquery.min.js\"><\\/script>')</script>
        <script src=\"";
        // line 3
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/slidebars.min.js", 1 => "assets/js/jquery.flexslider-min.js", 2 => "assets/js/es5-shims.min.js", 3 => "assets/js/share.js", 4 => "assets/js/main.js"));
        // line 9
        echo "\"></script>
        ";
        // line 10
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 11
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
    }

    public function getTemplateName()
    {
        return "/home/u312/domains/hdlife.center/public/themes/humandesignlife/partials/js-scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 11,  28 => 10,  25 => 9,  23 => 3,  19 => 1,);
    }
}
/* <script src="//yastatic.net/jquery/2.2.3/jquery.min.js"></script>*/
/*         <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>*/
/*         <script src="{{ [*/
/*             'assets/js/slidebars.min.js',*/
/*             'assets/js/jquery.flexslider-min.js',*/
/*             'assets/js/es5-shims.min.js',*/
/*             'assets/js/share.js',*/
/*             'assets/js/main.js'*/
/*         ]|theme }}"></script>*/
/*         {% framework extras %}*/
/*         {% scripts %}*/
