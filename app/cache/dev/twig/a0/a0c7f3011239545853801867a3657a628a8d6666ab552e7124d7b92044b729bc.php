<?php

/* WebBundle::pagelayout.html.twig */
class __TwigTemplate_0046ad4834fc6e918d3e724fb1dac28e5bcfdbe3cf4aae16947ab214bc08a973 extends Twig_Template
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
        $__internal_d00baaadb76e28ec8b11082a28fb2c437326fec406adc629b261d0be089ebf6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00baaadb76e28ec8b11082a28fb2c437326fec406adc629b261d0be089ebf6e->enter($__internal_d00baaadb76e28ec8b11082a28fb2c437326fec406adc629b261d0be089ebf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle::pagelayout.html.twig"));

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
        
        $__internal_d00baaadb76e28ec8b11082a28fb2c437326fec406adc629b261d0be089ebf6e->leave($__internal_d00baaadb76e28ec8b11082a28fb2c437326fec406adc629b261d0be089ebf6e_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_741e727befb1c98a2bb92ca13f10267dab317b2badcd896360b019480df0755c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_741e727befb1c98a2bb92ca13f10267dab317b2badcd896360b019480df0755c->enter($__internal_741e727befb1c98a2bb92ca13f10267dab317b2badcd896360b019480df0755c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 12
        echo "        <title>
            Oculto
        </title>
    ";
        
        $__internal_741e727befb1c98a2bb92ca13f10267dab317b2badcd896360b019480df0755c->leave($__internal_741e727befb1c98a2bb92ca13f10267dab317b2badcd896360b019480df0755c_prof);

    }

    // line 17
    public function block_metateg($context, array $blocks = array())
    {
        $__internal_c9160177c2ef12938bfa0d3fa4b4a9d493f15a3002ff2a50752cb0a6a0977583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9160177c2ef12938bfa0d3fa4b4a9d493f15a3002ff2a50752cb0a6a0977583->enter($__internal_c9160177c2ef12938bfa0d3fa4b4a9d493f15a3002ff2a50752cb0a6a0977583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metateg"));

        // line 18
        echo "        <meta name=\"description\" content=\"\">
        <meta name=\"keywords\" content=\"\" />
    ";
        
        $__internal_c9160177c2ef12938bfa0d3fa4b4a9d493f15a3002ff2a50752cb0a6a0977583->leave($__internal_c9160177c2ef12938bfa0d3fa4b4a9d493f15a3002ff2a50752cb0a6a0977583_prof);

    }

    // line 24
    public function block_page_head_css($context, array $blocks = array())
    {
        $__internal_0af8c4db7650acf9aec51b50362177c3dc4e380f8e6f5d9afd864bd94280a3f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af8c4db7650acf9aec51b50362177c3dc4e380f8e6f5d9afd864bd94280a3f4->enter($__internal_0af8c4db7650acf9aec51b50362177c3dc4e380f8e6f5d9afd864bd94280a3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_head_css"));

        // line 25
        echo "        <link href=\"/css/bootstrap.css\" rel=\"stylesheet\">
        <link href=\"/css/main.css\" rel=\"stylesheet\">
        <link href=\"/css/slidup.css\" rel=\"stylesheet\">
        <link href=\"/css/font-awesome.min.css\" rel=\"stylesheet\">
        <script src=\"/js/respond.min.js\"></script>

    ";
        
        $__internal_0af8c4db7650acf9aec51b50362177c3dc4e380f8e6f5d9afd864bd94280a3f4->leave($__internal_0af8c4db7650acf9aec51b50362177c3dc4e380f8e6f5d9afd864bd94280a3f4_prof);

    }

    // line 33
    public function block_page_head_js($context, array $blocks = array())
    {
        $__internal_32264f88b1f13c27bd2731a2f884ca1576b5f5c3e8f39e1de9baf0c4b7445f69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32264f88b1f13c27bd2731a2f884ca1576b5f5c3e8f39e1de9baf0c4b7445f69->enter($__internal_32264f88b1f13c27bd2731a2f884ca1576b5f5c3e8f39e1de9baf0c4b7445f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_head_js"));

        // line 34
        echo "
    ";
        
        $__internal_32264f88b1f13c27bd2731a2f884ca1576b5f5c3e8f39e1de9baf0c4b7445f69->leave($__internal_32264f88b1f13c27bd2731a2f884ca1576b5f5c3e8f39e1de9baf0c4b7445f69_prof);

    }

    // line 70
    public function block_hed_phone($context, array $blocks = array())
    {
        $__internal_fb9640f7b873e07713f1135062eb5895e60a63acb177734de443f0622561fa9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb9640f7b873e07713f1135062eb5895e60a63acb177734de443f0622561fa9e->enter($__internal_fb9640f7b873e07713f1135062eb5895e60a63acb177734de443f0622561fa9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hed_phone"));

        // line 71
        echo "                            <span>
                                <a href=\"tel:+380503883688\" title=\"телефон\">+38(050)388-36-88</a>
                            </span>
                        ";
        
        $__internal_fb9640f7b873e07713f1135062eb5895e60a63acb177734de443f0622561fa9e->leave($__internal_fb9640f7b873e07713f1135062eb5895e60a63acb177734de443f0622561fa9e_prof);

    }

    // line 75
    public function block_topMenu($context, array $blocks = array())
    {
        $__internal_1715aa66ef01150a777e4f20e683ef567d944a870d5dab74146f058061afb325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1715aa66ef01150a777e4f20e683ef567d944a870d5dab74146f058061afb325->enter($__internal_1715aa66ef01150a777e4f20e683ef567d944a870d5dab74146f058061afb325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topMenu"));

        // line 76
        echo "                            ";
        $this->loadTemplate("WebBundle::menu.html.twig", "WebBundle::pagelayout.html.twig", 76)->display($context);
        // line 77
        echo "                        ";
        
        $__internal_1715aa66ef01150a777e4f20e683ef567d944a870d5dab74146f058061afb325->leave($__internal_1715aa66ef01150a777e4f20e683ef567d944a870d5dab74146f058061afb325_prof);

    }

    // line 85
    public function block_myCanvas($context, array $blocks = array())
    {
        $__internal_76af9a0fcd567f521c73e33e6d483e21de91102c3c3b8dfe565fa613e44b5ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76af9a0fcd567f521c73e33e6d483e21de91102c3c3b8dfe565fa613e44b5ccc->enter($__internal_76af9a0fcd567f521c73e33e6d483e21de91102c3c3b8dfe565fa613e44b5ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myCanvas"));

        // line 86
        echo "    <canvas id=\"myCanvas\" height=\"400\"  style=\"background: rgba(0, 0, 0, 0) url('/images/background.jpg') repeat fixed 55% 32%\"></canvas>
";
        
        $__internal_76af9a0fcd567f521c73e33e6d483e21de91102c3c3b8dfe565fa613e44b5ccc->leave($__internal_76af9a0fcd567f521c73e33e6d483e21de91102c3c3b8dfe565fa613e44b5ccc_prof);

    }

    // line 90
    public function block_welcome($context, array $blocks = array())
    {
        $__internal_46ce16e876f631da247ddb27af545953ef429a92f2523c91fbbe4a015fd7bf5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ce16e876f631da247ddb27af545953ef429a92f2523c91fbbe4a015fd7bf5b->enter($__internal_46ce16e876f631da247ddb27af545953ef429a92f2523c91fbbe4a015fd7bf5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "welcome"));

        // line 91
        echo "    <div class=\"parallax\" style=\"background: black\">
        <img class=\"logop\" src=\"/images/logo/OQ-rooms-hq.png\" alt=\"квест комнаты occulto quest\">
        <h1 class=\"intro-text text-center\">Квесты в реальности!</h1>

    </div>
";
        
        $__internal_46ce16e876f631da247ddb27af545953ef429a92f2523c91fbbe4a015fd7bf5b->leave($__internal_46ce16e876f631da247ddb27af545953ef429a92f2523c91fbbe4a015fd7bf5b_prof);

    }

    // line 99
    public function block_content($context, array $blocks = array())
    {
        $__internal_999ac726969dba0e5e5f3ab5ce6264e72317cdf5e4cf414bf1c105dc555bc602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_999ac726969dba0e5e5f3ab5ce6264e72317cdf5e4cf414bf1c105dc555bc602->enter($__internal_999ac726969dba0e5e5f3ab5ce6264e72317cdf5e4cf414bf1c105dc555bc602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_999ac726969dba0e5e5f3ab5ce6264e72317cdf5e4cf414bf1c105dc555bc602->leave($__internal_999ac726969dba0e5e5f3ab5ce6264e72317cdf5e4cf414bf1c105dc555bc602_prof);

    }

    // line 113
    public function block_footer($context, array $blocks = array())
    {
        $__internal_121ae9f4a3420db65f55cb68fcc4652e23dc4b4f7d403b2b12e23e46d48fbfb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121ae9f4a3420db65f55cb68fcc4652e23dc4b4f7d403b2b12e23e46d48fbfb0->enter($__internal_121ae9f4a3420db65f55cb68fcc4652e23dc4b4f7d403b2b12e23e46d48fbfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 114
        echo "    <div class=\"second_block\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 phone\">
            ";
        // line 117
        $this->displayBlock('phone', $context, $blocks);
        // line 127
        echo "            ";
        // line 128
        echo "                <div class=\"email\">
                    <a href=\"mailto:oqrooms@gmail.com\" title=\"почта\">
                        <i class=\"icon-envelope\"></i> oqrooms@gmail.com
                    </a>
                </div>
            ";
        // line 134
        echo "            ";
        // line 135
        echo "
            </div>
            <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center\">

                <div class=\"textwidget\"><a href=\"http://odessa.mir-kvestov.com.ua/quests/6226\" target=\"_blank\">
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
        
        $__internal_121ae9f4a3420db65f55cb68fcc4652e23dc4b4f7d403b2b12e23e46d48fbfb0->leave($__internal_121ae9f4a3420db65f55cb68fcc4652e23dc4b4f7d403b2b12e23e46d48fbfb0_prof);

    }

    // line 117
    public function block_phone($context, array $blocks = array())
    {
        $__internal_fa561fadcb8906ca6d92bec9b5031318c7a7efb98267554720f85df4cdaf2bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa561fadcb8906ca6d92bec9b5031318c7a7efb98267554720f85df4cdaf2bf5->enter($__internal_fa561fadcb8906ca6d92bec9b5031318c7a7efb98267554720f85df4cdaf2bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "phone"));

        // line 118
        echo "
                <div class=\"phone\">
                    <a href=\"tel:+380503883688\" title=\"телефон\">
                        <i class=\"icon-phone\"></i>
                        +38(050)388-36-88
                    </a>
                </div>
            ";
        // line 126
        echo "            ";
        
        $__internal_fa561fadcb8906ca6d92bec9b5031318c7a7efb98267554720f85df4cdaf2bf5->leave($__internal_fa561fadcb8906ca6d92bec9b5031318c7a7efb98267554720f85df4cdaf2bf5_prof);

    }

    // line 185
    public function block_footer_js($context, array $blocks = array())
    {
        $__internal_ae2c23f93d33f424be151c356d245089d66a183b93e6e1f77bba06e93caa198f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae2c23f93d33f424be151c356d245089d66a183b93e6e1f77bba06e93caa198f->enter($__internal_ae2c23f93d33f424be151c356d245089d66a183b93e6e1f77bba06e93caa198f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_js"));

        // line 186
        echo "        <script src=\"/js/bootstrap.min.js\"></script>
        <script src=\"/js/plugins.js\"></script>
        <script src=\"/js/jquery.colorbox-min.js\"></script>
        <script src=\"/js/main.js\"></script>
    ";
        
        $__internal_ae2c23f93d33f424be151c356d245089d66a183b93e6e1f77bba06e93caa198f->leave($__internal_ae2c23f93d33f424be151c356d245089d66a183b93e6e1f77bba06e93caa198f_prof);

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
        return array (  409 => 186,  403 => 185,  396 => 126,  387 => 118,  381 => 117,  374 => 185,  322 => 135,  320 => 134,  313 => 128,  311 => 127,  309 => 117,  304 => 114,  298 => 113,  282 => 100,  276 => 99,  264 => 91,  258 => 90,  250 => 86,  244 => 85,  237 => 77,  234 => 76,  228 => 75,  218 => 71,  212 => 70,  204 => 34,  198 => 33,  185 => 25,  179 => 24,  170 => 18,  164 => 17,  154 => 12,  148 => 11,  139 => 192,  137 => 113,  132 => 110,  130 => 99,  126 => 97,  124 => 90,  120 => 88,  118 => 85,  109 => 78,  106 => 75,  104 => 70,  98 => 67,  65 => 36,  63 => 33,  60 => 32,  58 => 24,  53 => 21,  51 => 17,  48 => 16,  46 => 11,  34 => 1,);
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

                <div class=\"textwidget\"><a href=\"http://odessa.mir-kvestov.com.ua/quests/6226\" target=\"_blank\">
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
", "WebBundle::pagelayout.html.twig", "/Users/aleksandra/myaso/oqrooms/src/WebBundle/Resources/views/pagelayout.html.twig");
    }
}
