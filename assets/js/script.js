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
		$("#form10").prop('disabled',true);
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
