<?php

/* OhGoogleMapFormTypeBundle:Form:google_maps.html.twig */
class __TwigTemplate_04f99b62034b30f2d2379f5553fe86bbe0883c25c052a990d2212c9ed8f0c76a extends Twig_Template
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
        $__internal_84676f5b39ce900912a6f9e6ad1270e9ac507854c378178186ab69ccb942b3d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84676f5b39ce900912a6f9e6ad1270e9ac507854c378178186ab69ccb942b3d0->enter($__internal_84676f5b39ce900912a6f9e6ad1270e9ac507854c378178186ab69ccb942b3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OhGoogleMapFormTypeBundle:Form:google_maps.html.twig"));

        // line 1
        $this->displayBlock('oh_google_maps_widget', $context, $blocks);
        
        $__internal_84676f5b39ce900912a6f9e6ad1270e9ac507854c378178186ab69ccb942b3d0->leave($__internal_84676f5b39ce900912a6f9e6ad1270e9ac507854c378178186ab69ccb942b3d0_prof);

    }

    public function block_oh_google_maps_widget($context, array $blocks = array())
    {
        $__internal_2668f132b518431c0910c1eef07013fdce2c175d7a9c9b94f05ffc023116f7c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2668f132b518431c0910c1eef07013fdce2c175d7a9c9b94f05ffc023116f7c4->enter($__internal_2668f132b518431c0910c1eef07013fdce2c175d7a9c9b94f05ffc023116f7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oh_google_maps_widget"));

        // line 2
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
\t";
        // line 3
        $this->displayBlock('oh_google_maps_html', $context, $blocks);
        // line 10
        echo "\t";
        $this->displayBlock('oh_google_maps_fields', $context, $blocks);
        // line 15
        echo "\t";
        $this->displayBlock('oh_google_maps_javascripts', $context, $blocks);
        // line 28
        echo "\t";
        $this->displayBlock('oh_google_maps_javascript', $context, $blocks);
        // line 55
        echo "</div>
";
        
        $__internal_2668f132b518431c0910c1eef07013fdce2c175d7a9c9b94f05ffc023116f7c4->leave($__internal_2668f132b518431c0910c1eef07013fdce2c175d7a9c9b94f05ffc023116f7c4_prof);

    }

    // line 3
    public function block_oh_google_maps_html($context, array $blocks = array())
    {
        $__internal_ee5b716cf9e116f5af9e40611831344905a4fc438f5a3bbb9ac3248690d2aa8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee5b716cf9e116f5af9e40611831344905a4fc438f5a3bbb9ac3248690d2aa8e->enter($__internal_ee5b716cf9e116f5af9e40611831344905a4fc438f5a3bbb9ac3248690d2aa8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oh_google_maps_html"));

        echo " 
\t<div id=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_container\">
\t\t<input type=\"text\" id=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_input\" /><button id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_search_button\" class=\"btn\">Search</button><br /><a href=\"#\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_current_position\">Current location</a>
\t\t<div id=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_map_canvas\" class=\"gmap\" style=\"width: ";
        echo twig_escape_filter($this->env, (isset($context["map_width"]) ? $context["map_width"] : $this->getContext($context, "map_width")), "html", null, true);
        echo "px; height: ";
        echo twig_escape_filter($this->env, (isset($context["map_height"]) ? $context["map_height"] : $this->getContext($context, "map_height")), "html", null, true);
        echo "px\"></div>
\t\t<div id=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_error\"></div>
\t</div>
\t";
        
        $__internal_ee5b716cf9e116f5af9e40611831344905a4fc438f5a3bbb9ac3248690d2aa8e->leave($__internal_ee5b716cf9e116f5af9e40611831344905a4fc438f5a3bbb9ac3248690d2aa8e_prof);

    }

    // line 10
    public function block_oh_google_maps_fields($context, array $blocks = array())
    {
        $__internal_d0d127bbea10412850a28b9e5ea989cf0785201f7b1f7bfd15c174b2e2726b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d127bbea10412850a28b9e5ea989cf0785201f7b1f7bfd15c174b2e2726b44->enter($__internal_d0d127bbea10412850a28b9e5ea989cf0785201f7b1f7bfd15c174b2e2726b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oh_google_maps_fields"));

        echo " 
\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 12
            echo "\t\t    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t";
        
        $__internal_d0d127bbea10412850a28b9e5ea989cf0785201f7b1f7bfd15c174b2e2726b44->leave($__internal_d0d127bbea10412850a28b9e5ea989cf0785201f7b1f7bfd15c174b2e2726b44_prof);

    }

    // line 15
    public function block_oh_google_maps_javascripts($context, array $blocks = array())
    {
        $__internal_86fb78dbf90e13f9e2d0bd2f657cc2f4a4abd47911ce504864d51e54defc15f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86fb78dbf90e13f9e2d0bd2f657cc2f4a4abd47911ce504864d51e54defc15f8->enter($__internal_86fb78dbf90e13f9e2d0bd2f657cc2f4a4abd47911ce504864d51e54defc15f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oh_google_maps_javascripts"));

        // line 16
        echo "\t\t";
        if ((isset($context["include_jquery"]) ? $context["include_jquery"] : $this->getContext($context, "include_jquery"))) {
            // line 17
            echo "\t\t<script type=\"text/javascript\" src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js\"></script>
\t\t";
        }
        // line 19
        echo "\t\t";
        if ((isset($context["include_gmaps_js"]) ? $context["include_gmaps_js"] : $this->getContext($context, "include_gmaps_js"))) {
            // line 20
            echo "\t\t<script type=\"text/javascript\" src=\"//maps.google.com/maps/api/js?key=AIzaSyBTf4a0NxxVvVLg66e9goXLQoTkVPmK6ok&sensor=true\"></script>
\t\t";
        }
        // line 22
        echo "\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7c6d010_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7c6d010_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7c6d010_jquery.ohgooglemaps_1.js");
            // line 25
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        } else {
            // asset "7c6d010"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7c6d010") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7c6d010.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        }
        unset($context["asset_url"]);
        // line 27
        echo "\t";
        
        $__internal_86fb78dbf90e13f9e2d0bd2f657cc2f4a4abd47911ce504864d51e54defc15f8->leave($__internal_86fb78dbf90e13f9e2d0bd2f657cc2f4a4abd47911ce504864d51e54defc15f8_prof);

    }

    // line 28
    public function block_oh_google_maps_javascript($context, array $blocks = array())
    {
        $__internal_9cff8650445b9cac3bcff161b85137e95cc60a7ebae5c41c006b4ea5497d7c72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cff8650445b9cac3bcff161b85137e95cc60a7ebae5c41c006b4ea5497d7c72->enter($__internal_9cff8650445b9cac3bcff161b85137e95cc60a7ebae5c41c006b4ea5497d7c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oh_google_maps_javascript"));

        // line 29
        echo "\t\t";
        $this->displayBlock('oh_google_maps_callback', $context, $blocks);
        // line 36
        echo "\t\t<script type=\"text/javascript\">

\t\t\t\$(function(){
\t\t\t\t\$('#";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_map_canvas').ohGoogleMapType({
\t\t\t\t  'search_input_el'    : \$('#";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_input'),
\t\t\t\t  'search_action_el'   : \$('#";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_search_button'),
\t\t\t\t  'search_error_el'    : \$('#";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_error'),
\t\t\t\t  'current_position_el': \$('#";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_current_position'),
\t\t\t\t  'default_lat'        : '";
        // line 44
        if (((array_key_exists("value", $context) && (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) && $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["lat_name"]) ? $context["lat_name"] : $this->getContext($context, "lat_name"))))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["lat_name"]) ? $context["lat_name"] : $this->getContext($context, "lat_name"))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, (isset($context["default_lat"]) ? $context["default_lat"] : $this->getContext($context, "default_lat")), "html", null, true);
        }
        echo "',
\t\t\t\t  'default_lng'        : '";
        // line 45
        if (((array_key_exists("value", $context) && (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) && $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["lng_name"]) ? $context["lng_name"] : $this->getContext($context, "lng_name"))))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["lng_name"]) ? $context["lng_name"] : $this->getContext($context, "lng_name"))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, (isset($context["default_lng"]) ? $context["default_lng"] : $this->getContext($context, "default_lng")), "html", null, true);
        }
        echo "',
\t\t\t\t  'default_zoom'       : ";
        // line 46
        if ((((array_key_exists("value", $context) && (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) && $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "lat", array())) && $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "lng", array()))) {
            echo "15";
        } else {
            echo "5";
        }
        echo ",
\t\t\t\t  'lat_field'          : \$('#";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["lat_name"]) ? $context["lat_name"] : $this->getContext($context, "lat_name"))), "vars", array()), "id", array()), "html", null, true);
        echo "'),
\t\t\t\t  'lng_field'          : \$('#";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["lng_name"]) ? $context["lng_name"] : $this->getContext($context, "lng_name"))), "vars", array()), "id", array()), "html", null, true);
        echo "'),
\t\t\t\t  'callback'           : oh_google_maps_callback
\t\t\t\t});
\t\t\t});

\t\t</script>
\t";
        
        $__internal_9cff8650445b9cac3bcff161b85137e95cc60a7ebae5c41c006b4ea5497d7c72->leave($__internal_9cff8650445b9cac3bcff161b85137e95cc60a7ebae5c41c006b4ea5497d7c72_prof);

    }

    // line 29
    public function block_oh_google_maps_callback($context, array $blocks = array())
    {
        $__internal_1aac72f611614c2fe49c99bf74fab9aef98b6d39279309757092967f6232f685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aac72f611614c2fe49c99bf74fab9aef98b6d39279309757092967f6232f685->enter($__internal_1aac72f611614c2fe49c99bf74fab9aef98b6d39279309757092967f6232f685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oh_google_maps_callback"));

        // line 30
        echo "\t\t\t<script type=\"text/javascript\">
\t\t\t\tvar oh_google_maps_callback = function(location, gmap){
\t\t\t\t\t// your callback function here
\t\t\t\t}
\t\t\t</script>\t
\t\t";
        
        $__internal_1aac72f611614c2fe49c99bf74fab9aef98b6d39279309757092967f6232f685->leave($__internal_1aac72f611614c2fe49c99bf74fab9aef98b6d39279309757092967f6232f685_prof);

    }

    public function getTemplateName()
    {
        return "OhGoogleMapFormTypeBundle:Form:google_maps.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  258 => 30,  252 => 29,  238 => 48,  234 => 47,  226 => 46,  218 => 45,  210 => 44,  206 => 43,  202 => 42,  198 => 41,  194 => 40,  190 => 39,  185 => 36,  182 => 29,  176 => 28,  169 => 27,  155 => 25,  150 => 22,  146 => 20,  143 => 19,  139 => 17,  136 => 16,  130 => 15,  123 => 14,  114 => 12,  110 => 11,  102 => 10,  92 => 7,  84 => 6,  76 => 5,  72 => 4,  64 => 3,  56 => 55,  53 => 28,  50 => 15,  47 => 10,  45 => 3,  40 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block oh_google_maps_widget %}
<div {{ block('widget_container_attributes') }}>
\t{% block oh_google_maps_html %} 
\t<div id=\"{{ id }}_container\">
\t\t<input type=\"text\" id=\"{{ id }}_input\" /><button id=\"{{ id }}_search_button\" class=\"btn\">Search</button><br /><a href=\"#\" id=\"{{ id }}_current_position\">Current location</a>
\t\t<div id=\"{{ id }}_map_canvas\" class=\"gmap\" style=\"width: {{ map_width }}px; height: {{ map_height }}px\"></div>
\t\t<div id=\"{{ id }}_error\"></div>
\t</div>
\t{% endblock %}
\t{% block oh_google_maps_fields %} 
\t\t{% for child in form %}
\t\t    {{ form_row(child) }}
        {% endfor %}
\t{% endblock %}
\t{% block oh_google_maps_javascripts %}
\t\t{% if include_jquery %}
\t\t<script type=\"text/javascript\" src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js\"></script>
\t\t{% endif %}
\t\t{% if include_gmaps_js %}
\t\t<script type=\"text/javascript\" src=\"//maps.google.com/maps/api/js?key=AIzaSyBTf4a0NxxVvVLg66e9goXLQoTkVPmK6ok&sensor=true\"></script>
\t\t{% endif %}
\t\t{% javascripts
\t\t\t'@OhGoogleMapFormTypeBundle/Resources/public/js/jquery.ohgooglemaps.js'
\t\t%}
\t\t<script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
\t\t{% endjavascripts %}
\t{% endblock %}
\t{% block oh_google_maps_javascript %}
\t\t{% block oh_google_maps_callback %}
\t\t\t<script type=\"text/javascript\">
\t\t\t\tvar oh_google_maps_callback = function(location, gmap){
\t\t\t\t\t// your callback function here
\t\t\t\t}
\t\t\t</script>\t
\t\t{% endblock %}
\t\t<script type=\"text/javascript\">

\t\t\t\$(function(){
\t\t\t\t\$('#{{ id }}_map_canvas').ohGoogleMapType({
\t\t\t\t  'search_input_el'    : \$('#{{ id }}_input'),
\t\t\t\t  'search_action_el'   : \$('#{{ id }}_search_button'),
\t\t\t\t  'search_error_el'    : \$('#{{ id }}_error'),
\t\t\t\t  'current_position_el': \$('#{{ id }}_current_position'),
\t\t\t\t  'default_lat'        : '{% if value is defined and value and attribute(value, lat_name) %}{{ attribute(value, lat_name) }}{% else %}{{ default_lat }}{% endif %}',
\t\t\t\t  'default_lng'        : '{% if value is defined and value and attribute(value, lng_name) %}{{ attribute(value, lng_name) }}{% else %}{{ default_lng }}{% endif %}',
\t\t\t\t  'default_zoom'       : {% if value is defined and value and value.lat and value.lng %}15{% else %}5{% endif %},
\t\t\t\t  'lat_field'          : \$('#{{ attribute(form, lat_name).vars.id }}'),
\t\t\t\t  'lng_field'          : \$('#{{ attribute(form, lng_name).vars.id }}'),
\t\t\t\t  'callback'           : oh_google_maps_callback
\t\t\t\t});
\t\t\t});

\t\t</script>
\t{% endblock %}
</div>
{% endblock %}
", "OhGoogleMapFormTypeBundle:Form:google_maps.html.twig", "/home/oqroomsc/public_html/oqroom/vendor/oh/google-map-form-type-bundle/Oh/GoogleMapFormTypeBundle/Resources/views/Form/google_maps.html.twig");
    }
}
