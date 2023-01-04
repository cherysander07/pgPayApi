<?php
 class OnlinePayment {

  public function pgPayment($userId,$amount,$referenceId,$phone) {
    
$url = "https://topup.pgecom.com/api/pgpay/token";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Content-Type: application/json"
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA
{
  "userID":"$userId",
  "amount":$amount,
  "orderID": "$referenceId",
  "phone":"$phone"
}
DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$resp =  json_decode(curl_exec($curl), TRUE);

curl_close($curl);
var_dump($resp);

return $resp['redirectUrl'];

  }

  // ========================================


  public function moncashPay($amount,$referenceId,$userId,$successUrl,$errorUrl) {

 $url = "https://topup.pgecom.com/api/moncash/token";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Content-Type: application/json"
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA
{
  "userID": "$userId",
  "gdes": "$amount",
  "referenceId": "$referenceId",
  "successUrl": "$successUrl",
  "errorUrl" : "$errorUrl"
}
DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$resp =  json_decode(curl_exec($curl), TRUE);

curl_close($curl);
var_dump($resp);

return $resp['redirectUrl'];

  }


  // ==================================================================


 }

?>
    
