<?php 

if(isset($_POST['submit']) ) {
	if(isset($_POST['status']))
	$var = $_POST['status'];
	
	$vect = ["hartie","foarfeca","piatra"];
	echo "Computer a ales: ";
	$rand = rand(0,2);
	$isWin =false;
	echo $vect[$rand];

	echo "<br/>Playerul a ales ".$var;
	
	if($var == $vect[$rand]) {
		echo " Egalitate";
	}
	if($var == "hartie" && $vect[$rand] =="piatra" || $var == "foarfeca" && $vect[$rand] =="hartie") { 
		$isWin = true;
		echo "<br/>You win";		
	}
	if($isWin == false) 
		echo "<br/>You Lose";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>joc</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	

</head>
<body>
	<div class="container">
		<form action="index.php" method="POST">
			<label>Alege:</label><br/>
			<input type="radio" name="status" value="foarfeca"/>
			<label>Foarfeca</label><br/>
			<input type="radio" name="status" value="hartie"/>
			<label>Hartie</label><br/>
			<input type="radio" name="status" value="piatra"/>
			<label>Piatra</label><br/>
			<input type="Submit" name ="submit" value ="go"/>
		</form>
	</div>

</body>
</html>