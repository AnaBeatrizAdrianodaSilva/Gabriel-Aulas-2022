<?php

    require_once __DIR__ . './bancoDeDadosFake.php';

    class Usuario {

        /**
         * @var string
        **/


        private $nome;
        /**
         * @var string
        **/
        private $login;
        /**
         * @var string
        **/
        private $senha;
        /**
         * @var string
        **/
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

        public function getSenha() {
            return $this -> senha;
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
            return BancoDeDadosFake::$usuarioTable;
        }
    }

    // TESTE

    $usuario = new Usuario();

    if ($usuario -> verificarCredenciais('gabriel', 123))  {
        echo 'Credenciais válidas';
    } else {
        echo 'Credenciais inválidas';
    }

?>