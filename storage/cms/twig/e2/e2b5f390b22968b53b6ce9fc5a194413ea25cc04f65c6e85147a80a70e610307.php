<?php

/* /home/u312/domains/hdlife.center/public/plugins/bedard/blogtags/components/blogtags/default.htm */
class __TwigTemplate_a83f002d6e592fe90e4219c5948d338ac95c4a226a5e47c32da2c4800a1fa5b5 extends Twig_Template
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
        echo "<ul>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 3
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["tag"], "posts", array())), "html", null, true);
            echo ")</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "/home/u312/domains/hdlife.center/public/plugins/bedard/blogtags/components/blogtags/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul>*/
/*     {% for tag in __SELF__.tags %}*/
/*         <li>{{ tag.name }} ({{ tag.posts|length }})</li>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
