.. _top:
.. title:: Token

`Back to index <index.rst>`_

=====
Token
=====

.. contents::
    :local:


List Tokens
```````````

.. code-block:: php
    
    $customerReference = '{customer_reference}';
    $result = $client->token->list($customerReference);


Get Token
`````````

.. code-block:: php
    
    $customerReference = '{customer_reference}';
    $token = '{token}';
    $result = $client->token->get($customerReference, $token);


Update Token
````````````

.. code-block:: php
    
    $customerReference = '{customer_reference}';
    $token = '{token}';
    $result = $client->token->update($customerReference, $token, [
        'expiry_date' => 2512
    ]);


Delete Token
````````````

.. code-block:: php
    
    $customerReference = '{customer_reference}';
    $token = '{token}';
    $result = $client->token->delete($customerReference, $token);


`Back to top <#top>`_