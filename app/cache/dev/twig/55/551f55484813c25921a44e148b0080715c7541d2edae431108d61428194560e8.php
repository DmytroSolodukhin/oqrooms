<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_24a93a5515120c5669009298683b15b2f9d3f7d0ec5dae9a27b750421926cf45 extends Twig_Template
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
        $__internal_b436efe8f9cf5ac62d809a8f80d1dd0720a716bae2863ddc1936d3cd37a8a6cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b436efe8f9cf5ac62d809a8f80d1dd0720a716bae2863ddc1936d3cd37a8a6cd->enter($__internal_b436efe8f9cf5ac62d809a8f80d1dd0720a716bae2863ddc1936d3cd37a8a6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b436efe8f9cf5ac62d809a8f80d1dd0720a716bae2863ddc1936d3cd37a8a6cd->leave($__internal_b436efe8f9cf5ac62d809a8f80d1dd0720a716bae2863ddc1936d3cd37a8a6cd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a3585f360152de37dbc3c04bb8a1f1819bf6502ecc810fe991323b703707616b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3585f360152de37dbc3c04bb8a1f1819bf6502ecc810fe991323b703707616b->enter($__internal_a3585f360152de37dbc3c04bb8a1f1819bf6502ecc810fe991323b703707616b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a3585f360152de37dbc3c04bb8a1f1819bf6502ecc810fe991323b703707616b->leave($__internal_a3585f360152de37dbc3c04bb8a1f1819bf6502ecc810fe991323b703707616b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b252dcfd8bff013eb7acbd8c7221b95300802066d22f42af02a3ed9b3e65b416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b252dcfd8bff013eb7acbd8c7221b95300802066d22f42af02a3ed9b3e65b416->enter($__internal_b252dcfd8bff013eb7acbd8c7221b95300802066d22f42af02a3ed9b3e65b416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b252dcfd8bff013eb7acbd8c7221b95300802066d22f42af02a3ed9b3e65b416->leave($__internal_b252dcfd8bff013eb7acbd8c7221b95300802066d22f42af02a3ed9b3e65b416_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a60df79ff1e8e4a4d44f0ea85973607131683272299af03d4fa134c706a04ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a60df79ff1e8e4a4d44f0ea85973607131683272299af03d4fa134c706a04ef6->enter($__internal_a60df79ff1e8e4a4d44f0ea85973607131683272299af03d4fa134c706a04ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a60df79ff1e8e4a4d44f0ea85973607131683272299af03d4fa134c706a04ef6->leave($__internal_a60df79ff1e8e4a4d44f0ea85973607131683272299af03d4fa134c706a04ef6_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/aleksandra/myaso/oqrooms/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
