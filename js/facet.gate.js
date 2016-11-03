function indexValid(){
	setTimeout(function(){
		$(".animate-absolut").show()
		animate(".animate-absolut", "fadeIn");
	},1500);
	$('#ageGate')
	.addClass('absolute')
	.removeClass('age-gate-in')
	.velocity('fadeOut', {
		duration:800,
		begin: function () {
			$('.footer').addClass('absolute absolute-footer');
		},
		complete: function () {	
			$('.footer').removeClass('absolute absolute-footer');
		}
	});
	$('.home').velocity('fadeIn', {duration:800, delay:250});
}

$(function() {
    if(validYears()){
		indexValid();
	}else{
		$("#ageGate").show();
		animate(".animate-date", "shake");
		setTimeout(function(){
			animate(".animate-btn", "rubberBand");
		},1200);
	}
})

$(document).ready(function($) {
	$('#btn_ageGate').click(function() {
		var fecha = new Date();
		var ano = fecha.getFullYear();
		// Validamos que la fecha sea correcta
		if ($("#dia").val() >= 1 && $("#dia").val() <= 31 && $("#mes").val() >= 1 && $("#mes").val() <= 12 && $("#anio").val() > (ano-100) && $("#anio").val() <= ano) {
			var dia = $("#dia").val();
		    var mes = $("#mes").val();
		    var anio = $("#anio").val();
		    var edad = 18;
		    var miFecha = new Date();
		    miFecha.setFullYear(anio, mes-1, dia);
		    var fechaActual = new Date();
		    fechaActual.setFullYear(fechaActual.getFullYear() - edad);
		    if ((fechaActual - miFecha) < 0){
				message("Disculpa, sólo personas de más de " + edad + " pueden ingresar a este sitio.",3000);
		    }else{
		    	if ($('#recordarme').is(':checked')) {
		    		// Si el usuario desea recordar que es mayor de edad - guarda localstorage
		    		localStorage.setItem("i34rs#af", "1a8fls");
		    	}
		    	var fechaNac = $("#anio").val()+"-"+$("#mes").val()+"-"+$("#dia").val();
		    	setCookie("f3ch4Nac#af", fechaNac, 1);
		    	setCookie("i34rs#af", "1a8fc", 1); 
		    	indexValid();
		    }
		}else{
			message("Fecha incorrecta",3000);
		}
	});

	var vid;

	$('.play')
		.click(function() {

			$('.play').velocity('fadeOut', {duration:500});				
			vid = document.getElementById("video");
			vid.play();	
		});


	$('#video')
		.click(function() {

			$('.play').velocity('fadeIn', {duration:500});				
			vid = document.getElementById("video");
			if(vid.paused){
				vid.play();
			}else{
				vid.pause();
			}
		});

});