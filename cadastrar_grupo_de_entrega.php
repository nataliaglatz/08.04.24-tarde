<?php
require_once('conexao.php'); //chama outro arquivo

$txtNomeGrupo = $_POST['txtNomeGrupo'];
$txtDescricaoGrupo = $_POST['txtDescricaoGrupo'];

$str_sql_cadastrar_grupo = "INSERT INTO grupos_de_entrega (nome, descricao) VALUES ('$txtNomeGrupo', '$txtDescricaoGrupo')";

try {
    $cadastrar_grupo = mysqli_query($conexao, $str_sql_cadastrar_grupo);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idGrupo'] = $ultimo_id;
    die('idGrupo: ' . $_SESSION['idGrupo']);
} catch (Exception) {
    die('Não foi possível cadastrar a linha de grupo de entrega');
}
?>
