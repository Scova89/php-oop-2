<?php
    require_once __DIR__ . '/Classes/Cliente.php';
    require_once __DIR__ . '/Classes/Prodotto.php';


    $cliente = new Cliente();
    $prodotto = new Prodotto();
    
    var_dump($cliente, $prodotto)

?>