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
  <script type=\"text/javascript\" src=\"skin/productoFunctions.js\"></script>
  <link href=\"skin/summernote/summernote.css\" rel=\"stylesheet\">
  <script src=\"skin/summernote/summernote.js\"></script>

  <style type=\"text/css\">
    #entityGallery {
      border-radius: 4px;
      width: 100%;
      background-color: #eff3f6;
      padding-top: 10px;
    }
    #entityGallery li img:hover {
      cursor: pointer;
      transition-property: all; 
      transition-duration: .2s; 
      transform: scale(1.1);
      z-index: 0; 
    }
    #entityGallery img {
      transition-property: all; 
      transition-duration: .2s; 
      width: 120px; 
      /*border: 1px solid gray;*/
    }
    #entityGallery li { 
      margin-left: 10px; 
    }
    #entityGallery ul, #entityGallery li {
      display: inline-block;
      border: 0px;
      text-align: center; 
    }

     #__familia, #__stock, #__NormalPrice {
      display: none!important; 
    }
    table {
      font-size: 12px; 
    }
  </style>


  <style type=\"text/css\">
    .select-attrs {
      font-weight: bold;
    }
    .select-attrs:hover {
      cursor: pointer;
    }
    .mod-container-attr {
      padding-top: 10px; 
      padding-bottom: 10px; 
    }
    .mod-distributor-name {
      background-color: #eeeeee;
    }
    .mod-distributor-name:hover {
      background-color: #dbdd15;
      cursor: pointer; 
    }
    .mod-distributor-name:active {
      transform: scale(.95);
    }
    .createGroup {
      position: fixed;
      bottom: 10px; 
      left: 10px;
      height: 70px; 
      width: 70px; 
      border-radius: 50%; 
      z-index: 99;
          padding-top: 20px;
    color: white;
    background-color: #03A9F4;
    font-weight: bold;
    text-align: center;
    }
    .selected-attr {
      color: #03A9F4;
    }
    #nextProduct:hover {
      cursor: pointer;
    }
  </style>
  <style type=\"text/css\">
    .entity-ER {
      display: none; 
    }

    /* elementos para los STEPS #spanglish */
    .attributes_product { display: none; }
    #entityGallery { display: none; }
    .gallery_upload { display: none; }
    .save_entity { display: none; }
    /* // */ 
    /* seccond STEP */ 
     .panel-categories { display: none; }  

    .steps_integration {  } 

    .search-to-related {
      height: 100px; 
      margin-bottom: 10px; 
    }
    .search-icon {
      height: 40px; width: 40px; 
      background-image: url('./skin/media/search.png');
      background-size: cover;
      background-position: center;
    }
    .search-icon:active {
      transform: scale(1.05);
    }
    .search-body {
      height: 40px;
      border-radius: 20px; 
      border: 2px solid #418cff;
    }

    table td{
      font-weight: 400!important;
      border: none!important;
      padding-top: 12px!important;
    }
    table thead tr {
      height: 40px;
      border: none!important;
    }
    table tbody tr {
      height: 40px;
      border: none!important;
    }
    table th {
      font-weight: 600!important;
      padding: 5px;
      border: none!important;
    }
    table tbody {
          box-shadow: 0px 0px 13px 0px #c0d9f3;
    }


    #relationProduct_search tr {
      height: 75px;
      font-size: 14px;
    }
    #relationProduct_search td, #relationProduct_search tr {
      padding-top: 20px!important;
    }

    .second-step-position {
      margin-left: 33%; 
      transition-property: all; 
      transition-duration: .5s;
    }
    .last-step-position {
      margin-left: 66%; 
      transition-property: all; 
      transition-duration: .5s;
    }
    .step-indicator {
      transition-property: all; 
      transition-duration: .5s; 
    }
    .active-step {
      transition-duration: .5s; 
      transition-property: all; 
      color: #03a9f4; 
    }
  </style>

    <div class=\"dashboard-window col-md-9\">
          <div class=\"col-md-12 steps-view\" style=\"height: 30px; text-align: center; color: #03a9f4; font-size: 20px; font-weight: bold; color: gray; \">
             <div class=\"col-md-4 active-step\" id=\"first-step-text\">
               <p>Agrupar</p>
             </div>
             <div class=\"col-md-4\" id=\"second-step-text\">
               <p>Categorizar</p>
             </div>
             <div class=\"col-md-4\" id=\"last-step-text\">
               <p>Revisar</p>
             </div>
          </div>
          <div class=\"col-md-12\" style=\"margin-bottom: 40px; \">
            <div class=\"col-md-4 step-indicator\" style=\"border: 1px solid #03a9f4;\"></div>
          </div>
          <div style=\"margin-bottom: 20px;\">
           
           <!-- 
            <a style=\"padding:2px 7px 2px 7px; font-weight: bold; font-size: 12px;\" href=\"?p=feedLocal\" class=\"btn btn-primary btn-sm\">Atrás</a> 

            <button style=\"padding:2px 7px 2px 7px; font-weight: bold; font-size: 12px;\" id=\"nextProduct\" class=\"btn btn-primary btn-sm pull-right\">Siguiente</button> --> 
            <!-- Galería --> 
            <ul style=\"margin-top: 10px;\" id=\"entityGallery\">
            </ul>

            <div class=\"steps_integration\">
              <!-- <button style=\"padding:2px 7px 2px 7px; font-weight: bold; font-size: 12px;\" class=\"btn btn-default btn-sm\" id=\"next-step\">Siguiente</button> 
              <button style=\"padding:2px 7px 2px 7px; font-weight: bold; font-size: 12px;\" class=\"btn btn-default btn-sm\" id=\"return-step\">Atrás</button> -->
            </div>

            <ul style=\"margin-top: 10px; display: none;\">
            </ul>
          </div>
        
        <!-- 
           <div class=\"createGroup selectAttrsVal\" data-toggle=\"modal\" data-target=\"#selectRelated\">  <span style=\"line-height: 20px;\">Agrupar</span> 
           </div> --> 
        

        <!-- Relación con otros productos --> 
        <div class=\"first-step-element col-md-12\" style=\"margin-top: 20px;\">
            <h4 id=\"msg-related\">No se encontraron coincidencias</h4>
        </div>

        <table class=\"table-relateds first-step-element table table-striped table-hover table-condensed\" style=\"min-height: 200px;\"> 
              <thead> 
                   <tr style=\"font-size: 13px;
    color: white;
    background-color: #4084ef;
    font-weight: 100!important;\"> 
                        <th>Distributor</th> 
                        <th>Product</th> 
                        <th>SKU</th> 
                        <th>Stock</th>
                        <th>Stock Updated</th>
                        <th>Price</th>
                        <th>Part Number</th>
                        <th>UPC</th>
                        <th>Model</th>
                        <th>Currency</th>
                        <th></th>
                        <th>meta</th>
                   </tr> 
              </thead> 
              <tbody id=\"relationProduct\"> 
              </tbody> 
         </table> 
           
           <div id=\"first-step\" class=\"first-step-element col-md-12\" style=\"text-align: right; margin-top: 40px; \">
              <button id=\"next-step\" style=\"box-shadow: 1px 2px 6px 2px #b5cada; height: 40px; border-radius: 20px; padding-left: 20px; padding-right: 20px; font-size: 18px;\" class=\"btn btn-primary\">Siguiente</button>
            </div>

         <style type=\"text/css\">
           .general-cat {
            height: 450px; float: left; width: 25%;   border: 1px solid white;
            overflow-y: auto; padding-right: 10px; 
            padding-top: 20px; 
           }
           .general-cat li {
            border-left: 0px;
           }
           .list-category-element {
                height: 35px;
    
    padding-top: 8px;
    font-size: 15px;
    background-color: white;
    box-shadow: 1px 3px 7px 0px #d4cbcb;
    color: #656565;
    margin-top: 0px;
    padding-left: 10px; 
           }
           .panel-categories {
            margin-bottom: 20px;
           }
           .list-category-element:hover {
            transition-property: all; 
            transition-duration: .4s; 
            cursor: pointer;
            background-color: #9ec6f6!important; 
           }

           .general-cat ul>li:nth-of-type(odd) {
    background-color: #f9f9f9; }
         </style>

        <div class=\"second-step-element panel-categories\" style=\"height: 500px; overflow-x: auto;  width: 100%; \"> 
             <div class=\"row\" style=\"margin: 0px; padding-left: 10px; color: gray;  border-top: 1px solid #e9eff5;
    border-bottom: 1px solid #e9eff5;\">
                <h4 id=\"breadcrumbs\" style=\"    font-weight: 300;
    color: #67505c;\"> ROOT / </h4>
            </div>  
            <!-- <div class=\"general-cat\"> 
              <h4>ELECTRÓNICA</h4>
              <ul class=\"general-cat-1\">
              </ul>
            </div>
            <div class=\"general-cat\"> 
            </div>
            <div class=\"general-cat\"> 
            </div> --> 
        </div>

        <div class=\"second-step-element col-md-12\" style=\"text-align: left; display: none;\">
              <button id=\"last-step\" style=\"box-shadow: 1px 2px 6px 2px #b5cada; height: 40px; border-radius: 20px; padding-left: 20px; padding-right: 20px; font-size: 18px;\" class=\"pull-right btn btn-primary\">Siguiente</button>
              <button id=\"return-step\" style=\"box-shadow: 1px 2px 6px 2px #b5cada; height: 40px; border-radius: 20px; padding-left: 20px; padding-right: 20px; font-size: 18px;\" class=\"btn btn-primary\">Atrás</button>
            </div>

        <div class=\"first-step-element search-to-related col-md-12\" style=\"text-align: right; padding-top: 40px;\">
          <div class=\"search-body col-md-10\" style=\" margin: auto; width: 340px; margin-left: 30%;\">
            <div class=\"col-md-12\" style=\"padding-left: 0px;\">
            <div class=\"search-icon\" style=\"z-index: 99; left: 5px;\"></div>
              <input class=\"form-control search-input\" type=\"\" placeholder=\"SKU / UPC / NP / MODELO\" name=\"\" style=\"padding-left: 40px; font-size: 20px; border: none;  box-shadow: none;\">
            </div>
          </div>
            <div class=\"col-md-2\" style=\"text-align: left;\">
              <button style=\"height: 40px; border-radius: 20px; padding-left: 20px; padding-right: 20px; font-size: 18px;\" class=\"btn btn-primary\">Buscar</button>
            </div>
        </div>

        <!--  
         <div class=\"steps_integration\">
           <button class=\"btn btn-default btn-sm\" id=\"next-step\">Siguiente</button>
           <button class=\"btn btn-default btn-sm\" id=\"return-step\">Atrás</button>
         </div> --> 
          
          <!-- Formulario para atributos constuidos desde DB -->         
           <form class=\"form-horizontal attributes_product last-step-element\">
              <!-- construcción de atributos --> 
          </form>

          <form class=\"form-horizontal gallery_upload\">
            <div class=\"col-md-12\" style=\"text-align: center;\">
              <div class=\"col-md-2\"></div>
              <div class=\"col-md-10\">
                <h2 style=\"font-weight: 300;\">Galería</h2>
              </div>
            </div>
            <div class=\"form-group\">
              <label for=\"inputEmail3\" class=\"col-sm-2 control-label\"></label>
                ";
        // line 338
        echo twig_include($this->env, $context, "uploaderFiles.html.twig");
        echo "
            </div>
          </form>

          <div class=\"form-horizontal save_entity last-step-element\">
             <div class=\"form-group\">
              <div class=\"col-sm-offset-2 col-sm-10 save-action\">
                <button type=\"submit\" id=\"saveProduct\" class=\"btn-lg btn-save btn btn-primary\">Guardar</button>
              </div>
             </div>
           </div> 
           <div class=\"last-btn-step last-step-element col-md-12\" style=\"text-align: left; display: none;\">
              <button id=\"second-step-return\" style=\"box-shadow: 1px 2px 6px 2px #b5cada; height: 40px; border-radius: 20px; padding-left: 20px; padding-right: 20px; font-size: 18px; position: fixed;
    text-align: left;
    bottom: 20px;
    z-index: 99999;
    left: 15px;
    display: block;\" class=\"btn btn-primary\">Atrás</button>
            </div>
    </div> 
\t<div class=\"col-md-3\">
    <div>
      ";
        // line 360
        echo twig_include($this->env, $context, "sidebar.html.twig");
        echo "
    </div>
    <div>
      ";
        // line 363
        echo twig_include($this->env, $context, "tree-category.html.twig");
        echo " 
    </div>
\t</div>

<script type=\"text/javascript\">

var elements_breadcrumbs = []; 
function printCategories(param, level) {
  \$.ajax({
          url: 'controladores/getCatByParent.php', 
          method: 'POST', 
          data: { parent: param
                 }, 
          success: function(response){ 
                var categories = JSON.parse(response); 
                console.log(categories); 

                var ulxx = \$('<ul level=\"level-'+level+'\" class=\"level-'+level+' general-cat-'+param+'\">'); 
                categories.forEach(function(val, ind){
                    if( val.id_category != 1 ) {
                      \$(ulxx).append('<li class=\"list-category-element\" idCatList= \"'+ val.id_category +'\">' + val.name_category + '</li>'); 
                    }
                }); 

                var contUL = \$('<div class=\"general-cat\">'); 
                \$(contUL).append(ulxx); 
                \$('.panel-categories').append(contUL);

                \$('body').off('click', '.general-cat-'+param); 

                \$('body').on('click', '.general-cat-'+param, function(event) {
                    \$('#breadcrumbs').html(\$('#breadcrumbs').html()+\$(event.target).html()+' > '); 
                    
                    var index_to_delete = elements_breadcrumbs.indexOf(\$(event.target).html().trim()); 

                       for( i = level; i < elements_breadcrumbs.length; i++) {
                            elements_breadcrumbs.splice( i ); 
                       }  

                    \$('#breadcrumbs').html(''); 

                    elements_breadcrumbs.push(\$(event.target).html());
                    elements_breadcrumbs.forEach(function(val){ 
                        \$('#breadcrumbs').append(val + ' > '); 
                      }); 

                    var id_to_search = \$(event.target).attr('idCatList'); 
                    \$('#idCat'+last_id_founded).css('background-color', '#eff3f6'); 
                    \$('#idCat'+id_to_search).css('background-color', 'gray'); 

                    if( \$('.level-'+(parseInt(level)+1) ).hasClass('level-'+(parseInt(level)+1)) ) {
                      \$('.level-'+(parseInt(level)+1) ).parent().remove();
                      \$('.level-'+(parseInt(level)+2) ).parent().remove();
                      \$('.level-'+(parseInt(level)+3) ).parent().remove();
                      \$('.level-'+(parseInt(level)+4) ).parent().remove();
                    }
                    /*                     
                    if( \$('.general-cat-'+id_to_search).hasClass('general-cat-'+id_to_search) ) {
                          \$('.general-cat-'+id_to_search).parent().remove();
                    } */ 
                    \$('#idCat'+last_id_founded).find('input[type=\"checkbox\"]').first().attr('checked', false); 
                    \$('#idCat'+id_to_search).find('input[type=\"checkbox\"]').first().attr('checked', true); 
                    printCategories(id_to_search, parseInt(level)+1);  
                    last_id_founded = id_to_search;
              }); 
            } 
          });
}

var last_id_founded = ''; 

\$('docuemnt').ready(function() {
  printCategories(1, 1); 
  \$('#next-step').click( function() {
     \$('.first-step-element').css('display', 'none');
     \$('.second-step-element').css('display', 'block'); 
     \$('.step-indicator').addClass('second-step-position'); 
     \$('#second-step-text').addClass('active-step'); 
     \$('#first-step-text').removeClass('active-step'); 
  }); 

    \$('#return-step').click( function() {
     \$('.step-indicator').removeClass('second-step-position'); 
     \$('.first-step-element').fadeIn('fast');  
     \$('.second-step-element').css('display', 'none');
     \$('#second-step-text').removeClass('active-step');  
     \$('#first-step-text').addClass('active-step');  
  }); 

  \$('#last-step').click( function() {
     \$('.second-step-element').css('display', 'none'); 
     \$('.last-step-element').css('display', 'block'); 
     \$('.step-indicator').removeClass('second-step-position'); 
     \$('.step-indicator').addClass('last-step-position'); 
     \$('#last-step-text').addClass('active-step');  
     \$('#second-step-text').removeClass('active-step');  
  }); 

  \$('#second-step-return').click( function() {
     \$('.last-step-element').css('display', 'none'); 
     \$('.second-step-element').css('display', 'block'); 
     \$('.step-indicator').addClass('second-step-position'); 
     \$('.step-indicator').removeClass('last-step-position');
     \$('#second-step-text').addClass('active-step');  
     \$('#last-step-text').removeClass('active-step');  
  }); 

  \$('.search-icon').click(function(event) {
    \$('.search-input').focus(); 
    \$(event.target).slideUp('fast'); 
  }); 

  \$('.search-input').blur(function(){
    \$('.search-icon').slideDown('fast'); 
  }); 


  \$('.search-input').keypress(function(e) {
    if(e.which == 13) {
          var paramToSearch = \$('.search-input').val().trim(); 
         \$('#append-related').modal({ show: 'false' }); 
          \$.ajax({
          url: 'controladores/generalSearch.php', 
          method: 'POST', 
          data: { attr_val: paramToSearch, 
                 }, 
          success: function(response){ 
              console.log(JSON.parse(response));
              format_data_search(response); 
            } 
          });
    } 
  }); 

    // formater datos  

      // Obtener datos y formatear en arreglo 
  function format_data_search(mensaje) {   
             if(mensaje == 'sin datos') {
              \$(\"#tableFeed\").html('<h2>Sin datos</h2>'); 
              return; 
             }

             viewData_search   =  JSON.parse(mensaje); //datos brutos 
             
             lineProduct_search = [];
             row_search = [];  

             viewData_search.forEach( function(val) {
              if( val.type_attr == 'Name Product') { 
                row_search.push( val.value_attr ); 
              } else if ( val.type_attr == 'SKU' ) {
                row_search.push( val.value_attr ); 
              } else if ( val.type_attr == 'Normal Price' ) {
                row_search.push( val.value_attr ); 
              }else if ( val.type_attr == 'UPC' ){
                row_search.push( val.value_attr ); 
              }else if ( val.type_attr == 'stock' ) {
                row_search.push( val.value_attr ); 
              }else if ( val.type_attr == 'Number Part' ) {
                row_search.push( val.value_attr ); 
              }else if ( val.type_attr == 'Model' ) {
                row_search.push( val.value_attr ); 
              }else if ( val.type_attr == 'meta_product' ) {
                row_search.push( val.value_attr ); 
              }else if ( val.type_attr == 'currency' ) {
                row_search.push( val.value_attr ); 
              }else if ( val.type_attr == 'short_description' ) {
                row_search.push( val.value_attr ); 
              }else if ( val.type_attr == 'description' ) {
                row_search.push( val.value_attr ); 
              }else if ( val.type_attr == 'flag_status' ) {
                row_search.push( val.value_attr ); 
              }else if ( val.type_attr == 'distributor' ) {
                  row_search.push( val.value_attr );  
                  row_search.push(val.ID); 
                  var styleRow = '';
                  if(row_search[3] > 10) {
                    styleRow = 'style=\"font-size: 12px; font-weight: bold; color: green;\"'; 
                  } else {
                    styleRow = 'style=\"font-size: 12px; font-weight: bold; color: orange;\"'; 
                  }
                  lineProduct_search.push(Array(row_search[0], 
                               row_search[1], 
                               '<span style=\"font-size:13px;\">\$'+Math.round10(row_search[2], -1)+'</span>', 
                               row_search[3],
                               row_search[4],
                               row_search[5],
                               row_search[6],
                               row_search[7], 
                               row_search[8], 
                               row_search[9], 
                               row_search[10], 
                               row_search[11],
                               row_search[12],
                               row_search[13]));
                      row_search = []; 
              }
            });   
            console.log('............................>>>>>>>>>>>'); 
            console.log(lineProduct_search); 
            printInTable(lineProduct_search); 
  }

  function printInTable(lineProduct_search) {
    \$('#relationProduct_search').html(''); 
    for ( var i = 0; i < lineProduct_search.length; i++) {
        \$('#relationProduct_search').append(\"<tr cidProductList=\"+lineProduct_search[i][13]+\">\"+ 
                \"<td>\"+ lineProduct_search[i][lineProduct_search[i].length-2] +\"</td>\"+ 
                \"<td>\"+ lineProduct_search[i][0] +\"</td>\"+ 
                \"<td>\"+ lineProduct_search[i][1] +\"</td>\"+ 
                \"<td>\"+ lineProduct_search[i][4] +\"</td>\"+ 
                \"<td>//</td>\"+ 
                \"<td>\"+ lineProduct_search[i][2] +\"</td>\"+ 
                \"<td>\"+ lineProduct_search[i][5] +\"</td>\"+
                \"<td>\"+ lineProduct_search[i][3] +\"</td>\"+
                \"<td>\"+ lineProduct_search[i][6] +\"</td>\"+   
                \"<td>\"+ lineProduct_search[i][8] +\"</td>\"+ 
                \"<td> <button data-dismiss='modal' idProd_search='\"+lineProduct_search[i][lineProduct_search[i].length-1]+\"' class='btn btn-sm btn-default addToRelated'>Agregar</button> </td>\"+ 
                \"<td>\"+ lineProduct_search[i][lineProduct_search[i].length-3] +\"</td>\"+ 
              \"</tr>\"); 
      }
      \$('body').off('click', '.addToRelated'); 
      \$('body').on('click', '.addToRelated', function(event){
          var idProduct_search = \$(event.target).attr('idProd_search');   
          if( idRelateds.indexOf(idProduct_search) < 0) {
                var trSelected = \$(event.target).parent().parent().html(); 
                var xx = \$(trSelected);
                \$(xx).find('.addToRelated').replaceWith('<input type=\"checkbox\" checked=\"checked\">'); 
                tr = \$('<tr>'); 
                \$(tr).append(xx); 
                \$('#relationProduct').append(tr); 
                idRelateds.push(idProduct_search); 
          } else {
            alert('Este producto ya está en la lista'); 
          }
      }); 
  }

}); 

</script>


<!-- M O D A L E S --> 

<div class=\"modal fade\" id=\"append-related\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editarCategoria\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\" style=\"width: 80%;\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"newCatLabel\">Productos relacionados</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\" style=\"overflow-y: auto; \">
        <div class=\"col-md-12\">
            <div class=\"col-md-2\"> 
              <div class=\"atributes-to-fill\">
                
              </div>
            </div>
            <table class=\"table table-striped table-hover table-condensed\"> 
              <thead> 
                   <tr style=\"font-size: 13px;
    color: white;
    background-color: #4084ef;
    font-weight: 100!important;\"> 
                        <th>Distributor</th> 
                        <th>Product</th> 
                        <th>SKU</th> 
                        <th>Stock</th>
                        <th>Stock Updated</th>
                        <th>Price</th>
                        <th>Part Number</th>
                        <th>UPC</th>
                        <th>Model</th>
                        <th>Currency</th>
                        <th></th>
                        <th>meta</th>
                   </tr> 
              </thead> 
              <tbody id=\"relationProduct_search\">
                <tr>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                </tr> 
                <tr>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                </tr> 
                <tr>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                </tr> 
              </tbody> 
         </table> 
            </div>
        </div>
        <div class=\"modal-footer\">
          <!-- <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
          <button type=\"button\" class=\"btn btn-primary\"  data-dismiss=\"modal\">Guardar</button> --> 
          <h3 style=\"font-weight: 400\">Selecciona los productos que van a formar parte del grupo</h3>
        </div>
      </div>
    </div>
  </div>
</div>



<div class=\"modal fade\" id=\"infoImg\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editarCategoria\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"newCatLabel\">Info IMG</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">

        <form class=\"form-horizontal\">
          <div class=\"form-group\"> 
            <label for=\"inputEmail3\" class=\"col-sm-3 control-label\">URL:</label> 
             <div class=\"col-sm-9\"> 
               <input type=\"input\" id=\"urlImg\" placeholder=\"cargando...\" value=\"\" class=\"form-control\" name=\"\"> 
             </div>  
           <div class=\"form-group\"> 
            <label for=\"inputEmail3\" class=\"col-sm-3 control-label\">Imágen principal:</label> 
             <div class=\"col-sm-9\" style=\"text-align: left;\"> 
               <input style=\"margin-top: 10px;\" type=\"checkbox\" id=\"imgMainSet\" placeholder=\"cargando...\" value=\"\" name=\"\"> 
             </div>  
           </div>
           </div>
        </form>

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\" id=\"deleteImg\">Borrar</button>
        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\" id=\"saveImg\">Guardar</button>
      </div>
    </div>
  </div>
</div>


<div class=\"modal fade\" id=\"selectRelated\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editarCategoria\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"newCatLabel\">Seleccionar valores</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\" style=\"overflow-y: auto; \">
        <div class=\"row\">
            <div class=\"col-md-2\"> 
              <div class=\"atributes-to-fill\">
                
              </div>
            </div>
            <div class=\"col-md-10\">
              <div class=\"mod-container-attrs\">
                <p class=\"mod-distributor-name\"></p>
                <div class=\"mod-attr-value\">
                  
                </div>
              </div>
              </div>
            </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
          <button type=\"button\" class=\"btn btn-primary\" id=\"editCategoryBtn\">Guardar</button>
        </div>
      </div>
    </div>
  </div>
</div>



<div class=\"modal fade\" id=\"selectRelatedProduct\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editarCategoria\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"newCatLabel\">Seleccionar productos</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <table class=\"table table-striped table-bordered table-hover\">
            <thead>
              <th>SKU</th>
              <th>PRECIO</th>
              <th>NOMBRE</th>
              <th></th>
            </thead>
            <tbody id=\"comparedBody\">
              <tr>
                <td>ABC</td>
                <td>10101</td>
                <td>Cardador USB</td>
                <th> <input type=\"checkbox\" name=\"\"> </th>
              </tr>
            </tbody>
          </table>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"editCategoryBtn\">Guardar</button>
      </div>
    </div>
  </div>
</div>
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
        return array (  401 => 363,  395 => 360,  370 => 338,  33 => 4,  28 => 3,  11 => 1,);
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
  <script type=\"text/javascript\" src=\"skin/productoFunctions.js\"></script>
  <link href=\"skin/summernote/summernote.css\" rel=\"stylesheet\">
  <script src=\"skin/summernote/summernote.js\"></script>

  <style type=\"text/css\">
    #entityGallery {
      border-radius: 4px;
      width: 100%;
      background-color: #eff3f6;
      padding-top: 10px;
    }
    #entityGallery li img:hover {
      cursor: pointer;
      transition-property: all; 
      transition-duration: .2s; 
      transform: scale(1.1);
      z-index: 0; 
    }
    #entityGallery img {
      transition-property: all; 
      transition-duration: .2s; 
      width: 120px; 
      /*border: 1px solid gray;*/
    }
    #entityGallery li { 
      margin-left: 10px; 
    }
    #entityGallery ul, #entityGallery li {
      display: inline-block;
      border: 0px;
      text-align: center; 
    }

     #__familia, #__stock, #__NormalPrice {
      display: none!important; 
    }
    table {
      font-size: 12px; 
    }
  </style>


  <style type=\"text/css\">
    .select-attrs {
      font-weight: bold;
    }
    .select-attrs:hover {
      cursor: pointer;
    }
    .mod-container-attr {
      padding-top: 10px; 
      padding-bottom: 10px; 
    }
    .mod-distributor-name {
      background-color: #eeeeee;
    }
    .mod-distributor-name:hover {
      background-color: #dbdd15;
      cursor: pointer; 
    }
    .mod-distributor-name:active {
      transform: scale(.95);
    }
    .createGroup {
      position: fixed;
      bottom: 10px; 
      left: 10px;
      height: 70px; 
      width: 70px; 
      border-radius: 50%; 
      z-index: 99;
          padding-top: 20px;
    color: white;
    background-color: #03A9F4;
    font-weight: bold;
    text-align: center;
    }
    .selected-attr {
      color: #03A9F4;
    }
    #nextProduct:hover {
      cursor: pointer;
    }
  </style>
  <style type=\"text/css\">
    .entity-ER {
      display: none; 
    }

    /* elementos para los STEPS #spanglish */
    .attributes_product { display: none; }
    #entityGallery { display: none; }
    .gallery_upload { display: none; }
    .save_entity { display: none; }
    /* // */ 
    /* seccond STEP */ 
     .panel-categories { display: none; }  

    .steps_integration {  } 

    .search-to-related {
      height: 100px; 
      margin-bottom: 10px; 
    }
    .search-icon {
      height: 40px; width: 40px; 
      background-image: url('./skin/media/search.png');
      background-size: cover;
      background-position: center;
    }
    .search-icon:active {
      transform: scale(1.05);
    }
    .search-body {
      height: 40px;
      border-radius: 20px; 
      border: 2px solid #418cff;
    }

    table td{
      font-weight: 400!important;
      border: none!important;
      padding-top: 12px!important;
    }
    table thead tr {
      height: 40px;
      border: none!important;
    }
    table tbody tr {
      height: 40px;
      border: none!important;
    }
    table th {
      font-weight: 600!important;
      padding: 5px;
      border: none!important;
    }
    table tbody {
          box-shadow: 0px 0px 13px 0px #c0d9f3;
    }


    #relationProduct_search tr {
      height: 75px;
      font-size: 14px;
    }
    #relationProduct_search td, #relationProduct_search tr {
      padding-top: 20px!important;
    }

    .second-step-position {
      margin-left: 33%; 
      transition-property: all; 
      transition-duration: .5s;
    }
    .last-step-position {
      margin-left: 66%; 
      transition-property: all; 
      transition-duration: .5s;
    }
    .step-indicator {
      transition-property: all; 
      transition-duration: .5s; 
    }
    .active-step {
      transition-duration: .5s; 
      transition-property: all; 
      color: #03a9f4; 
    }
  </style>

    <div class=\"dashboard-window col-md-9\">
          <div class=\"col-md-12 steps-view\" style=\"height: 30px; text-align: center; color: #03a9f4; font-size: 20px; font-weight: bold; color: gray; \">
             <div class=\"col-md-4 active-step\" id=\"first-step-text\">
               <p>Agrupar</p>
             </div>
             <div class=\"col-md-4\" id=\"second-step-text\">
               <p>Categorizar</p>
             </div>
             <div class=\"col-md-4\" id=\"last-step-text\">
               <p>Revisar</p>
             </div>
          </div>
          <div class=\"col-md-12\" style=\"margin-bottom: 40px; \">
            <div class=\"col-md-4 step-indicator\" style=\"border: 1px solid #03a9f4;\"></div>
          </div>
          <div style=\"margin-bottom: 20px;\">
           
           <!-- 
            <a style=\"padding:2px 7px 2px 7px; font-weight: bold; font-size: 12px;\" href=\"?p=feedLocal\" class=\"btn btn-primary btn-sm\">Atrás</a> 

            <button style=\"padding:2px 7px 2px 7px; font-weight: bold; font-size: 12px;\" id=\"nextProduct\" class=\"btn btn-primary btn-sm pull-right\">Siguiente</button> --> 
            <!-- Galería --> 
            <ul style=\"margin-top: 10px;\" id=\"entityGallery\">
            </ul>

            <div class=\"steps_integration\">
              <!-- <button style=\"padding:2px 7px 2px 7px; font-weight: bold; font-size: 12px;\" class=\"btn btn-default btn-sm\" id=\"next-step\">Siguiente</button> 
              <button style=\"padding:2px 7px 2px 7px; font-weight: bold; font-size: 12px;\" class=\"btn btn-default btn-sm\" id=\"return-step\">Atrás</button> -->
            </div>

            <ul style=\"margin-top: 10px; display: none;\">
            </ul>
          </div>
        
        <!-- 
           <div class=\"createGroup selectAttrsVal\" data-toggle=\"modal\" data-target=\"#selectRelated\">  <span style=\"line-height: 20px;\">Agrupar</span> 
           </div> --> 
        

        <!-- Relación con otros productos --> 
        <div class=\"first-step-element col-md-12\" style=\"margin-top: 20px;\">
            <h4 id=\"msg-related\">No se encontraron coincidencias</h4>
        </div>

        <table class=\"table-relateds first-step-element table table-striped table-hover table-condensed\" style=\"min-height: 200px;\"> 
              <thead> 
                   <tr style=\"font-size: 13px;
    color: white;
    background-color: #4084ef;
    font-weight: 100!important;\"> 
                        <th>Distributor</th> 
                        <th>Product</th> 
                        <th>SKU</th> 
                        <th>Stock</th>
                        <th>Stock Updated</th>
                        <th>Price</th>
                        <th>Part Number</th>
                        <th>UPC</th>
                        <th>Model</th>
                        <th>Currency</th>
                        <th></th>
                        <th>meta</th>
                   </tr> 
              </thead> 
              <tbody id=\"relationProduct\"> 
              </tbody> 
         </table> 
           
           <div id=\"first-step\" class=\"first-step-element col-md-12\" style=\"text-align: right; margin-top: 40px; \">
              <button id=\"next-step\" style=\"box-shadow: 1px 2px 6px 2px #b5cada; height: 40px; border-radius: 20px; padding-left: 20px; padding-right: 20px; font-size: 18px;\" class=\"btn btn-primary\">Siguiente</button>
            </div>

         <style type=\"text/css\">
           .general-cat {
            height: 450px; float: left; width: 25%;   border: 1px solid white;
            overflow-y: auto; padding-right: 10px; 
            padding-top: 20px; 
           }
           .general-cat li {
            border-left: 0px;
           }
           .list-category-element {
                height: 35px;
    
    padding-top: 8px;
    font-size: 15px;
    background-color: white;
    box-shadow: 1px 3px 7px 0px #d4cbcb;
    color: #656565;
    margin-top: 0px;
    padding-left: 10px; 
           }
           .panel-categories {
            margin-bottom: 20px;
           }
           .list-category-element:hover {
            transition-property: all; 
            transition-duration: .4s; 
            cursor: pointer;
            background-color: #9ec6f6!important; 
           }

           .general-cat ul>li:nth-of-type(odd) {
    background-color: #f9f9f9; }
         </style>

        <div class=\"second-step-element panel-categories\" style=\"height: 500px; overflow-x: auto;  width: 100%; \"> 
             <div class=\"row\" style=\"margin: 0px; padding-left: 10px; color: gray;  border-top: 1px solid #e9eff5;
    border-bottom: 1px solid #e9eff5;\">
                <h4 id=\"breadcrumbs\" style=\"    font-weight: 300;
    color: #67505c;\"> ROOT / </h4>
            </div>  
            <!-- <div class=\"general-cat\"> 
              <h4>ELECTRÓNICA</h4>
              <ul class=\"general-cat-1\">
              </ul>
            </div>
            <div class=\"general-cat\"> 
            </div>
            <div class=\"general-cat\"> 
            </div> --> 
        </div>

        <div class=\"second-step-element col-md-12\" style=\"text-align: left; display: none;\">
              <button id=\"last-step\" style=\"box-shadow: 1px 2px 6px 2px #b5cada; height: 40px; border-radius: 20px; padding-left: 20px; padding-right: 20px; font-size: 18px;\" class=\"pull-right btn btn-primary\">Siguiente</button>
              <button id=\"return-step\" style=\"box-shadow: 1px 2px 6px 2px #b5cada; height: 40px; border-radius: 20px; padding-left: 20px; padding-right: 20px; font-size: 18px;\" class=\"btn btn-primary\">Atrás</button>
            </div>

        <div class=\"first-step-element search-to-related col-md-12\" style=\"text-align: right; padding-top: 40px;\">
          <div class=\"search-body col-md-10\" style=\" margin: auto; width: 340px; margin-left: 30%;\">
            <div class=\"col-md-12\" style=\"padding-left: 0px;\">
            <div class=\"search-icon\" style=\"z-index: 99; left: 5px;\"></div>
              <input class=\"form-control search-input\" type=\"\" placeholder=\"SKU / UPC / NP / MODELO\" name=\"\" style=\"padding-left: 40px; font-size: 20px; border: none;  box-shadow: none;\">
            </div>
          </div>
            <div class=\"col-md-2\" style=\"text-align: left;\">
              <button style=\"height: 40px; border-radius: 20px; padding-left: 20px; padding-right: 20px; font-size: 18px;\" class=\"btn btn-primary\">Buscar</button>
            </div>
        </div>

        <!--  
         <div class=\"steps_integration\">
           <button class=\"btn btn-default btn-sm\" id=\"next-step\">Siguiente</button>
           <button class=\"btn btn-default btn-sm\" id=\"return-step\">Atrás</button>
         </div> --> 
          
          <!-- Formulario para atributos constuidos desde DB -->         
           <form class=\"form-horizontal attributes_product last-step-element\">
              <!-- construcción de atributos --> 
          </form>

          <form class=\"form-horizontal gallery_upload\">
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

          <div class=\"form-horizontal save_entity last-step-element\">
             <div class=\"form-group\">
              <div class=\"col-sm-offset-2 col-sm-10 save-action\">
                <button type=\"submit\" id=\"saveProduct\" class=\"btn-lg btn-save btn btn-primary\">Guardar</button>
              </div>
             </div>
           </div> 
           <div class=\"last-btn-step last-step-element col-md-12\" style=\"text-align: left; display: none;\">
              <button id=\"second-step-return\" style=\"box-shadow: 1px 2px 6px 2px #b5cada; height: 40px; border-radius: 20px; padding-left: 20px; padding-right: 20px; font-size: 18px; position: fixed;
    text-align: left;
    bottom: 20px;
    z-index: 99999;
    left: 15px;
    display: block;\" class=\"btn btn-primary\">Atrás</button>
            </div>
    </div> 
\t<div class=\"col-md-3\">
    <div>
      {{ include('sidebar.html.twig') }}
    </div>
    <div>
      {{ include('tree-category.html.twig') }} 
    </div>
\t</div>

<script type=\"text/javascript\">

var elements_breadcrumbs = []; 
function printCategories(param, level) {
  \$.ajax({
          url: 'controladores/getCatByParent.php', 
          method: 'POST', 
          data: { parent: param
                 }, 
          success: function(response){ 
                var categories = JSON.parse(response); 
                console.log(categories); 

                var ulxx = \$('<ul level=\"level-'+level+'\" class=\"level-'+level+' general-cat-'+param+'\">'); 
                categories.forEach(function(val, ind){
                    if( val.id_category != 1 ) {
                      \$(ulxx).append('<li class=\"list-category-element\" idCatList= \"'+ val.id_category +'\">' + val.name_category + '</li>'); 
                    }
                }); 

                var contUL = \$('<div class=\"general-cat\">'); 
                \$(contUL).append(ulxx); 
                \$('.panel-categories').append(contUL);

                \$('body').off('click', '.general-cat-'+param); 

                \$('body').on('click', '.general-cat-'+param, function(event) {
                    \$('#breadcrumbs').html(\$('#breadcrumbs').html()+\$(event.target).html()+' > '); 
                    
                    var index_to_delete = elements_breadcrumbs.indexOf(\$(event.target).html().trim()); 

                       for( i = level; i < elements_breadcrumbs.length; i++) {
                            elements_breadcrumbs.splice( i ); 
                       }  

                    \$('#breadcrumbs').html(''); 

                    elements_breadcrumbs.push(\$(event.target).html());
                    elements_breadcrumbs.forEach(function(val){ 
                        \$('#breadcrumbs').append(val + ' > '); 
                      }); 

                    var id_to_search = \$(event.target).attr('idCatList'); 
                    \$('#idCat'+last_id_founded).css('background-color', '#eff3f6'); 
                    \$('#idCat'+id_to_search).css('background-color', 'gray'); 

                    if( \$('.level-'+(parseInt(level)+1) ).hasClass('level-'+(parseInt(level)+1)) ) {
                      \$('.level-'+(parseInt(level)+1) ).parent().remove();
                      \$('.level-'+(parseInt(level)+2) ).parent().remove();
                      \$('.level-'+(parseInt(level)+3) ).parent().remove();
                      \$('.level-'+(parseInt(level)+4) ).parent().remove();
                    }
                    /*                     
                    if( \$('.general-cat-'+id_to_search).hasClass('general-cat-'+id_to_search) ) {
                          \$('.general-cat-'+id_to_search).parent().remove();
                    } */ 
                    \$('#idCat'+last_id_founded).find('input[type=\"checkbox\"]').first().attr('checked', false); 
                    \$('#idCat'+id_to_search).find('input[type=\"checkbox\"]').first().attr('checked', true); 
                    printCategories(id_to_search, parseInt(level)+1);  
                    last_id_founded = id_to_search;
              }); 
            } 
          });
}

var last_id_founded = ''; 

\$('docuemnt').ready(function() {
  printCategories(1, 1); 
  \$('#next-step').click( function() {
     \$('.first-step-element').css('display', 'none');
     \$('.second-step-element').css('display', 'block'); 
     \$('.step-indicator').addClass('second-step-position'); 
     \$('#second-step-text').addClass('active-step'); 
     \$('#first-step-text').removeClass('active-step'); 
  }); 

    \$('#return-step').click( function() {
     \$('.step-indicator').removeClass('second-step-position'); 
     \$('.first-step-element').fadeIn('fast');  
     \$('.second-step-element').css('display', 'none');
     \$('#second-step-text').removeClass('active-step');  
     \$('#first-step-text').addClass('active-step');  
  }); 

  \$('#last-step').click( function() {
     \$('.second-step-element').css('display', 'none'); 
     \$('.last-step-element').css('display', 'block'); 
     \$('.step-indicator').removeClass('second-step-position'); 
     \$('.step-indicator').addClass('last-step-position'); 
     \$('#last-step-text').addClass('active-step');  
     \$('#second-step-text').removeClass('active-step');  
  }); 

  \$('#second-step-return').click( function() {
     \$('.last-step-element').css('display', 'none'); 
     \$('.second-step-element').css('display', 'block'); 
     \$('.step-indicator').addClass('second-step-position'); 
     \$('.step-indicator').removeClass('last-step-position');
     \$('#second-step-text').addClass('active-step');  
     \$('#last-step-text').removeClass('active-step');  
  }); 

  \$('.search-icon').click(function(event) {
    \$('.search-input').focus(); 
    \$(event.target).slideUp('fast'); 
  }); 

  \$('.search-input').blur(function(){
    \$('.search-icon').slideDown('fast'); 
  }); 


  \$('.search-input').keypress(function(e) {
    if(e.which == 13) {
          var paramToSearch = \$('.search-input').val().trim(); 
         \$('#append-related').modal({ show: 'false' }); 
          \$.ajax({
          url: 'controladores/generalSearch.php', 
          method: 'POST', 
          data: { attr_val: paramToSearch, 
                 }, 
          success: function(response){ 
              console.log(JSON.parse(response));
              format_data_search(response); 
            } 
          });
    } 
  }); 

    // formater datos  

      // Obtener datos y formatear en arreglo 
  function format_data_search(mensaje) {   
             if(mensaje == 'sin datos') {
              \$(\"#tableFeed\").html('<h2>Sin datos</h2>'); 
              return; 
             }

             viewData_search   =  JSON.parse(mensaje); //datos brutos 
             
             lineProduct_search = [];
             row_search = [];  

             viewData_search.forEach( function(val) {
              if( val.type_attr == 'Name Product') { 
                row_search.push( val.value_attr ); 
              } else if ( val.type_attr == 'SKU' ) {
                row_search.push( val.value_attr ); 
              } else if ( val.type_attr == 'Normal Price' ) {
                row_search.push( val.value_attr ); 
              }else if ( val.type_attr == 'UPC' ){
                row_search.push( val.value_attr ); 
              }else if ( val.type_attr == 'stock' ) {
                row_search.push( val.value_attr ); 
              }else if ( val.type_attr == 'Number Part' ) {
                row_search.push( val.value_attr ); 
              }else if ( val.type_attr == 'Model' ) {
                row_search.push( val.value_attr ); 
              }else if ( val.type_attr == 'meta_product' ) {
                row_search.push( val.value_attr ); 
              }else if ( val.type_attr == 'currency' ) {
                row_search.push( val.value_attr ); 
              }else if ( val.type_attr == 'short_description' ) {
                row_search.push( val.value_attr ); 
              }else if ( val.type_attr == 'description' ) {
                row_search.push( val.value_attr ); 
              }else if ( val.type_attr == 'flag_status' ) {
                row_search.push( val.value_attr ); 
              }else if ( val.type_attr == 'distributor' ) {
                  row_search.push( val.value_attr );  
                  row_search.push(val.ID); 
                  var styleRow = '';
                  if(row_search[3] > 10) {
                    styleRow = 'style=\"font-size: 12px; font-weight: bold; color: green;\"'; 
                  } else {
                    styleRow = 'style=\"font-size: 12px; font-weight: bold; color: orange;\"'; 
                  }
                  lineProduct_search.push(Array(row_search[0], 
                               row_search[1], 
                               '<span style=\"font-size:13px;\">\$'+Math.round10(row_search[2], -1)+'</span>', 
                               row_search[3],
                               row_search[4],
                               row_search[5],
                               row_search[6],
                               row_search[7], 
                               row_search[8], 
                               row_search[9], 
                               row_search[10], 
                               row_search[11],
                               row_search[12],
                               row_search[13]));
                      row_search = []; 
              }
            });   
            console.log('............................>>>>>>>>>>>'); 
            console.log(lineProduct_search); 
            printInTable(lineProduct_search); 
  }

  function printInTable(lineProduct_search) {
    \$('#relationProduct_search').html(''); 
    for ( var i = 0; i < lineProduct_search.length; i++) {
        \$('#relationProduct_search').append(\"<tr cidProductList=\"+lineProduct_search[i][13]+\">\"+ 
                \"<td>\"+ lineProduct_search[i][lineProduct_search[i].length-2] +\"</td>\"+ 
                \"<td>\"+ lineProduct_search[i][0] +\"</td>\"+ 
                \"<td>\"+ lineProduct_search[i][1] +\"</td>\"+ 
                \"<td>\"+ lineProduct_search[i][4] +\"</td>\"+ 
                \"<td>//</td>\"+ 
                \"<td>\"+ lineProduct_search[i][2] +\"</td>\"+ 
                \"<td>\"+ lineProduct_search[i][5] +\"</td>\"+
                \"<td>\"+ lineProduct_search[i][3] +\"</td>\"+
                \"<td>\"+ lineProduct_search[i][6] +\"</td>\"+   
                \"<td>\"+ lineProduct_search[i][8] +\"</td>\"+ 
                \"<td> <button data-dismiss='modal' idProd_search='\"+lineProduct_search[i][lineProduct_search[i].length-1]+\"' class='btn btn-sm btn-default addToRelated'>Agregar</button> </td>\"+ 
                \"<td>\"+ lineProduct_search[i][lineProduct_search[i].length-3] +\"</td>\"+ 
              \"</tr>\"); 
      }
      \$('body').off('click', '.addToRelated'); 
      \$('body').on('click', '.addToRelated', function(event){
          var idProduct_search = \$(event.target).attr('idProd_search');   
          if( idRelateds.indexOf(idProduct_search) < 0) {
                var trSelected = \$(event.target).parent().parent().html(); 
                var xx = \$(trSelected);
                \$(xx).find('.addToRelated').replaceWith('<input type=\"checkbox\" checked=\"checked\">'); 
                tr = \$('<tr>'); 
                \$(tr).append(xx); 
                \$('#relationProduct').append(tr); 
                idRelateds.push(idProduct_search); 
          } else {
            alert('Este producto ya está en la lista'); 
          }
      }); 
  }

}); 

</script>


<!-- M O D A L E S --> 

<div class=\"modal fade\" id=\"append-related\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editarCategoria\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\" style=\"width: 80%;\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"newCatLabel\">Productos relacionados</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\" style=\"overflow-y: auto; \">
        <div class=\"col-md-12\">
            <div class=\"col-md-2\"> 
              <div class=\"atributes-to-fill\">
                
              </div>
            </div>
            <table class=\"table table-striped table-hover table-condensed\"> 
              <thead> 
                   <tr style=\"font-size: 13px;
    color: white;
    background-color: #4084ef;
    font-weight: 100!important;\"> 
                        <th>Distributor</th> 
                        <th>Product</th> 
                        <th>SKU</th> 
                        <th>Stock</th>
                        <th>Stock Updated</th>
                        <th>Price</th>
                        <th>Part Number</th>
                        <th>UPC</th>
                        <th>Model</th>
                        <th>Currency</th>
                        <th></th>
                        <th>meta</th>
                   </tr> 
              </thead> 
              <tbody id=\"relationProduct_search\">
                <tr>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                </tr> 
                <tr>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                </tr> 
                <tr>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                  <td> ACD </td>
                </tr> 
              </tbody> 
         </table> 
            </div>
        </div>
        <div class=\"modal-footer\">
          <!-- <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
          <button type=\"button\" class=\"btn btn-primary\"  data-dismiss=\"modal\">Guardar</button> --> 
          <h3 style=\"font-weight: 400\">Selecciona los productos que van a formar parte del grupo</h3>
        </div>
      </div>
    </div>
  </div>
</div>



<div class=\"modal fade\" id=\"infoImg\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editarCategoria\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"newCatLabel\">Info IMG</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">

        <form class=\"form-horizontal\">
          <div class=\"form-group\"> 
            <label for=\"inputEmail3\" class=\"col-sm-3 control-label\">URL:</label> 
             <div class=\"col-sm-9\"> 
               <input type=\"input\" id=\"urlImg\" placeholder=\"cargando...\" value=\"\" class=\"form-control\" name=\"\"> 
             </div>  
           <div class=\"form-group\"> 
            <label for=\"inputEmail3\" class=\"col-sm-3 control-label\">Imágen principal:</label> 
             <div class=\"col-sm-9\" style=\"text-align: left;\"> 
               <input style=\"margin-top: 10px;\" type=\"checkbox\" id=\"imgMainSet\" placeholder=\"cargando...\" value=\"\" name=\"\"> 
             </div>  
           </div>
           </div>
        </form>

      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\" id=\"deleteImg\">Borrar</button>
        <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\" id=\"saveImg\">Guardar</button>
      </div>
    </div>
  </div>
</div>


<div class=\"modal fade\" id=\"selectRelated\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editarCategoria\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"newCatLabel\">Seleccionar valores</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\" style=\"overflow-y: auto; \">
        <div class=\"row\">
            <div class=\"col-md-2\"> 
              <div class=\"atributes-to-fill\">
                
              </div>
            </div>
            <div class=\"col-md-10\">
              <div class=\"mod-container-attrs\">
                <p class=\"mod-distributor-name\"></p>
                <div class=\"mod-attr-value\">
                  
                </div>
              </div>
              </div>
            </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
          <button type=\"button\" class=\"btn btn-primary\" id=\"editCategoryBtn\">Guardar</button>
        </div>
      </div>
    </div>
  </div>
</div>



<div class=\"modal fade\" id=\"selectRelatedProduct\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editarCategoria\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"newCatLabel\">Seleccionar productos</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <table class=\"table table-striped table-bordered table-hover\">
            <thead>
              <th>SKU</th>
              <th>PRECIO</th>
              <th>NOMBRE</th>
              <th></th>
            </thead>
            <tbody id=\"comparedBody\">
              <tr>
                <td>ABC</td>
                <td>10101</td>
                <td>Cardador USB</td>
                <th> <input type=\"checkbox\" name=\"\"> </th>
              </tr>
            </tbody>
          </table>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"editCategoryBtn\">Guardar</button>
      </div>
    </div>
  </div>
</div>
{% endblock %}

", "producto.html.twig", "C:\\xampp\\htdocs\\GIT\\OMG\\last\\last\\last\\last\\stockOMG\\OMGstocks\\templates\\producto.html.twig");
    }
}
