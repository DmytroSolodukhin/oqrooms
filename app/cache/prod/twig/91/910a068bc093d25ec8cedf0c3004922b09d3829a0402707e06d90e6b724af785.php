<?php

/* WebBundle:Default:quest.html.twig */
class __TwigTemplate_d549430e160f92ec63c38f253dff5d3aa5af55638a39022ca4f249f43f98a193 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "            <title>
                Квест комната ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? null), "title", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["quest"] ?? null), "city", array()), "title", array()), "html", null, true);
        echo "
            </title>
        ";
    }

    // line 7
    public function block_metateg($context, array $blocks = array())
    {
        // line 8
        echo "    <meta name=\"description\" content=\"occulto - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? null), "title", array()), "html", null, true);
        echo ", игра, квест комната, секрет, логика, интеллект, головоломки, интуиция, occulto\">
    <meta name=\"keywords\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["quest"] ?? null), "city", array()), "title", array()), "html", null, true);
        echo ", квест, комната, квеструм, эскейпрум, ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? null), "title", array()), "html", null, true);
        echo "\" />
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
        // line 16
        echo "
";
    }

    // line 18
    public function block_hed_phone($context, array $blocks = array())
    {
        // line 19
        echo "                <span><a href=\"tel: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? null), "phone", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? null), "phone", array()), "html", null, true);
        echo "</a></span>
            ";
    }

    // line 21
    public function block_welcome($context, array $blocks = array())
    {
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? null), "title", array()), "html", null, true);
        echo "
            </h1>
            <div class=\"col-sm-12 col-md-12 col-lg-12 text-center\">
                <img class=\"quest-img\" src=\"/uploads/";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? null), "image", array()), "html", null, true);
        echo "\"  alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? null), "title", array()), "html", null, true);
        echo "\">

                ";
        // line 40
        echo $this->getAttribute(($context["quest"] ?? null), "description", array());
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["quest"] ?? null), "city", array()), "title", array()), "html", null, true);
        if ($this->getAttribute(($context["quest"] ?? null), "addres", array())) {
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? null), "addres", array()), "html", null, true);
        }
        // line 63
        echo "                <i class=\"icon-phone\"></i>
                <a href=\"tel:";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? null), "phone", array()), "html", null, true);
        echo "\" style=\"color: white\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? null), "phone", array()), "html", null, true);
        echo "</a>
            </h1>
        </div>
        <hr>
        <div id=\"visit_table\">
            <div id=\"mounth_visit\" class=\"row\" data-bind=\"foreach: mounthList()\">
                <div class=\"row\">
                    <div class=\"col-sm-";
        // line 71
        echo twig_escape_filter($this->env, (12 - twig_length_filter($this->env, $this->getAttribute(($context["quest"] ?? null), "open", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? null), "lat", array()), "html", null, true);
        echo ", lng: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? null), "lng", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? null), "title", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? null), "title", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? null), "title", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? null), "maxCount", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? null), "title", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? null), "title", array()), "html", null, true);
        echo "</h1>
    <div class=\"closePopup\" data-bind=\"click: closeerrorSuccess()\">X</div>
    <hr>
    <h2 data-bind=\"text: error()\">
    </h2>
</div>
";
    }

    // line 200
    public function block_footer_js($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? null), "maxCount", array()), "html", null, true);
        echo ",
                    count: ";
        // line 211
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? null), "count", array()), "html", null, true);
        echo ",
                    pay: ";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? null), "plusPay", array()), "html", null, true);
        echo ",
                    primeDate: []
                };


        ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["quest"] ?? null), "time", array()));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["quest"] ?? null), "open", array()));
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? null), "id", array()), "html", null, true);
        echo ", params));
    </script>
";
    }

    // line 240
    public function block_phone($context, array $blocks = array())
    {
        // line 241
        echo "<div>
    <div class=\"phone\">
        <i class=\"icon-phone\"></i>
        <a href=\"tel:";
        // line 244
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? null), "phone", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quest"] ?? null), "phone", array()), "html", null, true);
        echo "</a>
    </div>
</div>
";
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
        return array (  444 => 244,  439 => 241,  436 => 240,  428 => 236,  417 => 231,  413 => 230,  409 => 229,  406 => 228,  402 => 227,  399 => 226,  390 => 223,  386 => 222,  382 => 221,  378 => 220,  374 => 218,  370 => 217,  362 => 212,  358 => 211,  354 => 210,  341 => 201,  338 => 200,  327 => 192,  315 => 183,  299 => 170,  252 => 126,  235 => 112,  224 => 104,  211 => 96,  183 => 71,  171 => 64,  168 => 63,  162 => 62,  152 => 54,  150 => 53,  148 => 52,  146 => 51,  144 => 50,  142 => 49,  140 => 48,  138 => 47,  136 => 46,  134 => 45,  132 => 44,  130 => 43,  125 => 40,  118 => 38,  112 => 35,  100 => 25,  97 => 24,  92 => 21,  83 => 19,  80 => 18,  75 => 16,  69 => 13,  66 => 12,  58 => 9,  53 => 8,  50 => 7,  41 => 4,  38 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WebBundle:Default:quest.html.twig", "/var/www/oqroom/src/WebBundle/Resources/views/Default/quest.html.twig");
    }
}
