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

/* GestionFaenaBundle::procesoEdit.html.twig */
class __TwigTemplate_c85a4e51fda4dcbcc56d8eedc8fa46ba3a602906391a841372dcbdd38ece40b4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'fos_user_content' => [$this, 'block_fos_user_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "GestionFaenaBundle::procesoEdit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = [])
    {
        // line 5
        echo "\t<br>
\t<p class=\"h4\">Editar proceso</p>

\t

\t    <p class=\"h4 mb-4 text-center\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["proccess"] ?? null), "nombre", []), "html", null, true);
        echo "</p>
\t\t<div class=\"row\">
\t\t  <div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t  <div class=\"card-header\">
\t\t\t\t    Articulos asignados
\t\t\t\t  </div>
\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t  \t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["proccess"] ?? null), "articulos", []));
        foreach ($context['_seq'] as $context["_key"] => $context["art"]) {
            // line 20
            echo "\t\t\t\t\t  <a href=\"#!\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["art"], "id", []), "html", null, true);
            echo "\" class=\"view-art list-group-item list-group-item-action\">";
            echo twig_escape_filter($this->env, $context["art"], "html", null, true);
            echo "</a>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['art'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t\t\t</div>
\t\t\t\t    <a href=\"#\" class=\"btn btn-primary\">Agregar nuevo</a>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t  <div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t  <div class=\"card-header\">
\t\t\t\t     Reporta articulos a...
\t\t\t\t  </div>
\t\t\t\t  <div class=\"card-body\">
\t\t\t\t  <div class=\"list-group\">
\t\t\t\t\t  \t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["proccess"] ?? null), "procesosDestino", []));
        foreach ($context['_seq'] as $context["_key"] => $context["send"]) {
            // line 35
            echo "\t\t\t\t\t\t  <a href=\"#!\" class=\"list-group-item list-group-item-action\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["send"], "nombre", []), "html", null, true);
            echo "</a>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['send'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t\t
\t\t\t\t  </div>
\t\t\t\t  <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#modalSubscriptionForm\">Agregar proceso</button>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t  </div>
\t\t</div>
\t\t<br>
\t\t<div class=\"row\">
\t\t  <div class=\"col-6\">
\t\t\t\t<div class=\"card\">
\t\t\t\t  <div class=\"card-header\">
\t\t\t\t    Configurar manejo stock
\t\t\t\t  </div>
\t\t\t\t  <div class=\"card-body\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Articulo</th>
\t\t\t\t\t\t\t\t\t\t<th>Atributo</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["proccess"] ?? null), "manejosStock", []));
        foreach ($context['_seq'] as $context["_key"] => $context["proceso"]) {
            // line 60
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["proceso"], "articulo", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["proceso"], "atributo", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proceso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t  \t";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["stock"] ?? null), 'form_start');
        echo "
\t\t\t\t  \t\t<div class=\"form-row align-items-center\">
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stock"] ?? null), "articulo", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stock"] ?? null), "atributo", []), 'widget', ["attr" => ["class" => "form-control-sm"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t\t<div class=\"col\">
\t\t\t\t  \t\t\t\t";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["stock"] ?? null), "asignar", []), 'widget', ["attr" => ["class" => "btn btn-sm btn-success btn-block"]]);
        echo "
\t\t\t\t  \t\t\t</div>
\t\t\t\t  \t\t</div>
\t\t\t\t  \t
\t\t\t\t  \t";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["stock"] ?? null), 'form_end');
        echo "
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


<div class=\"modal fade\" id=\"modalSubscriptionForm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header text-center\">
        <h4 class=\"modal-title w-100 font-weight-bold\">Agregar proceso destino</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body mx-3\">
\t\t\t";
        // line 98
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "sender"]]);
        echo "
\t\t\t";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
\t\t\t";
        // line 100
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"viewArticle\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog modal-xl\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header text-center\">
        <h4 class=\"modal-title w-100 font-weight-bold\">Detalle Articulo</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body mx-3 modal-body-article\">

      </div>
    </div>
  </div>
</div>
";
    }

    // line 124
    public function block_javascripts($context, array $blocks = [])
    {
        // line 125
        echo "
<script type=\"text/javascript\">
\t\$('.view-art').click(function(){
\t\t\t\t\t\t\t\t\tvar url = \"";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_view_art_proc_fan", ["articulo" => "id_article"]);
        echo "\"; 
\t\t\t\t\t\t\t\t\turl = url.replace('id_article', \$(this).data('id'));
\t\t\t\t\t\t\t\t\t\$('.modal-body-article').load(url);
\t\t\t\t\t\t\t\t\t\$('#viewArticle').modal('show');
\t});

\t\$('.sender').submit(function (event){
\t\t\t\t\t\t\t\t\t\t event.preventDefault();
\t\t\t\t\t\t\t\t\t\t var form = \$(this);
\t\t\t\t\t\t\t\t\t\t \$.post(form.attr('action'),
\t\t\t\t\t\t\t\t\t\t \t\tform.serialize(),
\t\t\t\t\t\t\t\t\t\t \t\tfunction(data){
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\tif (data.status)
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t{

\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\telse
\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t{

\t\t\t\t\t\t\t\t\t\t \t\t\t\t\t\t}


\t\t\t\t\t\t\t\t\t\t \t\t});
\t\t\t\t\t\t\t\t\t\t
\t});
</script>

";
    }

    public function getTemplateName()
    {
        return "GestionFaenaBundle::procesoEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 128,  237 => 125,  234 => 124,  207 => 100,  203 => 99,  199 => 98,  178 => 80,  171 => 76,  165 => 73,  159 => 70,  153 => 67,  149 => 65,  140 => 62,  136 => 61,  133 => 60,  129 => 59,  104 => 36,  95 => 35,  91 => 34,  77 => 22,  66 => 20,  62 => 19,  50 => 10,  43 => 5,  40 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "GestionFaenaBundle::procesoEdit.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/procesoEdit.html.twig");
    }
}
