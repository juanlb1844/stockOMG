<?php

/* filters.html.twig */
class __TwigTemplate_60f685175e96abb0052d23ed5c03ffb50a9a0f156d061d3209ae9a9b77ac1feb extends Twig_Template
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
        echo "<style type=\"text/css\">
\t#filters {
\t\tmargin-top: 10px;
\t\tpadding: 5px 10px 10px 10px; 
\t\tbackground-color: #eff3f6; 
\t\tborder-radius: 4px;
\t\tfont-size: 11px;
\t}
\t.filter p {
\t\tmargin-bottom: 2px; 
\t}
\t.filter-title {
\t\tborder-bottom: 1px solid gray;
\t}
\t.close-filter {
\t\tfont-size: 17px; 
\t\tcolor: orange;
\t\tpadding-left: 10px; 
\t}
\t.close-filter:hover {
\t\tcursor: pointer;
\t}
</style>

<div id=\"filters\">
\t<div class=\"filter\">
\t\t<div class=\"filter-title\">
\t\t\t<h4>Brand</h4>
\t\t</div>
\t\t<div class=\"filter-brand\">
\t\t\t<!-- marcas --> 
\t\t\t<!-- <p>
\t\t\t\t<a href=\"\">HP</a>
\t\t\t</p> --> 
\t\t</div>
\t</div>
</div>

<script type=\"text/javascript\">
\t\t\tgetFilters(); 
\t\tfunction getFilters() {
\t\t\t\t\$.ajax({
\t\t\t \turl: 'controladores/getMarcas.php', 
\t\t\t \tmethod: 'POST', 
\t\t\t \tdata: { 
\t\t\t \t\t\t}, 
\t\t\t \tsuccess: function(response){
\t\t\t \t\t  if( response != 'sin datos' ) {
\t\t\t \t\t  \t\tresponse = JSON.parse(response);  
\t\t\t \t\t  \t\tfor(i in response) {
\t\t\t \t\t  \t\t\tvar element = '<p>' + 
\t\t\t\t\t\t\t\t\t\t\t\t'<a class=\"brandAction\" href=\"index.php?p=feedLocal&brand='+response[i].varchar_value+'\">'+response[i].varchar_value+'</a>' + 
\t\t\t\t\t\t\t\t\t\t\t\t'</p>';
\t\t\t\t\t\t\t\tvar element = '<p>' + 
\t\t\t\t\t\t\t\t\t\t\t\t'<p class=\"brandAction\">'+response[i].varchar_value+'</p>' + 
\t\t\t\t\t\t\t\t\t\t\t\t'</p>';
\t\t\t \t\t  \t\t\t\$('.filter-brand').append(element); 
\t\t\t \t\t  \t\t}
\t\t\t \t\t  \t\t\$('.filter-brand').off('.brandAction'); 
\t\t\t \t\t  \t\t\$('.filter-brand').on('click', '.brandAction', function(event) {
\t\t\t \t\t  \t\t\tvar string = null; 
\t\t\t \t\t  \t\t\tstring = \$(event.target).text(); 
\t\t\t \t\t  \t\t\tvar element = '<p>' + 
\t\t\t\t\t\t\t\t\t\t\t\t'<p class=\"brandAction\">'+string+'<span class=\"close-filter\">&times</span></p>' +  
\t\t\t\t\t\t\t\t\t\t\t\t'</p>'; 
\t\t\t\t\t\t\t\t\$('.filter-brand').html(element); 
\t\t\t \t\t  \t\t}); 
\t\t\t \t\t  } 
\t\t\t \t}
\t\t\t });
\t\t}
</script>";
    }

    public function getTemplateName()
    {
        return "filters.html.twig";
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
        return new Twig_Source("<style type=\"text/css\">
\t#filters {
\t\tmargin-top: 10px;
\t\tpadding: 5px 10px 10px 10px; 
\t\tbackground-color: #eff3f6; 
\t\tborder-radius: 4px;
\t\tfont-size: 11px;
\t}
\t.filter p {
\t\tmargin-bottom: 2px; 
\t}
\t.filter-title {
\t\tborder-bottom: 1px solid gray;
\t}
\t.close-filter {
\t\tfont-size: 17px; 
\t\tcolor: orange;
\t\tpadding-left: 10px; 
\t}
\t.close-filter:hover {
\t\tcursor: pointer;
\t}
</style>

<div id=\"filters\">
\t<div class=\"filter\">
\t\t<div class=\"filter-title\">
\t\t\t<h4>Brand</h4>
\t\t</div>
\t\t<div class=\"filter-brand\">
\t\t\t<!-- marcas --> 
\t\t\t<!-- <p>
\t\t\t\t<a href=\"\">HP</a>
\t\t\t</p> --> 
\t\t</div>
\t</div>
</div>

<script type=\"text/javascript\">
\t\t\tgetFilters(); 
\t\tfunction getFilters() {
\t\t\t\t\$.ajax({
\t\t\t \turl: 'controladores/getMarcas.php', 
\t\t\t \tmethod: 'POST', 
\t\t\t \tdata: { 
\t\t\t \t\t\t}, 
\t\t\t \tsuccess: function(response){
\t\t\t \t\t  if( response != 'sin datos' ) {
\t\t\t \t\t  \t\tresponse = JSON.parse(response);  
\t\t\t \t\t  \t\tfor(i in response) {
\t\t\t \t\t  \t\t\tvar element = '<p>' + 
\t\t\t\t\t\t\t\t\t\t\t\t'<a class=\"brandAction\" href=\"index.php?p=feedLocal&brand='+response[i].varchar_value+'\">'+response[i].varchar_value+'</a>' + 
\t\t\t\t\t\t\t\t\t\t\t\t'</p>';
\t\t\t\t\t\t\t\tvar element = '<p>' + 
\t\t\t\t\t\t\t\t\t\t\t\t'<p class=\"brandAction\">'+response[i].varchar_value+'</p>' + 
\t\t\t\t\t\t\t\t\t\t\t\t'</p>';
\t\t\t \t\t  \t\t\t\$('.filter-brand').append(element); 
\t\t\t \t\t  \t\t}
\t\t\t \t\t  \t\t\$('.filter-brand').off('.brandAction'); 
\t\t\t \t\t  \t\t\$('.filter-brand').on('click', '.brandAction', function(event) {
\t\t\t \t\t  \t\t\tvar string = null; 
\t\t\t \t\t  \t\t\tstring = \$(event.target).text(); 
\t\t\t \t\t  \t\t\tvar element = '<p>' + 
\t\t\t\t\t\t\t\t\t\t\t\t'<p class=\"brandAction\">'+string+'<span class=\"close-filter\">&times</span></p>' +  
\t\t\t\t\t\t\t\t\t\t\t\t'</p>'; 
\t\t\t\t\t\t\t\t\$('.filter-brand').html(element); 
\t\t\t \t\t  \t\t}); 
\t\t\t \t\t  } 
\t\t\t \t}
\t\t\t });
\t\t}
</script>", "filters.html.twig", "C:\\xampp\\htdocs\\projects\\OMG\\stockOMG\\OMGstocks\\templates\\filters.html.twig");
    }
}
