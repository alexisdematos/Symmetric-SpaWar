$(document).ready(function(){
    $("#button1").click(function(){
		$(this).removeClass("button");
		$(this).addClass("button_selected");
		
		$("#button2").removeClass("button_selected");
		$("#button2").addClass("button");
		
		$("#button3").removeClass("button_selected");
		$("#button3").addClass("button");
		
		$("#button4").removeClass("button");
		$("#button4").addClass("button_selected");
    });
	
	$("#button2").click(function(){
		$(this).removeClass("button");
		$(this).addClass("button_selected");
		
		$("#button1").removeClass("button_selected");
		$("#button1").addClass("button");
		
		$("#button3").removeClass("button");
		$("#button3").addClass("button_selected");
		
		$("#button4").removeClass("button_selected");
		$("#button4").addClass("button");
		
    });
	
	$("#button4").click(function(){
		$(this).removeClass("button");
		$(this).addClass("button_selected");
		
		$("#button2").removeClass("button_selected");
		$("#button2").addClass("button");
		
		$("#button1").removeClass("button");
		$("#button1").addClass("button_selected");
		
		$("#button3").removeClass("button_selected");
		$("#button3").addClass("button");
    });
	
	$("#button3").click(function(){
		$(this).removeClass("button");
		$(this).addClass("button_selected");
		
		$("#button1").removeClass("button_selected");
		$("#button1").addClass("button");
		
		$("#button2").removeClass("button");
		$("#button2").addClass("button_selected");
		
		$("#button4").removeClass("button_selected");
		$("#button4").addClass("button");
		
    });
	
        $( "#translate").click(function(){
	if ($("#button2").hasClass("button_selected"))
		{
		  $.ajax({
		        url: "trad_es_wix.php",
		        type: "POST",
		        context: document.body,
		        data: {text: $("#form7").val()}
		        }).done(function(data) { 
		            $("#form10").val(data);
		        });
		}
	else
		{
		$.ajax({
		        url: "trad_wix_es.php",
		        type: "POST",
		        context: document.body,
		        data: {text: $("#form7").val()}
		        }).done(function(data) { 
		            $("#form10").val(data);
		        });
		}
        })
	
	$("#corriger").click(function(){
		$("#textarea2").prop('disabled',false);
		$("#valbtn").prop('disabled',false);
	});
	
	$("#valbtn").click(function(){
		$("#textarea2").prop('disabled',true);
		$("#valbtn").prop('disabled',true);
	});

});