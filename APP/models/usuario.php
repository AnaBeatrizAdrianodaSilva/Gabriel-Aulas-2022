<?php
    class Usuario {
        private $nome;
        private $login;
        private $senha;
        private $email;

        public function __construct() {
            $this -> nome = '';
            $this -> login = '';
            $this -> senha = '';
            $this -> email = '';
        }

        public function setNome($nome) {
            $this -> nome = $nome;
        }

        public function setLogin($login) {
            $this -> login = $login;
        }

        public function setSenha($senha) {
            $this -> senha = $senha;
        }

        public function setEmail($email) {
            $this -> email = $email;
        }

        public function getNome() {
            return $this -> nome;
        }

        public function getLogin() {
            return $this -> login;
        }

        // Não precisa fazer com a senha

        public function getEmail() {
            return $this -> email;
        }


        public function verificarCredenciais($login, $senha) {
            foreach($this -> bancoFake() as $usuario) {
                if ($usuario['login'] == $login && $usuario['senha'] == $senha) {
                    return true;
                }
            }
            return false;
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

                // Usuário criado para os testes

                [
                    'login' => 'gabriel',
                    'senha' => '123',
                    'nome' => 'Gabriel',
                    'email' => 'gabriel@gmail.com',
                ],
            );
        }
    }

    // TESTE

    $usuario = new Usuario();

    if ($usuario -> verificarCredenciais('gabriel', 123))  {
        echo 'Usuário existe no banco';
    } else {
        echo 'Usuário não exite no banco';
    }

?>