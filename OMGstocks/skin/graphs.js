$(document).ready( function() {



initGraphs(); 

    function initGraphs() {

                setTimeout(function(){
                var ctx = document.getElementById('myChart0').getContext('2d');
                var chart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["CVA", "TechData", "Ingram", "Existentes"],
                        datasets: [{
                            label: "Proveedores",
                            backgroundColor: '#337ab7',
                            borderColor: 'white',
                            data: [200, 400, 900, 1500],
                        }]
                    }, 
                    // Configuration options go here
                    options: {}
                });
            }, 200);  

              setTimeout(function(){
               $('#addWidget').click();
              }, 1000); 
              setTimeout(function(){
               $('#addWidget').click();
              }, 2000); 
    }

        
}); 