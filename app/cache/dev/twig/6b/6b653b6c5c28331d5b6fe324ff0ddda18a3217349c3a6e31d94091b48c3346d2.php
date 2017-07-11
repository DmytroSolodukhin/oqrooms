<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_d5bfcd6f2e7ae7147694168d2e7ca574356b3b50a2a4555f772a93de6389c04a extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88aad36baf584a62a2be3118aaf9fb01ffad17f25b1f38b663268caf2a1a1932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88aad36baf584a62a2be3118aaf9fb01ffad17f25b1f38b663268caf2a1a1932->enter($__internal_88aad36baf584a62a2be3118aaf9fb01ffad17f25b1f38b663268caf2a1a1932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88aad36baf584a62a2be3118aaf9fb01ffad17f25b1f38b663268caf2a1a1932->leave($__internal_88aad36baf584a62a2be3118aaf9fb01ffad17f25b1f38b663268caf2a1a1932_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}
", "SonataAdminBundle:CRUD:list_string.html.twig", "/home/oqroomsc/public_html/oqroom/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_string.html.twig");
    }
}
