<?php

/* WebBundle::pagelayout.html.twig */
class __TwigTemplate_abec296849817690f40d3a705bd5c6fbd5aedf0af18189393db30c0159bfb98f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metateg' => array($this, 'block_metateg'),
            'page_head_css' => array($this, 'block_page_head_css'),
            'page_head_js' => array($this, 'block_page_head_js'),
            'hed_phone' => array($this, 'block_hed_phone'),
            'topMenu' => array($this, 'block_topMenu'),
            'myCanvas' => array($this, 'block_myCanvas'),
            'welcome' => array($this, 'block_welcome'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'phone' => array($this, 'block_phone'),
            'footer_js' => array($this, 'block_footer_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f03fc0301fdf1ecb16f77a2741795b9853fbe54af0a8e6d2814ddea9ba61ccde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03fc0301fdf1ecb16f77a2741795b9853fbe54af0a8e6d2814ddea9ba61ccde->enter($__internal_f03fc0301fdf1ecb16f77a2741795b9853fbe54af0a8e6d2814ddea9ba61ccde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle::pagelayout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"yandex-verification\" content=\"ef680a1f137132cf\" />

    ";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('metateg', $context, $blocks);
        // line 21
        echo "
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    ";
        // line 24
        $this->displayBlock('page_head_css', $context, $blocks);
        // line 32
        echo "
    ";
        // line 33
        $this->displayBlock('page_head_js', $context, $blocks);
        // line 36
        echo "
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,300,600,400italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-MTWTQXP\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div class=\"navbar navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>
            <div class=\"nav-collapse pull-right\">
                <div class=\"nav navbar navbar-default navbar-fixed-top container-fluid\" role=\"navigation\">
                    <div class=\"navbar-header\">
                        <button class=\"navbar-toggle\" data-target=\".navbar-collapse\" data-toggle=\"collapse\" type=\"button\">
                            <span class=\"sr-only\">Меню</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_homepage");
        echo "\" title=\"Главная\"><img src=\"/images/logo/OQ-rooms2.png\" width=\"90px\" alt=\"квест румы occulto quest\"> </a>
                    </div>
                    <div class=\"navbar-collapse collapse navbar-link\">
                        ";
        // line 70
        $this->displayBlock('hed_phone', $context, $blocks);
        // line 75
        echo "                        ";
        $this->displayBlock('topMenu', $context, $blocks);
        // line 78
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 85
        $this->displayBlock('myCanvas', $context, $blocks);
        // line 88
        echo "

";
        // line 90
        $this->displayBlock('welcome', $context, $blocks);
        // line 97
        echo "
<main>
";
        // line 99
        $this->displayBlock('content', $context, $blocks);
        // line 110
        echo "</main>


";
        // line 113
        $this->displayBlock('footer', $context, $blocks);
        // line 192
        echo "    </body>
</html>
";
        
        $__internal_f03fc0301fdf1ecb16f77a2741795b9853fbe54af0a8e6d2814ddea9ba61ccde->leave($__internal_f03fc0301fdf1ecb16f77a2741795b9853fbe54af0a8e6d2814ddea9ba61ccde_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f9d9f2629f298ed4f0b1946ebc2820a2c401cc4620569a8dfb290f84bf1b196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f9d9f2629f298ed4f0b1946ebc2820a2c401cc4620569a8dfb290f84bf1b196->enter($__internal_3f9d9f2629f298ed4f0b1946ebc2820a2c401cc4620569a8dfb290f84bf1b196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 12
        echo "        <title>
            Oculto
        </title>
    ";
        
        $__internal_3f9d9f2629f298ed4f0b1946ebc2820a2c401cc4620569a8dfb290f84bf1b196->leave($__internal_3f9d9f2629f298ed4f0b1946ebc2820a2c401cc4620569a8dfb290f84bf1b196_prof);

    }

    // line 17
    public function block_metateg($context, array $blocks = array())
    {
        $__internal_7019cd1539d16af895619c32f20fc1134760b839063a9b359b78ecd60ff3b71a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7019cd1539d16af895619c32f20fc1134760b839063a9b359b78ecd60ff3b71a->enter($__internal_7019cd1539d16af895619c32f20fc1134760b839063a9b359b78ecd60ff3b71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metateg"));

        // line 18
        echo "        <meta name=\"description\" content=\"\">
        <meta name=\"keywords\" content=\"\" />
    ";
        
        $__internal_7019cd1539d16af895619c32f20fc1134760b839063a9b359b78ecd60ff3b71a->leave($__internal_7019cd1539d16af895619c32f20fc1134760b839063a9b359b78ecd60ff3b71a_prof);

    }

    // line 24
    public function block_page_head_css($context, array $blocks = array())
    {
        $__internal_bc3d1e31494bd11d912774d98617a9c9af06d430fa2e30080ae3fbd2d6be3a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc3d1e31494bd11d912774d98617a9c9af06d430fa2e30080ae3fbd2d6be3a91->enter($__internal_bc3d1e31494bd11d912774d98617a9c9af06d430fa2e30080ae3fbd2d6be3a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_head_css"));

        // line 25
        echo "        <link href=\"/css/bootstrap.css\" rel=\"stylesheet\">
        <link href=\"/css/main.css\" rel=\"stylesheet\">
        <link href=\"/css/slidup.css\" rel=\"stylesheet\">
        <link href=\"/css/font-awesome.min.css\" rel=\"stylesheet\">
        <script src=\"/js/respond.min.js\"></script>

    ";
        
        $__internal_bc3d1e31494bd11d912774d98617a9c9af06d430fa2e30080ae3fbd2d6be3a91->leave($__internal_bc3d1e31494bd11d912774d98617a9c9af06d430fa2e30080ae3fbd2d6be3a91_prof);

    }

    // line 33
    public function block_page_head_js($context, array $blocks = array())
    {
        $__internal_2de005e809319fcbaa977e82ac387c4f0344752e78652aef21771968d77d1e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de005e809319fcbaa977e82ac387c4f0344752e78652aef21771968d77d1e43->enter($__internal_2de005e809319fcbaa977e82ac387c4f0344752e78652aef21771968d77d1e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_head_js"));

        // line 34
        echo "
    ";
        
        $__internal_2de005e809319fcbaa977e82ac387c4f0344752e78652aef21771968d77d1e43->leave($__internal_2de005e809319fcbaa977e82ac387c4f0344752e78652aef21771968d77d1e43_prof);

    }

    // line 70
    public function block_hed_phone($context, array $blocks = array())
    {
        $__internal_f6863d83f9d278c4a9219e840c9e4c3a32c522401cf8c42a7b3cbb73a38fa351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6863d83f9d278c4a9219e840c9e4c3a32c522401cf8c42a7b3cbb73a38fa351->enter($__internal_f6863d83f9d278c4a9219e840c9e4c3a32c522401cf8c42a7b3cbb73a38fa351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hed_phone"));

        // line 71
        echo "                            <span>
                                <a href=\"tel:+380503883688\" title=\"телефон\">+38(050)388-36-88</a>
                            </span>
                        ";
        
        $__internal_f6863d83f9d278c4a9219e840c9e4c3a32c522401cf8c42a7b3cbb73a38fa351->leave($__internal_f6863d83f9d278c4a9219e840c9e4c3a32c522401cf8c42a7b3cbb73a38fa351_prof);

    }

    // line 75
    public function block_topMenu($context, array $blocks = array())
    {
        $__internal_cb2ebcf5a15a846cf6d8ffeb2e360dde34eb1705eb05a361bdd21fc0015995d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb2ebcf5a15a846cf6d8ffeb2e360dde34eb1705eb05a361bdd21fc0015995d7->enter($__internal_cb2ebcf5a15a846cf6d8ffeb2e360dde34eb1705eb05a361bdd21fc0015995d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topMenu"));

        // line 76
        echo "                            ";
        $this->loadTemplate("WebBundle::menu.html.twig", "WebBundle::pagelayout.html.twig", 76)->display($context);
        // line 77
        echo "                        ";
        
        $__internal_cb2ebcf5a15a846cf6d8ffeb2e360dde34eb1705eb05a361bdd21fc0015995d7->leave($__internal_cb2ebcf5a15a846cf6d8ffeb2e360dde34eb1705eb05a361bdd21fc0015995d7_prof);

    }

    // line 85
    public function block_myCanvas($context, array $blocks = array())
    {
        $__internal_246d849cb84f5f6d9534eb95041f22e7dfb9dcca5ef5753fe37de3b2274627a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_246d849cb84f5f6d9534eb95041f22e7dfb9dcca5ef5753fe37de3b2274627a4->enter($__internal_246d849cb84f5f6d9534eb95041f22e7dfb9dcca5ef5753fe37de3b2274627a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myCanvas"));

        // line 86
        echo "    <canvas id=\"myCanvas\" height=\"400\"  style=\"background: rgba(0, 0, 0, 0) url('/images/background.jpg') repeat fixed 55% 32%\"></canvas>
";
        
        $__internal_246d849cb84f5f6d9534eb95041f22e7dfb9dcca5ef5753fe37de3b2274627a4->leave($__internal_246d849cb84f5f6d9534eb95041f22e7dfb9dcca5ef5753fe37de3b2274627a4_prof);

    }

    // line 90
    public function block_welcome($context, array $blocks = array())
    {
        $__internal_2b8a5031bb5c9db3a6c467dc355f69688bfc6abc4d8e5f90605f76318ab23bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b8a5031bb5c9db3a6c467dc355f69688bfc6abc4d8e5f90605f76318ab23bc2->enter($__internal_2b8a5031bb5c9db3a6c467dc355f69688bfc6abc4d8e5f90605f76318ab23bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "welcome"));

        // line 91
        echo "    <div class=\"parallax\" style=\"background: black\">
        <img class=\"logop\" src=\"/images/logo/OQ-rooms-hq.png\" alt=\"квест комнаты occulto quest\">
        <h1 class=\"intro-text text-center\">Квесты в реальности!</h1>

    </div>
";
        
        $__internal_2b8a5031bb5c9db3a6c467dc355f69688bfc6abc4d8e5f90605f76318ab23bc2->leave($__internal_2b8a5031bb5c9db3a6c467dc355f69688bfc6abc4d8e5f90605f76318ab23bc2_prof);

    }

    // line 99
    public function block_content($context, array $blocks = array())
    {
        $__internal_596cbaf4a83f05df458e186f3ef7d24114698af303a4419d45db2d694b1065eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596cbaf4a83f05df458e186f3ef7d24114698af303a4419d45db2d694b1065eb->enter($__internal_596cbaf4a83f05df458e186f3ef7d24114698af303a4419d45db2d694b1065eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 100
        echo "        <div class=\"jumbotron\">
            <div class=\"container\">
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
            </div>
        </div>
";
        
        $__internal_596cbaf4a83f05df458e186f3ef7d24114698af303a4419d45db2d694b1065eb->leave($__internal_596cbaf4a83f05df458e186f3ef7d24114698af303a4419d45db2d694b1065eb_prof);

    }

    // line 113
    public function block_footer($context, array $blocks = array())
    {
        $__internal_294ece400924133436e9935e141eeb39a17ecce4c5759314c581e5ef2ebb5f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_294ece400924133436e9935e141eeb39a17ecce4c5759314c581e5ef2ebb5f48->enter($__internal_294ece400924133436e9935e141eeb39a17ecce4c5759314c581e5ef2ebb5f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 114
        echo "    <div class=\"second_block\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 phone\">
            ";
        // line 117
        $this->displayBlock('phone', $context, $blocks);
        // line 126
        echo "            ";
        // line 127
        echo "                <div class=\"email\">
                    <a href=\"mailto:oqrooms@gmail.com\" title=\"почта\">
                        <i class=\"icon-envelope\"></i> oqrooms@gmail.com
                    </a>
                </div>
            ";
        // line 133
        echo "            ";
        // line 134
        echo "
            </div>
            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center\">

                <div class=\"textwidget\">
                    <a href=\"http://odessa.mir-kvestov.com.ua/quests/6226\" target=\"_blank\">
                        <img src=\"http://odessa.mir-kvestov.com.ua/widgets/2250/img\" alt=\"Отзывы на Квест в реальности Мясник (OQRooms)\" title=\"Отзывы на Квест в реальности Мясник (OQRooms)\" width=\"210\">
                    </a>
                </div>
            </div>
                    <div class=\"hidden-xs col-sm-4 col-md-4 col-lg-4\">
                    <div id=\"TA_cdsratingsonlynarrow756\" class=\"TA_cdsratingsonlynarrow pull-right\">
                        <div id=\"CDSRATINGWIDGET756\" class=\"cdsROW white  shadow   border   narrow \">
                            <div id=\"CDSROWCONTAINER756\" class=\"cdsROWContainer\">
                                <div id=\"CDSROWLOC756\" class=\"cdsComponent cdsLocName\">
                                    <a id=\"CDSLOCINNER\" target=\"_blank\" href=\"https://www.tripadvisor.ru/Attraction_Review-g295368-d12154358-Reviews-OQRoomS-Odessa_Odessa_Oblast.html\" onclick=\"ta.cds.handleTALink(\$cdsConfig.getMcid()); return true;\" rel=\"nofollow\">OQRoomS</a>
                                </div> <div id=\"CDSROWRATING756\" class=\"cdsComponent cdsRating\"> <span class=\"ui_bubble_rating bubble_0\"></span>
                                    <br> <span> 0 отзывов </span> </div> <div id=\"CDSROWLOGO756\" class=\"cdsComponent logo\">
                                    <a target=\"_blank\" href=\"https://www.tripadvisor.ru/\"><img src=\"https://www.tripadvisor.ru/img/cdsi/img2/branding/tripadvisor_logo_transp_340x80-18034-2.png\" alt=\"TripAdvisor\"></a>
                                </div> </div> </div>  </div>
                    <script src=\"https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;uniq=756&amp;locationId=12154358&amp;lang=ru&amp;border=true&amp;shadow=true&amp;display_version=2\">
                    </script><script src=\"https://www.tripadvisor.ru/WidgetEmbed-cdsratingsonlynarrow?border=true&amp;shadow=true&amp;locationId=12154358&amp;display_version=2&amp;uniq=756&amp;lang=ru\"></script></div>

        </div>
    </div>
    <footer>
        <div class=\"copyright-block dark-bg clearfix\">
            <div class=\"container\">
                <div class=\"row\">
                <div class=\"text-left col-xs-12 col-sm-9 col-md-9 col-lg-9 responsive-center\">
                    <p>Copyright &copy; 2016 by <a href=\"mailto:dmitreysergeevich86@gmail.com\">DSolo</a>. All Rights Reserved</p>
                </div>

                    <div class=\"sotial col-xs-12 col-sm-3 col-md-3 col-lg-3\">
                        <a target=\"_blank\" title=\"facebook\"
                           href=\"https://www.facebook.com/oqrooms.odessa\">
                            <i class=\"icon-facebook sotialI\"></i>
                        </a>
                        <a target=\"_blank\" title=\"vk\" href=\"https://www.vk.com/oqrooms\">
                            <i class=\"icon-vk sotialI\"></i>
                        </a>
                        <a href=\"https://www.instagram.com/oqrooms\" title=\"instagram\" target=\"_blank\">
                            <i class=\"icon-instagram sotialI\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"/js/jquery.min.js\"><\\/script>')</script>
    ";
        // line 185
        $this->displayBlock('footer_js', $context, $blocks);
        
        $__internal_294ece400924133436e9935e141eeb39a17ecce4c5759314c581e5ef2ebb5f48->leave($__internal_294ece400924133436e9935e141eeb39a17ecce4c5759314c581e5ef2ebb5f48_prof);

    }

    // line 117
    public function block_phone($context, array $blocks = array())
    {
        $__internal_39f761fcd75a9e3b0f4e45c65e8508d45db447eab56116b9b7022c99ff995aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f761fcd75a9e3b0f4e45c65e8508d45db447eab56116b9b7022c99ff995aa5->enter($__internal_39f761fcd75a9e3b0f4e45c65e8508d45db447eab56116b9b7022c99ff995aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "phone"));

        // line 118
        echo "                <div class=\"phone\">
                    <a href=\"tel:+380503883688\" title=\"телефон\">
                        <i class=\"icon-phone\"></i>
                        +38(050)388-36-88
                    </a>
                </div>
            ";
        // line 125
        echo "            ";
        
        $__internal_39f761fcd75a9e3b0f4e45c65e8508d45db447eab56116b9b7022c99ff995aa5->leave($__internal_39f761fcd75a9e3b0f4e45c65e8508d45db447eab56116b9b7022c99ff995aa5_prof);

    }

    // line 185
    public function block_footer_js($context, array $blocks = array())
    {
        $__internal_00ffe077dc6230c0c9663974d067a90708d9e8c7a69874c619b13462fe68d0b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ffe077dc6230c0c9663974d067a90708d9e8c7a69874c619b13462fe68d0b9->enter($__internal_00ffe077dc6230c0c9663974d067a90708d9e8c7a69874c619b13462fe68d0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_js"));

        // line 186
        echo "        <script src=\"/js/bootstrap.min.js\"></script>
        <script src=\"/js/plugins.js\"></script>
        <script src=\"/js/jquery.colorbox-min.js\"></script>
        <script src=\"/js/main.js\"></script>
    ";
        
        $__internal_00ffe077dc6230c0c9663974d067a90708d9e8c7a69874c619b13462fe68d0b9->leave($__internal_00ffe077dc6230c0c9663974d067a90708d9e8c7a69874c619b13462fe68d0b9_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle::pagelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 186,  403 => 185,  396 => 125,  388 => 118,  382 => 117,  375 => 185,  322 => 134,  320 => 133,  313 => 127,  311 => 126,  309 => 117,  304 => 114,  298 => 113,  282 => 100,  276 => 99,  264 => 91,  258 => 90,  250 => 86,  244 => 85,  237 => 77,  234 => 76,  228 => 75,  218 => 71,  212 => 70,  204 => 34,  198 => 33,  185 => 25,  179 => 24,  170 => 18,  164 => 17,  154 => 12,  148 => 11,  139 => 192,  137 => 113,  132 => 110,  130 => 99,  126 => 97,  124 => 90,  120 => 88,  118 => 85,  109 => 78,  106 => 75,  104 => 70,  98 => 67,  65 => 36,  63 => 33,  60 => 32,  58 => 24,  53 => 21,  51 => 17,  48 => 16,  46 => 11,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"yandex-verification\" content=\"ef680a1f137132cf\" />

    {% block title %}
        <title>
            Oculto
        </title>
    {% endblock %}

    {% block metateg %}
        <meta name=\"description\" content=\"\">
        <meta name=\"keywords\" content=\"\" />
    {% endblock %}

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    {% block page_head_css %}
        <link href=\"/css/bootstrap.css\" rel=\"stylesheet\">
        <link href=\"/css/main.css\" rel=\"stylesheet\">
        <link href=\"/css/slidup.css\" rel=\"stylesheet\">
        <link href=\"/css/font-awesome.min.css\" rel=\"stylesheet\">
        <script src=\"/js/respond.min.js\"></script>

    {% endblock %}

    {% block page_head_js %}

    {% endblock %}

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,300,600,400italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-MTWTQXP\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div class=\"navbar navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>
            <div class=\"nav-collapse pull-right\">
                <div class=\"nav navbar navbar-default navbar-fixed-top container-fluid\" role=\"navigation\">
                    <div class=\"navbar-header\">
                        <button class=\"navbar-toggle\" data-target=\".navbar-collapse\" data-toggle=\"collapse\" type=\"button\">
                            <span class=\"sr-only\">Меню</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a href=\"{{ path('web_homepage') }}\" title=\"Главная\"><img src=\"/images/logo/OQ-rooms2.png\" width=\"90px\" alt=\"квест румы occulto quest\"> </a>
                    </div>
                    <div class=\"navbar-collapse collapse navbar-link\">
                        {% block hed_phone %}
                            <span>
                                <a href=\"tel:+380503883688\" title=\"телефон\">+38(050)388-36-88</a>
                            </span>
                        {% endblock %}
                        {% block topMenu %}
                            {% include 'WebBundle::menu.html.twig' %}
                        {% endblock %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% block myCanvas %}
    <canvas id=\"myCanvas\" height=\"400\"  style=\"background: rgba(0, 0, 0, 0) url('/images/background.jpg') repeat fixed 55% 32%\"></canvas>
{% endblock %}


{% block welcome %}
    <div class=\"parallax\" style=\"background: black\">
        <img class=\"logop\" src=\"/images/logo/OQ-rooms-hq.png\" alt=\"квест комнаты occulto quest\">
        <h1 class=\"intro-text text-center\">Квесты в реальности!</h1>

    </div>
{% endblock %}

<main>
{% block content %}
        <div class=\"jumbotron\">
            <div class=\"container\">
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
            </div>
        </div>
{% endblock %}
</main>


{% block footer %}
    <div class=\"second_block\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 phone\">
            {% block phone %}
                <div class=\"phone\">
                    <a href=\"tel:+380503883688\" title=\"телефон\">
                        <i class=\"icon-phone\"></i>
                        +38(050)388-36-88
                    </a>
                </div>
            {#</div>#}
            {% endblock %}
            {#<div class=\"col-xs-4 col-sm-4\">#}
                <div class=\"email\">
                    <a href=\"mailto:oqrooms@gmail.com\" title=\"почта\">
                        <i class=\"icon-envelope\"></i> oqrooms@gmail.com
                    </a>
                </div>
            {#</div>#}
            {#<div class=\"col-xs-4 col-sm-4\">#}

            </div>
            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center\">

                <div class=\"textwidget\">
                    <a href=\"http://odessa.mir-kvestov.com.ua/quests/6226\" target=\"_blank\">
                        <img src=\"http://odessa.mir-kvestov.com.ua/widgets/2250/img\" alt=\"Отзывы на Квест в реальности Мясник (OQRooms)\" title=\"Отзывы на Квест в реальности Мясник (OQRooms)\" width=\"210\">
                    </a>
                </div>
            </div>
                    <div class=\"hidden-xs col-sm-4 col-md-4 col-lg-4\">
                    <div id=\"TA_cdsratingsonlynarrow756\" class=\"TA_cdsratingsonlynarrow pull-right\">
                        <div id=\"CDSRATINGWIDGET756\" class=\"cdsROW white  shadow   border   narrow \">
                            <div id=\"CDSROWCONTAINER756\" class=\"cdsROWContainer\">
                                <div id=\"CDSROWLOC756\" class=\"cdsComponent cdsLocName\">
                                    <a id=\"CDSLOCINNER\" target=\"_blank\" href=\"https://www.tripadvisor.ru/Attraction_Review-g295368-d12154358-Reviews-OQRoomS-Odessa_Odessa_Oblast.html\" onclick=\"ta.cds.handleTALink(\$cdsConfig.getMcid()); return true;\" rel=\"nofollow\">OQRoomS</a>
                                </div> <div id=\"CDSROWRATING756\" class=\"cdsComponent cdsRating\"> <span class=\"ui_bubble_rating bubble_0\"></span>
                                    <br> <span> 0 отзывов </span> </div> <div id=\"CDSROWLOGO756\" class=\"cdsComponent logo\">
                                    <a target=\"_blank\" href=\"https://www.tripadvisor.ru/\"><img src=\"https://www.tripadvisor.ru/img/cdsi/img2/branding/tripadvisor_logo_transp_340x80-18034-2.png\" alt=\"TripAdvisor\"></a>
                                </div> </div> </div>  </div>
                    <script src=\"https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;uniq=756&amp;locationId=12154358&amp;lang=ru&amp;border=true&amp;shadow=true&amp;display_version=2\">
                    </script><script src=\"https://www.tripadvisor.ru/WidgetEmbed-cdsratingsonlynarrow?border=true&amp;shadow=true&amp;locationId=12154358&amp;display_version=2&amp;uniq=756&amp;lang=ru\"></script></div>

        </div>
    </div>
    <footer>
        <div class=\"copyright-block dark-bg clearfix\">
            <div class=\"container\">
                <div class=\"row\">
                <div class=\"text-left col-xs-12 col-sm-9 col-md-9 col-lg-9 responsive-center\">
                    <p>Copyright &copy; 2016 by <a href=\"mailto:dmitreysergeevich86@gmail.com\">DSolo</a>. All Rights Reserved</p>
                </div>

                    <div class=\"sotial col-xs-12 col-sm-3 col-md-3 col-lg-3\">
                        <a target=\"_blank\" title=\"facebook\"
                           href=\"https://www.facebook.com/oqrooms.odessa\">
                            <i class=\"icon-facebook sotialI\"></i>
                        </a>
                        <a target=\"_blank\" title=\"vk\" href=\"https://www.vk.com/oqrooms\">
                            <i class=\"icon-vk sotialI\"></i>
                        </a>
                        <a href=\"https://www.instagram.com/oqrooms\" title=\"instagram\" target=\"_blank\">
                            <i class=\"icon-instagram sotialI\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"/js/jquery.min.js\"><\\/script>')</script>
    {% block footer_js %}
        <script src=\"/js/bootstrap.min.js\"></script>
        <script src=\"/js/plugins.js\"></script>
        <script src=\"/js/jquery.colorbox-min.js\"></script>
        <script src=\"/js/main.js\"></script>
    {% endblock %}
{% endblock %}
    </body>
</html>
", "WebBundle::pagelayout.html.twig", "/var/www/oqroom/src/WebBundle/Resources/views/pagelayout.html.twig");
    }
}
