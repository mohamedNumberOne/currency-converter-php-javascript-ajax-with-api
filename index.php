<!DOCTYPE html>
<html>
<head>
	<title>Currency converter</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<?php 	

$api = "http://data.fixer.io/api/latest?access_key=b1ec827429877a8dff3a35bd44c6d1b4";
$api = file_get_contents($api);
$array = json_decode($api,1);

// affichage du formullaire

echo "
<div class='my_form'>
	<form method='POST'  >";
	echo "   
		<p> From </p>
		<select name='select_from' id='select_from'  >";

			foreach ($array['rates'] as $devise => $value ) 
			{
				 echo " <option value=".$devise." > "   . $devise  . "  </option> "    ;
			}
	echo "</select>";
			
			if (isset($value_from)) {
				$value_input = $value_from;
			}else {
				$value_input = '';
			}

			echo"<input placeholder='Montant'  type='text' name='input_from'  required 
			id='input_from'	value=$value_input > " ;
echo "
		<p> To </p>
		<select name='select_target' id='select_target' >";
			foreach ($array['rates'] as $devise => $value ) 
			{
				 echo " <option value=".$devise." > "   . $devise  . "  </option> "    ;
			}
echo "
		</select>
		 
	</form>
	<p id='p_rep' >Donner un montant !</p>
</div>";

// Fin du formullaire


?>

 

<script type="text/javascript" src="jquery.js" ></script>
<script type="text/javascript" src="conversion.js" ></script>

</body>
</html>
