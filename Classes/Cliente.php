<?php
    class Cliente{
        private $nome;
        private $cognome;
        private $email;

        public function __construct($_nome, $_cognome, $_email)
        {
            $this->nome = $_nome;
            $this->cognome = $_cognome;
            $this->email = $_email;

        }
    }


?>