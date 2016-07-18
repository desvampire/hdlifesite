<?php

/* /home/u312/domains/hdlife.center/public/themes/humandesignlife/partials/head.htm */
class __TwigTemplate_36250e2b6c3947b058b889bb20f9170736607bea3e5342374964df6b89440950 extends Twig_Template
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
        echo "<!doctype html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"ru\"> <!--<![endif]-->
<head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        ";
        // line 9
        if ((isset($context["post"]) ? $context["post"] : null)) {
            // line 10
            echo "        <title>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
            echo " - Блог Human Desgn Life</title>
        ";
        } elseif (        // line 11
(isset($context["category"]) ? $context["category"] : null)) {
            // line 12
            echo "        <title>Рубрика ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
            echo " - Human Desgn Life</title>
        ";
        } else {
            // line 14
            echo "        <title>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
            echo " - Human Desgn Life</title>
        ";
        }
        // line 16
        echo "        <meta name=\"description\" content=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"Human Desgn Life\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        ";
        // line 20
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 21
        echo "        <link rel=\"icon\" type=\"image/png\" href=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/favicon.png");
        echo "\" />
        <link rel=\"apple-touch-icon\" href=\"";
        // line 22
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/apple-touch-icon.png");
        echo "\">
        <link href=\"";
        // line 23
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/main.css"));
        // line 25
        echo "\" rel=\"stylesheet\">        

        <!--[if lt IE 9]>
            <script src=\"js/vendor/respond.min.js\"></script>
        <![endif]-->
    </head>
<body itemscope itemtype=\"http://schema.org/WebPage\">
        <!--[if lt IE 8]>
            <p class=\"browserupgrade\">Вы используете <strong>очень старый</strong> браузер. Пожалуйста <a href=\"http://browsehappy.com/\">обновите ваш браузер</a> для того, чтобы сделать веб-серфинг безопасным и эффективным.</p>
        <![endif]-->

<div canvas=\"container\">";
    }

    public function getTemplateName()
    {
        return "/home/u312/domains/hdlife.center/public/themes/humandesignlife/partials/head.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  73 => 23,  69 => 22,  64 => 21,  61 => 20,  55 => 17,  50 => 16,  44 => 14,  38 => 12,  36 => 11,  31 => 10,  29 => 9,  19 => 1,);
    }
}
/* <!doctype html>*/
/* <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->*/
/* <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->*/
/* <!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->*/
/* <!--[if gt IE 8]><!--> <html class="no-js" lang="ru"> <!--<![endif]-->*/
/* <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*         {% if post %}*/
/*         <title>{{ post.title }} - Блог Human Desgn Life</title>*/
/*         {% elseif category %}*/
/*         <title>Рубрика {{ category.name }} - Human Desgn Life</title>*/
/*         {% else %}*/
/*         <title>{{ this.page.title }} - Human Desgn Life</title>*/
/*         {% endif %}*/
/*         <meta name="description" content="{{ this.page.meta_description }}">*/
/*         <meta name="title" content="{{ this.page.meta_title }}">*/
/*         <meta name="author" content="Human Desgn Life">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*         {% styles %}*/
/*         <link rel="icon" type="image/png" href="{{ 'assets/img/favicon.png'|theme }}" />*/
/*         <link rel="apple-touch-icon" href="{{ 'assets/img/apple-touch-icon.png'|theme }}">*/
/*         <link href="{{ [*/
/*             'assets/css/main.css'*/
/*         ]|theme }}" rel="stylesheet">        */
/* */
/*         <!--[if lt IE 9]>*/
/*             <script src="js/vendor/respond.min.js"></script>*/
/*         <![endif]-->*/
/*     </head>*/
/* <body itemscope itemtype="http://schema.org/WebPage">*/
/*         <!--[if lt IE 8]>*/
/*             <p class="browserupgrade">Вы используете <strong>очень старый</strong> браузер. Пожалуйста <a href="http://browsehappy.com/">обновите ваш браузер</a> для того, чтобы сделать веб-серфинг безопасным и эффективным.</p>*/
/*         <![endif]-->*/
/* */
/* <div canvas="container">*/
