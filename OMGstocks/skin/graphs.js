$(document).ready( function() {

     var idChart = 0; 

        ko.components.register('dashboard-grid', {
            viewModel: {
                createViewModel: function (controller, componentInfo) {
                    var ViewModel = function (controller, componentInfo) {
                        var grid = null;

                        this.widgets = controller.widgets;

                        this.afterAddWidget = function (items) {
                            if (grid == null) {
                                grid = $(componentInfo.element).find('.grid-stack').gridstack({
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
                    '<div class="grid-stack" data-bind="foreach: {data: widgets, afterRender: afterAddWidget}">',
                    '   <div class="grid-stack-item" data-bind="attr: {\'data-gs-x\': $data.x, \'data-gs-y\': $data.y, \'data-gs-width\': $data.width, \'data-gs-height\': $data.height, \'data-gs-auto-position\': $data.auto_position}">',
                    '       <div class="grid-stack-item-content"><button data-bind="click: $root.deleteWidget" class="pull-left btn btn-default" style="font-weight: bold;">&times;</button><canvas id="myChart'+(idChart)+'"></canvas></div>',
                    '   </div>',
                    '</div> '
                ].join('')
        });

        var typeGr = ['', 'line', 'bar', 'horizontalBar']; 

        $(function () {
            var Controller = function (widgets) {
                var self = this;

                this.widgets = ko.observableArray(widgets);

                this.addNewWidget = function () {
                    //idChart++; 
                    //alert(idChart); 
                    this.widgets.push({
                        x: 0,
                        y: 0,
                        //width: Math.floor(1 + 3 * Math.random()),
                        //height: Math.floor(1 + 3 * Math.random()),
                        height: 4,
                        width: 4, 
                        auto_position: true
                    });
                    ///////////////////////////////////////////////////////////////
                        setTimeout(function() {
                            xx = jQuery('canvas')[jQuery('canvas').length-1];  
                            //var ctx = document.getElementById('myChart').getContext('2d');
                            var ctx = xx.getContext('2d');
                            var charts = new Chart(ctx, {
                                type: typeGr[ Math.floor((Math.random() * 3) + 1)], 
                                data: {
                                    labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio"],
                                    datasets: [{
                                        label: "Ventas del mes",
                                        /*backgroundColor: 'rgb(255, 99, 132)',*/
                                        backgroundColor: 'orange',
                                        borderColor: 'rgb(255, 99, 132)',
                                        data: [0, 10, 5, 2, 20, 30, 45],
                                    }]
                                }, 
                                // Configuration options go here
                                options: {}
                            });
                        }, 100); 
                    ///////////////////////////////////////////////////////////////

                    return false;
                };

                this.deleteWidget = function (item) {
                    self.widgets.remove(item);
                    return false;
                };
            };

            var widgets = [
                {x: 0, y: 0, width: 4, height: 4}/*,
                {x: 4, y: 4, width: 4, height: 4},
                {x: 0, y: 0, width: 4, height: 4},
                {x: 4, y: 4, width: 4, height: 4}*/ 
            ];

            var controller = new Controller(widgets);
            ko.applyBindings(controller);
        });
        
}); 