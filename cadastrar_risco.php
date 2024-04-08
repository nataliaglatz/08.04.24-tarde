<?php
require_once('conexao.php'); //chama outro arquivo

$txtNomeRisco = $_POST['txtNomeRisco'];
$txtDescricaoRisco = $_POST['txtDescricaoRisco'];

$str_sql_cadastrar_risco = "INSERT INTO riscos (nome, descricao) VALUES ('$txtNomeRisco', '$txtDescricaoRisco')";

try {
    $cadastrar_risco = mysqli_query($conexao, $str_sql_cadastrar_risco);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idRisco'] = $ultimo_id;
    die('idRisco: ' . $_SESSION['idRisco']);
} catch (Exception) {
    die('Não foi possível cadastrar a linha de risco');
}
?>
