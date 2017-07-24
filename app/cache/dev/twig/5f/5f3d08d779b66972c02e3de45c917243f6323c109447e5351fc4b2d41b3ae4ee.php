<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_89c0c3354341285e5cc7e565d4fe685c00b80dc0aa276bd77937af1afec86750 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d5b081156f3a132965a6d99082e1248c5503e809948c6fe3f447f02e4cf135e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d5b081156f3a132965a6d99082e1248c5503e809948c6fe3f447f02e4cf135e->enter($__internal_8d5b081156f3a132965a6d99082e1248c5503e809948c6fe3f447f02e4cf135e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d5b081156f3a132965a6d99082e1248c5503e809948c6fe3f447f02e4cf135e->leave($__internal_8d5b081156f3a132965a6d99082e1248c5503e809948c6fe3f447f02e4cf135e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}
", "SonataAdminBundle:Pager:results.html.twig", "/var/www/oqroom/vendor/sonata-project/admin-bundle/Resources/views/Pager/results.html.twig");
    }
}
