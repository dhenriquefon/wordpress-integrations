// INTEGRACAO FACEBOOK PARA PAGE VIEW
/* Page VIEW */
    /* ======================================================== */
	function page_view_facebook() {
		$current_url = home_url($_SERVER['REQUEST_URI']);
		$user_agent = $_SERVER['HTTP_USER_AGENT'];
		$client_ip = $_SERVER['REMOTE_ADDR'];
		
		$url_components = parse_url($current_url);
  
        // Use parse_str() function to parse the
        // string passed via URL
        parse_str($url_components['query'], $params);
		$search_param=$params['s'];
		//echo ' Hi '.$params['name'];
		
		//echo "<script type='text/javascript'>alert('$teste');</script>";
		if(empty($search_param) == false){
			//echo "<script type='text/javascript'>alert('$search_param');</script>";
		    $array = array(
			    'event_name' => "Search",
			    'event_time' => time(),
			    'event_id' => rand(),			
			    'event_source_url' => $current_url,
			    'action_source' => "website",
			    'user_data' => array (
				    'client_ip_address' => $client_ip,
				    'client_user_agent' => $user_agent
			    ),
				'search_string' => $search_param
		    );      
		}
		else {
		    if(strpos($current_url, "projeto") !== false){
		        $array = array(
			        'event_name' => "ViewContent",
			        'event_time' => time(),
			        'event_id' => rand(),			
			        'event_source_url' => $current_url,
			        'action_source' => "website",
					'content_name' => "projetos",
					'value' => "100",
			        'user_data' => array (
				        'client_ip_address' => $client_ip,
				        'client_user_agent' => $user_agent
			        )
		        );            
			}
            else {
		        $array = array(
			        'event_name' => "PageView",
			        'event_time' => time(),
			        'event_id' => rand(),			
			        'event_source_url' => $current_url,
			        'action_source' => "website",
			        'user_data' => array (
				        'client_ip_address' => $client_ip,
				        'client_user_agent' => $user_agent
			        )
		        );
            }			
		}

		
		

			
		$inputs = json_encode($array);
		
		$body = array(
			'data' => array(
				$inputs
			),'test_event_code' => "TEST81595"
		);
		
		// Send Request
		// ----------------------------------
		$endpoint_url = 'https://graph.facebook.com/v10.0/370089883500585/events?access_token=EAAHciw65iY0BALAZC1F0YrytGsL1CHpXGUXMct9Khb7iYZAgRAz81ZCthSC4i7Cj9ZBtIj0LrAcMFeqZBLyfaHzYoLG25l1jcDbaDK7aNev3gLjZC2bAqF9BlTvZBLreYZAyjcKZCb1Ml1VerhShogB5lL7Dloo3wyvauO6x8UuG8clz4OJUUIZC8IdkqxnNYOnZBkZD';
		//GFCommon::log_debug( 'gform_after_submission: body => ' . print_r( $body, true ) );
		//GFCommon::log_debug( 'gform_after_submission: body222 => ' . print_r( $json, true ) );
		$response = wp_remote_post( $endpoint_url, array( 'body' => $body ) );
		//GFCommon::log_debug( 'gform_after_submission: response => ' . print_r( $response, true ) );
		//
		//error_log("Douglas");
		//error_log(print_r($response, true));
		// ----------------------------------		
		
		//echo "<script type='text/javascript'>alert('$current_url');</script>";
	}
	add_action( 'wp_footer', 'page_view_facebook' ); // Include "page includes" element
   /*  ======================================================== */