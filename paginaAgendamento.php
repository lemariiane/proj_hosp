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
                <li class="nav-item"><a class="nav-link" href="paginaAgendamento.php"><strong>Agendamento de cirurgia</strong></a></li>
            </ul>
    
            <div class="nav-ham">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
</header>
<div class="parallax-image"></div>


<main class="container">
    <form action="#">
        <div class="form-group">
            
            <h1>Agendamento</h1><br><br>
            
        <div class="form-group">
            <input type="text" id="ficha" name="ficha" placeholder=" " required>
            <label for="ficha">Número da ficha:</label>
            <div class="message"></div>
        </div>
    
        <div class="form-group">
            <select id="departamento" name="departamento" required>
                <option value="">Selecione o Departamento</option>
                <option value="cirurgia_geral">Cirurgia Geral - Dra. Maria Eduarda</option>
                <option value="ortopedia">Ortopedia - Dr. Leandro</option>
                <option value="neurologia">Neurologia - Dr.Flavio</option>
                <option value="pediatria">Pediatria - Dra. Isabela</option>
            </select>
            <div class="message"></div>
            <br><br>
        </div>
        <div class="form-group">
            <input type="submit" value="Iniciar Agendamento" href="agendamento.php">
        </div>
    </form>
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