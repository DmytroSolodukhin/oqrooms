<?php

/* WebBundle:Default:page.html.twig */
class __TwigTemplate_c748fd9218295b20a92dafef92bec263ba2397b3718b9e4870050b3f801a9bcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebBundle::pagelayout.html.twig", "WebBundle:Default:page.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metateg' => array($this, 'block_metateg'),
            'welcome' => array($this, 'block_welcome'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebBundle::pagelayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "            <title>
                ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", array()), "html", null, true);
        echo "
            </title>
        ";
    }

    // line 7
    public function block_metateg($context, array $blocks = array())
    {
        // line 8
        echo "    <meta name=\"description\" content=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", array()), "html", null, true);
        echo ", игра, квест комната, секрет, логика, интеллект, головоломки, интуиция, occulto\">
    <meta name=\"keywords\" content=\" квест, комната, квеструм, эскейпрум, ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", array()), "html", null, true);
        echo "\" />
";
    }

    // line 12
    public function block_welcome($context, array $blocks = array())
    {
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "    <section>
        <div class=\"index_text_block_quest row\" id=\"first\">
            <div class=\"col-sm-10 col-md-offset-1 quest_blocks\">
                <h1>
                    ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", array()), "html", null, true);
        echo "
                </h1>
                <div class=\"col-sm-11 col-sm-offset-1\">
                    ";
        // line 23
        echo $this->getAttribute(($context["page"] ?? null), "description", array());
        echo "
                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "WebBundle:Default:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 23,  72 => 20,  66 => 16,  63 => 15,  58 => 12,  52 => 9,  47 => 8,  44 => 7,  37 => 4,  34 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WebBundle:Default:page.html.twig", "/var/www/oqroom/src/WebBundle/Resources/views/Default/page.html.twig");
    }
}
