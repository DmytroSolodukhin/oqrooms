<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_1e8460718f110eb963f3d243e9204f944a64bdfa95aa7c53cd58530307eb5f3a extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91461f3038a5aee3f8a231188faedc1edb80f61f21681ecb0cd6ec0df80c332c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91461f3038a5aee3f8a231188faedc1edb80f61f21681ecb0cd6ec0df80c332c->enter($__internal_91461f3038a5aee3f8a231188faedc1edb80f61f21681ecb0cd6ec0df80c332c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91461f3038a5aee3f8a231188faedc1edb80f61f21681ecb0cd6ec0df80c332c->leave($__internal_91461f3038a5aee3f8a231188faedc1edb80f61f21681ecb0cd6ec0df80c332c_prof);

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
", "SonataAdminBundle:CRUD:list_string.html.twig", "/var/www/oqroom/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_string.html.twig");
    }
}
