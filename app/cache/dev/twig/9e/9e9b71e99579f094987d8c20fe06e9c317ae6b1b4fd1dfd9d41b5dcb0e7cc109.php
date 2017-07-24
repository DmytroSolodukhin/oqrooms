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
        $__internal_6e2db5b5bbe1e32bae6d45e9b42312835b75060db383f5670cf8c833d94bb0db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2db5b5bbe1e32bae6d45e9b42312835b75060db383f5670cf8c833d94bb0db->enter($__internal_6e2db5b5bbe1e32bae6d45e9b42312835b75060db383f5670cf8c833d94bb0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Default:quests.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e2db5b5bbe1e32bae6d45e9b42312835b75060db383f5670cf8c833d94bb0db->leave($__internal_6e2db5b5bbe1e32bae6d45e9b42312835b75060db383f5670cf8c833d94bb0db_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0606aa4ce784710e805c80e8a3b496b753e6b08cef5c9b66db60cf9055162e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0606aa4ce784710e805c80e8a3b496b753e6b08cef5c9b66db60cf9055162e2->enter($__internal_e0606aa4ce784710e805c80e8a3b496b753e6b08cef5c9b66db60cf9055162e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "            <title>
                Квест комнаты Oculto
            </title>
        ";
        
        $__internal_e0606aa4ce784710e805c80e8a3b496b753e6b08cef5c9b66db60cf9055162e2->leave($__internal_e0606aa4ce784710e805c80e8a3b496b753e6b08cef5c9b66db60cf9055162e2_prof);

    }

    // line 7
    public function block_metateg($context, array $blocks = array())
    {
        $__internal_a7601b335642a80ef8165e8438d8f95f4f79716f3e7986d98e7ada4eb22c509a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7601b335642a80ef8165e8438d8f95f4f79716f3e7986d98e7ada4eb22c509a->enter($__internal_a7601b335642a80ef8165e8438d8f95f4f79716f3e7986d98e7ada4eb22c509a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metateg"));

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
        
        $__internal_a7601b335642a80ef8165e8438d8f95f4f79716f3e7986d98e7ada4eb22c509a->leave($__internal_a7601b335642a80ef8165e8438d8f95f4f79716f3e7986d98e7ada4eb22c509a_prof);

    }

    // line 12
    public function block_page_head_js($context, array $blocks = array())
    {
        $__internal_36ad3c7f771746fda6aada912530f95b75d9f4f51edb81b29d2db97c17f66725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ad3c7f771746fda6aada912530f95b75d9f4f51edb81b29d2db97c17f66725->enter($__internal_36ad3c7f771746fda6aada912530f95b75d9f4f51edb81b29d2db97c17f66725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_head_js"));

        // line 13
        echo "    ";
        $this->displayParentBlock("page_head_js", $context, $blocks);
        echo "
";
        
        $__internal_36ad3c7f771746fda6aada912530f95b75d9f4f51edb81b29d2db97c17f66725->leave($__internal_36ad3c7f771746fda6aada912530f95b75d9f4f51edb81b29d2db97c17f66725_prof);

    }

    // line 16
    public function block_welcome($context, array $blocks = array())
    {
        $__internal_83558a671a50866e296cb00f55509b0cdf3de7bd185497fa46201b22a9f72965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83558a671a50866e296cb00f55509b0cdf3de7bd185497fa46201b22a9f72965->enter($__internal_83558a671a50866e296cb00f55509b0cdf3de7bd185497fa46201b22a9f72965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "welcome"));

        
        $__internal_83558a671a50866e296cb00f55509b0cdf3de7bd185497fa46201b22a9f72965->leave($__internal_83558a671a50866e296cb00f55509b0cdf3de7bd185497fa46201b22a9f72965_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_395524c4fba7804c000723385222397467d2cb68d75f7b9b3d2ada8b717c6aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_395524c4fba7804c000723385222397467d2cb68d75f7b9b3d2ada8b717c6aec->enter($__internal_395524c4fba7804c000723385222397467d2cb68d75f7b9b3d2ada8b717c6aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                echo "                <div class=\"col-lg-4 quest_blocks animated fadeInUpBig\"
                     style=\"background: url('/uploads/";
                // line 37
                if ($this->getAttribute($context["quest"], "background", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "background", array()), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["quest"], "image", array()), "html", null, true);
                }
                echo "') repeat 0 0 scroll; background-size: contain;\">
                    ";
                // line 39
                echo "                        ";
                // line 40
                echo "
                            ";
                // line 42
                echo "                                ";
                // line 43
                echo "                                ";
                // line 44
                echo "                                    ";
                // line 45
                echo "                                        ";
                // line 46
                echo "                                    ";
                // line 47
                echo "                                ";
                // line 48
                echo "                            ";
                // line 49
                echo "                        ";
                // line 50
                echo "                    ";
                // line 51
                echo "                    ";
                // line 52
                echo "                    ";
                // line 53
                echo "
                    ";
                // line 55
                echo "                        ";
                // line 56
                echo "                    ";
                // line 57
                echo "                        ";
                // line 58
                echo "                            ";
                // line 59
                echo "                        ";
                // line 60
                echo "                    ";
                // line 61
                echo "                </div>
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
        
        $__internal_395524c4fba7804c000723385222397467d2cb68d75f7b9b3d2ada8b717c6aec->leave($__internal_395524c4fba7804c000723385222397467d2cb68d75f7b9b3d2ada8b717c6aec_prof);

    }

    // line 85
    public function block_footer_js($context, array $blocks = array())
    {
        $__internal_4479d7c46b06e102df9c5effe9d5c94e7fff63ea0f3b09d05f3ddd30eb42e20b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4479d7c46b06e102df9c5effe9d5c94e7fff63ea0f3b09d05f3ddd30eb42e20b->enter($__internal_4479d7c46b06e102df9c5effe9d5c94e7fff63ea0f3b09d05f3ddd30eb42e20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_js"));

        // line 86
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script>
        \$('#Quests .todown').remove().appendTo('#Quests');
    </script>
";
        
        $__internal_4479d7c46b06e102df9c5effe9d5c94e7fff63ea0f3b09d05f3ddd30eb42e20b->leave($__internal_4479d7c46b06e102df9c5effe9d5c94e7fff63ea0f3b09d05f3ddd30eb42e20b_prof);

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
        return array (  287 => 86,  281 => 85,  270 => 79,  264 => 78,  259 => 75,  256 => 74,  252 => 72,  246 => 70,  243 => 69,  241 => 68,  237 => 67,  221 => 64,  218 => 63,  214 => 61,  212 => 60,  210 => 59,  208 => 58,  206 => 57,  204 => 56,  202 => 55,  199 => 53,  197 => 52,  195 => 51,  193 => 50,  191 => 49,  189 => 48,  187 => 47,  185 => 46,  183 => 45,  181 => 44,  179 => 43,  177 => 42,  174 => 40,  172 => 39,  164 => 37,  161 => 36,  158 => 35,  154 => 34,  149 => 31,  138 => 29,  134 => 28,  124 => 20,  118 => 19,  107 => 16,  97 => 13,  91 => 12,  74 => 9,  61 => 8,  55 => 7,  45 => 3,  39 => 2,  11 => 1,);
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
                    {#<a href=\"{{ path('web_quest', {'id': quest.id}) }}\"  title=\"{{ quest.title }}\">#}
                        {#<div class=\"options_q\">#}

                            {#<strong style=\"float: right; margin: -5px 0 0;\">#}
                                {#Cложность :#}
                                {#{% for i in 0..4 %}#}
                                    {#{% if i <= quest.complexity %}#}
                                        {#<img src=\"/images/omega.png\" width=\"20px\" alt=\"{{ quest.title }} big complexity\">#}
                                    {#{% endif %}#}
                                {#{% endfor %}#}
                            {#</strong>#}
                        {#</div>#}
                    {#<div class=\"transparency\"></div>#}
                    {#<strong>{{ quest.city.title }}</strong>#}
                    {#<h2>{{ quest.title }}</h2>#}

                    {#{% if quest.description|length > 300 %}{{ quest.description|slice(0, 300)|raw }}...</p>{% else %}#}
                        {#{{  quest.description|raw}}#}
                    {#{% endif %}#}
                        {#<div class=\"options_q_footer\">#}
                            {#<strong style=\"float: right\"><i class=\"icon-user\" style=\"color: white\"></i> : 2-{{ quest.count }}{% if quest.maxCount %}({{ quest.maxCount }}){% endif %}</strong>#}
                        {#</div>#}
                    {#</a>#}
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
{% endblock %}", "WebBundle:Default:quests.html.twig", "/var/www/oqroom/src/WebBundle/Resources/views/Default/quests.html.twig");
    }
}
