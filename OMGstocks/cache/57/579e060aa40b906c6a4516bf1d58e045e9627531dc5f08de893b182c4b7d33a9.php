<?php

/* content.html.twig */
class __TwigTemplate_e719c41a956cc4bf90b3bfdce89a86c3b835098f9a6385e84d1ae7b3d9e9cacf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "content.html.twig", 1);
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
\t\t
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.css\">
\t\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.js\"></script>

\t\t<!-- dashboard --> 
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.js\"></script>
\t    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.5.0/lodash.min.js\"></script>
\t    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/knockout/3.2.0/knockout-min.js\"></script>
\t    
\t    <!-- <script src=\"../dist/gridstack.js\"></script>--> 
\t    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.3.0/gridstack.min.css\" />
\t    <script type=\"text/javascript\" src='https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.3.0/gridstack.min.js'></script>
\t    <script type=\"text/javascript\" src='https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.3.0/gridstack.jQueryUI.min.js'></script>
\t    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js\"></script>

\t    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js\"></script>

     \t<script type=\"text/javascript\" src=\"skin/graphs.js\"></script>  

\t<style type=\"text/css\">
        .grid-stack {
            background: lightgoldenrodyellow;
        }
        .grid-stack-item-content {
            color: #2c3e50;
            text-align: center;
            background-color: #eff3f6; 
            border: 2px solid #e5e5e5;
            box-shadow: 1px 5px 9px 2px #e8edf1;
        }
        .grid-stack-item-content {
\t\t\tborder-radius: 4px; 
\t\t\tpadding-top: 4px; 
\t\t\tpadding-left: 4px; 
\t\t}
\t\t.grid-stack {
\t\t\tbackground-color: white;  
\t\t\t
\t\t\tpadding-top: 20px!important; 
\t\t}
\t\tdiv {
\t\t\ttransition-property: all!important; 
\t\t\ttransition-duration: .2s; 
\t\t} 

\t</style>

    <div class=\"col-md-9\">
        <div class=\"row\" style=\"margin-bottom: 40px;\">
        <div class=\"col-md-6\">
          <h1 class=\"title-template\" style=\"font-weight: 500\">Dashbard</h1>
        </div>
        <div class=\"col-md-6\" style=\"padding-top: 25px;\">
          <button class=\"btn btn-default btn-sty1 pull-right\" id=\"addWidget\" data-bind=\"click: addNewWidget\" style=\"    box-shadow: 1px 2px 6px 1px #e5e5e5;\">Añadir Indicador</button> 
        </div>
            
        </div>
          <div data-bind=\"component: {name: 'dashboard-grid', params: \$data}\"></div>
\t</div>
\t<div class=\"col-md-3\">
\t\t";
        // line 67
        echo twig_include($this->env, $context, "sidebar.html.twig");
        echo "
\t</div>

<script type=\"text/javascript\">
\t
     var idChart = 0; 

        ko.components.register('dashboard-grid', {
            viewModel: {
                createViewModel: function (controller, componentInfo) {
                    var ViewModel = function (controller, componentInfo) {
                        var grid = null;

                        this.widgets = controller.widgets;

                        this.afterAddWidget = function (items) {
                            if (grid == null) {
                                grid = \$(componentInfo.element).find('.grid-stack').gridstack({
                                    auto: false
                                }).data('gridstack');
                            }

                            var item = _.find(items, function (i) { return i.nodeType == 1 });
                            grid.addWidget(item);
                            ko.utils.domNodeDisposal.addDisposeCallback(item, function () {
                                grid.removeWidget(item);
                            });
                        };
                    };

                    return new ViewModel(controller, componentInfo);
                }
            },
            template:
                [
                    '<div class=\"grid-stack\" data-bind=\"foreach: {data: widgets, afterRender: afterAddWidget}\">',
                    '   <div class=\"grid-stack-item\" data-bind=\"attr: {\\'data-gs-x\\': \$data.x, \\'data-gs-y\\': \$data.y, \\'data-gs-width\\': \$data.width, \\'data-gs-height\\': \$data.height, \\'data-gs-auto-position\\': \$data.auto_position}\">',
                    '       <div class=\"grid-stack-item-content\"><button data-bind=\"click: \$root.deleteWidget\" class=\"pull-left btn btn-default\" style=\"font-weight: bold; color: #656565; border: 1px solid #e5e5e5;\">&times;</button><canvas id=\"myChart'+(idChart)+'\"></canvas></div>',
                    '   </div>',
                    '</div> '
                ].join('')
        });

        var typeGr = ['', 'line', 'bar', 'horizontalBar']; 

        \$(function () {
            var Controller = function (widgets) {
                var self = this;

                this.widgets = ko.observableArray(widgets);

                this.addNewWidget = function () {
                    this.widgets.push({
                        x: 0,
                        y: 0,
                        height: 4,
                        width: 6, 
                        auto_position: true
                    });
                    ///////////////////////////////////////////////////////////////
                        \$.ajax({
                                url: 'controladores/getDataDashboard.php', 
                                method: 'POST', 
                                data: { type : 'cant_status' }, 
                                success: function(response) {
                                  var dataDash = JSON.parse(response); 
                                  console.log(dataDash); 
                                  var dataArray = []; 
                                  var dataArray2 = []; 
                                  for( var i = 0 in dataDash ) {
                                    dataArray.push(dataDash[i].flag_status); 
                                  }
                                  for( var i = 0 in dataDash ) {
                                    dataArray2.push(parseInt(dataDash[i].CANT)); 
                                  }
                                        setTimeout(function() {
                                            xx = jQuery('canvas')[jQuery('canvas').length-1];  
                                            var ctx = xx.getContext('2d');
                                            var charts = new Chart(ctx, {
                                                type: typeGr[ Math.floor((Math.random() * 3) + 1)], 
                                                data: {
                                                    labels: dataArray,
                                                    datasets: [{
                                                        label: \"Estados del catálogo\",
                                                        /*backgroundColor: 'rgb(255, 99, 132)',*/
                                                        backgroundColor: '#337ab7',
                                                        borderColor: '#e5e5e5',
                                                        data: dataArray2, 
                                                    }]
                                                }, 
                                                // Configuration options go here
                                                options: {}
                                            });
                                        }, 200); 
                                  
                                }
                               });


                    ///////////////////////////////////////////////////////////////

                    return false;
                };

                this.deleteWidget = function (item) {
                    self.widgets.remove(item);
                    return false;
                };
            };

            var widgets = [
                {x: 0, y: 0, width: 4, height: 5}/*,
                {x: 4, y: 4, width: 4, height: 4},
                {x: 0, y: 0, width: 4, height: 4},
                {x: 4, y: 4, width: 4, height: 4}*/ 
            ];

            var controller = new Controller(widgets);
            ko.applyBindings(controller);
        });



</script>
";
    }

    public function getTemplateName()
    {
        return "content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 67,  33 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" {% extends \"layout.html.twig\" %}

{% block content %} 
\t{{parent()}} 
\t\t
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.css\">
\t\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.js\"></script>

\t\t<!-- dashboard --> 
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.js\"></script>
\t    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.5.0/lodash.min.js\"></script>
\t    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/knockout/3.2.0/knockout-min.js\"></script>
\t    
\t    <!-- <script src=\"../dist/gridstack.js\"></script>--> 
\t    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.3.0/gridstack.min.css\" />
\t    <script type=\"text/javascript\" src='https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.3.0/gridstack.min.js'></script>
\t    <script type=\"text/javascript\" src='https://cdnjs.cloudflare.com/ajax/libs/gridstack.js/0.3.0/gridstack.jQueryUI.min.js'></script>
\t    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js\"></script>

\t    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js\"></script>

     \t<script type=\"text/javascript\" src=\"skin/graphs.js\"></script>  

\t<style type=\"text/css\">
        .grid-stack {
            background: lightgoldenrodyellow;
        }
        .grid-stack-item-content {
            color: #2c3e50;
            text-align: center;
            background-color: #eff3f6; 
            border: 2px solid #e5e5e5;
            box-shadow: 1px 5px 9px 2px #e8edf1;
        }
        .grid-stack-item-content {
\t\t\tborder-radius: 4px; 
\t\t\tpadding-top: 4px; 
\t\t\tpadding-left: 4px; 
\t\t}
\t\t.grid-stack {
\t\t\tbackground-color: white;  
\t\t\t
\t\t\tpadding-top: 20px!important; 
\t\t}
\t\tdiv {
\t\t\ttransition-property: all!important; 
\t\t\ttransition-duration: .2s; 
\t\t} 

\t</style>

    <div class=\"col-md-9\">
        <div class=\"row\" style=\"margin-bottom: 40px;\">
        <div class=\"col-md-6\">
          <h1 class=\"title-template\" style=\"font-weight: 500\">Dashbard</h1>
        </div>
        <div class=\"col-md-6\" style=\"padding-top: 25px;\">
          <button class=\"btn btn-default btn-sty1 pull-right\" id=\"addWidget\" data-bind=\"click: addNewWidget\" style=\"    box-shadow: 1px 2px 6px 1px #e5e5e5;\">Añadir Indicador</button> 
        </div>
            
        </div>
          <div data-bind=\"component: {name: 'dashboard-grid', params: \$data}\"></div>
\t</div>
\t<div class=\"col-md-3\">
\t\t{{ include('sidebar.html.twig') }}
\t</div>

<script type=\"text/javascript\">
\t
     var idChart = 0; 

        ko.components.register('dashboard-grid', {
            viewModel: {
                createViewModel: function (controller, componentInfo) {
                    var ViewModel = function (controller, componentInfo) {
                        var grid = null;

                        this.widgets = controller.widgets;

                        this.afterAddWidget = function (items) {
                            if (grid == null) {
                                grid = \$(componentInfo.element).find('.grid-stack').gridstack({
                                    auto: false
                                }).data('gridstack');
                            }

                            var item = _.find(items, function (i) { return i.nodeType == 1 });
                            grid.addWidget(item);
                            ko.utils.domNodeDisposal.addDisposeCallback(item, function () {
                                grid.removeWidget(item);
                            });
                        };
                    };

                    return new ViewModel(controller, componentInfo);
                }
            },
            template:
                [
                    '<div class=\"grid-stack\" data-bind=\"foreach: {data: widgets, afterRender: afterAddWidget}\">',
                    '   <div class=\"grid-stack-item\" data-bind=\"attr: {\\'data-gs-x\\': \$data.x, \\'data-gs-y\\': \$data.y, \\'data-gs-width\\': \$data.width, \\'data-gs-height\\': \$data.height, \\'data-gs-auto-position\\': \$data.auto_position}\">',
                    '       <div class=\"grid-stack-item-content\"><button data-bind=\"click: \$root.deleteWidget\" class=\"pull-left btn btn-default\" style=\"font-weight: bold; color: #656565; border: 1px solid #e5e5e5;\">&times;</button><canvas id=\"myChart'+(idChart)+'\"></canvas></div>',
                    '   </div>',
                    '</div> '
                ].join('')
        });

        var typeGr = ['', 'line', 'bar', 'horizontalBar']; 

        \$(function () {
            var Controller = function (widgets) {
                var self = this;

                this.widgets = ko.observableArray(widgets);

                this.addNewWidget = function () {
                    this.widgets.push({
                        x: 0,
                        y: 0,
                        height: 4,
                        width: 6, 
                        auto_position: true
                    });
                    ///////////////////////////////////////////////////////////////
                        \$.ajax({
                                url: 'controladores/getDataDashboard.php', 
                                method: 'POST', 
                                data: { type : 'cant_status' }, 
                                success: function(response) {
                                  var dataDash = JSON.parse(response); 
                                  console.log(dataDash); 
                                  var dataArray = []; 
                                  var dataArray2 = []; 
                                  for( var i = 0 in dataDash ) {
                                    dataArray.push(dataDash[i].flag_status); 
                                  }
                                  for( var i = 0 in dataDash ) {
                                    dataArray2.push(parseInt(dataDash[i].CANT)); 
                                  }
                                        setTimeout(function() {
                                            xx = jQuery('canvas')[jQuery('canvas').length-1];  
                                            var ctx = xx.getContext('2d');
                                            var charts = new Chart(ctx, {
                                                type: typeGr[ Math.floor((Math.random() * 3) + 1)], 
                                                data: {
                                                    labels: dataArray,
                                                    datasets: [{
                                                        label: \"Estados del catálogo\",
                                                        /*backgroundColor: 'rgb(255, 99, 132)',*/
                                                        backgroundColor: '#337ab7',
                                                        borderColor: '#e5e5e5',
                                                        data: dataArray2, 
                                                    }]
                                                }, 
                                                // Configuration options go here
                                                options: {}
                                            });
                                        }, 200); 
                                  
                                }
                               });


                    ///////////////////////////////////////////////////////////////

                    return false;
                };

                this.deleteWidget = function (item) {
                    self.widgets.remove(item);
                    return false;
                };
            };

            var widgets = [
                {x: 0, y: 0, width: 4, height: 5}/*,
                {x: 4, y: 4, width: 4, height: 4},
                {x: 0, y: 0, width: 4, height: 4},
                {x: 4, y: 4, width: 4, height: 4}*/ 
            ];

            var controller = new Controller(widgets);
            ko.applyBindings(controller);
        });



</script>
{% endblock %}
", "content.html.twig", "C:\\xampp\\htdocs\\GIT\\OMG\\last\\last\\last\\last\\stockOMG\\OMGstocks\\templates\\content.html.twig");
    }
}
