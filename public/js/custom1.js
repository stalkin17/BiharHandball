$(document).ready(function (e){
$("#aprocess").on('submit',(function(e){
e.preventDefault();
$.ajax({
url: "aprocess.php",
type: "POST",
data:  new FormData(this),
contentType: false,
cache: false,
processData:false,
success: function(data){
$('#msg').fadeIn().html(data);
				setTimeout(function() {
					$('#msg').fadeOut("slow");
				}, 10000 );
//$("#msg").html(data);

$('#aprocess')[0].reset();
},
error: function(){}             
});
}));
});
