var select_from = $("#select_from") ;
var select_target = $("#select_target") ;
var input_from = $("#input_from") ;
 

input_from.on('keyup' , function(){
	
	var select_from = $("#select_from") ;
	var select_target = $("#select_target") ;

	var input_from_value = this.value;
	var select_target_value = select_target.val();
 	var select_from_value = select_from.val();

	var parag = document.getElementById("p_rep");

	if (input_from_value.trim().length > 0 && !isNaN(input_from_value) ) 
	{ 	
		parag.textContent = "Conversion en cours ..."; 
		$.post( 'serveur.php'  , 
		{
			input_from_value : input_from_value, 
			select_target_value : select_target_value , 
			select_from_value : select_from_value 
		} , 
			function(data){
				document.getElementById("p_rep").innerHTML = data;  
			});
	}else { 
		parag.textContent = "Donner un montant avec des chifres"; 
	}
	if(input_from_value.trim().length == 0) {  p_rep.textContent = "Donner un montant !" ;} 

});

// __________________________

select_target.on('change' , function(){
	var select_from = $("#select_from") ;
	var select_target_value = this.value;
	var input_from = $("#input_from") ;

 	var select_from_value = select_from.val() ;
 	var input_from_value  = input_from.val() ; 
	var parag = document.getElementById("p_rep");

	if (input_from_value.trim().length > 0 && !isNaN(input_from_value) ) 
	{ 	 
		parag.textContent = "Conversion en cours ..."; 
		$.post( 'serveur.php'  , 
		{
			input_from_value : input_from_value, 
			select_target_value : select_target_value , 
			select_from_value : select_from_value 
		} , 
			function(data){
				document.getElementById("p_rep").innerHTML = data;  
			});
	}else { 
		parag.textContent = "Donner un montant avec des chifres"; 
	}

});


// __________________________


select_from.on('change' , function(){
	var select_target = $("#select_target") ;
	var select_from_value = this.value;
	var input_from = $("#input_from") ;

 	var select_from_value = select_from.val() ;
 	var input_from_value  = input_from.val() ; 
 	var select_target_value  = select_target.val() ; 
	var parag = document.getElementById("p_rep");

	if (input_from_value.trim().length > 0 && !isNaN(input_from_value) ) 
	{ 	 
		parag.textContent = "Conversion en cours ..."; 
		$.post( 'serveur.php'  , 
		{
			input_from_value : input_from_value, 
			select_target_value : select_target_value , 
			select_from_value : select_from_value 
		} , 
			function(data){
				document.getElementById("p_rep").innerHTML = data;  
			});
	}else { 
		parag.textContent = "Donner un montant avec des chifres"; 
	}

});


 
