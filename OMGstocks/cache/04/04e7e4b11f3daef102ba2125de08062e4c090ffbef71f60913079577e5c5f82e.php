<?php

/* sidebar.html.twig */
class __TwigTemplate_c1ef93fcda7179a9d6bfff248d952772b437229edb3debc82960e5c6c138eae4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"col-md-12\" style=\"padding: 0px;\">
\t<div class=\"row\">
\t\t<div class=\"col-md-8\" style=\"padding-left: 0px; \">
\t\t\t<h4 style=\"font-weight: bold; \">Actividad de agentes</h4> 
\t\t</div>
\t\t<div class=\"col-md-4\" style=\"padding-top: 10px;\">
\t\t\t<a href=\"\">Administrar</a>
\t\t</div>
\t</div>
\t<div class=\"container-notifer row\" style=\" padding: 0px; border-radius: 4px; background-color: #eff3f6; padding: 5px 10px; padding-top: 10px;\">
\t\t<div class=\"col-md-3\">
\t\t\t<img src=\"media/users/user-1.png\" style=\"border: 2px solid #e68080; width: 60px; border-radius: 50%;\">
\t\t</div>
\t\t<div class=\"col-md-9\" style=\"text-align: left;\">
\t\t\t<h5 style=\"font-weight: bold;\">Alejandra Estrada</h5>
\t\t\t<h6 style=\"color: blue;\">Social comunity</h6>
\t\t</div>
\t</div>
\t<div class=\"container-notifer row\" style=\" padding: 0px; border-radius: 4px; background-color: #eff3f6; padding: 5px 10px; padding-top: 10px;\">
\t\t<div class=\"col-md-3\">
\t\t\t<img src=\"media/users/user-1.png\" style=\"border: 2px solid #03a87c; width: 60px; border-radius: 50%;\">
\t\t</div>
\t\t<div class=\"col-md-9\" style=\"text-align: left;\">
\t\t\t<h5 style=\"font-weight: bold;\">Cristina Rendón</h5>
\t\t\t<h6 style=\"color: blue;\">Social comunity</h6>
\t\t</div>
\t</div>
\t<div class=\"row col-md-12\" style=\"padding-top: 50px; padding-left: 0px; \">
\t\t<button class=\"btn btn-primary\" style=\"font-weight: bold; \">Registrar</button>
\t\t<button style=\"font-weight: bold;\" class=\"btn btn-default\" id=\"addWidget\" data-bind=\"click: addNewWidget\">Añadir Indicador</button>
\t</div>
</div>
<h1>&nbsp;</h1>

<a id=\"openGoogle\">Google..</a>

<style type=\"text/css\">
\t#openGoogle:hover {
\t\tcursor: pointer;
\t}
</style>
<script type=\"text/javascript\">
\t\$(document).ready(function() {
\t\t\$('#openGoogle').click(function() {
\t\t\tvar param = '&source=lnms&tbm=isch&sa=X'; 
\t\t\tvar name = null; 
\t\t\tname = \$('#NameProduct').val(); 
\t\t\tvar domainUrl = 'https://www.google.com/search?q='; 
\t\t\tdirection(domainUrl+name+param);
\t\t}); 
\t\t
\t\tfunction direction(link) {
\t
\t\t\t\t\tvar windowSize = {
\t\t\t\t\t    width: 700,
\t\t\t\t\t    height: 500,
\t\t\t\t\t};
\t\t\t\t\tvar windowLocation = {
\t\t\t\t\t    left:  (window.screen.availLeft + (window.screen.availWidth / 2)) - (windowSize.width / 2),
\t\t\t\t\t    top: (window.screen.availTop + (window.screen.availHeight / 2)) - (windowSize.height / 2)
\t\t\t\t\t};
\t\t\t\t\t
\t\t\twindow.open(link, '_blank', 'width=' + windowSize.width + ', height=' + windowSize.height + ', left=' + windowLocation.left + ', top=' + windowLocation.top);
\t\t}
\t}); 
</script>";
    }

    public function getTemplateName()
    {
        return "sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-12\" style=\"padding: 0px;\">
\t<div class=\"row\">
\t\t<div class=\"col-md-8\" style=\"padding-left: 0px; \">
\t\t\t<h4 style=\"font-weight: bold; \">Actividad de agentes</h4> 
\t\t</div>
\t\t<div class=\"col-md-4\" style=\"padding-top: 10px;\">
\t\t\t<a href=\"\">Administrar</a>
\t\t</div>
\t</div>
\t<div class=\"container-notifer row\" style=\" padding: 0px; border-radius: 4px; background-color: #eff3f6; padding: 5px 10px; padding-top: 10px;\">
\t\t<div class=\"col-md-3\">
\t\t\t<img src=\"media/users/user-1.png\" style=\"border: 2px solid #e68080; width: 60px; border-radius: 50%;\">
\t\t</div>
\t\t<div class=\"col-md-9\" style=\"text-align: left;\">
\t\t\t<h5 style=\"font-weight: bold;\">Alejandra Estrada</h5>
\t\t\t<h6 style=\"color: blue;\">Social comunity</h6>
\t\t</div>
\t</div>
\t<div class=\"container-notifer row\" style=\" padding: 0px; border-radius: 4px; background-color: #eff3f6; padding: 5px 10px; padding-top: 10px;\">
\t\t<div class=\"col-md-3\">
\t\t\t<img src=\"media/users/user-1.png\" style=\"border: 2px solid #03a87c; width: 60px; border-radius: 50%;\">
\t\t</div>
\t\t<div class=\"col-md-9\" style=\"text-align: left;\">
\t\t\t<h5 style=\"font-weight: bold;\">Cristina Rendón</h5>
\t\t\t<h6 style=\"color: blue;\">Social comunity</h6>
\t\t</div>
\t</div>
\t<div class=\"row col-md-12\" style=\"padding-top: 50px; padding-left: 0px; \">
\t\t<button class=\"btn btn-primary\" style=\"font-weight: bold; \">Registrar</button>
\t\t<button style=\"font-weight: bold;\" class=\"btn btn-default\" id=\"addWidget\" data-bind=\"click: addNewWidget\">Añadir Indicador</button>
\t</div>
</div>
<h1>&nbsp;</h1>

<a id=\"openGoogle\">Google..</a>

<style type=\"text/css\">
\t#openGoogle:hover {
\t\tcursor: pointer;
\t}
</style>
<script type=\"text/javascript\">
\t\$(document).ready(function() {
\t\t\$('#openGoogle').click(function() {
\t\t\tvar param = '&source=lnms&tbm=isch&sa=X'; 
\t\t\tvar name = null; 
\t\t\tname = \$('#NameProduct').val(); 
\t\t\tvar domainUrl = 'https://www.google.com/search?q='; 
\t\t\tdirection(domainUrl+name+param);
\t\t}); 
\t\t
\t\tfunction direction(link) {
\t
\t\t\t\t\tvar windowSize = {
\t\t\t\t\t    width: 700,
\t\t\t\t\t    height: 500,
\t\t\t\t\t};
\t\t\t\t\tvar windowLocation = {
\t\t\t\t\t    left:  (window.screen.availLeft + (window.screen.availWidth / 2)) - (windowSize.width / 2),
\t\t\t\t\t    top: (window.screen.availTop + (window.screen.availHeight / 2)) - (windowSize.height / 2)
\t\t\t\t\t};
\t\t\t\t\t
\t\t\twindow.open(link, '_blank', 'width=' + windowSize.width + ', height=' + windowSize.height + ', left=' + windowLocation.left + ', top=' + windowLocation.top);
\t\t}
\t}); 
</script>", "sidebar.html.twig", "C:\\xampp\\htdocs\\projects\\OMG\\last\\stockOMG\\OMGstocks\\templates\\sidebar.html.twig");
    }
}
