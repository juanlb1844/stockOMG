<?php

/* usuarios.html.twig */
class __TwigTemplate_1c8a912cbd21133fb45bb020c0d4140beb4e8cbee7647a45f4f7d60f9b08c411 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "usuarios.html.twig", 1);
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
\t\t        <h1 style=\"font-weight: 600\">Usuarios</h1>
                    <div>
     \t\t\t <table class=\"table table-bordered table-striped\">
     \t\t\t\t<thead>
     \t\t\t\t\t<tr style=\"background-color: #f4f7f9;\">
     \t\t\t\t\t\t<th>
     \t\t\t\t\t\t\tNombre
     \t\t\t\t\t\t</th>
     \t\t\t\t\t\t<th>
     \t\t\t\t\t\t\tTipo
     \t\t\t\t\t\t</th>
                                   <th>
                                        Estado
                                   </th>
     \t\t\t\t\t</tr>
     \t\t\t\t</thead> 
     \t\t\t\t<tbody>
     \t\t\t\t\t<tr>
                                   <td>Aadmin</td>
                                   <td>Aadmin</td>
                                   <td>Activo</td>                    
                              </tr>
                              <tr>
                                   <td>Aadmin</td>
                                   <td>Aadmin</td>
                                   <td>Activo</td>                    
                              </tr>
                              <tr>
                                   <td>Aadmin</td>
                                   <td>Aadmin</td>
                                   <td>Activo</td>                    
                              </tr>
                              <tr>
                                   <td>Aadmin</td>
                                   <td>Aadmin</td>
                                   <td>Activo</td>                    
                              </tr>
     \t\t\t\t</tbody>
     \t\t\t</table>
                    </div>
     \t\t\t<div>
     \t\t\t <h4><a href=\"\">Grupos de permisos</a></h4>
     \t\t\t</div>
     \t\t</div>
     \t</div>\t
\t</div>
\t<div class=\"col-md-3\">
\t\t";
        // line 55
        echo twig_include($this->env, $context, "sidebar.html.twig");
        echo "
\t</div>
";
    }

    public function getTemplateName()
    {
        return "usuarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 55,  33 => 4,  28 => 3,  11 => 1,);
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
\t\t        <h1 style=\"font-weight: 600\">Usuarios</h1>
                    <div>
     \t\t\t <table class=\"table table-bordered table-striped\">
     \t\t\t\t<thead>
     \t\t\t\t\t<tr style=\"background-color: #f4f7f9;\">
     \t\t\t\t\t\t<th>
     \t\t\t\t\t\t\tNombre
     \t\t\t\t\t\t</th>
     \t\t\t\t\t\t<th>
     \t\t\t\t\t\t\tTipo
     \t\t\t\t\t\t</th>
                                   <th>
                                        Estado
                                   </th>
     \t\t\t\t\t</tr>
     \t\t\t\t</thead> 
     \t\t\t\t<tbody>
     \t\t\t\t\t<tr>
                                   <td>Aadmin</td>
                                   <td>Aadmin</td>
                                   <td>Activo</td>                    
                              </tr>
                              <tr>
                                   <td>Aadmin</td>
                                   <td>Aadmin</td>
                                   <td>Activo</td>                    
                              </tr>
                              <tr>
                                   <td>Aadmin</td>
                                   <td>Aadmin</td>
                                   <td>Activo</td>                    
                              </tr>
                              <tr>
                                   <td>Aadmin</td>
                                   <td>Aadmin</td>
                                   <td>Activo</td>                    
                              </tr>
     \t\t\t\t</tbody>
     \t\t\t</table>
                    </div>
     \t\t\t<div>
     \t\t\t <h4><a href=\"\">Grupos de permisos</a></h4>
     \t\t\t</div>
     \t\t</div>
     \t</div>\t
\t</div>
\t<div class=\"col-md-3\">
\t\t{{ include('sidebar.html.twig') }}
\t</div>
{% endblock %}
", "usuarios.html.twig", "C:\\xampp\\htdocs\\GIT\\OMG\\last\\last\\last\\last\\stockOMG\\OMGstocks\\templates\\usuarios.html.twig");
    }
}