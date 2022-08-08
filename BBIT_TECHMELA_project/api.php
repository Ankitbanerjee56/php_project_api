<?php

session_start();
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_3dcc7218738eef6179a935d295f",
                  "X-Auth-Token:test_9929184fad772232926a4c42d90"));
$payload = Array(
    'purpose' => 'BBIT TECHMELA Entry fees',
    'amount' => '500',
    'buyer_name' => 'user',
    'phone' => $_SESSION['phone'],
    'redirect_url' => 'http://localhost/BBIT_TECHMELA_project/redirect.php',
    'send_email' => true,
    'email' => $_SESSION['email'],
    'webhook'=> 'http://www.example.com/webhook/',
    'send_sms' => true,
    'allow_repeated_payments' => false
);
     
    
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 
$response = json_decode($response);
//echo '<pre>';
//print_r($response);
$_SESSION['TID']=$response->payment_request->id;
header('location:'.$response->payment_request->longurl);

die();

?>
