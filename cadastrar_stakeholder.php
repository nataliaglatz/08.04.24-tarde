<?php
require_once('conexao.php'); //chama outro arquivo

$txtNomeStakeholder = $_POST['txtNomeStakeholder'];
$txtDescricaoStakeholder = $_POST['txtDescricaoStakeholder'];

$str_sql_cadastrar_stakeholder = "INSERT INTO stakeholders (nome, descricao) VALUES ('$txtNomeStakeholder', '$txtDescricaoStakeholder')";

try {
    $cadastrar_stakeholder = mysqli_query($conexao, $str_sql_cadastrar_stakeholder);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idStakeholder'] = $ultimo_id;
    die('idStakeholder: ' . $_SESSION['idStakeholder']);
} catch (Exception) {
    die('Não foi possível cadastrar a linha de stakeholder');
}
?>
