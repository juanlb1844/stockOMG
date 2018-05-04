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
  </style>

            <div class=\"dashboard-window col-md-9\">
            <a href=\"?p=feedLocal\">Atrás</a> 
            <ul id=\"entityGallery\">
            </ul>
            <br> 
            <div style=\"padding-bottom: 10px;\">
              <button class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#selectRelated\">Agrupar</button>
            </div>
            <table class=\"table table-striped table-hover\"> 
                                        <thead> 
                                             <tr style=\"border: 3px solid #dbdbdb;\"> 
                                                  <th>Distributor</th> 
                                                  <th>Product</th> 
                                                  <th>SKU</th> 
                                                  <th>Stock</th>
                                                  <th>Stock Updated</th>
                                                  <th>Price</th>
                                             </tr> 
                                        </thead> 
                                        <tbody id=\"relationProduct\"> 
                                         <!-- <tr>
                                            <td id=\"relationDis\"></td>
                                            <td id=\"relationName\">Nombre del producto</td>
                                            <td id=\"relationSku\">ABC-SKU</td>
                                            <td id=\"relationStock\">10</td>
                                            <td id=\"relationUpdated\">1 hour ago</td>
                                            <td id=\"relationPrice\">\$2,200.00</td>
                                          </tr> --> 
                                        </tbody> 
                                   </table> 
                            
                     <form class=\"form-horizontal attributes_product\">
                     <!-- 
                      <div class=\"form-group\">
                        <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Título</label>
                        <div class=\"col-sm-10\">
                          <input type=\"input\" id=\"data-product-name\" placeholder=\"cargando...\" class=\"form-control\" name=\"\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">SKU</label>
                        <div class=\"col-sm-10\">
                          <input type=\"input\" class=\"form-control\" id=\"data-product-sku\" placeholder=\"cargando...\"> 
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Precio</label>
                        <div class=\"col-sm-10\">
                          <input type=\"input\" class=\"form-control\" id=\"data-product-price\" placeholder=\"cargando...\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Main Img</label>
                        <div class=\"row\">
                          <div class=\"col-sm-4\">
                            <img id=\"data-product-mainImg\" src=\"http://www.ppimusic.ie/images/loading_anim.gif\" style=\"width: 170px;\">
                          </div>
                          <div class=\"col-sm-4\">
                            <label class=\"col-sm-2 control-label\">Categorías</label>
                            <select class=\"form-control\">
                              <option>Laptops</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Descripción</label>
                        <div class=\"col-sm-10\">
                         <form method=\"post\">
                                <textarea style=\"width: 100%;\" id=\"summernote\" name=\"editordata\"></textarea>
                        </form>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <div class=\"col-sm-offset-2 col-sm-10\">
                          <button type=\"submit\" id=\"getDescription\" class=\"btn btn-default\">Guardar</button>
                        </div>
                      </div> --> 
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
        // line 133
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
        // line 148
        echo twig_include($this->env, $context, "sidebar.html.twig");
        echo "
    </div>
    <div>
      ";
        // line 151
        echo twig_include($this->env, $context, "tree-category.html.twig");
        echo " 
    </div>
\t</div>

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
  <div class=\"modal-dialog\" role=\"document\">
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
        return array (  189 => 151,  183 => 148,  165 => 133,  33 => 4,  28 => 3,  11 => 1,);
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
  </style>

            <div class=\"dashboard-window col-md-9\">
            <a href=\"?p=feedLocal\">Atrás</a> 
            <ul id=\"entityGallery\">
            </ul>
            <br> 
            <div style=\"padding-bottom: 10px;\">
              <button class=\"btn btn-default\" data-toggle=\"modal\" data-target=\"#selectRelated\">Agrupar</button>
            </div>
            <table class=\"table table-striped table-hover\"> 
                                        <thead> 
                                             <tr style=\"border: 3px solid #dbdbdb;\"> 
                                                  <th>Distributor</th> 
                                                  <th>Product</th> 
                                                  <th>SKU</th> 
                                                  <th>Stock</th>
                                                  <th>Stock Updated</th>
                                                  <th>Price</th>
                                             </tr> 
                                        </thead> 
                                        <tbody id=\"relationProduct\"> 
                                         <!-- <tr>
                                            <td id=\"relationDis\"></td>
                                            <td id=\"relationName\">Nombre del producto</td>
                                            <td id=\"relationSku\">ABC-SKU</td>
                                            <td id=\"relationStock\">10</td>
                                            <td id=\"relationUpdated\">1 hour ago</td>
                                            <td id=\"relationPrice\">\$2,200.00</td>
                                          </tr> --> 
                                        </tbody> 
                                   </table> 
                            
                     <form class=\"form-horizontal attributes_product\">
                     <!-- 
                      <div class=\"form-group\">
                        <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Título</label>
                        <div class=\"col-sm-10\">
                          <input type=\"input\" id=\"data-product-name\" placeholder=\"cargando...\" class=\"form-control\" name=\"\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">SKU</label>
                        <div class=\"col-sm-10\">
                          <input type=\"input\" class=\"form-control\" id=\"data-product-sku\" placeholder=\"cargando...\"> 
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Precio</label>
                        <div class=\"col-sm-10\">
                          <input type=\"input\" class=\"form-control\" id=\"data-product-price\" placeholder=\"cargando...\">
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Main Img</label>
                        <div class=\"row\">
                          <div class=\"col-sm-4\">
                            <img id=\"data-product-mainImg\" src=\"http://www.ppimusic.ie/images/loading_anim.gif\" style=\"width: 170px;\">
                          </div>
                          <div class=\"col-sm-4\">
                            <label class=\"col-sm-2 control-label\">Categorías</label>
                            <select class=\"form-control\">
                              <option>Laptops</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">Descripción</label>
                        <div class=\"col-sm-10\">
                         <form method=\"post\">
                                <textarea style=\"width: 100%;\" id=\"summernote\" name=\"editordata\"></textarea>
                        </form>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <div class=\"col-sm-offset-2 col-sm-10\">
                          <button type=\"submit\" id=\"getDescription\" class=\"btn btn-default\">Guardar</button>
                        </div>
                      </div> --> 
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
  <div class=\"modal-dialog\" role=\"document\">
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
