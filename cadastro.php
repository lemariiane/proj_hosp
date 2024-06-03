<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <style>
body{
     display: flex;
     align-items: center;
     justify-content: center;
     min-height: 100vh;
     background: url('img/background.jpg') no-repeat;
     background-size:2000px;
}

.form{
    background-color: rgba(255, 255, 255, 0.356);
    justify-content: center;
    padding: 65px;
    border-radius: 10px;
    width: 500px;
    height: 540px;
    margin:auto;
    box-shadow: 5px 5px 10px rgba(0, 24, 26, 0.295);
}

.img {
    margin-left:100px;
}

.h3{
    text-align: center;
    color: #978f56;
}

.box input{
    text-align: center;
    width: 100%; 
    height: 45%;
    background: transparent; 
    border: #fff; 
    outline: invert; 
    border: 3px solid rgba(255, 255, 255, 0.877); 
    border-radius: 100px;
}

.btn-dark {
    width: 100%;
    height: 45px;
    border: none;
    outline: none;
    border-radius: 40px;
    cursor: pointer;
    color: #494848cc;
    background-color: #fcfcfcee;
    border-color: #fafafa;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.205);
    text-align: center;
    font-size: 14px;
  }
    </style>
</head>
<body>

    <div class="form">
        <form method="get" action="Cadastrando.php">
            <div class="box">
            
                <h3>Preencha os dados abaixo</h3>
                <input type="text" name="nome" placeholder="Nome Completo" required><box-icon name="nome" ></box-icon><br>
                <input type="text" name="numcar" placeholder="Número da carteira" required><box-icon name="nuncar" ></box-icon><br>    
                <input type="email" name="email" placeholder="Email" required><box-icon name="email" ></box-icon><br>    
                <input type="tel" name="telefone" maxlength="11" placeholder="Telefone" required><box-icon name="telefone" ></box-icon><br>    
                <input oninput="mascara(this)" type="text" name="cpf" maxlength="11" placeholder="Cpf" required><box-icon name="cpf" ></box-icon><br>
                <input type="text" name="user" placeholder="Nome do usuário" required><box-icon name="user" ></box-icon><br>
            </div>

            <div class="box">
                    <input type="password" name="password" placeholder="Senha" required>
                        <br><br><br>
            </div>
            <button type="submit" class="btn btn-dark"><strong>Cadastrar</strong></button><br><br><br><br>
        </form>

    <script>
    function mascara(i){
   
        var v = i.value;
        
        if(isNaN(v[v.length-1])){ 
           i.value = v.substring(0, v.length-1);
           return;
        }
        
        i.setAttribute("maxlength", "14");
        if (v.length == 3 || v.length == 7) i.value += ".";
        if (v.length == 11) i.value += "-";

     }
    </script>
</body>
</html>