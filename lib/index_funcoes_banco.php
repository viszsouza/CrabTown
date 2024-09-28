<?php 
function selecionaUltimosTresArtigos($pdo) {
$query_arquivos = "SELECT id_artigo, subtitulo, caminho_imagem FROM artigos ORDER BY data_criacao DESC LIMIT 3 ";
$exec_query_arquivos = $pdo->prepare($query_arquivos);
$exec_query_arquivos->execute() or die('Erro ao selecionar os artigos mais recentes.');

return $exec_query_arquivos;
}