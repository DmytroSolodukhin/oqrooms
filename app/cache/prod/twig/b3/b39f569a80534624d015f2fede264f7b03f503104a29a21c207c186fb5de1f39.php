<?php

/* WebBundle:Default:index.html.twig */
class __TwigTemplate_7e8ba541e988ceef343ebd0def5740a5107c1a9c36bccdb74b9aa55b7ff0e41a extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["quests"]) ? $context["quests"] : null));
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
    <div class=\"first_block\">
    <div class=\"row\" id=\"Quests\">
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quests"]) ? $context["quests"] : null));
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
                    <div class=\"col-sm-10 col-md-offset-1 quest_block\"
                         style=\"background: url('/uploads/";
                // line 42
                if ($this->getAttribute($context["quest"], "background", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "background", array()), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "image", array()), "html", null, true);
                }
                echo "') repeat 0 0 scroll; background-size: contain;\">
                        <div class=\"transparency\"></div>
                        <strong style=\"float: right\">
                            <i class=\"icon-user\" style=\"color: white\"></i>
                            : 2-";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "count", array()), "html", null, true);
                if ($this->getAttribute($context["quest"], "maxCount", array())) {
                    echo "(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "maxCount", array()), "html", null, true);
                    echo ")";
                }
                // line 47
                echo "                        </strong>

                        <h3>
                                ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["quest"], "city", array()), "title", array()), "html", null, true);
                echo "
                        </h3>
                        <h2>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
                echo "</h2>
                                <strong style=\"float: right; margin: 54px 0 0;\">
                                    Cложность :
                                    ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, 4));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 56
                    echo "                                        ";
                    if (($context["i"] <= $this->getAttribute($context["quest"], "complexity", array()))) {
                        // line 57
                        echo "                                            <img src=\"/images/omega.png\" width=\"30px\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
                        echo " big complexity\">
                                        ";
                    }
                    // line 59
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "                                </strong>
                        ";
                // line 62
                echo "                            ";
                // line 63
                echo "                        ";
                // line 64
                echo "                    </div>
                </a>
            ";
            } else {
                // line 67
                echo "                <div class=\"col-sm-10 col-md-offset-1 quest_block ";
                if ($this->getAttribute($context["quest"], "inprogress", array())) {
                    echo "todown";
                }
                echo "\"
                     style=\"background: url(";
                // line 68
                if ($this->getAttribute($context["quest"], "background", array())) {
                    echo "'/uploads/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "background", array()), "html", null, true);
                    echo "'";
                } elseif ($this->getAttribute($context["quest"], "image", array())) {
                    echo "'/uploads/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "image", array()), "html", null, true);
                    echo "'";
                } else {
                    echo "'/images/logo/OQ-rooms2.png'";
                }
                echo ") repeat 0 0 scroll; background-size: contain; opacity: 0.78;\">
                    <div class=\"inproggress\"></div>
                    <strong>";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["quest"], "city", array()), "title", array()), "html", null, true);
                echo "</strong>
                    <h2>";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
                echo ".
                        ";
                // line 72
                if ($this->getAttribute($context["quest"], "inprogress", array())) {
                    // line 73
                    echo "                            ";
                    if ($this->getAttribute($context["quest"], "startTime", array())) {
                        // line 74
                        echo "                                Открытие квеста (";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["quest"], "startTime", array()), "d/m/y"), "html", null, true);
                        echo ")
                            ";
                    } else {
                        // line 76
                        echo "                                Этот квест в процессе разработки
                                ";
                    }
                    // line 78
                    echo "                        ";
                }
                // line 79
                echo "                    </h2>
                </div>
            ";
            }
            // line 82
            echo "        </section>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['quest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "    </div>
</div>
</section>
";
    }

    // line 89
    public function block_footer_js($context, array $blocks = array())
    {
        // line 90
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
        return array (  253 => 90,  250 => 89,  243 => 84,  236 => 82,  231 => 79,  228 => 78,  224 => 76,  218 => 74,  215 => 73,  213 => 72,  209 => 71,  205 => 70,  190 => 68,  183 => 67,  178 => 64,  176 => 63,  174 => 62,  171 => 60,  165 => 59,  159 => 57,  156 => 56,  152 => 55,  146 => 52,  141 => 50,  136 => 47,  129 => 46,  118 => 42,  110 => 40,  108 => 39,  105 => 38,  101 => 37,  96 => 34,  94 => 31,  92 => 30,  90 => 29,  88 => 28,  86 => 27,  84 => 26,  82 => 25,  80 => 24,  78 => 23,  76 => 22,  74 => 21,  72 => 20,  70 => 19,  68 => 18,  65 => 15,  62 => 14,  47 => 10,  44 => 9,  41 => 8,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WebBundle:Default:index.html.twig", "/home/oqroomsc/public_html/oqroom/src/WebBundle/Resources/views/Default/index.html.twig");
    }
}
