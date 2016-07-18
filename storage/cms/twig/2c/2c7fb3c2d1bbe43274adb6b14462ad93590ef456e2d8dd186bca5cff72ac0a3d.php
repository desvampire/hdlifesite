<?php

/* /home/u312/domains/hdlife.center/public/plugins/rainlab/pages/components/staticmenu/default.htm */
class __TwigTemplate_c67f61635544506c4074e65d0d6174f12cf3dd6b15ae6ae0cb1be85f565fc31d extends Twig_Template
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
        if ($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "menuItems", array())) {
            // line 2
            echo "    <ul>
        ";
            // line 3
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "menuItems", array())            ;
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::items")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 4
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/u312/domains/hdlife.center/public/plugins/rainlab/pages/components/staticmenu/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if __SELF__.menuItems %}*/
/*     <ul>*/
/*         {% partial __SELF__ ~ "::items" items=__SELF__.menuItems %}*/
/*     </ul>*/
/* {% endif %}*/
