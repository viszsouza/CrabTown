<?php

function selecionaArtigoPeloId($id, $pdo) {
  $query_artigo = "SELECT titulo, subtitulo, conteudo, caminho_imagem FROM artigos WHERE id_artigo = :id";
        
  $exec_query_artigo = $pdo->prepare($query_artigo);
  $exec_query_artigo->bindValue(":id", $id, PDO::PARAM_INT);

  $exec_query_artigo->execute() or die('Erro ao selecionar as informações do artigo.');

  return $exec_query_artigo;
}