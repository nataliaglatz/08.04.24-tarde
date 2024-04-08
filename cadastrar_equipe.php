<?php
require_once('conexao.php'); //chama outro arquivo

$txtNomeEquipe = $_POST['txtNomeEquipe'];
$txtDescricaoEquipe = $_POST['txtDescricaoEquipe'];

$str_sql_cadastrar_equipe = "INSERT INTO equipes (nome, descricao) VALUES ('$txtNomeEquipe', '$txtDescricaoEquipe')";

try {
    $cadastrar_equipe = mysqli_query($conexao, $str_sql_cadastrar_equipe);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idEquipe'] = $ultimo_id;
    die('idEquipe: ' . $_SESSION['idEquipe']);
} catch (Exception) {
    die('Não foi possível cadastrar a linha de equipe');
}
?>
