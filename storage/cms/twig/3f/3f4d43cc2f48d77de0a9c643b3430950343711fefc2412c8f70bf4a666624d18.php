<?php

/* /home/u312/domains/hdlife.center/public/themes/humandesignlife/layouts/about-left-sidebar.htm */
class __TwigTemplate_abefb913efb859fc6d0a8d27d0ba03056192a710582abdbe4ab56325cd28ffe9 extends Twig_Template
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
\t    <div class=\"b_primary_content content slide\" role=\"main\">
            <div class=\"container\">
                <div id=\"b_page-left-sidebar\">
                    <div class=\"grid\">
                        <div class=\"grid__col-12 grid__col-md-3 page-sidebar__left\">
                            <aside class=\"page-sidebar\" role=\"complementary\">
                                <div class=\"page-sidebar__widget\">
                                <h4 class=\"widget-title typl8-epsilon\">О нас</h4>
                                    <ul class=\"no-list page-sidebar__links\">
                                    <li><a href=\"/about/our-team\">Мы в лицах</a></li>
                                    <li><a href=\"/about/our-ihds-licenses\">Наши лицензии IHDS</a></li>
                                    <li><a href=\"/about/for-press\">Для прессы</a></li>
                                    <li><a href=\"/contacts\">Контакты</a></li>
                                    </ul>                                    
                                </div>                                
                                <div class=\"page-sidebar__widget\">
                                    <script type=\"text/javascript\" src=\"//vk.com/js/api/openapi.js?122\"></script>

\t\t\t\t\t\t\t\t\t\t<!-- VK Widget -->
\t\t\t\t\t\t\t\t\t\t<div id=\"vk_groups\"></div>
\t\t\t\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\t\tVK.Widgets.Group(\"vk_groups\", {mode: 2, width: \"220\", height: \"300\"}, 78987033);
\t\t\t\t\t\t\t\t\t\t</script>
                                </div>
                            </aside>
                        </div>

                        <div class=\"grid__col-12 grid__col-md-9\">
                            <div class=\"b_page-left-sidebar__content-wrapper\">
                                <header class=\"b_page-left-sidebar__header\">
                                    <div class=\"breadcrumbs-post\">
                                        ";
        // line 36
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("breadcrumbs"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 37
        echo "                                    </div>
                                    <h1 class=\"page_title typl8-beta\" itemprop=\"name\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>
                                </header>
                                <main class=\"b_page-left-sidebar__content\" role=\"main\" itemscope itemprop=\"mainContentOfPage\">
                                    <article role=\"article\" itemscope itemtype=\"http://schema.org/BlogPosting\">
                                        <section class=\"entry-content\" itemprop=\"articleBody\">
                                            ";
        // line 43
        echo $this->env->getExtension('CMS')->pageFunction();
        echo " 
                                        </section>
                                     <footer class=\"article-footer\">
                                                <div class=\"share-this-page\">
                                                    

                                                <script type=\"text/javascript\">(function(w,doc) {
                                                if (!w.__utlWdgt ) {
                                                    w.__utlWdgt = true;
                                                    var d = doc, s = d.createElement('script'), g = 'getElementsByTagName';
                                                    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                                                    s.src = ('https:' == w.location.protocol ? 'https' : 'http')  + '://w.uptolike.com/widgets/v1/uptolike.js';
                                                    var h=d[g]('body')[0];
                                                    h.appendChild(s);
                                                }})(window,document);
                                                </script>
                                                <div data-background-alpha=\"0.0\" data-buttons-color=\"#ffffff\" data-counter-background-color=\"#ffffff\" data-share-counter-size=\"12\" data-top-button=\"false\" data-share-counter-type=\"disable\" data-share-style=\"12\" data-mode=\"share\" data-like-text-enable=\"false\" data-mobile-view=\"true\" data-icon-color=\"#ffffff\" data-orientation=\"horizontal\" data-text-color=\"#000000\" data-share-shape=\"rectangle\" data-sn-ids=\"fb.vk.tw.ok.\" data-share-size=\"30\" data-background-color=\"#ffffff\" data-preview-mobile=\"false\" data-mobile-sn-ids=\"fb.vk.tw.wh.ok.vb.\" data-pid=\"1526080\" data-counter-background-alpha=\"1.0\" data-following-enable=\"false\" data-exclude-show-more=\"false\" data-selection-enable=\"false\" class=\"uptolike-buttons\" ></div>
                                                                                </div>                         
                                     </footer>
                                    </article>
                                </main>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>       
\t    </div>

        ";
        // line 71
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 72
        echo "        </div>
        ";
        // line 73
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("mobile-site-menu.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 74
        echo "    
    ";
        // line 75
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("js-scripts.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 76
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/u312/domains/hdlife.center/public/themes/humandesignlife/layouts/about-left-sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 76,  127 => 75,  124 => 74,  120 => 73,  117 => 72,  113 => 71,  82 => 43,  74 => 38,  71 => 37,  67 => 36,  33 => 4,  28 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% partial "head" %}*/
/*         {% partial "desktop-header.htm" %}*/
/*         {% partial "mobile-header.htm" %}*/
/* */
/* 	    <div class="b_primary_content content slide" role="main">*/
/*             <div class="container">*/
/*                 <div id="b_page-left-sidebar">*/
/*                     <div class="grid">*/
/*                         <div class="grid__col-12 grid__col-md-3 page-sidebar__left">*/
/*                             <aside class="page-sidebar" role="complementary">*/
/*                                 <div class="page-sidebar__widget">*/
/*                                 <h4 class="widget-title typl8-epsilon">О нас</h4>*/
/*                                     <ul class="no-list page-sidebar__links">*/
/*                                     <li><a href="/about/our-team">Мы в лицах</a></li>*/
/*                                     <li><a href="/about/our-ihds-licenses">Наши лицензии IHDS</a></li>*/
/*                                     <li><a href="/about/for-press">Для прессы</a></li>*/
/*                                     <li><a href="/contacts">Контакты</a></li>*/
/*                                     </ul>                                    */
/*                                 </div>                                */
/*                                 <div class="page-sidebar__widget">*/
/*                                     <script type="text/javascript" src="//vk.com/js/api/openapi.js?122"></script>*/
/* */
/* 										<!-- VK Widget -->*/
/* 										<div id="vk_groups"></div>*/
/* 										<script type="text/javascript">*/
/* 										VK.Widgets.Group("vk_groups", {mode: 2, width: "220", height: "300"}, 78987033);*/
/* 										</script>*/
/*                                 </div>*/
/*                             </aside>*/
/*                         </div>*/
/* */
/*                         <div class="grid__col-12 grid__col-md-9">*/
/*                             <div class="b_page-left-sidebar__content-wrapper">*/
/*                                 <header class="b_page-left-sidebar__header">*/
/*                                     <div class="breadcrumbs-post">*/
/*                                         {% component 'breadcrumbs' %}*/
/*                                     </div>*/
/*                                     <h1 class="page_title typl8-beta" itemprop="name">{{ this.page.title }}</h1>*/
/*                                 </header>*/
/*                                 <main class="b_page-left-sidebar__content" role="main" itemscope itemprop="mainContentOfPage">*/
/*                                     <article role="article" itemscope itemtype="http://schema.org/BlogPosting">*/
/*                                         <section class="entry-content" itemprop="articleBody">*/
/*                                             {% page %} */
/*                                         </section>*/
/*                                      <footer class="article-footer">*/
/*                                                 <div class="share-this-page">*/
/*                                                     */
/* */
/*                                                 <script type="text/javascript">(function(w,doc) {*/
/*                                                 if (!w.__utlWdgt ) {*/
/*                                                     w.__utlWdgt = true;*/
/*                                                     var d = doc, s = d.createElement('script'), g = 'getElementsByTagName';*/
/*                                                     s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;*/
/*                                                     s.src = ('https:' == w.location.protocol ? 'https' : 'http')  + '://w.uptolike.com/widgets/v1/uptolike.js';*/
/*                                                     var h=d[g]('body')[0];*/
/*                                                     h.appendChild(s);*/
/*                                                 }})(window,document);*/
/*                                                 </script>*/
/*                                                 <div data-background-alpha="0.0" data-buttons-color="#ffffff" data-counter-background-color="#ffffff" data-share-counter-size="12" data-top-button="false" data-share-counter-type="disable" data-share-style="12" data-mode="share" data-like-text-enable="false" data-mobile-view="true" data-icon-color="#ffffff" data-orientation="horizontal" data-text-color="#000000" data-share-shape="rectangle" data-sn-ids="fb.vk.tw.ok." data-share-size="30" data-background-color="#ffffff" data-preview-mobile="false" data-mobile-sn-ids="fb.vk.tw.wh.ok.vb." data-pid="1526080" data-counter-background-alpha="1.0" data-following-enable="false" data-exclude-show-more="false" data-selection-enable="false" class="uptolike-buttons" ></div>*/
/*                                                                                 </div>                         */
/*                                      </footer>*/
/*                                     </article>*/
/*                                 </main>                                */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>       */
/* 	    </div>*/
/* */
/*         {% partial "footer.htm" %}*/
/*         </div>*/
/*         {% partial "mobile-site-menu.htm" %}*/
/*     */
/*     {% partial "js-scripts.htm" %}*/
/* </body>*/
/* </html>*/
