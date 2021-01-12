$(document).ready(function (e){
$("#reg_form").on('submit',(function(e){
e.preventDefault();
$.ajax({
url: "insert.php",
type: "POST",
data:  new FormData(this),
contentType: false,
cache: false,
processData:false,
success: function(data){
$('#response').fadeIn().html(data);
				setTimeout(function() {
					$('#response').fadeOut("slow");
				}, 10000 );


//$("#response").html(data);

$('#reg_form')[0].reset();
},
error: function(){}             
});
}));
});

