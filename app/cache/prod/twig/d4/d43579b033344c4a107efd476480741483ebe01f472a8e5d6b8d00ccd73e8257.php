<?php

/* WebBundle:Default:index.html.twig */
class __TwigTemplate_26e05c9abaaf34fc786e0b7eea4762ff51aa805b2cec87d6d623b44a0e030deb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebBundle::pagelayout.html.twig", "WebBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metateg' => array($this, 'block_metateg'),
            'content' => array($this, 'block_content'),
            'footer_js' => array($this, 'block_footer_js'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "        <title>
            Квест комнаты OQrooms
        </title>
    ";
    }

    // line 8
    public function block_metateg($context, array $blocks = array())
    {
        // line 9
        echo "        <meta name=\"description\" content=\"лучшие квест комнаты Одессы, игра, квест комната, секрет и логика, интеллект и головоломки, интуиция, это все - occulto\">
        <meta name=\"keywords\" content=\"Одесса, квест, ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["quests"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["quest"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
            echo ", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "лабиринт, квест комната,
labirint, игры квесты, квест одесса, квест игры, quest room, квест рум одесса\" />
    ";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "<a class=\"scroll-down hidden-xs hidden-sm\" href=\"#first\"></a>
";
        // line 18
        echo "    ";
        // line 19
        echo "        ";
        // line 20
        echo "            ";
        // line 21
        echo "                ";
        // line 22
        echo "            ";
        // line 23
        echo "            ";
        // line 24
        echo "                ";
        // line 25
        echo "                ";
        // line 26
        echo "                ";
        // line 27
        echo "                ";
        // line 28
        echo "            ";
        // line 29
        echo "            ";
        // line 30
        echo "        ";
        // line 31
        echo "    ";
        // line 34
        echo "<section>
    <div class=\"first_block\" id=\"first\">
    <div class=\"row\" id=\"Quests\">
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["quests"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["quest"]) {
            // line 38
            echo "        <section>
            ";
            // line 39
            if ( !$this->getAttribute($context["quest"], "inprogress", array())) {
                // line 40
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_quest", array("id" => $this->getAttribute($context["quest"], "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
                echo "\">
                    <div class=\"col-sm-10 col-md-9 col-lg-9 image_center quest_block\">
                         ";
                // line 43
                echo "                        <img class=\"entry\" src=\"/uploads/";
                if ($this->getAttribute($context["quest"], "background", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "background", array()), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "image", array()), "html", null, true);
                }
                echo "\">
                        <div class=\"transparency\"></div>
                        ";
                // line 46
                echo "                        ";
                // line 47
                echo "                            ";
                // line 48
                echo "                            ";
                // line 49
                echo "                        ";
                // line 50
                echo "
                        ";
                // line 52
                echo "                                ";
                // line 53
                echo "                        ";
                // line 54
                echo "                        ";
                // line 55
                echo "                                ";
                // line 56
                echo "                                    ";
                // line 57
                echo "                                    ";
                // line 58
                echo "                                        ";
                // line 59
                echo "                                            ";
                // line 60
                echo "                                        ";
                // line 61
                echo "                                    ";
                // line 62
                echo "                                ";
                // line 63
                echo "                        ";
                // line 64
                echo "                            ";
                // line 65
                echo "                        ";
                // line 66
                echo "                        ";
                // line 67
                echo "                    </div>
                </a>
            ";
            } else {
                // line 70
                echo "                ";
                // line 71
                echo "                     ";
                // line 72
                echo "                    ";
                // line 73
                echo "                    ";
                // line 74
                echo "                    ";
                // line 75
                echo "                        ";
                // line 76
                echo "                            ";
                // line 77
                echo "                                ";
                // line 78
                echo "                            ";
                // line 79
                echo "                                ";
                // line 80
                echo "                                ";
                // line 81
                echo "                        ";
                // line 82
                echo "                    ";
                // line 83
                echo "                ";
                // line 84
                echo "                <div class=\"col-sm-10 col-md-9 col-lg-9 image_center quest_block\">
                    ";
                // line 86
                echo "                    <img class=\"entry\" src=\"";
                if ($this->getAttribute($context["quest"], "background", array())) {
                    echo "/uploads/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "background", array()), "html", null, true);
                } elseif ($this->getAttribute($context["quest"], "image", array())) {
                    echo "/uploads/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "image", array()), "html", null, true);
                } else {
                    echo "/images/logo/OQ-rooms2.png";
                }
                echo "\">
                    <div class=\"transparency\"></div>

                </div>
            ";
            }
            // line 91
            echo "        </section>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['quest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "    </div>
</div>
</section>
";
    }

    // line 98
    public function block_footer_js($context, array $blocks = array())
    {
        // line 99
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script>
        \$('#Quests .todown').remove().appendTo('#Quests');
    </script>
";
    }

    public function getTemplateName()
    {
        return "WebBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 99,  236 => 98,  229 => 93,  222 => 91,  205 => 86,  202 => 84,  200 => 83,  198 => 82,  196 => 81,  194 => 80,  192 => 79,  190 => 78,  188 => 77,  186 => 76,  184 => 75,  182 => 74,  180 => 73,  178 => 72,  176 => 71,  174 => 70,  169 => 67,  167 => 66,  165 => 65,  163 => 64,  161 => 63,  159 => 62,  157 => 61,  155 => 60,  153 => 59,  151 => 58,  149 => 57,  147 => 56,  145 => 55,  143 => 54,  141 => 53,  139 => 52,  136 => 50,  134 => 49,  132 => 48,  130 => 47,  128 => 46,  118 => 43,  110 => 40,  108 => 39,  105 => 38,  101 => 37,  96 => 34,  94 => 31,  92 => 30,  90 => 29,  88 => 28,  86 => 27,  84 => 26,  82 => 25,  80 => 24,  78 => 23,  76 => 22,  74 => 21,  72 => 20,  70 => 19,  68 => 18,  65 => 15,  62 => 14,  47 => 10,  44 => 9,  41 => 8,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WebBundle:Default:index.html.twig", "/var/www/oqroom/src/WebBundle/Resources/views/Default/index.html.twig");
    }
}
