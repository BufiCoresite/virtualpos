<?php

use Mews\Pos\Entity\Card\CreditCardGarantiPos;
use Mews\Pos\Gateways\AbstractGateway;

require '_config.php';

$orderId = date('Ymd').strtoupper(substr(uniqid(sha1(time())), 0, 4));
$amount = (float) 100;

$order = [
    'id'          => $orderId,
    'name'        => 'John Doe', // optional
    'email'       => 'mail@customer.com', // optional
    'user_id'     => '12', // optional
    'amount'      => $amount,
    'installment' => '0',
    'currency'    => 'TRY',
    'ip'          => $ip,
];

try {
    $pos->prepare($order, AbstractGateway::TX_PAY);
} catch (\Mews\Pos\Exceptions\UnsupportedTransactionTypeException $e) {
    dump($e->getCode(), $e->getMessage());
}

$card = new CreditCardGarantiPos('4282209027132016', '20', '05', '165');
$pos->payment($card);

dump($pos->getResponse());
