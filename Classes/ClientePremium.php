<?php

    class ClientePremium extends Cliente{
        
        private $premium;

        public function setPremium($_premium){
            $this->premium = $_premium;
        }

        public function getPremium(){
            return $this->premium;
        }

        public function setSconto($_premium){
            if($_premium){
                $this->sconto = 40;
            }
        }

    }



?>