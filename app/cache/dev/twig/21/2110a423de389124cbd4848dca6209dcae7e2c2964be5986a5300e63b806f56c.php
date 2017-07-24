<?php

/* OhGoogleMapFormTypeBundle:Form:google_maps.html.twig */
class __TwigTemplate_f2a32cbb659db8e2e90001b6b0d00427a8fceb591c51a252b748b59d5ff94a63 extends Twig_Template
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
        $__internal_e87ba7d5cca954db67eb20e4a9549347d9867fc8b8c5161aebdf7a16b8300849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e87ba7d5cca954db67eb20e4a9549347d9867fc8b8c5161aebdf7a16b8300849->enter($__internal_e87ba7d5cca954db67eb20e4a9549347d9867fc8b8c5161aebdf7a16b8300849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OhGoogleMapFormTypeBundle:Form:google_maps.html.twig"));

        // line 1
        $this->displayBlock('oh_google_maps_widget', $context, $blocks);
        
        $__internal_e87ba7d5cca954db67eb20e4a9549347d9867fc8b8c5161aebdf7a16b8300849->leave($__internal_e87ba7d5cca954db67eb20e4a9549347d9867fc8b8c5161aebdf7a16b8300849_prof);

    }

    public function block_oh_google_maps_widget($context, array $blocks = array())
    {
        $__internal_059bed4f6f3e0beca88991a642fdb5112136e78507e34847b8573a187b46ffd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_059bed4f6f3e0beca88991a642fdb5112136e78507e34847b8573a187b46ffd4->enter($__internal_059bed4f6f3e0beca88991a642fdb5112136e78507e34847b8573a187b46ffd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oh_google_maps_widget"));

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
        
        $__internal_059bed4f6f3e0beca88991a642fdb5112136e78507e34847b8573a187b46ffd4->leave($__internal_059bed4f6f3e0beca88991a642fdb5112136e78507e34847b8573a187b46ffd4_prof);

    }

    // line 3
    public function block_oh_google_maps_html($context, array $blocks = array())
    {
        $__internal_7f60d67b0572c956da538a616f9afd1a6c2b14fffe404b363e1104fd6a43f7a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f60d67b0572c956da538a616f9afd1a6c2b14fffe404b363e1104fd6a43f7a1->enter($__internal_7f60d67b0572c956da538a616f9afd1a6c2b14fffe404b363e1104fd6a43f7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oh_google_maps_html"));

        // line 4
        echo "\t<div id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_container\">
\t\t<input type=\"text\" id=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_input\" />
\t\t<button id=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_search_button\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search"), "html", null, true);
        echo "</button>
\t\t<p>
\t\t\t<a href=\"#\" id=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_current_position\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Goto current location"), "html", null, true);
        echo "</a>
\t\t</p>
\t\t<div id=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_map_canvas\" class=\"gmap\" style=\"width: ";
        echo twig_escape_filter($this->env, ($context["map_width"] ?? $this->getContext($context, "map_width")), "html", null, true);
        echo "; height: ";
        echo twig_escape_filter($this->env, ($context["map_height"] ?? $this->getContext($context, "map_height")), "html", null, true);
        echo "\"></div>
\t\t<div id=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_error\"></div>
\t</div>
\t";
        
        $__internal_7f60d67b0572c956da538a616f9afd1a6c2b14fffe404b363e1104fd6a43f7a1->leave($__internal_7f60d67b0572c956da538a616f9afd1a6c2b14fffe404b363e1104fd6a43f7a1_prof);

    }

    // line 14
    public function block_oh_google_maps_fields($context, array $blocks = array())
    {
        $__internal_3d99891988adacf07209446bdca5911d7a9418dd4c9b1ab5fcc3866b946e1093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d99891988adacf07209446bdca5911d7a9418dd4c9b1ab5fcc3866b946e1093->enter($__internal_3d99891988adacf07209446bdca5911d7a9418dd4c9b1ab5fcc3866b946e1093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oh_google_maps_fields"));

        // line 15
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
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
        
        $__internal_3d99891988adacf07209446bdca5911d7a9418dd4c9b1ab5fcc3866b946e1093->leave($__internal_3d99891988adacf07209446bdca5911d7a9418dd4c9b1ab5fcc3866b946e1093_prof);

    }

    // line 19
    public function block_oh_google_maps_javascripts($context, array $blocks = array())
    {
        $__internal_f526ad9d30a80980ac34c4b0d48e9f1fd1dfa040f753b64b4642fefdd5018f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f526ad9d30a80980ac34c4b0d48e9f1fd1dfa040f753b64b4642fefdd5018f90->enter($__internal_f526ad9d30a80980ac34c4b0d48e9f1fd1dfa040f753b64b4642fefdd5018f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oh_google_maps_javascripts"));

        // line 20
        echo "\t\t";
        if (($context["include_jquery"] ?? $this->getContext($context, "include_jquery"))) {
            // line 21
            echo "\t\t<script type=\"text/javascript\" src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js\"></script>
\t\t";
        }
        // line 23
        echo "\t\t";
        if (($context["include_gmaps_js"] ?? $this->getContext($context, "include_gmaps_js"))) {
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
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        } else {
            // asset "7c6d010"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_7c6d010") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/7c6d010.js");
            echo "\t\t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        }
        unset($context["asset_url"]);
        // line 31
        echo "\t";
        
        $__internal_f526ad9d30a80980ac34c4b0d48e9f1fd1dfa040f753b64b4642fefdd5018f90->leave($__internal_f526ad9d30a80980ac34c4b0d48e9f1fd1dfa040f753b64b4642fefdd5018f90_prof);

    }

    // line 32
    public function block_oh_google_maps_javascript($context, array $blocks = array())
    {
        $__internal_d3c78eb24b4725a6143ef8eb4c41a071c963a42e14301bb111a0112096494713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c78eb24b4725a6143ef8eb4c41a071c963a42e14301bb111a0112096494713->enter($__internal_d3c78eb24b4725a6143ef8eb4c41a071c963a42e14301bb111a0112096494713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oh_google_maps_javascript"));

        // line 33
        echo "\t\t";
        $this->displayBlock('oh_google_maps_callback', $context, $blocks);
        // line 40
        echo "\t\t<script type=\"text/javascript\">

\t\t\t\$(function(){

\t\t\t\t// Set ohGoogleMapType
\t\t\t\t\$('#";
        // line 45
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_map_canvas').ohGoogleMapType({
\t\t\t\t  'search_input_el'    : \$('#";
        // line 46
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_input'),
\t\t\t\t  'search_action_el'   : \$('#";
        // line 47
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_search_button'),
\t\t\t\t  'search_error_el'    : \$('#";
        // line 48
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_error'),
\t\t\t\t  'current_position_el': \$('#";
        // line 49
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "_current_position'),
\t\t\t\t  'default_lat'        : '";
        // line 50
        if (((array_key_exists("value", $context) && ($context["value"] ?? $this->getContext($context, "value"))) && $this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), ($context["lat_name"] ?? $this->getContext($context, "lat_name"))))) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), ($context["lat_name"] ?? $this->getContext($context, "lat_name"))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, ($context["default_lat"] ?? $this->getContext($context, "default_lat")), "html", null, true);
        }
        echo "',
\t\t\t\t  'default_lng'        : '";
        // line 51
        if (((array_key_exists("value", $context) && ($context["value"] ?? $this->getContext($context, "value"))) && $this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), ($context["lng_name"] ?? $this->getContext($context, "lng_name"))))) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), ($context["lng_name"] ?? $this->getContext($context, "lng_name"))), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, ($context["default_lng"] ?? $this->getContext($context, "default_lng")), "html", null, true);
        }
        echo "',
\t\t\t\t  'default_zoom'       : ";
        // line 52
        if ((((array_key_exists("value", $context) && ($context["value"] ?? $this->getContext($context, "value"))) && $this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), "lat", array())) && $this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), "lng", array()))) {
            echo "15";
        } else {
            echo "5";
        }
        echo ",
\t\t\t\t  'lat_field'          : \$('#";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), ($context["lat_name"] ?? $this->getContext($context, "lat_name"))), "vars", array()), "id", array()), "html", null, true);
        echo "'),
\t\t\t\t  'lng_field'          : \$('#";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), ($context["lng_name"] ?? $this->getContext($context, "lng_name"))), "vars", array()), "id", array()), "html", null, true);
        echo "'),
\t\t\t\t";
        // line 55
        if (((array_key_exists("addr_name", $context) && ($context["addr_name"] ?? $this->getContext($context, "addr_name"))) && $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), ($context["addr_name"] ?? $this->getContext($context, "addr_name"))))) {
            // line 56
            echo "\t\t\t\t  'addr_field'         : \$('#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), ($context["addr_name"] ?? $this->getContext($context, "addr_name"))), "vars", array()), "id", array()), "html", null, true);
            echo "'),
\t\t\t\t";
        } else {
            // line 58
            echo "\t\t\t\t  'addr_field'         :  {},
\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t";
        if (((array_key_exists("addr_use_btn", $context) && ($context["addr_use_btn"] ?? $this->getContext($context, "addr_use_btn"))) && $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute(($context["addr_use_btn"] ?? $this->getContext($context, "addr_use_btn")), "name", array())))) {
            // line 61
            echo "\t\t\t\t  'addr_use_btn'       : \$('#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute(($context["addr_use_btn"] ?? $this->getContext($context, "addr_use_btn")), "name", array())), "vars", array()), "id", array()), "html", null, true);
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
        if (((array_key_exists("addr_use_btn", $context) && ($context["addr_use_btn"] ?? $this->getContext($context, "addr_use_btn"))) && $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute(($context["addr_use_btn"] ?? $this->getContext($context, "addr_use_btn")), "name", array())))) {
            // line 70
            echo "\t\t\t\t\t\$('#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), $this->getAttribute(($context["addr_use_btn"] ?? $this->getContext($context, "addr_use_btn")), "name", array())), "vars", array()), "id", array()), "html", null, true);
            echo "').on('click', function(){
                      \$('#";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), "offsetGet", array(0 => $this->getAttribute(($context["addr_use_btn"] ?? $this->getContext($context, "addr_use_btn")), "target", array())), "method"), "vars", array()), "id", array()), "html", null, true);
            echo "').val(
                        \$('#";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), ($context["addr_name"] ?? $this->getContext($context, "addr_name"))), "vars", array()), "id", array()), "html", null, true);
            echo "').val()
                      );
\t\t\t\t\t});
\t\t\t\t";
        }
        // line 76
        echo "\t\t\t});

\t\t</script>
\t";
        
        $__internal_d3c78eb24b4725a6143ef8eb4c41a071c963a42e14301bb111a0112096494713->leave($__internal_d3c78eb24b4725a6143ef8eb4c41a071c963a42e14301bb111a0112096494713_prof);

    }

    // line 33
    public function block_oh_google_maps_callback($context, array $blocks = array())
    {
        $__internal_4c6745a9ac4d45b09925a83e3b93898b26b2849ac80413c1cdfc4f530064d656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c6745a9ac4d45b09925a83e3b93898b26b2849ac80413c1cdfc4f530064d656->enter($__internal_4c6745a9ac4d45b09925a83e3b93898b26b2849ac80413c1cdfc4f530064d656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oh_google_maps_callback"));

        // line 34
        echo "\t\t\t<script type=\"text/javascript\">
\t\t\t\tvar oh_google_maps_callback = function(location, gmap){
\t\t\t\t\t// your callback function here
\t\t\t\t}
\t\t\t</script>
\t\t";
        
        $__internal_4c6745a9ac4d45b09925a83e3b93898b26b2849ac80413c1cdfc4f530064d656->leave($__internal_4c6745a9ac4d45b09925a83e3b93898b26b2849ac80413c1cdfc4f530064d656_prof);

    }

    public function getTemplateName()
    {
        return "OhGoogleMapFormTypeBundle:Form:google_maps.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  317 => 34,  311 => 33,  301 => 76,  294 => 72,  290 => 71,  285 => 70,  283 => 69,  277 => 65,  273 => 63,  267 => 61,  264 => 60,  260 => 58,  254 => 56,  252 => 55,  248 => 54,  244 => 53,  236 => 52,  228 => 51,  220 => 50,  216 => 49,  212 => 48,  208 => 47,  204 => 46,  200 => 45,  193 => 40,  190 => 33,  184 => 32,  177 => 31,  163 => 29,  158 => 26,  154 => 24,  151 => 23,  147 => 21,  144 => 20,  138 => 19,  131 => 18,  122 => 16,  117 => 15,  111 => 14,  101 => 11,  93 => 10,  86 => 8,  79 => 6,  75 => 5,  70 => 4,  64 => 3,  56 => 80,  53 => 32,  50 => 19,  47 => 14,  45 => 3,  40 => 2,  28 => 1,);
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
\t\t<input type=\"text\" id=\"{{ id }}_input\" />
\t\t<button id=\"{{ id }}_search_button\" class=\"btn\">{{ \"Search\"|trans }}</button>
\t\t<p>
\t\t\t<a href=\"#\" id=\"{{ id }}_current_position\">{{ \"Goto current location\"|trans }}</a>
\t\t</p>
\t\t<div id=\"{{ id }}_map_canvas\" class=\"gmap\" style=\"width: {{ map_width }}; height: {{ map_height }}\"></div>
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
\t\t<script type=\"text/javascript\" src=\"//maps.google.com/maps/api/js\"></script>
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
\t\t\t</script>
\t\t{% endblock %}
\t\t<script type=\"text/javascript\">

\t\t\t\$(function(){

\t\t\t\t// Set ohGoogleMapType
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
\t\t\t\t{% if addr_name is defined and addr_name and attribute(form, addr_name) %}
\t\t\t\t  'addr_field'         : \$('#{{ attribute(form, addr_name).vars.id }}'),
\t\t\t\t{% else %}
\t\t\t\t  'addr_field'         :  {},
\t\t\t\t{% endif %}
\t\t\t\t{% if addr_use_btn is defined and addr_use_btn and attribute(form, addr_use_btn.name) %}
\t\t\t\t  'addr_use_btn'       : \$('#{{ attribute(form, addr_use_btn.name).vars.id }}'),
\t\t\t\t{% else %}
                  'addr_use_btn'       : {},
\t\t\t\t{% endif %}
\t\t\t\t  'callback'           : oh_google_maps_callback
\t\t\t\t});

\t\t\t\t// Set use_btn behaviour
\t\t\t\t{% if addr_use_btn is defined and addr_use_btn and attribute(form, addr_use_btn.name) %}
\t\t\t\t\t\$('#{{ attribute(form, addr_use_btn.name).vars.id }}').on('click', function(){
                      \$('#{{ form.parent.offsetGet( addr_use_btn.target ).vars.id }}').val(
                        \$('#{{ attribute(form, addr_name).vars.id }}').val()
                      );
\t\t\t\t\t});
\t\t\t\t{% endif %}
\t\t\t});

\t\t</script>
\t{% endblock %}
</div>
{% endblock %}
", "OhGoogleMapFormTypeBundle:Form:google_maps.html.twig", "/var/www/oqroom/vendor/oh/google-map-form-type-bundle/Oh/GoogleMapFormTypeBundle/Resources/views/Form/google_maps.html.twig");
    }
}
