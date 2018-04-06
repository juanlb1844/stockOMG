<?php

/* layout.html.twig */
class __TwigTemplate_6fa1ea5e789fa2967e1f205ba97eff736d54fc468ebe6325a42806e05d813e30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seo"]) ? $context["seo"] : null), "title", array()), "html", null, true);
        echo "</title>
\t<!-- javascript --> 
\t<script type=\"text/javascript\" src=\"skin/js/jQuery-v3-3-1.js\"></script>
\t<!-- bootstrap --> 
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"skin/bootstrap/css/bootstrap.min.css\">
\t<script src=\"skin/bootstrap/js/bootstrap.min.js\" crossorigin=\"anonymous\"></script>
\t<!-- controlador js --> 
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"skin/styles.css\">
\t<script type=\"text/javascript\" src=\"skin/dashboard.js\"></script>
</head>
<body>

\t<div class=\"container-fluid general-container\">
\t\t <nav class=\"navbar navbar-default menu-header\">
\t\t  <div class=\"container-fluid\">
\t\t    <div class=\"navbar-header\" style=\"font-weight: bold;\">
\t\t      <a class=\"navbar-brand\" href=\"#\">
\t\t        <img style=\"width: 60px;\" alt=\"OMG Stock\" src=\"https://th.content.jobsdbcdn.com/Content/CmsContent/Logo/TH/JobsDBFiles/CompanyLogo/logo-l/9956l.png\"> 
\t\t      </a>
\t\t       <p id=\"providers\" class=\"option-menu navbar-text navbar-right\">Proveedores</p>
\t\t       <p id=\"feed\" class=\"option-menu navbar-text navbar-right\">FEED</p>
\t\t       <p id=\"dashboard-tab\" class=\"option-menu navbar-text navbar-right\">Dashboard</p>
\t\t       <p id=\"configuration\" class=\"option-menu navbar-text navbar-right\">Configuración</p>
\t\t    </div> 
\t\t  </div> 
\t\t</nav>
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"col-md-9\">
\t\t\t\t";
        // line 32
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t";
        // line 38
        echo twig_include($this->env, $context, "sidebar.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</body>
</html> ";
    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        // line 33
        echo "\t\t\t\t\t";
        $this->displayBlock('menu', $context, $blocks);
        // line 35
        echo "\t\t\t\t";
    }

    // line 33
    public function block_menu($context, array $blocks = array())
    {
        // line 34
        echo "\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 34,  83 => 33,  79 => 35,  76 => 33,  73 => 32,  63 => 38,  59 => 36,  57 => 32,  26 => 4,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
\t<title>{{seo.title}}</title>
\t<!-- javascript --> 
\t<script type=\"text/javascript\" src=\"skin/js/jQuery-v3-3-1.js\"></script>
\t<!-- bootstrap --> 
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"skin/bootstrap/css/bootstrap.min.css\">
\t<script src=\"skin/bootstrap/js/bootstrap.min.js\" crossorigin=\"anonymous\"></script>
\t<!-- controlador js --> 
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"skin/styles.css\">
\t<script type=\"text/javascript\" src=\"skin/dashboard.js\"></script>
</head>
<body>

\t<div class=\"container-fluid general-container\">
\t\t <nav class=\"navbar navbar-default menu-header\">
\t\t  <div class=\"container-fluid\">
\t\t    <div class=\"navbar-header\" style=\"font-weight: bold;\">
\t\t      <a class=\"navbar-brand\" href=\"#\">
\t\t        <img style=\"width: 60px;\" alt=\"OMG Stock\" src=\"https://th.content.jobsdbcdn.com/Content/CmsContent/Logo/TH/JobsDBFiles/CompanyLogo/logo-l/9956l.png\"> 
\t\t      </a>
\t\t       <p id=\"providers\" class=\"option-menu navbar-text navbar-right\">Proveedores</p>
\t\t       <p id=\"feed\" class=\"option-menu navbar-text navbar-right\">FEED</p>
\t\t       <p id=\"dashboard-tab\" class=\"option-menu navbar-text navbar-right\">Dashboard</p>
\t\t       <p id=\"configuration\" class=\"option-menu navbar-text navbar-right\">Configuración</p>
\t\t    </div> 
\t\t  </div> 
\t\t</nav>
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"col-md-9\">
\t\t\t\t{% block content %}
\t\t\t\t\t{% block menu %}
\t\t\t\t\t{% endblock %}
\t\t\t\t{% endblock %}
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t{{ include('sidebar.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
</body>
</html> ", "layout.html.twig", "C:\\xampp\\htdocs\\projects\\OMGstocks\\OMGstocks\\templates\\layout.html.twig");
    }
}
