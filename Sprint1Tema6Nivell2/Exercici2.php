<?php

/* - Exercici 2

Sobreescriu alguna de les lògiques d’entre tots els mètodes màgics que hi ha 
(que no sigui __construct) */

class Invoice {

public $clientName;
public $amount;

public function __construct($clientName, $amount) {

    $this->clientName = $clientName;
    $this->amount = $amount;

}

// Instead of using __clone() magic method

public function cloneInvoice() {

        $clonedInvoice = new Invoice ('x', 0);
        $clonedInvoice->clientName = $this->clientName;
        $clonedInvoice->amount = $this->amount;

        return $clonedInvoice;

}

}

$invoice = new Invoice ('Federico', 25);

$clone = $invoice->cloneInvoice();

var_dump ($invoice);
echo '<br>';
var_dump ($clone);

?>