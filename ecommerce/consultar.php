<?php
include __DIR__ . '/vendor/autoload.php';

$pagarme = new PagarMe\Client('ak_test_3KaR7O4mBhMXCuX1iRbMqv1QQyIXSO');

$transacao = $pagarme->transactions()->get([
        'id' => '6337521'
]);

echo $transacao->status;
