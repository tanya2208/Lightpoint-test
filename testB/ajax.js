$( document ).ready(function() {
    $(".continue").click(
		function(){
			sendAjaxForm('result_form', 'ajax_form', 'form.php');
			return false;
		}
	);
});

function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url, //url страницы (form.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
        	result = $.parseJSON(response);
        	$('#result_form').html("Data has been successfully transferred!");
    	},
    	  error: function(response) { // Данные не отправлены
            $('#result_form').html('Oops! Something went wrong. Please try again.');
    	}
 	});
}
