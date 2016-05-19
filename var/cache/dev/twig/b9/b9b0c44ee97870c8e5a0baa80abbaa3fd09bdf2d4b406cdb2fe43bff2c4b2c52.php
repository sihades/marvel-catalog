<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_94e5ebadbd30fa803fd20c2136cbfe9c4b75e11e944cb266a5a0b3f8d11fa63c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15205ef257cb69050dab85bd610453cd68e67c00671b13986f1daa4e9b5c80d3 = $this->env->getExtension("native_profiler");
        $__internal_15205ef257cb69050dab85bd610453cd68e67c00671b13986f1daa4e9b5c80d3->enter($__internal_15205ef257cb69050dab85bd610453cd68e67c00671b13986f1daa4e9b5c80d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15205ef257cb69050dab85bd610453cd68e67c00671b13986f1daa4e9b5c80d3->leave($__internal_15205ef257cb69050dab85bd610453cd68e67c00671b13986f1daa4e9b5c80d3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9bfb5e034b4f0f40595770c38cdd51bea019e2814b8c98c502b84dc6b38ee987 = $this->env->getExtension("native_profiler");
        $__internal_9bfb5e034b4f0f40595770c38cdd51bea019e2814b8c98c502b84dc6b38ee987->enter($__internal_9bfb5e034b4f0f40595770c38cdd51bea019e2814b8c98c502b84dc6b38ee987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9bfb5e034b4f0f40595770c38cdd51bea019e2814b8c98c502b84dc6b38ee987->leave($__internal_9bfb5e034b4f0f40595770c38cdd51bea019e2814b8c98c502b84dc6b38ee987_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fa9982e1379d0355df378c5c5f378d4cbcbc7fc5202b02d51e8e2e9fb0d78610 = $this->env->getExtension("native_profiler");
        $__internal_fa9982e1379d0355df378c5c5f378d4cbcbc7fc5202b02d51e8e2e9fb0d78610->enter($__internal_fa9982e1379d0355df378c5c5f378d4cbcbc7fc5202b02d51e8e2e9fb0d78610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fa9982e1379d0355df378c5c5f378d4cbcbc7fc5202b02d51e8e2e9fb0d78610->leave($__internal_fa9982e1379d0355df378c5c5f378d4cbcbc7fc5202b02d51e8e2e9fb0d78610_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dfb9fa83d006af555fff4f25ab12ea67de511b2f248d6639c5440727fde3cdc9 = $this->env->getExtension("native_profiler");
        $__internal_dfb9fa83d006af555fff4f25ab12ea67de511b2f248d6639c5440727fde3cdc9->enter($__internal_dfb9fa83d006af555fff4f25ab12ea67de511b2f248d6639c5440727fde3cdc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dfb9fa83d006af555fff4f25ab12ea67de511b2f248d6639c5440727fde3cdc9->leave($__internal_dfb9fa83d006af555fff4f25ab12ea67de511b2f248d6639c5440727fde3cdc9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
