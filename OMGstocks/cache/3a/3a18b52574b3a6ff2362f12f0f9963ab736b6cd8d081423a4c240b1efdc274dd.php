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
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css\">
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js\"></script>
     <style type=\"text/css\">
     

          .tree-categories:hover {
               cursor: pointer;
          }   
          .attr-controls button {
               margin-right: 10px; 
          }
           ul {
               list-style: none; 
          }
           li {
               border-left: 1px solid gray;  
               padding-left: 2px; 
         }
          ul img {
               width: 15px; 
          }
     </style>
\t<div class=\"col-md-9\">
               <div class=\"tab-providers hiding-window\">
               <div>
\t\t        <h2 style=\"font-weight: 300; margin-bottom: 30px; margin: 0px; margin-bottom: 20px; \">Grupos de atributos</h2>
                    <div class=\"col-md-4\">
                         <div class=\"col-sm-12\" style=\"margin-bottom: 10px; \">
                              <div class=\"col-sm-6\">
                                   <a href=\"\">Desplegar todo</a>
                              </div>
                              <div class=\"col-sm-6\">
                                   <a href=\"\">Contraer todo</a>
                              </div>
                         </div>
                         <div class=\"col-sm-12\">
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
                    </div>
                    <div class=\"col-md-8\">
                              <div class=\"attr-controls\">
                                   <button class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#newAttribute\">Atributo Dividido</button>
                              </div>
                              <div style=\"margin-top: 20px;\">
                                   <h4 style=\"font-weight: 400;\">Atributos globales</h4>
                              </div>
                              <div class=\"bs-example\" data-example-id=\"striped-table\">
                                   <table class=\"table table-striped\"> 
                                        <thead> 
                                             <tr> 
                                                  <th>#</th> 
                                                  <th>default_attr</th> 
                                                  <th>type_attr</th> 
                                                  <th>att_type</th>
                                             </tr> 
                                        </thead> 
                                        <tbody class=\"attributes\"> 
                                        </tbody> 
                                   </table> 
                              </div>
                    </div>
     \t\t</div>
     \t</div>\t
\t</div>
\t<div class=\"col-md-3\">
\t\t";
        // line 93
        echo twig_include($this->env, $context, "sidebar.html.twig");
        echo "
\t</div>


<!-- modal nuevo atributo --> 
 <div class=\"modal fade\" id=\"newAttribute\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"newAttribute\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"newCatLabel\">Nuevo atributo</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <form>
          <div class=\"form-group\">
               <div class=\"col-sm-6\">
                    <label  for=\"recipient-name\" class=\"col-form-label\"><input style=\"margin-right: 15px;\" type=\"checkbox\" name=\"\"> Atributo GLOBAL (todas las categorías):</label>
               </div>
               <div class=\"col-sm-6\">
                    <label for=\"recipient-name\" class=\"col-form-label\">Atributos existentes:</label>
                    <select id=\"selectAttribute\" class=\"form-control selectpicker\" data-live-search=\"true\">
                    </select>
               </div>
          </div>
          <div class=\"form-group\">
            <label for=\"recipient-name\" class=\"col-form-label\">Nombre del attributo:</label>
            <input type=\"text\" placeholder=\"Nombre del atributo\" class=\"form-control\" id=\"nameAttribute\"> 
          </div>
          <div class=\"form-group\">
            <label for=\"recipient-name\" class=\"col-form-label\">Tipo:</label>
            <select class=\"form-control\" id=\"attributeType\">
                    <option> int </option>
                    <option> varchar </option>
                    <option> text </option>
            </select>
          </div>
          <div class=\"form-group\">
            <label for=\"recipient-name\" class=\"col-form-label\">Valor por defecto:</label>
            <input placeholder=\"Valor por defecto\" type=\"text\" class=\"form-control\" id=\"editCategoryName\"> 
          </div>
        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>   
        <button type=\"button\" class=\"btn btn-primary\" id=\"saveAttribute\">Guardar</button>
      </div>
    </div>
  </div>
</div>

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
        return array (  125 => 93,  33 => 4,  28 => 3,  11 => 1,);
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
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css\">
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js\"></script>
     <style type=\"text/css\">
     

          .tree-categories:hover {
               cursor: pointer;
          }   
          .attr-controls button {
               margin-right: 10px; 
          }
           ul {
               list-style: none; 
          }
           li {
               border-left: 1px solid gray;  
               padding-left: 2px; 
         }
          ul img {
               width: 15px; 
          }
     </style>
\t<div class=\"col-md-9\">
               <div class=\"tab-providers hiding-window\">
               <div>
\t\t        <h2 style=\"font-weight: 300; margin-bottom: 30px; margin: 0px; margin-bottom: 20px; \">Grupos de atributos</h2>
                    <div class=\"col-md-4\">
                         <div class=\"col-sm-12\" style=\"margin-bottom: 10px; \">
                              <div class=\"col-sm-6\">
                                   <a href=\"\">Desplegar todo</a>
                              </div>
                              <div class=\"col-sm-6\">
                                   <a href=\"\">Contraer todo</a>
                              </div>
                         </div>
                         <div class=\"col-sm-12\">
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
                    </div>
                    <div class=\"col-md-8\">
                              <div class=\"attr-controls\">
                                   <button class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#newAttribute\">Atributo Dividido</button>
                              </div>
                              <div style=\"margin-top: 20px;\">
                                   <h4 style=\"font-weight: 400;\">Atributos globales</h4>
                              </div>
                              <div class=\"bs-example\" data-example-id=\"striped-table\">
                                   <table class=\"table table-striped\"> 
                                        <thead> 
                                             <tr> 
                                                  <th>#</th> 
                                                  <th>default_attr</th> 
                                                  <th>type_attr</th> 
                                                  <th>att_type</th>
                                             </tr> 
                                        </thead> 
                                        <tbody class=\"attributes\"> 
                                        </tbody> 
                                   </table> 
                              </div>
                    </div>
     \t\t</div>
     \t</div>\t
\t</div>
\t<div class=\"col-md-3\">
\t\t{{ include('sidebar.html.twig') }}
\t</div>


<!-- modal nuevo atributo --> 
 <div class=\"modal fade\" id=\"newAttribute\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"newAttribute\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"newCatLabel\">Nuevo atributo</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <form>
          <div class=\"form-group\">
               <div class=\"col-sm-6\">
                    <label  for=\"recipient-name\" class=\"col-form-label\"><input style=\"margin-right: 15px;\" type=\"checkbox\" name=\"\"> Atributo GLOBAL (todas las categorías):</label>
               </div>
               <div class=\"col-sm-6\">
                    <label for=\"recipient-name\" class=\"col-form-label\">Atributos existentes:</label>
                    <select id=\"selectAttribute\" class=\"form-control selectpicker\" data-live-search=\"true\">
                    </select>
               </div>
          </div>
          <div class=\"form-group\">
            <label for=\"recipient-name\" class=\"col-form-label\">Nombre del attributo:</label>
            <input type=\"text\" placeholder=\"Nombre del atributo\" class=\"form-control\" id=\"nameAttribute\"> 
          </div>
          <div class=\"form-group\">
            <label for=\"recipient-name\" class=\"col-form-label\">Tipo:</label>
            <select class=\"form-control\" id=\"attributeType\">
                    <option> int </option>
                    <option> varchar </option>
                    <option> text </option>
            </select>
          </div>
          <div class=\"form-group\">
            <label for=\"recipient-name\" class=\"col-form-label\">Valor por defecto:</label>
            <input placeholder=\"Valor por defecto\" type=\"text\" class=\"form-control\" id=\"editCategoryName\"> 
          </div>
        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>   
        <button type=\"button\" class=\"btn btn-primary\" id=\"saveAttribute\">Guardar</button>
      </div>
    </div>
  </div>
</div>

{% endblock %}
", "gruposAtributos.html.twig", "C:\\xampp\\htdocs\\GIT\\OMGstock\\stockOMG\\OMGstocks\\templates\\gruposAtributos.html.twig");
    }
}
