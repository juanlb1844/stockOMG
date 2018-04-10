<?php

/* gruposAtributos.html.twig */
class __TwigTemplate_ba6cf01b59bcef7b73760d16fd6ba2092747cf30374cab345a6ee9c76dbd901a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "gruposAtributos.html.twig", 1);
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
     <script type=\"text/javascript\" src=\"skin/gruposAtributos.js\"></script>
     <style type=\"text/css\">
          .tree-categories:hover {
               cursor: pointer;
          }   
     </style>
\t<div class=\"col-md-9\">
               <div class=\"tab-providers hiding-window\">
               <div style=\"width: 80%; margin: auto; \">
\t\t        <h2 style=\"font-weight: 300;\">Grupos de atributos</h2>
                    <div class=\"col-md-4\"> 
                         <ul class=\"tree-categories\"> 
                              <li>
                                   <img style=\"width: 20px;\" src=\"skin/media/folder-open.png\"> Electrónicos
                                   <ul>
                                        <li id=\"idCat20\"> 
                                             <img style=\"width: 20px;\" src=\"skin/media/folder-open.png\">
                                              Laptops 
                                        </li>
                                        <li>
                                             <img style=\"width: 20px;\" src=\"skin/media/folder-open.png\">
                                              Pantallas
                                        </li>
                                        <li>
                                             <img style=\"width: 20px;\" src=\"skin/media/folder-open.png\">
                                              Celulares
                                        </li>
                                   </ul>
                              </li>
                              <li>
                                   <img style=\"width: 20px;\" src=\"skin/media/folder-open.png\">
                                    Ropa
                              </li>
                         </ul>
                    </div>
                    <div class=\"col-md-8\">
                              <div class=\"bs-example\" data-example-id=\"striped-table\">
                                   <table class=\"table table-striped\"> 
                                        <thead> 
                                             <tr> 
                                                  <th>#</th> 
                                                  <th>default_attr</th> 
                                                  <th>type_attr</th> 
                                                  <th>ID</th>
                                             </tr> 
                                        </thead> 
                                        <tbody class=\"attributes\"> 
                                        </tbody> 
                                   </table> 
                                   <button class=\"btn btn-primary\">Agregar</button>
                              </div>
                    </div>
     \t\t</div>
     \t</div>\t
\t</div>
\t<div class=\"col-md-3\">
\t\t";
        // line 61
        echo twig_include($this->env, $context, "sidebar.html.twig");
        echo "
\t</div>
";
    }

    public function getTemplateName()
    {
        return "gruposAtributos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 61,  33 => 4,  28 => 3,  11 => 1,);
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
     <script type=\"text/javascript\" src=\"skin/gruposAtributos.js\"></script>
     <style type=\"text/css\">
          .tree-categories:hover {
               cursor: pointer;
          }   
     </style>
\t<div class=\"col-md-9\">
               <div class=\"tab-providers hiding-window\">
               <div style=\"width: 80%; margin: auto; \">
\t\t        <h2 style=\"font-weight: 300;\">Grupos de atributos</h2>
                    <div class=\"col-md-4\"> 
                         <ul class=\"tree-categories\"> 
                              <li>
                                   <img style=\"width: 20px;\" src=\"skin/media/folder-open.png\"> Electrónicos
                                   <ul>
                                        <li id=\"idCat20\"> 
                                             <img style=\"width: 20px;\" src=\"skin/media/folder-open.png\">
                                              Laptops 
                                        </li>
                                        <li>
                                             <img style=\"width: 20px;\" src=\"skin/media/folder-open.png\">
                                              Pantallas
                                        </li>
                                        <li>
                                             <img style=\"width: 20px;\" src=\"skin/media/folder-open.png\">
                                              Celulares
                                        </li>
                                   </ul>
                              </li>
                              <li>
                                   <img style=\"width: 20px;\" src=\"skin/media/folder-open.png\">
                                    Ropa
                              </li>
                         </ul>
                    </div>
                    <div class=\"col-md-8\">
                              <div class=\"bs-example\" data-example-id=\"striped-table\">
                                   <table class=\"table table-striped\"> 
                                        <thead> 
                                             <tr> 
                                                  <th>#</th> 
                                                  <th>default_attr</th> 
                                                  <th>type_attr</th> 
                                                  <th>ID</th>
                                             </tr> 
                                        </thead> 
                                        <tbody class=\"attributes\"> 
                                        </tbody> 
                                   </table> 
                                   <button class=\"btn btn-primary\">Agregar</button>
                              </div>
                    </div>
     \t\t</div>
     \t</div>\t
\t</div>
\t<div class=\"col-md-3\">
\t\t{{ include('sidebar.html.twig') }}
\t</div>
{% endblock %}
", "gruposAtributos.html.twig", "C:\\xampp\\htdocs\\projects\\OMGstocks\\OMGstocks\\templates\\gruposAtributos.html.twig");
    }
}
