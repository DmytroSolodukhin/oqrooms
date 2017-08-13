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
        $__internal_36b75d77c69600ccfceb53243e86b883797a6695312a0a4c664bf74ef2ab74c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b75d77c69600ccfceb53243e86b883797a6695312a0a4c664bf74ef2ab74c6->enter($__internal_36b75d77c69600ccfceb53243e86b883797a6695312a0a4c664bf74ef2ab74c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebBundle::pagelayout.html.twig"));

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
                        ";
        // line 68
        echo "                    </div>
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
        
        $__internal_36b75d77c69600ccfceb53243e86b883797a6695312a0a4c664bf74ef2ab74c6->leave($__internal_36b75d77c69600ccfceb53243e86b883797a6695312a0a4c664bf74ef2ab74c6_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cc0a60f87a1a0ddd913313ee7c8a641086ddee12c06715a849960a599bab229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc0a60f87a1a0ddd913313ee7c8a641086ddee12c06715a849960a599bab229->enter($__internal_9cc0a60f87a1a0ddd913313ee7c8a641086ddee12c06715a849960a599bab229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 12
        echo "        <title>
            Oculto
        </title>
    ";
        
        $__internal_9cc0a60f87a1a0ddd913313ee7c8a641086ddee12c06715a849960a599bab229->leave($__internal_9cc0a60f87a1a0ddd913313ee7c8a641086ddee12c06715a849960a599bab229_prof);

    }

    // line 17
    public function block_metateg($context, array $blocks = array())
    {
        $__internal_b363f1fe4f0dcd468991d5d2dc4bce0a853d4c43b2737d82d07d7f24ed5b1134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b363f1fe4f0dcd468991d5d2dc4bce0a853d4c43b2737d82d07d7f24ed5b1134->enter($__internal_b363f1fe4f0dcd468991d5d2dc4bce0a853d4c43b2737d82d07d7f24ed5b1134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metateg"));

        // line 18
        echo "        <meta name=\"description\" content=\"\">
        <meta name=\"keywords\" content=\"\" />
    ";
        
        $__internal_b363f1fe4f0dcd468991d5d2dc4bce0a853d4c43b2737d82d07d7f24ed5b1134->leave($__internal_b363f1fe4f0dcd468991d5d2dc4bce0a853d4c43b2737d82d07d7f24ed5b1134_prof);

    }

    // line 24
    public function block_page_head_css($context, array $blocks = array())
    {
        $__internal_264673f1ef74208255655ff6703de9f166fa617a910aa8d311704b3989ded5f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264673f1ef74208255655ff6703de9f166fa617a910aa8d311704b3989ded5f5->enter($__internal_264673f1ef74208255655ff6703de9f166fa617a910aa8d311704b3989ded5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_head_css"));

        // line 25
        echo "        <link href=\"/css/bootstrap.css\" rel=\"stylesheet\">
        <link href=\"/css/main.css\" rel=\"stylesheet\">
        <link href=\"/css/slidup.css\" rel=\"stylesheet\">
        <link href=\"/css/font-awesome.min.css\" rel=\"stylesheet\">
        <script src=\"/js/respond.min.js\"></script>

    ";
        
        $__internal_264673f1ef74208255655ff6703de9f166fa617a910aa8d311704b3989ded5f5->leave($__internal_264673f1ef74208255655ff6703de9f166fa617a910aa8d311704b3989ded5f5_prof);

    }

    // line 33
    public function block_page_head_js($context, array $blocks = array())
    {
        $__internal_d0cb802c3cfbc2675505e73ab42940d759834fa5801a538a0138bd2522a54943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0cb802c3cfbc2675505e73ab42940d759834fa5801a538a0138bd2522a54943->enter($__internal_d0cb802c3cfbc2675505e73ab42940d759834fa5801a538a0138bd2522a54943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_head_js"));

        // line 34
        echo "
    ";
        
        $__internal_d0cb802c3cfbc2675505e73ab42940d759834fa5801a538a0138bd2522a54943->leave($__internal_d0cb802c3cfbc2675505e73ab42940d759834fa5801a538a0138bd2522a54943_prof);

    }

    // line 70
    public function block_hed_phone($context, array $blocks = array())
    {
        $__internal_1497109eee3d259920f530133a3e8ee0ead354026dc23fd9e66f34a681ffc539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1497109eee3d259920f530133a3e8ee0ead354026dc23fd9e66f34a681ffc539->enter($__internal_1497109eee3d259920f530133a3e8ee0ead354026dc23fd9e66f34a681ffc539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hed_phone"));

        // line 71
        echo "                            <span>
                                <a href=\"tel:+380503883688\" title=\"телефон\">+38(050)388-36-88</a>
                            </span>
                        ";
        
        $__internal_1497109eee3d259920f530133a3e8ee0ead354026dc23fd9e66f34a681ffc539->leave($__internal_1497109eee3d259920f530133a3e8ee0ead354026dc23fd9e66f34a681ffc539_prof);

    }

    // line 75
    public function block_topMenu($context, array $blocks = array())
    {
        $__internal_e7dce760bbfcff19c6d838e8b4958123277f0d37e189786fd9596849660b4702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7dce760bbfcff19c6d838e8b4958123277f0d37e189786fd9596849660b4702->enter($__internal_e7dce760bbfcff19c6d838e8b4958123277f0d37e189786fd9596849660b4702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topMenu"));

        // line 76
        echo "                            ";
        $this->loadTemplate("WebBundle::menu.html.twig", "WebBundle::pagelayout.html.twig", 76)->display($context);
        // line 77
        echo "                        ";
        
        $__internal_e7dce760bbfcff19c6d838e8b4958123277f0d37e189786fd9596849660b4702->leave($__internal_e7dce760bbfcff19c6d838e8b4958123277f0d37e189786fd9596849660b4702_prof);

    }

    // line 85
    public function block_myCanvas($context, array $blocks = array())
    {
        $__internal_edd7f1211c3ad058b0a481c42815562e058699b9e224bf315a31188007e6c241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd7f1211c3ad058b0a481c42815562e058699b9e224bf315a31188007e6c241->enter($__internal_edd7f1211c3ad058b0a481c42815562e058699b9e224bf315a31188007e6c241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myCanvas"));

        // line 86
        echo "    <canvas id=\"myCanvas\" height=\"400\"  style=\"background: rgba(0, 0, 0, 0) url('/images/background.jpg') repeat fixed 55% 32%\"></canvas>
";
        
        $__internal_edd7f1211c3ad058b0a481c42815562e058699b9e224bf315a31188007e6c241->leave($__internal_edd7f1211c3ad058b0a481c42815562e058699b9e224bf315a31188007e6c241_prof);

    }

    // line 90
    public function block_welcome($context, array $blocks = array())
    {
        $__internal_49a10e6c254c38af203c17cc73739b22d05d0cd5e1e9a5bb600780e3c8c4eac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a10e6c254c38af203c17cc73739b22d05d0cd5e1e9a5bb600780e3c8c4eac1->enter($__internal_49a10e6c254c38af203c17cc73739b22d05d0cd5e1e9a5bb600780e3c8c4eac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "welcome"));

        // line 91
        echo "    <div class=\"parallax\" style=\"background: rgba(0, 0, 0, 0)\">
        <img class=\"logop\" src=\"/images/logo/OQ-rooms-hq.png\" alt=\"квест комнаты occulto quest\">
        <h1 class=\"intro-text text-center\">Квесты в реальности!</h1>

    </div>
";
        
        $__internal_49a10e6c254c38af203c17cc73739b22d05d0cd5e1e9a5bb600780e3c8c4eac1->leave($__internal_49a10e6c254c38af203c17cc73739b22d05d0cd5e1e9a5bb600780e3c8c4eac1_prof);

    }

    // line 99
    public function block_content($context, array $blocks = array())
    {
        $__internal_a9344df674105c48fa8f27cd851038d138be118f4470f59088b58a5a6b9d4a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9344df674105c48fa8f27cd851038d138be118f4470f59088b58a5a6b9d4a27->enter($__internal_a9344df674105c48fa8f27cd851038d138be118f4470f59088b58a5a6b9d4a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_a9344df674105c48fa8f27cd851038d138be118f4470f59088b58a5a6b9d4a27->leave($__internal_a9344df674105c48fa8f27cd851038d138be118f4470f59088b58a5a6b9d4a27_prof);

    }

    // line 113
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3591c3d3b42e92af124ac357eeef8d3ab6873640c900fd24bdf33aed81149f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3591c3d3b42e92af124ac357eeef8d3ab6873640c900fd24bdf33aed81149f6e->enter($__internal_3591c3d3b42e92af124ac357eeef8d3ab6873640c900fd24bdf33aed81149f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_3591c3d3b42e92af124ac357eeef8d3ab6873640c900fd24bdf33aed81149f6e->leave($__internal_3591c3d3b42e92af124ac357eeef8d3ab6873640c900fd24bdf33aed81149f6e_prof);

    }

    // line 117
    public function block_phone($context, array $blocks = array())
    {
        $__internal_5dbd53776aa426a76d4957592c9c3f72283d918120918ab7294ba8d0fdfa4da4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbd53776aa426a76d4957592c9c3f72283d918120918ab7294ba8d0fdfa4da4->enter($__internal_5dbd53776aa426a76d4957592c9c3f72283d918120918ab7294ba8d0fdfa4da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "phone"));

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
        
        $__internal_5dbd53776aa426a76d4957592c9c3f72283d918120918ab7294ba8d0fdfa4da4->leave($__internal_5dbd53776aa426a76d4957592c9c3f72283d918120918ab7294ba8d0fdfa4da4_prof);

    }

    // line 185
    public function block_footer_js($context, array $blocks = array())
    {
        $__internal_6e3a50fc4ddf5026ee2958da5b3b82896ec796e734038e0853b0cbed3c63bb00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e3a50fc4ddf5026ee2958da5b3b82896ec796e734038e0853b0cbed3c63bb00->enter($__internal_6e3a50fc4ddf5026ee2958da5b3b82896ec796e734038e0853b0cbed3c63bb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_js"));

        // line 186
        echo "        <script src=\"/js/bootstrap.min.js\"></script>
        <script src=\"/js/plugins.js\"></script>
        <script src=\"/js/jquery.colorbox-min.js\"></script>
        <script src=\"/js/main.js\"></script>
    ";
        
        $__internal_6e3a50fc4ddf5026ee2958da5b3b82896ec796e734038e0853b0cbed3c63bb00->leave($__internal_6e3a50fc4ddf5026ee2958da5b3b82896ec796e734038e0853b0cbed3c63bb00_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle::pagelayout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  407 => 186,  401 => 185,  394 => 125,  386 => 118,  380 => 117,  373 => 185,  320 => 134,  318 => 133,  311 => 127,  309 => 126,  307 => 117,  302 => 114,  296 => 113,  280 => 100,  274 => 99,  262 => 91,  256 => 90,  248 => 86,  242 => 85,  235 => 77,  232 => 76,  226 => 75,  216 => 71,  210 => 70,  202 => 34,  196 => 33,  183 => 25,  177 => 24,  168 => 18,  162 => 17,  152 => 12,  146 => 11,  137 => 192,  135 => 113,  130 => 110,  128 => 99,  124 => 97,  122 => 90,  118 => 88,  116 => 85,  107 => 78,  104 => 75,  102 => 70,  98 => 68,  65 => 36,  63 => 33,  60 => 32,  58 => 24,  53 => 21,  51 => 17,  48 => 16,  46 => 11,  34 => 1,);
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
                        {#<a href=\"{{ path('web_homepage') }}\" title=\"Главная\"><img src=\"/images/logo/OQ-rooms2.png\" width=\"90px\" alt=\"квест румы occulto quest\"> </a>#}
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
    <div class=\"parallax\" style=\"background: rgba(0, 0, 0, 0)\">
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
