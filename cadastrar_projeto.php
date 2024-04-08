<?php
require_once('conexao.php'); //chama outro arquivo

$txtNomeProjeto = $_POST['txtNomeProjeto'];
$txtDescricaoProjeto = $_POST['txtDescricaoProjeto'];

$str_sql_cadastrar_projeto = "INSERT INTO projetos (nome, descricao) VALUES ('$txtNomeProjeto', '$txtDescricaoProjeto')";

try {
    $cadastrar_projeto = mysqli_query($conexao, $str_sql_cadastrar_projeto);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idProjeto'] = $ultimo_id;
    die('idProjeto: ' . $_SESSION['idProjeto']);
} catch (Exception) {
    die('Não foi possível cadastrar a linha de projeto');
}
?>
