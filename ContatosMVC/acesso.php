<?php
include_once('conexao.php');
$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "SELECT * FROM usuario WHERE email = '$email'";

$result = mysqli_query($conexao, $query);

if ($result) {
$row = $result->fetch_assoc();
if (!$row) {
    echo 'Usuário ou Senha inválida';
} else 
{
    if (password_verify($senha, $row['senha'])) {
        $_SESSION['Logado'] = true;
        header('Location: list_contacts.php');
    } else{
        echo 'Login inválido';
    }
}
}
?>