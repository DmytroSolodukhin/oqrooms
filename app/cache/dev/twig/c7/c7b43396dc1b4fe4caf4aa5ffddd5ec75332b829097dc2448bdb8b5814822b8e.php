<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_40e11960e8aa69b6c9115df7a8bdd4b87c7b4033e10f7861219881c4cde00e94 extends Twig_Template
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
        $__internal_66d85c68d45cb4fe7bfcaa2e634e8da627d96dac895ff6f7662eec5abb3ba950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d85c68d45cb4fe7bfcaa2e634e8da627d96dac895ff6f7662eec5abb3ba950->enter($__internal_66d85c68d45cb4fe7bfcaa2e634e8da627d96dac895ff6f7662eec5abb3ba950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_66d85c68d45cb4fe7bfcaa2e634e8da627d96dac895ff6f7662eec5abb3ba950->leave($__internal_66d85c68d45cb4fe7bfcaa2e634e8da627d96dac895ff6f7662eec5abb3ba950_prof);

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
", "knp_menu_base.html.twig", "/home/oqroomsc/public_html/oqroom/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
