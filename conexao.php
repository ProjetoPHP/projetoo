<?php
$servidor="localhost";
$usuario="root";
$senha="";
$db="gerenciador";

$conexao=mysqli_connect("localhost", "root", "", "gerenciador");

if(!$conexao) {
    die("Houve um erro: " .mysqli_connect_erro());
}
?>
