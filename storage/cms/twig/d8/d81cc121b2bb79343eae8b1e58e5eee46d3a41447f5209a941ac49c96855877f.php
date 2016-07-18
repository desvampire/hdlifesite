<?php

/* /home/u312/domains/hdlife.center/public/themes/humandesignlife/layouts/page-fullwidth.htm */
class __TwigTemplate_a2482d7370b4ebd74f32ee08e45e05576be24a0332a0ceb4914aba5904935257 extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("head"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("desktop-header.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("mobile-header.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "        <div class=\"b_primary_content\">
            <header class=\"page-header__grey-bg\">
                <div class=\"container\">
                    <div class=\"page-header__grey-bg--inner\">
                        <h1 class=\"page_title typl8-beta\" itemprop=\"name\">";
        // line 8
        if ((isset($context["category"]) ? $context["category"] : null)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
            echo " ";
        }
        echo "</h1>
                         ";
        // line 9
        if ((isset($context["post"]) ? $context["post"] : null)) {
            // line 10
            echo "                            ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("breadcrumbs_post"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 11
            echo "                         ";
        } elseif ((isset($context["category"]) ? $context["category"] : null)) {
            // line 12
            echo "                            ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("breadcrumbs_cat"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 13
            echo "                         ";
        } else {
            // line 14
            echo "                            ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction("breadcrumbs"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 15
            echo "                         ";
        }
        // line 16
        echo "                    </div>
                </div>
            </header>
            
            <main class=\"b_page-content\" role=\"main\" itemscope itemprop=\"mainContentOfPage\">
                <section class=\"entry-content\">
                   ";
        // line 22
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 23
        echo "               </section>
            </main>
        </div>

        ";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "        </div>
        ";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("mobile-site-menu.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "    
";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("js-scripts.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo " 
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/u312/domains/hdlife.center/public/themes/humandesignlife/layouts/page-fullwidth.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 31,  104 => 30,  100 => 29,  97 => 28,  93 => 27,  87 => 23,  85 => 22,  77 => 16,  74 => 15,  69 => 14,  66 => 13,  61 => 12,  58 => 11,  53 => 10,  51 => 9,  39 => 8,  33 => 4,  28 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% partial "head" %}*/
/*         {% partial "desktop-header.htm" %}*/
/*         {% partial "mobile-header.htm" %}*/
/*         <div class="b_primary_content">*/
/*             <header class="page-header__grey-bg">*/
/*                 <div class="container">*/
/*                     <div class="page-header__grey-bg--inner">*/
/*                         <h1 class="page_title typl8-beta" itemprop="name">{% if category %} {{ category.name }} {% else %} {{ this.page.title }} {% endif %}</h1>*/
/*                          {% if post %}*/
/*                             {% partial "breadcrumbs_post" %}*/
/*                          {% elseif category %}*/
/*                             {% partial "breadcrumbs_cat" %}*/
/*                          {% else %}*/
/*                             {% partial "breadcrumbs" %}*/
/*                          {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             </header>*/
/*             */
/*             <main class="b_page-content" role="main" itemscope itemprop="mainContentOfPage">*/
/*                 <section class="entry-content">*/
/*                    {% page %}*/
/*                </section>*/
/*             </main>*/
/*         </div>*/
/* */
/*         {% partial "footer.htm" %}*/
/*         </div>*/
/*         {% partial "mobile-site-menu.htm" %}*/
/*     */
/* {% partial "js-scripts.htm" %} */
/* </body>*/
/* </html>*/
