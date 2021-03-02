<?php 

		// verification des 3 champs
if 	(
		isset( $_POST['input_from_value'] , $_POST['select_target_value'] , $_POST['select_from_value'] )
		&& !empty(trim($_POST['input_from_value'])) && !empty(trim($_POST['select_target_value']))
		&& !empty(trim($_POST['select_from_value']))
	) 
	{ 
		// api		
		$api = "http://data.fixer.io/api/latest?access_key=b1ec827429877a8dff3a35bd44c6d1b4";
		$api = file_get_contents($api);
		$array = json_decode($api,1);
		// affectations des variables
		$input_from_value = $_POST['input_from_value'];
		$select_target_value = $_POST['select_target_value'];
		$select_from_value = $_POST['select_from_value'];

			$erreur="";
			// verifie c'est les deux valeurs des select ne sont pas les mêmes
			if ( 
					$select_target_value != $select_from_value && $input_from_value != 0 
			   ) 
			{
				if ( is_numeric(trim($input_from_value)) ) 
				{	
				// verification si le client a introduit des chifres
	 				
$rep = $input_from_value * ( ( 1 / $array['rates'][$select_from_value] ) * $array['rates'][$select_target_value] ) ; 
	 				$rep =  number_format($rep,  2, ',' , ' '  );
	 				echo   $rep ;
				}else 
				{
					$erreur .= "Remplissez le champ par des numéros !";
				}
			}
			else 
			{
				$erreur .= "Selectinner deux valeurs differentes <br>";
			}	
			
			if( $input_from_value == 0 ) {echo "0";}	
			echo  $erreur ;
	}

 

?>

</script>
