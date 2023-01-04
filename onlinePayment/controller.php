<?php
require_once 'PgManager.php';

function apiMoncash($amount,$referenceId) {
    require 'config.php';
    $get = new OnlinePayment; 
    $paymentLink = $get->moncashPay($amount,$referenceId,$userId,$successUrl,$errorUrl);
    header('Location:' .$paymentLink);
}

function apiPgpay($amount,$referenceId) {
    require 'config.php';
    $get = new OnlinePayment; 
    $paymentLink = $get->pgPayment($userId,$amount,$referenceId,$phone);
    header('Location:' .$paymentLink);
}


function returnUrl($referenceId) {
    require 'config.php';
    //identify the product with reference
    $getReference = substr($referenceId,10,3);
    // TODO:
// send the reference item to the user thx to userID
header('Location:../'. $returnUrlBackHome);
}