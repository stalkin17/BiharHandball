$(document).ready(function (e){
$("#contact_us").on('submit',(function(e){
e.preventDefault();
$.ajax({
url: "mail_sender.php",
method: "POST",
data:  new FormData(this),
contentType: false,
cache: false,
processData:false,
success: function(data){
$('#response').fadeIn().html(data);
				setTimeout(function() {
					$('#response').fadeOut("slow");
				}, 2000 );


//$("#response").html(data);

$('#contact_us')[0].reset();
},
error: function(){}             
});
}));
});
