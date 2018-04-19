<?php

/* uploadFiles.html.twig */
class __TwigTemplate_9d8f5efd8ebac953c80ddde036c4e26b08d838d85de19f24ce2f66a01ec01617 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "uploadFiles.html.twig", 1);
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

\t\t<!--  d r o p  z o n e  --> 
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"skin/dropzone/dropzone.css\">
\t<script type=\"text/javascript\" src=\"skin/dropzone/dropzone.js\"></script>

\t<div style=\"width: 600px;\">
\t\t<div class=\"pull-right\">
\t\t\t<button class=\"btn btn-default clearDropZone\">Limpiar</button>
\t\t</div>
\t\t<!-- Drop zone --> 
\t\t<div id=\"dropzone1\">
\t\t</div> 
\t</div>


<script type=\"text/javascript\">
\t/* D r o p  Z o n e */ 
var idCatnom = 10; 
var cateogoryName = 'pantallas'; 

jQuery(document).ready( function () {

  Dropzone.autoDiscover = false;
  Dropzone.options.myDropzone = {
  // The name that will be used to transfer the file
  renameFile: function (file) {
        file.name = new Date().getTime() + '_' + file.name;
    }, 
  maxFilesize: 1 
};
  // Now that the DOM is fully loaded, create the dropzone, and setup the
  // event listeners
  //
  var myDropzone = new Dropzone(\"#dropzone1\", { 
    url:'controladores/FILES/webservice.php', 
    init : function() {
                    \$('#dropzone1').addClass('dropzone'); 
                    //alert('creado');
                  },  
    renameFile: function (file) { 
        return file.name+':'+ idCatnom; 
    }
  });

  myDropzone.on(\"addedfile\", function(file) {
      //alert('archivo anhadido.'); 
      console.log(\"..\"); 
  });


  \$('#dropzone1').append('<div class=\"dz-message needsclick\">  <h3 style=\"color: gray;\" class=\"note needsclick\"><strong>Arrastra archivos aquí o haz click para cargarlos</strong></h3></div>'); 


});
</script>


";
    }

    public function getTemplateName()
    {
        return "uploadFiles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  28 => 3,  11 => 1,);
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

\t\t<!--  d r o p  z o n e  --> 
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"skin/dropzone/dropzone.css\">
\t<script type=\"text/javascript\" src=\"skin/dropzone/dropzone.js\"></script>

\t<div style=\"width: 600px;\">
\t\t<div class=\"pull-right\">
\t\t\t<button class=\"btn btn-default clearDropZone\">Limpiar</button>
\t\t</div>
\t\t<!-- Drop zone --> 
\t\t<div id=\"dropzone1\">
\t\t</div> 
\t</div>


<script type=\"text/javascript\">
\t/* D r o p  Z o n e */ 
var idCatnom = 10; 
var cateogoryName = 'pantallas'; 

jQuery(document).ready( function () {

  Dropzone.autoDiscover = false;
  Dropzone.options.myDropzone = {
  // The name that will be used to transfer the file
  renameFile: function (file) {
        file.name = new Date().getTime() + '_' + file.name;
    }, 
  maxFilesize: 1 
};
  // Now that the DOM is fully loaded, create the dropzone, and setup the
  // event listeners
  //
  var myDropzone = new Dropzone(\"#dropzone1\", { 
    url:'controladores/FILES/webservice.php', 
    init : function() {
                    \$('#dropzone1').addClass('dropzone'); 
                    //alert('creado');
                  },  
    renameFile: function (file) { 
        return file.name+':'+ idCatnom; 
    }
  });

  myDropzone.on(\"addedfile\", function(file) {
      //alert('archivo anhadido.'); 
      console.log(\"..\"); 
  });


  \$('#dropzone1').append('<div class=\"dz-message needsclick\">  <h3 style=\"color: gray;\" class=\"note needsclick\"><strong>Arrastra archivos aquí o haz click para cargarlos</strong></h3></div>'); 


});
</script>


{% endblock %}
", "uploadFiles.html.twig", "C:\\xampp\\htdocs\\projects\\OMGstocks\\OMGstocks\\templates\\uploadFiles.html.twig");
    }
}
