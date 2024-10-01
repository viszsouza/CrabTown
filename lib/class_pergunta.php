<?php 

class Pergunta {
    private $id_pergunta;
    private $texto;
    private $alternativa_1;
    private $alternativa_2;
    private $alternativa_3;
    private $alternativa_4;
    private $resposta;

    function __construct($id_pergunta, $texto, $alternativa_1, $alternativa_2, $alternativa_3, $alternativa_4, $resposta) {
        $this->id_pergunta = $id_pergunta;
        $this->texto = $texto;
        $this->alternativa_1 = $alternativa_1;
        $this->alternativa_2 = $alternativa_2;
        $this->alternativa_3 = $alternativa_3;
        $this->alternativa_4 = $alternativa_4;
        $this->resposta = $resposta;
    }

    public function get_id_pergunta(): int {
        return $this->id_pergunta;
    }

    public function get_texto(): string {
        return $this->texto;
    }

    public function get_alternativa_1(): string {
        return $this->alternativa_1;
    }

    public function get_alternativa_2(): string {
        return $this->alternativa_2;
    }

    public function get_alternativa_3(): string {
        return $this->alternativa_3;
    }

    public function get_alternativa_4(): string {
        return $this->alternativa_4;
    }

    public function get_resposta(): int {
        return $this->resposta;
    }
}