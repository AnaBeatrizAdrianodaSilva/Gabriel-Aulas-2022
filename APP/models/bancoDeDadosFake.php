<?php
    class BancoDeDadosFake {
        public static $usuarioTable = [];

        public static function addUsuario($nome, $login, $email, $senha) {
            static::$usuarioTable[] = [
                'nome' => $nome,
                'login' => $login,
                'email' => $email,
                'senha' => $senha,
            ];
        }

        public static function inicializaUsuario() {
            static::$usuarioTable = array(
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
?>