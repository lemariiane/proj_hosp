<?php require_once "conexao.php";  ?>
<?php
class ClassCadastro_pacienteDAO {
    public function cadastrarCadastro_paciente($novoCadastro_paciente) {
        try {
            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO cadastro_paciente(nomepac, cpfpac, datanasc, telefonepac, telefonepac2, cep, estadopac, cidadepac,
            bairropac, ruapac, numeropac, pagamento, ficha)
                    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
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
            
            // Pega o ID do último registro inserido
            $fichaId = $pdo->lastInsertId();
            
            echo '<main><div class="success-message"><center><h3>Cadastro realizado com sucesso!<br> Número da Ficha: ' . $fichaId . '</h3></center></div></main>';
            
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }

    public function listarCadastro_paciente() {
        try {
            $pdo = Conexao::getInstance();
            $sql = "SELECT * FROM cadastro_paciente";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchALL();

        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }

    }

    public function alteraCadastro_paciente($novoCadastro_paciente) {
        try {
            $pdo = Conexao::getInstance();
            $sql = "UPDATE cadastro_paciente 
                    SET nomepac =:nomepac, cpfpac =:cpfpac, datanasc =:datanasc, telefonepa c=:telefonepac,
                    telefonepac2 =:telefonepac2, cep =:cep, estadopac =:estadopac, cidadepac =:cidadepac,
                    bairropac =:bairropac, ruapac =:ruapac, numeropac =:numeropac, pagamento =:pagamento
                    WHERE ficha =:ficha";
            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(':nomepac', $novoCadastro_paciente->getNomepac());
            $stmt->bindValue(':cpfpac', $novoCadastro_paciente->getCpfpac());
            $stmt->bindValue(':datanasc', $novoCadastro_paciente->getDatanasc());
            $stmt->bindValue(':telefonepac', $novoCadastro_paciente->getTelefonepac());
            $stmt->bindValue(':telefonepac2', $novoCadastro_paciente->getTelefonepac2());
            $stmt->bindValue(':cep', $novoCadastro_paciente->getCep());
            $stmt->bindValue(':estadopac', $novoCadastro_paciente->getEstadopac());
            $stmt->bindValue(':cidadepac', $novoCadastro_paciente->getCidadepac());
            $stmt->bindValue(':bairropac', $novoCadastro_paciente->getBairropac());
            $stmt->bindValue(':ruapac', $novoCadastro_paciente->getRuapac());
            $stmt->bindValue(':numeropac', $novoCadastro_paciente->getNumeropac());
            $stmt->bindValue(':pagamento', $novoCadastro_paciente->getPagamento());
            $stmt->bindValue(':ficha', $novoCadastro_paciente->getFicha());

            $stmt->execute();
            return true;
            

        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }
}



?> 

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Agendamento</title>
    <link rel="stylesheet" href="nav.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>

<header>
        <nav class="navbar">
            <strong><p class="logo">Grupo União</p></strong>
            
            <ul class="nav-menu">
                <li class="nav-item"><a class="nav-link" href="index.php"><strong>Menu</strong></a></li>
                <li class="nav-item"><a class="nav-link" href="cadastro_paciente.php"><strong>Cadastrar paciente</strong></a></li>
                <li class="nav-item"><a class="nav-link" href="agendamento.php"><strong>Agendamento de cirurgia</strong></a></li>
            </ul>
    
            <div class="nav-ham">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
</header>

<main>

</main>

<script>
    const ham = document.querySelector(".nav-ham");
    const navMenu= document.querySelector(".nav-menu");

    ham.addEventListener("click", ()=> {
        ham.classList.toggle('active');
        navMenu.classList.toggle('active');
    })
</script>
</body>
</html>
