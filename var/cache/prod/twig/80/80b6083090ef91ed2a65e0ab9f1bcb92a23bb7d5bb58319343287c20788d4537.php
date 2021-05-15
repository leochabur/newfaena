<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* FOSUserBundle:views/default:index.html.twig */
class __TwigTemplate_b70f3f8c9c5b3158cf88f893d4a6a8827d82e14e5d2bc15a23e8543085c73613 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:views/default:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1 class=\"text-center\">FOS User Bundle Tutorial</h1>
            </div>

            ";
        // line 10
        if ((isset($context["text"]) || array_key_exists("text", $context))) {
            // line 11
            echo "                <div>
                    ";
            // line 12
            echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 15
        echo "
            <h2>Members Options</h2>
            <ul>
                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("member_home");
        echo "\">Members Area</a></li>
                <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("member_create");
        echo "\">Create new content</a></li>
            </ul>

            <h2>Admin Options</h2>
            <ul>
                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_home");
        echo "\">Admin Area</a></li>
            </ul>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:views/default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 24,  70 => 19,  66 => 18,  61 => 15,  55 => 12,  52 => 11,  50 => 10,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "FOSUserBundle:views/default:index.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\vendor\\friendsofsymfony\\user-bundle/Resources/views/views/default/index.html.twig");
    }
}
