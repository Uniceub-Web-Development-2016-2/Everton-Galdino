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

<div class="container">
		<?php
		if(isset($_SESSION['nme_user'])){
			echo '<a class="btn btn-warning" href="http://localhost/dotaez/form-new-build.php">Nova Build</a><br>';
			echo '<a class="btn btn-warning" href="http://localhost/dotaez/form-alter-build.php">Alterar Build</a>';
		}
		?>
		<h2 class="sub-header">Todas as Builds</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Identificador</th>
						<th>Nome</th>
						<th>Heroi</th>
						<th>Itens</th>
					</tr>
			</thead>
			<tbody>
			<?php
			include('httpful.phar');
			$get_request = 'http://localhost/dotaserver/build/';
			$response = \Httpful\Request::get($get_request)->send();
			$response->body;
			$arr = json_decode($response->body, true);
			foreach ($arr as $key =>$value){
				echo '<tr><td>'.$value['idt'].'</td>'.'<td>'.$value['nme_build'].'</td>'.'<td>'.$value['hero'].'</td>'.'<td>'.$value['itens'].'</td>'.'</tr>';
			}
			?>
			</tbody>
			</table>
	</div>

</body>
