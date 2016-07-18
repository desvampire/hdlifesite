<?php

/* /home/u312/domains/hdlife.center/public/themes/humandesignlife/layouts/kb-left-sidebar.htm */
class __TwigTemplate_9cc232c09bda2e52ffbd6c4aac641e4da082890ea81f748fb7fbdd9a21fe8f0d extends Twig_Template
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
\t    <div class=\"b_primary_content\">
                <header class=\"page-header__grey-bg\">
                    <div class=\"container\">
                        <div class=\"page-header__grey-bg--inner\">
                        <h1 class=\"page_title typl8-beta\" itemprop=\"name\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>
                        <div class=\"breadcrumbs-post\">
                            ";
        // line 11
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("staticBreadcrumbs"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 12
        echo "                        </div>
                        </div>
                    </div>
                </header>        
            <div class=\"container\">
                <div id=\"b_page-left-sidebar\">
                    <div class=\"grid\">
                        <div class=\"grid__col-12 grid__col-md-9\">
                                <main class=\"b_page-left-sidebar__content\" role=\"main\" itemscope itemprop=\"mainContentOfPage\">
                                    <article role=\"article\" itemscope itemtype=\"http://schema.org/BlogPosting\">
                                        <section class=\"entry-content entry-content__post\" itemprop=\"articleBody\">
                                            ";
        // line 23
        echo $this->env->getExtension('CMS')->pageFunction();
        echo " 
                                        </section>
                                     <footer class=\"article-footer\">
                                         <h4 class=\"typl8-delta\">Поделиться материалом с друзьям:</h4>

<div class=\"ya-share2\" data-services=\"vkontakte,facebook,odnoklassniki,moimir,viber,whatsapp\" data-counter=\"\"></div>                        
                                     </footer>
                                    </article>
                                </main>
<!-- Share and subscribe -->
                            <div class=\"after-content__widget\">
                            
                                
                            <div class=\"b_email_subscribe-in-content text-center\">
                                <h4 class=\"typl8-delta haasreg\">Получайте статьи о системе \"Дизайна Человека\" к себе на почту!</h4>
                                ";
        // line 38
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("mailSignup"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 39
        echo "                                <span class=\"grey small\">Защищено от спама, только оригинальные статьи и материалы!</span>
                            </div> <!-- END Email subscribe -->
                                


                            </div><!-- END Share and subscribe -->


                <div class=\"after-content__widget\">
                    <h4 class=\"typl8-delta\">Классические курсы в системе Дизайна Человека</h4>
                    <div class=\"grid\">
                        <div class=\"grid__col-md-4 grid__col-12\">
                                <div class=\"lesson-card\">
                                    <div class=\"lesson-card--cover\">
                                        <a href=\"#\"><img src=\"http://hdlife.center/storage/app/media/lyd-cover-m.png\" alt=\"курс Проживая свой дизайн\" class=\"responsive-img\"></a>
                                    </div>
                                    <div class=\"lesson-card--desc\">
                                        <h4 class=\"typl8-epsilon\"><a href=\"#\" class=\"dark-link\">Курс Проживая свой дизайн</a></h4>
                                        <p>Это ваше первое путешествие по собственной рейв-карте. На практических упражениях вы сможете почувстовать свои Центры во взаимодействии с другими участниками.</p>
                                        <p>Длительность:<strong>2 дня</strong></p>
                                    </div>
                                </div>
                        </div>
                        <div class=\"grid__col-md-4 grid__col-12\">
                                <div class=\"lesson-card\">
                                    <div class=\"lesson-card--cover\">
                                        <a href=\"#\"><img src=\"http://hdlife.center/storage/app/media/abc-cover-m.png\" alt=\"Рейв-курс ABC\" class=\"responsive-img\"></a>
                                    </div>
                                    <div class=\"lesson-card--desc\">
                                        <h4 class=\"typl8-epsilon\"><a href=\"#\" class=\"dark-link\">Рейв-курс ABC</a></h4>
                                        <p>Рейв-курс ABC - это возможность понять свой бодиграф со стороны Личности и Подсознания,узнать существующие контуры  и углубится в значение своего профиля.</p>
                                        <p>Длительность:<strong>3 дня</strong></p>
                                    
                                    
                                </div>
                                </div>
                        </div>
                        <div class=\"grid__col-md-4 grid__col-12\">
                                <div class=\"lesson-card\">
                                    <div class=\"lesson-card--cover\">
                                        <a href=\"#\"><img src=\"http://hdlife.center/storage/app/media/rc-cover-m.png\" alt=\"Курс Рейв-картография\" class=\"responsive-img\"></a>
                                    </div>
                                    <div class=\"lesson-card--desc\">
                                        <h4 class=\"typl8-epsilon\"><a href=\"#\" class=\"dark-link\">Курс Рейв-картография</a></h4>
                                        <p>Этот курс подробно рассматривает значения ворот и каналов, а также биологию 9 центров. По прохождению этого занятия вы сможете выбрать свое профессиональное направление в системе ДЧ.</p>
                                        <p>Длительность:<strong>7 дней</strong></p>
                                    
                                </div>
                                </div> 
                        </div>
                    </div>
                    </div><!-- END COURSES -->                                                                
                            
                        </div>                    
                        <div class=\"grid__col-12 grid__col-md-3 page-sidebar__right\">
                                                        <aside class=\"page-sidebar\" role=\"complementary\" id=\"kb-sidebar\">
                                                        <!-- Page sidebar widget -->
                                                        <div class=\"page-sidebar__widget\">
                                                            <h4 class=\"widget-title typl8-epsilon\">Наука Дизайн Человека</h4>
                                                            ";
        // line 98
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("staticMenu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 99
        echo "                                                        </div>                            
                            
                                                        <!-- Page sidebar widget -->
                                                        <div class=\"page-sidebar__widget\">
                                                            <h4 class=\"widget-title typl8-epsilon\">Типы личностей</h4>
                                                            ";
        // line 104
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("staticMenu2"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "                                
                                                        </div>                            
                            
                            
                                                        <!-- Page sidebar widget -->
                                                        <div class=\"page-sidebar__widget\">
                                                            <h4 class=\"widget-title typl8-epsilon\">Внутренние Авторитеты</h4>
                                                                <ul class=\"no-list page-sidebar__links\">
                                                    <li><a href=\"#\">Сакральный</a></li>
                                                    <li><a href=\"#\">Эмоциональный</a></li>
                                                    <li><a href=\"#\">Селезеночный</a></li>
                                                    <li><a href=\"#\">Эго Манифестируемый Авторитет</a></li>
                                                    <li><a href=\"#\">Само Проецируемый Авторитет</a></li>
                                                    <li><a href=\"#\">Эго Проецируемый</a></li>
                                                    <li><a href=\"#\">Нет внутреннего авторитета</a></li>
                                                    <li><a href=\"#\">Лунный Авторитет</a></li>
                                                                </ul>                                
                                                        </div>                              
                            
                                                        <!-- Page sidebar widget -->
                                                        <div class=\"page-sidebar__widget\">
                                                            <h4 class=\"widget-title typl8-epsilon\">Центры</h4>
                                                                <ul class=\"no-list page-sidebar__links\">
                                                    <li><a href=\"#\">Теменной Центр</a></li>
                                                    <li><a href=\"#\">Аджна Центр</a></li>
                                                    <li><a href=\"#\">Горловой Центр</a></li>
                                                    <li><a href=\"#\">Джи Центр</a></li>                        
                                                    <li><a href=\"#\">Сердечный Центр</a></li>
                                                    <li><a href=\"#\">Центр Селезенки</a></li>
                                                    <li><a href=\"#\">Центр Солнечного Сплетения</a></li>
                                                    <li><a href=\"#\">Сакральный Центр</a></li>                        
                                                    <li><a href=\"#\">Корневой Центр</a></li>
                                                                </ul>                                
                                                        </div>                            
                            
                            
                                                        <!-- Page sidebar widget -->
                                                        <div class=\"page-sidebar__widget\">
                                                            <h4 class=\"widget-title typl8-epsilon\">Профили</h4>
                                                                <ul class=\"no-list page-sidebar__links\">
                                                    <li><a href=\"#\">1/3 — Исследователь-Мученик</a></li>
                                                    <li><a href=\"#\">1/4 — Исследователь-Оппортунист</a></li>
                                                    <li><a href=\"#\">2/4 — Отшельник-Оппортунист</a></li>
                                                    <li><a href=\"#\">2/5 — Отшельник-Еретик</a></li>
                                                    <li><a href=\"#\">3/5 — Мученик-Еретик</a></li>                        
                                                    <li><a href=\"#\">3/6 — Мученик-Ролевая Модель</a></li>
                                                    <li><a href=\"#\">4/6 — Оппортунист-Ролевая Модель</a></li>
                                                    <li><a href=\"#\">4/1 — Оппортунист-Исследователь</a></li>
                                                    <li><a href=\"#\">5/1 — Еретик-Исследователь</a></li>
                                                    <li><a href=\"#\">5/2 — Еретик-Отшельник</a></li>                        
                                                    <li><a href=\"#\">6/2 — Ролевая Модель-Отшельник</a></li>
                                                    <li><a href=\"#\">6/3 — Ролевая Модель-Мученик</a></li>
                                                                </ul>                                
                                                        </div>                                                             
                                                        </aside>
                                <button class=\"sb-toggle-right\">Навигация по базе знаний</button>
                        </div>

                    </div>
                </div>
            </div>       
\t    </div>

        ";
        // line 167
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 168
        echo "        </div>
        ";
        // line 169
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("mobile-site-menu.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 170
        echo "    
";
        // line 171
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("js-scripts.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo " 
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/u312/domains/hdlife.center/public/themes/humandesignlife/layouts/kb-left-sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 171,  235 => 170,  231 => 169,  228 => 168,  224 => 167,  156 => 104,  149 => 99,  145 => 98,  84 => 39,  80 => 38,  62 => 23,  49 => 12,  45 => 11,  40 => 9,  33 => 4,  28 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% partial "head" %}*/
/*         {% partial "desktop-header.htm" %}*/
/*         {% partial "mobile-header.htm" %}*/
/* */
/* 	    <div class="b_primary_content">*/
/*                 <header class="page-header__grey-bg">*/
/*                     <div class="container">*/
/*                         <div class="page-header__grey-bg--inner">*/
/*                         <h1 class="page_title typl8-beta" itemprop="name">{{ this.page.title }}</h1>*/
/*                         <div class="breadcrumbs-post">*/
/*                             {% component 'staticBreadcrumbs' %}*/
/*                         </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </header>        */
/*             <div class="container">*/
/*                 <div id="b_page-left-sidebar">*/
/*                     <div class="grid">*/
/*                         <div class="grid__col-12 grid__col-md-9">*/
/*                                 <main class="b_page-left-sidebar__content" role="main" itemscope itemprop="mainContentOfPage">*/
/*                                     <article role="article" itemscope itemtype="http://schema.org/BlogPosting">*/
/*                                         <section class="entry-content entry-content__post" itemprop="articleBody">*/
/*                                             {% page %} */
/*                                         </section>*/
/*                                      <footer class="article-footer">*/
/*                                          <h4 class="typl8-delta">Поделиться материалом с друзьям:</h4>*/
/* */
/* <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,viber,whatsapp" data-counter=""></div>                        */
/*                                      </footer>*/
/*                                     </article>*/
/*                                 </main>*/
/* <!-- Share and subscribe -->*/
/*                             <div class="after-content__widget">*/
/*                             */
/*                                 */
/*                             <div class="b_email_subscribe-in-content text-center">*/
/*                                 <h4 class="typl8-delta haasreg">Получайте статьи о системе "Дизайна Человека" к себе на почту!</h4>*/
/*                                 {% component 'mailSignup' %}*/
/*                                 <span class="grey small">Защищено от спама, только оригинальные статьи и материалы!</span>*/
/*                             </div> <!-- END Email subscribe -->*/
/*                                 */
/* */
/* */
/*                             </div><!-- END Share and subscribe -->*/
/* */
/* */
/*                 <div class="after-content__widget">*/
/*                     <h4 class="typl8-delta">Классические курсы в системе Дизайна Человека</h4>*/
/*                     <div class="grid">*/
/*                         <div class="grid__col-md-4 grid__col-12">*/
/*                                 <div class="lesson-card">*/
/*                                     <div class="lesson-card--cover">*/
/*                                         <a href="#"><img src="http://hdlife.center/storage/app/media/lyd-cover-m.png" alt="курс Проживая свой дизайн" class="responsive-img"></a>*/
/*                                     </div>*/
/*                                     <div class="lesson-card--desc">*/
/*                                         <h4 class="typl8-epsilon"><a href="#" class="dark-link">Курс Проживая свой дизайн</a></h4>*/
/*                                         <p>Это ваше первое путешествие по собственной рейв-карте. На практических упражениях вы сможете почувстовать свои Центры во взаимодействии с другими участниками.</p>*/
/*                                         <p>Длительность:<strong>2 дня</strong></p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                         </div>*/
/*                         <div class="grid__col-md-4 grid__col-12">*/
/*                                 <div class="lesson-card">*/
/*                                     <div class="lesson-card--cover">*/
/*                                         <a href="#"><img src="http://hdlife.center/storage/app/media/abc-cover-m.png" alt="Рейв-курс ABC" class="responsive-img"></a>*/
/*                                     </div>*/
/*                                     <div class="lesson-card--desc">*/
/*                                         <h4 class="typl8-epsilon"><a href="#" class="dark-link">Рейв-курс ABC</a></h4>*/
/*                                         <p>Рейв-курс ABC - это возможность понять свой бодиграф со стороны Личности и Подсознания,узнать существующие контуры  и углубится в значение своего профиля.</p>*/
/*                                         <p>Длительность:<strong>3 дня</strong></p>*/
/*                                     */
/*                                     */
/*                                 </div>*/
/*                                 </div>*/
/*                         </div>*/
/*                         <div class="grid__col-md-4 grid__col-12">*/
/*                                 <div class="lesson-card">*/
/*                                     <div class="lesson-card--cover">*/
/*                                         <a href="#"><img src="http://hdlife.center/storage/app/media/rc-cover-m.png" alt="Курс Рейв-картография" class="responsive-img"></a>*/
/*                                     </div>*/
/*                                     <div class="lesson-card--desc">*/
/*                                         <h4 class="typl8-epsilon"><a href="#" class="dark-link">Курс Рейв-картография</a></h4>*/
/*                                         <p>Этот курс подробно рассматривает значения ворот и каналов, а также биологию 9 центров. По прохождению этого занятия вы сможете выбрать свое профессиональное направление в системе ДЧ.</p>*/
/*                                         <p>Длительность:<strong>7 дней</strong></p>*/
/*                                     */
/*                                 </div>*/
/*                                 </div> */
/*                         </div>*/
/*                     </div>*/
/*                     </div><!-- END COURSES -->                                                                */
/*                             */
/*                         </div>                    */
/*                         <div class="grid__col-12 grid__col-md-3 page-sidebar__right">*/
/*                                                         <aside class="page-sidebar" role="complementary" id="kb-sidebar">*/
/*                                                         <!-- Page sidebar widget -->*/
/*                                                         <div class="page-sidebar__widget">*/
/*                                                             <h4 class="widget-title typl8-epsilon">Наука Дизайн Человека</h4>*/
/*                                                             {% component 'staticMenu' %}*/
/*                                                         </div>                            */
/*                             */
/*                                                         <!-- Page sidebar widget -->*/
/*                                                         <div class="page-sidebar__widget">*/
/*                                                             <h4 class="widget-title typl8-epsilon">Типы личностей</h4>*/
/*                                                             {% component 'staticMenu2' %}                                */
/*                                                         </div>                            */
/*                             */
/*                             */
/*                                                         <!-- Page sidebar widget -->*/
/*                                                         <div class="page-sidebar__widget">*/
/*                                                             <h4 class="widget-title typl8-epsilon">Внутренние Авторитеты</h4>*/
/*                                                                 <ul class="no-list page-sidebar__links">*/
/*                                                     <li><a href="#">Сакральный</a></li>*/
/*                                                     <li><a href="#">Эмоциональный</a></li>*/
/*                                                     <li><a href="#">Селезеночный</a></li>*/
/*                                                     <li><a href="#">Эго Манифестируемый Авторитет</a></li>*/
/*                                                     <li><a href="#">Само Проецируемый Авторитет</a></li>*/
/*                                                     <li><a href="#">Эго Проецируемый</a></li>*/
/*                                                     <li><a href="#">Нет внутреннего авторитета</a></li>*/
/*                                                     <li><a href="#">Лунный Авторитет</a></li>*/
/*                                                                 </ul>                                */
/*                                                         </div>                              */
/*                             */
/*                                                         <!-- Page sidebar widget -->*/
/*                                                         <div class="page-sidebar__widget">*/
/*                                                             <h4 class="widget-title typl8-epsilon">Центры</h4>*/
/*                                                                 <ul class="no-list page-sidebar__links">*/
/*                                                     <li><a href="#">Теменной Центр</a></li>*/
/*                                                     <li><a href="#">Аджна Центр</a></li>*/
/*                                                     <li><a href="#">Горловой Центр</a></li>*/
/*                                                     <li><a href="#">Джи Центр</a></li>                        */
/*                                                     <li><a href="#">Сердечный Центр</a></li>*/
/*                                                     <li><a href="#">Центр Селезенки</a></li>*/
/*                                                     <li><a href="#">Центр Солнечного Сплетения</a></li>*/
/*                                                     <li><a href="#">Сакральный Центр</a></li>                        */
/*                                                     <li><a href="#">Корневой Центр</a></li>*/
/*                                                                 </ul>                                */
/*                                                         </div>                            */
/*                             */
/*                             */
/*                                                         <!-- Page sidebar widget -->*/
/*                                                         <div class="page-sidebar__widget">*/
/*                                                             <h4 class="widget-title typl8-epsilon">Профили</h4>*/
/*                                                                 <ul class="no-list page-sidebar__links">*/
/*                                                     <li><a href="#">1/3 — Исследователь-Мученик</a></li>*/
/*                                                     <li><a href="#">1/4 — Исследователь-Оппортунист</a></li>*/
/*                                                     <li><a href="#">2/4 — Отшельник-Оппортунист</a></li>*/
/*                                                     <li><a href="#">2/5 — Отшельник-Еретик</a></li>*/
/*                                                     <li><a href="#">3/5 — Мученик-Еретик</a></li>                        */
/*                                                     <li><a href="#">3/6 — Мученик-Ролевая Модель</a></li>*/
/*                                                     <li><a href="#">4/6 — Оппортунист-Ролевая Модель</a></li>*/
/*                                                     <li><a href="#">4/1 — Оппортунист-Исследователь</a></li>*/
/*                                                     <li><a href="#">5/1 — Еретик-Исследователь</a></li>*/
/*                                                     <li><a href="#">5/2 — Еретик-Отшельник</a></li>                        */
/*                                                     <li><a href="#">6/2 — Ролевая Модель-Отшельник</a></li>*/
/*                                                     <li><a href="#">6/3 — Ролевая Модель-Мученик</a></li>*/
/*                                                                 </ul>                                */
/*                                                         </div>                                                             */
/*                                                         </aside>*/
/*                                 <button class="sb-toggle-right">Навигация по базе знаний</button>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>       */
/* 	    </div>*/
/* */
/*         {% partial "footer.htm" %}*/
/*         </div>*/
/*         {% partial "mobile-site-menu.htm" %}*/
/*     */
/* {% partial "js-scripts.htm" %} */
/* </body>*/
/* </html>*/
