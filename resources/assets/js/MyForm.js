var $form1 = $("#form1");
var $submitBtn = $("#submitBtn");
var $formData = $("#form1").serialize();

$submitBtn.click(function(e){
	e.preventDefault();
	localStorage.clickcount = 1;
	
	$.ajax({
	method: 'post',
	url: '/create',
	data: $formData,
	dataType: 'json',
	error: function(){
		alert("Network error!")
	},
	success: function(response){
		
	}
	})
	
});

