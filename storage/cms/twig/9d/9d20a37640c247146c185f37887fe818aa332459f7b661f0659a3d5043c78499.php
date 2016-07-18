<?php

/* /home/u312/domains/hdlife.center/public/plugins/rainlab/mailchimp/components/signup/default.htm */
class __TwigTemplate_68c30538243925768d06d099af5f548fff841f98f29bdb3095892993da486de0 extends Twig_Template
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
        echo "
<div id=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "id", array()), "html", null, true);
        echo "container\">
    <form
        data-request=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onSignup\"
        data-request-update=\"'";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::result': '#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "id", array()), "html", null, true);
        echo "container'\">

        <div class=\"input-group\">
            <input name=\"email\" type=\"text\" class=\"form-control\" placeholder=\"john.smith@example.com\"/>
            <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"submit\">Subscribe</button>
            </span>
        </div>
        <span class=\"help-block\">We'll never spam or give this address away.</span>

    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/u312/domains/hdlife.center/public/plugins/rainlab/mailchimp/components/signup/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* */
/* <div id="{{ __SELF__.id }}container">*/
/*     <form*/
/*         data-request="{{ __SELF__ }}::onSignup"*/
/*         data-request-update="'{{ __SELF__ }}::result': '#{{ __SELF__.id }}container'">*/
/* */
/*         <div class="input-group">*/
/*             <input name="email" type="text" class="form-control" placeholder="john.smith@example.com"/>*/
/*             <span class="input-group-btn">*/
/*                 <button class="btn btn-default" type="submit">Subscribe</button>*/
/*             </span>*/
/*         </div>*/
/*         <span class="help-block">We'll never spam or give this address away.</span>*/
/* */
/*     </form>*/
/* </div>*/
