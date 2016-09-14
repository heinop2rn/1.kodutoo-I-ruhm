<?php

	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);

	$signupEmailError = "";
	$signupPasswordError = "";

	//kas e-post oli olemas
	if(isset ($_POST["signupEmail"]))
	{
		if( empty ($_POST["signupEmail"]))
			//oli email, kuid see oli tühi
		$signupEmailError = "*See väli on kohustuslik";
	}
	if(isset ($_POST["signupPassword"])){
	
		if( empty ($_POST["signupPassword"])){
			//oli email, kuid see oli tühi
		$signupPasswordError = "*See väli on kohustuslik";
	
		} else {
		
		//Oli parool ja see ei olnud tühi
		//Vähemalt 8
		if (strlen($_POST["signupPassword"]) < 8 ) {
			$signupPasswordError = "*Parool peab olema vähemalt 8 tähemärgi pikkune";
		}
	}
	}
	
 
 
?>




<!DOCTYPE html>
<html>
	<head>
		<title>Registreeri kasutajaks</title>
	</head>
	<body>

		<h1>Registreeri kasutajaks</h1>
		<form method="POST">
	 
	  <label>E-post</label><br>
	  <input name="signupEmail" type="email" > <?php echo $signupEmailError;  ?>
	  <br>
	  <input name="signupPassword" type="password" placeholder="Parool"> <?php echo $signupPasswordError;  ?>
	  <br>
	  <br>
	  <input type="submit" value="Registreeri" name="submit">
		</form>

		<h1>Logi sisse</h1>
		<form method="POST">
	 
	  <label>E-post</label><br>
	  <input name="loginEmail" type="email" >
	  <br>
	  <input name="loginPassword" type="password" placeholder="Parool"><br>
	  <br>
	  <input type="submit" value="Saada" name="submit">
		</form>
	</body>
</html>