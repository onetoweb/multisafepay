.. _top:
.. title:: Transaction

`Back to index <index.rst>`_

===========
Transaction
===========

.. contents::
    :local:


List Transactions
`````````````````

.. code-block:: php
    
    $result = $client->transaction->list();


Get Transaction
```````````````

.. code-block:: php
    
    $transactionId = '{transaction_id}';
    $result = $client->transaction->get($transactionId);


`Back to top <#top>`_