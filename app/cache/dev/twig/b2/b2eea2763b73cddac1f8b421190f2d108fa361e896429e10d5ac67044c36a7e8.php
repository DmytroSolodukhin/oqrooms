<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_61da26ef3a92a499020bd0398a289bbf92b4167d93d13a47facaccabdf4a0368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f376b0c55d6c4a70b8e883d5e2b0bd64f5697b81df683b84d4e3bf21f71c1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f376b0c55d6c4a70b8e883d5e2b0bd64f5697b81df683b84d4e3bf21f71c1a8->enter($__internal_8f376b0c55d6c4a70b8e883d5e2b0bd64f5697b81df683b84d4e3bf21f71c1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_8f376b0c55d6c4a70b8e883d5e2b0bd64f5697b81df683b84d4e3bf21f71c1a8->leave($__internal_8f376b0c55d6c4a70b8e883d5e2b0bd64f5697b81df683b84d4e3bf21f71c1a8_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_e1185bd9d700eeb053ac5b8adb39a8d1a4b3a1c862ff96b44934247a07c30049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1185bd9d700eeb053ac5b8adb39a8d1a4b3a1c862ff96b44934247a07c30049->enter($__internal_e1185bd9d700eeb053ac5b8adb39a8d1a4b3a1c862ff96b44934247a07c30049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_e1185bd9d700eeb053ac5b8adb39a8d1a4b3a1c862ff96b44934247a07c30049->leave($__internal_e1185bd9d700eeb053ac5b8adb39a8d1a4b3a1c862ff96b44934247a07c30049_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "/home/oqroomsc/public_html/oqroom/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
