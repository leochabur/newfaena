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

/* GestionFaenaBundle:exportacion:detallePallet.html.twig */
class __TwigTemplate_85d73129f0cc21949f8e333f6d5ae38b140067b459c851c2caa83fe277310a6e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:exportacion:detallePallet.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GestionFaenaBundle:exportacion:detallePallet.html.twig"));

        // line 1
        echo "

          <table class=\"table table-striped table-bordered table-hover table-sm \">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Articulo</th>
                  <th>Fecha Elaboracion</th>
                  <th>Cantidad</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pallet"] ?? $this->getContext($context, "pallet")), "valores", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 15
            echo "                  <tr>
                    <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["t"], "movimiento", []), "artProcFaena", []), "articulo", []), "html", null, true);
            echo "</td>   
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["t"], "faenaDiaria", []), "fechaFaena", []), "d/m/Y"), "html", null, true);
            echo "</td>          
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "data", []), "html", null, true);
            echo "</td>
                    <td> <a href=\"#\" data-valor=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "id", []), "html", null, true);
            echo "\" data-pallet=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pallet"] ?? $this->getContext($context, "pallet")), "id", []), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger delete-romaneo\">Eliminar</a></td>
                  </tr>
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "              </tbody>
          </table>


  <script type=\"text/javascript\">
    \$('.delete-romaneo').click(function(event){
                          event.preventDefault();
                          var val = \$(this);
                          deleteMovimiento(val.data('pallet'), val.data('valor'));
    });
  </script>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "GestionFaenaBundle:exportacion:detallePallet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 23,  87 => 20,  83 => 19,  79 => 18,  75 => 17,  71 => 16,  68 => 15,  51 => 14,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("

          <table class=\"table table-striped table-bordered table-hover table-sm \">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Articulo</th>
                  <th>Fecha Elaboracion</th>
                  <th>Cantidad</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              {% for t in pallet.valores %}
                  <tr>
                    <td>{{ loop.index }}</td>
                    <td>{{ t.movimiento.artProcFaena.articulo }}</td>   
                    <td>{{ t.faenaDiaria.fechaFaena|date('d/m/Y') }}</td>          
                    <td>{{ t.data }}</td>
                    <td> <a href=\"#\" data-valor=\"{{ t.id }}\" data-pallet=\"{{ pallet.id }}\" class=\"btn btn-sm btn-danger delete-romaneo\">Eliminar</a></td>
                  </tr>
                {% endfor %}
              </tbody>
          </table>


  <script type=\"text/javascript\">
    \$('.delete-romaneo').click(function(event){
                          event.preventDefault();
                          var val = \$(this);
                          deleteMovimiento(val.data('pallet'), val.data('valor'));
    });
  </script>

", "GestionFaenaBundle:exportacion:detallePallet.html.twig", "E:\\proyectos\\sapucai\\gestionFaena\\src\\GestionFaenaBundle/Resources/views/exportacion/detallePallet.html.twig");
    }
}
