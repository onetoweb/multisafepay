.. _top:
.. title:: Refund

`Back to index <index.rst>`_

======
Refund
======

.. contents::
    :local:


Create Refund
`````````````

.. code-block:: php
    
    $orderId = 'refund-order-id-1234';
    $result = $client->refund->create($orderId, [
        'currency' => 'EUR',
        'amount' => 500,
        'description' => '',
        'refund_order_id' => 'refund-order-id-1234',
        'var1' => 'test-string1',
        'var2' => 'test-string2',
        'var3' => 'test-string3'
    ]);


`Back to top <#top>`_