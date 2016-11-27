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
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Contato:</h2>
          <p>Desenvolvedor: Everton Galdino<br>Email: evertongladino@gmail.com<br>Telefone: +55 (61) 98361-2590<br></p>
        </div>


  </body>
</html>
