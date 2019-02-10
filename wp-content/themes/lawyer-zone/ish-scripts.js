//alert('Javascript up');
jQuery(document).ready(function($){

$("div .siteorigin-panels-stretch").css("margin","0px");
$("div .site-content").css("margin-top","0px");
//$("#pgc-2-4-1 > .panel-cell-style").css("padding-right","100px");

});

//vue.js site data integration. 
//Use these data points as a substitute for replaced local theme functions

window.onload = function() {

	var slider_data = new Vue({
	  el: '#slider_data',
	  data: {
	    title: 'Ayuda Notarial',
	    tagline: 'Write your tagline here',
	  }
	})


}