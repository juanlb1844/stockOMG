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
    #entityGallery img {
      width: 200px; 
      border: 1px solid gray;
    }
    #entityGallery ul, #entityGallery li {
      display: inline-block;
      border: 0px;
      text-align: center; 
    }
  </style>

            <div class=\"dashboard-window col-md-9\">

            <a href=\"?p=feedLocal\">Atrás</a> 
                            
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
        // line 84
        echo twig_include($this->env, $context, "uploaderFiles.html.twig");
        echo "
                      </div>
                    </form>

                    <div class=\"form-horizontal\">
                       <div class=\"form-group\">
                        <div class=\"col-sm-offset-2 col-sm-10\">
                          <button type=\"submit\" id=\"saveProduct\" class=\"btn btn-primary\">Guardar</button>
                        </div>
                       </div>
                     </div>

                     <ul id=\"entityGallery\">
                     </ul>

           </div> 
\t<div class=\"col-md-3\">
    <div>
      ";
        // line 102
        echo twig_include($this->env, $context, "sidebar.html.twig");
        echo "
    </div>
    <div>
      ";
        // line 105
        echo twig_include($this->env, $context, "tree-category.html.twig");
        echo " 
    </div>
\t</div>
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
        return array (  143 => 105,  137 => 102,  116 => 84,  33 => 4,  28 => 3,  11 => 1,);
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
    #entityGallery img {
      width: 200px; 
      border: 1px solid gray;
    }
    #entityGallery ul, #entityGallery li {
      display: inline-block;
      border: 0px;
      text-align: center; 
    }
  </style>

            <div class=\"dashboard-window col-md-9\">

            <a href=\"?p=feedLocal\">Atrás</a> 
                            
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
                        <div class=\"col-sm-offset-2 col-sm-10\">
                          <button type=\"submit\" id=\"saveProduct\" class=\"btn btn-primary\">Guardar</button>
                        </div>
                       </div>
                     </div>

                     <ul id=\"entityGallery\">
                     </ul>

           </div> 
\t<div class=\"col-md-3\">
    <div>
      {{ include('sidebar.html.twig') }}
    </div>
    <div>
      {{ include('tree-category.html.twig') }} 
    </div>
\t</div>
{% endblock %}

", "producto.html.twig", "C:\\xampp\\htdocs\\projects\\OMGstocks\\OMGstocks\\templates\\producto.html.twig");
    }
}
