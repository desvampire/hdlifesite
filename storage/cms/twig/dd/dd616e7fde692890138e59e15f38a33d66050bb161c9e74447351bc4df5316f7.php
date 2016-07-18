<?php

/* /home/u312/domains/hdlife.center/public/themes/humandesignlife/layouts/site.htm */
class __TwigTemplate_ec269e707d8f441cc38cccede2fb05973ea37a9731569046a59c5a6e0fd7802b extends Twig_Template
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
        echo "
\t    <main class=\"b_primary_content content slide\" role=\"main\" itemscope itemprop=\"mainContentOfPage\">
\t        ";
        // line 6
        echo $this->env->getExtension('CMS')->pageFunction();
        echo "        
\t    </main>

        ";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "        </div>
        ";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("mobile-site-menu.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "    
";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("js-scripts.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo "  
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/u312/domains/hdlife.center/public/themes/humandesignlife/layouts/site.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  54 => 12,  50 => 11,  47 => 10,  43 => 9,  37 => 6,  33 => 4,  28 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% partial "head" %}*/
/*         {% partial "desktop-header.htm" %}*/
/*         {% partial "mobile-header.htm" %}*/
/* */
/* 	    <main class="b_primary_content content slide" role="main" itemscope itemprop="mainContentOfPage">*/
/* 	        {% page %}        */
/* 	    </main>*/
/* */
/*         {% partial "footer.htm" %}*/
/*         </div>*/
/*         {% partial "mobile-site-menu.htm" %}*/
/*     */
/* {% partial "js-scripts.htm" %}  */
/* </body>*/
/* </html>*/
