<?php

/* proveedores.html.twig */
class __TwigTemplate_32ec87c888e9ef05f44e4a82eaa238932ccbb2c68006e8987cd9696b0d150e92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "proveedores.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        echo " 
\t";
        // line 4
        $this->displayParentBlock("content", $context, $blocks);
        echo " 
\t<div class=\"col-md-9\">
               <div class=\"tab-providers hiding-window\">
               <div style=\"width: 80%; margin: auto; \">
\t\t        <h1 style=\"font-weight: 300\">Proveedores</h1>
     \t\t\t <table class=\"table table-bordered table-striped\">
     \t\t\t\t<thead>
     \t\t\t\t\t<tr>
     \t\t\t\t\t\t<th>
     \t\t\t\t\t\t\tProveedor
     \t\t\t\t\t\t</th>
     \t\t\t\t\t\t<th>
     \t\t\t\t\t\t\tEstado
     \t\t\t\t\t\t</th>
     \t\t\t\t\t</tr>
     \t\t\t\t</thead> 
     \t\t\t\t<tbody>
     \t\t\t\t\t<tr>
     \t\t\t\t\t\t<td>
     \t\t\t\t\t\t\tCVA
     \t\t\t\t\t\t</td>
     \t\t\t\t\t\t<td style=\"text-align: center;\">
     \t\t\t\t\t\t\t<span class=\"label label-success switch-provider\">
     \t\t\t\t\t\t\t\tActivo
     \t\t\t\t\t\t\t</span>
     \t\t\t\t\t\t</td>
     \t\t\t\t\t</tr>
     \t\t\t\t\t<tr>
     \t\t\t\t\t\t<td>
     \t\t\t\t\t\t\tTech Data
     \t\t\t\t\t\t</td>
     \t\t\t\t\t\t<td style=\"text-align: center;\">
     \t\t\t\t\t\t\t<span class=\"label label-success switch-provider\">
     \t\t\t\t\t\t\t\tActivo
     \t\t\t\t\t\t\t</span>
     \t\t\t\t\t\t</td>
     \t\t\t\t\t</tr>
     \t\t\t\t\t<tr>
     \t\t\t\t\t\t<td>
     \t\t\t\t\t\t\tIngram Micro
     \t\t\t\t\t\t</td>
     \t\t\t\t\t\t<td style=\"text-align: center;\">
     \t\t\t\t\t\t\t<span class=\"label label-success switch-provider\">
     \t\t\t\t\t\t\t\tActivo
     \t\t\t\t\t\t\t</span>
     \t\t\t\t\t\t</td>
     \t\t\t\t\t</tr>
     \t\t\t\t</tbody>
     \t\t\t</table>
     \t\t\t<div>
     \t\t\t <h4><a href=\"\">Solicitar nuevo servicio</a></h4>
     \t\t\t</div>
     \t\t</div>
     \t</div>\t
\t</div>
\t<div class=\"col-md-3\">
\t\t";
        // line 60
        echo twig_include($this->env, $context, "sidebar.html.twig");
        echo "
\t</div>
";
    }

    public function getTemplateName()
    {
        return "proveedores.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 60,  33 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block content %} 
\t{{parent()}} 
\t<div class=\"col-md-9\">
               <div class=\"tab-providers hiding-window\">
               <div style=\"width: 80%; margin: auto; \">
\t\t        <h1 style=\"font-weight: 300\">Proveedores</h1>
     \t\t\t <table class=\"table table-bordered table-striped\">
     \t\t\t\t<thead>
     \t\t\t\t\t<tr>
     \t\t\t\t\t\t<th>
     \t\t\t\t\t\t\tProveedor
     \t\t\t\t\t\t</th>
     \t\t\t\t\t\t<th>
     \t\t\t\t\t\t\tEstado
     \t\t\t\t\t\t</th>
     \t\t\t\t\t</tr>
     \t\t\t\t</thead> 
     \t\t\t\t<tbody>
     \t\t\t\t\t<tr>
     \t\t\t\t\t\t<td>
     \t\t\t\t\t\t\tCVA
     \t\t\t\t\t\t</td>
     \t\t\t\t\t\t<td style=\"text-align: center;\">
     \t\t\t\t\t\t\t<span class=\"label label-success switch-provider\">
     \t\t\t\t\t\t\t\tActivo
     \t\t\t\t\t\t\t</span>
     \t\t\t\t\t\t</td>
     \t\t\t\t\t</tr>
     \t\t\t\t\t<tr>
     \t\t\t\t\t\t<td>
     \t\t\t\t\t\t\tTech Data
     \t\t\t\t\t\t</td>
     \t\t\t\t\t\t<td style=\"text-align: center;\">
     \t\t\t\t\t\t\t<span class=\"label label-success switch-provider\">
     \t\t\t\t\t\t\t\tActivo
     \t\t\t\t\t\t\t</span>
     \t\t\t\t\t\t</td>
     \t\t\t\t\t</tr>
     \t\t\t\t\t<tr>
     \t\t\t\t\t\t<td>
     \t\t\t\t\t\t\tIngram Micro
     \t\t\t\t\t\t</td>
     \t\t\t\t\t\t<td style=\"text-align: center;\">
     \t\t\t\t\t\t\t<span class=\"label label-success switch-provider\">
     \t\t\t\t\t\t\t\tActivo
     \t\t\t\t\t\t\t</span>
     \t\t\t\t\t\t</td>
     \t\t\t\t\t</tr>
     \t\t\t\t</tbody>
     \t\t\t</table>
     \t\t\t<div>
     \t\t\t <h4><a href=\"\">Solicitar nuevo servicio</a></h4>
     \t\t\t</div>
     \t\t</div>
     \t</div>\t
\t</div>
\t<div class=\"col-md-3\">
\t\t{{ include('sidebar.html.twig') }}
\t</div>
{% endblock %}
", "proveedores.html.twig", "C:\\xampp\\htdocs\\GIT\\OMGstock\\stockOMG\\OMGstocks\\templates\\proveedores.html.twig");
    }
}
