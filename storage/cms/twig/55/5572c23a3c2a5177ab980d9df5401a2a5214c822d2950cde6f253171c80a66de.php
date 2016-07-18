<?php

/* /home/u312/domains/hdlife.center/public/themes/humandesignlife/pages/novosti-proekta.htm */
class __TwigTemplate_9c79143d12d889cb757f9c8e631765e6a98ab4c45d796fd0cb166b0266181221 extends Twig_Template
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
        echo "<!-- SITE CONTENT -->
        <main class=\"b_primary_content\" role=\"main\" itemscope itemprop=\"mainContentOfPage\" itemtype=\"http://schema.org/Blog\">
            
            <!-- Featured posts -->
        <div class=\"container\">
            <div class=\"b_featured-posts\">
                <div class=\"grid\">
                    
                    <!-- XL POST -->
                    <section class=\"grid__col-12 grid__col-md-7 grid__col--bleed featured-post\">
                        <div class=\"grid__cell\">
                            <div class=\"featured-post__xl\">  
                            <a href=\"blog-single.html\" class=\"cover-trigger\"></a>
                            <a href=\"blog-single.html\" class=\"example-img-grid example-focus\" style=\"background-image:url('../img/post-xl.jpg');\">
                                <div class=\"example-img-grid-footer\"><h4 class=\"white\">Стратегия - это конституция, Авторитет - это судья.</h4></div>                               
                            </a>
                                    <ul class=\"featured-post_content--info\">
                                        <li>Дизайн Человека</li>
                                        <li>10.06.2016</li>
                                    </ul>                             
                            </div>
                        </div>                           
                                               
                            
                    </section>
                    
                    <div class=\"grid__col-12 grid__col-md-5 grid__col--bleed\">
                    
                    <div class=\"grid\">
                    
                    <!-- M POST -->
                    <section class=\"grid__col-12 grid__col--bleed featured-post\">
                        <div class=\"grid__cell\">
                            <div class=\"featured-post__m\">
                            <a href=\"#\" class=\"cover-trigger\"></a>                       
                            <a href=\"#\" class=\"example-img-grid example-focus\" style=\"background-image:url('../img/post-m.jpg')\">
                                <div class=\"example-img-grid-footer\"><h4 class=\"typl8-delta white\">Я – Эмоциональный. Самое большое открытие.</h4></div>
                                    <ul class=\"featured-post_content--info\">
                                        <li>Дизайн Человека</li>
                                        <li itemprop=\"datePublished\"s>10.06.2016</li>
                                    </ul>                                
                            </a>
                            </div>
                        </div>                                                   
                    </section>
                    
                    <!-- S POST -->
                    <section class=\"grid__col-md-6 grid__col-12 grid__col--bleed featured-post\">
                        <div class=\"grid__cell\">
                            <div class=\"featured-post__s\">  
                            <a href=\"#\" class=\"cover-trigger\"></a>                     
                            <a href=\"#\" class=\"example-img-grid example-focus\" style=\"background-image:url('../img/post-s.jpg');\">
                            <div class=\"example-img-grid-footer\"><h4 class=\"typl8-zeta white\">Что предпринимают люди, чтобы перестать проживать тему «ложного я» своего типа?</h4></div>
                                    <ul class=\"featured-post_content--info\">
                                        <li>Дизайн Человека</li>
                                        <li itemprop=\"datePublished\">10.06.2016</li>
                                    </ul>                                
                            </a>
                            </div>
                        </div>                    
                        </section>
                                
                    
                    <section class=\"grid__col-md-6 grid__col-12 grid__col--bleed featured-post\">
                        <div class=\"grid__cell\">
                            <div class=\"featured-post__s\">
                            <a href=\"#\" class=\"cover-trigger\"></a>                      
                            <a href=\"#\" class=\"example-img-grid example-focus\" style=\"background-image:url('../img/post-s2.png');\">
                            <div class=\"example-img-grid-footer\"><h4 class=\"typl8-zeta white\">Все что вы хотели знать о Лунных циклах</h4></div>
                            </a>
                                    <ul class=\"featured-post_content--info\">
                                        <li>Дизайн Человека</li>
                                        <li itemprop=\"datePublished\">10.06.2016</li>
                                    </ul>                            
                            </div>
                        </div>                    
                    </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- END FEATURED POSTS -->

    <!-- Latest posts block -->
    <div class=\"container\">
        <!-- Section posts block title -->
";
        // line 87
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 88
        echo "
        <!-- posts from category -->
        
        ";
        // line 91
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 92
        echo "        

    </div><!-- end of all latest posts container -->

  
                

        </main>";
    }

    public function getTemplateName()
    {
        return "/home/u312/domains/hdlife.center/public/themes/humandesignlife/pages/novosti-proekta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 92,  116 => 91,  111 => 88,  107 => 87,  19 => 1,);
    }
}
/* <!-- SITE CONTENT -->*/
/*         <main class="b_primary_content" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">*/
/*             */
/*             <!-- Featured posts -->*/
/*         <div class="container">*/
/*             <div class="b_featured-posts">*/
/*                 <div class="grid">*/
/*                     */
/*                     <!-- XL POST -->*/
/*                     <section class="grid__col-12 grid__col-md-7 grid__col--bleed featured-post">*/
/*                         <div class="grid__cell">*/
/*                             <div class="featured-post__xl">  */
/*                             <a href="blog-single.html" class="cover-trigger"></a>*/
/*                             <a href="blog-single.html" class="example-img-grid example-focus" style="background-image:url('../img/post-xl.jpg');">*/
/*                                 <div class="example-img-grid-footer"><h4 class="white">Стратегия - это конституция, Авторитет - это судья.</h4></div>                               */
/*                             </a>*/
/*                                     <ul class="featured-post_content--info">*/
/*                                         <li>Дизайн Человека</li>*/
/*                                         <li>10.06.2016</li>*/
/*                                     </ul>                             */
/*                             </div>*/
/*                         </div>                           */
/*                                                */
/*                             */
/*                     </section>*/
/*                     */
/*                     <div class="grid__col-12 grid__col-md-5 grid__col--bleed">*/
/*                     */
/*                     <div class="grid">*/
/*                     */
/*                     <!-- M POST -->*/
/*                     <section class="grid__col-12 grid__col--bleed featured-post">*/
/*                         <div class="grid__cell">*/
/*                             <div class="featured-post__m">*/
/*                             <a href="#" class="cover-trigger"></a>                       */
/*                             <a href="#" class="example-img-grid example-focus" style="background-image:url('../img/post-m.jpg')">*/
/*                                 <div class="example-img-grid-footer"><h4 class="typl8-delta white">Я – Эмоциональный. Самое большое открытие.</h4></div>*/
/*                                     <ul class="featured-post_content--info">*/
/*                                         <li>Дизайн Человека</li>*/
/*                                         <li itemprop="datePublished"s>10.06.2016</li>*/
/*                                     </ul>                                */
/*                             </a>*/
/*                             </div>*/
/*                         </div>                                                   */
/*                     </section>*/
/*                     */
/*                     <!-- S POST -->*/
/*                     <section class="grid__col-md-6 grid__col-12 grid__col--bleed featured-post">*/
/*                         <div class="grid__cell">*/
/*                             <div class="featured-post__s">  */
/*                             <a href="#" class="cover-trigger"></a>                     */
/*                             <a href="#" class="example-img-grid example-focus" style="background-image:url('../img/post-s.jpg');">*/
/*                             <div class="example-img-grid-footer"><h4 class="typl8-zeta white">Что предпринимают люди, чтобы перестать проживать тему «ложного я» своего типа?</h4></div>*/
/*                                     <ul class="featured-post_content--info">*/
/*                                         <li>Дизайн Человека</li>*/
/*                                         <li itemprop="datePublished">10.06.2016</li>*/
/*                                     </ul>                                */
/*                             </a>*/
/*                             </div>*/
/*                         </div>                    */
/*                         </section>*/
/*                                 */
/*                     */
/*                     <section class="grid__col-md-6 grid__col-12 grid__col--bleed featured-post">*/
/*                         <div class="grid__cell">*/
/*                             <div class="featured-post__s">*/
/*                             <a href="#" class="cover-trigger"></a>                      */
/*                             <a href="#" class="example-img-grid example-focus" style="background-image:url('../img/post-s2.png');">*/
/*                             <div class="example-img-grid-footer"><h4 class="typl8-zeta white">Все что вы хотели знать о Лунных циклах</h4></div>*/
/*                             </a>*/
/*                                     <ul class="featured-post_content--info">*/
/*                                         <li>Дизайн Человека</li>*/
/*                                         <li itemprop="datePublished">10.06.2016</li>*/
/*                                     </ul>                            */
/*                             </div>*/
/*                         </div>                    */
/*                     </section>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!-- END FEATURED POSTS -->*/
/* */
/*     <!-- Latest posts block -->*/
/*     <div class="container">*/
/*         <!-- Section posts block title -->*/
/* {% component 'blogPosts' %}*/
/* */
/*         <!-- posts from category -->*/
/*         */
/*         {% component 'blogCategories' %}*/
/*         */
/* */
/*     </div><!-- end of all latest posts container -->*/
/* */
/*   */
/*                 */
/* */
/*         </main>*/
