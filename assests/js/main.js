$(document).ready(function () {
	console.log('sada');


	//contact
	$('#contactForm').submit(function (e) {
		e.preventDefault();

		var formData = new FormData($(this)[0]);
		var  result = {};
		for (var entry of formData.entries())
		{
			result[entry[0]] = entry[1];
		}
		var dataJson = result;

		$.ajax({
			url: $(this).attr("action"),
			type: $(this).attr("method"),
			dataType: "json",
			//processData: false,
			data: dataJson,
			success: function (response) {
				console.log(response);
				if (response.status) {

					$(".inform").html('<div class="alert alert-success">'+response.message+'</div>');
				} else {
					$(".inform").html('<div class="alert alert-danger">'+response.message+'</div>');
				}
			},
			error: function () {
				//console.log(err);
				$(".inform").html('<div class="alert alert-danger">Something went wrong</div>');

				console.log('Something went wrong');
			}
		});

	});
//end contact

});
