<?php

/* /home/u312/domains/hdlife.center/public/themes/humandesignlife/partials/mobile-header.htm */
class __TwigTemplate_0609d41ea2088d70f4977ea8b181f088c51f42bbde3054409bf047c931e1e518 extends Twig_Template
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
        echo "<header class=\"b_site-mobile-header\">

    <div class=\"site-mobile-nav\">
        <button class=\"btn-reseted site-mobile-buttons\" id=\"site-mobile-nav-trigger\"><svg class=\"icon menu-icon menu-icon__white\"><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"http://hdlife.center/themes/humandesignlife/assets/svg/symbol-defs.svg#icon-bars\"></use></svg></button>
    </div>

    <div class=\"site-mobile-logo\">
        <a href=\"/\"><img src=\"";
        // line 8
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/mobile-logo.svg");
        echo "\" alt=\"HumanDesignLife\" class=\"site-mobile-logo--svg\"></a>
    </div>
    
    <div class=\"site-mobile-search\">
        <button class=\"btn-reseted site-mobile-buttons\" id=\"site-mobile-search-trigger\"><svg class=\"icon icon-search icon-search__white\"><use xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"http://hdlife.center/themes/humandesignlife/assets/svg/symbol-defs.svg#icon-interface\"></use></svg></button>
    </div>

    <div class=\"site-mobile-search--bar\">
        <form action=\"";
        // line 16
        echo $this->env->getExtension('System')->appFilter("/search-results");
        echo "\" method=\"get\">
            <input name=\"q\" type=\"search\" autocomplete=\"off\" id=\"site-mobile-search--input\" placeholder=\"Введите запрос...\">
        </form>
    </div>
         
</header>";
    }

    public function getTemplateName()
    {
        return "/home/u312/domains/hdlife.center/public/themes/humandesignlife/partials/mobile-header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 16,  28 => 8,  19 => 1,);
    }
}
/* <header class="b_site-mobile-header">*/
/* */
/*     <div class="site-mobile-nav">*/
/*         <button class="btn-reseted site-mobile-buttons" id="site-mobile-nav-trigger"><svg class="icon menu-icon menu-icon__white"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://hdlife.center/themes/humandesignlife/assets/svg/symbol-defs.svg#icon-bars"></use></svg></button>*/
/*     </div>*/
/* */
/*     <div class="site-mobile-logo">*/
/*         <a href="/"><img src="{{ 'assets/img/mobile-logo.svg'|theme }}" alt="HumanDesignLife" class="site-mobile-logo--svg"></a>*/
/*     </div>*/
/*     */
/*     <div class="site-mobile-search">*/
/*         <button class="btn-reseted site-mobile-buttons" id="site-mobile-search-trigger"><svg class="icon icon-search icon-search__white"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://hdlife.center/themes/humandesignlife/assets/svg/symbol-defs.svg#icon-interface"></use></svg></button>*/
/*     </div>*/
/* */
/*     <div class="site-mobile-search--bar">*/
/*         <form action="{{ '/search-results' | app }}" method="get">*/
/*             <input name="q" type="search" autocomplete="off" id="site-mobile-search--input" placeholder="Введите запрос...">*/
/*         </form>*/
/*     </div>*/
/*          */
/* </header>*/
