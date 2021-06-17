<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Hq Test</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
	<div class="container">
	<?php
      
        if(isset($_POST['login-button'])) {
			$number=$_POST['nombre'];
			if((intval($number) % 3==0) && (intval($number) % 5==0)){
				echo "<h1>Walkap</h1>";
			}
			elseif(intval($number) % 5==0){
				echo "<h1>Kap</h1>";
			}
			elseif(intval($number) % 3==0){
				echo "<h1>Wal</h1>";
			}
			else{
				echo $number;
			}
            
        }
		elseif(isset($_POST['reset'])){
			echo "<h1>Bienvenue</h1>";
			$_POST['nombre']="";
		}
		else{
			echo "<h1>Bienvenue</h1>";
        }
		
    ?>
		<!--<h1>Bienvenue</h1>-->
		
		<form class="form" method="post">
			<input type="number" placeholder="Entrer un nombre entre 1 et 20" name="nombre" min="1" max="20">
<!-- 			<input type="password" placeholder="Password"> -->
			
			<button type="submit" id="login-button" name="login-button">Valider</button>
			<button type="submit" name="reset" id="reset" >Reinitialiser</button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
