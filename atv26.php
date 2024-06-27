<?php

    class Usuario{

        public $nome;
        protected $cpf;
        private $endereco;

        function Usuario(){
            $this -> preparaUsuario();
        }

        private function preparaUsuario(){
            $this ->nome = "Leonardo";
            $this ->cpf = "9999999999";
            $this ->endereco = "Rua Fulano de Tal número 0";
        }

        public function getCpf () {
            return $this -> cpf;
        }

        public function getNome() {
            return $this -> nome;
        }

        function getEndereco() {
            return $this -> endereco; 
        }
    }

    $usu = new Usuario();

    $usu -> getCpf();

    $usu -> getNome();
?>
