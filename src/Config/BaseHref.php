<?php

namespace Onetoweb\MultiSafepay\Config;

enum BaseHref: string
{
    case TEST = 'https://testapi.multisafepay.com/v1/json';
    case LIVE = 'https://api.multisafepay.com/v1/json';
}
