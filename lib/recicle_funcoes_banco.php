<?php
function seleciona_informacoes_videos($pdo, $id_categoria) {
  $query_seleciona_informacoes = "SELECT caminho_imagem, titulo, nome_criador FROM videos_reciclaveis vr
  JOIN categorias_reciclaveis cr
  ON vr.id_categoria_reciclavel = cr.id_categoria_reciclavel
  WHERE cr.id_categoria_reciclavel = :id";

  $exec_seleciona_informacoes = $pdo->prepare($query_seleciona_informacoes);
  $exec_seleciona_informacoes->bindValue(":id", $id_categoria, PDO::PARAM_INT);

  $exec_seleciona_informacoes->execute() or die("Erro ao selecionar os vídeos.");

  return $exec_seleciona_informacoes;
}