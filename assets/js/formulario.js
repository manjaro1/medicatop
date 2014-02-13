/* # Validando Formulario
============================================*/
$(document).ready(function(){
	$('#formulario').validate({
		errorElement: "span",
		rules: {
		    txtNombre: {
		     	minlength: 2,
		        required: true
		    }, 
			txtApellidos: {
		     	minlength: 2,
		        required: true
		    },
			UserName: {
		     	minlength: 2,
		        required: true
		    },
		    txtEmail: {
		        required: true,
		        email: true
		    },
		    txtTelefono: {
		      	minlength: 2,
		        required: true
		    }, 
			 txtPassword: {
		      	minlength: 2,
		        required: true
		    }, 
			txtAsunto: {
		      	minlength: 2,
		        required: true
		    },
		    txtDescripcion: {
		        minlength: 2,
		        required: true
		    }
		},
		highlight: function(element) {
			$(element).closest('.form-control')
			.removeClass('success').addClass('error');
		},
		success: function(element) {
			$(element).closest('.form-control')
			.removeClass('error').addClass('success');
			/*element
			.text('OK!').addClass('help-inline')
			.closest('.form-control')
			.removeClass('error').addClass('success');*/
		}
	});
});