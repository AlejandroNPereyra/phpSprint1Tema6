<?php

/* - Exercici 1
Crea una classe que contingui els mètodes getFile() i getDir() que torni el path sencer 
i el directori del fitxer utilitzant constants màgiques. */

class Invoice {

public $clientName;
public $amount;

public function __construct($clientName, $amount) {

    $this->clientName = $clientName;
    $this->amount = $amount;

}

public function getFile() {

    return __FILE__;

}

public function getDir() {

    return __DIR__;
    
}

}

$invoice = new Invoice ('Federico', 25);

$invoicePath = $invoice->getFile();
echo "Invoice path: " . $invoicePath . "<br>";

$invoiceDir = $invoice->getDir();
echo "Inovice Directory: " . $invoiceDir;

?>