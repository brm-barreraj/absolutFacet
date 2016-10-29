jQuery(document).ready(function($) {


	$('#btn_ageGate')
		.click(function() {

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

			$('.home')
				.velocity('fadeIn', {duration:800, delay:250});

		});


});