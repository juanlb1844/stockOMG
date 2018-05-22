<?php

/* sidebar-assist.html.twig */
class __TwigTemplate_1120294018a7c5535d3616ed2360e3e4e9e25368397a5eab05b551896bf95291 extends Twig_Template
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
        echo "<div class=\"col-md-12 container-widget-sidebar\" style=\"margin-top: 15px;\">
\t<div class=\"row header-sidebar-widget\">
\t\t<div class=\"col-md-8\">
\t\t\t<h4 class=\"title-header-w-s\">Asistente</h4> 
\t\t</div>
\t\t<div class=\"col-md-4 option-header-ws\">
\t\t\t<a href=\"\">Administrar</a>
\t\t</div>
\t</div>
\t<div class=\"container-notifer row\">
\t\t<a id=\"openGoogle\">Google..</a>
\t</div>
</div>

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
        return "sidebar-assist.html.twig";
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
        return new Twig_Source("<div class=\"col-md-12 container-widget-sidebar\" style=\"margin-top: 15px;\">
\t<div class=\"row header-sidebar-widget\">
\t\t<div class=\"col-md-8\">
\t\t\t<h4 class=\"title-header-w-s\">Asistente</h4> 
\t\t</div>
\t\t<div class=\"col-md-4 option-header-ws\">
\t\t\t<a href=\"\">Administrar</a>
\t\t</div>
\t</div>
\t<div class=\"container-notifer row\">
\t\t<a id=\"openGoogle\">Google..</a>
\t</div>
</div>

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
</script>", "sidebar-assist.html.twig", "C:\\xampp\\htdocs\\GIT\\OMG\\last\\last\\last\\last\\stockOMG\\OMGstocks\\templates\\sidebar-assist.html.twig");
    }
}
