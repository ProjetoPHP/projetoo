<?php
    include("conexao.php");

    $tarefa=$_POST['tarefa'];
    $data=$_POST['data'];
    $hora=$_POST['hora'];

    $sql="INSERT INTO tarefasadicionada (tarefa, data, hora)
    VALUES ('$tarefa', '$data', '$hora')";
    if(mysqli_query($conexao, $sql)) {
        echo "Tarefa adiconada com sucesso!<br>";
        echo "<a href='adicionarTarefa.php'>Adicionar nova tarefa?</a><br>";
        echo "<a href='index.php'>Voltar para a página principal.</a><br>";
    }    else {
        echo "Error: " .$sql. "<br>".mysqli_error($conexao);
    }
    mysqli_close($conexao);
    ?>
