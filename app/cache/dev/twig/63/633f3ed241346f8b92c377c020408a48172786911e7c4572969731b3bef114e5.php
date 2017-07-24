<?php

/* SonataAdminBundle::layout.html.twig */
class __TwigTemplate_660455188266683770cf1779b2df227e689c1c4c97ac627b4b08da1baac35059 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle::standard_layout.html.twig", "SonataAdminBundle::layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_header' => array($this, 'block_sonata_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47b91cd86535bb4af30885abc73c3b0f7a694e4d93963bf5d9e68974d39a0f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47b91cd86535bb4af30885abc73c3b0f7a694e4d93963bf5d9e68974d39a0f74->enter($__internal_47b91cd86535bb4af30885abc73c3b0f7a694e4d93963bf5d9e68974d39a0f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47b91cd86535bb4af30885abc73c3b0f7a694e4d93963bf5d9e68974d39a0f74->leave($__internal_47b91cd86535bb4af30885abc73c3b0f7a694e4d93963bf5d9e68974d39a0f74_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_616825433b3c556fc04802e7a2ec09b3171fe994c00c0d559db794cea5187453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_616825433b3c556fc04802e7a2ec09b3171fe994c00c0d559db794cea5187453->enter($__internal_616825433b3c556fc04802e7a2ec09b3171fe994c00c0d559db794cea5187453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataformatter/markitup/skins/sonata/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataformatter/markitup/sets/markdown/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataformatter/markitup/sets/html/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataformatter/markitup/sets/textile/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_616825433b3c556fc04802e7a2ec09b3171fe994c00c0d559db794cea5187453->leave($__internal_616825433b3c556fc04802e7a2ec09b3171fe994c00c0d559db794cea5187453_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4f8a40ba43df79145f85fd25e8c8d9193eeb5689ba2ed56a6c174158c1f3b4c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f8a40ba43df79145f85fd25e8c8d9193eeb5689ba2ed56a6c174158c1f3b4c9->enter($__internal_4f8a40ba43df79145f85fd25e8c8d9193eeb5689ba2ed56a6c174158c1f3b4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/ivoryckeditor/ckeditor.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataformatter/vendor/markitup-markitup/markitup/jquery.markitup.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataformatter/markitup/sets/markdown/set.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataformatter/markitup/sets/html/set.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sonataformatter/markitup/sets/textile/set.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/js/jquery.ohgooglemaps.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
";
        
        $__internal_4f8a40ba43df79145f85fd25e8c8d9193eeb5689ba2ed56a6c174158c1f3b4c9->leave($__internal_4f8a40ba43df79145f85fd25e8c8d9193eeb5689ba2ed56a6c174158c1f3b4c9_prof);

    }

    // line 25
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_51f8d18b60cef93b47d5d393ae8c55ce206b0cd730125e0757d7fb070c26f25b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f8d18b60cef93b47d5d393ae8c55ce206b0cd730125e0757d7fb070c26f25b->enter($__internal_51f8d18b60cef93b47d5d393ae8c55ce206b0cd730125e0757d7fb070c26f25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 26
        echo "
    ";
        // line 27
        $this->loadTemplate("ComurImageBundle:Form:croppable_image_modal.html.twig", "SonataAdminBundle::layout.html.twig", 27)->display(array_merge($context, array("include_jquery" => false, "include_bootstrap" => false)));
        // line 28
        $this->displayParentBlock("sonata_header", $context, $blocks);
        echo "
";
        
        $__internal_51f8d18b60cef93b47d5d393ae8c55ce206b0cd730125e0757d7fb070c26f25b->leave($__internal_51f8d18b60cef93b47d5d393ae8c55ce206b0cd730125e0757d7fb070c26f25b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 28,  127 => 27,  124 => 26,  118 => 25,  109 => 22,  105 => 21,  101 => 20,  97 => 19,  93 => 18,  89 => 17,  85 => 16,  81 => 15,  75 => 13,  69 => 12,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle::standard_layout.html.twig' %}

{% block stylesheets %}
    {{ parent() }}

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sonataformatter/markitup/skins/sonata/style.css') }}\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sonataformatter/markitup/sets/markdown/style.css') }}\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sonataformatter/markitup/sets/html/style.css') }}\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sonataformatter/markitup/sets/textile/style.css') }}\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script src=\"{{ asset('bundles/ivoryckeditor/ckeditor.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/sonataformatter/vendor/markitup-markitup/markitup/jquery.markitup.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/sonataformatter/markitup/sets/markdown/set.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/sonataformatter/markitup/sets/html/set.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/sonataformatter/markitup/sets/textile/set.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
    <script src=\"{{ asset('/js/jquery.ohgooglemaps.js') }}\"></script>
    <script src=\"{{ path('fos_js_routing_js', {\"callback\": \"fos.Router.setData\"}) }}\"></script>
{% endblock %}

{% block sonata_header %}

    {% include \"ComurImageBundle:Form:croppable_image_modal.html.twig\" with {'include_jquery': false, 'include_bootstrap': false} %}
{{ parent() }}
{% endblock %}", "SonataAdminBundle::layout.html.twig", "/var/www/oqroom/app/Resources/SonataAdminBundle/views/layout.html.twig");
    }
}
