.. _top:
.. title:: Pay After Delivery

`Back to index <index.rst>`_

==================
Pay After Delivery
==================

.. contents::
    :local:


Put Pay After Delivery Order On hold
````````````````````````````````````

.. code-block:: php
    
    $orderId = 'my-order-id-1';
    $result = $client->payAfterDelivery->onhold($orderId, [
        'duration' => 1209600
    ]);


Extend Order Autoexpire
```````````````````````

.. code-block:: php
    
    $orderId = 'my-order-id-1';
    $result = $client->payAfterDelivery->extendAutoExpire($orderId, [
        'days' => 45
    ]);


`Back to top <#top>`_