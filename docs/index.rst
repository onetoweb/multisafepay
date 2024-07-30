.. title:: Index

===========
Basic Usage
===========

Setup
        
.. code-block:: php
    
    require 'vendor/autoload.php';
    
    use Onetoweb\MultiSafepay\Client;
    
    // param
    $apiKey = 'api_key';
    $testModus = true;
    
    // setup client
    $client = new Client($apiKey, $testModus);


========
Examples
========

Payment
```````

* `Gateway <gateway.rst>`_
* `Payment Method <payment_method.rst>`_
* `Issuer <issuer.rst>`_
* `Order <order.rst>`_
* `Pay After Delivery <pay_after_delivery.rst>`_

Token
`````

* `Token <token.rst>`_

Refund
``````

* `Refund <refund.rst>`_

Reconciliation
``````````````

* `Transaction <transaction.rst>`_

Account
```````

* `Closing Balance <closing_balance.rst>`_
* `Site <site.rst>`_
