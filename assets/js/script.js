

$(document).ready(function() {
	$("#fcontact").submit(function(event) {
		event.preventDefault();

		$.ajax({
			url: 'sendmail.php',
			type: 'post',			
			data: $(this).serialize(),
			success: function(data){
				$("#respuesta").slideDown();
				$("#respuesta").html(data);
			}

		});

		return false;
		
	});

	$("#fcontact-ser").submit(function(event){
		event.preventDefault();

		$.ajax({
			url: 'sendmail-ser.php',
			type: 'post',
			data: $(this).serialize(),
			success: function(data) {
				$("#respuesta-serv").slideDown();
				$("#respuesta-serv").html(data);

			}
		});

		return false;

	});

	$("#fcontact-per").submit(function(event){
		event.preventDefault();

		$.ajax({
			url: 'sendmail-ser.php',
			type: 'post',
			data: $(this).serialize(),
			success: function(data) {
				$("#respuesta-perm").slideDown();
				$("#respuesta-perm").html(data);

			}
		});

		return false;

	});

	$("#fcontact-compo").submit(function(event){
		event.preventDefault();

		$.ajax({
			url: 'sendmail-comp.php',
			type: 'post',
			data: $(this).serialize(),
			success: function(data) {
				$("#respuesta-perm").slideDown();
				$("#respuesta-perm").html(data);

			}
		});

		return false;

		$("#fcontact-elec").submit(function(event){
		event.preventDefault();

		$.ajax({
			url: 'sendmail-elec.php',
			type: 'post',
			data: $(this).serialize(),
			success: function(data) {
				$("#respuesta-perm").slideDown();
				$("#respuesta-perm").html(data);

			}
		});

		return false;

	});





	
	
});

