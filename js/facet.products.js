validYears(true);
$(document).ready(function(){
	setTimeout(function(){
		animate(".animate-nbotellas", "wobble");
	},800);

	// Retornamos los valores que habia colocado el cliente en las cajas de texto
	for (var i = 1 ; i <= 4; i++) {
		valTextCombo = (getCookie("cmb"+i) == "" || getCookie("cmb"+i) == undefined) ? 0 : parseInt(getCookie("cmb"+i));
		$("#txt-cmb"+i).val(valTextCombo);
	}


	// Suma combos
	$(".controls-add").click(function(){
		var idCombo = $(this).data("idc");
		var valcombo = ($("#txt-cmb"+idCombo).val()=="") ? 0 : $("#txt-cmb"+idCombo).val(); 
		var txtCmb = parseInt(valcombo) + 1;
		$("#txt-cmb"+idCombo).val(txtCmb);
	});

	// Resta combos
	$(".controls-remove").click(function(){
		var idCombo = $(this).data("idc");
		var valcombo = ($("#txt-cmb"+idCombo).val()=="") ? 0 : $("#txt-cmb"+idCombo).val(); 
		var txtCmb = parseInt(valcombo) - 1;
		if (txtCmb >= 0) {
			$("#txt-cmb"+idCombo).val(txtCmb);	
		}
	});

	// Boton de pagar
	$("#PAYbtn").click(function(){
		var sumUnidCombos = 0;
		for (var i = 1 ; i <= 4; i++) {
			valTextCombo = ($("#txt-cmb"+i).val() == "" ) ? 0 : parseInt($("#txt-cmb"+i).val());
			sumUnidCombos += valTextCombo;
			setCookie("cmb"+i, valTextCombo, 1);
		}
		if(sumUnidCombos > 0){
			window.location.href = "checkout.php";
		}else{
			message("Debes escober al menos un combo",3000);
		}
	});
	
});