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

/* ::base.html.twig */
class __TwigTemplate_dead3809b7508ef2c5a8c33e232540bd374427dc50dcf59774d4cc6f3b9d501f extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
            $context["perfilFaena"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []), "perfilFaena", []);
            // line 62
            $context["perfilVenta"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []), "perfilVenta", []);
            // line 63
            echo "    ";
            if ( !(isset($context["show_nav"]) || array_key_exists("show_nav", $context))) {
                // line 64
                echo "      ";
                $this->loadTemplate("::topnav.html.twig", "::base.html.twig", 64)->display($context);
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
            if ((isset($context["perfilFaena"]) ? $context["perfilFaena"] : $this->getContext($context, "perfilFaena"))) {
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", []), "flashbag", []), "get", [0 => "javascript"], "method"));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Sapucai Gestion Faena";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 69
    public function block_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 135
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 135,  299 => 69,  288 => 27,  276 => 13,  268 => 136,  266 => 135,  262 => 133,  256 => 132,  253 => 131,  249 => 130,  232 => 115,  229 => 114,  214 => 102,  207 => 98,  201 => 94,  198 => 93,  196 => 92,  190 => 88,  186 => 86,  184 => 85,  180 => 83,  178 => 82,  174 => 81,  170 => 80,  166 => 79,  162 => 78,  158 => 77,  154 => 76,  146 => 70,  144 => 69,  140 => 67,  136 => 65,  133 => 64,  130 => 63,  128 => 62,  126 => 61,  124 => 60,  90 => 28,  88 => 27,  84 => 26,  79 => 24,  74 => 22,  69 => 20,  66 => 19,  62 => 17,  60 => 16,  54 => 13,  48 => 10,  37 => 1,);
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
</html>", "::base.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\app\\Resources\\views\\base.html.twig");
    }
}
