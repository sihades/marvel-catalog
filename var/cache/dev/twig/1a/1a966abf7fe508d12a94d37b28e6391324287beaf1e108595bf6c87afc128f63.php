<?php

/* base.html.twig */
class __TwigTemplate_db9b338eb2901398cfb879170cb1dad8159541818482519f4ad499d7ae8d889e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb57527899c3a16eb3e0ecd619aa4241ee807a734b400874fce28551ca4f38a6 = $this->env->getExtension("native_profiler");
        $__internal_cb57527899c3a16eb3e0ecd619aa4241ee807a734b400874fce28551ca4f38a6->enter($__internal_cb57527899c3a16eb3e0ecd619aa4241ee807a734b400874fce28551ca4f38a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cb57527899c3a16eb3e0ecd619aa4241ee807a734b400874fce28551ca4f38a6->leave($__internal_cb57527899c3a16eb3e0ecd619aa4241ee807a734b400874fce28551ca4f38a6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_967d9380fb23f19cf06fc21001b94364b0e573eaad7373b54381528e2ee12162 = $this->env->getExtension("native_profiler");
        $__internal_967d9380fb23f19cf06fc21001b94364b0e573eaad7373b54381528e2ee12162->enter($__internal_967d9380fb23f19cf06fc21001b94364b0e573eaad7373b54381528e2ee12162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_967d9380fb23f19cf06fc21001b94364b0e573eaad7373b54381528e2ee12162->leave($__internal_967d9380fb23f19cf06fc21001b94364b0e573eaad7373b54381528e2ee12162_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f196d4b010e0d63e87283fcd7dbf5f168356e4d58048cc8b1f908b38af6bb5ec = $this->env->getExtension("native_profiler");
        $__internal_f196d4b010e0d63e87283fcd7dbf5f168356e4d58048cc8b1f908b38af6bb5ec->enter($__internal_f196d4b010e0d63e87283fcd7dbf5f168356e4d58048cc8b1f908b38af6bb5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f196d4b010e0d63e87283fcd7dbf5f168356e4d58048cc8b1f908b38af6bb5ec->leave($__internal_f196d4b010e0d63e87283fcd7dbf5f168356e4d58048cc8b1f908b38af6bb5ec_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff0c547a42d3bfb82e9ba74f84fb047101ae607c8187ea9f6adbe95e29fe0a5a = $this->env->getExtension("native_profiler");
        $__internal_ff0c547a42d3bfb82e9ba74f84fb047101ae607c8187ea9f6adbe95e29fe0a5a->enter($__internal_ff0c547a42d3bfb82e9ba74f84fb047101ae607c8187ea9f6adbe95e29fe0a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ff0c547a42d3bfb82e9ba74f84fb047101ae607c8187ea9f6adbe95e29fe0a5a->leave($__internal_ff0c547a42d3bfb82e9ba74f84fb047101ae607c8187ea9f6adbe95e29fe0a5a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b45a56490d79a44625d839f4bdcd1fe333a0f7d2a4f047447a50ca8fcd6b4f5 = $this->env->getExtension("native_profiler");
        $__internal_3b45a56490d79a44625d839f4bdcd1fe333a0f7d2a4f047447a50ca8fcd6b4f5->enter($__internal_3b45a56490d79a44625d839f4bdcd1fe333a0f7d2a4f047447a50ca8fcd6b4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3b45a56490d79a44625d839f4bdcd1fe333a0f7d2a4f047447a50ca8fcd6b4f5->leave($__internal_3b45a56490d79a44625d839f4bdcd1fe333a0f7d2a4f047447a50ca8fcd6b4f5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
