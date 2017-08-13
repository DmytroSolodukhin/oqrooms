<?php

/* WebBundle:Default:quests.html.twig */
class __TwigTemplate_bcf44a3314a703f4c0bffd8a55ab41eb11a1a1a485cf228a27a34088bd0d8a5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebBundle::pagelayout.html.twig", "WebBundle:Default:quests.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metateg' => array($this, 'block_metateg'),
            'page_head_js' => array($this, 'block_page_head_js'),
            'welcome' => array($this, 'block_welcome'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "            <title>
                Квест комнаты Oculto
            </title>
        ";
    }

    // line 7
    public function block_metateg($context, array $blocks = array())
    {
        // line 8
        echo "    <meta name=\"description\" content=\"лучшие квест комнаты, ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["quests"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["quest"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
            echo ", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["quests"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["quest"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
            echo ", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "квест, игра, загадки, лабиринт, головоломки, комната, квеструм, эскейпрум\" />
";
    }

    // line 12
    public function block_page_head_js($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("page_head_js", $context, $blocks);
        echo "
";
    }

    // line 16
    public function block_welcome($context, array $blocks = array())
    {
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "<section>
    <div class=\"row\">
    <div id=\"Quests\">
        <section>
            <div class=\"col-lg-2 col-lg-offset-10 fadeInUpBig filters_city\">
                <p>Города:
                    <select>
                        <option value=\"\">Все</option>
                        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["city"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cit"]) {
            // line 29
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cit"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cit"], "title", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                    </select>
                </p>
            </div>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["quests"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["quest"]) {
            // line 35
            echo "            ";
            if ( !$this->getAttribute($context["quest"], "inprogress", array())) {
                // line 36
                echo "             <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_quest", array("id" => $this->getAttribute($context["quest"], "id", array()))), "html", null, true);
                echo "\"  title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
                echo "\">
                <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 quest_blocks bg-resp  animated fadeInUpBig\">
                     ";
                // line 39
                echo "                   <img class=\"qwests_img\" src=\"/uploads/";
                if ($this->getAttribute($context["quest"], "background", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "background", array()), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "image", array()), "html", null, true);
                }
                echo "\">

                </div>
                </a>
            ";
            } else {
                // line 44
                echo "                <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 quest_blocks bg-resp  animated fadeInUpBig todown\">
                     ";
                // line 46
                echo "                    <img class=\"qwests_img\" src=\"";
                if ($this->getAttribute($context["quest"], "background", array())) {
                    echo "'/uploads/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "background", array()), "html", null, true);
                    echo "'";
                } elseif ($this->getAttribute($context["quest"], "image", array())) {
                    echo "'/uploads/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "image", array()), "html", null, true);
                    echo "'";
                } else {
                    echo "'/images/logo/logo_w.png'";
                }
                echo "\">

                    <div class=\"inproggress\"></div>
                    <h2>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
                echo ".
                        ";
                // line 50
                if ($this->getAttribute($context["quest"], "inprogress", array())) {
                    // line 51
                    echo "                            ";
                    if ($this->getAttribute($context["quest"], "startTime", array())) {
                        // line 52
                        echo "                                Открытие квеста (";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["quest"], "startTime", array()), "d/m/y"), "html", null, true);
                        echo ")
                            ";
                    } else {
                        // line 54
                        echo "                                Этот квест в процессе разработки
                            ";
                    }
                    // line 56
                    echo "                        ";
                }
                // line 57
                echo "                    </h2>
                </div>
            ";
            }
            // line 60
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </section>
    </div>
</div>
</section>
";
    }

    // line 67
    public function block_footer_js($context, array $blocks = array())
    {
        // line 68
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
        return "WebBundle:Default:quests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 68,  210 => 67,  202 => 61,  196 => 60,  191 => 57,  188 => 56,  184 => 54,  178 => 52,  175 => 51,  173 => 50,  169 => 49,  152 => 46,  149 => 44,  136 => 39,  128 => 36,  125 => 35,  121 => 34,  116 => 31,  105 => 29,  101 => 28,  91 => 20,  88 => 19,  83 => 16,  76 => 13,  73 => 12,  59 => 9,  46 => 8,  43 => 7,  36 => 3,  33 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WebBundle:Default:quests.html.twig", "/var/www/oqroom/src/WebBundle/Resources/views/Default/quests.html.twig");
    }
}
