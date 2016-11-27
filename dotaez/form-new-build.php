<?php
	session_start();
?>	
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/dotaicone.jpeg">

    <title>DotaEz</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="justified-nav.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <a href="http://localhost/dotaez/index.php"><img src="img/dotalogo.png" width="50" height="50"></a> 
	<?php
		if(isset($_SESSION['nme_user'])){
   			echo "<p align=”Right”>Buenas noches señorita ".$_SESSION['nme_user']."	"."<a href='http://localhost/dotaez/logout.php'>Logout</a>"."</p>";
		}
	?>
        <nav>
          <ul class="nav nav-justified">
            <li class="nav-item"><a class="nav-link active" href="http://localhost/dotaez/index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost/dotaez/all-builds.php">Builds</a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost/dotaez/all-heroes.php">Heroes</a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost/dotaez/all-itens.php">Itens</a></li>
            <li class="nav-item"><a class="nav-link" href="http://localhost/dotaez/contact.php">Contact</a></li>
	    <li class="nav-item"><a class="nav-link" href="http://localhost/dotaez/login.php">Login(Moderadores)</a></li>
          </ul>
        </nav>
      </div>
    <form action='new-build.php' method='post'>
	<input type='text' name='nme_build' placeholder='Nome'><br>
	<input type='text' name='hero' placeholder='Heroi'><br>
	<input type='text' name='itens' placeholder='Itens separados por ";" '><br>
	<input type='submit' value='Submit'>
    </form>
</body>
