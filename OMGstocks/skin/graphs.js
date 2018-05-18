$(document).ready( function() {
    
$.ajax({
        url: 'controladores/getDataDashboard.php', 
        method: 'POST', 
        data: { type : 'cant_products'}, 
        success: function(response) {
          var dataDash = JSON.parse(response); 
          console.log(dataDash); 
          var dataArray = []; 
          var dataArray2 = []; 
          var colors = []; 
          for( var i = 0 in dataDash ) {
            dataArray.push(dataDash[i].distributor_name);  
            colors.push( 'rgb('+Math.floor((Math.random() * 70) + 1)+','+Math.floor((Math.random() * 100) + 1)+','+Math.floor((Math.random() * 256) + 1) +')');
          }
          for( var i = 0 in dataDash ) {
            dataArray2.push(parseInt(dataDash[i].CANT)); 
          }
          //console.log(dataArray); 
          initGraphs(dataArray, dataArray2, colors); 
        }
       });
 

    function initGraphs(data, data2, colors) {

                setTimeout(function(){
                var ctx = document.getElementById('myChart0').getContext('2d');
                var chart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: data,
                        datasets: [{
                            label: "Proveedores",
                            backgroundColor: colors,
                            borderColor: 'white',
                            data: data2,
                        }]
                    }, 
                    options: {}
                });
            }, 2000);   

              setTimeout(function(){
               $('#addWidget').click();
              }, 1000); 
    }

        
}); 