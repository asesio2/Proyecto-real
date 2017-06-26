/*
$(this).hide() - .

$("p").hide() - <p> elements.

$(".test").hide() - class = "test".

$("#test").hide() - id = "test".
*/

$(document).ready(function(){
       
        $("div.ocultar").hide();

	$("#btnEsconder").click(function(){
		$("form").hide(1); 
                $("div.ocultar").hide(1);
                
	});

	$("#btnMostrar").click(function(){
		$("form").show(1);  
                $("div.ocultar").show();
               
	});

	$("div.alert-danger").hide();

	$("form").submit(function(){
		//alert('ola k ase!');
		var user = $("#txtUser").val();
		var pass = $("#txtPass").val();

		if(user == "Duoc" && pass == "Duoc") {
                    return true;
                    
            }else{
                    $("div.alert-danger").show(1000);
			return false;
		} 
	});

	

});