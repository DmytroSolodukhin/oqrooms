<?php

/* WebBundle:Default:quest.html.twig */
class __TwigTemplate_b01dbf3e9edfef22dd1d21a0eef7927fcea965d2d9a7d437900ce8a5ad94785e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebBundle::pagelayout.html.twig", "WebBundle:Default:quest.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metateg' => array($this, 'block_metateg'),
            'page_head_js' => array($this, 'block_page_head_js'),
            'hed_phone' => array($this, 'block_hed_phone'),
            'welcome' => array($this, 'block_welcome'),
            'content' => array($this, 'block_content'),
            'footer_js' => array($this, 'block_footer_js'),
            'phone' => array($this, 'block_phone'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebBundle::pagelayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0e1cc060bea8b5d4c586c138187d77974b4119ee81ccb92aca91ee286777827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e1cc060bea8b5d4c586c138187d77974b4119ee81ccb92aca91ee286777827->enter($__internal_b0e1cc060bea8b5d4c586c138187d77974b4119ee81ccb92aca91ee286777827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Default:quest.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0e1cc060bea8b5d4c586c138187d77974b4119ee81ccb92aca91ee286777827->leave($__internal_b0e1cc060bea8b5d4c586c138187d77974b4119ee81ccb92aca91ee286777827_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8214c2fe1ab19ff0ef907f257a8b4526187d095327e1058d432cbbf2c4a5eb89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8214c2fe1ab19ff0ef907f257a8b4526187d095327e1058d432cbbf2c4a5eb89->enter($__internal_8214c2fe1ab19ff0ef907f257a8b4526187d095327e1058d432cbbf2c4a5eb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "            <title>
                Квест комната ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "title", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "city", array()), "title", array()), "html", null, true);
        echo "
            </title>
        ";
        
        $__internal_8214c2fe1ab19ff0ef907f257a8b4526187d095327e1058d432cbbf2c4a5eb89->leave($__internal_8214c2fe1ab19ff0ef907f257a8b4526187d095327e1058d432cbbf2c4a5eb89_prof);

    }

    // line 7
    public function block_metateg($context, array $blocks = array())
    {
        $__internal_076d1e27c2231474e5c1e32fdbb216651d2a6e0c606e9eb0dd543ac47d33ff16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_076d1e27c2231474e5c1e32fdbb216651d2a6e0c606e9eb0dd543ac47d33ff16->enter($__internal_076d1e27c2231474e5c1e32fdbb216651d2a6e0c606e9eb0dd543ac47d33ff16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metateg"));

        // line 8
        echo "    <meta name=\"description\" content=\"occulto - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "title", array()), "html", null, true);
        echo ", игра, квест комната, секрет, логика, интеллект, головоломки, интуиция, occulto\">
    <meta name=\"keywords\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "city", array()), "title", array()), "html", null, true);
        echo ", квест, комната, квеструм, эскейпрум, ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "title", array()), "html", null, true);
        echo "\" />
";
        
        $__internal_076d1e27c2231474e5c1e32fdbb216651d2a6e0c606e9eb0dd543ac47d33ff16->leave($__internal_076d1e27c2231474e5c1e32fdbb216651d2a6e0c606e9eb0dd543ac47d33ff16_prof);

    }

    // line 12
    public function block_page_head_js($context, array $blocks = array())
    {
        $__internal_5f31bae8af4899a6799973fa3d22566b7d07cab1c2403214dfae6e4cf95aabc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f31bae8af4899a6799973fa3d22566b7d07cab1c2403214dfae6e4cf95aabc7->enter($__internal_5f31bae8af4899a6799973fa3d22566b7d07cab1c2403214dfae6e4cf95aabc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_head_js"));

        // line 13
        echo "    ";
        $this->displayParentBlock("page_head_js", $context, $blocks);
        echo "

    ";
        // line 16
        echo "
";
        
        $__internal_5f31bae8af4899a6799973fa3d22566b7d07cab1c2403214dfae6e4cf95aabc7->leave($__internal_5f31bae8af4899a6799973fa3d22566b7d07cab1c2403214dfae6e4cf95aabc7_prof);

    }

    // line 18
    public function block_hed_phone($context, array $blocks = array())
    {
        $__internal_3f1b2ce05449007cae3e9673ddba89ecd782332d4c91f27205ac4b0386a3fc4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f1b2ce05449007cae3e9673ddba89ecd782332d4c91f27205ac4b0386a3fc4d->enter($__internal_3f1b2ce05449007cae3e9673ddba89ecd782332d4c91f27205ac4b0386a3fc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hed_phone"));

        // line 19
        echo "                <span><a href=\"tel: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "user", array()), "phone", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "user", array()), "phone", array()), "html", null, true);
        echo "</a></span>
            ";
        
        $__internal_3f1b2ce05449007cae3e9673ddba89ecd782332d4c91f27205ac4b0386a3fc4d->leave($__internal_3f1b2ce05449007cae3e9673ddba89ecd782332d4c91f27205ac4b0386a3fc4d_prof);

    }

    // line 21
    public function block_welcome($context, array $blocks = array())
    {
        $__internal_e695aaadb7d60d9d8d8190b7f51de079c477c50f0f49835944a3cea041b2db89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e695aaadb7d60d9d8d8190b7f51de079c477c50f0f49835944a3cea041b2db89->enter($__internal_e695aaadb7d60d9d8d8190b7f51de079c477c50f0f49835944a3cea041b2db89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "welcome"));

        
        $__internal_e695aaadb7d60d9d8d8190b7f51de079c477c50f0f49835944a3cea041b2db89->leave($__internal_e695aaadb7d60d9d8d8190b7f51de079c477c50f0f49835944a3cea041b2db89_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_c75110a17b0ad217750eb5d4d398f1977d4522bc6b67e45950d916947ac47f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75110a17b0ad217750eb5d4d398f1977d4522bc6b67e45950d916947ac47f09->enter($__internal_c75110a17b0ad217750eb5d4d398f1977d4522bc6b67e45950d916947ac47f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "<div class=\"preloader active\" id=\"preloader\">
    <div>
        <h2><b>Пожалуйста подождите</b></h2>
        <img src=\"/images/loading_normal.gif\">
    </div>
</div>
<section>
    <div class=\"index_text_block_quest row\" id=\"first\">
        <div class=\"col-sm-12 col-md-12 col-lg-12 text-center quest_blocks\">
            <h1>
                ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "title", array()), "html", null, true);
        echo "
            </h1>
            <div class=\"col-sm-12 col-md-12 col-lg-12 text-center\">
                <img src=\"/uploads/";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "image", array()), "html", null, true);
        echo "\" style=\"float: left; width: 300px; margin: 0 25px 25px 0\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "title", array()), "html", null, true);
        echo "\">

                ";
        // line 40
        echo $this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "description", array());
        echo "
            </div>
            ";
        // line 43
        echo "                ";
        // line 44
        echo "                ";
        // line 45
        echo "                ";
        // line 46
        echo "                    ";
        // line 47
        echo "                    ";
        // line 48
        echo "                        ";
        // line 49
        echo "                            ";
        // line 50
        echo "                        ";
        // line 51
        echo "                    ";
        // line 52
        echo "                ";
        // line 53
        echo "            ";
        // line 54
        echo "        </div>
    </div>
</section>
<br>
<section>
    <div class=\" quest_blocks\"
         style=\"background: rgba(0,0,0, 0.7);\">
        <div class=\"phone\">
            <h1>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "city", array()), "title", array()), "html", null, true);
        if ($this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "addres", array())) {
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "addres", array()), "html", null, true);
        }
        // line 63
        echo "                <i class=\"icon-phone\"></i>
                <a href=\"tel:";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "phone", array()), "html", null, true);
        echo "\" style=\"color: white\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "phone", array()), "html", null, true);
        echo "</a>
            </h1>
        </div>
        <hr>
        <div id=\"visit_table\">
            <div id=\"mounth_visit\" class=\"row\" data-bind=\"foreach: mounthList()\">
                <div class=\"row\">
                    <div class=\"col-sm-";
        // line 71
        echo twig_escape_filter($this->env, (12 - twig_length_filter($this->env, $this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "open", array()))), "html", null, true);
        echo " quest_table_name day\">
                        <h4 data-bind=\"text: value.date+' '+value.title+' - '+value.name\">
                        </h4>
                    </div>
                    <div class=\"select_time\" data-bind=\"foreach: \$parent.respArray(value.mounth+'_'+value.date+'_'+value.year)\">
                        <div class=\"col-sm-1\">
                            <button style=\"height: 45px\"
                                    data-bind=\"enable: !selected, click: \$root.selectVisit(\$parent.value.mounth+'_'+\$parent.value.date+'_'+\$parent.value.year, id)\">
                                <div data-bind=\"text:title\"></div>
                                <div class=\"price\" data-bind=\"text: price+' грн', visible: !selected\">
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class=\"map_block quest_blocks\" style=\"max-height: 500px; height: auto; width: 70%; min-width: 200px; margin: auto\">
        <div id=\"map\"></div>
        <script>
            function initMap() {
                var myLatlng = new google.maps.LatLng({lat: ";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "lat", array()), "html", null, true);
        echo ", lng: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "lng", array()), "html", null, true);
        echo " });
                var myOptions = {
                    zoom: 14,
                    center: myLatlng,
                    scaleControl: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById(\"map\"), myOptions),
                        contentString = '<h3 style=\"color: black\">";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "title", array()), "html", null, true);
        echo "</h3>',
                        infowindow = new google.maps.InfoWindow({
                            content: contentString
                        }),
                        marker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            draggable: false,
                            title: \"";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "title", array()), "html", null, true);
        echo "\"
                        });

                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map,marker);
                });
            }
        </script>
    </div>
</section>
</br>
<section>
    <div id=\"billing_popup\" data-bind=\"visible: showBilling()\">
        <div class=\"scroll\">
           <h1>";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "title", array()), "html", null, true);
        echo "</h1>
            <div class=\"closePopup\" data-bind=\"click: closePopup()\">X</div>
            <hr>
            <h3>
                При заказе, ждите звонка от нашего оператора, для подтверждения!
            </h3>
            <hr>
            <div class=\"row\">
                <form id=\"Reservation\" data-bind=\"submit: sendReserv\">
                    <div class=\"col-lg-4\">
                        <h3>Время:
                            <span class=\"curentTime\" data-bind=\"text: curentPrice().title\"></span>
                        </h3>
                        <h3>День:
                            <span class=\"curentDate\" data-bind=\"text: curentDate()\"></span>
                        </h3>
                        <h3>Цена:
                            <span class=\"curentPrice\" data-bind=\"text: curentPrice().price+' грн'\"></span>
                        </h3>
                    </div>
                    <div class=\"col-lg-4\">
                    <fieldset>
                        <label for=\"Phone\">Телефон:</label>
                        <input type=\"tel\" id=\"Phone\" data-bind=\"value: phone\" name=\"phone\" placeholder=\"(063)1392958\"
                               maxlength=\"16\">
                        <br>
                        <label for=\"Name\">Имя:</label>
                        <input type=\"text\" id=\"Name\" data-bind=\"value: name\" name=\"name\" placeholder=\"Дмитрий\"
                               maxlength=\"10\">
                        <br>
                        <label for=\"Email\">Email:</label>
                        <input type=\"text\" id=\"Email\" data-bind=\"value: email\" name=\"email\" placeholder=\"dimon86@ukr.net\"
                               maxlength=\"30\">
                        <br>
                    </fieldset>
                    </div>
                    <div class=\"col-lg-4 text-center\">
                        <label for=\"Description\">Пожелания:</label><br/>
                        <textarea type=\"text\" id=\"Description\" data-bind=\"value: description\" name=\"description\">

                        </textarea>
                        <fieldset>
                            <label for=\"description\">Количество человек:</label>
                            <br>
                            <input type=\"number\" id=\"numberUser\" value=\"4\"  maxlength=\"2\" min=\"2\" max=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "maxCount", array()), "html", null, true);
        echo "\" autocomplete=\"off\">
                            <br>
                            <input type=\"submit\" value=\"Заказать\">
                            <br>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<div id=\"success\">
    <h1>";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "title", array()), "html", null, true);
        echo "</h1>
    <div class=\"closePopup\" data-bind=\"click: closeSuccessPopup()\">X</div>
    <hr>
    <h1>
        Поздравляю, Ваша заявка принята! Ждите звонка от нашего оператора.
    </h1>
</div>

<div id=\"errorSuccess\">
    <h1>";
        // line 192
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "title", array()), "html", null, true);
        echo "</h1>
    <div class=\"closePopup\" data-bind=\"click: closeerrorSuccess()\">X</div>
    <hr>
    <h2 data-bind=\"text: error()\">
    </h2>
</div>
";
        
        $__internal_c75110a17b0ad217750eb5d4d398f1977d4522bc6b67e45950d916947ac47f09->leave($__internal_c75110a17b0ad217750eb5d4d398f1977d4522bc6b67e45950d916947ac47f09_prof);

    }

    // line 200
    public function block_footer_js($context, array $blocks = array())
    {
        $__internal_58451065395d6a49df8a60aeb26f43de21f874a4edea89072b86709f92a5e208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58451065395d6a49df8a60aeb26f43de21f874a4edea89072b86709f92a5e208->enter($__internal_58451065395d6a49df8a60aeb26f43de21f874a4edea89072b86709f92a5e208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_js"));

        // line 201
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBTf4a0NxxVvVLg66e9goXLQoTkVPmK6ok&callback=initMap\"
            async defer></script>
    <script src=\"/js/knockout-3.4.0.js\"></script>
    <script src=\"/js/visit_table.js\"></script>
    <script>
        var time_visit = [],
                visit = [],
                params = {
                    maxCount: ";
        // line 210
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "maxCount", array()), "html", null, true);
        echo ",
                    count: ";
        // line 211
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "count", array()), "html", null, true);
        echo ",
                    pay: ";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "plusPay", array()), "html", null, true);
        echo ",
                    primeDate: []
                };


        ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "time", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["time_visit"]) {
            // line 218
            echo "
            time_visit.push({
                date: '";
            // line 220
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["time_visit"], "open", array()), "n_j_Y"), "html", null, true);
            echo "',
                name: '";
            // line 221
            echo twig_escape_filter($this->env, $this->getAttribute($context["time_visit"], "title", array()), "html", null, true);
            echo "',
                id_visit: '";
            // line 222
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["time_visit"], "visit", array()), "id", array()), "html", null, true);
            echo "',
                time: '";
            // line 223
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["time_visit"], "visit", array()), "title", array()), "html", null, true);
            echo "'
            });
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['time_visit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo "
        ";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "open", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["open"]) {
            // line 228
            echo "        visit.push({
                id: ";
            // line 229
            echo twig_escape_filter($this->env, $this->getAttribute($context["open"], "id", array()), "html", null, true);
            echo ",
                title: '";
            // line 230
            echo twig_escape_filter($this->env, $this->getAttribute($context["open"], "title", array()), "html", null, true);
            echo "',
                price: ";
            // line 231
            echo twig_escape_filter($this->env, $this->getAttribute($context["open"], "price", array()), "html", null, true);
            echo "
            });


        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['open'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "        ko.applyBindings(new TableVisitViewModel(time_visit, visit, ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "id", array()), "html", null, true);
        echo ", params));
    </script>
";
        
        $__internal_58451065395d6a49df8a60aeb26f43de21f874a4edea89072b86709f92a5e208->leave($__internal_58451065395d6a49df8a60aeb26f43de21f874a4edea89072b86709f92a5e208_prof);

    }

    // line 240
    public function block_phone($context, array $blocks = array())
    {
        $__internal_c9746262a95cb2c51d425cc5f13c790a305569b58bd9a8f1a78e5a52654d1bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9746262a95cb2c51d425cc5f13c790a305569b58bd9a8f1a78e5a52654d1bf5->enter($__internal_c9746262a95cb2c51d425cc5f13c790a305569b58bd9a8f1a78e5a52654d1bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "phone"));

        // line 241
        echo "<div>
    <div class=\"phone\">
        <i class=\"icon-phone\"></i>
        <a href=\"tel:";
        // line 244
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "phone", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? $this->getContext($context, "quest")), "phone", array()), "html", null, true);
        echo "</a>
    </div>
</div>
";
        
        $__internal_c9746262a95cb2c51d425cc5f13c790a305569b58bd9a8f1a78e5a52654d1bf5->leave($__internal_c9746262a95cb2c51d425cc5f13c790a305569b58bd9a8f1a78e5a52654d1bf5_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Default:quest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  495 => 244,  490 => 241,  484 => 240,  473 => 236,  462 => 231,  458 => 230,  454 => 229,  451 => 228,  447 => 227,  444 => 226,  435 => 223,  431 => 222,  427 => 221,  423 => 220,  419 => 218,  415 => 217,  407 => 212,  403 => 211,  399 => 210,  386 => 201,  380 => 200,  366 => 192,  354 => 183,  338 => 170,  291 => 126,  274 => 112,  263 => 104,  250 => 96,  222 => 71,  210 => 64,  207 => 63,  201 => 62,  191 => 54,  189 => 53,  187 => 52,  185 => 51,  183 => 50,  181 => 49,  179 => 48,  177 => 47,  175 => 46,  173 => 45,  171 => 44,  169 => 43,  164 => 40,  157 => 38,  151 => 35,  139 => 25,  133 => 24,  122 => 21,  110 => 19,  104 => 18,  96 => 16,  90 => 13,  84 => 12,  73 => 9,  68 => 8,  62 => 7,  50 => 4,  47 => 3,  41 => 2,  11 => 1,);
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
                Квест комната {{ quest.title }}, {{ quest.city.title }}
            </title>
        {% endblock %}
{% block metateg %}
    <meta name=\"description\" content=\"occulto - {{ quest.title }}, игра, квест комната, секрет, логика, интеллект, головоломки, интуиция, occulto\">
    <meta name=\"keywords\" content=\"{{ quest.city.title }}, квест, комната, квеструм, эскейпрум, {{ quest.title }}\" />
{% endblock %}

{% block page_head_js %}
    {{ parent() }}

    {#<script src='https://www.google.com/recaptcha/api.js'></script>#}

{% endblock %}
            {% block hed_phone %}
                <span><a href=\"tel: {{ quest.user.phone }}\">{{ quest.user.phone }}</a></span>
            {% endblock %}
{% block welcome %}
{% endblock %}

{% block content %}
<div class=\"preloader active\" id=\"preloader\">
    <div>
        <h2><b>Пожалуйста подождите</b></h2>
        <img src=\"/images/loading_normal.gif\">
    </div>
</div>
<section>
    <div class=\"index_text_block_quest row\" id=\"first\">
        <div class=\"col-sm-12 col-md-12 col-lg-12 text-center quest_blocks\">
            <h1>
                {{ quest.title }}
            </h1>
            <div class=\"col-sm-12 col-md-12 col-lg-12 text-center\">
                <img src=\"/uploads/{{ quest.image }}\" style=\"float: left; width: 300px; margin: 0 25px 25px 0\" alt=\"{{ quest.title }}\">

                {{ quest.description|raw }}
            </div>
            {#<div class=\"col-sm-8\" style=\"text-align: left\">#}
                {#<strong><i class=\"icon-user\" style=\"color: white\"></i> : 2-{{ quest.count }}{% if quest.maxCount %}({{ quest.maxCount }}){% endif %}</strong>#}
                {#</br>#}
                {#<strong>#}
                    {#Cложность :#}
                    {#{% for i in 0..4 %}#}
                        {#{% if i <= quest.complexity %}#}
                            {#<img src=\"/images/omega.png\" width=\"30px\" alt=\"{{ quest.title }} big complexity\">#}
                        {#{% endif %}#}
                    {#{% endfor %}#}
                {#</strong>#}
            {#</div>#}
        </div>
    </div>
</section>
<br>
<section>
    <div class=\" quest_blocks\"
         style=\"background: rgba(0,0,0, 0.7);\">
        <div class=\"phone\">
            <h1>{{ quest.city.title }}{% if quest.addres %}, {{ quest.addres }}{% endif %}
                <i class=\"icon-phone\"></i>
                <a href=\"tel:{{ quest.phone }}\" style=\"color: white\">{{ quest.phone }}</a>
            </h1>
        </div>
        <hr>
        <div id=\"visit_table\">
            <div id=\"mounth_visit\" class=\"row\" data-bind=\"foreach: mounthList()\">
                <div class=\"row\">
                    <div class=\"col-sm-{{ 12-quest.open|length }} quest_table_name day\">
                        <h4 data-bind=\"text: value.date+' '+value.title+' - '+value.name\">
                        </h4>
                    </div>
                    <div class=\"select_time\" data-bind=\"foreach: \$parent.respArray(value.mounth+'_'+value.date+'_'+value.year)\">
                        <div class=\"col-sm-1\">
                            <button style=\"height: 45px\"
                                    data-bind=\"enable: !selected, click: \$root.selectVisit(\$parent.value.mounth+'_'+\$parent.value.date+'_'+\$parent.value.year, id)\">
                                <div data-bind=\"text:title\"></div>
                                <div class=\"price\" data-bind=\"text: price+' грн', visible: !selected\">
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class=\"map_block quest_blocks\" style=\"max-height: 500px; height: auto; width: 70%; min-width: 200px; margin: auto\">
        <div id=\"map\"></div>
        <script>
            function initMap() {
                var myLatlng = new google.maps.LatLng({lat: {{ quest.lat }}, lng: {{ quest.lng }} });
                var myOptions = {
                    zoom: 14,
                    center: myLatlng,
                    scaleControl: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById(\"map\"), myOptions),
                        contentString = '<h3 style=\"color: black\">{{ quest.title }}</h3>',
                        infowindow = new google.maps.InfoWindow({
                            content: contentString
                        }),
                        marker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            draggable: false,
                            title: \"{{ quest.title }}\"
                        });

                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map,marker);
                });
            }
        </script>
    </div>
</section>
</br>
<section>
    <div id=\"billing_popup\" data-bind=\"visible: showBilling()\">
        <div class=\"scroll\">
           <h1>{{ quest.title }}</h1>
            <div class=\"closePopup\" data-bind=\"click: closePopup()\">X</div>
            <hr>
            <h3>
                При заказе, ждите звонка от нашего оператора, для подтверждения!
            </h3>
            <hr>
            <div class=\"row\">
                <form id=\"Reservation\" data-bind=\"submit: sendReserv\">
                    <div class=\"col-lg-4\">
                        <h3>Время:
                            <span class=\"curentTime\" data-bind=\"text: curentPrice().title\"></span>
                        </h3>
                        <h3>День:
                            <span class=\"curentDate\" data-bind=\"text: curentDate()\"></span>
                        </h3>
                        <h3>Цена:
                            <span class=\"curentPrice\" data-bind=\"text: curentPrice().price+' грн'\"></span>
                        </h3>
                    </div>
                    <div class=\"col-lg-4\">
                    <fieldset>
                        <label for=\"Phone\">Телефон:</label>
                        <input type=\"tel\" id=\"Phone\" data-bind=\"value: phone\" name=\"phone\" placeholder=\"(063)1392958\"
                               maxlength=\"16\">
                        <br>
                        <label for=\"Name\">Имя:</label>
                        <input type=\"text\" id=\"Name\" data-bind=\"value: name\" name=\"name\" placeholder=\"Дмитрий\"
                               maxlength=\"10\">
                        <br>
                        <label for=\"Email\">Email:</label>
                        <input type=\"text\" id=\"Email\" data-bind=\"value: email\" name=\"email\" placeholder=\"dimon86@ukr.net\"
                               maxlength=\"30\">
                        <br>
                    </fieldset>
                    </div>
                    <div class=\"col-lg-4 text-center\">
                        <label for=\"Description\">Пожелания:</label><br/>
                        <textarea type=\"text\" id=\"Description\" data-bind=\"value: description\" name=\"description\">

                        </textarea>
                        <fieldset>
                            <label for=\"description\">Количество человек:</label>
                            <br>
                            <input type=\"number\" id=\"numberUser\" value=\"4\"  maxlength=\"2\" min=\"2\" max=\"{{ quest.maxCount }}\" autocomplete=\"off\">
                            <br>
                            <input type=\"submit\" value=\"Заказать\">
                            <br>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<div id=\"success\">
    <h1>{{ quest.title }}</h1>
    <div class=\"closePopup\" data-bind=\"click: closeSuccessPopup()\">X</div>
    <hr>
    <h1>
        Поздравляю, Ваша заявка принята! Ждите звонка от нашего оператора.
    </h1>
</div>

<div id=\"errorSuccess\">
    <h1>{{ quest.title }}</h1>
    <div class=\"closePopup\" data-bind=\"click: closeerrorSuccess()\">X</div>
    <hr>
    <h2 data-bind=\"text: error()\">
    </h2>
</div>
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBTf4a0NxxVvVLg66e9goXLQoTkVPmK6ok&callback=initMap\"
            async defer></script>
    <script src=\"/js/knockout-3.4.0.js\"></script>
    <script src=\"/js/visit_table.js\"></script>
    <script>
        var time_visit = [],
                visit = [],
                params = {
                    maxCount: {{ quest.maxCount }},
                    count: {{ quest.count }},
                    pay: {{ quest.plusPay }},
                    primeDate: []
                };


        {% for time_visit in quest.time %}

            time_visit.push({
                date: '{{ time_visit.open|date(\"n_j_Y\") }}',
                name: '{{ time_visit.title }}',
                id_visit: '{{ time_visit.visit.id }}',
                time: '{{ time_visit.visit.title }}'
            });
        {% endfor %}

        {% for open in quest.open %}
        visit.push({
                id: {{ open.id }},
                title: '{{ open.title }}',
                price: {{ open.price }}
            });


        {% endfor %}
        ko.applyBindings(new TableVisitViewModel(time_visit, visit, {{ quest.id }}, params));
    </script>
{% endblock %}

{% block phone %}
<div>
    <div class=\"phone\">
        <i class=\"icon-phone\"></i>
        <a href=\"tel:{{ quest.phone }}\">{{ quest.phone }}</a>
    </div>
</div>
{% endblock %}
", "WebBundle:Default:quest.html.twig", "/var/www/oqroom/src/WebBundle/Resources/views/Default/quest.html.twig");
    }
}
