<?php require_once 'logica-usuario.php' ?>
<?php 
    if(usuarioEstaLogado()==null) {
        header ("Location:logininterno.php");
    } 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .menu {
            background-color: #333;
            overflow: hidden;
        }
        .menu a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .menu a:hover {
            background-color: #ddd;
            color: black;
        }
        .menu a.active {
            background-color: #4CAF50;
            color: white;
        }
        .menu a#sair {
            float: left;
            color: red;
        }
    </style>
</head>
<body>

<div class="menu">
    
    <a href="deslogar.php" id="sair">Sair</a>
</div>

<div style="padding-left:16px">
    <h2>Conteúdo</h2>
    <?php echo 'Você acessou como ' . usuariologado();?>

</div>

<div class="signup-link">
            <a href="novoCadastro.php">Novo Cadastro</a>
</div>

<div class="signup-link">
            <a href="novoNumcar.php">Novo Cadastro de funcionários</a>
</div>

</body>
</html>