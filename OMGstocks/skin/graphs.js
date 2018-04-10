$(document).ready( function() {



            initGraphs(); 

    function initGraphs() {
                setTimeout(function(){
                var ctx = document.getElementById('myChart0').getContext('2d');
                var chart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio"],
                        datasets: [{
                            label: "Ventas del mes",
                            backgroundColor: 'rgb(255, 99, 132)',
                            borderColor: 'rgb(255, 99, 132)',
                            data: [0, 10, 5, 2, 20, 30, 45],
                        }]
                    }, 
                    // Configuration options go here
                    options: {}
                });
            }, 1000);  

              setTimeout(function(){
               $('#addWidget').click();
              }, 500); 
              setTimeout(function(){
               $('#addWidget').click();
              }, 900); 
              setTimeout(function(){
               $('#addWidget').click();
              }, 1300);
              setTimeout(function(){
               $('#addWidget').click();
              }, 1700);
    }

        
}); 