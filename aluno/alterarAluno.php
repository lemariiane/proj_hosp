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
    $novoAluno->setId($id);
    $novoAluno->setNome($nome);
    $novoAluno->setCpf($cpf);
    $novoAluno->setEmail($email);
    $novoAluno->setTelefone($telefone);
?>                 

    <body>
        <center>
            <form action="alterarProcessaAluno.php" method="GET">
                <h1>ALTERAR DADOS</h1>
                    Id: <br> <input type="text" name="id"readonly="true"
                    value=<?php echo $novoAluno->getId($id); ?> > <br>

                    Nome: <br> <input type="text" name="nome"
                    value=<?php echo $novoAluno->getNome($nome); ?> > <br>

                    CPF: <br> <input type="text" name="cpf"
                    value=<?php echo $novoAluno->getCpf($cpf); ?> > <br>

                    Email: <br> <input type="text" name="email"
                    value=<?php echo $novoAluno->getEmail($email); ?> > <br>
                    
                    Telefone: <br> <input type="text" name="telefone"
                    value=<?php echo $novoAluno->getTelefone($telefone); ?>> <br>
                    <br><br>

                    <button type="submit" class="btn btn-primary">ALTERAR</button>
            </form>
        </center>
    </body>