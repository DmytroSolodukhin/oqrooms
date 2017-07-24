<?php

/* WebBundle::menu.html.twig */
class __TwigTemplate_8cda7726474641ce1f0526856368ff30142f8ab935f85ea086c67f9269e1e633 extends Twig_Template
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
        $__internal_71fcebc6381cf01131304d5abc031ed0bc1584a1ca76fc0f792b40f7948ad800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71fcebc6381cf01131304d5abc031ed0bc1584a1ca76fc0f792b40f7948ad800->enter($__internal_71fcebc6381cf01131304d5abc031ed0bc1584a1ca76fc0f792b40f7948ad800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle::menu.html.twig"));

        // line 1
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("WebBundle:Builder:mainMenu", array("currentClass" => "active", "template" => "WebBundle:Menu:primaryNav.html.twig"));
        // line 2
        echo "
";
        
        $__internal_71fcebc6381cf01131304d5abc031ed0bc1584a1ca76fc0f792b40f7948ad800->leave($__internal_71fcebc6381cf01131304d5abc031ed0bc1584a1ca76fc0f792b40f7948ad800_prof);

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
", "WebBundle::menu.html.twig", "/var/www/oqroom/src/WebBundle/Resources/views/menu.html.twig");
    }
}
