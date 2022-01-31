<?php
    class Prodotto{
        private $prezzo;
        private $quantita;
        private $descrizione;

        public function __construct($_prezzo, $_quantita, $_descrizione)
        {
            $this->prezzo = $_prezzo;
            $this->quantita = $_quantita;
            $this->descrizione = $_descrizione;
        }
    }


?>