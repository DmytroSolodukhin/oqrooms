<?php

/* WebBundle:Default:quests.html.twig */
class __TwigTemplate_16a42e2e9308258eed39f072221ca586b00a7959155bf0507494695b9edd07d1 extends Twig_Template
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
        $__internal_6051d9a9bbe0266361100232c50ae590d4ec4c6658fc078d52e95ebacaf4c747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6051d9a9bbe0266361100232c50ae590d4ec4c6658fc078d52e95ebacaf4c747->enter($__internal_6051d9a9bbe0266361100232c50ae590d4ec4c6658fc078d52e95ebacaf4c747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Default:quests.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6051d9a9bbe0266361100232c50ae590d4ec4c6658fc078d52e95ebacaf4c747->leave($__internal_6051d9a9bbe0266361100232c50ae590d4ec4c6658fc078d52e95ebacaf4c747_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2e7030c7422a433b8a95d290fdda18f42934a143c7802bd25075999813358d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e7030c7422a433b8a95d290fdda18f42934a143c7802bd25075999813358d9->enter($__internal_f2e7030c7422a433b8a95d290fdda18f42934a143c7802bd25075999813358d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "            <title>
                Квест комнаты Oculto
            </title>
        ";
        
        $__internal_f2e7030c7422a433b8a95d290fdda18f42934a143c7802bd25075999813358d9->leave($__internal_f2e7030c7422a433b8a95d290fdda18f42934a143c7802bd25075999813358d9_prof);

    }

    // line 7
    public function block_metateg($context, array $blocks = array())
    {
        $__internal_0b3dcb162af8ceefd8070a451c9e6cdad5ea41c7c4932f72f88c237751c9da1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3dcb162af8ceefd8070a451c9e6cdad5ea41c7c4932f72f88c237751c9da1d->enter($__internal_0b3dcb162af8ceefd8070a451c9e6cdad5ea41c7c4932f72f88c237751c9da1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metateg"));

        // line 8
        echo "    <meta name=\"description\" content=\"лучшие квест комнаты, ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quests"]) ? $context["quests"] : $this->getContext($context, "quests")));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["quests"]) ? $context["quests"] : $this->getContext($context, "quests")));
        foreach ($context['_seq'] as $context["_key"] => $context["quest"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
            echo ", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "квест, игра, загадки, лабиринт, головоломки, комната, квеструм, эскейпрум\" />
";
        
        $__internal_0b3dcb162af8ceefd8070a451c9e6cdad5ea41c7c4932f72f88c237751c9da1d->leave($__internal_0b3dcb162af8ceefd8070a451c9e6cdad5ea41c7c4932f72f88c237751c9da1d_prof);

    }

    // line 12
    public function block_page_head_js($context, array $blocks = array())
    {
        $__internal_fcc42ff038abbc7717537c9829ce53c562938570d398ba9fc87bf5382741fa09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc42ff038abbc7717537c9829ce53c562938570d398ba9fc87bf5382741fa09->enter($__internal_fcc42ff038abbc7717537c9829ce53c562938570d398ba9fc87bf5382741fa09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_head_js"));

        // line 13
        echo "    ";
        $this->displayParentBlock("page_head_js", $context, $blocks);
        echo "
";
        
        $__internal_fcc42ff038abbc7717537c9829ce53c562938570d398ba9fc87bf5382741fa09->leave($__internal_fcc42ff038abbc7717537c9829ce53c562938570d398ba9fc87bf5382741fa09_prof);

    }

    // line 16
    public function block_welcome($context, array $blocks = array())
    {
        $__internal_ff136f334f241250c2860f15caeb54ee1a70f030cd55e058b516ce3122f7c22f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff136f334f241250c2860f15caeb54ee1a70f030cd55e058b516ce3122f7c22f->enter($__internal_ff136f334f241250c2860f15caeb54ee1a70f030cd55e058b516ce3122f7c22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "welcome"));

        
        $__internal_ff136f334f241250c2860f15caeb54ee1a70f030cd55e058b516ce3122f7c22f->leave($__internal_ff136f334f241250c2860f15caeb54ee1a70f030cd55e058b516ce3122f7c22f_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_93842f348ff740348ca50dfacaf9b91e680bbfe17a4e8d6b92a3ddbe92d2e5e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93842f348ff740348ca50dfacaf9b91e680bbfe17a4e8d6b92a3ddbe92d2e5e2->enter($__internal_93842f348ff740348ca50dfacaf9b91e680bbfe17a4e8d6b92a3ddbe92d2e5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["quests"]) ? $context["quests"] : $this->getContext($context, "quests")));
        foreach ($context['_seq'] as $context["_key"] => $context["quest"]) {
            // line 35
            echo "            ";
            if ( !$this->getAttribute($context["quest"], "inprogress", array())) {
                // line 36
                echo "                <div class=\"col-lg-4 quest_blocks animated fadeInUpBig\"
                     style=\"background: url('/uploads/";
                // line 37
                if ($this->getAttribute($context["quest"], "background", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "background", array()), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "image", array()), "html", null, true);
                }
                echo "') repeat 0 0 scroll; background-size: contain;\">
                    <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_quest", array("id" => $this->getAttribute($context["quest"], "id", array()))), "html", null, true);
                echo "\"  title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
                echo "\">
                        <div class=\"options_q\">

                            <strong style=\"float: right; margin: -5px 0 0;\">
                                Cложность :
                                ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, 4));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 44
                    echo "                                    ";
                    if (($context["i"] <= $this->getAttribute($context["quest"], "complexity", array()))) {
                        // line 45
                        echo "                                        <img src=\"/images/omega.png\" width=\"20px\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
                        echo " big complexity\">
                                    ";
                    }
                    // line 47
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "                            </strong>
                        </div>
                    <div class=\"transparency\"></div>
                    ";
                // line 52
                echo "                    <h2>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
                echo "</h2>

                    ";
                // line 55
                echo "                        ";
                // line 56
                echo "                    ";
                // line 57
                echo "                        <div class=\"options_q_footer\">
                            <strong style=\"float: right\"><i class=\"icon-user\" style=\"color: white\"></i> : 2-";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "count", array()), "html", null, true);
                if ($this->getAttribute($context["quest"], "maxCount", array())) {
                    echo "(";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "maxCount", array()), "html", null, true);
                    echo ")";
                }
                echo "</strong>
                        </div>
                    </a>
                </div>
            ";
            } else {
                // line 63
                echo "                <div class=\"col-lg-4 quest_blocks animated fadeInUpBig todown\"
                     style=\"background: url(";
                // line 64
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
                echo ") repeat 0 0 scroll;
                     background-size: contain; opacity: 0.78;\">
                    <div class=\"inproggress\"></div>
                    <h2>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "title", array()), "html", null, true);
                echo ".
                        ";
                // line 68
                if ($this->getAttribute($context["quest"], "inprogress", array())) {
                    // line 69
                    echo "                            ";
                    if ($this->getAttribute($context["quest"], "startTime", array())) {
                        // line 70
                        echo "                                Открытие квеста (";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["quest"], "startTime", array()), "d/m/y"), "html", null, true);
                        echo ")
                            ";
                    } else {
                        // line 72
                        echo "                                Этот квест в процессе разработки
                            ";
                    }
                    // line 74
                    echo "                        ";
                }
                // line 75
                echo "                    </h2>
                </div>
            ";
            }
            // line 78
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "        </section>
    </div>
</div>
</section>
";
        
        $__internal_93842f348ff740348ca50dfacaf9b91e680bbfe17a4e8d6b92a3ddbe92d2e5e2->leave($__internal_93842f348ff740348ca50dfacaf9b91e680bbfe17a4e8d6b92a3ddbe92d2e5e2_prof);

    }

    // line 85
    public function block_footer_js($context, array $blocks = array())
    {
        $__internal_446234e0817a2c7ffed140c95a00732b1a1f1c52d3db9a41044b2b3a3dca7a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_446234e0817a2c7ffed140c95a00732b1a1f1c52d3db9a41044b2b3a3dca7a10->enter($__internal_446234e0817a2c7ffed140c95a00732b1a1f1c52d3db9a41044b2b3a3dca7a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_js"));

        // line 86
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script>
        \$('#Quests .todown').remove().appendTo('#Quests');
    </script>
";
        
        $__internal_446234e0817a2c7ffed140c95a00732b1a1f1c52d3db9a41044b2b3a3dca7a10->leave($__internal_446234e0817a2c7ffed140c95a00732b1a1f1c52d3db9a41044b2b3a3dca7a10_prof);

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
        return array (  301 => 86,  295 => 85,  284 => 79,  278 => 78,  273 => 75,  270 => 74,  266 => 72,  260 => 70,  257 => 69,  255 => 68,  251 => 67,  235 => 64,  232 => 63,  219 => 58,  216 => 57,  214 => 56,  212 => 55,  206 => 52,  201 => 48,  195 => 47,  189 => 45,  186 => 44,  182 => 43,  172 => 38,  164 => 37,  161 => 36,  158 => 35,  154 => 34,  149 => 31,  138 => 29,  134 => 28,  124 => 20,  118 => 19,  107 => 16,  97 => 13,  91 => 12,  74 => 9,  61 => 8,  55 => 7,  45 => 3,  39 => 2,  11 => 1,);
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
                <div class=\"col-lg-4 quest_blocks animated fadeInUpBig\"
                     style=\"background: url('/uploads/{% if quest.background %}{{ quest.background }}{% else %}{{ quest.image }}{% endif %}') repeat 0 0 scroll; background-size: contain;\">
                    <a href=\"{{ path('web_quest', {'id': quest.id}) }}\"  title=\"{{ quest.title }}\">
                        <div class=\"options_q\">

                            <strong style=\"float: right; margin: -5px 0 0;\">
                                Cложность :
                                {% for i in 0..4 %}
                                    {% if i <= quest.complexity %}
                                        <img src=\"/images/omega.png\" width=\"20px\" alt=\"{{ quest.title }} big complexity\">
                                    {% endif %}
                                {% endfor %}
                            </strong>
                        </div>
                    <div class=\"transparency\"></div>
                    {#<strong>{{ quest.city.title }}</strong>#}
                    <h2>{{ quest.title }}</h2>

                    {#{% if quest.description|length > 300 %}{{ quest.description|slice(0, 300)|raw }}...</p>{% else %}#}
                        {#{{  quest.description|raw}}#}
                    {#{% endif %}#}
                        <div class=\"options_q_footer\">
                            <strong style=\"float: right\"><i class=\"icon-user\" style=\"color: white\"></i> : 2-{{ quest.count }}{% if quest.maxCount %}({{ quest.maxCount }}){% endif %}</strong>
                        </div>
                    </a>
                </div>
            {% else %}
                <div class=\"col-lg-4 quest_blocks animated fadeInUpBig todown\"
                     style=\"background: url({% if quest.background %}'/uploads/{{ quest.background }}'{% elseif quest.image %}'/uploads/{{ quest.image }}'{% else %}'/images/logo/logo_w.png'{% endif %}) repeat 0 0 scroll;
                     background-size: contain; opacity: 0.78;\">
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
{% endblock %}", "WebBundle:Default:quests.html.twig", "/Users/aleksandra/myaso/oqrooms/src/WebBundle/Resources/views/Default/quests.html.twig");
    }
}
