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

/* @GestionFaena/faena/listFaenaDiaria.html.twig */
class __TwigTemplate_bc5ae0b5d717dc813d1e7a4a8f8602f37e8e023a04a31b3e88b638afd852702d extends \Twig\Template
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
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@GestionFaena/faena/listFaenaDiaria.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = [])
    {
        // line 5
        echo "<br>
<hr>
<span class=\"h5 card-title\">Listado Faenas Generadas</span>
<hr>
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? null), "flashes", [0 => "sussecc"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "\t<div class=\"alert alert-success\" role=\"alert\">
\t  ";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t<table class=\"table table-striped table-bordered table-hover table-sm \">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>#</th>
\t\t\t\t\t<th>Fecha Faena</th>
\t\t\t\t\t<th>Estado</th>
\t\t\t\t\t<th>Fecha/Hora Apertura</th>
\t\t\t\t\t<th>Usuario Inicio</th>
\t\t\t\t\t<th>Fecha/Hora Cierre</th>
\t\t\t\t\t<th>Usuario Cierre</th>
\t\t\t\t\t<th></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t
\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["faenas"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 30
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $context["f"], "html", null, true);
            echo "</td>\t
\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "state", []), "html", null, true);
            echo "</td>\t\t\t\t\t\t
\t\t\t\t\t\t<td>";
            // line 34
            ((twig_test_empty($this->getAttribute($context["f"], "fechaAlta", []))) ? (print ("")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["f"], "fechaAlta", []), "d/m/Y - H:i"), "html", null, true))));
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "userCreate", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 36
            ((twig_test_empty($this->getAttribute($context["f"], "fechaCierre", []))) ? (print ("")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["f"], "fechaCierre", []), "d/m/Y - H:i"), "html", null, true))));
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "userClose", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_view_procesos_faena_diaria", ["fan" => $this->getAttribute($context["f"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-success btn-sm \" >Gestionar...</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_fan_day_close", ["id" => $this->getAttribute($context["f"], "id", [])]), "html", null, true);
            echo "\" data-action=\"cerrar\" class=\"btn btn-warning btn-sm btn-close\" data-index=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
            echo "\">Cerrar</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bd_fan_day_delete", ["id" => $this->getAttribute($context["f"], "id", [])]), "html", null, true);
            echo "\" data-action=\"eliminar\" class=\"btn btn-danger btn-sm btn-close\" data-index=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
            echo "\">Eliminar</a>
\t\t\t\t\t\t\t<button class=\"btn btn-primary dropdown-toggle mr-4 btn-sm\" type=\"button\" data-toggle=\"dropdown\"
  aria-haspopup=\"true\" aria-expanded=\"false\">Informes</button>

<div class=\"dropdown-menu\">
  <a class=\"dropdown-item\" target=\"_blanck\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planilla_control_antemorten", ["fanday" => $this->getAttribute($context["f"], "id", [])]), "html", null, true);
            echo "\">Planilla Control Ante-Mortem</a>
  <a class=\"dropdown-item\" href=\"#\">Informe I</a>
  <a class=\"dropdown-item\" href=\"#\">Iforme II</a>
  <div class=\"dropdown-divider\"></div>
  <a class=\"dropdown-item\" href=\"#\">Informe III</a>
</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t\t</tbody>
\t\t\t</table>






";
    }

    // line 65
    public function block_javascripts($context, array $blocks = [])
    {
        // line 66
        echo "
<script type=\"text/javascript\">

\t\$('.btn-close').click(function(event){
\t\t\t\t\t\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\t\t\t\t\t\tvar btn = \$(this);
\t\t\t\t\t\t\t\t\t\t\tbootbox.confirm({
\t\t\t\t\t\t\t\t\t\t\t    message: \"Seguro \"+btn.data('action')+\" la faena # \"+btn.data('index')+\"?\",
\t\t\t\t\t\t\t\t\t\t\t    buttons: {
\t\t\t\t\t\t\t\t\t\t\t        confirm: {
\t\t\t\t\t\t\t\t\t\t\t            label: 'Si',
\t\t\t\t\t\t\t\t\t\t\t            className: 'btn-success'
\t\t\t\t\t\t\t\t\t\t\t        },
\t\t\t\t\t\t\t\t\t\t\t        cancel: {
\t\t\t\t\t\t\t\t\t\t\t            label: 'No',
\t\t\t\t\t\t\t\t\t\t\t            className: 'btn-danger'
\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t    },
\t\t\t\t\t\t\t\t\t\t\t    callback: function (result) {
\t\t\t\t\t\t\t\t\t\t\t        if (result){
\t\t\t\t\t\t\t\t\t\t\t        \t\$.post(btn.attr('href'),
\t\t\t\t\t\t\t\t\t\t\t        \t\t   function(data){
\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\tif (data.status)
\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\tlocation.reload();
\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\telse
\t\t\t\t\t\t\t\t\t\t\t        \t\t   \t\t\tbootbox.alert(data.msge);
\t\t\t\t\t\t\t\t\t\t\t        \t\t   });
\t\t\t\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t\t\t\t});
\t});


\t\$('.view-art').click(function(){
\t\t\t\t\t\t\t\t\tvar url = \"";
        // line 100
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
        return "@GestionFaena/faena/listFaenaDiaria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 100,  189 => 66,  186 => 65,  174 => 55,  151 => 46,  141 => 41,  135 => 40,  131 => 39,  126 => 37,  122 => 36,  118 => 35,  114 => 34,  110 => 33,  106 => 32,  102 => 31,  99 => 30,  82 => 29,  65 => 14,  56 => 11,  53 => 10,  49 => 9,  43 => 5,  40 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@GestionFaena/faena/listFaenaDiaria.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle\\Resources\\views\\faena\\listFaenaDiaria.html.twig");
    }
}
