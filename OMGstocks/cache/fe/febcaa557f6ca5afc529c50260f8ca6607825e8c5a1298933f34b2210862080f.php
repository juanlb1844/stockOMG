<?php

/* producto.html.twig */
class __TwigTemplate_6d35b1274f93d9c24a515baf4294d551be5a97de8567444a047bc3c6971401a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "producto.html.twig", 1);
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
  <!-- include summernote css/js -->
\t<script type=\"text/javascript\" src=\"skin/producto.js\"></script>
  <link href=\"skin/summernote/summernote.css\" rel=\"stylesheet\">
  <script src=\"skin/summernote/summernote.js\"></script>

  <style type=\"text/css\">
    #entityGallery {
      border-radius: 4px;
      width: 100%;
      background-color: #eff3f6;
      padding-top: 10px;
    }
    #entityGallery li img:hover {
      cursor: pointer;
      transition-property: all; 
      transition-duration: .2s; 
      transform: scale(1.1);
      z-index: 0; 
    }
    #entityGallery img {
      transition-property: all; 
      transition-duration: .2s; 
      width: 120px; 
      /*border: 1px solid gray;*/
    }
    #entityGallery li { 
      margin-left: 10px; 
    }
    #entityGallery ul, #entityGallery li {
      display: inline-block;
      border: 0px;
      text-align: center; 
    }

     #__familia, #__stock, #__NormalPrice {
      display: none!important; 
    }
    table {
      font-size: 12px; 
    }
  </style>


  <style type=\"text/css\">
    .select-attrs {
      font-weight: bold;
    }
    .select-attrs:hover {
      cursor: pointer;
    }
    .mod-container-attr {
      padding-top: 10px; 
      padding-bottom: 10px; 
    }
    .mod-distributor-name {
      background-color: #eeeeee;
    }
    .mod-distributor-name:hover {
      background-color: #dbdd15;
      cursor: pointer; 
    }
    .mod-distributor-name:active {
      transform: scale(.95);
    }
    .createGroup {
      position: fixed;
      bottom: 10px; 
      left: 10px;
      height: 70px; 
      width: 70px; 
      border-radius: 50%; 
      z-index: 99;
          padding-top: 20px;
    color: white;
    background-color: #03A9F4;
    font-weight: bold;
    text-align: center;
    }
    .selected-attr {
      color: #03A9F4;
    }
    #nextProduct:hover {
      cursor: pointer;
    }
  </style>

    <div class=\"dashboard-window col-md-9\">
        <a href=\"?p=feedLocal\">Atrás</a> 
        <a id=\"nextProduct\" class=\"pull-right\" next>Siguiente</a>
        <!-- Galería --> 
        <ul id=\"entityGallery\">
        </ul>
        
        
           <div class=\"createGroup selectAttrsVal\" data-toggle=\"modal\" data-target=\"#selectRelated\">  <span style=\"line-height: 20px;\">Agrupar</span> 
           </div>
        

        <!-- Relación con otros productos --> 
        <table class=\"table table-striped table-hover table-condensed\"> 
              <thead> 
                   <tr style=\"border: 3px solid #dbdbdb;\"> 
                        <th>Distributor</th> 
                        <th>Product</th> 
                        <th>SKU</th> 
                        <th>Stock</th>
                        <th>Stock Updated</th>
                        <th>Price</th>
                        <th>Part Number</th>
                        <th>UPC</th>
                        <th>Model</th>
                        <th>Currency</th>
                        <th></th>
                        <th>meta</th>
                   </tr> 
              </thead> 
              <tbody id=\"relationProduct\"> 
              </tbody> 
         </table> 
          
          <!-- Formulario para atributos constuidos desde DB -->         
           <form class=\"form-horizontal attributes_product\">
              <!-- construcción de atributos --> 
          </form>

          <form class=\"form-horizontal\">
            <div class=\"col-md-12\" style=\"text-align: center;\">
              <div class=\"col-md-2\"></div>
              <div class=\"col-md-10\">
                <h2 style=\"font-weight: 300;\">Galería</h2>
              </div>
            </div>
            <div class=\"form-group\">
              <label for=\"inputEmail3\" class=\"col-sm-2 control-label\"></label>
                ";
        // line 139
        echo twig_include($this->env, $context, "uploaderFiles.html.twig");
        echo "
            </div>
          </form>

          <div class=\"form-horizontal\">
             <div class=\"form-group\">
              <div class=\"col-sm-offset-2 col-sm-10 save-action\">
                <button type=\"submit\" id=\"saveProduct\" class=\"btn-lg btn-save btn btn-primary\">Guardar</button>
              </div>
             </div>
           </div> 
    </div> 
\t<div class=\"col-md-3\">
    <div>
      ";
        // line 153
        echo twig_include($this->env, $context, "sidebar.html.twig");
        echo "
    </div>
    <div>
      ";
        // line 156
        echo twig_include($this->env, $context, "tree-category.html.twig");
        echo " 
    </div>
\t</div>






<!-- M O D A L E S --> 

<div class=\"modal fade\" id=\"infoImg\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editarCategoria\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"newCatLabel\">Info IMG</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">

        <form class=\"form-horizontal\">
          <div class=\"form-group\"> 
            <label for=\"inputEmail3\" class=\"col-sm-3 control-label\">URL:</label> 
             <div class=\"col-sm-9\"> 
               <input type=\"input\" id=\"urlImg\" placeholder=\"cargando...\" value=\"\" class=\"form-control\" name=\"\"> 
             </div>  
           <div class=\"form-group\"> 
            <label for=\"inputEmail3\" class=\"col-sm-3 control-label\">Imágen principal:</label> 
             <div class=\"col-sm-9\" style=\"text-align: left;\"> 
               <input style=\"margin-top: 10px;\" type=\"checkbox\" id=\"imgMainSet\" placeholder=\"cargando...\" value=\"\" name=\"\"> 
             </div>  
           </div>
           </div>
        </form>

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\" id=\"deleteImg\">Borrar</button>
        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\" id=\"saveImg\">Guardar</button>
      </div>
    </div>
  </div>
</div>


<div class=\"modal fade\" id=\"selectRelated\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editarCategoria\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"newCatLabel\">Seleccionar valores</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\" style=\"overflow-y: auto; \">
        <div class=\"row\">
            <div class=\"col-md-2\"> 
              <div class=\"atributes-to-fill\">
                
              </div>
            </div>
            <div class=\"col-md-10\">
              <div class=\"mod-container-attrs\">
                <p class=\"mod-distributor-name\"></p>
                <div class=\"mod-attr-value\">
                  
                </div>
              </div>
              </div>
            </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
          <button type=\"button\" class=\"btn btn-primary\" id=\"editCategoryBtn\">Guardar</button>
        </div>
      </div>
    </div>
  </div>
</div>



<div class=\"modal fade\" id=\"selectRelatedProduct\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editarCategoria\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"newCatLabel\">Seleccionar productos</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <table class=\"table table-striped table-bordered table-hover\">
            <thead>
              <th>SKU</th>
              <th>PRECIO</th>
              <th>NOMBRE</th>
              <th></th>
            </thead>
            <tbody id=\"comparedBody\">
              <tr>
                <td>ABC</td>
                <td>10101</td>
                <td>Cardador USB</td>
                <th> <input type=\"checkbox\" name=\"\"> </th>
              </tr>
            </tbody>
          </table>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"editCategoryBtn\">Guardar</button>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "producto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 156,  188 => 153,  171 => 139,  33 => 4,  28 => 3,  11 => 1,);
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
  <!-- include summernote css/js -->
\t<script type=\"text/javascript\" src=\"skin/producto.js\"></script>
  <link href=\"skin/summernote/summernote.css\" rel=\"stylesheet\">
  <script src=\"skin/summernote/summernote.js\"></script>

  <style type=\"text/css\">
    #entityGallery {
      border-radius: 4px;
      width: 100%;
      background-color: #eff3f6;
      padding-top: 10px;
    }
    #entityGallery li img:hover {
      cursor: pointer;
      transition-property: all; 
      transition-duration: .2s; 
      transform: scale(1.1);
      z-index: 0; 
    }
    #entityGallery img {
      transition-property: all; 
      transition-duration: .2s; 
      width: 120px; 
      /*border: 1px solid gray;*/
    }
    #entityGallery li { 
      margin-left: 10px; 
    }
    #entityGallery ul, #entityGallery li {
      display: inline-block;
      border: 0px;
      text-align: center; 
    }

     #__familia, #__stock, #__NormalPrice {
      display: none!important; 
    }
    table {
      font-size: 12px; 
    }
  </style>


  <style type=\"text/css\">
    .select-attrs {
      font-weight: bold;
    }
    .select-attrs:hover {
      cursor: pointer;
    }
    .mod-container-attr {
      padding-top: 10px; 
      padding-bottom: 10px; 
    }
    .mod-distributor-name {
      background-color: #eeeeee;
    }
    .mod-distributor-name:hover {
      background-color: #dbdd15;
      cursor: pointer; 
    }
    .mod-distributor-name:active {
      transform: scale(.95);
    }
    .createGroup {
      position: fixed;
      bottom: 10px; 
      left: 10px;
      height: 70px; 
      width: 70px; 
      border-radius: 50%; 
      z-index: 99;
          padding-top: 20px;
    color: white;
    background-color: #03A9F4;
    font-weight: bold;
    text-align: center;
    }
    .selected-attr {
      color: #03A9F4;
    }
    #nextProduct:hover {
      cursor: pointer;
    }
  </style>

    <div class=\"dashboard-window col-md-9\">
        <a href=\"?p=feedLocal\">Atrás</a> 
        <a id=\"nextProduct\" class=\"pull-right\" next>Siguiente</a>
        <!-- Galería --> 
        <ul id=\"entityGallery\">
        </ul>
        
        
           <div class=\"createGroup selectAttrsVal\" data-toggle=\"modal\" data-target=\"#selectRelated\">  <span style=\"line-height: 20px;\">Agrupar</span> 
           </div>
        

        <!-- Relación con otros productos --> 
        <table class=\"table table-striped table-hover table-condensed\"> 
              <thead> 
                   <tr style=\"border: 3px solid #dbdbdb;\"> 
                        <th>Distributor</th> 
                        <th>Product</th> 
                        <th>SKU</th> 
                        <th>Stock</th>
                        <th>Stock Updated</th>
                        <th>Price</th>
                        <th>Part Number</th>
                        <th>UPC</th>
                        <th>Model</th>
                        <th>Currency</th>
                        <th></th>
                        <th>meta</th>
                   </tr> 
              </thead> 
              <tbody id=\"relationProduct\"> 
              </tbody> 
         </table> 
          
          <!-- Formulario para atributos constuidos desde DB -->         
           <form class=\"form-horizontal attributes_product\">
              <!-- construcción de atributos --> 
          </form>

          <form class=\"form-horizontal\">
            <div class=\"col-md-12\" style=\"text-align: center;\">
              <div class=\"col-md-2\"></div>
              <div class=\"col-md-10\">
                <h2 style=\"font-weight: 300;\">Galería</h2>
              </div>
            </div>
            <div class=\"form-group\">
              <label for=\"inputEmail3\" class=\"col-sm-2 control-label\"></label>
                {{ include('uploaderFiles.html.twig') }}
            </div>
          </form>

          <div class=\"form-horizontal\">
             <div class=\"form-group\">
              <div class=\"col-sm-offset-2 col-sm-10 save-action\">
                <button type=\"submit\" id=\"saveProduct\" class=\"btn-lg btn-save btn btn-primary\">Guardar</button>
              </div>
             </div>
           </div> 
    </div> 
\t<div class=\"col-md-3\">
    <div>
      {{ include('sidebar.html.twig') }}
    </div>
    <div>
      {{ include('tree-category.html.twig') }} 
    </div>
\t</div>






<!-- M O D A L E S --> 

<div class=\"modal fade\" id=\"infoImg\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editarCategoria\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"newCatLabel\">Info IMG</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">

        <form class=\"form-horizontal\">
          <div class=\"form-group\"> 
            <label for=\"inputEmail3\" class=\"col-sm-3 control-label\">URL:</label> 
             <div class=\"col-sm-9\"> 
               <input type=\"input\" id=\"urlImg\" placeholder=\"cargando...\" value=\"\" class=\"form-control\" name=\"\"> 
             </div>  
           <div class=\"form-group\"> 
            <label for=\"inputEmail3\" class=\"col-sm-3 control-label\">Imágen principal:</label> 
             <div class=\"col-sm-9\" style=\"text-align: left;\"> 
               <input style=\"margin-top: 10px;\" type=\"checkbox\" id=\"imgMainSet\" placeholder=\"cargando...\" value=\"\" name=\"\"> 
             </div>  
           </div>
           </div>
        </form>

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\" id=\"deleteImg\">Borrar</button>
        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\" id=\"saveImg\">Guardar</button>
      </div>
    </div>
  </div>
</div>


<div class=\"modal fade\" id=\"selectRelated\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editarCategoria\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"newCatLabel\">Seleccionar valores</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\" style=\"overflow-y: auto; \">
        <div class=\"row\">
            <div class=\"col-md-2\"> 
              <div class=\"atributes-to-fill\">
                
              </div>
            </div>
            <div class=\"col-md-10\">
              <div class=\"mod-container-attrs\">
                <p class=\"mod-distributor-name\"></p>
                <div class=\"mod-attr-value\">
                  
                </div>
              </div>
              </div>
            </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
          <button type=\"button\" class=\"btn btn-primary\" id=\"editCategoryBtn\">Guardar</button>
        </div>
      </div>
    </div>
  </div>
</div>



<div class=\"modal fade\" id=\"selectRelatedProduct\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editarCategoria\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"newCatLabel\">Seleccionar productos</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <table class=\"table table-striped table-bordered table-hover\">
            <thead>
              <th>SKU</th>
              <th>PRECIO</th>
              <th>NOMBRE</th>
              <th></th>
            </thead>
            <tbody id=\"comparedBody\">
              <tr>
                <td>ABC</td>
                <td>10101</td>
                <td>Cardador USB</td>
                <th> <input type=\"checkbox\" name=\"\"> </th>
              </tr>
            </tbody>
          </table>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"editCategoryBtn\">Guardar</button>
      </div>
    </div>
  </div>
</div>
{% endblock %}

", "producto.html.twig", "C:\\xampp\\htdocs\\GIT\\OMG\\last\\last\\last\\last\\stockOMG\\OMGstocks\\templates\\producto.html.twig");
    }
}
