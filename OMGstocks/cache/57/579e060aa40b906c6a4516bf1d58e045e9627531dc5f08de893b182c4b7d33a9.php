<?php

/* content.html.twig */
class __TwigTemplate_e719c41a956cc4bf90b3bfdce89a86c3b835098f9a6385e84d1ae7b3d9e9cacf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "content.html.twig", 1);
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
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.3.0/gridstack.min.css\"/>
    <script type=\"text/javascript\" src='https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.3.0/gridstack.min.js'></script>
    <script type=\"text/javascript\" src='https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.3.0/gridstack.jQueryUI.min.js'></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js\"></script>

    <!-- <script type=\"text/javascript\" src=\"skin/graphs.js\"></script> --> 

\t<div class=\"col-md-9\">
\t\t<h1 class=\"title-template\">Dashbard</h1>
\t\t\t

\t\t\t        <div style=\"padding-left: 10px;\">
       \t\t\t\t\t<h2 style=\"font-weight: 300; letter-spacing: 5px;
    color: #337ab7;\">Estadisticas de cuenta</h2> 
\t\t\t            <!--<button class=\"btn btn-default btn-sty1\" id=\"addWidget\" data-bind=\"click: addNewWidget\">Añadir Indicador</button>--> 
\t\t\t        </div>

\t\t\t        <div data-bind=\"component: {name: 'dashboard-grid', params: \$data}\"></div>


\t</div>
\t<div class=\"col-md-3\">
\t\t";
        // line 29
        echo twig_include($this->env, $context, "sidebar.html.twig");
        echo "
\t</div>

\t
";
    }

    public function getTemplateName()
    {
        return "content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 29,  33 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {% extends \"layout.html.twig\" %}

{% block content %} 
\t{{parent()}} 
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.3.0/gridstack.min.css\"/>
    <script type=\"text/javascript\" src='https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.3.0/gridstack.min.js'></script>
    <script type=\"text/javascript\" src='https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.3.0/gridstack.jQueryUI.min.js'></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js\"></script>

    <!-- <script type=\"text/javascript\" src=\"skin/graphs.js\"></script> --> 

\t<div class=\"col-md-9\">
\t\t<h1 class=\"title-template\">Dashbard</h1>
\t\t\t

\t\t\t        <div style=\"padding-left: 10px;\">
       \t\t\t\t\t<h2 style=\"font-weight: 300; letter-spacing: 5px;
    color: #337ab7;\">Estadisticas de cuenta</h2> 
\t\t\t            <!--<button class=\"btn btn-default btn-sty1\" id=\"addWidget\" data-bind=\"click: addNewWidget\">Añadir Indicador</button>--> 
\t\t\t        </div>

\t\t\t        <div data-bind=\"component: {name: 'dashboard-grid', params: \$data}\"></div>


\t</div>
\t<div class=\"col-md-3\">
\t\t{{ include('sidebar.html.twig') }}
\t</div>

\t
{% endblock %}
", "content.html.twig", "C:\\xampp\\htdocs\\projects\\OMGstocks\\OMGstocks\\templates\\content.html.twig");
    }
}
