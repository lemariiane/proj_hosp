<?php require_once "ClassAluno.php";  ?>
<?php require_once "ClassAlunoDAO.php";  ?>
<?php
    $nome = $_POST['nome'];  
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $novoAluno = new ClassAluno();
    $novoAluno->setNome($nome);
    $novoAluno->setCpf($cpf);
    $novoAluno->setEmail($email);
    $novoAluno->setTelefone($telefone);
    
    $ClassAlunoDAO = new ClassAlunoDAO();
    $ClassAlunoDAO->cadastrarAluno($novoAluno);

?>