.. _top:
.. title:: Order

`Back to index <index.rst>`_

=====
Order
=====

.. contents::
    :local:


Get Order
`````````

.. code-block:: php
    
    $orderId = '{order_id}';
    $result = $client->order->get($orderId);


Create Order
````````````

.. code-block:: php
    
    $result = $client->order->create([
        'payment_options' => [
            'close_window' => false,
            'notification_method' => 'POST',
            'notification_url' => 'https://www.example.com/webhooks/payment',
            'redirect_url' => 'https://www.example.com/order/success',
            'cancel_url' => 'https://www.example.com/order/failed'
        ],
        'customer' => [
            'locale' => 'en_US',
            'disable_send_email' => false
        ],
        'checkout_options' => [
            'validate_cart' => false
        ],
        'days_active' => 30,
        'seconds_active' => 2592000,
        'type' => 'redirect',
        'order_id' => 'my-order-id-1',
        'currency' => 'EUR',
        'amount' => 37485,
        'description' => 'Test Order Description'
    ]);


Create GooglePay Payment
````````````````````````

.. code-block:: php
    
    $result = $client->order->create([
        'payment_options' => [
            'close_window' => false,
            'notification_method' => 'POST',
            'notification_url' => 'https://www.example.com/client/notification?type=notification',
            'redirect_url' => 'https://www.example.com/client/notification?type=redirect',
            'cancel_url' => 'https://www.example.com/client/notification?type=cancel'
        ],
        'customer' => [
            'locale' => 'en_US',
            'disable_send_email' => false
        ],
        'gateway_info' => [
            'payment_token' => '<google-pay-payment-token>'
        ],
        'checkout_options' => [
            'validate_cart' => false
        ],
        'days_active' => 30,
        'seconds_active' => 2592000,
        'type' => 'direct',
        'gateway' => 'GOOGLEPAY',
        'order_id' => 'my-order-id-1',
        'currency' => 'EUR',
        'amount' => 1495,
        'description' => 'Order Description'
    ]);


Update Order
````````````

.. code-block:: php
    
    $orderId = 'my-order-id-1';
    $result = $client->order->update($orderId, [
        'status' => 'cancelled',
        'exclude_order' => true
    ]);


Capture Payment
```````````````

.. code-block:: php
    
    $orderId = 'my-order-id-1';
    $result = $client->order->capture($orderId, [
        'new_order_id' => 'my-order-id-01',
        'new_order_status' => 'completed',
        'invoice_id' => '001',
        'tracktrace_code' => '',
        'carrier' => '',
        'reason' => '',
        'description' => ''
    ]);


`Back to top <#top>`_