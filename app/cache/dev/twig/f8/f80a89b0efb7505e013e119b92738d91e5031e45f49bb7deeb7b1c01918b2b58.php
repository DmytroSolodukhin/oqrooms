<?php

/* WebBundle::menu.html.twig */
class __TwigTemplate_4f886c932149d00fe83254c0825f33e603fd5cb5a957704d0e931b318e5a64be extends Twig_Template
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
        $__internal_2e1a2fe54977a796f21af61713e040c1240b2861f10e3bfb963472064018799a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e1a2fe54977a796f21af61713e040c1240b2861f10e3bfb963472064018799a->enter($__internal_2e1a2fe54977a796f21af61713e040c1240b2861f10e3bfb963472064018799a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle::menu.html.twig"));

        // line 1
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("WebBundle:Builder:mainMenu", array("currentClass" => "active", "template" => "WebBundle:Menu:primaryNav.html.twig"));
        // line 2
        echo "
";
        
        $__internal_2e1a2fe54977a796f21af61713e040c1240b2861f10e3bfb963472064018799a->leave($__internal_2e1a2fe54977a796f21af61713e040c1240b2861f10e3bfb963472064018799a_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ knp_menu_render('WebBundle:Builder:mainMenu',
{'currentClass': 'active', 'template': 'WebBundle:Menu:primaryNav.html.twig'}) }}
", "WebBundle::menu.html.twig", "/Users/aleksandra/myaso/oqrooms/src/WebBundle/Resources/views/menu.html.twig");
    }
}
