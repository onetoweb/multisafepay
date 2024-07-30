.. _top:
.. title:: Payment Method

`Back to index <index.rst>`_

==============
Payment Method
==============

.. contents::
    :local:


List Payment Methods
````````````````````

.. code-block:: php
    
    $result = $client->paymentMethod->list();


Get Payment Method
``````````````````

.. code-block:: php
    
    $gateway = 'GOOGLEPAY';
    $result = $client->paymentMethod->get($gateway);


`Back to top <#top>`_