<?php require_once 'banco-cadastrar.php'; ?>
<?php require_once 'conexao.php'; ?>
<?php require_once 'cadastrar.php'; ?>
<?php


$cadastroo = new Cadastrar();
$cadastroo -> nome = $_GET ['nome'];
$cadastroo -> numcar = $_GET['numcar'];
$cadastroo -> email = $_GET['email'];
$cadastroo -> telefone = $_GET['telefone'];
$cadastroo -> cpf = $_GET['cpf'];
$cadastroo -> user = $_GET['user'];
$cadastroo -> password = $_GET['password'];


if (inserir($conecta, $cadastroo)) {
    echo "Adicionado com sucesso";
} else {
    echo mysqli_error($conecta);
    
}
?>