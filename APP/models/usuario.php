<?php
    class Usuario {
        private $nome;
        private $login;
        private $senha;
        private $email;

        private function __construct() {
            $nome = '';
            $login = '';
            $senha = '';
            $email = '';
        }

        public setNome($nome) {
            $this -> nome = $nome;
        }

        public setLogin($login) {
            $this -> login = $login;
        }

        public setSenha($senha) {
            $this -> senha = $senha;
        }

        public setEmail($email) {
            $this -> email = $email;
        }

        public function verificarCredenciais($login, $senha) {

        }

        private function bancoFake() {
            return array(
                [
                    'login' => 'maria.silva', 
                    'senha' => "123456",
                    'nome' => "Maria Silva",
                    'email' => "maria.silva@dominio.local",
                ],

                [
                    'login' => 'joao.costa', 
                    'senha' => "1548466",
                    'nome' => "João de Oliveira Costa",
                    'email' => "joao.costa@dominio.local",
                ],
            );
        }
    }
?>