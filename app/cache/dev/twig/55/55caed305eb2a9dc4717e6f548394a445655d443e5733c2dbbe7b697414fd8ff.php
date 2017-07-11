<?php

/* ComurImageBundle:Form:fields.html.twig */
class __TwigTemplate_425ed49e338439907aff1afbaf82d6c35e7c14d1c8697c7ccaa2bb8a34b8d2bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'comur_image_widget' => array($this, 'block_comur_image_widget'),
            'comur_gallery_widget' => array($this, 'block_comur_gallery_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fd3d377672f3cf0906237990ae0efb179369651be2ee307251f7fb5e71a479e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd3d377672f3cf0906237990ae0efb179369651be2ee307251f7fb5e71a479e->enter($__internal_3fd3d377672f3cf0906237990ae0efb179369651be2ee307251f7fb5e71a479e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ComurImageBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('comur_image_widget', $context, $blocks);
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('comur_gallery_widget', $context, $blocks);
        
        $__internal_3fd3d377672f3cf0906237990ae0efb179369651be2ee307251f7fb5e71a479e->leave($__internal_3fd3d377672f3cf0906237990ae0efb179369651be2ee307251f7fb5e71a479e_prof);

    }

    // line 1
    public function block_comur_image_widget($context, array $blocks = array())
    {
        $__internal_636ba2d899aa1e12eab52ecda48509ead4bc869966996b6e84a298eb420a53c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_636ba2d899aa1e12eab52ecda48509ead4bc869966996b6e84a298eb420a53c2->enter($__internal_636ba2d899aa1e12eab52ecda48509ead4bc869966996b6e84a298eb420a53c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "comur_image_widget"));

        // line 2
        echo "    ";
        $context["__internal_a1f94f74ba05660b5f2841851c888ffbd9d896633ab78dbb8cfa5a4837f4fcd1"] = (isset($context["comur_translation_domain"]) ? $context["comur_translation_domain"] : $this->getContext($context, "comur_translation_domain"));
        // line 3
        echo "    ";
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        // line 6
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), 'widget');
        echo "
        ";
        // line 7
        if ($this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "uploadConfig", array()), "saveOriginal", array())) {
            // line 8
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "uploadConfig", array()), "saveOriginal", array()), array(), "array"), 'widget');
            echo "
        ";
        }
        // line 10
        echo "
        <div class=\"field-error clearfix hidden\">
            <div id=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "_widget_error\" class=\"alert alert-danger span6\">
            </div>
        </div>
        <div class=\"image_preview select-image-button\" id=\"image_preview_";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "\" style=\"z-index: 1050\">
            <div class=\"image_edit_button\">
                <span class=\"btn btn-success select-image-button\">
                    <i class=\"glyphicon glyphicon-edit glyphicon-white\"></i> ";
        // line 18
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(),         // line 2
(isset($context["__internal_a1f94f74ba05660b5f2841851c888ffbd9d896633ab78dbb8cfa5a4837f4fcd1"]) ? $context["__internal_a1f94f74ba05660b5f2841851c888ffbd9d896633ab78dbb8cfa5a4837f4fcd1"] : $this->getContext($context, "__internal_a1f94f74ba05660b5f2841851c888ffbd9d896633ab78dbb8cfa5a4837f4fcd1")));
        // line 19
        echo "                </span>
            </div>
            <div id=\"image_preview_image_";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "\">
                ";
        // line 22
        if ( !$this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "fieldImage", array())) {
            // line 23
            echo "                    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "vars", array()), "value", array())) {
                // line 24
                echo "                        <img src=\"/";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "uploadConfig", array()), "webDir", array()) . "/") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "vars", array()), "value", array())), "html", null, true);
                echo "?";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "U"), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
                echo "_preview\" style=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "uploadConfig", array()), "saveOriginal", array())) ? ("cursor:hand; cursor: pointer") : (""));
                echo "\"/>
                    ";
            } else {
                // line 26
                echo "                        <img data-src=\"holder.js/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "cropConfig", array()), "minWidth", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "cropConfig", array()), "minHeight", array()), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
                echo "_preview\"/>
                    ";
            }
            // line 28
            echo "                ";
        } else {
            // line 29
            echo "                    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "vars", array()), "value", array())) {
                // line 30
                echo "                        <img src=\"/";
                echo twig_escape_filter($this->env, $this->env->getExtension('Comur\ImageBundle\Twig\ThumbExtension')->getThumb((($this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "uploadConfig", array()), "webDir", array()) . "/") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "vars", array()), "value", array())), $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "fieldImage", array()), "maxWidth", array()), $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "fieldImage", array()), "maxHeight", array())), "html", null, true);
                echo "?";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "U"), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
                echo "_preview\" style=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "uploadConfig", array()), "saveOriginal", array())) ? ("cursor:hand; cursor: pointer") : (""));
                echo "\"/>
                    ";
            } else {
                // line 32
                echo "                        <img data-src=\"holder.js/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "fieldImage", array()), "maxWidth", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "fieldImage", array()), "maxHeight", array()), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
                echo "_preview\"/>
                    ";
            }
            // line 34
            echo "                ";
        }
        // line 35
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 39
        echo "
    <script>
        \$(document).ready(function(){
            Holder.run();
            ";
        // line 43
        if ($this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "uploadConfig", array()), "saveOriginal", array())) {
            // line 44
            echo "                if(\$('#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "uploadConfig", array()), "saveOriginal", array()), array(), "array"), "vars", array()), "id", array()), "html", null, true);
            echo "').val()){
                    \$('#";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
            echo "_preview').click(function(e){
                        // console.log(e.target);
                        if(\$( e.target ).is( \"img\" )){
                            \$('<div class=\"modal hide fade\"><img src=\"/";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "uploadConfig", array()), "webDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "uploadConfig", array()), "saveOriginal", array()), array(), "array"), "vars", array()), "value", array()), "html", null, true);
            echo "\"/></div>').modal();
                            return false;
                        }
                    });
                }
            ";
        }
        // line 54
        echo "            \$('#image_preview_";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo ".select-image-button .image_edit_button').click(function(event){
                var options = \$.parseJSON('";
        // line 55
        echo twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        echo "');
                ";
        // line 56
        if ($this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "uploadConfig", array()), "saveOriginal", array())) {
            // line 57
            echo "                    options['originalImageFieldId'] = '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "uploadConfig", array()), "saveOriginal", array()), array(), "array"), "vars", array()), "id", array()), "html", null, true);
            echo "';
                ";
        }
        // line 59
        echo "                initializeImageManager('";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "', options);
                // console.log('";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo " onclick');
                \$('#image_upload_modal').modal('show');
            });
        });
        \$('.select-image-button').mouseover(function(){
            if(!\$(this).hasClass('hide-disabled'))
                \$(this).children('.image_edit_button').removeClass('hidden');
        });
        \$('.select-image-button').mouseout(function(){
            if(!\$(this).hasClass('hide-disabled'))
                \$(this).children('.image_edit_button').addClass('hidden');
        });

    </script>
";
        
        $__internal_636ba2d899aa1e12eab52ecda48509ead4bc869966996b6e84a298eb420a53c2->leave($__internal_636ba2d899aa1e12eab52ecda48509ead4bc869966996b6e84a298eb420a53c2_prof);

    }

    // line 76
    public function block_comur_gallery_widget($context, array $blocks = array())
    {
        $__internal_f82d446244d2b24509c456c43f4c042a619f535166449b584efc9c4ee383efca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82d446244d2b24509c456c43f4c042a619f535166449b584efc9c4ee383efca->enter($__internal_f82d446244d2b24509c456c43f4c042a619f535166449b584efc9c4ee383efca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "comur_gallery_widget"));

        // line 77
        echo "    ";
        $context["__internal_75de83b5e062f27773962e1cd8ca9344b0f88995fff95b7abb14bed948992e36"] = (isset($context["comur_translation_domain"]) ? $context["comur_translation_domain"] : $this->getContext($context, "comur_translation_domain"));
        // line 78
        echo "    ";
        // line 79
        echo "
    ";
        // line 80
        ob_start();
        // line 81
        echo "
        <div class=\"field-error clearfix hidden\">
            <div id=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "_widget_error\" class=\"alert alert-danger span6\">
            </div>
        </div>
        <div id=\"gallery_preview_";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"well\" data-name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "vars", array()), "full_name", array()), "html", null, true);
        echo "\">

            ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 89
            echo "                <div class=\"gallery-image-container\" data-image=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "vars", array()), "value", array()), "html", null, true);
            echo "\">
                    <span class=\"gallery-image-helper\"></span>
                    ";
            // line 91
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["image"], 'widget');
            echo "
                    <span class=\"remove-image\"><i class=\"glyphicon glyphicon-remove\" data-delete=\"image\"></i></span>
                    <img src=\"/";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('Comur\ImageBundle\Twig\ThumbExtension')->getThumb((($this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "uploadConfig", array()), "webDir", array()) . "/") . $this->getAttribute($this->getAttribute($context["image"], "vars", array()), "value", array())), $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "galleryThumbSize", array()), $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "galleryThumbSize", array())), "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "U"), "html", null, true);
            echo "\"/>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "        </div>
        <div class=\"image_add_button\" id=\"image_add_button_";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "\">
            <span class=\"btn btn-success add-image-button\">
                <i class=\"glyphicon glyphicon-picture glyphicon-white\"></i> ";
        // line 99
        echo $this->env->getExtension('translator')->getTranslator()->trans("Add image", array(),         // line 77
(isset($context["__internal_75de83b5e062f27773962e1cd8ca9344b0f88995fff95b7abb14bed948992e36"]) ? $context["__internal_75de83b5e062f27773962e1cd8ca9344b0f88995fff95b7abb14bed948992e36"] : $this->getContext($context, "__internal_75de83b5e062f27773962e1cd8ca9344b0f88995fff95b7abb14bed948992e36")));
        // line 100
        echo "            </span>
        </div>

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 104
        echo "
    <script>

        \$(document).ready(function(){
            rebindGalleryRemove();
            galleries['";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "'] = true;
            \$('#image_add_button_";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "').click(function(event){
                initializeImageManager('";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "', \$.parseJSON('";
        echo twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        echo "'));
                \$('#image_upload_modal').modal('show');
            });
            \$( \"#gallery_preview_";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "\" ).sortable({
                placeholder: \"gallery-image-container placeholder\",
                update: function(e, ui){
                    reorderItems('gallery_preview_";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "');
                }
            });
            \$( \"#gallery_preview_";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "\" ).disableSelection();
        });

    </script>
";
        
        $__internal_f82d446244d2b24509c456c43f4c042a619f535166449b584efc9c4ee383efca->leave($__internal_f82d446244d2b24509c456c43f4c042a619f535166449b584efc9c4ee383efca_prof);

    }

    public function getTemplateName()
    {
        return "ComurImageBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  341 => 120,  335 => 117,  329 => 114,  321 => 111,  317 => 110,  313 => 109,  306 => 104,  300 => 100,  298 => 77,  297 => 99,  292 => 97,  289 => 96,  278 => 93,  273 => 91,  267 => 89,  263 => 88,  256 => 86,  250 => 83,  246 => 81,  244 => 80,  241 => 79,  239 => 78,  236 => 77,  230 => 76,  208 => 60,  203 => 59,  197 => 57,  195 => 56,  191 => 55,  186 => 54,  175 => 48,  169 => 45,  164 => 44,  162 => 43,  156 => 39,  150 => 35,  147 => 34,  137 => 32,  125 => 30,  122 => 29,  119 => 28,  109 => 26,  97 => 24,  94 => 23,  92 => 22,  88 => 21,  84 => 19,  82 => 2,  81 => 18,  75 => 15,  69 => 12,  65 => 10,  59 => 8,  57 => 7,  52 => 6,  50 => 5,  47 => 4,  45 => 3,  42 => 2,  36 => 1,  29 => 76,  26 => 75,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block comur_image_widget %}
    {% trans_default_domain comur_translation_domain %}
    {# trans_default_domain 'ComurImageBundle' #}
    {% spaceless %}
        {# block('form_widget_simple') #}
        {{ form_widget(form[name])}}
        {% if options.uploadConfig.saveOriginal %}
            {{ form_widget(form[options.uploadConfig.saveOriginal])}}
        {% endif %}

        <div class=\"field-error clearfix hidden\">
            <div id=\"{{form[name].vars.id}}_widget_error\" class=\"alert alert-danger span6\">
            </div>
        </div>
        <div class=\"image_preview select-image-button\" id=\"image_preview_{{ form[name].vars.id }}\" style=\"z-index: 1050\">
            <div class=\"image_edit_button\">
                <span class=\"btn btn-success select-image-button\">
                    <i class=\"glyphicon glyphicon-edit glyphicon-white\"></i> {% trans %}Edit{% endtrans %}
                </span>
            </div>
            <div id=\"image_preview_image_{{form[name].vars.id}}\">
                {% if not options.fieldImage %}
                    {% if form[name].vars.value %}
                        <img src=\"/{{ options.uploadConfig.webDir ~ '/' ~ form[name].vars.value }}?{{ 'now'  | date('U') }}\" id=\"{{ form[name].vars.id }}_preview\" style=\"{{ options.uploadConfig.saveOriginal ? 'cursor:hand; cursor: pointer' : ''}}\"/>
                    {% else %}
                        <img data-src=\"holder.js/{{ options.cropConfig.minWidth }}x{{ options.cropConfig.minHeight}}\" id=\"{{ form[name].vars.id }}_preview\"/>
                    {% endif %}
                {% else %}
                    {% if form[name].vars.value %}
                        <img src=\"/{{ (options.uploadConfig.webDir ~ '/' ~ form[name].vars.value)|thumb(options.fieldImage.maxWidth, options.fieldImage.maxHeight) }}?{{ 'now'  | date('U') }}\" id=\"{{ form[name].vars.id }}_preview\" style=\"{{ options.uploadConfig.saveOriginal ? 'cursor:hand; cursor: pointer' : ''}}\"/>
                    {% else %}
                        <img data-src=\"holder.js/{{ options.fieldImage.maxWidth }}x{{ options.fieldImage.maxHeight}}\" id=\"{{ form[name].vars.id }}_preview\"/>
                    {% endif %}
                {% endif %}

            </div>
        </div>
    {% endspaceless %}

    <script>
        \$(document).ready(function(){
            Holder.run();
            {% if options.uploadConfig.saveOriginal %}
                if(\$('#{{ form[options.uploadConfig.saveOriginal].vars.id }}').val()){
                    \$('#{{ form[name].vars.id }}_preview').click(function(e){
                        // console.log(e.target);
                        if(\$( e.target ).is( \"img\" )){
                            \$('<div class=\"modal hide fade\"><img src=\"/{{options.uploadConfig.webDir}}/{{ form[options.uploadConfig.saveOriginal].vars.value }}\"/></div>').modal();
                            return false;
                        }
                    });
                }
            {% endif %}
            \$('#image_preview_{{ form[name].vars.id }}.select-image-button .image_edit_button').click(function(event){
                var options = \$.parseJSON('{{ options | json_encode() | raw }}');
                {% if options.uploadConfig.saveOriginal %}
                    options['originalImageFieldId'] = '{{ form[options.uploadConfig.saveOriginal].vars.id }}';
                {% endif %}
                initializeImageManager('{{ form[name].vars.id }}', options);
                // console.log('{{form[name].vars.id}} onclick');
                \$('#image_upload_modal').modal('show');
            });
        });
        \$('.select-image-button').mouseover(function(){
            if(!\$(this).hasClass('hide-disabled'))
                \$(this).children('.image_edit_button').removeClass('hidden');
        });
        \$('.select-image-button').mouseout(function(){
            if(!\$(this).hasClass('hide-disabled'))
                \$(this).children('.image_edit_button').addClass('hidden');
        });

    </script>
{% endblock %}

{% block comur_gallery_widget %}
    {% trans_default_domain comur_translation_domain %}
    {# trans_default_domain 'ComurImageBundle' #}

    {% spaceless %}

        <div class=\"field-error clearfix hidden\">
            <div id=\"{{form[name].vars.id}}_widget_error\" class=\"alert alert-danger span6\">
            </div>
        </div>
        <div id=\"gallery_preview_{{form[name].vars.id}}\" class=\"well\" data-name=\"{{form[name].vars.full_name}}\">

            {% for image in form[name] %}
                <div class=\"gallery-image-container\" data-image=\"{{ image.vars.value }}\">
                    <span class=\"gallery-image-helper\"></span>
                    {{ form_widget(image) }}
                    <span class=\"remove-image\"><i class=\"glyphicon glyphicon-remove\" data-delete=\"image\"></i></span>
                    <img src=\"/{{ (options.uploadConfig.webDir ~ '/' ~ image.vars.value)|thumb(options.galleryThumbSize, options.galleryThumbSize) }}?{{ 'now'  | date('U') }}\"/>
                </div>
            {% endfor %}
        </div>
        <div class=\"image_add_button\" id=\"image_add_button_{{form[name].vars.id}}\">
            <span class=\"btn btn-success add-image-button\">
                <i class=\"glyphicon glyphicon-picture glyphicon-white\"></i> {% trans %}Add image{% endtrans %}
            </span>
        </div>

    {% endspaceless %}

    <script>

        \$(document).ready(function(){
            rebindGalleryRemove();
            galleries['{{form[name].vars.id}}'] = true;
            \$('#image_add_button_{{form[name].vars.id}}').click(function(event){
                initializeImageManager('{{ form[name].vars.id }}', \$.parseJSON('{{ options | json_encode() | raw }}'));
                \$('#image_upload_modal').modal('show');
            });
            \$( \"#gallery_preview_{{form[name].vars.id}}\" ).sortable({
                placeholder: \"gallery-image-container placeholder\",
                update: function(e, ui){
                    reorderItems('gallery_preview_{{form[name].vars.id}}');
                }
            });
            \$( \"#gallery_preview_{{form[name].vars.id}}\" ).disableSelection();
        });

    </script>
{% endblock %}
", "ComurImageBundle:Form:fields.html.twig", "/home/oqroomsc/public_html/oqroom/vendor/comur/image-bundle/Comur/ImageBundle/Resources/views/Form/fields.html.twig");
    }
}
