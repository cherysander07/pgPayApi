<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$amountGd = 350;
$amountUsd = 10;
$orderId = '123';
   ?>
   <div class="onlinePayment">
 
   <form method="post" action="onlinePayment/exec.php">
    <input type="hidden" name="amount" value="<?= $amountGd; ?>">
    <input type="hidden" name="orderId" value="<?= $orderId; ?>">
    <input class="img" type="image" src="https://moncashbutton.digicelgroup.com/Moncash-middleware/resources/assets/images/MC_button_kr.png"  >
    <input type="hidden" name="mode" value="moncash">
   </form>

   <form method="Post" action="onlinePayment/exec.php">
    <input type="hidden" name="amount" value="<?= $amountUsd; ?>">
    <input type="hidden" name="orderId" value="<?= $orderId; ?>">
    <input class="img" type="image" src="onlinePayment/pgpay.png"  >
    <input type="hidden" name="mode" value="pgpay">

   </form>

</div>




<style>
    .onlinePayment {
        display: flex;
    flex-direction: column;
        padding: 20px;
        border-radius: 20px;
        justify-content: center;
        align-items: center;
 background-color: lightgrey;
    }
    .onlinePayment .img {
        width: 200px;
        margin: 5px;
    }
</style>
</body>
</html>
