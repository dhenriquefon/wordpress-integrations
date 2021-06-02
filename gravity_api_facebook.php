	<?php 
	add_action( 'gform_post_submission_17', 'set_post_content', 10, 2 );
	add_action( 'gform_post_submission_18', 'set_post_content', 10, 2 );
	add_action( 'gform_post_submission_19', 'set_post_content', 10, 2 );
	add_action( 'gform_post_submission_20', 'set_post_content', 10, 2 );
	
	function set_post_content( $entry, $form ) {

		// get entry parameters
		// -----------------
		$nome =  hash('sha256', $entry[1]);
		$email = hash('sha256', $entry[2]);
		$telefone = hash('sha256', $entry[3]);
		$estado = hash('sha256', $entry[11]);
		$cidade = hash('sha256', $entry[12]);
		$valor = hash('sha256', $entry[13]);
		// -------------------

		// estruturar INPUT para API
		// ----------------------------------
		$array = array(
			'event_name' => "Lead",
			'event_time' => time(),
			'event_id' => rand(),
			'user_data' => array (
				'em' => $email,
				'ph' => $telefone,
				'fn' => $nome,
				'ct' => $cidade,
				'st' => $estado
			),
			'event_source_url' => "https://idealenergiasolar.com.br/promocao-facebook-concluida-dp-acima-300/"
		);

		$inputs = json_encode($array);

		$json = json_encode([
			'data'  => [
				$inputs
			],
			'test_event_code' => "TEST61914"
		]);
		
		$body = array(
			'data' => array(
				$inputs
			),
			'test_event_code' => "TEST61914");		
		// ----------------------------------

		// Send Request
		// ----------------------------------
		$endpoint_url = 'https://graph.facebook.com/v10.0/370089883500585/events?access_token=EAAHciw65iY0BALAZC1F0YrytGsL1CHpXGUXMct9Khb7iYZAgRAz81ZCthSC4i7Cj9ZBtIj0LrAcMFeqZBLyfaHzYoLG25l1jcDbaDK7aNev3gLjZC2bAqF9BlTvZBLreYZAyjcKZCb1Ml1VerhShogB5lL7Dloo3wyvauO6x8UuG8clz4OJUUIZC8IdkqxnNYOnZBkZD';


		//GFCommon::log_debug( 'gform_after_submission: body => ' . print_r( $body, true ) );
		//GFCommon::log_debug( 'gform_after_submission: body222 => ' . print_r( $json, true ) );

		$response = wp_remote_post( $endpoint_url, array( 'body' => $body ) );
		//GFCommon::log_debug( 'gform_after_submission: response => ' . print_r( $response, true ) );
		// ----------------------------------
 }
