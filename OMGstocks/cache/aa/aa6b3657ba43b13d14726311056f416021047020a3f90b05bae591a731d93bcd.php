<?php

/* configuracion.html.twig */
class __TwigTemplate_68189fef93d8ed54a452995106f4710e8c43e0c9781b0eff3c3c3c6220b3dd42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "configuracion.html.twig", 1);
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
\t<div class=\"col-md-12\">
\t\t<h1>Configuración</h1>
\t\t <div class=\"export-controllers\">
\t\t  \t<button id=\"export-all\" class=\"btn-sty1\">EXPORTAR</button>
\t\t  \t<button id=\"delete-all\" class=\"btn-sty1\">Borrar todo</button>
\t\t  \t <select class=\"form-control\" id=\"empresa-ws\">
\t\t\t\t<option>CVA</option>
\t\t\t\t<option>Tech Data</option>
\t\t\t\t<option>Ingram</option>
\t\t\t </select>
\t\t  </div>
\t\t  \t<!-- loading --> 
\t\t    <div id=\"loading\">
\t    \t\t<p></p>
\t\t\t\t<div class=\"container-space\">
\t\t\t\t\t<span>Cargando...</span>
\t\t\t\t\t<div class=\"element-space\">
\t\t\t\t\t</div> 
\t\t\t\t</div>
\t\t    </div>
\t\t    <!-- tabla CVA --> 
\t\t\t\t<div id=\"cvaDiv\" style=\"width: 100%; overflow-x: visible;\">
\t\t\t\t\t<hr>
\t\t\t\t\t<div>\t\t
\t\t\t\t\t    <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" style=\"width: 100%; overflow-x: visible; font-size: 12px;\">
\t\t\t\t      \t  <thead> </thead> 
\t\t\t\t     \t   <tbody></tbody>
\t\t\t\t   \t\t </table>
\t\t\t\t\t</div>
\t\t\t\t</div>
            <!-- tabla techData --> 
\t\t\t\t<div id=\"techDataDiv\" class=\"inactive\">
\t\t\t\t\t<table id=\"techData\" class=\"display\" cellspacing=\"0\" width=\"100%\" style=\"font-size: 10px;\">
\t\t\t      \t  <thead> </thead>
\t\t\t     \t   <tbody></tbody>
\t\t\t   \t\t </table>
\t\t\t\t</div>
            <!-- tabla ingram --> 
\t\t\t   <div id=\"ingramDiv\" class=\"inactive\">
\t\t\t\t\t<table id=\"ingram\" class=\"display table\" cellspacing=\"0\" width=\"100%\" style=\"font-size: 10px;\">
\t\t\t      \t   <thead></thead>
\t\t\t     \t   <tbody></tbody>
\t\t\t   \t\t </table>
\t\t\t\t</div> \t\t
\t</div>
";
    }

    public function getTemplateName()
    {
        return "configuracion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  28 => 3,  11 => 1,);
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
\t<div class=\"col-md-12\">
\t\t<h1>Configuración</h1>
\t\t <div class=\"export-controllers\">
\t\t  \t<button id=\"export-all\" class=\"btn-sty1\">EXPORTAR</button>
\t\t  \t<button id=\"delete-all\" class=\"btn-sty1\">Borrar todo</button>
\t\t  \t <select class=\"form-control\" id=\"empresa-ws\">
\t\t\t\t<option>CVA</option>
\t\t\t\t<option>Tech Data</option>
\t\t\t\t<option>Ingram</option>
\t\t\t </select>
\t\t  </div>
\t\t  \t<!-- loading --> 
\t\t    <div id=\"loading\">
\t    \t\t<p></p>
\t\t\t\t<div class=\"container-space\">
\t\t\t\t\t<span>Cargando...</span>
\t\t\t\t\t<div class=\"element-space\">
\t\t\t\t\t</div> 
\t\t\t\t</div>
\t\t    </div>
\t\t    <!-- tabla CVA --> 
\t\t\t\t<div id=\"cvaDiv\" style=\"width: 100%; overflow-x: visible;\">
\t\t\t\t\t<hr>
\t\t\t\t\t<div>\t\t
\t\t\t\t\t    <table id=\"example\" class=\"display\" cellspacing=\"0\" width=\"100%\" style=\"width: 100%; overflow-x: visible; font-size: 12px;\">
\t\t\t\t      \t  <thead> </thead> 
\t\t\t\t     \t   <tbody></tbody>
\t\t\t\t   \t\t </table>
\t\t\t\t\t</div>
\t\t\t\t</div>
            <!-- tabla techData --> 
\t\t\t\t<div id=\"techDataDiv\" class=\"inactive\">
\t\t\t\t\t<table id=\"techData\" class=\"display\" cellspacing=\"0\" width=\"100%\" style=\"font-size: 10px;\">
\t\t\t      \t  <thead> </thead>
\t\t\t     \t   <tbody></tbody>
\t\t\t   \t\t </table>
\t\t\t\t</div>
            <!-- tabla ingram --> 
\t\t\t   <div id=\"ingramDiv\" class=\"inactive\">
\t\t\t\t\t<table id=\"ingram\" class=\"display table\" cellspacing=\"0\" width=\"100%\" style=\"font-size: 10px;\">
\t\t\t      \t   <thead></thead>
\t\t\t     \t   <tbody></tbody>
\t\t\t   \t\t </table>
\t\t\t\t</div> \t\t
\t</div>
{% endblock %}
", "configuracion.html.twig", "C:\\xampp\\htdocs\\GIT\\OMGstock\\stockOMG\\OMGstocks\\templates\\configuracion.html.twig");
    }
}
