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
        echo "<style type=\"text/css\">
\t.container-notifer:hover {
\t\tcursor: pointer;
\t\tbackground-color: #e8edf1;
\t}
\t.container-notifer {
\t\tborder: 1px solid #e5e5e5; padding: 0px; border-radius: 4px; background-color: #eff3f6; padding-top: 5px; margin-top: 10px; border-left: 1px solid #e68080;     box-shadow: #d0d0d0 0px 1px 6px 0px;
\t}
\t.on-line { border-left: 1px solid #03a87c; }
\t.container-notifer:active {
\t\ttransform: scale(1.02);
\t}
\t.container-widget-sidebar {
\t\tborder: 1px solid #e5e5e5; padding-bottom: 20px; border-radius: 4px;     background-color: #f9f9f9;
\t}
\t.header-sidebar-widget {
\t\tborder: 1px solid #e5e5e5; background-color: white; background-color: #e8edf1;
\t}
\t.title-header-w-s {
\t\tfont-weight: bold; font-size: 17px; color: #656565;
\t}
\t.option-header-ws {
\t\tpadding-top: 10px;
\t}
</style>

<div class=\"col-md-12 container-widget-sidebar\">
\t<div class=\"row header-sidebar-widget\">
\t\t<div class=\"col-md-8\">
\t\t\t<h4 class=\"title-header-w-s\">Actividad de agentes</h4> 
\t\t</div>
\t\t<div class=\"col-md-4 option-header-ws\">
\t\t\t<a href=\"\">Administrar</a>
\t\t</div>
\t</div>
\t<div class=\"container-notifer row\">
\t\t<div class=\"col-md-3\">
\t\t\t<img src=\"media/users/user-1.png\" style=\"border: 2px solid #e68080; width: 50px; border-radius: 50%;\">
\t\t</div>
\t\t<div class=\"col-md-9\" style=\"text-align: left;\">
\t\t\t<h5 style=\"font-weight: bold;\">Alejandra Estrada</h5>
\t\t\t<h6 style=\"color: #828282;\">Social comunity</h6>
\t\t</div>
\t</div>
\t<div class=\"container-notifer on-line row\">
\t\t<div class=\"col-md-3\">
\t\t\t<img src=\"media/users/user-1.png\" style=\"border: 2px solid #03a87c; width: 50px; border-radius: 50%;\">
\t\t</div>
\t\t<div class=\"col-md-9\" style=\"text-align: left;\">
\t\t\t<h5 style=\"font-weight: bold;\">Cristina Rendón</h5>
\t\t\t<h6 style=\"color: #828282;\">Social comunity</h6>
\t\t</div>
\t</div>
</div>

\t<!-- añadir indicador --> 
\t<div class=\"col-md-12\" style=\"padding-top: 20px; padding-left: 0px; display: none;\">
\t\t<div class=\"row col-md-12\">
\t\t\t<button class=\"btn btn-primary\" style=\"font-weight: bold; font-size: 12px;\">Registrar</button>
\t\t\t<button style=\"font-weight: bold; font-size: 12px;\" class=\"btn btn-default\" id=\"addWidget\" data-bind=\"click: addNewWidget\">Añadir Indicador</button>
\t\t</div>
\t</div> 
\t<!-- añadir indicador --> 



<style type=\"text/css\">
\t#openGoogle:hover {
\t\tcursor: pointer;
\t}
</style>
";
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
        return new Twig_Source("<style type=\"text/css\">
\t.container-notifer:hover {
\t\tcursor: pointer;
\t\tbackground-color: #e8edf1;
\t}
\t.container-notifer {
\t\tborder: 1px solid #e5e5e5; padding: 0px; border-radius: 4px; background-color: #eff3f6; padding-top: 5px; margin-top: 10px; border-left: 1px solid #e68080;     box-shadow: #d0d0d0 0px 1px 6px 0px;
\t}
\t.on-line { border-left: 1px solid #03a87c; }
\t.container-notifer:active {
\t\ttransform: scale(1.02);
\t}
\t.container-widget-sidebar {
\t\tborder: 1px solid #e5e5e5; padding-bottom: 20px; border-radius: 4px;     background-color: #f9f9f9;
\t}
\t.header-sidebar-widget {
\t\tborder: 1px solid #e5e5e5; background-color: white; background-color: #e8edf1;
\t}
\t.title-header-w-s {
\t\tfont-weight: bold; font-size: 17px; color: #656565;
\t}
\t.option-header-ws {
\t\tpadding-top: 10px;
\t}
</style>

<div class=\"col-md-12 container-widget-sidebar\">
\t<div class=\"row header-sidebar-widget\">
\t\t<div class=\"col-md-8\">
\t\t\t<h4 class=\"title-header-w-s\">Actividad de agentes</h4> 
\t\t</div>
\t\t<div class=\"col-md-4 option-header-ws\">
\t\t\t<a href=\"\">Administrar</a>
\t\t</div>
\t</div>
\t<div class=\"container-notifer row\">
\t\t<div class=\"col-md-3\">
\t\t\t<img src=\"media/users/user-1.png\" style=\"border: 2px solid #e68080; width: 50px; border-radius: 50%;\">
\t\t</div>
\t\t<div class=\"col-md-9\" style=\"text-align: left;\">
\t\t\t<h5 style=\"font-weight: bold;\">Alejandra Estrada</h5>
\t\t\t<h6 style=\"color: #828282;\">Social comunity</h6>
\t\t</div>
\t</div>
\t<div class=\"container-notifer on-line row\">
\t\t<div class=\"col-md-3\">
\t\t\t<img src=\"media/users/user-1.png\" style=\"border: 2px solid #03a87c; width: 50px; border-radius: 50%;\">
\t\t</div>
\t\t<div class=\"col-md-9\" style=\"text-align: left;\">
\t\t\t<h5 style=\"font-weight: bold;\">Cristina Rendón</h5>
\t\t\t<h6 style=\"color: #828282;\">Social comunity</h6>
\t\t</div>
\t</div>
</div>

\t<!-- añadir indicador --> 
\t<div class=\"col-md-12\" style=\"padding-top: 20px; padding-left: 0px; display: none;\">
\t\t<div class=\"row col-md-12\">
\t\t\t<button class=\"btn btn-primary\" style=\"font-weight: bold; font-size: 12px;\">Registrar</button>
\t\t\t<button style=\"font-weight: bold; font-size: 12px;\" class=\"btn btn-default\" id=\"addWidget\" data-bind=\"click: addNewWidget\">Añadir Indicador</button>
\t\t</div>
\t</div> 
\t<!-- añadir indicador --> 



<style type=\"text/css\">
\t#openGoogle:hover {
\t\tcursor: pointer;
\t}
</style>
", "sidebar.html.twig", "C:\\xampp\\htdocs\\GIT\\OMG\\last\\last\\last\\last\\stockOMG\\OMGstocks\\templates\\sidebar.html.twig");
    }
}
