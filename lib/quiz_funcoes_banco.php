<?php

require_once "class_pergunta.php";

function selecionar_perguntas($pdo): array {
    $perguntas = buscar_perguntas($pdo);
    $ids_sorteados = sortear_perguntas($perguntas);
    $perguntas_selecionadas = [];

    for ($i = 0; $i < count($ids_sorteados); $i++) {
        $perguntas_selecionadas[] = new Pergunta(
            $perguntas[$ids_sorteados[$i]]["id_pergunta"],
            $perguntas[$ids_sorteados[$i]]["texto"],
            $perguntas[$ids_sorteados[$i]]["alternativa_1"],
            $perguntas[$ids_sorteados[$i]]["alternativa_2"],
            $perguntas[$ids_sorteados[$i]]["alternativa_3"],
            $perguntas[$ids_sorteados[$i]]["alternativa_4"],
            $perguntas[$ids_sorteados[$i]]["resposta"],
        );
    }

    return $perguntas_selecionadas;
}

function buscar_perguntas($pdo): array {
    $sql = "SELECT * FROM perguntas";
    $query_exec_perguntas = $pdo->prepare($sql);
    $query_exec_perguntas->execute() or die("Erro ao buscar as perguntas");

    return $query_exec_perguntas->fetchAll(PDO::FETCH_ASSOC);
}

function sortear_perguntas($perguntas): array {
    $total_de_perguntas = count($perguntas);
    $numeros_sorteados = [];
    $i = 0;
    $max = $total_de_perguntas < 10 ? $total_de_perguntas : 10;

    do {
        $novo_int = random_int(0, $total_de_perguntas - 1);
        
        if (!in_array($novo_int, $numeros_sorteados)) {
            $numeros_sorteados[] = $novo_int;
            $i++;
        }
    } while ($i < $max);

    return $numeros_sorteados;
}
