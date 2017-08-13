<?php

/* WebBundle:Default:page.html.twig */
class __TwigTemplate_1241af5fbf63d41e746ebde073f05116843ba69bacd9c60bdd7dec14063a2436 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebBundle::pagelayout.html.twig", "WebBundle:Default:page.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metateg' => array($this, 'block_metateg'),
            'welcome' => array($this, 'block_welcome'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebBundle::pagelayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5d2feeac8b3c086f40d484b368389d5f3e5d5f558e5f6c1bcfacc5c09912c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d2feeac8b3c086f40d484b368389d5f3e5d5f558e5f6c1bcfacc5c09912c0d->enter($__internal_c5d2feeac8b3c086f40d484b368389d5f3e5d5f558e5f6c1bcfacc5c09912c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Default:page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5d2feeac8b3c086f40d484b368389d5f3e5d5f558e5f6c1bcfacc5c09912c0d->leave($__internal_c5d2feeac8b3c086f40d484b368389d5f3e5d5f558e5f6c1bcfacc5c09912c0d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_67ea114b73ef2fb4ea7e783af412977b6ab9cd879a2ec38364c8bdb5cfa7567f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67ea114b73ef2fb4ea7e783af412977b6ab9cd879a2ec38364c8bdb5cfa7567f->enter($__internal_67ea114b73ef2fb4ea7e783af412977b6ab9cd879a2ec38364c8bdb5cfa7567f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "            <title>
                ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "title", array()), "html", null, true);
        echo "
            </title>
        ";
        
        $__internal_67ea114b73ef2fb4ea7e783af412977b6ab9cd879a2ec38364c8bdb5cfa7567f->leave($__internal_67ea114b73ef2fb4ea7e783af412977b6ab9cd879a2ec38364c8bdb5cfa7567f_prof);

    }

    // line 7
    public function block_metateg($context, array $blocks = array())
    {
        $__internal_6911ec9e7f912ad7fc94004ba89bcb5f7bc5cc1ccf2607c87922d46a67ac6fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6911ec9e7f912ad7fc94004ba89bcb5f7bc5cc1ccf2607c87922d46a67ac6fa7->enter($__internal_6911ec9e7f912ad7fc94004ba89bcb5f7bc5cc1ccf2607c87922d46a67ac6fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metateg"));

        // line 8
        echo "    <meta name=\"description\" content=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "title", array()), "html", null, true);
        echo ", игра, квест комната, секрет, логика, интеллект, головоломки, интуиция, occulto\">
    <meta name=\"keywords\" content=\" квест, комната, квеструм, эскейпрум, ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "title", array()), "html", null, true);
        echo "\" />
";
        
        $__internal_6911ec9e7f912ad7fc94004ba89bcb5f7bc5cc1ccf2607c87922d46a67ac6fa7->leave($__internal_6911ec9e7f912ad7fc94004ba89bcb5f7bc5cc1ccf2607c87922d46a67ac6fa7_prof);

    }

    // line 12
    public function block_welcome($context, array $blocks = array())
    {
        $__internal_bf7848fd5643f637e861afb457e276154f9c40902e6f9e70008d90f15d889cde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7848fd5643f637e861afb457e276154f9c40902e6f9e70008d90f15d889cde->enter($__internal_bf7848fd5643f637e861afb457e276154f9c40902e6f9e70008d90f15d889cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "welcome"));

        
        $__internal_bf7848fd5643f637e861afb457e276154f9c40902e6f9e70008d90f15d889cde->leave($__internal_bf7848fd5643f637e861afb457e276154f9c40902e6f9e70008d90f15d889cde_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_500292911c1579ee2d7bac5534428e3835f50a231d1401b90e082a613d46e71f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500292911c1579ee2d7bac5534428e3835f50a231d1401b90e082a613d46e71f->enter($__internal_500292911c1579ee2d7bac5534428e3835f50a231d1401b90e082a613d46e71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <section>
        <div class=\"index_text_block_quest row\" id=\"first\">
            <div class=\"col-sm-12  quest_blocks text-center\">
                <h1>
                    ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "title", array()), "html", null, true);
        echo "
                </h1>
                <div class=\"col-sm-12 text-center img_gift\">
                    <p>sdfgsdgfsdfgsdfg<img src=\"/images/OQ-rooms2.png\"></p>
                    ";
        // line 24
        echo $this->getAttribute(($context["page"] ?? $this->getContext($context, "page")), "description", array());
        echo "
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_500292911c1579ee2d7bac5534428e3835f50a231d1401b90e082a613d46e71f->leave($__internal_500292911c1579ee2d7bac5534428e3835f50a231d1401b90e082a613d46e71f_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Default:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 24,  99 => 20,  93 => 16,  87 => 15,  76 => 12,  67 => 9,  62 => 8,  56 => 7,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"WebBundle::pagelayout.html.twig\" %}
        {% block title %}
            <title>
                {{ page.title }}
            </title>
        {% endblock %}
{% block metateg %}
    <meta name=\"description\" content=\"{{ page.title }}, игра, квест комната, секрет, логика, интеллект, головоломки, интуиция, occulto\">
    <meta name=\"keywords\" content=\" квест, комната, квеструм, эскейпрум, {{ page.title }}\" />
{% endblock %}

{% block welcome %}
{% endblock %}

{% block content %}
    <section>
        <div class=\"index_text_block_quest row\" id=\"first\">
            <div class=\"col-sm-12  quest_blocks text-center\">
                <h1>
                    {{ page.title }}
                </h1>
                <div class=\"col-sm-12 text-center img_gift\">
                    <p>sdfgsdgfsdfgsdfg<img src=\"/images/OQ-rooms2.png\"></p>
                    {{ page.description|raw }}
                </div>
            </div>
        </div>
    </section>
{% endblock %}



", "WebBundle:Default:page.html.twig", "/var/www/oqroom/src/WebBundle/Resources/views/Default/page.html.twig");
    }
}
