<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3a518ed67aa7498d19f1f067ea3e113213ff54c07b91aa542c9dc6a944dd7708 extends Twig_Template
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
        $__internal_84bbe10b4811857c41f950bfd8de25a3271570ff667badc2c8283b89ddaaef3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84bbe10b4811857c41f950bfd8de25a3271570ff667badc2c8283b89ddaaef3f->enter($__internal_84bbe10b4811857c41f950bfd8de25a3271570ff667badc2c8283b89ddaaef3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84bbe10b4811857c41f950bfd8de25a3271570ff667badc2c8283b89ddaaef3f->leave($__internal_84bbe10b4811857c41f950bfd8de25a3271570ff667badc2c8283b89ddaaef3f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_57f9f012ec7b0cddbeb689157b78053753e5b95bd111868c4ea6998b3e3d449d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f9f012ec7b0cddbeb689157b78053753e5b95bd111868c4ea6998b3e3d449d->enter($__internal_57f9f012ec7b0cddbeb689157b78053753e5b95bd111868c4ea6998b3e3d449d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_57f9f012ec7b0cddbeb689157b78053753e5b95bd111868c4ea6998b3e3d449d->leave($__internal_57f9f012ec7b0cddbeb689157b78053753e5b95bd111868c4ea6998b3e3d449d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2e32c5e35b8f006f712907ca397c9e104ad908cffdf7c85dd6897c0b9287fb0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e32c5e35b8f006f712907ca397c9e104ad908cffdf7c85dd6897c0b9287fb0c->enter($__internal_2e32c5e35b8f006f712907ca397c9e104ad908cffdf7c85dd6897c0b9287fb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2e32c5e35b8f006f712907ca397c9e104ad908cffdf7c85dd6897c0b9287fb0c->leave($__internal_2e32c5e35b8f006f712907ca397c9e104ad908cffdf7c85dd6897c0b9287fb0c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed0f0a0e885ac3ec3a019b984c6ff806fdf2e78ea15299fd9676b83b278f3eb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0f0a0e885ac3ec3a019b984c6ff806fdf2e78ea15299fd9676b83b278f3eb7->enter($__internal_ed0f0a0e885ac3ec3a019b984c6ff806fdf2e78ea15299fd9676b83b278f3eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ed0f0a0e885ac3ec3a019b984c6ff806fdf2e78ea15299fd9676b83b278f3eb7->leave($__internal_ed0f0a0e885ac3ec3a019b984c6ff806fdf2e78ea15299fd9676b83b278f3eb7_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/oqroom/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
