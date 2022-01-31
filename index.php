<?php
    require_once __DIR__ . '/Classes/Cliente.php';
    require_once __DIR__ . '/Classes/ClientePremium.php';
    require_once __DIR__ . '/Classes/Prodotto.php';


    $cliente = new Cliente("a", "a", "a");
    $prodotto = new Prodotto("a", "a", "a");
    
    var_dump($cliente, $prodotto);

    $clientePremium = new ClientePremium("a", "a", "a");

    var_dump($clientePremium);

?>