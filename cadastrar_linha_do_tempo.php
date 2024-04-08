<?php
require_once('conexao.php'); //chama outro arquivo

$txtNomeLinhaTempo = $_POST['txtNomeLinhaTempo'];
$txtDescricaoLinhaTempo = $_POST['txtDescricaoLinhaTempo'];

$str_sql_cadastrar_linha_tempo = "INSERT INTO linhas_do_tempo (nome, descricao) VALUES ('$txtNomeLinhaTempo', '$txtDescricaoLinhaTempo')";

try {
    $cadastrar_linha_tempo = mysqli_query($conexao, $str_sql_cadastrar_linha_tempo);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idLinhaTempo'] = $ultimo_id;
    die('idLinhaTempo: ' . $_SESSION['idLinhaTempo']);
} catch (Exception) {
    die('Não foi possível cadastrar a linha de linha do tempo');
}
?>
