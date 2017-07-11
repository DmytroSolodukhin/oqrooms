<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_37282315e1320f935474d8bc36190b2250df1c7b9608f8456f9a78fe2d8a0aba extends Twig_Template
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
        $__internal_f090933ca5155cc25e870d91f2deefbe665e0e7820b6942fb43b3376148970f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f090933ca5155cc25e870d91f2deefbe665e0e7820b6942fb43b3376148970f6->enter($__internal_f090933ca5155cc25e870d91f2deefbe665e0e7820b6942fb43b3376148970f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f090933ca5155cc25e870d91f2deefbe665e0e7820b6942fb43b3376148970f6->leave($__internal_f090933ca5155cc25e870d91f2deefbe665e0e7820b6942fb43b3376148970f6_prof);

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
", "SonataAdminBundle:Pager:results.html.twig", "/home/oqroomsc/public_html/oqroom/vendor/sonata-project/admin-bundle/Resources/views/Pager/results.html.twig");
    }
}
