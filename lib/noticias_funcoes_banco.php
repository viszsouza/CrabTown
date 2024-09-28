<?php
function selecionaUltimosTresArtigos($pdo) {
  $query_artigos = "SELECT id_artigo, titulo FROM artigos ORDER BY data_criacao DESC LIMIT 3 ";
  $exec_query_artigos = $pdo->prepare($query_artigos);
  $exec_query_artigos->execute() or die('Erro ao selecionar os artigos mais recentes.');

  return $exec_query_artigos;
}