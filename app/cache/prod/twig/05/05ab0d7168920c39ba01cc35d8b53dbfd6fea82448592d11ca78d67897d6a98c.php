<?php

/* SonataUserBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_b638a0b6b63627f6e77a9d106e37e96d96e927f58bdd3fa1e3e56b27397af7cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_security_roles_widget' => array($this, 'block_sonata_security_roles_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('sonata_security_roles_widget', $context, $blocks);
    }

    public function block_sonata_security_roles_widget($context, array $blocks = array())
    {
        // line 13
        ob_start();
        // line 14
        echo "    <div class=\"editable\">
        <h4>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("field.label_roles_editable", array(), "SonataUserBundle"), "html", null, true);
        echo "</h4>
        ";
        // line 16
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    </div>
    ";
        // line 18
        if ((twig_length_filter($this->env, (isset($context["read_only_choices"]) ? $context["read_only_choices"] : null)) > 0)) {
            // line 19
            echo "    <div class=\"readonly\">
        <h4>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("field.label_roles_readonly", array(), "SonataUserBundle"), "html", null, true);
            echo "</h4>
        <ul>
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["read_only_choices"]) ? $context["read_only_choices"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 23
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["choice"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        </ul>
    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 25,  57 => 23,  53 => 22,  48 => 20,  45 => 19,  43 => 18,  38 => 16,  34 => 15,  31 => 14,  29 => 13,  23 => 12,  20 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataUserBundle:Form:form_admin_fields.html.twig", "/Users/aleksandra/myaso/oqrooms/vendor/sonata-project/user-bundle/Resources/views/Form/form_admin_fields.html.twig");
    }
}
