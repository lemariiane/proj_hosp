<?php require_once "ClassAluno.php";  ?>
<?php require_once "ClassAlunoDAO.php";  ?>
<?php


$ClassAlunoDAO = new ClassAlunoDAO();
$array=$ClassAlunoDAO->listarAluno();

echo "<center><h3>RESULTADO </h3></center>";
	echo "<center>";
    echo "<table border=2>";
    echo "  <tr>";
    echo "      <th>  Id     </th>";
    echo "      <th>  Nome   </th>";
	echo "      <th>  Email  </th>";
    echo "      <th>  CPF    </th>";
	echo "      <th>  Telefone</th>";
    echo "      <th>  Excluir</th>";
    echo "      <th>  Alterar</th>";
    echo "  </tr>";
	echo "</center>";
    foreach ($array as $array) {
        echo "<tr>";
        echo "<td>" . $array['id'] . "</td>";
        echo "<td>" . $array['nome'] . "</td>";
        echo "<td>" . $array['cpf'] . "</td>";
        echo "<td>" . $array['email'] . "</td>";
        echo "<td>" . $array['telefone'] . "</td>";
        echo "<td>";
    ?>
    <form action="excluirAluno.php" method="GET">
        <input type=hidden name=id
               value=<?php echo $array['id']; ?> >
               
        <button style='background:transparent; border:none; margin-left:8px; margin-top:12px; cursor:pointer;'>
            <img src="img/excluir.png" alt="excluir"
                 width='20px' height='20'>
         </button>    
    </form>
    <?php 
    echo "</td>";
    echo "<td>";
    ?>  
     <form action="alterarAluno.php" method="GET">
         <input type=hidden name=id
                value=<?php echo $array['id']; ?> >

         <input type=hidden name=nome
                value=<?php echo $array['nome']; ?> >

         <input type=hidden name=cpf
                value=<?php echo $array['cpf']; ?> >

         <input type=hidden name=email
                value=<?php echo $array['email']; ?> >
                
         <input type=hidden name=telefone
                value=<?php echo $array['telefone']; ?> >
         
        <button style='background:transparent; border:none; margin-left:8px; margin-top:12px; cursor:pointer;'>
            <img src="img/alterar.png" alt="alterar"
                 width='20px' height='20'>
         </button>    
    </form>
    <?php 
    echo "</td>";
    echo "</tr>";
}  
?>