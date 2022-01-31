<?php
    class Cliente{
        private $nome;
        private $cognome;
        private $email;
        private $sconto = 0;

        public function __construct($_nome, $_cognome, $_email)
        {
            $this->nome = $_nome;
            $this->cognome = $_cognome;
            $this->email = $_email;

        }

        public function getNome(){
            return $this->nome;
        }

        public function getCognome(){
            return $this->cognome;
        }

        public function getEmail(){
            return $this->email;
        }
    }


?>