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

/* base.html.twig */
class __TwigTemplate_ee30a57d623cec87171347d272fe3ead0c6f7cadd5f4a59178b5ba6d74ba9677 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/img/favicon.ico"), "html", null, true);
        echo "\">
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Latest compiled and minified CSS -->

    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
  <!-- Bootstrap core CSS -->
  <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <!-- Material Design Bootstrap -->
  <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/css/mdb.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <!-- Your custom styles (optional) -->
  <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/css/addons/datatables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    <!-- Latest compiled and minified JavaScript -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <style type=\"text/css\">
      .dropdown-submenu {
        position: relative;
      }

      .dropdown-submenu a::after {
        transform: rotate(-90deg);
        position: absolute;
        right: 6px;
        top: .8em;
      }

      .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-left: .1rem;
        margin-right: .1rem;
      }
    </style>
</head>

<body>
";
        // line 56
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 57
            echo "    ";
            $this->loadTemplate("::topnav.html.twig", "base.html.twig", 57)->display($context);
        }
        // line 59
        echo "
<div class=\"container content\">
    ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 62
        echo "</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/js/mdb.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/js/addons/datatables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/js/bootbox.all.min.js"), "html", null, true);
        echo "\"></script>

";
        // line 75
        $this->displayBlock('javascripts', $context, $blocks);
        // line 76
        echo "<script type=\"text/javascript\">
\$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!\$(this).next().hasClass('show')) {
    \$(this).parents('.dropdown-menu').first().find('.show').removeClass(\"show\");
  }
  var \$subMenu = \$(this).next(\".dropdown-menu\");
  \$subMenu.toggleClass('show');


  \$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    \$('.dropdown-submenu .show').removeClass(\"show\");
  });


  return false;
});
    ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "flashbag", []), "get", [0 => "javascript"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 93
            echo "    ";
            echo $context["js"];
            // line 94
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "</script>
</body>
</html>";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        echo "Sapucai Gestion Faena";
    }

    // line 61
    public function block_content($context, array $blocks = [])
    {
    }

    // line 75
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 75,  207 => 61,  201 => 13,  196 => 11,  190 => 95,  184 => 94,  181 => 93,  177 => 92,  159 => 76,  157 => 75,  152 => 73,  148 => 72,  144 => 71,  140 => 70,  136 => 69,  132 => 68,  124 => 62,  122 => 61,  118 => 59,  114 => 57,  112 => 56,  78 => 25,  73 => 23,  68 => 21,  63 => 19,  54 => 13,  51 => 12,  49 => 11,  45 => 10,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\app\\Resources\\views\\base.html.twig");
    }
}
