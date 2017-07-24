<?php

/* SonataUserBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_5139dc284eae9424b6f51d78937f1d427f0ba2c014a03ce834f79e7f94f0e3cd extends Twig_Template
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
        $__internal_ad85257f4c7a483903e408bfb6f9072c85b1a493218e8dd966af8f296191fc3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad85257f4c7a483903e408bfb6f9072c85b1a493218e8dd966af8f296191fc3e->enter($__internal_ad85257f4c7a483903e408bfb6f9072c85b1a493218e8dd966af8f296191fc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Form:form_admin_fields.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('sonata_security_roles_widget', $context, $blocks);
        
        $__internal_ad85257f4c7a483903e408bfb6f9072c85b1a493218e8dd966af8f296191fc3e->leave($__internal_ad85257f4c7a483903e408bfb6f9072c85b1a493218e8dd966af8f296191fc3e_prof);

    }

    public function block_sonata_security_roles_widget($context, array $blocks = array())
    {
        $__internal_649965f99bbdae04337833f375ec3b62ccb4b77b34ea9e11f5b0e7eafa4bd6a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_649965f99bbdae04337833f375ec3b62ccb4b77b34ea9e11f5b0e7eafa4bd6a9->enter($__internal_649965f99bbdae04337833f375ec3b62ccb4b77b34ea9e11f5b0e7eafa4bd6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_security_roles_widget"));

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
        if ((twig_length_filter($this->env, ($context["read_only_choices"] ?? $this->getContext($context, "read_only_choices"))) > 0)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["read_only_choices"] ?? $this->getContext($context, "read_only_choices")));
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
        
        $__internal_649965f99bbdae04337833f375ec3b62ccb4b77b34ea9e11f5b0e7eafa4bd6a9->leave($__internal_649965f99bbdae04337833f375ec3b62ccb4b77b34ea9e11f5b0e7eafa4bd6a9_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  66 => 23,  62 => 22,  57 => 20,  54 => 19,  52 => 18,  47 => 16,  43 => 15,  40 => 14,  38 => 13,  26 => 12,  23 => 11,);
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

{% block sonata_security_roles_widget %}
{% spaceless %}
    <div class=\"editable\">
        <h4>{{ 'field.label_roles_editable'|trans({}, \"SonataUserBundle\") }}</h4>
        {{ block('choice_widget') }}
    </div>
    {% if read_only_choices|length > 0 %}
    <div class=\"readonly\">
        <h4>{{ 'field.label_roles_readonly'|trans({}, \"SonataUserBundle\") }}</h4>
        <ul>
        {% for choice in read_only_choices %}
            <li>{{ choice }}</li>
        {% endfor %}
        </ul>
    </div>
    {% endif %}
{% endspaceless %}
{% endblock sonata_security_roles_widget %}
", "SonataUserBundle:Form:form_admin_fields.html.twig", "/var/www/oqroom/vendor/sonata-project/user-bundle/Resources/views/Form/form_admin_fields.html.twig");
    }
}
