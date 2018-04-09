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

            <div class=\"dashboard-window col-md-9\">
            <a href=\"?p=feedLocal\">Atrás</a> 
                     <form class=\"form-horizontal\">
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
                            <!-- <input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Password\"> --> 
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
                          <!-- <input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Password\"> --> 
                         <form method=\"post\">
                                <textarea style=\"width: 100%;\" id=\"summernote\" name=\"editordata\"></textarea>
                        </form>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <div class=\"col-sm-offset-2 col-sm-10\">
                          <button type=\"submit\" id=\"getDescription\" class=\"btn btn-default\">Guardar</button>
                        </div>
                      </div>
                    </form>
                    <div data-bind=\"component: {name: 'dashboard-grid', params: \$data}\"></div>
           </div> 
\t<div class=\"col-md-3\">
\t\t";
        // line 64
        echo twig_include($this->env, $context, "sidebar.html.twig");
        echo "
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
        return array (  96 => 64,  33 => 4,  28 => 3,  11 => 1,);
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

            <div class=\"dashboard-window col-md-9\">
            <a href=\"?p=feedLocal\">Atrás</a> 
                     <form class=\"form-horizontal\">
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
                            <!-- <input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Password\"> --> 
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
                          <!-- <input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Password\"> --> 
                         <form method=\"post\">
                                <textarea style=\"width: 100%;\" id=\"summernote\" name=\"editordata\"></textarea>
                        </form>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <div class=\"col-sm-offset-2 col-sm-10\">
                          <button type=\"submit\" id=\"getDescription\" class=\"btn btn-default\">Guardar</button>
                        </div>
                      </div>
                    </form>
                    <div data-bind=\"component: {name: 'dashboard-grid', params: \$data}\"></div>
           </div> 
\t<div class=\"col-md-3\">
\t\t{{ include('sidebar.html.twig') }}
\t</div>
{% endblock %}

", "producto.html.twig", "C:\\xampp\\htdocs\\projects\\OMGstocks\\OMGstocks\\templates\\producto.html.twig");
    }
}