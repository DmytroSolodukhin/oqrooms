<?php

/* WebBundle:Menu:primaryNav.html.twig */
class __TwigTemplate_d10cd2c4bc7abd62bf67ecd4eceb24744c582b239d872fd600cd3153dcaeaf04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "WebBundle:Menu:primaryNav.html.twig", 1);
        $this->blocks = array(
            'linkElement' => array($this, 'block_linkElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a7fdb06804e0dcafad47d5daf34c5f2a06ae67417ef8f057e74bcdd31e2d382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a7fdb06804e0dcafad47d5daf34c5f2a06ae67417ef8f057e74bcdd31e2d382->enter($__internal_0a7fdb06804e0dcafad47d5daf34c5f2a06ae67417ef8f057e74bcdd31e2d382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Menu:primaryNav.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a7fdb06804e0dcafad47d5daf34c5f2a06ae67417ef8f057e74bcdd31e2d382->leave($__internal_0a7fdb06804e0dcafad47d5daf34c5f2a06ae67417ef8f057e74bcdd31e2d382_prof);

    }

    // line 2
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_78e23e68a609f3a0b69689be948e5513e6571a6495260f37598787f83332ea6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78e23e68a609f3a0b69689be948e5513e6571a6495260f37598787f83332ea6b->enter($__internal_78e23e68a609f3a0b69689be948e5513e6571a6495260f37598787f83332ea6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 3
        echo "    ";
        $context["knp_menu"] = $this->loadTemplate("knp_menu.html.twig", "WebBundle:Menu:primaryNav.html.twig", 3);
        // line 4
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array()));
        echo " title=\"";
        $this->displayBlock("label", $context, $blocks);
        echo "\">
        <span ";
        // line 5
        if ( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "glyphicon"), "method"))) {
            // line 6
            echo "                class=\"glyphicon ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "glyphicon"), "method"), "html", null, true);
            echo "\"
            ";
        }
        // line 7
        echo ">
            ";
        // line 8
        $this->displayBlock("label", $context, $blocks);
        echo "
        </span>
    </a>
";
        
        $__internal_78e23e68a609f3a0b69689be948e5513e6571a6495260f37598787f83332ea6b->leave($__internal_78e23e68a609f3a0b69689be948e5513e6571a6495260f37598787f83332ea6b_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Menu:primaryNav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  60 => 7,  54 => 6,  52 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}
{% block linkElement %}
    {% import 'knp_menu.html.twig' as knp_menu %}
    <a href=\"{{ item.uri }}\"{{ knp_menu.attributes(item.linkAttributes) }} title=\"{{ block('label') }}\">
        <span {% if item.attribute('glyphicon') is not empty  %}
                class=\"glyphicon {{ item.attribute('glyphicon') }}\"
            {% endif %}>
            {{ block('label') }}
        </span>
    </a>
{% endblock %}", "WebBundle:Menu:primaryNav.html.twig", "/var/www/oqroom/src/WebBundle/Resources/views/Menu/primaryNav.html.twig");
    }
}
