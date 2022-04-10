<?php

use Mews\Pos\Factory\AccountFactory;

require '../_payment_config.php';

$baseUrl = $bankTestsUrl.'/3d/';

$account = AccountFactory::createGarantiPosAccount(
    'garanti',
    '7000679',
    'PROVAUT',
    '123qweASD/',
    '30691298',
    \Mews\Pos\Gateways\AbstractGateway::MODEL_3D_SECURE,
    '12345678'
);

$pos = getGateway($account);

$transaction = \Mews\Pos\Gateways\AbstractGateway::TX_PAY;

$templateTitle = '3D Model Payment';
