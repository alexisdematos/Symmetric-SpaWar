$(document).ready(function(){
    $("#button1").click(function(){
		$(this).removeClass("button");
		$(this).addClass("button_selected");
		
		$("#button2").removeClass("button_selected");
		$("#button2").addClass("button");
		
		$("#langue").val("wixspa");
	
    });

	$("#button2").click(function(){
		$(this).removeClass("button");
		$(this).addClass("button_selected");
		
		$("#button1").removeClass("button_selected");
		$("#button1").addClass("button");
		$("#langue").val("spawix");
		
    });
	

	
	$("#translate").click(function(){
		$("#textarea2").prop('disabled',true);
		$("#textarea2").val($("#textarea").val());
	});
	
	$("#corriger").click(function(){
		$("#form10").prop('disabled',false);
		$("#valbtn").prop('disabled',false);
	});
	
	$("#valbtn").click(function(){
		$("#form10").prop('disabled',true);
		$("#valbtn").prop('disabled',true);
	});

});