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

/* FOSUserBundle:views/members_area:members.html.twig */
class __TwigTemplate_437d0b733b6558adde1b3c2dee2ca15264deee581a317b22986fefd9b5fc4c95 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:views/members_area:members.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <h1>Welcome to the Members Area</h1>

            <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("member_create");
        echo "\">Create new Content</a>

            ";
        // line 10
        if ((isset($context["content"]) || array_key_exists("content", $context))) {
            // line 11
            echo "                <ul>
                    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 13
                echo "                        <li>
                            Edit : <a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("member_edit", ["id" => $this->getAttribute($context["c"], "id", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", []), "html", null, true);
                echo "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                </ul>
            ";
        }
        // line 19
        echo "
            ";
        // line 20
        if ((isset($context["text"]) || array_key_exists("text", $context))) {
            // line 21
            echo "            <p>";
            echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
            echo "</p>
            ";
        }
        // line 23
        echo "
            <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("member_home");
        echo "\">Back to Member menu</a>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:views/members_area:members.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 24,  91 => 23,  85 => 21,  83 => 20,  80 => 19,  76 => 17,  65 => 14,  62 => 13,  58 => 12,  55 => 11,  53 => 10,  48 => 8,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "FOSUserBundle:views/members_area:members.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\vendor\\friendsofsymfony\\user-bundle/Resources/views/views/members_area/members.html.twig");
    }
}
