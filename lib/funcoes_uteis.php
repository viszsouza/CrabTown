<?php 
function dividirTextoComUltimaBandaCompleta($texto, $numeroBandas = 3) {
  preg_match_all('/[^.]*\.[^.]*\./', $texto, $frases);
  
  $bandas = [];
  
  $frasesPorBanda = 2;
  
  for ($i = 0; $i < $numeroBandas - 1; $i++) {
      $inicio = $i * $frasesPorBanda;
      $banda = implode(' ', array_slice($frases[0], $inicio, $frasesPorBanda));
      
      if (!empty($banda)) {
          $bandas[] = $banda;
      }
  }

  $resto = array_slice($frases[0], ($numeroBandas - 1) * $frasesPorBanda);
  $bandas[] = implode(' ', $resto);

  return $bandas;
}

function nomeCompleto($nome, $sobrenome = '') {
  if($sobrenome) {
    return "$nome $sobrenome";
  } else {
    return $nome;
  }
}