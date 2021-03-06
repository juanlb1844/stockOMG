<?php

/* feedLocal.html.twig */
class __TwigTemplate_89d6061f75b66e9658ba3be89e8686efce8af33c3a7ad6987b4419f08579d271 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "feedLocal.html.twig", 1);
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
        // line 5
        $this->displayParentBlock("content", $context, $blocks);
        echo " 

\t<script type=\"text/javascript\" src=\"skin/feedLocal.js\"></script>
  <script type=\"text/javascript\" src=\"skin/feedLocalFunctions.js\"></script>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"skin/styles-feedLocal.css\">
  <style type=\"text/css\">
    ul {
      list-style: none; 
    }
    li {
      border-left: 1px solid gray;  
      border-left-style: dotted;
      padding-left: 2px; 
    }
    .tree-categories {
      padding-left: 0px; 
      padding: 0px; 
    }
    .paginate_button .current {
      background-color: gray; 
    }

    /* buscador de tabla */  
    input[type=\"search\"] {
      border: none;
      background-color: #efefef;
      height: 30px;
      box-shadow: #ced2f7 0px 1px 4px 0px;
    }
    tr:hover {
      cursor: pointer;
    }
  </style>
 
 <!-- TREE --> 
  <style type=\"text/css\">
    .tree-child {
      background-image: url('media/users/d.png');
      height: 10px;
      display: inline-block;
      z-index: 9999;
      left: 0px;
      background-size: 10px;
      background-position: -42px -1px;
      background-size: auto;
      width: 11px;
      background-repeat: no-repeat; 
      margin-left: -4px; 
      } 
      .container-feed {
        padding-left: 0px; 
        border-radius: 4px;
      }
      .small-btn {
        padding: 2px 7px 2px 7px;
      }
      /* header widget */
      .header-widget-tree {
        background-color: #e8edf1; border-top-left-radius: 4px; border-top-right-radius: 4px; border: 1px solid #e5e5e5; color: #656565; padding: 5px; font-weight: bold; padding-left: 15px;
      } 
      .body-widget-tree {
        border: 1px solid #e5e5e5; background-color: #eff3f6; border-radius: 4px; padding-top: 10px; padding-bottom: 10px; padding-left: 10px;
      }
      #myChart0 {
        padding-right: 10px!important; 
      }
  </style>

     <div class=\"show-data col-md-9 hiding-window container-feed\"> 
        <div class=\"row col-md-3\"> 

            <div class=\"col-md-12\">
                <div style=\"\">
                  \t<button class=\"btn btn-primary btn-sm small-btn\" id=\"newCatBtn\" data-toggle=\"modal\" data-target=\"#newCat\">Nueva</button>
                    <button class=\"btn btn-primary btn-sm small-btn\" id=\"editCatBtn__\" data-toggle=\"modal\" data-target=\"#eddCat\">..</button>
                </div>
            </div>

            <div class=\"col-md-12\" style=\"margin-top: 10px;\">
                <div class=\"col-md-12 header-widget-tree\">Categorías</div>
              <div class=\"container-tree-categories body-widget-tree\">
                <div class=\"row\" style=\"margin-bottom: 10px; margin-top: 10px;\">
                  <br>
                  <div class=\"col-md-6\">
                    <a href=\"\" style=\"background-color: #9e9e9e; color:white; padding: 2px 4px 2px 4px; border-radius: 4px;\">contraer</a>
                  </div>
                  <div class=\"col-md-6\">
                    <a style=\"background-color: #9e9e9e; color:white; padding: 2px 4px 2px 4px; border-radius: 4px;\" href=\"\">expander</a>                 
                  </div>
                </div>
                <ul class=\"tree-categories\"> 
                \t<li>
                \t\t<img style=\"width: 20px;\" src=\"skin/media/folder-open.png\"> Electrónicos
                \t\t<ul>
                \t\t\t<li id=\"idCat20\"> 
                \t\t\t\t<img style=\"width: 20px;\" src=\"skin/media/folder-open.png\">
                \t\t\t\t Laptops 
                \t\t\t</li>
                \t\t\t<li>
                \t\t\t\t<img style=\"width: 20px;\" src=\"skin/media/folder-open.png\">
                \t\t\t\t Pantallas
                \t\t\t</li>
                \t\t\t<li>
                \t\t\t\t<img style=\"width: 20px;\" src=\"skin/media/folder-open.png\">
                \t\t\t\t Celulares
                \t\t\t</li>
                \t\t</ul>
                \t</li>
                \t<li>
                \t\t<img style=\"width: 20px;\" src=\"skin/media/folder-open.png\">
                \t\t Ropa
                \t</li>
                </ul>
              </div>
            </div>
            <div class=\"col-md-12\">
               ";
        // line 121
        echo twig_include($this->env, $context, "filters.html.twig");
        echo "
            </div>
        </div> 
        <div class=\"row col-md-9\" style=\"padding-right: 0px;\">
        <div class=\"col-md-12\" style=\"padding: 0px; margin-bottom: 40px; \">
          <div class=\"col-md-6\" style=\"padding-left: 0px;\">
              <h3 style=\"margin: 0px; font-weight: 500;\" class=\"title-template\">Busqueda general</h3>
          </div>
          <div class=\"col-md-6\">
            <div class=\"col-md-8\">
              <input id=\"attr_val_search\" type=\"\" name=\"\" placeholder=\"SKU\" class=\"form-control\">
            </div>
            <div class=\"col-md-4\">
              <button id=\"generalSearch\" class=\"btn btn-default\">Buscar</button>   
            </div>
          </div>
        </div>
     \t\t<div style=\"height: 200px;  width: 100%; margin: auto;\">            
         \t\t<table id=\"tableFeed\" class=\"display table\" cellspacing=\"0\" width=\"100%\" style=\"font-size: 10px;\">
\t\t\t      \t<thead></thead>
    \t\t\t\t<tbody></tbody>
    \t\t   </table>
     \t\t</div>
        </div>
    </div> 
\t<div class=\"col-md-3\">
\t\t";
        // line 147
        echo twig_include($this->env, $context, "sidebar.html.twig");
        echo "
\t</div>


<!-- M o d a l e s --> 

<div class=\"modal fade\" id=\"newCat\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"NuevaCategoria\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"newCatLabel\">Nueva categoría</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <form>
          <div class=\"form-group\">
            <label for=\"recipient-name\" class=\"col-form-label\">Nombre de categoría:</label>
            <input type=\"text\" class=\"form-control\" id=\"formCategoryName\">
          </div>
          <div class=\"form-group\">
            <label for=\"message-text\" class=\"col-form-label\">Descripción:</label>
            <textarea class=\"form-control\" id=\"formCategoryDesc\"></textarea>
          </div>
          <div class=\"form-group\">
            <label for=\"message-text\" class=\"col-form-label\">Meta descripción:</label>
            <textarea class=\"form-control\" id=\"formCategoryMeta\"></textarea>
          </div>
        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"newCategoryBtn\">Guardar</button>
      </div>
    </div>
  </div>
</div>


<div class=\"modal fade\" id=\"eddCat\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editarCategoria\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"newCatLabel\">Editar categoría</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <form>
          <div class=\"form-group\">
            <label for=\"recipient-name\" class=\"col-form-label\">Nombre de categoría:</label>
            <input type=\"text\" class=\"form-control\" id=\"editCategoryName\"> 
          </div>
          <div class=\"form-group\">
            <label for=\"message-text\" class=\"col-form-label\">Descripción:</label>
            <textarea class=\"form-control\" id=\"editCategoryDesc\"></textarea>
          </div>
          <div class=\"form-group\">
            <label for=\"message-text\" class=\"col-form-label\">Meta descripción:</label>
            <textarea class=\"form-control\" id=\"editCategoryMeta\"></textarea>
          </div>
        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" id=\"deleteCategory\">Borrar</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"editCategoryBtn\">Guardar</button>
      </div>
    </div>
  </div>
</div>

<style type=\"text/css\">
  .tree-categories img {
    width: 15px; 
  }
  .tree-categories {
    font-size: 11px; 
  }
  ul {
    padding-left: 20px; 
    padding-top: 5px;
  }
</style>

";
    }

    public function getTemplateName()
    {
        return "feedLocal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 147,  153 => 121,  34 => 5,  28 => 3,  11 => 1,);
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

\t<script type=\"text/javascript\" src=\"skin/feedLocal.js\"></script>
  <script type=\"text/javascript\" src=\"skin/feedLocalFunctions.js\"></script>
  <link rel=\"stylesheet\" type=\"text/css\" href=\"skin/styles-feedLocal.css\">
  <style type=\"text/css\">
    ul {
      list-style: none; 
    }
    li {
      border-left: 1px solid gray;  
      border-left-style: dotted;
      padding-left: 2px; 
    }
    .tree-categories {
      padding-left: 0px; 
      padding: 0px; 
    }
    .paginate_button .current {
      background-color: gray; 
    }

    /* buscador de tabla */  
    input[type=\"search\"] {
      border: none;
      background-color: #efefef;
      height: 30px;
      box-shadow: #ced2f7 0px 1px 4px 0px;
    }
    tr:hover {
      cursor: pointer;
    }
  </style>
 
 <!-- TREE --> 
  <style type=\"text/css\">
    .tree-child {
      background-image: url('media/users/d.png');
      height: 10px;
      display: inline-block;
      z-index: 9999;
      left: 0px;
      background-size: 10px;
      background-position: -42px -1px;
      background-size: auto;
      width: 11px;
      background-repeat: no-repeat; 
      margin-left: -4px; 
      } 
      .container-feed {
        padding-left: 0px; 
        border-radius: 4px;
      }
      .small-btn {
        padding: 2px 7px 2px 7px;
      }
      /* header widget */
      .header-widget-tree {
        background-color: #e8edf1; border-top-left-radius: 4px; border-top-right-radius: 4px; border: 1px solid #e5e5e5; color: #656565; padding: 5px; font-weight: bold; padding-left: 15px;
      } 
      .body-widget-tree {
        border: 1px solid #e5e5e5; background-color: #eff3f6; border-radius: 4px; padding-top: 10px; padding-bottom: 10px; padding-left: 10px;
      }
      #myChart0 {
        padding-right: 10px!important; 
      }
  </style>

     <div class=\"show-data col-md-9 hiding-window container-feed\"> 
        <div class=\"row col-md-3\"> 

            <div class=\"col-md-12\">
                <div style=\"\">
                  \t<button class=\"btn btn-primary btn-sm small-btn\" id=\"newCatBtn\" data-toggle=\"modal\" data-target=\"#newCat\">Nueva</button>
                    <button class=\"btn btn-primary btn-sm small-btn\" id=\"editCatBtn__\" data-toggle=\"modal\" data-target=\"#eddCat\">..</button>
                </div>
            </div>

            <div class=\"col-md-12\" style=\"margin-top: 10px;\">
                <div class=\"col-md-12 header-widget-tree\">Categorías</div>
              <div class=\"container-tree-categories body-widget-tree\">
                <div class=\"row\" style=\"margin-bottom: 10px; margin-top: 10px;\">
                  <br>
                  <div class=\"col-md-6\">
                    <a href=\"\" style=\"background-color: #9e9e9e; color:white; padding: 2px 4px 2px 4px; border-radius: 4px;\">contraer</a>
                  </div>
                  <div class=\"col-md-6\">
                    <a style=\"background-color: #9e9e9e; color:white; padding: 2px 4px 2px 4px; border-radius: 4px;\" href=\"\">expander</a>                 
                  </div>
                </div>
                <ul class=\"tree-categories\"> 
                \t<li>
                \t\t<img style=\"width: 20px;\" src=\"skin/media/folder-open.png\"> Electrónicos
                \t\t<ul>
                \t\t\t<li id=\"idCat20\"> 
                \t\t\t\t<img style=\"width: 20px;\" src=\"skin/media/folder-open.png\">
                \t\t\t\t Laptops 
                \t\t\t</li>
                \t\t\t<li>
                \t\t\t\t<img style=\"width: 20px;\" src=\"skin/media/folder-open.png\">
                \t\t\t\t Pantallas
                \t\t\t</li>
                \t\t\t<li>
                \t\t\t\t<img style=\"width: 20px;\" src=\"skin/media/folder-open.png\">
                \t\t\t\t Celulares
                \t\t\t</li>
                \t\t</ul>
                \t</li>
                \t<li>
                \t\t<img style=\"width: 20px;\" src=\"skin/media/folder-open.png\">
                \t\t Ropa
                \t</li>
                </ul>
              </div>
            </div>
            <div class=\"col-md-12\">
               {{ include('filters.html.twig') }}
            </div>
        </div> 
        <div class=\"row col-md-9\" style=\"padding-right: 0px;\">
        <div class=\"col-md-12\" style=\"padding: 0px; margin-bottom: 40px; \">
          <div class=\"col-md-6\" style=\"padding-left: 0px;\">
              <h3 style=\"margin: 0px; font-weight: 500;\" class=\"title-template\">Busqueda general</h3>
          </div>
          <div class=\"col-md-6\">
            <div class=\"col-md-8\">
              <input id=\"attr_val_search\" type=\"\" name=\"\" placeholder=\"SKU\" class=\"form-control\">
            </div>
            <div class=\"col-md-4\">
              <button id=\"generalSearch\" class=\"btn btn-default\">Buscar</button>   
            </div>
          </div>
        </div>
     \t\t<div style=\"height: 200px;  width: 100%; margin: auto;\">            
         \t\t<table id=\"tableFeed\" class=\"display table\" cellspacing=\"0\" width=\"100%\" style=\"font-size: 10px;\">
\t\t\t      \t<thead></thead>
    \t\t\t\t<tbody></tbody>
    \t\t   </table>
     \t\t</div>
        </div>
    </div> 
\t<div class=\"col-md-3\">
\t\t{{ include('sidebar.html.twig') }}
\t</div>


<!-- M o d a l e s --> 

<div class=\"modal fade\" id=\"newCat\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"NuevaCategoria\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"newCatLabel\">Nueva categoría</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <form>
          <div class=\"form-group\">
            <label for=\"recipient-name\" class=\"col-form-label\">Nombre de categoría:</label>
            <input type=\"text\" class=\"form-control\" id=\"formCategoryName\">
          </div>
          <div class=\"form-group\">
            <label for=\"message-text\" class=\"col-form-label\">Descripción:</label>
            <textarea class=\"form-control\" id=\"formCategoryDesc\"></textarea>
          </div>
          <div class=\"form-group\">
            <label for=\"message-text\" class=\"col-form-label\">Meta descripción:</label>
            <textarea class=\"form-control\" id=\"formCategoryMeta\"></textarea>
          </div>
        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"newCategoryBtn\">Guardar</button>
      </div>
    </div>
  </div>
</div>


<div class=\"modal fade\" id=\"eddCat\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editarCategoria\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"newCatLabel\">Editar categoría</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <form>
          <div class=\"form-group\">
            <label for=\"recipient-name\" class=\"col-form-label\">Nombre de categoría:</label>
            <input type=\"text\" class=\"form-control\" id=\"editCategoryName\"> 
          </div>
          <div class=\"form-group\">
            <label for=\"message-text\" class=\"col-form-label\">Descripción:</label>
            <textarea class=\"form-control\" id=\"editCategoryDesc\"></textarea>
          </div>
          <div class=\"form-group\">
            <label for=\"message-text\" class=\"col-form-label\">Meta descripción:</label>
            <textarea class=\"form-control\" id=\"editCategoryMeta\"></textarea>
          </div>
        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\" id=\"deleteCategory\">Borrar</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"editCategoryBtn\">Guardar</button>
      </div>
    </div>
  </div>
</div>

<style type=\"text/css\">
  .tree-categories img {
    width: 15px; 
  }
  .tree-categories {
    font-size: 11px; 
  }
  ul {
    padding-left: 20px; 
    padding-top: 5px;
  }
</style>

{% endblock %}


", "feedLocal.html.twig", "C:\\xampp\\htdocs\\GIT\\OMG\\last\\last\\last\\last\\stockOMG\\OMGstocks\\templates\\feedLocal.html.twig");
    }
}
