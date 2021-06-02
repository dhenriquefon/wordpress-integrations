<?php

// permite requisicoes de fora
    header('Access-Control-Allow-Origin: https://idealenergiasolar.com.br');
    header('Access-Control-Allow-Origin: http://idealenergiasolar.com.br');

// controla se a requisicao eh um formulario de contato ou outro formato, como orcamento
    $formidenty = "contato";

    if( isset($_POST["formidenty"]) )
        $formidenty = $_POST['formidenty'];

// obtem valores do formulario
// ----------------------
    if( isset($_POST["email"]) )
        $email = $_POST['email'];
    else
        $email = "unknown";

    if( isset($_POST["nome"]) )
        $nome = $_POST['nome'];
    else
        $nome = "unknown";

    if( isset($_POST["phone"]) )
        $phone = $_POST['phone'];
    else
        $phone = "unknown";

    if( isset($_POST["email"]) )
        $email = $_POST['email'];
    else
        $email = "unknown";

    if( isset($_POST["nome"]) )
        $nome = $_POST['nome'];
    else
        $nome = "unknown";

    if( isset($_POST["phone"]) )
        $phone = $_POST['phone'];
    else
        $phone = "unknown";

    if( isset($_POST["cep"]) )
        $cep = $_POST['cep'];
    else
        $cep = "unknown";

    if( isset($_POST["cidade"]) )
        $cidade = $_POST['cidade'];
    else
        $cidade = "unknown";

    if( isset($_POST["estado"]) )
        $estado = $_POST['estado'];
    else
        $estado = "unknown";

    if( isset($_POST["dest_url"]) )
        $dest_url = $_POST['dest_url'];
    else
        $dest_url = "https://idealenergiasolar.com.br/contato/";
// ------------------------------------

// HASH de todas as informacoes para realizar a requisicao
// -----------------------------
    $first_name   = explode(' ',trim($nome)); // usamos apenas a primeira palavra do nome
    $email_hash   = hash('sha256', $email);
    $nome_hash    = hash('sha256', $first_name[0]);
    $phone_hash   = hash('sha256', $phone);
    $cep_hash     = hash('sha256', $cep);
    $country_hash = hash('sha256', "br");
    $cidade_hash  = hash('sha256', $cidade);
    $estado_hash  = hash('sha256', $estado);
// -----------------------------

// DEBUG INFO
// ------------------------------
    echo $email;
    echo " ";
    echo $first_name[0];
    echo " ";
    echo $phone;
    echo " ";
    echo $cep;
    echo " ";
    echo $cidade;
    echo " ";
    echo $estado;
    echo " ";
    echo $formidenty;
// ------------------------------

// monta array com parametros de input para requisicao
// ----------------------------
    if (strcmp($formidenty, "orcamento") == 0) {
        $array = array(
            'event_name' => "Lead",
            'event_time' => time(),
            'event_id' => rand(),
            'user_data' => array (
                'em' => $email_hash,
                'ph' => $phone_hash,
                'fn' => $nome_hash,
                'country' => $country_hash,
                'zp' => $cep_hash,
                'ct' => $cidade_hash,
                'st' => $estado_hash
            ),
            'event_source_url' => $dest_url
        );
    }
    else {
        $array = array(
            'event_name' => "Lead",
            'event_time' => time(),
            'event_id' => rand(),
            'user_data' => array (
                'em' => $email_hash,
                'ph' => $phone_hash,
                'fn' => $nome_hash,
                'country' => $country_hash
            ),
            'event_source_url' => $dest_url
        );
    }

    $arrayjsonencode = json_encode($array);
// ----------------------------

// constroe de fato o input para requisicao
    // exemplo sem usar variavel $array
        //$json = json_encode([
        //    'data'  => [
        //        //'event_source_url' => "http:\\/\\/jaspers-market.com\\/product\\/123"
        //        // 'user_data' => array(
        //        //     'client_ip_address' => "123.123.123.123",
        //        //     'client_user_agend' => "$CLIENT_USER_AGENT",
        //        //     'em' => array (
        //        //         "309a0a5c3e211326ae75ca18196d301a9bdbd1a882a4d2569511033da23f0abd"
        //        //     ),
        //        //     'ph' => array (
        //        //         "254aa248acb47dd654ca3ea53f48c2c26d641d23d7e2e93a1ec56258df7674c4",
        //        //         "6f4fcb9deaeadc8f9746ae76d97ce1239e98b404efe5da3ee0b7149740f89ad6"
        //        //     )
        //        // )
        //        ],
        //       'test_event_code' => "TEST53655"
        //    ]);

    // requisicao para realizar teste
        $json = json_encode([
            'data'  => [
                    $arrayjsonencode
                ],
               'test_event_code' => "TEST53655"
            ]);

    // input data requisicao de prod
        //$json = json_encode([
        //    'data'  => [
        //            $arrayjsonencode
        //        ]
        //    ]);

    // DEBUG INFO
    // -----------------------
         echo "   -   ";
         echo "        ";
         echo $json;
         echo "        ";
         echo "        ";
    // ------------------------
// ------------------------------------

// EXEC CURL
// ------------------- (ps o trecho comentado eh caso nao queira usar a variavel JSON) -----
    $curl = curl_init();
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

    // DEBUG RETURN
    // ------------------------------
    echo $response;
    // ------------------------------
// --------------------------------