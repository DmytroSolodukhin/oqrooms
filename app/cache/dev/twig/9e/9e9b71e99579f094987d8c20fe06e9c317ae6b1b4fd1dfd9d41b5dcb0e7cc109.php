<?php

/* WebBundle:Default:quests.html.twig */
class __TwigTemplate_e7d6a3ad5214430ad100ae3a88748411a1442d9dc4e902e36f4f6edf44820f03 extends Twig_Template
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
        $__internal_29de336602b0d45cb23f72442d7b60d92d8ebda2f9f3bf4a80c5cf6196ad7292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29de336602b0d45cb23f72442d7b60d92d8ebda2f9f3bf4a80c5cf6196ad7292->enter($__internal_29de336602b0d45cb23f72442d7b60d92d8ebda2f9f3bf4a80c5cf6196ad7292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Default:quests.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29de336602b0d45cb23f72442d7b60d92d8ebda2f9f3bf4a80c5cf6196ad7292->leave($__internal_29de336602b0d45cb23f72442d7b60d92d8ebda2f9f3bf4a80c5cf6196ad7292_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_abe2034094cc23209bd07b69949029018a64e24cec26739b69ce811937f00c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe2034094cc23209bd07b69949029018a64e24cec26739b69ce811937f00c79->enter($__internal_abe2034094cc23209bd07b69949029018a64e24cec26739b69ce811937f00c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "            <title>
                Квест комнаты Oculto
            </title>
        ";
        
        $__internal_abe2034094cc23209bd07b69949029018a64e24cec26739b69ce811937f00c79->leave($__internal_abe2034094cc23209bd07b69949029018a64e24cec26739b69ce811937f00c79_prof);

    }

    // line 7
    public function block_metateg($context, array $blocks = array())
    {
        $__internal_6d474c6b7dac8d306bb9be62a6e6ba7a3201a5cccfa6aadbf3f7c85d2e20b6ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d474c6b7dac8d306bb9be62a6e6ba7a3201a5cccfa6aadbf3f7c85d2e20b6ed->enter($__internal_6d474c6b7dac8d306bb9be62a6e6ba7a3201a5cccfa6aadbf3f7c85d2e20b6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metateg"));

        // line 8
        echo "    <meta name=\"description\" content=\"лучшие квест комнаты, ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["quests"] ?? $this->getContext($context, "quests")));
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
        $context['_seq'] = twig_ensure_traversable(($context["quests"] ?? $this->getContext($context, "quests")));
        foreach ($context['_seq'] as $context["_key"] => $context["quest"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
            echo ", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "квест, игра, загадки, лабиринт, головоломки, комната, квеструм, эскейпрум\" />
";
        
        $__internal_6d474c6b7dac8d306bb9be62a6e6ba7a3201a5cccfa6aadbf3f7c85d2e20b6ed->leave($__internal_6d474c6b7dac8d306bb9be62a6e6ba7a3201a5cccfa6aadbf3f7c85d2e20b6ed_prof);

    }

    // line 12
    public function block_page_head_js($context, array $blocks = array())
    {
        $__internal_fecebb1726a8786ba127746fc83a82152ed29f04d4dc2ed2d665c3c5fab8da6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fecebb1726a8786ba127746fc83a82152ed29f04d4dc2ed2d665c3c5fab8da6a->enter($__internal_fecebb1726a8786ba127746fc83a82152ed29f04d4dc2ed2d665c3c5fab8da6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_head_js"));

        // line 13
        echo "    ";
        $this->displayParentBlock("page_head_js", $context, $blocks);
        echo "
";
        
        $__internal_fecebb1726a8786ba127746fc83a82152ed29f04d4dc2ed2d665c3c5fab8da6a->leave($__internal_fecebb1726a8786ba127746fc83a82152ed29f04d4dc2ed2d665c3c5fab8da6a_prof);

    }

    // line 16
    public function block_welcome($context, array $blocks = array())
    {
        $__internal_1815c5b821e43c0f3aa6619aa57232d19514964bf83284e1468bd26f8051a913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1815c5b821e43c0f3aa6619aa57232d19514964bf83284e1468bd26f8051a913->enter($__internal_1815c5b821e43c0f3aa6619aa57232d19514964bf83284e1468bd26f8051a913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "welcome"));

        
        $__internal_1815c5b821e43c0f3aa6619aa57232d19514964bf83284e1468bd26f8051a913->leave($__internal_1815c5b821e43c0f3aa6619aa57232d19514964bf83284e1468bd26f8051a913_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_f18ce611f0423a938bb05576b3af7bf7d63ea4701ecce0ad897fdf945b4f58b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f18ce611f0423a938bb05576b3af7bf7d63ea4701ecce0ad897fdf945b4f58b9->enter($__internal_f18ce611f0423a938bb05576b3af7bf7d63ea4701ecce0ad897fdf945b4f58b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        $context['_seq'] = twig_ensure_traversable(($context["city"] ?? $this->getContext($context, "city")));
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
        $context['_seq'] = twig_ensure_traversable(($context["quests"] ?? $this->getContext($context, "quests")));
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
        
        $__internal_f18ce611f0423a938bb05576b3af7bf7d63ea4701ecce0ad897fdf945b4f58b9->leave($__internal_f18ce611f0423a938bb05576b3af7bf7d63ea4701ecce0ad897fdf945b4f58b9_prof);

    }

    // line 67
    public function block_footer_js($context, array $blocks = array())
    {
        $__internal_9422e5326c1dd0db703f0baad67dca2a2e50787bfdd3e204e716e2ea408f7780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9422e5326c1dd0db703f0baad67dca2a2e50787bfdd3e204e716e2ea408f7780->enter($__internal_9422e5326c1dd0db703f0baad67dca2a2e50787bfdd3e204e716e2ea408f7780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_js"));

        // line 68
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script>
        \$('#Quests .todown').remove().appendTo('#Quests');
    </script>
";
        
        $__internal_9422e5326c1dd0db703f0baad67dca2a2e50787bfdd3e204e716e2ea408f7780->leave($__internal_9422e5326c1dd0db703f0baad67dca2a2e50787bfdd3e204e716e2ea408f7780_prof);

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
        return array (  252 => 68,  246 => 67,  235 => 61,  229 => 60,  224 => 57,  221 => 56,  217 => 54,  211 => 52,  208 => 51,  206 => 50,  202 => 49,  185 => 46,  182 => 44,  169 => 39,  161 => 36,  158 => 35,  154 => 34,  149 => 31,  138 => 29,  134 => 28,  124 => 20,  118 => 19,  107 => 16,  97 => 13,  91 => 12,  74 => 9,  61 => 8,  55 => 7,  45 => 3,  39 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"WebBundle::pagelayout.html.twig\" %}
        {% block title %}
            <title>
                Квест комнаты Oculto
            </title>
        {% endblock %}
{% block metateg %}
    <meta name=\"description\" content=\"лучшие квест комнаты, {% for quest in quests %}{{ quest.title }}, {% endfor %}\">
    <meta name=\"keywords\" content=\"{% for quest in quests %}{{ quest.title }}, {% endfor %}квест, игра, загадки, лабиринт, головоломки, комната, квеструм, эскейпрум\" />
{% endblock %}

{% block page_head_js %}
    {{ parent() }}
{% endblock %}

{% block welcome %}
{% endblock %}

{% block content %}
<section>
    <div class=\"row\">
    <div id=\"Quests\">
        <section>
            <div class=\"col-lg-2 col-lg-offset-10 fadeInUpBig filters_city\">
                <p>Города:
                    <select>
                        <option value=\"\">Все</option>
                        {% for cit in city %}
                            <option value=\"{{ cit.id }}\">{{ cit.title }}</option>
                        {% endfor %}
                    </select>
                </p>
            </div>
        {% for quest in quests %}
            {% if not quest.inprogress %}
             <a href=\"{{ path('web_quest', {'id': quest.id}) }}\"  title=\"{{ quest.title }}\">
                <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 quest_blocks bg-resp  animated fadeInUpBig\">
                     {#style=\"background: #}
                   <img class=\"qwests_img\" src=\"/uploads/{% if quest.background %}{{ quest.background }}{% else %}{{ quest.image }}{% endif %}\">

                </div>
                </a>
            {% else %}
                <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6 quest_blocks bg-resp  animated fadeInUpBig todown\">
                     {#style=\"background: url#}
                    <img class=\"qwests_img\" src=\"{% if quest.background %}'/uploads/{{ quest.background }}'{% elseif quest.image %}'/uploads/{{ quest.image }}'{% else %}'/images/logo/logo_w.png'{% endif %}\">

                    <div class=\"inproggress\"></div>
                    <h2>{{ quest.title }}.
                        {% if quest.inprogress %}
                            {% if quest.startTime %}
                                Открытие квеста ({{ quest.startTime|date('d/m/y') }})
                            {% else %}
                                Этот квест в процессе разработки
                            {% endif %}
                        {% endif %}
                    </h2>
                </div>
            {% endif %}
        {% endfor %}
        </section>
    </div>
</div>
</section>
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script>
        \$('#Quests .todown').remove().appendTo('#Quests');
    </script>
{% endblock %}", "WebBundle:Default:quests.html.twig", "/var/www/oqroom/src/WebBundle/Resources/views/Default/quests.html.twig");
    }
}
