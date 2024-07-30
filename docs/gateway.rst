.. _top:
.. title:: Gateway

`Back to index <index.rst>`_

=======
Gateway
=======

.. contents::
    :local:


List Gateways
`````````````

.. code-block:: php
    
    $result = $client->gateway->list();


Get Gateway
```````````

.. code-block:: php
    
    $gateway = 'GOOGLEPAY';
    $result = $client->gateway->get($gateway);


`Back to top <#top>`_