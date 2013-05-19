$(document).ready(function() {

	$("#contactForm").validate({
		submitHandler:function(form) {
			bootbox.alert("Thank you for your feedback", function() {
				document.location.replace('index.html');
			});
		}
	});
});