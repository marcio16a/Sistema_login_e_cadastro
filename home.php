<?php
// Conexão
require_once 'db_connect.php';

// Sessão
session_start();

if(!isset($_SESSION['logado'])):
	header('Location:index.php');
endif;




?>
<html>
<head>
	 <!--Import Google Icon Font-->
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    
	 <!--Let browser know website is optimized for mobile-->
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
	<title>Sistema de cadastro de clientes </title>
	<meta charset="utf-8">
</head>
<body>

<nav><a  href="logout.php">Sair</a></nav>
	

<div class="row">
		<div class="col s12 m6 push-m3">
			<h3 class="light">Pessoa</h3>
				<table class="striped">
					<thead>
						<tr>
							<th>Nome:</th>
							<th>Sobrenome:</th>
							<th>Email:</th>
							<th>Idade:</th>
							
						</tr>


					</thead>
					<br>

					<tbody>
						<?php
						$sql ="SELECT * FROM clientes ";
						$resultado = mysqli_query ($connect,$sql);
						while($dados = mysqli_fetch_array($resultado)):
						?>

						

						<tr>
						<td><?php echo $dados['nome']; ?></td>
						<td><?php echo $dados['sobrenome']; ?></td>
						<td><?php echo $dados['email']; ?></td>
						<td><?php echo $dados['idade']; ?></td>
						
						
						<td><a href="editar.php?id=<?php echo $dados['id'];?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
						
						<td><a href="delete.php?id=<?php echo $dados['id'];?>"  class="btn-floating red "><i class="material-icons">delete</i></a></td>

          
						</tr>
						
						<?php endwhile; ?>

					</tbody>
					</table>
				
					<br>
					<a href="adicionar.php" class="btn">adicionar cliente</a>
					
					</div>
						</div>		
					

						    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            

					


</body>


</html>