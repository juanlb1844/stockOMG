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
\t<!-- javascript  --> 
\t<script type=\"text/javascript\" src=\"skin/js/jQuery-v3-3-1.js\"></script>
\t<!-- bootstrap --> 
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"skin/bootstrap/css/bootstrap.min.css\">
\t<script src=\"skin/bootstrap/js/bootstrap.min.js\" crossorigin=\"anonymous\"></script>
\t<!-- datatables js --> 
\t<script type=\"text/javascript\" src=\"skin/datatable1.10.16/jquery.dataTables.js\"></script>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"skin/css/datatables.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"skin/css/dataTables.bootstrap.css\">
\t<!-- controlador js / css --> 
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"skin/styles.css\">
\t<script type=\"text/javascript\" src=\"skin/dashboard.js\"></script>

\t<meta charset=\"utf-8\">
</head>
<body>

\t<div class=\"container-fluid general-container\">
\t\t <nav class=\"navbar navbar-default menu-header\" style=\"background-color: white;\">
\t\t  <div class=\"container-fluid\">
\t\t    <div class=\"navbar-header\" style=\"font-weight: bold;\">
\t\t      <a class=\"navbar-brand\" href=\"#\">
\t\t        <img style=\"width: 80px;\" alt=\"OMG Stock\" src=\"media/users/logo.png\"> 
\t\t      </a>
\t\t      <p id=\"uploadFiles\" class=\"option-menu navbar-text navbar-right\"><a href=\"?p=upload_files\">Upload</a></p>
\t\t      <p id=\"uploadFiles\" class=\"option-menu navbar-text navbar-right\">|</p>
\t\t       <p id=\"configuration\" class=\"option-menu navbar-text navbar-right\"><a href=\"?p=grupos_atributos\">Grupos de atributos</a></p>  
\t\t       <p id=\"uploadFiles\" class=\"option-menu navbar-text navbar-right\">|</p>
\t\t       <p id=\"providers\" class=\"option-menu navbar-text navbar-right\"><a href=\"?p=proveedores\">Proveedores</a></p>
\t\t       <p id=\"uploadFiles\" class=\"option-menu navbar-text navbar-right\">|</p>
\t\t       <p id=\"feed\" class=\"option-menu navbar-text navbar-right\"><a href=\"?p=feedLocal\">FeedLocal</a></p>
\t\t       <p id=\"uploadFiles\" class=\"option-menu navbar-text navbar-right\">|</p>
\t\t       <p id=\"dashboard-tab\" class=\"option-menu navbar-text navbar-right\"><a href=\"?p=dashboard\">Dashboard</a></p>
\t\t       <p id=\"uploadFiles\" class=\"option-menu navbar-text navbar-right\">|</p>
\t\t       <p id=\"configuration\" class=\"option-menu navbar-text navbar-right\"><a href=\"?p=configuracion\">Configuración</a></p>
\t\t    </div> 
\t\t    <div class=\"pull-right\">
\t\t    \t<div style=\"padding-top: 3px;\">
\t\t    \t\t<img style=\"width: 45px; border-radius: 50%; font-weight: 300px;\" src=\"media/users/user-admin.png\">
\t\t    \t\t<span>Admin</span>
\t\t    \t</div>
\t\t    </div>
\t\t  </div> 
\t\t</nav>
\t\t<div class=\"col-md-12\" style=\"min-height: 600px; padding-bottom: 100px;\">
\t\t\t";
        // line 50
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "\t\t</div>
\t</div>
\t\t";
        // line 54
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
</body>
</html> ";
    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
        // line 51
        echo "\t\t\t";
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
        return array (  90 => 51,  87 => 50,  80 => 54,  76 => 52,  74 => 50,  25 => 4,  20 => 1,);
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
\t<!-- javascript  --> 
\t<script type=\"text/javascript\" src=\"skin/js/jQuery-v3-3-1.js\"></script>
\t<!-- bootstrap --> 
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"skin/bootstrap/css/bootstrap.min.css\">
\t<script src=\"skin/bootstrap/js/bootstrap.min.js\" crossorigin=\"anonymous\"></script>
\t<!-- datatables js --> 
\t<script type=\"text/javascript\" src=\"skin/datatable1.10.16/jquery.dataTables.js\"></script>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"skin/css/datatables.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"skin/css/dataTables.bootstrap.css\">
\t<!-- controlador js / css --> 
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"skin/styles.css\">
\t<script type=\"text/javascript\" src=\"skin/dashboard.js\"></script>

\t<meta charset=\"utf-8\">
</head>
<body>

\t<div class=\"container-fluid general-container\">
\t\t <nav class=\"navbar navbar-default menu-header\" style=\"background-color: white;\">
\t\t  <div class=\"container-fluid\">
\t\t    <div class=\"navbar-header\" style=\"font-weight: bold;\">
\t\t      <a class=\"navbar-brand\" href=\"#\">
\t\t        <img style=\"width: 80px;\" alt=\"OMG Stock\" src=\"media/users/logo.png\"> 
\t\t      </a>
\t\t      <p id=\"uploadFiles\" class=\"option-menu navbar-text navbar-right\"><a href=\"?p=upload_files\">Upload</a></p>
\t\t      <p id=\"uploadFiles\" class=\"option-menu navbar-text navbar-right\">|</p>
\t\t       <p id=\"configuration\" class=\"option-menu navbar-text navbar-right\"><a href=\"?p=grupos_atributos\">Grupos de atributos</a></p>  
\t\t       <p id=\"uploadFiles\" class=\"option-menu navbar-text navbar-right\">|</p>
\t\t       <p id=\"providers\" class=\"option-menu navbar-text navbar-right\"><a href=\"?p=proveedores\">Proveedores</a></p>
\t\t       <p id=\"uploadFiles\" class=\"option-menu navbar-text navbar-right\">|</p>
\t\t       <p id=\"feed\" class=\"option-menu navbar-text navbar-right\"><a href=\"?p=feedLocal\">FeedLocal</a></p>
\t\t       <p id=\"uploadFiles\" class=\"option-menu navbar-text navbar-right\">|</p>
\t\t       <p id=\"dashboard-tab\" class=\"option-menu navbar-text navbar-right\"><a href=\"?p=dashboard\">Dashboard</a></p>
\t\t       <p id=\"uploadFiles\" class=\"option-menu navbar-text navbar-right\">|</p>
\t\t       <p id=\"configuration\" class=\"option-menu navbar-text navbar-right\"><a href=\"?p=configuracion\">Configuración</a></p>
\t\t    </div> 
\t\t    <div class=\"pull-right\">
\t\t    \t<div style=\"padding-top: 3px;\">
\t\t    \t\t<img style=\"width: 45px; border-radius: 50%; font-weight: 300px;\" src=\"media/users/user-admin.png\">
\t\t    \t\t<span>Admin</span>
\t\t    \t</div>
\t\t    </div>
\t\t  </div> 
\t\t</nav>
\t\t<div class=\"col-md-12\" style=\"min-height: 600px; padding-bottom: 100px;\">
\t\t\t{% block content %}
\t\t\t{% endblock %}
\t\t</div>
\t</div>
\t\t{{ include('footer.html.twig') }}
</body>
</html> ", "layout.html.twig", "C:\\xampp\\htdocs\\GIT\\OMG\\last\\stockOMG\\OMGstocks\\templates\\layout.html.twig");
    }
}
