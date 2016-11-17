jQuery(document).ready(function($) {
	

	//Validar letras con espacios y caracteres especiales//
		jQuery.validator.addMethod("letras", function(value, element)
		   {
		       return this.optional(element) || /^[a-z" "ñÑáéíóúÁÉÍÓÚ,.;]+$/i.test(value);
		   });


	jQuery("#facturacion").validate({

	       // debug: true,

	      /*Contenedor y clase donde se pinta el error*/
	      errorElement: "div",
	      errorClass: "alert-danger",

	      /*Campos para validar en form para pedir fiesta*/

	    rules: {
	           nombres:       {required: true, letras: true },
	           tipodocu:          {required: true},  
	           documento:          {required: true, digits: true},  
	           email:       {required: true, email: true},  
	           ciudad:       {required: true},
	           cel:       {required: true,maxlength: 10, minlength: 10, digits: true},
	           tel:       {required: true,maxlength: 13, minlength: 7, digits: true},
	           terminos:        {required: true},
	           politica:        {required: true},
	           enviomail:        {required: true},
	           dd:          {required: true,digits: true},  
	           mm:          {required: true,digits: true},  
	           aaaa:          {required: true,digits: true} 
	           },

	    /*Mensajes en caso de dar error para cada input*/

	    messages: {
	      nombres:      {required: "debes ingresar tu nombre", letras: "solo ingresa texto"},
	      email:      {required: "debes ingresar un email", email: "Ingresa un email válido"},
	      tipodocu:  {required: "Indíca el tipo de documento" },
	      documento:  {required: "Indíca un número de documento", digits: "solo se aceptan números" },
	      ciudad:      {required: "debes seleccionar la ciudad"},
	      cel:      {required: "Ingresa tu n&uacute;mero de celular", maxlength:"N&uacute;mero no v&aacute;lido", minlength:"N&uacute;mero no v&aacute;lido", digits: "solo se aceptan números" },
	      tel:      {required: "Ingresa tu n&uacute;mero de tel&eacute;fono", maxlength:"N&uacute;mero no v&aacute;lido", minlength:"N&uacute;mero no v&aacute;lido", digits: "solo se aceptan números" },
	      terminos:         {required: "Debes aceptar los términos y condiciones"},
	      politica:         {required: "Debes aceptar la política de datos"},
	      enviomail:         {required: "Debes aceptar que Absolut me contacte para información de eventos y beneficios"},
	      dd:         {required: "Indica un día",digits: "solo se aceptan números" },
	      mm:         {required: "Indica un mes",digits: "solo se aceptan números" },
	      aaaa:         {required: "Indica un año",digits: "solo se aceptan números" }
	     

	           },

	    errorPlacement: function (error, element) {

	      if( element.attr('name') == 'terminos' || element.attr('name') == 'politica' || element.attr('name') == 'enviomail' || element.attr('name') == 'dd' || element.attr('name') == 'mm' || element.attr('name') == 'aaaa' ){

	        error.insertAfter(element.parent().parent());

	      }else{

	        error.insertAfter(element);
	      }

	    }


			});


});