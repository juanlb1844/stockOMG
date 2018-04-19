<?php

/* tree-category.html.twig */
class __TwigTemplate_ce2dd0b0dceeeec605d7519278869dcc3660d3261095f7e52513b1ebc77faa2a extends Twig_Template
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
        echo "     <style type=\"text/css\">
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
          .line-switch:hover {
            cursor: pointer;
          }
          table:hover {
            cursor: pointer;
          }
     </style>
     <script type=\"text/javascript\" src=\"skin/tree-category.js\"></script>
     <div class=\"col-sm-12\" style=\"border-radius: 4px; background-color: #eff3f6; padding-top: 10px; padding-bottom: 10px; \">
\t\t<div class=\"col-sm-12\" style=\"margin-bottom: 10px; \">
\t\t          <div class=\"col-sm-6\">
\t\t               <a href=\"\">Desplegar</a>
\t\t          </div>
\t\t          <div class=\"col-sm-6\">
\t\t               <a href=\"\">Contraer</a>
\t\t          </div>
\t\t     </div>
          <ul class=\"tree-categories\" style=\"clear: both;\"> 
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
     </div>";
    }

    public function getTemplateName()
    {
        return "tree-category.html.twig";
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
        return new Twig_Source("     <style type=\"text/css\">
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
          .line-switch:hover {
            cursor: pointer;
          }
          table:hover {
            cursor: pointer;
          }
     </style>
     <script type=\"text/javascript\" src=\"skin/tree-category.js\"></script>
     <div class=\"col-sm-12\" style=\"border-radius: 4px; background-color: #eff3f6; padding-top: 10px; padding-bottom: 10px; \">
\t\t<div class=\"col-sm-12\" style=\"margin-bottom: 10px; \">
\t\t          <div class=\"col-sm-6\">
\t\t               <a href=\"\">Desplegar</a>
\t\t          </div>
\t\t          <div class=\"col-sm-6\">
\t\t               <a href=\"\">Contraer</a>
\t\t          </div>
\t\t     </div>
          <ul class=\"tree-categories\" style=\"clear: both;\"> 
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
     </div>", "tree-category.html.twig", "C:\\xampp\\htdocs\\projects\\OMGstocks\\OMGstocks\\templates\\tree-category.html.twig");
    }
}
