.. _top:
.. title:: Site

`Back to index <index.rst>`_

====
Site
====

.. contents::
    :local:


Get Site
````````

.. code-block:: php
    
    $siteId = '{site_id}';
    $result = $client->site->get($siteId);


Update Site
```````````

.. code-block:: php
    
    $siteId = '{site_id}';
    $result = $client->site->update($siteId, [
        'name' => 'My site',
        'notification_url' => 'https://www.examplewebsite.com/payment-updates/',
        'price_from' => 0,
        'price_till' => 100000,
        'support_email' => 'support@mysite.com',
        'support_phone' => '+312012345678',
        'url' => 'https://www.examplewebsite.com'
    ]);


`Back to top <#top>`_