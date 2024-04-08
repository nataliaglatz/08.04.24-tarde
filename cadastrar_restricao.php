<?php
require_once('conexao.php'); //chama outro arquivo

$txtNomeRestricao = $_POST['txtNomeRestricao'];
$txtDescricaoRestricao = $_POST['txtDescricaoRestricao'];

$str_sql_cadastrar_restricao = "INSERT INTO restricoes (nome, descricao) VALUES ('$txtNomeRestricao', '$txtDescricaoRestricao')";

try {
    $cadastrar_restricao = mysqli_query($conexao, $str_sql_cadastrar_restricao);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idRestricao'] = $ultimo_id;
    die('idRestricao: ' . $_SESSION['idRestricao']);
} catch (Exception) {
    die('Não foi possível cadastrar a linha de restricao');
}
?>
