<?php require_once 'conexao.php'; ?>
<?php
      function inserir($conecta, $cadastroo) {
        $sql = "INSERT INTO cadastro (nome, numcar, email, telefone, cpf, user, password)
                VALUES ('" . $cadastroo->nome . "', '" . $cadastroo->numcar . "', '" . $cadastroo->email . "', '" . $cadastroo->telefone . "', '" . $cadastroo->cpf . "', '" . $cadastroo->user . "', '" . $cadastroo->password . "')";
    
        $resultado = mysqli_query ($conecta, $sql); 
        return $resultado;  
      }
?>