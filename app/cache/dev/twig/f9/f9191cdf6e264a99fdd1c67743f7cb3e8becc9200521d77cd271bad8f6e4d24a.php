<?php

/* WebBundle:Default:index.html.twig */
class __TwigTemplate_608d261e358ac954f6ad19e94fa7cbda6fcaf3d11fbd8c094a5172f10e154fb9 extends Twig_Template
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
        $__internal_03b55da6edd7fe4d4eea7964baac4e769c6f00300e77153633dc4dfb288fe47b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b55da6edd7fe4d4eea7964baac4e769c6f00300e77153633dc4dfb288fe47b->enter($__internal_03b55da6edd7fe4d4eea7964baac4e769c6f00300e77153633dc4dfb288fe47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03b55da6edd7fe4d4eea7964baac4e769c6f00300e77153633dc4dfb288fe47b->leave($__internal_03b55da6edd7fe4d4eea7964baac4e769c6f00300e77153633dc4dfb288fe47b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c07e63b953c7247e5efaa00720ee559179daf6cd1c69dc6e6c43c4864392617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c07e63b953c7247e5efaa00720ee559179daf6cd1c69dc6e6c43c4864392617->enter($__internal_8c07e63b953c7247e5efaa00720ee559179daf6cd1c69dc6e6c43c4864392617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "        <title>
            Квест комнаты OQrooms
        </title>
    ";
        
        $__internal_8c07e63b953c7247e5efaa00720ee559179daf6cd1c69dc6e6c43c4864392617->leave($__internal_8c07e63b953c7247e5efaa00720ee559179daf6cd1c69dc6e6c43c4864392617_prof);

    }

    // line 8
    public function block_metateg($context, array $blocks = array())
    {
        $__internal_284bfe8380de30559a019533a8a6d8633a2fc04401501d6bab88e84c0b511594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_284bfe8380de30559a019533a8a6d8633a2fc04401501d6bab88e84c0b511594->enter($__internal_284bfe8380de30559a019533a8a6d8633a2fc04401501d6bab88e84c0b511594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metateg"));

        // line 9
        echo "        <meta name=\"description\" content=\"лучшие квест комнаты Одессы, игра, квест комната, секрет и логика, интеллект и головоломки, интуиция, это все - occulto\">
        <meta name=\"keywords\" content=\"Одесса, квест, ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["quests"] ?? $this->getContext($context, "quests")));
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
        
        $__internal_284bfe8380de30559a019533a8a6d8633a2fc04401501d6bab88e84c0b511594->leave($__internal_284bfe8380de30559a019533a8a6d8633a2fc04401501d6bab88e84c0b511594_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_185efa113dbdf4faea1be822e4c72075cafb431f5c8aa3f8051b5b9dccd15338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185efa113dbdf4faea1be822e4c72075cafb431f5c8aa3f8051b5b9dccd15338->enter($__internal_185efa113dbdf4faea1be822e4c72075cafb431f5c8aa3f8051b5b9dccd15338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        $context['_seq'] = twig_ensure_traversable(($context["quests"] ?? $this->getContext($context, "quests")));
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
        
        $__internal_185efa113dbdf4faea1be822e4c72075cafb431f5c8aa3f8051b5b9dccd15338->leave($__internal_185efa113dbdf4faea1be822e4c72075cafb431f5c8aa3f8051b5b9dccd15338_prof);

    }

    // line 98
    public function block_footer_js($context, array $blocks = array())
    {
        $__internal_931c1c93e139f6e17a0378280600de898825f8bc274bb168157d1f6cac1f78b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_931c1c93e139f6e17a0378280600de898825f8bc274bb168157d1f6cac1f78b0->enter($__internal_931c1c93e139f6e17a0378280600de898825f8bc274bb168157d1f6cac1f78b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_js"));

        // line 99
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script>
        \$('#Quests .todown').remove().appendTo('#Quests');
    </script>
";
        
        $__internal_931c1c93e139f6e17a0378280600de898825f8bc274bb168157d1f6cac1f78b0->leave($__internal_931c1c93e139f6e17a0378280600de898825f8bc274bb168157d1f6cac1f78b0_prof);

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
        return array (  266 => 99,  260 => 98,  250 => 93,  243 => 91,  226 => 86,  223 => 84,  221 => 83,  219 => 82,  217 => 81,  215 => 80,  213 => 79,  211 => 78,  209 => 77,  207 => 76,  205 => 75,  203 => 74,  201 => 73,  199 => 72,  197 => 71,  195 => 70,  190 => 67,  188 => 66,  186 => 65,  184 => 64,  182 => 63,  180 => 62,  178 => 61,  176 => 60,  174 => 59,  172 => 58,  170 => 57,  168 => 56,  166 => 55,  164 => 54,  162 => 53,  160 => 52,  157 => 50,  155 => 49,  153 => 48,  151 => 47,  149 => 46,  139 => 43,  131 => 40,  129 => 39,  126 => 38,  122 => 37,  117 => 34,  115 => 31,  113 => 30,  111 => 29,  109 => 28,  107 => 27,  105 => 26,  103 => 25,  101 => 24,  99 => 23,  97 => 22,  95 => 21,  93 => 20,  91 => 19,  89 => 18,  86 => 15,  80 => 14,  62 => 10,  59 => 9,  53 => 8,  43 => 4,  37 => 3,  11 => 1,);
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
            Квест комнаты OQrooms
        </title>
    {% endblock %}
    {% block metateg %}
        <meta name=\"description\" content=\"лучшие квест комнаты Одессы, игра, квест комната, секрет и логика, интеллект и головоломки, интуиция, это все - occulto\">
        <meta name=\"keywords\" content=\"Одесса, квест, {% for quest in quests %}{{ quest.title }}, {% endfor %}лабиринт, квест комната,
labirint, игры квесты, квест одесса, квест игры, quest room, квест рум одесса\" />
    {% endblock %}

{% block content %}
<a class=\"scroll-down hidden-xs hidden-sm\" href=\"#first\"></a>
{#<section>#}
{#<div class=\"index_text_block\" id=\"first\">#}
    {#<div class=\"row\">#}
        {#<div class=\"col-sm-10 col-md-offset-1 quest_block\">#}
            {#<h1>#}
                {#Occulto Quests#}
            {#</h1>#}
            {#<p>Погружение в мир тайн и загадок. Соприкосновение с героями мифов и легенд.#}
                {#Перенос в былые времена и эпохи. Раскрытие тайных замыслов и встреча с чудовищами,#}
                {#борьба против себя самого, против своих страхов и фобий. Загадки и головоломки, поиск и удача,#}
                {#подсказки и секреты, испытание логики и интуиции. Использование интеллекта как#}
                {#самого необходимого инструмента, помощь друзей и командная игра. Все это — Occulto Quests.#}
            {#</p>#}
            {#<p>Погрузитесь в мир, cозданный для Вас - Occulto Quests!</p>#}
        {#</div>#}
    {#</div>#}
{#</div>#}
{#</section>#}
<section>
    <div class=\"first_block\" id=\"first\">
    <div class=\"row\" id=\"Quests\">
        {% for key, quest in quests %}
        <section>
            {% if not quest.inprogress %}
                <a href=\"{{ path('web_quest', {'id': quest.id}) }}\" title=\"{{ quest.title }}\">
                    <div class=\"col-sm-10 col-md-9 col-lg-9 image_center quest_block\">
                         {#style=\"background: url('/uploads/{% if quest.background %}{{ quest.background }}{% else %}{{ quest.image }}{% endif %}') no-repeat;\">#}
                        <img class=\"entry\" src=\"/uploads/{% if quest.background %}{{ quest.background }}{% else %}{{ quest.image }}{% endif %}\">
                        <div class=\"transparency\"></div>
                        {#<div class=\"text-wrapper\">#}
                        {#<strong>#}
                            {#<i class=\"icon-user\" style=\"color: white\"></i>#}
                            {#: 2-{{ quest.count }}{% if quest.maxCount %}({{ quest.maxCount }}){% endif %}#}
                        {#</strong>#}

                        {#<h3>#}
                                {#{{ quest.city.title }}#}
                        {#</h3>#}
                        {#<h2>{{ quest.title }}</h2>#}
                                {#<strong>#}
                                    {#Cложность :#}
                                    {#{% for i in 0..4 %}#}
                                        {#{% if i <= quest.complexity %}#}
                                            {#<img src=\"/images/omega.png\" width=\"30px\" alt=\"{{ quest.title }} big complexity\">#}
                                        {#{% endif %}#}
                                    {#{% endfor %}#}
                                {#</strong>#}
                        {#{% if quest.description|length > 300 %}{{ quest.description|slice(0, 300)|raw }}...</p>{% else %}#}
                            {#{{  quest.description|raw}}#}
                        {#{% endif %}#}
                        {#</div>#}
                    </div>
                </a>
            {% else %}
                {#<div class=\"col-sm-10 col-md-offset-1 quest_block {% if quest.inprogress %}todown{% endif %}\"#}
                     {#style=\"background: url({% if quest.background %}'/uploads/{{ quest.background }}'{% elseif quest.image %}'/uploads/{{ quest.image }}'{% else %}'/images/logo/OQ-rooms2.png'{% endif %}) repeat 0 0 scroll; background-size: contain; opacity: 0.78;\">#}
                    {#<div class=\"inproggress\"></div>#}
                    {#<strong>{{ quest.city.title }}</strong>#}
                    {#<h2>{{ quest.title }}.#}
                        {#{% if quest.inprogress %}#}
                            {#{% if quest.startTime %}#}
                                {#Открытие квеста ({{ quest.startTime|date('d/m/y') }})#}
                            {#{% else %}#}
                                {#Этот квест в процессе разработки#}
                                {#{% endif %}#}
                        {#{% endif %}#}
                    {#</h2>#}
                {#</div>#}
                <div class=\"col-sm-10 col-md-9 col-lg-9 image_center quest_block\">
                    {#style=\"background: url('/uploads/{% if quest.background %}{{ quest.background }}{% else %}{{ quest.image }}{% endif %}') no-repeat;\">#}
                    <img class=\"entry\" src=\"{% if quest.background %}/uploads/{{ quest.background }}{% elseif quest.image %}/uploads/{{ quest.image }}{% else %}/images/logo/OQ-rooms2.png{% endif %}\">
                    <div class=\"transparency\"></div>

                </div>
            {% endif %}
        </section>
        {% endfor %}
    </div>
</div>
</section>
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script>
        \$('#Quests .todown').remove().appendTo('#Quests');
    </script>
{% endblock %}", "WebBundle:Default:index.html.twig", "/var/www/oqroom/src/WebBundle/Resources/views/Default/index.html.twig");
    }
}
