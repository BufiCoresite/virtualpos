<?php

require '_config.php';

$templateTitle = 'Cancel Order';

require '../../template/_header.php';

// Cancel Order
$cancel = $pos->bank->cancel([
    'order_id'  => '201811133F3F',
]);

/*
// faster params...
$cancel = $pos->bank->cancel([
    'order_id'      => '201810295863',
    'host_ref_num'  => '018711539490000181',
    'auth_code'     => '115394',
]);
*/

$response = $cancel->getResponse();
?>

<div class="result">
    <h3 class="text-center text-<?php echo $pos->isSuccess() ? 'success' : 'danger'; ?>">
        <?php echo $pos->isSuccess() ? 'Cancel Order is successful!' : 'Cancel Order is not successful!'; ?>
    </h3>
    <dl class="row">
        <dt class="col-sm-12">All Data Dump:</dt>
        <dd class="col-sm-12">
            <pre><?php dump($response); ?></pre>
        </dd>
    </dl>
    <hr>
    <div class="text-right">
        <a href="index.php" class="btn btn-lg btn-info">&lt; Click to payment form</a>
    </div>
</div>

<?php require '../../template/_footer.php'; ?>
