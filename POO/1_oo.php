<?php
    // Criação de uma classe
    class Humano /* Criação de Uma Classe - Todo nome de Classe começa com letra maiúscula */ {
        private $cor_dos_olhos; // public diz que essa informação pode ser usada dentro e fora de uma classe
        private $altura; // private diz que essa informação só pode ser usada dentro da classe

            // método construtor
        public function __construct() {
            $this -> altura = 1.75;
            $this -> cor_dos_olhos = 'Rosa';
        }

        public function exibeCorDosOlhosEAltura() {
            echo 'Cor dos olhos: ' . $this -> cor_dos_olhos;
            echo '<br>Altura: ' . $this -> altura;
        }
        
        public function andar() { // o function serve para criar uma função
            $this -> altura = 1.75;
            echo 'O humano está correndo!';
        }
    }
    
    // Criação de um Objeto / Seção de Teste
    $pessoa01 = new Humano();
    $pessoa01 -> andar();
    echo '<br>';
    $pessoa01 -> exibeCorDosOlhosEAltura();
    
    // Sempre que um objeto quiser acessar uma classe é utilizado uma flechinha
?>