validYears(true);
$(document).ready(function(){

	if (getCookie("dataForm") != undefined && getCookie("dataForm") != "") {
		var dataForm = getCookie("dataForm");
		var arrDataForm = dataForm.split("&");
		for (var i = 0; i < arrDataForm.length; i++) {
			eachData = arrDataForm[i].split("=");
			console.log(eachData[0],"key 1");
			console.log(eachData[1],"value 1")
			key = eachData[0];
			value = eachData[1]
				.replace(/%40/g,"@")
				.replace(/[+]/g," ")
				.replace(/%23/g,"#")
				.replace(/%C3%A1/g,"á")
				.replace(/%C3%A9/g,"é")
				.replace(/%C3%AD/g,"í")
				.replace(/%C3%B3/g,"ó")
				.replace(/%C3%BA/g,"ú");
				console.log(key,"key");
				console.log(value,"value");
			var elem = $("input[name='"+key+"']");
			if (elem.is("input:text")) {
				elem.val($.trim(value));
				console.log(key,"input");
			}else if(!elem.is("input:hidden")){
				console.log(key,"select");
				$("input[name='"+key+"'], option[value='"+value+"']").prop('selected', true);
			}
			
		}
	}

	setTimeout(function(){
		animate(".animate-nbotellas", "wobble");
	},800);
	setTimeout(function(){
		$('html, body').animate({
	        scrollTop: $("#facturacion").offset().top
	    }, 2000);
	},2000);
	setTimeout(function(){
		animate(".animate-info", "bounce");
	},3500);

	setTimeout(function(){
		animate(".animate-form", "wobble");
	},5000);

	var envio = 4000;
	var subtotal = 0;
	var total = 0;
	var comboV = [];
	comboV[1]=60000;
	comboV[2]=125000;
	comboV[3]=110000;
	comboV[4]=0;

	// Coloca valores a la informacion del pedido

	var sumUnidCombos = 0;
	for (var i = 1 ; i <= 4; i++) {
		cantTextCombo = (getCookie("cmb"+i) == "" || getCookie("cmb"+i) == undefined) ? 0 : parseInt(getCookie("cmb"+i));
		$("#cantC"+i).val(cantTextCombo);
		sumUnidCombos += cantTextCombo;
		var valorTotalCombo = (cantTextCombo * comboV[i]);
		subtotal += valorTotalCombo;
		if (cantTextCombo > 0) {
			$("#combo"+i).show();
			$("#combo"+i+" td:eq(1)").text(cantTextCombo);
			$("#combo"+i+" td:eq(2)").text(valorTotalCombo);
		}
	}

	total = (subtotal + envio);
	$("#subtotalCombos").text("$"+subtotal);
	$("#totalCombos").text("$"+total);

	if(sumUnidCombos == 0){
		// No hay combos seleccionados redireccionamos a productos
		window.location.href = "productos";
	}

	// Botón terminos
	$("#terminos").click(function(){
		if ($("#facturacion").valid() && validYears()) {
			animate("#PAYconfirm_btn","tada");
		}
	});

	// Botón regresar
	$("#BACKbtn").click(function(){
		var dataForm = $("#facturacion").serialize();
		setCookie("dataForm",dataForm,1);
		window.location.href = "productos";
	});

	// Botón realizar pedido
	$("#PAYconfirm_btn").click(function(){
		if ($("#facturacion").valid() && validYears()) {
			var txtCaptcha = grecaptcha.getResponse();
			captchaData = { txtCaptcha : txtCaptcha};
			var resultAjaxCaptcha = sendAjax("checkout", "captcha", captchaData);
			if (resultAjaxCaptcha.error == 0) {
				alert("captcha incorrecto");
			}else if (resultAjaxCaptcha.error == 2) {
				alert("captcha no coincide");
			}else if (resultAjaxCaptcha.error == 1) {
				console.log('entado acá');
				var dataForm = $("#facturacion").serialize();
				var resultAjax = sendAjax("checkout", "comprar", dataForm);
				if (resultAjax.error == 0) {
					alert("Datos no válidos");
				}else if (resultAjax.error == 1) {
					alert("inserto correctamente");
					// Borramos cookies
					deleteCookie("dataForm");
					for (var i = 1 ; i <= 4; i++) {
						deleteCookie("cmb"+i);
					}
					// Redirecciona
					window.location.href = "./";
				}else if (resultAjax.error == 2) {
					alert("Ocurrio un error al insertar");
				}else if (resultAjax.error == 31) {
					alert("No hay combos disponibles para el combo 1");
				}else if (resultAjax.error == 32) {
					alert("No hay combos disponibles para el combo 2");
				}else if (resultAjax.error == 33) {
					alert("No hay combos disponibles para el combo 3");
				}else if (resultAjax.error == 34) {
					alert("No hay combos disponibles para el combo 4");
				}
			};
		}
		
	});

});