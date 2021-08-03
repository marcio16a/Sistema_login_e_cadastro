<?php
// Conexão
require_once 'db_connect.php';

// Sessão
session_start();

if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect,$_GET['id']);
    

    $sql = "SELECT * FROM clientes  WHERE id = '$id'";
    $resultado = mysqli_query ($connect, $sql);
    $dados = mysqli_fetch_array ($resultado);
 
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
    
	<title>Sistema de cadastro </title>
	<meta charset="utf-8">
</head>
<body>
<div class="row">
		<div class="col s12 m6 push-m3 ">
			<h3 class="light">Editar Cliente</h3>

            <form action="update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $dados['id'];?>">

                <div class="input-field col s12">
                    <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
                    <label for="nome">Nome</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="sobrenome" id="sobrenome"value="<?php echo $dados['sobrenome']; ?>">
                    <label for="sobrenome">Sobrenome</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="email" id="email"value="<?php echo $dados['email']; ?>">
                    <label for="email">Email</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="idade" id="idade"value="<?php echo $dados['idade']; ?>">
                    <label for="idade">Idade</label>
                </div>

               
                

                <button type="submit" name="btn-editar" class="btn">Atualizar</button>
                <a href="home.php" class="btn green">Lista de pessoas</a>

            </form>





  <!--JavaScript at end of body for optimized loading-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>