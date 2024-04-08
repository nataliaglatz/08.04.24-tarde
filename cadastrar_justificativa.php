<?php
require_once('conexao.php'); //chama outro arquivo

$txtNomeJustificativa = $_POST['txtNomeJustificativa'];
$txtDescricaoJustificativa = $_POST['txtDescricaoJustificativa'];

$str_sql_cadastrar_justificativa = "INSERT INTO justificativas (nome, descricao) VALUES ('$txtNomeJustificativa', '$txtDescricaoJustificativa')";

try {
    $cadastrar_justificativa = mysqli_query($conexao, $str_sql_cadastrar_justificativa);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idJustificativa'] = $ultimo_id;
    die('idJustificativa: ' . $_SESSION['idJustificativa']);
} catch (Exception) {
    die('Não foi possível cadastrar a linha de justificativa');
}
?>
