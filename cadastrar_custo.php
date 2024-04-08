<?php
require_once('conexao.php'); //chama outro arquivo

$txtNomeBeneficio = $_POST['txtNomeBeneficio'];
$txtDescricaoBeneficio = $_POST['txtDescricaoBeneficio'];

$str_sql_cadastrar_beneficio = "INSERT INTO beneficios (nome, descricao) VALUES ('$txtNomeBeneficio', '$txtDescricaoBeneficio')";

try {
    $cadastrar_beneficio = mysqli_query($conexao, $str_sql_cadastrar_beneficio);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idBeneficio'] = $ultimo_id;
    die('idBeneficio: ' . $_SESSION['idBeneficio']);
} catch (Exception) {
    die('Não foi possível cadastrar a linha de benefício');
}
?>
