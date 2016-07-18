<?php

/* /home/u312/domains/hdlife.center/public/plugins/rainlab/pages/components/staticbreadcrumbs/default.htm */
class __TwigTemplate_e221a486469fa5b856c65960c60de140351d5a5a23571b3b4e0ccb910c4ed2b2 extends Twig_Template
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
        if ((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)) {
            // line 2
            echo "    <ul>
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 4
                echo "            <li class=\"";
                echo (($this->getAttribute($context["breadcrumb"], "isActive", array())) ? ("active") : (""));
                echo "\">
                <a href=\"";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "title", array()), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/u312/domains/hdlife.center/public/plugins/rainlab/pages/components/staticbreadcrumbs/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  33 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if breadcrumbs %}*/
/*     <ul>*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*             <li class="{{ breadcrumb.isActive ? 'active' : '' }}">*/
/*                 <a href="{{ breadcrumb.url }}">{{ breadcrumb.title }}</a>*/
/*             </li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* {% endif %}*/
