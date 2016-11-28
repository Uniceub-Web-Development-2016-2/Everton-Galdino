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
        <a href="index.php"><img src="img/dotalogo.png" width="50" height="50"></a> 
	<?php
		if(isset($_SESSION['nme_user'])){
   			echo "<p align=”Right”>Buenas noches señorita ".$_SESSION['nme_user']."	"."<a href='logout.php'>Logout</a>"."</p>";
		}
	?>
        <nav>
          <ul class="nav nav-justified">
            <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="all-builds.php">Builds</a></li>
            <li class="nav-item"><a class="nav-link" href="all-heroes.php">Heroes</a></li>
            <li class="nav-item"><a class="nav-link" href="all-itens.php">Itens</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
	    <li class="nav-item"><a class="nav-link" href="login.php">Login(Moderadores)</a></li>
          </ul>
        </nav>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Atualização 6.87</h1>
        <p class="lead">Tudo sobre a última atualização</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Saiba mais</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Valve anuncia datas do próximo International</h2>
          <p>A Valve anunciou nesta quinta-feira (3) as datas para a próxima edição do The International, o campeonato mundial de Dota 2, e novas informações para o Major da primavera norte-americana do ano que vem, incluindo os dias da competição e mudanças no formato.</p>
          <p><a class="btn btn-primary" href="#" role="button">Veja mais &raquo;</a></p>
      <footer class="footer">
        <p>&copy; Direito de resposta MC Jhonny(Esperando o silêncio pra rimar)</p>
      </footer>
        </div>
    </div>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
