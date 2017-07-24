<?php

/* WebBundle::pagelayout.html.twig */
class __TwigTemplate_f5e1c5d3a2ccc38e52260cd9d254165d71bc7837d36fbeed913e74a6e79b96d1 extends Twig_Template
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
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "        <title>
            Oculto
        </title>
    ";
    }

    // line 17
    public function block_metateg($context, array $blocks = array())
    {
        // line 18
        echo "        <meta name=\"description\" content=\"\">
        <meta name=\"keywords\" content=\"\" />
    ";
    }

    // line 24
    public function block_page_head_css($context, array $blocks = array())
    {
        // line 25
        echo "        <link href=\"/css/bootstrap.css\" rel=\"stylesheet\">
        <link href=\"/css/main.css\" rel=\"stylesheet\">
        <link href=\"/css/slidup.css\" rel=\"stylesheet\">
        <link href=\"/css/font-awesome.min.css\" rel=\"stylesheet\">
        <script src=\"/js/respond.min.js\"></script>

    ";
    }

    // line 33
    public function block_page_head_js($context, array $blocks = array())
    {
        // line 34
        echo "
    ";
    }

    // line 70
    public function block_hed_phone($context, array $blocks = array())
    {
        // line 71
        echo "                            <span>
                                <a href=\"tel:+380503883688\" title=\"телефон\">+38(050)388-36-88</a>
                            </span>
                        ";
    }

    // line 75
    public function block_topMenu($context, array $blocks = array())
    {
        // line 76
        echo "                            ";
        $this->loadTemplate("WebBundle::menu.html.twig", "WebBundle::pagelayout.html.twig", 76)->display($context);
        // line 77
        echo "                        ";
    }

    // line 85
    public function block_myCanvas($context, array $blocks = array())
    {
        // line 86
        echo "    <canvas id=\"myCanvas\" height=\"400\"  style=\"background: rgba(0, 0, 0, 0) url('/images/background.jpg') repeat fixed 55% 32%\"></canvas>
";
    }

    // line 90
    public function block_welcome($context, array $blocks = array())
    {
        // line 91
        echo "    <div class=\"parallax\" style=\"background: black\">
        <img class=\"logop\" src=\"/images/logo/OQ-rooms-hq.png\" alt=\"квест комнаты occulto quest\">
        <h1 class=\"intro-text text-center\">Квесты в реальности!</h1>

    </div>
";
    }

    // line 99
    public function block_content($context, array $blocks = array())
    {
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
    }

    // line 113
    public function block_footer($context, array $blocks = array())
    {
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
    }

    // line 117
    public function block_phone($context, array $blocks = array())
    {
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
    }

    // line 185
    public function block_footer_js($context, array $blocks = array())
    {
        // line 186
        echo "        <script src=\"/js/bootstrap.min.js\"></script>
        <script src=\"/js/plugins.js\"></script>
        <script src=\"/js/jquery.colorbox-min.js\"></script>
        <script src=\"/js/main.js\"></script>
    ";
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
        return array (  334 => 186,  331 => 185,  327 => 125,  319 => 118,  316 => 117,  312 => 185,  259 => 134,  257 => 133,  250 => 127,  248 => 126,  246 => 117,  241 => 114,  238 => 113,  225 => 100,  222 => 99,  213 => 91,  210 => 90,  205 => 86,  202 => 85,  198 => 77,  195 => 76,  192 => 75,  185 => 71,  182 => 70,  177 => 34,  174 => 33,  164 => 25,  161 => 24,  155 => 18,  152 => 17,  145 => 12,  142 => 11,  136 => 192,  134 => 113,  129 => 110,  127 => 99,  123 => 97,  121 => 90,  117 => 88,  115 => 85,  106 => 78,  103 => 75,  101 => 70,  95 => 67,  62 => 36,  60 => 33,  57 => 32,  55 => 24,  50 => 21,  48 => 17,  45 => 16,  43 => 11,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WebBundle::pagelayout.html.twig", "/var/www/oqroom/src/WebBundle/Resources/views/pagelayout.html.twig");
    }
}
