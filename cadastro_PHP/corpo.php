<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>CRUD - CADASTRAR</title>
</head>
<body>
    <h1>CADASTRO DE USUÁRIO</h1>
    <?php
if(isset($_SESSION['msg']));
echo $_SESSION['msg'];
unset($_SESSION['msg']);
?>
    <form method="POST" action="processa.php">
    <label >Nome:</label>
    <input type="text" name="nome" placeeholder="Digite o nome"><br><br>
    <label >email:</label>
    <input type="email" name="email" placeeholder="Digite o seu melhor email"><br><br>
<input type="submit" value="CADASTRAR">
</form>
</body>
</html>