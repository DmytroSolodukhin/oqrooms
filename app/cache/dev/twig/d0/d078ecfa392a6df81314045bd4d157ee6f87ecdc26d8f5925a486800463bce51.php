<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_7c9f2e87f5d84169ae550e6605941c74acfae5133c24c04f8a95384187e60ec2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_945673ddc27bbf56f3d57d79c51d7ee931783eefb03b726ded0823b1e9ab4a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945673ddc27bbf56f3d57d79c51d7ee931783eefb03b726ded0823b1e9ab4a1d->enter($__internal_945673ddc27bbf56f3d57d79c51d7ee931783eefb03b726ded0823b1e9ab4a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_945673ddc27bbf56f3d57d79c51d7ee931783eefb03b726ded0823b1e9ab4a1d->leave($__internal_945673ddc27bbf56f3d57d79c51d7ee931783eefb03b726ded0823b1e9ab4a1d_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_72ea1a99c726e65566b52165c061d48f7a629ea54d596501161e6575402dc4cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ea1a99c726e65566b52165c061d48f7a629ea54d596501161e6575402dc4cd->enter($__internal_72ea1a99c726e65566b52165c061d48f7a629ea54d596501161e6575402dc4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "toString", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_72ea1a99c726e65566b52165c061d48f7a629ea54d596501161e6575402dc4cd->leave($__internal_72ea1a99c726e65566b52165c061d48f7a629ea54d596501161e6575402dc4cd_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_ea985b808d6c716f6431df647029830c4dd0810dab4dfc8d043ba6e7698a8566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea985b808d6c716f6431df647029830c4dd0810dab4dfc8d043ba6e7698a8566->enter($__internal_ea985b808d6c716f6431df647029830c4dd0810dab4dfc8d043ba6e7698a8566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ea985b808d6c716f6431df647029830c4dd0810dab4dfc8d043ba6e7698a8566->leave($__internal_ea985b808d6c716f6431df647029830c4dd0810dab4dfc8d043ba6e7698a8566_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_c4c720bba79984c14656b4057927783df1831a1e931c980b1ca9363528aba1d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c720bba79984c14656b4057927783df1831a1e931c980b1ca9363528aba1d6->enter($__internal_c4c720bba79984c14656b4057927783df1831a1e931c980b1ca9363528aba1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_c4c720bba79984c14656b4057927783df1831a1e931c980b1ca9363528aba1d6->leave($__internal_c4c720bba79984c14656b4057927783df1831a1e931c980b1ca9363528aba1d6_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_58a0e1d9d8034ab87ada871ffd60fd18d128db6a03632ad16680ad4e78ba6dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58a0e1d9d8034ab87ada871ffd60fd18d128db6a03632ad16680ad4e78ba6dca->enter($__internal_58a0e1d9d8034ab87ada871ffd60fd18d128db6a03632ad16680ad4e78ba6dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_58a0e1d9d8034ab87ada871ffd60fd18d128db6a03632ad16680ad4e78ba6dca->leave($__internal_58a0e1d9d8034ab87ada871ffd60fd18d128db6a03632ad16680ad4e78ba6dca_prof);

    }

    // line 34
    public function block_form($context, array $blocks = array())
    {
        $__internal_d76271477deb2288c64577c267401845303e7c8c2bc14ac77734feca3a6edc4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d76271477deb2288c64577c267401845303e7c8c2bc14ac77734feca3a6edc4b->enter($__internal_d76271477deb2288c64577c267401845303e7c8c2bc14ac77734feca3a6edc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 35
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_d76271477deb2288c64577c267401845303e7c8c2bc14ac77734feca3a6edc4b->leave($__internal_d76271477deb2288c64577c267401845303e7c8c2bc14ac77734feca3a6edc4b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 35,  122 => 34,  110 => 30,  103 => 27,  97 => 26,  87 => 23,  81 => 22,  70 => 18,  64 => 16,  61 => 15,  55 => 14,  40 => 12,  12 => 32,);
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

{% extends base_template %}

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "/var/www/oqroom/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
