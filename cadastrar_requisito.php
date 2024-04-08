<?php
require_once('conexao.php'); //chama outro arquivo

$txtNomeRequisito = $_POST['txtNomeRequisito'];
$txtDescricaoRequisito = $_POST['txtDescricaoRequisito'];

$str_sql_cadastrar_requisito = "INSERT INTO requisitos (nome, descricao) VALUES ('$txtNomeRequisito', '$txtDescricaoRequisito')";

try {
    $cadastrar_requisito = mysqli_query($conexao, $str_sql_cadastrar_requisito);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idRequisito'] = $ultimo_id;
    die('idRequisito: ' . $_SESSION['idRequisito']);
} catch (Exception) {
    die('Não foi possível cadastrar a linha de requisito');
}
?>
