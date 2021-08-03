<?php

// Conexão
require_once 'db_connect.php';

// Sessão
session_start();

if(isset($_POST['btn-editar'])):
  
    $nome= mysqli_escape_string ($connect,$_POST['nome']);
    $sobrenome= mysqli_escape_string ($connect,$_POST['sobrenome']);
    $email= mysqli_escape_string ($connect,$_POST['email']);
    $idade= mysqli_escape_string ($connect,$_POST['idade']);

    $id = mysqli_escape_string($connect,$_POST['id']);
    
    $sql = "UPDATE clientes SET nome='$nome',sobrenome='$sobrenome',email='$email',idade= '$idade' WHERE id='$id'";
     if(mysqli_query($connect, $sql)):
        header('Location:home.php?sucesso');
    else:
        header('Location:home.php?erro');

    endif;
endif;


       

      
            
?>





