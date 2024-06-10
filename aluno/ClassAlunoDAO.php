<?php require_once "Conexao.php";  ?>
<?php
    class ClassAlunoDAO {
        public function cadastrarAluno($novoAluno) {
         try {
            $pdo = Conexao::getInstance();
            $sql = "insert into alunos(nome,cpf,email,telefone)
                    values (?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $novoAluno->getNome());
            $stmt->bindValue(3, $novoAluno->getCpf());
            $stmt->bindValue(2, $novoAluno->getEmail());
            $stmt->bindValue(4, $novoAluno->getTelefone());
            $stmt->execute();
            
            echo "<center><h1>Cadastro realizado com sucesso!</h1><center><br>";
            echo "<a href='listarAluno.php'>Listar</a>";
            
        } catch (PDOException $erro) {
                echo $erro->getMessage();
        }
    }
    public function listarAluno() {
        try {
            $pdo = Conexao::getInstance();
            $sql = "SELECT * FROM alunos";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchALL();

        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }

    }

    public function excluirAluno($novoAluno) {
        try {
            $pdo = Conexao::getInstance();
            $sql = "delete from alunos
                    where id =:id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':id', $novoAluno->getId());
            $stmt->execute();
            return true;
            

        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }

    public function alteraAluno($novoAluno) {
        try {
            $pdo = Conexao::getInstance();
            $sql = "update alunos 
                    set nome =:nome, cpf =:cpf, email =:email, telefone =:telefone
                    where id =:id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':nome', $novoAluno->getNome());
            $stmt->bindValue(':cpf', $novoAluno->getCpf());
            $stmt->bindValue(':email', $novoAluno->getEmail());
            $stmt->bindValue(':telefone', $novoAluno->getTelefone());
            $stmt->bindValue(':id', $novoAluno->getId());
            $stmt->execute();
            return true;
            

        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }
}               