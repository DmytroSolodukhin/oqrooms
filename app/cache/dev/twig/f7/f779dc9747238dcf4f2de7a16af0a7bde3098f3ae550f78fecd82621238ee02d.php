<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_020a469f84c711c855703b71c07f737890a8e2980b027f26c3394cce358e9801 extends Twig_Template
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
        $__internal_a2a5649ecabdd8eb5e2420e0b62ab04eef654af4de9beb5999dae584d0f1d7ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a5649ecabdd8eb5e2420e0b62ab04eef654af4de9beb5999dae584d0f1d7ff->enter($__internal_a2a5649ecabdd8eb5e2420e0b62ab04eef654af4de9beb5999dae584d0f1d7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_a2a5649ecabdd8eb5e2420e0b62ab04eef654af4de9beb5999dae584d0f1d7ff->leave($__internal_a2a5649ecabdd8eb5e2420e0b62ab04eef654af4de9beb5999dae584d0f1d7ff_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_9cc96020cfbf0e2acf30bf71b349143f8ac0134400613d0673ce28f62c395a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc96020cfbf0e2acf30bf71b349143f8ac0134400613d0673ce28f62c395a0f->enter($__internal_9cc96020cfbf0e2acf30bf71b349143f8ac0134400613d0673ce28f62c395a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_9cc96020cfbf0e2acf30bf71b349143f8ac0134400613d0673ce28f62c395a0f->leave($__internal_9cc96020cfbf0e2acf30bf71b349143f8ac0134400613d0673ce28f62c395a0f_prof);

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
", "SonataBlockBundle:Block:block_base.html.twig", "/var/www/oqroom/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
