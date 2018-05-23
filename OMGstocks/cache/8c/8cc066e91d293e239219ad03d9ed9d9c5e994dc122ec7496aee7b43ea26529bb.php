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
\t<style type=\"text/css\">
\t\t.navbar-header {
\t\t\tfont-weight: 400!important; 
\t\t}
\t</style>
\t<title>";
        // line 9
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
\t\t       <a class=\"navbar-brand\" href=\"?p=dashboard\" style=\"padding-top: 5px;\">
\t\t        <img style=\"width: 40px;\" alt=\"OMG Stock\" src=\"skin/media/images.png\"> 
\t\t       </a>
\t\t       <p id=\"configuration\" class=\"option-menu navbar-text navbar-right\">
\t\t       \t<a href=\"?p=usuarios\">Usuarios</a>
\t\t       </p>
\t\t       <!-- 
\t\t       <p id=\"uploadFiles\" class=\"option-menu navbar-text navbar-right\">
\t\t      \t<a href=\"?p=upload_files\">Upload</a>
\t\t       </p> --> 
\t\t       
\t\t       <p id=\"configuration\" class=\"option-menu navbar-text navbar-right\">
\t\t       \t<a href=\"?p=grupos_atributos\">Grupos de atributos</a>
\t\t       </p>  
\t\t       
\t\t       <p id=\"providers\" class=\"option-menu navbar-text navbar-right\">
\t\t       \t<a href=\"?p=proveedores\">Proveedores</a>
\t\t       </p>
\t\t       
\t\t       <p id=\"feed\" class=\"option-menu navbar-text navbar-right\">
\t\t       \t<a href=\"?p=feedLocal\">FeedLocal</a>
\t\t       </p>
\t\t       
\t\t       <p id=\"dashboard-tab\" class=\"option-menu navbar-text navbar-right\">
\t\t       \t<a href=\"?p=dashboard\">Dashboard</a>
\t\t       </p>
\t\t       
\t\t       <p id=\"configuration\" class=\"option-menu navbar-text navbar-right\">
\t\t       \t<a href=\"?p=configuracion\">Configuración</a>
\t\t       </p>
\t\t    </div> 
\t\t    <div class=\"pull-right\">
\t\t    \t<div id=\"actions-user\" style=\"padding-top: 3px;\">
\t\t    \t\t<img style=\"width: 40px; border-radius: 50%; font-weight: 300px;\" src=\"media/users/user-admin.png\">
\t\t    \t\t<span style=\"font-weight: bold; color: #24292e;\">Admin</span>
\t\t    \t</div>
\t\t    </div>
\t\t  </div> 
\t\t</nav>
\t\t<div class=\"col-md-12\" style=\"min-height: 600px; padding-bottom: 100px;\">
\t\t\t";
        // line 71
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "\t\t</div>
\t\t";
        // line 74
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
\t</div>
</body>
</html> 


<script type=\"text/javascript\">
\t\$('#actions-user').click(function(){
\t\t\$.ajax({
\t\t\t\t\t\t\t\t'url'     : 'auth.php', 
\t\t\t\t\t\t\t\t'method' \t  : 'POST', 
\t\t\t\t\t\t\t\t'data' \t  : { user : '', 'pass' : 'xx' },  
\t\t\t\t\t\t\t\t'success' : function (response) { 
\t\t\t\t\t\t\t\t\tconsole.log(response); 
\t\t\t\t\t\t\t\t\talert(response); 
\t\t\t\t\t\t\t\t\twindow.location.reload(); 
\t\t\t\t\t\t\t\t} 
\t\t\t\t\t\t\t}); 
\t}); 
</script>";
    }

    // line 71
    public function block_content($context, array $blocks = array())
    {
        // line 72
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
        return array (  127 => 72,  124 => 71,  100 => 74,  97 => 73,  95 => 71,  30 => 9,  20 => 1,);
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
\t<style type=\"text/css\">
\t\t.navbar-header {
\t\t\tfont-weight: 400!important; 
\t\t}
\t</style>
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
\t\t       <a class=\"navbar-brand\" href=\"?p=dashboard\" style=\"padding-top: 5px;\">
\t\t        <img style=\"width: 40px;\" alt=\"OMG Stock\" src=\"skin/media/images.png\"> 
\t\t       </a>
\t\t       <p id=\"configuration\" class=\"option-menu navbar-text navbar-right\">
\t\t       \t<a href=\"?p=usuarios\">Usuarios</a>
\t\t       </p>
\t\t       <!-- 
\t\t       <p id=\"uploadFiles\" class=\"option-menu navbar-text navbar-right\">
\t\t      \t<a href=\"?p=upload_files\">Upload</a>
\t\t       </p> --> 
\t\t       
\t\t       <p id=\"configuration\" class=\"option-menu navbar-text navbar-right\">
\t\t       \t<a href=\"?p=grupos_atributos\">Grupos de atributos</a>
\t\t       </p>  
\t\t       
\t\t       <p id=\"providers\" class=\"option-menu navbar-text navbar-right\">
\t\t       \t<a href=\"?p=proveedores\">Proveedores</a>
\t\t       </p>
\t\t       
\t\t       <p id=\"feed\" class=\"option-menu navbar-text navbar-right\">
\t\t       \t<a href=\"?p=feedLocal\">FeedLocal</a>
\t\t       </p>
\t\t       
\t\t       <p id=\"dashboard-tab\" class=\"option-menu navbar-text navbar-right\">
\t\t       \t<a href=\"?p=dashboard\">Dashboard</a>
\t\t       </p>
\t\t       
\t\t       <p id=\"configuration\" class=\"option-menu navbar-text navbar-right\">
\t\t       \t<a href=\"?p=configuracion\">Configuración</a>
\t\t       </p>
\t\t    </div> 
\t\t    <div class=\"pull-right\">
\t\t    \t<div id=\"actions-user\" style=\"padding-top: 3px;\">
\t\t    \t\t<img style=\"width: 40px; border-radius: 50%; font-weight: 300px;\" src=\"media/users/user-admin.png\">
\t\t    \t\t<span style=\"font-weight: bold; color: #24292e;\">Admin</span>
\t\t    \t</div>
\t\t    </div>
\t\t  </div> 
\t\t</nav>
\t\t<div class=\"col-md-12\" style=\"min-height: 600px; padding-bottom: 100px;\">
\t\t\t{% block content %}
\t\t\t{% endblock %}
\t\t</div>
\t\t{{ include('footer.html.twig') }}
\t</div>
</body>
</html> 


<script type=\"text/javascript\">
\t\$('#actions-user').click(function(){
\t\t\$.ajax({
\t\t\t\t\t\t\t\t'url'     : 'auth.php', 
\t\t\t\t\t\t\t\t'method' \t  : 'POST', 
\t\t\t\t\t\t\t\t'data' \t  : { user : '', 'pass' : 'xx' },  
\t\t\t\t\t\t\t\t'success' : function (response) { 
\t\t\t\t\t\t\t\t\tconsole.log(response); 
\t\t\t\t\t\t\t\t\talert(response); 
\t\t\t\t\t\t\t\t\twindow.location.reload(); 
\t\t\t\t\t\t\t\t} 
\t\t\t\t\t\t\t}); 
\t}); 
</script>", "layout.html.twig", "C:\\xampp\\htdocs\\GIT\\OMG\\last\\last\\last\\last\\stockOMG\\OMGstocks\\templates\\layout.html.twig");
    }
}
