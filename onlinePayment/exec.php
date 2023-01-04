<?php
require_once 'controller.php';
if($_POST['mode'] == 'moncash') {
$amount = htmlspecialchars($_POST['amount']);
$reference = htmlspecialchars($_POST['orderId']);
$referenceId = time() . $reference;
apiMoncash($amount,$referenceId);
} else {
$amount = htmlspecialchars($_POST['amount']);
$reference = htmlspecialchars($_POST['orderId']);
$referenceId = time() . $reference;
  apiPgpay($amount,$referenceId);
}