<?php

/* web-services.html.twig */
class __TwigTemplate_a70de39908f1e3cba3348640b515a8f387545d68d91866bd2fda2687d3b45acb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "web-services.html.twig", 1);
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

       <link rel=\"stylesheet\" type=\"text/css\" href=\"./skin/pretty-json/css/pretty-json.css\" />

    <!-- lib -->
    <script type=\"text/javascript\" src=\"./skin/pretty-json/libs/jquery-1.11.1.min.js\" ></script>
    <script type=\"text/javascript\" src=\"./skin/pretty-json/libs/underscore-min.js\" ></script>
    <script type=\"text/javascript\" src=\"./skin/pretty-json/libs/backbone-min.js\" ></script>

    <!-- src dev
    <script type=\"text/javascript\" src=\"/pretty-json-debug.js\" ></script>
    -->
    <!-- src build -->
    <script type=\"text/javascript\" src=\"./skin/pretty-json/build/pretty-json-min.js\" ></script>
<style type=\"text/css\">
    .node-content-wrapper {
        display: block; 
    }
    .node-content-wrapper {
        display: block; 
    }
</style>
\t<div class=\"col-md-9\">
               <div class=\"tab-providers hiding-window\">
               <div style=\"width: 80%; margin: auto; \">
    \t\t        <h1 style=\"font-weight: 600\">Obtener [ER]</h1>
         \t\t\t <div>
                        <button class=\"btn btn-sm btn-default\" id=\"getER\">GET</button>
                     </div>
                     <div id=\"viewER\" style=\"border: 1px solid #e5e5e5; min-height: 200px; border-radius: 4px; margin-top: 20px; max-height: 700px; overflow-y: auto;\">
                         
                     </div>
         \t\t\t<div>
         \t\t\t</div>
     \t\t     </div>
               
     \t</div>\t
\t</div>
\t<div class=\"col-md-3\">
\t\t";
        // line 43
        echo twig_include($this->env, $context, "sidebar.html.twig");
        echo "
\t</div>

<script>
    var DataER = null;  

    function formatDataRow(dataER) {
        var data = []; 
        var idBase = dataER[0].ID;
        var tempAttr = [];
        x = 'nombre';   

        for( var i in dataER) {
            if(dataER[i].ID != idBase) {

                idBase = dataER[i].ID;
                console.log('--------------------'); 
                console.log(tempAttr); 
                tempAttr.unshift(dataER[i-2].ID); 
                data.push(tempAttr); 
                console.log('--------------------'); 
                tempAttr = []; 
            } else {
                tempAttr.push(dataER[i].type_attr +'  >>>>  '+ dataER[i].value_attr);
                //tempAttr[dataER[i].type_attr] =  dataER[i].value_attr
            }
            //console.log( dataER[i].type_attr ); 
        }
        tempAttr.unshift(dataER[dataER.length-1].ID); 
        data.push(tempAttr); 
        return data;  
    }

    \$(document).ready(function() {

        var el = {
            btnAction: \$('#getER'),
            btnClear: \$('#clear'),
            result: \$('#viewER')
        };

        var demo = {
            name:'John Doe',
            age: 20,
            children:[{name:'Jack', age:5}, {name:'Ann', age:8}],
            wife:{name:'Jane Doe', age:28 }
        };

        var jss = JSON.stringify(demo,null,4); 

        el.btnAction.on('click', function(){

             \$.ajax({
                url: 'controladores/getEntityER.php', 
                method: 'POST', 
                data: { }, 
                success: function(mensaje){
                    RR = JSON.parse(mensaje);
                    DataER = RR; 
                    console.log(RR); 
                    var json = jss; 
                    RR = formatDataRow(RR); 
                    try{ data = RR }
                    catch(e){ 
                        alert('not valid JSON');
                        return;
                    }

                    var node = new PrettyJSON.view.Node({ 
                        el:el.result,
                        data: data,
                        dateFormat:\"DD/MM/YYYY - HH24:MI:SS\"
                    });
                   \$('.node-bracket').click(); 
                }
            }); 

        });

    });
</script>
";
    }

    public function getTemplateName()
    {
        return "web-services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 43,  33 => 4,  28 => 3,  11 => 1,);
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

       <link rel=\"stylesheet\" type=\"text/css\" href=\"./skin/pretty-json/css/pretty-json.css\" />

    <!-- lib -->
    <script type=\"text/javascript\" src=\"./skin/pretty-json/libs/jquery-1.11.1.min.js\" ></script>
    <script type=\"text/javascript\" src=\"./skin/pretty-json/libs/underscore-min.js\" ></script>
    <script type=\"text/javascript\" src=\"./skin/pretty-json/libs/backbone-min.js\" ></script>

    <!-- src dev
    <script type=\"text/javascript\" src=\"/pretty-json-debug.js\" ></script>
    -->
    <!-- src build -->
    <script type=\"text/javascript\" src=\"./skin/pretty-json/build/pretty-json-min.js\" ></script>
<style type=\"text/css\">
    .node-content-wrapper {
        display: block; 
    }
    .node-content-wrapper {
        display: block; 
    }
</style>
\t<div class=\"col-md-9\">
               <div class=\"tab-providers hiding-window\">
               <div style=\"width: 80%; margin: auto; \">
    \t\t        <h1 style=\"font-weight: 600\">Obtener [ER]</h1>
         \t\t\t <div>
                        <button class=\"btn btn-sm btn-default\" id=\"getER\">GET</button>
                     </div>
                     <div id=\"viewER\" style=\"border: 1px solid #e5e5e5; min-height: 200px; border-radius: 4px; margin-top: 20px; max-height: 700px; overflow-y: auto;\">
                         
                     </div>
         \t\t\t<div>
         \t\t\t</div>
     \t\t     </div>
               
     \t</div>\t
\t</div>
\t<div class=\"col-md-3\">
\t\t{{ include('sidebar.html.twig') }}
\t</div>

<script>
    var DataER = null;  

    function formatDataRow(dataER) {
        var data = []; 
        var idBase = dataER[0].ID;
        var tempAttr = [];
        x = 'nombre';   

        for( var i in dataER) {
            if(dataER[i].ID != idBase) {

                idBase = dataER[i].ID;
                console.log('--------------------'); 
                console.log(tempAttr); 
                tempAttr.unshift(dataER[i-2].ID); 
                data.push(tempAttr); 
                console.log('--------------------'); 
                tempAttr = []; 
            } else {
                tempAttr.push(dataER[i].type_attr +'  >>>>  '+ dataER[i].value_attr);
                //tempAttr[dataER[i].type_attr] =  dataER[i].value_attr
            }
            //console.log( dataER[i].type_attr ); 
        }
        tempAttr.unshift(dataER[dataER.length-1].ID); 
        data.push(tempAttr); 
        return data;  
    }

    \$(document).ready(function() {

        var el = {
            btnAction: \$('#getER'),
            btnClear: \$('#clear'),
            result: \$('#viewER')
        };

        var demo = {
            name:'John Doe',
            age: 20,
            children:[{name:'Jack', age:5}, {name:'Ann', age:8}],
            wife:{name:'Jane Doe', age:28 }
        };

        var jss = JSON.stringify(demo,null,4); 

        el.btnAction.on('click', function(){

             \$.ajax({
                url: 'controladores/getEntityER.php', 
                method: 'POST', 
                data: { }, 
                success: function(mensaje){
                    RR = JSON.parse(mensaje);
                    DataER = RR; 
                    console.log(RR); 
                    var json = jss; 
                    RR = formatDataRow(RR); 
                    try{ data = RR }
                    catch(e){ 
                        alert('not valid JSON');
                        return;
                    }

                    var node = new PrettyJSON.view.Node({ 
                        el:el.result,
                        data: data,
                        dateFormat:\"DD/MM/YYYY - HH24:MI:SS\"
                    });
                   \$('.node-bracket').click(); 
                }
            }); 

        });

    });
</script>
{% endblock %}

", "web-services.html.twig", "C:\\xampp\\htdocs\\GIT\\OMG\\last\\last\\last\\last\\stockOMG\\OMGstocks\\templates\\web-services.html.twig");
    }
}
