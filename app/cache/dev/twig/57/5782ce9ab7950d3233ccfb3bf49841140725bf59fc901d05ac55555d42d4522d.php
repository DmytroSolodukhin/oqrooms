<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_68867abf04670be53fddde4dcf1f5806938447f0fcb60fc4942f122743a144db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_edd510a40e7ca98e125760d646499ca7349b509e94e858dda8a05d23e50d28dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd510a40e7ca98e125760d646499ca7349b509e94e858dda8a05d23e50d28dc->enter($__internal_edd510a40e7ca98e125760d646499ca7349b509e94e858dda8a05d23e50d28dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edd510a40e7ca98e125760d646499ca7349b509e94e858dda8a05d23e50d28dc->leave($__internal_edd510a40e7ca98e125760d646499ca7349b509e94e858dda8a05d23e50d28dc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
", "SonataAdminBundle:CRUD:list.html.twig", "/home/oqroomsc/public_html/oqroom/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list.html.twig");
    }
}
