<?php

// Conexão
require_once 'db_connect.php';

// Sessão
session_start();
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect,$_GET['id']);

    $sql = "DELETE FROM clientes  WHERE id='$id'";
   

   

    if(mysqli_query($connect, $sql)):
        header('Location:home.php');
    else:
        header('Location:home.php');
    endif;
endif;






?>