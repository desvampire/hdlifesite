<?php

/* /home/u312/domains/hdlife.center/public/themes/humandesignlife/partials/breadcrumbs_cat.htm */
class __TwigTemplate_8e2143a75141fcd2e3f427639d7e609352d65557f81d38f1408fc0f3d1f63fde extends Twig_Template
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
        echo $this->env->getExtension('CMS')->componentFunction("CategoryBreadCrumbs"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/u312/domains/hdlife.center/public/themes/humandesignlife/partials/breadcrumbs_cat.htm";
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
/*                            {% component 'CategoryBreadCrumbs' %}*/
/* </div>*/
