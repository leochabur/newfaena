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
class __TwigTemplate_b32ff7ea6ed625c7a27fba303579047b6d43b4be964aa5e5f3b3e34afac758da extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    

    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Latest compiled and minified CSS -->
  ";
        // line 16
        if ( !(isset($context["fontawesome"]) || array_key_exists("fontawesome", $context))) {
            // line 17
            echo "    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
  ";
        }
        // line 19
        echo "  <!-- Bootstrap core CSS -->
  <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <!-- Material Design Bootstrap -->
  <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/css/mdb.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <!-- Your custom styles (optional) -->
  <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  
  <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/css/addons/datatables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  ";
        // line 27
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "    
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
        // line 60
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 61
            $context["perfilFaena"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "perfilFaena", []);
            // line 62
            $context["perfilVenta"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "perfilVenta", []);
            // line 63
            echo "    ";
            if ( !(isset($context["show_nav"]) || array_key_exists("show_nav", $context))) {
                // line 64
                echo "      ";
                $this->loadTemplate("::topnav.html.twig", "base.html.twig", 64)->display($context);
                // line 65
                echo "    ";
            }
        }
        // line 67
        echo "
<div class=\"container-fluid content\">
    ";
        // line 69
        $this->displayBlock('content', $context, $blocks);
        // line 70
        echo "</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/js/mdb.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/js/addons/datatables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("resources/js/bootbox.all.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 82
        if ( !(isset($context["fontawesome"]) || array_key_exists("fontawesome", $context))) {
            // line 83
            echo "    <script defer src=\"https://use.fontawesome.com/releases/v5.0.9/js/all.js\" integrity=\"sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl\" crossorigin=\"anonymous\"></script>
";
        }
        // line 85
        if ( !(isset($context["mask"]) || array_key_exists("mask", $context))) {
            // line 86
            echo "  <script type='text/javascript' src=\"https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js\"></script>
";
        }
        // line 88
        echo "<script type=\"text/javascript\">

  \$(document).ready(function()
  {
    ";
        // line 92
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 93
            echo "      ";
            if (($context["perfilFaena"] ?? $this->getContext($context, "perfilFaena"))) {
                // line 94
                echo "        function verificar() {
            value = \$('#value').text();
            \$.ajax({
                type: \"POST\",
                url: \"";
                // line 98
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vtas_ultimos_comprobantes_venta");
                echo "\",
                success: function(data) {
                    if (data.exists)
                    {
                      \$('.indicator').html('<a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink-333\" data-toggle=\"dropdown\" aria-haspopup=\"true\" ria-expanded=\"false\"><i class=\"fas fa-envelope fa-lg\"></i><span class=\"badge rounded-pill badge-notification bg-danger\">'+data.cant+'</span></a><div class=\"dropdown-menu dropdown-menu-right dropdown-default\"aria-labelledby=\"navbarDropdownMenuLink-333\"><a href=\"";
                // line 102
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vtas_comprobantes_pendientes");
                echo "\" class=\"dropdown-item\">Ver pendientes</a></div>');
                    }
                    else
                    {
                      \$('.indicator').empty();
                    }
                }
            });
        }
        verificar();
        setInterval(verificar, 30000);
      ";
            }
            // line 114
            echo "    ";
        }
        // line 115
        echo "    \$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
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
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "get", [0 => "javascript"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 131
            echo "    ";
            echo $context["js"];
            // line 132
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "  });
</script>
";
        // line 135
        $this->displayBlock('javascripts', $context, $blocks);
        // line 136
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Sapucai Gestion Faena";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 135
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  334 => 135,  317 => 69,  300 => 27,  282 => 13,  271 => 136,  269 => 135,  265 => 133,  259 => 132,  256 => 131,  252 => 130,  235 => 115,  232 => 114,  217 => 102,  210 => 98,  204 => 94,  201 => 93,  199 => 92,  193 => 88,  189 => 86,  187 => 85,  183 => 83,  181 => 82,  177 => 81,  173 => 80,  169 => 79,  165 => 78,  161 => 77,  157 => 76,  149 => 70,  147 => 69,  143 => 67,  139 => 65,  136 => 64,  133 => 63,  131 => 62,  129 => 61,  127 => 60,  93 => 28,  91 => 27,  87 => 26,  82 => 24,  77 => 22,  72 => 20,  69 => 19,  65 => 17,  63 => 16,  57 => 13,  51 => 10,  40 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"{{ asset('resources/img/favicon.ico') }}\">
    

    <title>{% block title %}Sapucai Gestion Faena{% endblock %}</title>

    <!-- Latest compiled and minified CSS -->
  {% if fontawesome is not defined%}
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
  {% endif %}
  <!-- Bootstrap core CSS -->
  <link rel=\"stylesheet\" href=\"{{ asset('resources/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
  <!-- Material Design Bootstrap -->
  <link rel=\"stylesheet\" href=\"{{ asset('resources/css/mdb.min.css') }}\" rel=\"stylesheet\">
  <!-- Your custom styles (optional) -->
  <link rel=\"stylesheet\" href=\"{{ asset('resources/css/style.css') }}\" rel=\"stylesheet\">
  
  <link href=\"{{ asset('resources/css/addons/datatables.min.css') }}\" rel=\"stylesheet\">
  {% block stylesheets %}{% endblock %}
    
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


{% if is_granted('IS_AUTHENTICATED_FULLY') %}
{% set perfilFaena = app.user.perfilFaena %}
{% set perfilVenta = app.user.perfilVenta %}
    {% if show_nav is not defined %}
      {% include '::topnav.html.twig' %}
    {% endif %}
{% endif %}

<div class=\"container-fluid content\">
    {% block content %}{% endblock %}
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"{{ asset('resources/js/jquery-3.4.1.min.js') }}\"></script>
<script src=\"{{ asset('resources/js/popper.min.js') }}\"></script>
<script src=\"{{ asset('resources/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('resources/js/mdb.min.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('resources/js/addons/datatables.min.js') }}\"></script>
<script src=\"{{ asset('resources/js/bootbox.all.min.js') }}\"></script>
{% if fontawesome is not defined%}
    <script defer src=\"https://use.fontawesome.com/releases/v5.0.9/js/all.js\" integrity=\"sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl\" crossorigin=\"anonymous\"></script>
{% endif %}
{% if mask is not defined %}
  <script type='text/javascript' src=\"https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js\"></script>
{% endif %}
<script type=\"text/javascript\">

  \$(document).ready(function()
  {
    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
      {% if perfilFaena %}
        function verificar() {
            value = \$('#value').text();
            \$.ajax({
                type: \"POST\",
                url: \"{{ path('vtas_ultimos_comprobantes_venta') }}\",
                success: function(data) {
                    if (data.exists)
                    {
                      \$('.indicator').html('<a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink-333\" data-toggle=\"dropdown\" aria-haspopup=\"true\" ria-expanded=\"false\"><i class=\"fas fa-envelope fa-lg\"></i><span class=\"badge rounded-pill badge-notification bg-danger\">'+data.cant+'</span></a><div class=\"dropdown-menu dropdown-menu-right dropdown-default\"aria-labelledby=\"navbarDropdownMenuLink-333\"><a href=\"{{ path('vtas_comprobantes_pendientes') }}\" class=\"dropdown-item\">Ver pendientes</a></div>');
                    }
                    else
                    {
                      \$('.indicator').empty();
                    }
                }
            });
        }
        verificar();
        setInterval(verificar, 30000);
      {% endif %}
    {% endif %}
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
    {% for js in app.session.flashbag.get('javascript') %}
    {% autoescape false %}{{ js }}{% endautoescape %}
    {% endfor %}
  });
</script>
{% block javascripts %}{% endblock %}
</body>
</html>", "base.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\app\\Resources\\views\\base.html.twig");
    }
}
