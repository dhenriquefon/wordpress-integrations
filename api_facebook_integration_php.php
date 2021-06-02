<?php

$email = $_POST['email']; 
//echo $nome;
$email_hash = hash('sha256', $email);
$curl = curl_init();

$array = array(
    'event_name' => "Lead",
    'event_time' => time(),
    'event_id' => "id.45",
    'user_data' => array (
        'em' => $email_hash
    ),
    'event_source_url' => "https://idealenergiasolar.com.br/quem-somos/"
  );

$teste = json_encode($array);

$json = json_encode([
    'data'  => [
        $teste
        ],
       'test_event_code' => "TEST61914"
    ]);

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://graph.facebook.com/v10.0/370089883500585/events?access_token=EAAHciw65iY0BALAZC1F0YrytGsL1CHpXGUXMct9Khb7iYZAgRAz81ZCthSC4i7Cj9ZBtIj0LrAcMFeqZBLyfaHzYoLG25l1jcDbaDK7aNev3gLjZC2bAqF9BlTvZBLreYZAyjcKZCb1Ml1VerhShogB5lL7Dloo3wyvauO6x8UuG8clz4OJUUIZC8IdkqxnNYOnZBkZD',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $json,
//   CURLOPT_POSTFIELDS =>'{
//    "data": [
//       {
//          "event_name": "Lead",
//          "event_time": 1622508165,
//          "event_id": "event.id.130",
//          "event_source_url": "http:\\/\\/jaspers-market.com\\/product\\/123",
//          "user_data": {
//             "client_ip_address": "123.123.123.123",
//             "client_user_agent": "$CLIENT_USER_AGENT",
//             "em": [
//                "309a0a5c3e211326ae75ca18196d301a9bdbd1a882a4d2569511033da23f0abd"
//             ],
//             "ph": [
//                "254aa248acb47dd654ca3ea53f48c2c26d641d23d7e2e93a1ec56258df7674c4",
//                "6f4fcb9deaeadc8f9746ae76d97ce1239e98b404efe5da3ee0b7149740f89ad6"
//             ],
//             "fbc": "fb.1.1554763741205.AbCdEfGhIjKlMnOpQrStUvWxYz1234567890",
//             "fbp": "fb.1.1558571054389.1098115397"
//          },
//          "custom_data": {
//             "value": 100.2,
//             "currency": "USD",
//             "content_ids": [
//                "product.id.123"
//             ],
//             "content_type": "product"
//          },
//          "opt_out": false
//       }
//    ],
//    "test_event_code": "TEST7220"
// }
// ',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

