$("#sub").click(function(){
	$.post($("#myForm").attr("action"), $("#myForm :input").serializeArray(), function(info){$("#result").html(info); } );
	$('#u1').val('');
	$('#u2').val('');

	} )

$("#myForm").submit( function() {
	return false;
})

