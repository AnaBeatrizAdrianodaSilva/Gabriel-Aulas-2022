<?php
    // Criação de uma classe
    class Humano /* Criação de Uma Classe - Todo nome de Classe começa com letra maiuscula */ */ {
        public $cor_dos_olhos = ''; // public diz que essa informação pode ser usada dentro de uma classe
        private $altura = ''; // private diz que essa informaçõa só pode ser usada dentro da classe
        public function andar() { // o function serve para criar uma função
            echo 'O humano está correndo!';
        }
    }

    // Criação de um Objeto
    $pessoa01 = new Humano(); 
    $pessoa01 -> cor_dos_olhos = 'marron'; 
    $pessoa01 -> andar(); 
    echo "<br>";
    echo $pessoa01 -> cor_dos_olhos;

    $pessoa01 -> cor_dos_olhos - 'Roxo';
    
    // Sempre que um objeto quiser acessar uma classe é utilizado uma flechinha
?>