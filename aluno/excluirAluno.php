<?php require_once "ClassAluno.php";  ?>
<?php require_once "ClassAlunoDAO.php";  ?>
<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        
    $novoAluno = new ClassAluno();
    $novoAluno->setId($id); 

    $ClassAlunoDAO = new ClassAlunoDAO();
    $array=$ClassAlunoDAO->excluirAluno($novoAluno);

    if($array==true) {
        header('Location:listarAluno.php');    
    }
    }



?>