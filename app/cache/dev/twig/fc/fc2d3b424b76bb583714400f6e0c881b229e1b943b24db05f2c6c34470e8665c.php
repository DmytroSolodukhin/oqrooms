<?php

/* WebBundle:Default:quest.html.twig */
class __TwigTemplate_7828a4535caa1b372051467351b45cc5add108e4e918efc9f1ea13dc2d5b6728 extends Twig_Template
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
        $__internal_581d67861d0ffcc18303ddf0a272e774e717fb50938b84595c7949b27124d1a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_581d67861d0ffcc18303ddf0a272e774e717fb50938b84595c7949b27124d1a1->enter($__internal_581d67861d0ffcc18303ddf0a272e774e717fb50938b84595c7949b27124d1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle:Default:quest.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_581d67861d0ffcc18303ddf0a272e774e717fb50938b84595c7949b27124d1a1->leave($__internal_581d67861d0ffcc18303ddf0a272e774e717fb50938b84595c7949b27124d1a1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_558d2a313af4fba992a443396b439a758102792754fdd3a1f075cdc7ad4b7d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_558d2a313af4fba992a443396b439a758102792754fdd3a1f075cdc7ad4b7d18->enter($__internal_558d2a313af4fba992a443396b439a758102792754fdd3a1f075cdc7ad4b7d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "            <title>
                Квест комната ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "title", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "city", array()), "title", array()), "html", null, true);
        echo "
            </title>
        ";
        
        $__internal_558d2a313af4fba992a443396b439a758102792754fdd3a1f075cdc7ad4b7d18->leave($__internal_558d2a313af4fba992a443396b439a758102792754fdd3a1f075cdc7ad4b7d18_prof);

    }

    // line 7
    public function block_metateg($context, array $blocks = array())
    {
        $__internal_3c2f3035600f3544c935bb8fc63a8f345584137007b8e5003c2cb84ecb567a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c2f3035600f3544c935bb8fc63a8f345584137007b8e5003c2cb84ecb567a09->enter($__internal_3c2f3035600f3544c935bb8fc63a8f345584137007b8e5003c2cb84ecb567a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metateg"));

        // line 8
        echo "    <meta name=\"description\" content=\"occulto - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "title", array()), "html", null, true);
        echo ", игра, квест комната, секрет, логика, интеллект, головоломки, интуиция, occulto\">
    <meta name=\"keywords\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "city", array()), "title", array()), "html", null, true);
        echo ", квест, комната, квеструм, эскейпрум, ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "title", array()), "html", null, true);
        echo "\" />
";
        
        $__internal_3c2f3035600f3544c935bb8fc63a8f345584137007b8e5003c2cb84ecb567a09->leave($__internal_3c2f3035600f3544c935bb8fc63a8f345584137007b8e5003c2cb84ecb567a09_prof);

    }

    // line 12
    public function block_page_head_js($context, array $blocks = array())
    {
        $__internal_73a7d238591f0748bd77b1c81d1860ebeae79b80668641a72ca064e429ed991a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73a7d238591f0748bd77b1c81d1860ebeae79b80668641a72ca064e429ed991a->enter($__internal_73a7d238591f0748bd77b1c81d1860ebeae79b80668641a72ca064e429ed991a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_head_js"));

        // line 13
        echo "    ";
        $this->displayParentBlock("page_head_js", $context, $blocks);
        echo "

    ";
        // line 16
        echo "
";
        
        $__internal_73a7d238591f0748bd77b1c81d1860ebeae79b80668641a72ca064e429ed991a->leave($__internal_73a7d238591f0748bd77b1c81d1860ebeae79b80668641a72ca064e429ed991a_prof);

    }

    // line 18
    public function block_hed_phone($context, array $blocks = array())
    {
        $__internal_f423450c94adf62f6aa5ea491e5c3b5f5430890261359b22f30333aa6aa44012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f423450c94adf62f6aa5ea491e5c3b5f5430890261359b22f30333aa6aa44012->enter($__internal_f423450c94adf62f6aa5ea491e5c3b5f5430890261359b22f30333aa6aa44012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hed_phone"));

        // line 19
        echo "                <span><a href=\"tel: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "user", array()), "phone", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "user", array()), "phone", array()), "html", null, true);
        echo "</a></span>
            ";
        
        $__internal_f423450c94adf62f6aa5ea491e5c3b5f5430890261359b22f30333aa6aa44012->leave($__internal_f423450c94adf62f6aa5ea491e5c3b5f5430890261359b22f30333aa6aa44012_prof);

    }

    // line 21
    public function block_welcome($context, array $blocks = array())
    {
        $__internal_4777440c6dfb6ba0b88fbf1c2e2162b4c31b1ee6e2deb7ef2c1b75ecd685a968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4777440c6dfb6ba0b88fbf1c2e2162b4c31b1ee6e2deb7ef2c1b75ecd685a968->enter($__internal_4777440c6dfb6ba0b88fbf1c2e2162b4c31b1ee6e2deb7ef2c1b75ecd685a968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "welcome"));

        
        $__internal_4777440c6dfb6ba0b88fbf1c2e2162b4c31b1ee6e2deb7ef2c1b75ecd685a968->leave($__internal_4777440c6dfb6ba0b88fbf1c2e2162b4c31b1ee6e2deb7ef2c1b75ecd685a968_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_bf532d7d894fcd2516cf32a2e1d09b9789c8e09b8b3fa0973c753ad13c975d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf532d7d894fcd2516cf32a2e1d09b9789c8e09b8b3fa0973c753ad13c975d54->enter($__internal_bf532d7d894fcd2516cf32a2e1d09b9789c8e09b8b3fa0973c753ad13c975d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "<div class=\"preloader active\" id=\"preloader\">
    <div>
        <h2><b>Пожалуйста подождите</b></h2>
        <img src=\"/images/loading_normal.gif\">
    </div>
</div>
<section>
    <div class=\"index_text_block_quest row\" id=\"first\">
        <div class=\"col-sm-10 col-md-offset-1 quest_blocks\">
            <h1>
                ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "title", array()), "html", null, true);
        echo "
            </h1>
            <div class=\"col-sm-11 col-sm-offset-1\">
                <img src=\"/uploads/";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "image", array()), "html", null, true);
        echo "\" style=\"float: left; width: 300px; margin: 0 25px 25px 0\" alt=\"квест комната: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "title", array()), "html", null, true);
        echo "\">
                ";
        // line 39
        echo $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "description", array());
        echo "
            </div>
            <div class=\"col-sm-8\" style=\"text-align: left\">
                <strong><i class=\"icon-user\" style=\"color: white\"></i> : 2-";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "count", array()), "html", null, true);
        if ($this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "maxCount", array())) {
            echo "(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "maxCount", array()), "html", null, true);
            echo ")";
        }
        echo "</strong>
                </br>
                <strong>
                    Cложность :
                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 47
            echo "                        ";
            if (($context["i"] <= $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "complexity", array()))) {
                // line 48
                echo "                            <img src=\"/images/omega.png\" width=\"30px\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "title", array()), "html", null, true);
                echo " big complexity\">
                        ";
            }
            // line 50
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                </strong>
            </div>
        </div>
    </div>
</section>
<br>
<section>
    <div class=\" quest_blocks\"
         style=\"background: rgba(0,0,0, 0.7);\">
        <div class=\"phone\">
            <h1>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "city", array()), "title", array()), "html", null, true);
        if ($this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "addres", array())) {
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "addres", array()), "html", null, true);
        }
        // line 62
        echo "                <i class=\"icon-phone\"></i>
                <a href=\"tel:";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "phone", array()), "html", null, true);
        echo "\" style=\"color: white\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "phone", array()), "html", null, true);
        echo "</a>
            </h1>
        </div>
        <hr>
        <div id=\"visit_table\">
            <div id=\"mounth_visit\" class=\"row\" data-bind=\"foreach: mounthList()\">
                <div class=\"row\">
                    <div class=\"col-sm-";
        // line 70
        echo twig_escape_filter($this->env, (12 - twig_length_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "open", array()))), "html", null, true);
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
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "lat", array()), "html", null, true);
        echo ", lng: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "lng", array()), "html", null, true);
        echo " });
                var myOptions = {
                    zoom: 14,
                    center: myLatlng,
                    scaleControl: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById(\"map\"), myOptions),
                        contentString = '<h3 style=\"color: black\">";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "title", array()), "html", null, true);
        echo "</h3>',
                        infowindow = new google.maps.InfoWindow({
                            content: contentString
                        }),
                        marker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            draggable: false,
                            title: \"";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "title", array()), "html", null, true);
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
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "title", array()), "html", null, true);
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
                    <div class=\"col-lg-4\">
                        <fieldset>
                            <label for=\"description\">Количество человек:</label>
                            <br>
                            <input type=\"number\" id=\"numberUser\" value=\"4\"  maxlength=\"2\" min=\"2\" max=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "maxCount", array()), "html", null, true);
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
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "title", array()), "html", null, true);
        echo "</h1>
    <div class=\"closePopup\" data-bind=\"click: closeSuccessPopup()\">X</div>
    <hr>
    <h1>
        Поздравляю, Ваша заявка принята! Ждите звонка от нашего оператора.
    </h1>
</div>

<div id=\"errorSuccess\">
    <h1>";
        // line 187
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "title", array()), "html", null, true);
        echo "</h1>
    <div class=\"closePopup\" data-bind=\"click: closeerrorSuccess()\">X</div>
    <hr>
    <h2 data-bind=\"text: error()\">
    </h2>
</div>
";
        
        $__internal_bf532d7d894fcd2516cf32a2e1d09b9789c8e09b8b3fa0973c753ad13c975d54->leave($__internal_bf532d7d894fcd2516cf32a2e1d09b9789c8e09b8b3fa0973c753ad13c975d54_prof);

    }

    // line 195
    public function block_footer_js($context, array $blocks = array())
    {
        $__internal_cc0c32913fadd33b9740d739eed9a53209bf9fe0617807e29c2e604a28a6cdf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0c32913fadd33b9740d739eed9a53209bf9fe0617807e29c2e604a28a6cdf9->enter($__internal_cc0c32913fadd33b9740d739eed9a53209bf9fe0617807e29c2e604a28a6cdf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_js"));

        // line 196
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
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "maxCount", array()), "html", null, true);
        echo ",
                    count: ";
        // line 206
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "count", array()), "html", null, true);
        echo ",
                    pay: ";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "plusPay", array()), "html", null, true);
        echo ",
                    primeDate: []
                };


        ";
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "time", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["time_visit"]) {
            // line 213
            echo "
            time_visit.push({
                date: '";
            // line 215
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["time_visit"], "open", array()), "n_j_Y"), "html", null, true);
            echo "',
                name: '";
            // line 216
            echo twig_escape_filter($this->env, $this->getAttribute($context["time_visit"], "title", array()), "html", null, true);
            echo "',
                id_visit: '";
            // line 217
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["time_visit"], "visit", array()), "id", array()), "html", null, true);
            echo "',
                time: '";
            // line 218
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["time_visit"], "visit", array()), "title", array()), "html", null, true);
            echo "'
            });
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['time_visit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        echo "
        ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "open", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["open"]) {
            // line 223
            echo "        visit.push({
                id: ";
            // line 224
            echo twig_escape_filter($this->env, $this->getAttribute($context["open"], "id", array()), "html", null, true);
            echo ",
                title: '";
            // line 225
            echo twig_escape_filter($this->env, $this->getAttribute($context["open"], "title", array()), "html", null, true);
            echo "',
                price: ";
            // line 226
            echo twig_escape_filter($this->env, $this->getAttribute($context["open"], "price", array()), "html", null, true);
            echo "
            });


        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['open'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        echo "        ko.applyBindings(new TableVisitViewModel(time_visit, visit, ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "id", array()), "html", null, true);
        echo ", params));
    </script>
";
        
        $__internal_cc0c32913fadd33b9740d739eed9a53209bf9fe0617807e29c2e604a28a6cdf9->leave($__internal_cc0c32913fadd33b9740d739eed9a53209bf9fe0617807e29c2e604a28a6cdf9_prof);

    }

    // line 235
    public function block_phone($context, array $blocks = array())
    {
        $__internal_b954d3a170d8b659366167aa0e14e19c99ae06afd57db09b31f7c0f55146f556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b954d3a170d8b659366167aa0e14e19c99ae06afd57db09b31f7c0f55146f556->enter($__internal_b954d3a170d8b659366167aa0e14e19c99ae06afd57db09b31f7c0f55146f556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "phone"));

        // line 236
        echo "<div class=\"col-sm-4\">
    <div class=\"phone\">
        <i class=\"icon-phone\"></i>
        <a href=\"tel:";
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "user", array()), "phone", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["quest"]) ? $context["quest"] : $this->getContext($context, "quest")), "user", array()), "phone", array()), "html", null, true);
        echo "</a>
    </div>
</div>
";
        
        $__internal_b954d3a170d8b659366167aa0e14e19c99ae06afd57db09b31f7c0f55146f556->leave($__internal_b954d3a170d8b659366167aa0e14e19c99ae06afd57db09b31f7c0f55146f556_prof);

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
        return array (  502 => 239,  497 => 236,  491 => 235,  480 => 231,  469 => 226,  465 => 225,  461 => 224,  458 => 223,  454 => 222,  451 => 221,  442 => 218,  438 => 217,  434 => 216,  430 => 215,  426 => 213,  422 => 212,  414 => 207,  410 => 206,  406 => 205,  393 => 196,  387 => 195,  373 => 187,  361 => 178,  345 => 165,  302 => 125,  285 => 111,  274 => 103,  261 => 95,  233 => 70,  221 => 63,  218 => 62,  212 => 61,  200 => 51,  194 => 50,  188 => 48,  185 => 47,  181 => 46,  169 => 42,  163 => 39,  157 => 38,  151 => 35,  139 => 25,  133 => 24,  122 => 21,  110 => 19,  104 => 18,  96 => 16,  90 => 13,  84 => 12,  73 => 9,  68 => 8,  62 => 7,  50 => 4,  47 => 3,  41 => 2,  11 => 1,);
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
        <div class=\"col-sm-10 col-md-offset-1 quest_blocks\">
            <h1>
                {{ quest.title }}
            </h1>
            <div class=\"col-sm-11 col-sm-offset-1\">
                <img src=\"/uploads/{{ quest.image }}\" style=\"float: left; width: 300px; margin: 0 25px 25px 0\" alt=\"квест комната: {{ quest.title }}\">
                {{ quest.description|raw }}
            </div>
            <div class=\"col-sm-8\" style=\"text-align: left\">
                <strong><i class=\"icon-user\" style=\"color: white\"></i> : 2-{{ quest.count }}{% if quest.maxCount %}({{ quest.maxCount }}){% endif %}</strong>
                </br>
                <strong>
                    Cложность :
                    {% for i in 0..4 %}
                        {% if i <= quest.complexity %}
                            <img src=\"/images/omega.png\" width=\"30px\" alt=\"{{ quest.title }} big complexity\">
                        {% endif %}
                    {% endfor %}
                </strong>
            </div>
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
                    <div class=\"col-lg-4\">
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
<div class=\"col-sm-4\">
    <div class=\"phone\">
        <i class=\"icon-phone\"></i>
        <a href=\"tel:{{ quest.user.phone }}\">{{ quest.user.phone }}</a>
    </div>
</div>
{% endblock %}
", "WebBundle:Default:quest.html.twig", "/Users/aleksandra/myaso/oqrooms/src/WebBundle/Resources/views/Default/quest.html.twig");
    }
}
