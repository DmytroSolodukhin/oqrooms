<?php

/* SonataUserBundle:Admin/Core:user_block.html.twig */
class __TwigTemplate_70da6a8b773e17bcca55dd897bfdabfe0da6a7f00c035025bf7c7a5048104d67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 14
            echo "        ";
            $context["_bg_class"] = "bg-light-blue";
            // line 15
            echo "        ";
            $context["_logout_uri"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sonata_user_admin_security_logout");
            // line 16
            echo "        ";
            $context["_logout_text"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_block_logout", array(), "SonataUserBundle");
            // line 17
            echo "        ";
            $context["_profile_uri"] = (($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : null), "userAdmin", array()), "isGranted", array(0 => "EDIT", 1 => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())), "method")) ? ($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : null), "userAdmin", array()), "generateUrl", array(0 => "edit", 1 => array("id" => $this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : null), "userAdmin", array()), "id", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())), "method"))), "method")) : ($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : null), "userAdmin", array()), "generateUrl", array(0 => "show", 1 => array("id" => $this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : null), "userAdmin", array()), "id", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())), "method"))), "method")));
            // line 18
            echo "        ";
            $context["_profile_text"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user_block_profile", array(), "SonataUserBundle");
            // line 19
            echo "        ";
            $context["_user_image"] = (($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : null), "defaultAvatar", array())) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : null), "defaultAvatar", array()))) : (null));
            // line 20
            echo "        ";
            // line 21
            echo "        ";
            // line 22
            echo "
        ";
            // line 23
            if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN") && $this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : null), "impersonating", array()))) {
                // line 24
                echo "            ";
                $context["_bg_class"] = "bg-light-green";
                // line 25
                echo "            ";
                $context["_logout_uri"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : null), "impersonating", array()), "route", array()), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : null), "impersonating", array()), "parameters", array()), array("_switch_user" => "_exit")));
                // line 26
                echo "            ";
                $context["_logout_text"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("switch_user_exit", array(), "SonataUserBundle");
                // line 27
                echo "        ";
            }
            // line 28
            echo "
        <li class=\"user-header ";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["_bg_class"]) ? $context["_bg_class"] : null), "html", null, true);
            echo "\">
            ";
            // line 30
            if ((isset($context["_user_image"]) ? $context["_user_image"] : null)) {
                // line 31
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["_user_image"]) ? $context["_user_image"] : null), "html", null, true);
                echo "\" class=\"img-circle\" alt=\"Avatar\" />
            ";
            }
            // line 33
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "html", null, true);
            echo "</p>
        </li>

";
            // line 42
            echo "
        <li class=\"user-footer\">
            <div class=\"pull-left\">
                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["_profile_uri"]) ? $context["_profile_uri"] : null), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-user\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["_profile_text"]) ? $context["_profile_text"] : null), "html", null, true);
            echo "</a>
            </div>

            <div class=\"pull-right\">
                <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["_logout_uri"]) ? $context["_logout_uri"] : null), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-sign-out fa-fw\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["_logout_text"]) ? $context["_logout_text"] : null), "html", null, true);
            echo "</a>
            </div>
        </li>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  107 => 49,  98 => 45,  93 => 42,  86 => 33,  80 => 31,  78 => 30,  74 => 29,  71 => 28,  68 => 27,  65 => 26,  62 => 25,  59 => 24,  57 => 23,  54 => 22,  52 => 21,  50 => 20,  47 => 19,  44 => 18,  41 => 17,  38 => 16,  35 => 15,  32 => 14,  29 => 13,  23 => 12,  20 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataUserBundle:Admin/Core:user_block.html.twig", "/Users/aleksandra/myaso/oqrooms/vendor/sonata-project/user-bundle/Resources/views/Admin/Core/user_block.html.twig");
    }
}
