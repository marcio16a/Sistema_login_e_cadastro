<?php
// Conexão
require_once 'db_connect.php';

// Sessão
session_start();

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
			<h3 class="light">Novo Cliente</h3>

            <form action="create.php" method="POST">

                <div class="input-field col s12">
                    <input type="text" name="nome" id="nome">
                    <label for="nome">Nome</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="sobrenome" id="sobrenome">
                    <label for="sobrenome">Sobrenome</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="email" id="email">
                    <label for="email">Email</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="idade" id="idade">
                    <label for="idade">Idade</label>
                </div>

              
                <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
                <a href="home.php" class="btn green">Lista de clientes</a>

            </form>





    </div>

</div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            

</body>

</html>