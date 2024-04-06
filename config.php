<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51Ow13BSC18jZ1AImX2RkqgUrl40nZiKmHCWiGprtuwRzuVUfsriJILwrv4EVML7nvEE0GXZQyjbgrAQSiuWl5rwl00sicXj33u";

$secretKey="sk_test_51Ow13BSC18jZ1AImgScPfWrYgd6iDpbrDpDINGjs8CPWHo6qhxc7eZtzwueHwXz1PnTHAvvdMemXjaedDsZ4WlwK0077bdOCEP";

\Stripe\Stripe::setApiKey($secretKey);
?>