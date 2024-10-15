<?php
include_once('conexao.php');
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT) ;

$query = "insert into usuario (email, senha) values ('$email', '$senha')";

$result = mysqli_query($conexao, $query);



?>