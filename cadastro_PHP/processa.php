<?php
session_start();
include_once("conexao.php");


$nome=filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING );
$email=filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL );
//echo "nome: $nome <br>";
//echo "email: $email <br>";

$result_usuario="INSERT INTO usuarios (nome, email, created) VALUES ('$nome', '$email', NOW())";
$resultado_usuario=mysqli_query($conn, $result_usuario) ;
if(mysqli_insert_id($conn)){
header("Location: corpo.php");
$_SESSION['msg']="<p style ='color:green;'>Usuário cadastrado com sucesso</p>";
}else{
    header("Location: corpo.php");
$_SESSION['msg']="<p style ='color:red;'>Erro ao cadastrar usuário</p>";


}