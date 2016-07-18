<?php

/* /home/u312/domains/hdlife.center/public/themes/humandesignlife/pages/stranica-ne-najdena-oshibka-404.htm */
class __TwigTemplate_b9de670764fe3b281e267e67ac5594481bde015685bb4395efa739606c08b987 extends Twig_Template
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
        echo "<div class=\"container text-center\">
   <header class=\"b_simple_page_header\">
        <h1 class=\"page_title typl8-beta text-center\" itemprop=\"name\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>
    </header>   
    <div class=\"frognotfound\"><img src=\"http://hdlife.center/storage/app/media/utilities/404-froggy.png\" alt=\"ошибка 404\"></div>
    
    <div class=\"grid grid--justify-center\">
            <div class=\"grid__col-md-8 grd__col-md-12 text-center\">
                <p class=\"typl8-gamma\">Ой! Кажется вы забрели совсем далеко, такой страницы действительно не существует.</p>
                <p>Воспользуйтесь формой поиска или вернитесь на <a href=\"http://hdlife.center/\">Главную страницу сайта.</a></p>
                <form action=\"";
        // line 11
        echo $this->env->getExtension('System')->appFilter("/search-results");
        echo "\" method=\"get\" class=\"email-subscribe-main\">
    <input name=\"q\" type=\"text\" placeholder=\"Поиск по сайту...\" autocomplete=\"off\" class=\"client-email-subscribe\">
    <input type=\"submit\" class=\"btn btn-primary btn_red client-email-subscribe--ok\" value=\"ОК\">
</form>
            </div>
    </div>
    
</div>";
    }

    public function getTemplateName()
    {
        return "/home/u312/domains/hdlife.center/public/themes/humandesignlife/pages/stranica-ne-najdena-oshibka-404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  23 => 3,  19 => 1,);
    }
}
/* <div class="container text-center">*/
/*    <header class="b_simple_page_header">*/
/*         <h1 class="page_title typl8-beta text-center" itemprop="name">{{ this.page.title }}</h1>*/
/*     </header>   */
/*     <div class="frognotfound"><img src="http://hdlife.center/storage/app/media/utilities/404-froggy.png" alt="ошибка 404"></div>*/
/*     */
/*     <div class="grid grid--justify-center">*/
/*             <div class="grid__col-md-8 grd__col-md-12 text-center">*/
/*                 <p class="typl8-gamma">Ой! Кажется вы забрели совсем далеко, такой страницы действительно не существует.</p>*/
/*                 <p>Воспользуйтесь формой поиска или вернитесь на <a href="http://hdlife.center/">Главную страницу сайта.</a></p>*/
/*                 <form action="{{ '/search-results' | app }}" method="get" class="email-subscribe-main">*/
/*     <input name="q" type="text" placeholder="Поиск по сайту..." autocomplete="off" class="client-email-subscribe">*/
/*     <input type="submit" class="btn btn-primary btn_red client-email-subscribe--ok" value="ОК">*/
/* </form>*/
/*             </div>*/
/*     </div>*/
/*     */
/* </div>*/
