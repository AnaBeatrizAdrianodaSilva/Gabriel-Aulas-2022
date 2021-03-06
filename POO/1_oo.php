<?php
        // Criação de uma classe
    class Humano /* Criação de Uma Classe - Todo nome de Classe começa com letra maiúscula */ {
        private $cor_dos_olhos; // public diz que essa informação pode ser usada dentro e fora de uma classe
        private $altura; // private diz que essa informação só pode ser usada dentro da classe

            // método construtor 
        public function __construct($altura, $cor_dos_olhos) {
            $this -> altura = $altura;
            $this -> cor_dos_olhos = $cor_dos_olhos;
        } // O que estiver dentro desse método __construct irá ser padrão

        public function exibeCorDosOlhosEAltura() {
            echo 'Cor dos olhos: ' . $this -> cor_dos_olhos;
            echo '<br>Altura: ' . $this -> altura;
        }
        
        public function andar() { // o function serve para criar uma função
            echo 'O humano está correndo!';
        }
    }
    
        // Criação de um Objeto / Seção de Teste
    $pessoa01 = new Humano(1.60, 'Marrom');
    $pessoa01 -> andar();
    echo '<br>';
    $pessoa01 -> exibeCorDosOlhosEAltura();

    echo '<br>';
    echo '<br>';

    $pessoa02 = new Humano(5.0, 'Amarelo');
    $pessoa02 -> andar();
    echo '<br>';
    $pessoa02 -> exibeCorDosOlhosEAltura();
    
    // Sempre que um objeto quiser acessar uma classe é utilizado uma flechinha
?>