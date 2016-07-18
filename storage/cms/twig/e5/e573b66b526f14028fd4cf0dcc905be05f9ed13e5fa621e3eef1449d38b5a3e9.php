<?php

/* /home/u312/domains/hdlife.center/public/themes/humandesignlife/partials/breadcrumbs.htm */
class __TwigTemplate_1a6eb584a31ee456607cdf92ddaf1094e7998d04e35b35f05edaf7be2e830504 extends Twig_Template
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
        echo "<div class=\"breadcrumbs-post\">
                           ";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("breadcrumbs"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/u312/domains/hdlife.center/public/themes/humandesignlife/partials/breadcrumbs.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="breadcrumbs-post">*/
/*                            {% component 'breadcrumbs' %}*/
/* </div>*/
