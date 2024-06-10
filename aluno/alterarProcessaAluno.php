<?php require_once "ClassAluno.php";  ?>
<?php require_once "ClassAlunoDAO.php";  ?>
<?php
   
    $id = $_GET['id'];
    $nome = $_GET['nome'];
    $cpf = $_GET['cpf'];
    $email = $_GET['email'];
    $telefone = $_GET['telefone'];

        
    $ClassAlunoDAO = new ClassAlunoDAO();

    $novoAluno = new ClassAluno();
    $novoAluno -> setId($id);
    $novoAluno -> setNome($nome);
    $novoAluno -> setCpf($cpf);
    $novoAluno -> setEmail($email);
    $novoAluno -> setTelefone($telefone);  

    $array=$ClassAlunoDAO->alteraAluno($novoAluno);

    if($array==true) {
        header('Location:listarAluno.php');    
         } else {
        echo "Erro";
    }
    
?>                 