<?php
require_once('conexao.php'); //chama outro arquivo

$txtNomeObjetivoSmart = $_POST['txtNomeObjetivoSmart'];
$txtDescricaoObjetivoSmart = $_POST['txtDescricaoObjetivoSmart'];

$str_sql_cadastrar_objetivo_smart = "INSERT INTO objetivos_smart (nome, descricao) VALUES ('$txtNomeObjetivoSmart', '$txtDescricaoObjetivoSmart')";

try {
    $cadastrar_objetivo_smart = mysqli_query($conexao, $str_sql_cadastrar_objetivo_smart);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idObjetivoSmart'] = $ultimo_id;
    die('idObjetivoSmart: ' . $_SESSION['idObjetivoSmart']);
} catch (Exception) {
    die('Não foi possível cadastrar a linha de objetivos smart');
}
?>
