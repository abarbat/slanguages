//questions
$(document).ready(function() {

$("#success").hide();

$("#slangform").on("submit", function(e) {
    e.preventDefault();//maybe don't need this?

	$.ajax({
		url:  "submit.php",
		type: "POST",
		data: $(this).serialize(),
		success: function(html) {
            $("#hideform").hide();
            $("#success").show();
            console.log(html);
        },
        error: function (jqXHR, status, err) {
            alert("Error!");
        }

    });

});

});
