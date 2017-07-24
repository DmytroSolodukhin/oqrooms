<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e7a90de1692e9d387ebfa3f4f4da09afb922587105543d746dc63bdf0e4c9a7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44d6fe7241f50390261096edb809c7162a33f5c7d54905392abd7f19cd71be46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d6fe7241f50390261096edb809c7162a33f5c7d54905392abd7f19cd71be46->enter($__internal_44d6fe7241f50390261096edb809c7162a33f5c7d54905392abd7f19cd71be46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44d6fe7241f50390261096edb809c7162a33f5c7d54905392abd7f19cd71be46->leave($__internal_44d6fe7241f50390261096edb809c7162a33f5c7d54905392abd7f19cd71be46_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4121bae11a6027dc6303c0cc70e24ad8e4eb204e23c4e7bb463c80486d5b0b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4121bae11a6027dc6303c0cc70e24ad8e4eb204e23c4e7bb463c80486d5b0b7b->enter($__internal_4121bae11a6027dc6303c0cc70e24ad8e4eb204e23c4e7bb463c80486d5b0b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4121bae11a6027dc6303c0cc70e24ad8e4eb204e23c4e7bb463c80486d5b0b7b->leave($__internal_4121bae11a6027dc6303c0cc70e24ad8e4eb204e23c4e7bb463c80486d5b0b7b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_504e139688398b8bd38a94a29f09b044655cf4731d414dbb17e86448454c2614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504e139688398b8bd38a94a29f09b044655cf4731d414dbb17e86448454c2614->enter($__internal_504e139688398b8bd38a94a29f09b044655cf4731d414dbb17e86448454c2614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_504e139688398b8bd38a94a29f09b044655cf4731d414dbb17e86448454c2614->leave($__internal_504e139688398b8bd38a94a29f09b044655cf4731d414dbb17e86448454c2614_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fa8d58462a95c8d2e411aff645a68f038d9b066aa377d349474ce1b6bb16bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa8d58462a95c8d2e411aff645a68f038d9b066aa377d349474ce1b6bb16bb9->enter($__internal_2fa8d58462a95c8d2e411aff645a68f038d9b066aa377d349474ce1b6bb16bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2fa8d58462a95c8d2e411aff645a68f038d9b066aa377d349474ce1b6bb16bb9->leave($__internal_2fa8d58462a95c8d2e411aff645a68f038d9b066aa377d349474ce1b6bb16bb9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/oqroom/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
