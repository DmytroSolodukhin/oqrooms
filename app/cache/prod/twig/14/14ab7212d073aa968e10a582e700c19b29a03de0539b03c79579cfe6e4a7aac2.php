<?php

/* OhGoogleMapFormTypeBundle:Form:google_maps.html.twig */
class __TwigTemplate_68d57919f851c67af5e585099bf9f692790894a0eb7cf1c16b3db29920568a86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oh_google_maps_widget' => array($this, 'block_oh_google_maps_widget'),
            'oh_google_maps_html' => array($this, 'block_oh_google_maps_html'),
            'oh_google_maps_fields' => array($this, 'block_oh_google_maps_fields'),
            'oh_google_maps_javascripts' => array($this, 'block_oh_google_maps_javascripts'),
            'oh_google_maps_javascript' => array($this, 'block_oh_google_maps_javascript'),
            'oh_google_maps_callback' => array($this, 'block_oh_google_maps_callback'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oh_google_maps_widget', $context, $blocks);
    }

    public function block_oh_google_maps_widget($context, array $blocks = array())
    {
        // line 2
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
\t";
        // line 3
        $this->displayBlock('oh_google_maps_html', $context, $blocks);
        // line 14
        echo "\t";
        $this->displayBlock('oh_google_maps_fields', $context, $blocks);
        // line 19
        echo "\t";
        $this->displayBlock('oh_google_maps_javascripts', $context, $blocks);
        // line 32
        echo "\t";
        $this->displayBlock('oh_google_maps_javascript', $context, $blocks);
        // line 80
        echo "</div>
";
    }

    // line 3
    public function block_oh_google_maps_html($context, array $blocks = array())
    {
        // line 4
        echo "\t<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_container\">
\t\t<input type=\"text\" id=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_input\" />
\t\t<button id=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_search_button\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search"), "html", null, true);
        echo "</button>
\t\t<p>
\t\t\t<a href=\"#\" id=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_current_position\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Goto current location"), "html", null, true);
        echo "</a>
\t\t</p>
\t\t<div id=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_map_canvas\" class=\"gmap\" style=\"width: ";
        echo twig_escape_filter($this->env, (isset($context["map_width"]) ? $context["map_width"] : null), "html", null, true);
        echo "; height: ";
        echo twig_escape_filter($this->env, (isset($context["map_height"]) ? $context["map_height"] : null), "html", null, true);
        echo "\"></div>
\t\t<div id=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_error\"></div>
\t</div>
\t";
    }

    // line 14
    public function block_oh_google_maps_fields($context, array $blocks = array())
    {
        // line 15
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 16
            echo "\t\t    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t";
    }

    // line 19
    public function block_oh_google_maps_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "\t\t";
        if ((isset($context["include_jquery"]) ? $context["include_jquery"] : null)) {
            // line 21
            echo "\t\t<script type=\"text/javascript\" src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js\"></script>
\t\t";
        }
        // line 23
        echo "\t\t";
        if ((isset($context["include_gmaps_js"]) ? $context["include_gmaps_js"] : null)) {
            // line 24
            echo "\t\t<script type=\"text/javascript\" src=\"//maps.google.com/maps/api/js\"></script>
\t\t";
        }
        // line 26
        echo "\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7c6d010_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7c6d010_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7c6d010_jquery.ohgooglemaps_1.js");
            // line 29
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t\t";
        } else {
            // asset "7c6d010"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7c6d010") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7c6d010.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
\t\t";
        }
        unset($context["asset_url"]);
        // line 31
        echo "\t";
    }

    // line 32
    public function block_oh_google_maps_javascript($context, array $blocks = array())
    {
        // line 33
        echo "\t\t";
        $this->displayBlock('oh_google_maps_callback', $context, $blocks);
        // line 40
        echo "\t\t<script type=\"text/javascript\">

\t\t\t\$(function(){

\t\t\t\t// Set ohGoogleMapType
\t\t\t\t\$('#";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_map_canvas').ohGoogleMapType({
\t\t\t\t  'search_input_el'    : \$('#";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_input'),
\t\t\t\t  'search_action_el'   : \$('#";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_search_button'),
\t\t\t\t  'search_error_el'    : \$('#";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_error'),
\t\t\t\t  'current_position_el': \$('#";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "_current_position'),
\t\t\t\t  'default_lat'        : '";
        // line 50
        if (((array_key_exists("value", $context) && (isset($context["value"]) ? $context["value"] : null)) && $this->getAttribute((isset($context["value"]) ? $context["value"] : null), (isset($context["lat_name"]) ? $context["lat_name"] : null)))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), (isset($context["lat_name"]) ? $context["lat_name"] : null)), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, (isset($context["default_lat"]) ? $context["default_lat"] : null), "html", null, true);
        }
        echo "',
\t\t\t\t  'default_lng'        : '";
        // line 51
        if (((array_key_exists("value", $context) && (isset($context["value"]) ? $context["value"] : null)) && $this->getAttribute((isset($context["value"]) ? $context["value"] : null), (isset($context["lng_name"]) ? $context["lng_name"] : null)))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), (isset($context["lng_name"]) ? $context["lng_name"] : null)), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, (isset($context["default_lng"]) ? $context["default_lng"] : null), "html", null, true);
        }
        echo "',
\t\t\t\t  'default_zoom'       : ";
        // line 52
        if ((((array_key_exists("value", $context) && (isset($context["value"]) ? $context["value"] : null)) && $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "lat", array())) && $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "lng", array()))) {
            echo "15";
        } else {
            echo "5";
        }
        echo ",
\t\t\t\t  'lat_field'          : \$('#";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["lat_name"]) ? $context["lat_name"] : null)), "vars", array()), "id", array()), "html", null, true);
        echo "'),
\t\t\t\t  'lng_field'          : \$('#";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["lng_name"]) ? $context["lng_name"] : null)), "vars", array()), "id", array()), "html", null, true);
        echo "'),
\t\t\t\t";
        // line 55
        if (((array_key_exists("addr_name", $context) && (isset($context["addr_name"]) ? $context["addr_name"] : null)) && $this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["addr_name"]) ? $context["addr_name"] : null)))) {
            // line 56
            echo "\t\t\t\t  'addr_field'         : \$('#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["addr_name"]) ? $context["addr_name"] : null)), "vars", array()), "id", array()), "html", null, true);
            echo "'),
\t\t\t\t";
        } else {
            // line 58
            echo "\t\t\t\t  'addr_field'         :  {},
\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t";
        if (((array_key_exists("addr_use_btn", $context) && (isset($context["addr_use_btn"]) ? $context["addr_use_btn"] : null)) && $this->getAttribute((isset($context["form"]) ? $context["form"] : null), $this->getAttribute((isset($context["addr_use_btn"]) ? $context["addr_use_btn"] : null), "name", array())))) {
            // line 61
            echo "\t\t\t\t  'addr_use_btn'       : \$('#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $this->getAttribute((isset($context["addr_use_btn"]) ? $context["addr_use_btn"] : null), "name", array())), "vars", array()), "id", array()), "html", null, true);
            echo "'),
\t\t\t\t";
        } else {
            // line 63
            echo "                  'addr_use_btn'       : {},
\t\t\t\t";
        }
        // line 65
        echo "\t\t\t\t  'callback'           : oh_google_maps_callback
\t\t\t\t});

\t\t\t\t// Set use_btn behaviour
\t\t\t\t";
        // line 69
        if (((array_key_exists("addr_use_btn", $context) && (isset($context["addr_use_btn"]) ? $context["addr_use_btn"] : null)) && $this->getAttribute((isset($context["form"]) ? $context["form"] : null), $this->getAttribute((isset($context["addr_use_btn"]) ? $context["addr_use_btn"] : null), "name", array())))) {
            // line 70
            echo "\t\t\t\t\t\$('#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $this->getAttribute((isset($context["addr_use_btn"]) ? $context["addr_use_btn"] : null), "name", array())), "vars", array()), "id", array()), "html", null, true);
            echo "').on('click', function(){
                      \$('#";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array()), "offsetGet", array(0 => $this->getAttribute((isset($context["addr_use_btn"]) ? $context["addr_use_btn"] : null), "target", array())), "method"), "vars", array()), "id", array()), "html", null, true);
            echo "').val(
                        \$('#";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["addr_name"]) ? $context["addr_name"] : null)), "vars", array()), "id", array()), "html", null, true);
            echo "').val()
                      );
\t\t\t\t\t});
\t\t\t\t";
        }
        // line 76
        echo "\t\t\t});

\t\t</script>
\t";
    }

    // line 33
    public function block_oh_google_maps_callback($context, array $blocks = array())
    {
        // line 34
        echo "\t\t\t<script type=\"text/javascript\">
\t\t\t\tvar oh_google_maps_callback = function(location, gmap){
\t\t\t\t\t// your callback function here
\t\t\t\t}
\t\t\t</script>
\t\t";
    }

    public function getTemplateName()
    {
        return "OhGoogleMapFormTypeBundle:Form:google_maps.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  278 => 34,  275 => 33,  268 => 76,  261 => 72,  257 => 71,  252 => 70,  250 => 69,  244 => 65,  240 => 63,  234 => 61,  231 => 60,  227 => 58,  221 => 56,  219 => 55,  215 => 54,  211 => 53,  203 => 52,  195 => 51,  187 => 50,  183 => 49,  179 => 48,  175 => 47,  171 => 46,  167 => 45,  160 => 40,  157 => 33,  154 => 32,  150 => 31,  136 => 29,  131 => 26,  127 => 24,  124 => 23,  120 => 21,  117 => 20,  114 => 19,  110 => 18,  101 => 16,  96 => 15,  93 => 14,  86 => 11,  78 => 10,  71 => 8,  64 => 6,  60 => 5,  55 => 4,  52 => 3,  47 => 80,  44 => 32,  41 => 19,  38 => 14,  36 => 3,  31 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OhGoogleMapFormTypeBundle:Form:google_maps.html.twig", "/Users/aleksandra/myaso/oqrooms/vendor/oh/google-map-form-type-bundle/Oh/GoogleMapFormTypeBundle/Resources/views/Form/google_maps.html.twig");
    }
}
