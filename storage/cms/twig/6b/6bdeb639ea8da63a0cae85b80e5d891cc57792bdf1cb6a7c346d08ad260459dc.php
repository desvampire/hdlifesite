<?php

/* /home/u312/domains/hdlife.center/public/themes/humandesignlife/pages/blog-category.htm */
class __TwigTemplate_c81401cfa03bf2a6f67b55f6419bae05e390242281366c11ce2862220e639ea4 extends Twig_Template
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
        echo "<div class=\"row\">
        <div class=\"col-10\">
                               
";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 5
        echo "        </div>
                            
         <div class=\"col-2\">

             <p class=\"get_social__news_bar\">Теги:</p>
             ";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogTags"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "             
         </div>

</div>";
    }

    public function getTemplateName()
    {
        return "/home/u312/domains/hdlife.center/public/themes/humandesignlife/pages/blog-category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 11,  35 => 10,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="row">*/
/*         <div class="col-10">*/
/*                                */
/* {% component 'blogPosts' %}*/
/*         </div>*/
/*                             */
/*          <div class="col-2">*/
/* */
/*              <p class="get_social__news_bar">Теги:</p>*/
/*              {% component 'blogTags' %}*/
/*              */
/*          </div>*/
/* */
/* </div>*/
