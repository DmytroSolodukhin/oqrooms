<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_9e8bf5e7405c59c7f31a8852fb67c351e982413b615d21aef5e4e1d4391be830 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4d8bf7ef58ddc760fffe87f3f43e959e75a86d6aa59b1fa934a7f36221c0316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4d8bf7ef58ddc760fffe87f3f43e959e75a86d6aa59b1fa934a7f36221c0316->enter($__internal_d4d8bf7ef58ddc760fffe87f3f43e959e75a86d6aa59b1fa934a7f36221c0316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_d4d8bf7ef58ddc760fffe87f3f43e959e75a86d6aa59b1fa934a7f36221c0316->leave($__internal_d4d8bf7ef58ddc760fffe87f3f43e959e75a86d6aa59b1fa934a7f36221c0316_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/var/www/oqroom/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
