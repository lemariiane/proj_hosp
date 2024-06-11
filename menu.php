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
            background-image: url('img/backambulancia.jpg');
            background-size: cover;
            overflow: hidden;
        }
        .menu {
            background-color: black;
            width: 200px; /* Largura fixa para o menu */
            height: 100vh; /* Altura total da viewport */
            display: flex;
            flex-direction: column;
            padding-top: 20px; /* Espaço no topo */
        }
        .menu a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px;
            text-decoration: none;
            margin: 4px 0; /* Espaço entre os links */
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
            color: red;
        }
        .signup-link {
            margin: 4px 0; /* Espaço entre os links */
        }
        .menu .user-info {
            color: white;
            padding: 14px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="menu">
    <div class="user-info">
        <?php echo 'Usuário - ' . usuariologado();?>
    </div>
    <div class="signup-link">
        <a href="novoCadastro.php">Novo Cadastro</a>
    </div>
    <div class="signup-link">
        <a href="novoNumcar.php">Novo cadastro de funcionários</a>
    </div>
    <a href="deslogar.php" id="sair">Desconectar</a>
</div>

</body>
</html>
