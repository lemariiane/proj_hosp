<?php require_once "conexao.php";  ?>
<?php
    class ClassCadastro_pacienteDAO {
        public function cadastrarCadastro_paciente($novoCadastro_paciente) {
         try {
            $pdo = Conexao::getInstance();
            $sql = "insert into cadastro_paciente(nomepac,cpfpac,datanasc,telefonepac,telefonepac2,cep,estadopac,cidadepac,
            bairropac,ruapac,numeropac,pagamento,ficha)
                    values (?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $novoCadastro_paciente->getNomepac());
            $stmt->bindValue(2, $novoCadastro_paciente->getCpfpac());
            $stmt->bindValue(3, $novoCadastro_paciente->getDatanasc());
            $stmt->bindValue(4, $novoCadastro_paciente->getTelefonepac());
            $stmt->bindValue(5, $novoCadastro_paciente->getTelefonepac2());
            $stmt->bindValue(6, $novoCadastro_paciente->getCep());
            $stmt->bindValue(7, $novoCadastro_paciente->getEstadopac());
            $stmt->bindValue(8, $novoCadastro_paciente->getCidadepac());
            $stmt->bindValue(9, $novoCadastro_paciente->getBairropac());
            $stmt->bindValue(10, $novoCadastro_paciente->getRuapac());
            $stmt->bindValue(11, $novoCadastro_paciente->getNumeropac());
            $stmt->bindValue(12, $novoCadastro_paciente->getPagamento());
            $stmt->bindValue(13, $novoCadastro_paciente->getFicha());

            $stmt->execute();
            
            echo "<center><h1>Cadastro realizado com sucesso!</h1><center><br>";
            
        } catch (PDOException $erro) {
                echo $erro->getMessage();
        }
    }
    
}