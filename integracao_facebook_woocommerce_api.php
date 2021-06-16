// INTEGRACAO FACEBOOK PARA (PAGE-VIEW / VIEW-CONTENT / SEARCH)
/* Page VIEW */
    /* ======================================================== */
	function page_view_facebook() {
		$current_url = home_url($_SERVER['REQUEST_URI']);
		$user_agent  = $_SERVER['HTTP_USER_AGENT'];
		$client_ip   = $_SERVER['REMOTE_ADDR'];
		$url_components = parse_url($current_url);
		
		// tenta obter email do usuario
		// ----------------------------------------------
		    $temUsuario = FALSE;
		    $current_user = wp_get_current_user();
		    if ( 0 != $current_user->ID ) {
			    $temUsuario = TRUE;
			    $user_email = hash('sha256', $current_user->user_email);
			    $user_firstname = hash('sha256', $current_user->user_firstname);
		    } 		
		// -------------------------------------------------

		// evento de BUSCA - desabilitado porque nao temos no Violeta
		// ----------------------------------------------------------
			//parse_str($url_components['query'], $params);
			//$search_param=$params['s'];
			//if(empty($search_param) == false){
			//	//echo "<script type='text/javascript'>alert('$search_param');</script>";
			//	$array = array(
			//		'event_name' => "Search",
			//		'event_time' => time(),
			//		'event_id' => rand(),
			//		'event_source_url' => $current_url,
			//		'action_source' => "website",
			//		'user_data' => array (
			//			'client_ip_address' => $client_ip,
			//			'client_user_agent' => $user_agent
			//	    ),
			//		'search_string' => $search_param
			//);
			//}
		//-------------------------------------------------------------
		
		// evento de VIEW CONTENT
		// ------------------------------------------------------------
		$didSetViewContent = False;
			if($current_url == "https://www.violetacup.com.br/calcinha-absorvente/"){
				if ($temUsuario) {
    				$array = array(
	    				'event_name' => "ViewContent",
		    			'event_time' => time(),
				    	'event_source_url' => $current_url,
					    'action_source' => "website",
					    'content_name' => "calcinha-absorvente",
					    'user_data' => array (
						    'client_ip_address' => $client_ip,
						    'client_user_agent' => $user_agent,
							'em' => $user_email,
							'fn' => $user_firstname
					    )
				    );					
				} else {
    				$array = array(
	    				'event_name' => "ViewContent",
		    			'event_time' => time(),
				    	'event_source_url' => $current_url,
					    'action_source' => "website",
					    'content_name' => "calcinha-absorvente",
					    'user_data' => array (
						    'client_ip_address' => $client_ip,
						    'client_user_agent' => $user_agent
					    )
				    );
				}

				$didSetViewContent = True;
			}

			if($current_url == "https://www.violetacup.com.br/o-que-e-coletor-menstrual/"){
				if ($temUsuario) {
    				$array = array(
	    				'event_name' => "ViewContent",
		    			'event_time' => time(),
				    	'event_source_url' => $current_url,
					    'action_source' => "website",
					    'content_name' => "coletor-menstrual",
					    'user_data' => array (
						    'client_ip_address' => $client_ip,
						    'client_user_agent' => $user_agent,
							'em' => $user_email,
							'fn' => $user_firstname
					    )
				    );					
				} else {
    				$array = array(
	    				'event_name' => "ViewContent",
		    			'event_time' => time(),
				    	'event_source_url' => $current_url,
					    'action_source' => "website",
					    'content_name' => "coletor-menstrual",
					    'user_data' => array (
						    'client_ip_address' => $client_ip,
						    'client_user_agent' => $user_agent
					    )
				    );
				}				
				
				$didSetViewContent = True;
			}

			if($current_url == "https://www.violetacup.com.br/disco-menstrual/"){
				if ($temUsuario) {
    				$array = array(
	    				'event_name' => "ViewContent",
		    			'event_time' => time(),
			    		'event_id' => rand(),
				    	'event_source_url' => $current_url,
					    'action_source' => "website",
					    'content_name' => "disco-menstrual",
					    'user_data' => array (
						    'client_ip_address' => $client_ip,
						    'client_user_agent' => $user_agent,
							'em' => $user_email,
							'fn' => $user_firstname
					    )
				    );					
				} else {
    				$array = array(
	    				'event_name' => "ViewContent",
		    			'event_time' => time(),
				    	'event_source_url' => $current_url,
					    'action_source' => "website",
					    'content_name' => "disco-menstrual",
					    'user_data' => array (
						    'client_ip_address' => $client_ip,
						    'client_user_agent' => $user_agent
					    )
				    );
				}				
				
				$didSetViewContent = True;
			}

			if($current_url == "https://www.violetacup.com.br/produtos-higienizacao/"){
				if ($temUsuario) {
    				$array = array(
	    				'event_name' => "ViewContent",
		    			'event_time' => time(),
				    	'event_source_url' => $current_url,
					    'action_source' => "website",
					    'content_name' => "produtos-higienizacao",
					    'user_data' => array (
						    'client_ip_address' => $client_ip,
						    'client_user_agent' => $user_agent,
							'em' => $user_email,
							'fn' => $user_firstname
					    )
				    );					
				} else {
    				$array = array(
	    				'event_name' => "ViewContent",
		    			'event_time' => time(),
				    	'event_source_url' => $current_url,
					    'action_source' => "website",
					    'content_name' => "produtos-higienizacao",
					    'user_data' => array (
						    'client_ip_address' => $client_ip,
						    'client_user_agent' => $user_agent
					    )
				    );
				}				

				$didSetViewContent = True;
			}

			if($current_url == "https://www.violetacup.com.br/absorvente-reutilizavel/"){
				if ($temUsuario) {
    				$array = array(
	    				'event_name' => "ViewContent",
		    			'event_time' => time(),
				    	'event_source_url' => $current_url,
					    'action_source' => "website",
					    'content_name' => "absorvente-reutilizavel",
					    'user_data' => array (
						    'client_ip_address' => $client_ip,
						    'client_user_agent' => $user_agent,
							'em' => $user_email,
							'fn' => $user_firstname
					    )
				    );					
				} else {
    				$array = array(
	    				'event_name' => "ViewContent",
		    			'event_time' => time(),
				    	'event_source_url' => $current_url,
					    'action_source' => "website",
					    'content_name' => "absorvente-reutilizavel",
					    'user_data' => array (
						    'client_ip_address' => $client_ip,
						    'client_user_agent' => $user_agent
					    )
				    );
				}

				$didSetViewContent = True;
			}
		

			if($current_url == "https://www.violetacup.com.br/loja/"){
				if ($temUsuario) {
    				$array = array(
	    				'event_name' => "ViewContent",
		    			'event_time' => time(),
				    	'event_source_url' => $current_url,
					    'action_source' => "website",
					    'content_name' => "loja",
					    'user_data' => array (
						    'client_ip_address' => $client_ip,
						    'client_user_agent' => $user_agent,
							'em' => $user_email,
							'fn' => $user_firstname
					    )
				    );					
				} else {
    				$array = array(
	    				'event_name' => "ViewContent",
		    			'event_time' => time(),
				    	'event_source_url' => $current_url,
					    'action_source' => "website",
					    'content_name' => "loja",
					    'user_data' => array (
						    'client_ip_address' => $client_ip,
						    'client_user_agent' => $user_agent
					    )
				    );
				}

				$didSetViewContent = True;
			}		
		
		// ------------------------------------------------------------
		
		// evento FindLocation
		// -=----------------------------------------------------------
			if($current_url == "https://www.violetacup.com.br/onde-encontrar/"){
				if ($temUsuario) {
    				$array = array(
	    				'event_name' => "FindLocation",
		    			'event_time' => time(),
				    	'event_source_url' => $current_url,
					    'action_source' => "website",
					    'user_data' => array (
						    'client_ip_address' => $client_ip,
						    'client_user_agent' => $user_agent,
							'em' => $user_email,
							'fn' => $user_firstname
					    )
				    );					
				} else {
    				$array = array(
	    				'event_name' => "FindLocation",
		    			'event_time' => time(),
				    	'event_source_url' => $current_url,
					    'action_source' => "website",
					    'user_data' => array (
						    'client_ip_address' => $client_ip,
						    'client_user_agent' => $user_agent
					    )
				    );
				}

				$didSetViewContent = True;
			}		
		// ------------------------------------------------------------
		
		// evento de PAGE VIEW
		// ------------------------------------------------------------
			/*if ($didSetViewContent == False) {
				if ($temUsuario) {
    				$array = array(
	    				'event_name' => "PageView",
		    			'event_time' => time(),
				    	'event_source_url' => $current_url,
					    'action_source' => "website",
					    'user_data' => array (
						    'client_ip_address' => $client_ip,
						    'client_user_agent' => $user_agent,
							'em' => $user_email,
							'fn' => $user_firstname
					    )
				    );					
				} else {
    				$array = array(
	    				'event_name' => "PageView",
		    			'event_time' => time(),
				    	'event_source_url' => $current_url,
					    'action_source' => "website",
					    'user_data' => array (
						    'client_ip_address' => $client_ip,
						    'client_user_agent' => $user_agent
					    )
				    );
				}				

			}*/
		// ------------------------------------------------------------

		// Send Request CURL
		// ------------------------------------------------------------
		$didSetViewContent = False;
		if ($didSetViewContent == True) {
			$inputs = json_encode($array);
		
			$body = array(
				'data' => array(
					$inputs
				),'test_event_code' => "TEST79522"
			);
		
			//$body = array(
			//	'data' => array(
			//		$inputs
			//	)
			//);		
		
			$endpoint_url = 'https://graph.facebook.com/v10.0/780041492458422/events?access_token=EAAHc9l6AagIBAB6OTobnpipaQUQS64zEZBDC4WDzZAmKbVuvafmFhY9Qens5vW3ZC4izZAdGi4VxksG7o4EbGQ7sx5nGs7YzIC6Mvj2rZApqWgknTdt7xgBn7IivLGIZAqkn52aFLZBz1LUQk8hmpN8vZCAoXR25M0Ud3mcWuEAEQxntjEPf8om2LwDyxQ3UpQsZD';

			$response = wp_remote_post( $endpoint_url, array( 'body' => $body ) );
		}
		// ----------------------------------

	}
	add_action( 'wp_footer', 'page_view_facebook' ); // Include "page includes" element
   /*  ======================================================== */


// forcar nao enviar eventos pelo pixel,apenas pela api
//add_filter( 'facebook_for_woocommerce_integration_pixel_enabled', '__return_false' );

























	/* PIPZ - Eventos em elementos do site (buttons por exemplo) */
	/* ========================================================  */
	function pipz_scripts() {
		wp_enqueue_script( 'events-pipz', get_template_directory_uri() . '/js/events-pipz.js', array( 'jquery' ), '1.0.0', true );
	}
	add_action( 'wp_enqueue_scripts', 'pipz_scripts' );
	/* ========================================================  */
	
	/* PIPZ - Integracoes com Formularios */
	/* ========================================================  */	
	function pipz_identify_forms() {
	?>
		<script type="text/javascript">
		document.addEventListener( 'wpcf7mailsent', function( event ) {
			// formulario de contato
			if ( '1272' == event.detail.contactFormId ) 
			{
				var inputs = event.detail.inputs;
				for ( var i = 0; i < inputs.length; i++ ) 
				{
					if ( 'cnome' == inputs[i].name ) {
						var yourname = inputs[i].value;
					}

					if ( 'cemail' == inputs[i].name ) {
						var youremail = inputs[i].value;
					}					
				}
				
				pipz.identify
				(
					youremail,
					{
						name: yourname,
						email: youremail,
						event:
						{
							'SignUp': 
							{
								plan: 'Fale Conosco'
							}
						}
					}
				);
				

			    // requisicao ajax
				jQuery.ajax({
                      type: 'POST',                      
                      url: 'https://violetacup.com.br/process/int_fb.php',
                      data: ({
						  formidenty: "contato",
						  	email: youremail,
						  nome: yourname,
						  dest_url: "https://violetacup.com.br/"
					  		}),
                      success: function(data) {
                          //alert(data);
                      }
                  });					
				
				
			}
			
			//formulario ebook mandala
			if ( '47186' == event.detail.contactFormId ) 
			{
				var inputs = event.detail.inputs;
				
				
				for ( var i = 0; i < inputs.length; i++ ) 
				{
					if ( 'your-name' == inputs[i].name ) {
						var yourname = inputs[i].value;
					}

					if ( 'your-email' == inputs[i].name ) {
						var youremail = inputs[i].value;
					}	

				}
				
				pipz.identify
				(
					youremail,
					{
						name: yourname,
						email: youremail,
						event:
						{
							'SignUp': 
							{
								plan: 'mandala form'
							}
						}
					}
				);
				
				pipz.track
				(
					'mandala'
				);	  	
				
							    // requisicao ajax
				jQuery.ajax({
                      type: 'POST',                      
                      url: 'https://violetacup.com.br/process/int_fb.php',
                      data: ({
						  formidenty: "mandala",
						  	email: youremail,
						  nome: yourname,
						  dest_url: "https://violetacup.com.br/landing-page-mandala/"
					  		}),
                      success: function(data) {
                          //alert(data);
                      }
                  });	
			}
			//formulario ebook coletor
			if ( '18780' == event.detail.contactFormId ) 
			{
				var inputs = event.detail.inputs;
				
				
				for ( var i = 0; i < inputs.length; i++ ) 
				{
					if ( 'your-name' == inputs[i].name ) {
						var yourname = inputs[i].value;
					}

					if ( 'your-email' == inputs[i].name ) {
						var youremail = inputs[i].value;
					}	

				}
				
				pipz.identify
				(
					youremail,
					{
						name: yourname,
						email: youremail,
						event:
						{
							'SignUp': 
							{
								plan: 'Download Ebook'
							}
						}
					}
				);
				
				pipz.track
				(
					'downloaded ebook'
				);	 
				
				jQuery.ajax({
                      type: 'POST',                      
                      url: 'https://violetacup.com.br/process/int_fb.php',
                      data: ({
						  formidenty: "coletor",
						  	email: youremail,
						  nome: yourname,
						  dest_url: "https://violetacup.com.br/o-que-e-coletor-menstrual/"
					  		}),
                      success: function(data) {
                          //alert(data);
                      }
                  });					
								
			}		

			//formulario ebook calcinha absorvente
			// ------------------------------------
			if ( '50954' == event.detail.contactFormId ) 
			{
				var inputs = event.detail.inputs;
					
				for ( var i = 0; i < inputs.length; i++ ) 
				{
					if ( 'your-name' == inputs[i].name ) {
						var yourname = inputs[i].value;
					}
					if ( 'your-email' == inputs[i].name ) {
						var youremail = inputs[i].value;
					}	
				}
				
				pipz.identify
				(
					youremail,
					{
						name: yourname,
						email: youremail,
						event:
						{
							'SignUp': 
							{
								plan: 'Download Ebook Calcinha'
							}
						}
					}
				);
				
				pipz.track
				(
					'downloaded ebook calcinha'
				);	  
				
				jQuery.ajax({
                      type: 'POST',                      
                      url: 'https://violetacup.com.br/process/int_fb.php',
                      data: ({
						  formidenty: "calcinha-absorvente",
						  	email: youremail,
						  nome: yourname,
						  dest_url: "https://violetacup.com.br/calcinha-absorvente/"
					  		}),
                      success: function(data) {
                          //alert(data);
                      }
                  });					
								
			}		
			// ------------------------------------		

			//formulario ebook absorvente reutilizavel
			// ------------------------------------
			if ( '50959' == event.detail.contactFormId ) 
			{
				var inputs = event.detail.inputs;
					
				for ( var i = 0; i < inputs.length; i++ ) 
				{
					if ( 'your-name' == inputs[i].name ) {
						var yourname = inputs[i].value;
					}
					if ( 'your-email' == inputs[i].name ) {
						var youremail = inputs[i].value;
					}	
				}				
				pipz.identify
				(
					youremail,
					{
						name: yourname,
						email: youremail,
						event:
						{
							'SignUp': 
							{
								plan: 'Download Absorvente Reutilizavel'
							}
						}
					}
				);				
				pipz.track
				(
					'downloaded absorvente reutilizavel'
				);	  	
				
				jQuery.ajax({
                      type: 'POST',                      
                      url: 'https://violetacup.com.br/process/int_fb.php',
                      data: ({
						  formidenty: "absorvente-reutilizavel",
						  	email: youremail,
						  nome: yourname,
						  dest_url: "https://violetacup.com.br/absorvente-reutilizavel/"
					  		}),
                      success: function(data) {
                          //alert(data);
                      }
                  });				
								
			}		
			// ------------------------------------				
			
			// formulario revendedor
			if ( '1508' == event.detail.contactFormId ) 
			{
				var inputs = event.detail.inputs;
							
				for ( var i = 0; i < inputs.length; i++ ) 
				{
					if ( 'your-name' == inputs[i].name ) 
					{
						var yourname = inputs[i].value;
					}

					if ( 'your-email' == inputs[i].name ) 
					{
						var youremail = inputs[i].value;
					}
					
					if ( 'empresa-name' == inputs[i].name ) 
					{
						var empresa = inputs[i].value;
					}
					
					if ( 'your-celular' == inputs[i].name ) 
					{
						var telefone = inputs[i].value;
					}					
					
				}
				
				pipz.identify
				(
					youremail,
					{
						name: yourname,
						email: youremail,
						job_title: empresa,
						phone: telefone,
						event:
						{
							'SignUp': 
							{
								plan: 'Revendedor'
							}
						}
					}
				);		
				
				jQuery.ajax({
                      type: 'POST',                      
                      url: 'https://violetacup.com.br/process/int_fb.php',
                      data: ({
						  formidenty: "revendedor",
						  	email: youremail,
						  nome: yourname,
						  dest_url: "https://violetacup.com.br/revendedor/"
					  		}),
                      success: function(data) {
                          //alert(data);
                      }
                  });						
			}			

		}, false );
		</script>
	<?php
	}
	add_action( 'wp_footer', 'pipz_identify_forms' );
	/* ========================================================  */
	
	function get_product_category_by_id( $category_id ) {
    	$term = get_term_by( 'id', $category_id, 'product_cat', 'ARRAY_A' );
    	return $term['name'];
	}


	/* Produto adicionado ao carrinho */
	/* ======================================================== */
	function pipz_added_product() {		
		global $woocommerce;

		$cart = WC()->cart->get_cart();

		// Create an empty array
		$arrayContentIds=array();
		$arrayContentName=array();
		$arrayContents=array();


		foreach( $cart as $cart_item ){		 
			$product = wc_get_product( $cart_item['variation_id'] );
			
			$nome_categoria = $product->get_category_ids();
			$nome_categoria_principal = get_product_category_by_id( $nome_categoria[0] );
			
			//error_log("id            : " . print_r($product->get_variation_id(), true));
			//error_log("categoria     : " . print_r($nome_categoria_principal, true));			
			//error_log("nome          : " . print_r($product->get_name(), true));
			//error_log("price         : " . print_r($product->get_price(), true));			
			//error_log("sku           : " . print_r($product->get_sku(), true));
			
			// monta array contents
			$aux_content_id = $product->get_sku(). "_" . $product->get_id();
			$singleproductcontent = 
    			(object)array(
        			'id' => $aux_content_id,
        			'quantity' => '1',
    			);
		    $json = json_encode($singleproductcontent);
			
			array_push($arrayContentIds, $aux_content_id);
			array_push($arrayContentName,$product->get_name());
			array_push($arrayContents, $json);

//				<script type="text/javascript"> 
//					pipz.track(
//						'Product Added', 
//						{
//							id: <?php echo esc_html($product->get_id()) ,
//							name: <?php echo "'" . esc_html($product->get_name()) . "'" 
//						});	  
				//</script>			
			//<?php		 
		}		
		
		//dados publicos do usuario
		$current_url = home_url($_SERVER['REQUEST_URI']);
		$user_agent  = $_SERVER['HTTP_USER_AGENT'];
		$client_ip   = $_SERVER['REMOTE_ADDR'];
		$url_components = parse_url($current_url);

		// dados se o usuario forneceu o email
		// ----------------------------------------------
		$temUsuario = FALSE;
		$current_user = wp_get_current_user();
		if ( 0 != $current_user->ID ) {
			$temUsuario = TRUE;
			$user_email = hash('sha256', $current_user->user_email);
			$user_firstname = hash('sha256', $current_user->user_firstname);
		} 		
		// -------------------------------------------------		
	
		//error_log("array_content_id           : " . print_r($arrayContentIds, true));
		//error_log("array_content_name         : " . print_r($arrayContentName, true));
		//error_log("array_contents             : " . print_r($arrayContents, true));		
		//error_log("total_ammount              : " . print_r($woocommerce->cart->total, true)); 
		
		if ($temUsuario) {
			$array = array(
				'event_name' => "AddToCart",
				'event_time' => time(),
				'event_id' => rand(),
				'event_source_url' => $current_url,
				'action_source' => "website",
				'content_type' => "product",
				'content_ids' => $arrayContentIds,
				'content_name' => json_encode($arrayContentName),
				'contents' => $arrayContents,
				'value' => $woocommerce->cart->total,
				'user_data' => array (
					'client_ip_address' => $client_ip,
					'client_user_agent' => $user_agent,
					'em' => $user_email,
					'fn' => $user_firstname
				)
			);					
		} else {
			$array = array(
				'event_name' => "AddToCart",
				'event_time' => time(),
				'event_id' => rand(),
				'event_source_url' => $current_url,
				'action_source' => "website",
				'content_type' => "product",
				'content_ids' => $arrayContentIds,
				'content_name' => json_encode($arrayContentName),
				'contents' => $arrayContents,
				'value' => $woocommerce->cart->total,
				'user_data' => array (
					'client_ip_address' => $client_ip,
					'client_user_agent' => $user_agent
				)
			);
		}
		
		$inputs = json_encode($array);

		$body = array(
			'data' => array(
				$inputs
			),'test_event_code' => "TEST25264"
		);

		$endpoint_url = 'https://graph.facebook.com/v11.0/780041492458422/events?access_token=EAAHc9l6AagIBAPGsZAl8WdxxhfwVIJbwrAdfjShAv1GGjK5lpyitQf4CDkWc1DVWjsrM2yrzQDjkpAtuQ3ZBuQB3zxr4nxFtBQmz3JqZC8lkBFM1UZBoxlW9kWLe4wmnf3wzwjECzH9qPtJ8JCLNZACgHm4i6Ew5qZApmuWJrGPBQB0K219TdbV9c7VsaYEwUZD';
error_log("CART DOUG");
		error_log(print_r($cart, true));
		
		$response = wp_remote_post( $endpoint_url, array( 'body' => $body ) );			
		error_log(print_r($response, true));
	}	
	//add_action( 'woocommerce_before_cart', 'pipz_added_product' );
	/* ======================================================== */

	// *** INIT CHECKOUT ***
	function init_checkout() {		
		
		// variaveis de integracao com woocommmerce
		global $woocommerce;
		$cart = WC()->cart->get_cart();

		// arrays para preencher objetos de produtos
		$arrayContentIds=array();
		$arrayContentName=array();
		$arrayContents=array();
		$numItems=0;

		foreach( $cart as $cart_item ){		 
			$product = wc_get_product( $cart_item['variation_id'] );

			//error_log("id            : " . print_r($product->get_id(), true));
			//error_log("categoria     : " . print_r($nome_categoria_principal, true));			
			//error_log("nome          : " . print_r($product->get_name(), true));
			//error_log("price         : " . print_r($product->get_price(), true));			
			//error_log("sku           : " . print_r($product->get_sku(), true));

			// variavel contents que eh um array no formato json 
			$aux_content_id = $product->get_sku(). "_" . $product->get_id();
			$singleproductcontent = 
				(object)array(
				'id' => $aux_content_id,
				'quantity' => '1',
			);
			$json = json_encode($singleproductcontent);

			//error_log("aux_content_id: " . print_r($aux_content_id, true));
			$numItems = $numItems + 1;
			array_push($arrayContentIds, $aux_content_id);
			array_push($arrayContentName,$product->get_name());
			array_push($arrayContents, $json);


			// 				
			//<script type="text/javascript"> 
			//	pipz.track(
			//		'Product Added', 
			//		{
			//			id: <?php echo esc_html($product->get_id()) ,
			//			name: <?php echo "'" . esc_html($product->get_name()) . "'" 
			//		});	  
			//</script>			
			//<?php		 
		}		

		// variaveis publicas do usuario
		// --------------------------------------------
		$current_url = home_url($_SERVER['REQUEST_URI']);
		$user_agent  = $_SERVER['HTTP_USER_AGENT'];
		$client_ip   = $_SERVER['REMOTE_ADDR'];
		$url_components = parse_url($current_url);
		// --------------------------------------------

		// valida se o usuario forneceu email
		// ----------------------------------------------
		$temUsuario = FALSE;
		$current_user = wp_get_current_user();
		if ( 0 != $current_user->ID ) {
			$temUsuario = TRUE;
			$user_email = hash('sha256', $current_user->user_email);
			$user_firstname = hash('sha256', $current_user->user_firstname);
		} 		
		// -------------------------------------------------		

		//error_log("array_content_id           : " . print_r($arrayContentIds, true));
		//error_log("array_content_name         : " . print_r($arrayContentName, true));
		//error_log("array_contents             : " . print_r($arrayContents, true));		
		//error_log("total_ammount              : " . print_r($woocommerce->cart->total, true)); 
		//error_log("numItems                   : " . print_r($numItems, true)); 

		if ($temUsuario) {
				$array = array(
					'event_name' => "InitiateCheckout",
					'event_time' => time(),
					'event_id' => rand(),
					'event_source_url' => $current_url,
					'action_source' => "website",
					'content_type' => "product",
					'content_ids' => $arrayContentIds,
					'content_name' => json_encode($arrayContentName),
					'contents' => $arrayContents,
					'value' => $woocommerce->cart->total,
					'num_items' => $numItems,
					'user_data' => array (
						'client_ip_address' => $client_ip,
						'client_user_agent' => $user_agent,
						'em' => $user_email,
						'fn' => $user_firstname
					)
				);					
			} else {
				$array = array(
					'event_name' => "InitiateCheckout",
					'event_time' => time(),
					'event_id' => rand(),
					'event_source_url' => $current_url,
					'action_source' => "website",
					'content_type' => "product",
					'content_ids' => $arrayContentIds,
					'content_name' => json_encode($arrayContentName),
					'contents' => $arrayContents,
					'value' => $woocommerce->cart->total,
					'num_items' => $numItems,
					'user_data' => array (
						'client_ip_address' => $client_ip,
						'client_user_agent' => $user_agent
					)
				);
			}

			$inputs = json_encode($array);

			$body = array(
				'data' => array(
					$inputs
				),'test_event_code' => "TEST79522"
			);

			$endpoint_url = 'https://graph.facebook.com/v11.0/780041492458422/events?access_token=EAAHc9l6AagIBAPGsZAl8WdxxhfwVIJbwrAdfjShAv1GGjK5lpyitQf4CDkWc1DVWjsrM2yrzQDjkpAtuQ3ZBuQB3zxr4nxFtBQmz3JqZC8lkBFM1UZBoxlW9kWLe4wmnf3wzwjECzH9qPtJ8JCLNZACgHm4i6Ew5qZApmuWJrGPBQB0K219TdbV9c7VsaYEwUZD';
			//error_log("CART DOUG");
			//error_log(print_r($cart, true));

			$response = wp_remote_post( $endpoint_url, array( 'body' => $body ) );			
			//error_log(print_r($response, true));	

	}
	//add_action('woocommerce_before_checkout_form', 'init_checkout');



	// ** COMPRA REALIZADA COM SUCESSO **
	function custom_content_thankyou( $order_id ) {

			// Declaracao e arrays vazios para preenchimento de multiplos produtos
			// -----------------------
			$arrayContentIds=array();
			$arrayContentName=array();
			$arrayContents=array();
			$numItems=0;
			// ------------------------
			
			// Objetos de integracao com woocommerce
			// ------------------------
			global $woocommerce; // objeto publico do woocommerce
			$order = wc_get_order( $order_id );
			$items = $order->get_items();
			// ------------------------
			
			// percorre os itens do pedido para preencher arrays
			foreach ( $items as $item ) {				
				
				$product = $item->get_product();			
				$product_name = $product->get_name();
				$product_variation_id = $product->get_id();

				// logs que auxiliam
				error_log("douglas id            : " . print_r($product->get_id(), true));
				error_log("nome          : " . print_r($product->get_name(), true));
				error_log("price         : " . print_r($product->get_price(), true));			
				error_log("sku           : " . print_r($product->get_sku(), true));

				
				$aux_content_id = "wc_post_id_" .  $product->get_parent_id();
				$singleproductcontent = 
					(object)array(
						'id' => $aux_content_id,
						'quantity' => '1',
					);

				//error_log("singleproductcontent: " . print_r($singleproductcontent, true));
				//error_log("aux_content_id: " . print_r($aux_content_id, true));
				$json = json_encode($singleproductcontent);
				error_log("json: " . print_r($json, true));

				$numItems = $numItems + 1;
				array_push($arrayContentIds, $aux_content_id);
				array_push($arrayContentName,$product->get_name());
				array_push($arrayContents, $json);

			}

			// obtem dados publico do usuario
			// ----------------------------------------------
			$current_url = home_url($_SERVER['REQUEST_URI']);
			$user_agent  = $_SERVER['HTTP_USER_AGENT'];
			$client_ip   = $_SERVER['REMOTE_ADDR'];
			$url_components = parse_url($current_url);
			// ----------------------------------------------

			// tenta obter email do usuario
			// ----------------------------------------------
			$temUsuario = FALSE;
			$current_user = wp_get_current_user();
			if ( 0 != $current_user->ID ) {
				$temUsuario = TRUE;
				$user_email = hash('sha256', $current_user->user_email);
				$user_firstname = hash('sha256', $current_user->user_firstname);
			} 		
			// -------------------------------------------------		

			//error_log("array_content_id           : " . print_r($arrayContentIds, true));
			//error_log("array_content_name         : " . print_r($arrayContentName, true));
			//error_log("array_contents             : " . print_r($arrayContents, true));		
			//error_log("total_ammount              : " . print_r($order->get_total(), true)); 
			//error_log("numItems                   : " . print_r($numItems, true)); 

			// monta objeto para persistir na api do facebook
			// -----------------------------------
			if ($temUsuario) {
				$array = array(
					'event_name' => "Purchase",
					'event_time' => time(),
					'event_id' => rand(),
					'event_source_url' => $current_url,
					'action_source' => "website",
					'content_type' => "product_group",
					'content_ids' => $arrayContentIds,
					'content_name' => json_encode($arrayContentName),
					'contents' => $arrayContents,
					'value' => $order->get_total(),
					'currency' => "BRL",
					'num_items' => $numItems,
					'user_data' => array (
						'client_ip_address' => $client_ip,
						'client_user_agent' => $user_agent,
						'em' => $user_email,
						'fn' => $user_firstname
					)
				);					
			} else {
				$array = array(
					'event_name' => "Purchase",
					'event_time' => time(),
					'event_id' => rand(),
					'event_source_url' => $current_url,
					'action_source' => "website",
					'content_type' => "product_group",
					'content_ids' => $arrayContentIds,
					'content_name' => json_encode($arrayContentName),
					'contents' => $arrayContents,
					'value' => $order->get_total(),
					'currency' => "BRL",
					'num_items' => $numItems,
					'user_data' => array (
						'client_ip_address' => $client_ip,
						'client_user_agent' => $user_agent
					)
				);
			}

			$inputs = json_encode($array);
			// -----------------------------------

			// formato para facebook (teste)
			$body = array(
				'data' => array(
					$inputs
				),'test_event_code' => "TEST79522"
			);
		
			// formato para facebook (prod)
			//$body = array(
			//	'data' => array(
			//		$inputs
			//	)
			//);		

			$endpoint_url = 'https://graph.facebook.com/v11.0/780041492458422/events?access_token=EAAHc9l6AagIBAPGsZAl8WdxxhfwVIJbwrAdfjShAv1GGjK5lpyitQf4CDkWc1DVWjsrM2yrzQDjkpAtuQ3ZBuQB3zxr4nxFtBQmz3JqZC8lkBFM1UZBoxlW9kWLe4wmnf3wzwjECzH9qPtJ8JCLNZACgHm4i6Ew5qZApmuWJrGPBQB0K219TdbV9c7VsaYEwUZD';
	//error_log("CART DOUG");
			//error_log(print_r($cart, true));

			$response = wp_remote_post( $endpoint_url, array( 'body' => $body ) );			
			error_log(print_r($response, true));	



	}
	//add_action( 'woocommerce_thankyou', 'custom_content_thankyou' );
	
	/* ACESSO A PAGINA DE PRODUTOS */
	/* =================================== */	
	function pipz_product_view(){
		global $product;
		
		//logs de teste da global $product (produto do wordpress)
		//	$product->get_type();
		//	$product->get_name();
		
		//error_log("ADD PRODUCT GET SKU");
		//error_log(print_r($product->get_sku(), true));
		//error_log("GET NAME");
		//error_log(print_r($product->get_name(), true));
		//error_log("GET PRICE");
		//error_log(print_r($product->get_price(), true));
		//error_log("GET ID");
		//error_log(print_r($product->get_id(), true));
		//error_log("GET REGULAR PRICE");
		//error_log(print_r($product->get_regular_price(), true));
		//error_log("GET SALE PRICE");
		//error_log(print_r($product->get_sale_price(), true));
		//error_log("GET CHILDREN");
		//error_log(print_r($product->get_children(), true));
		//error_log("LALALA");
		//error_log(print_r($product, true));
			
		// obtem dados publicos do usuario
		// ---------------------------------------------
		$current_url = home_url($_SERVER['REQUEST_URI']);
		$user_agent  = $_SERVER['HTTP_USER_AGENT'];
		$client_ip   = $_SERVER['REMOTE_ADDR'];
		$url_components = parse_url($current_url);
		// ---------------------------------------------

		// verifica se usuario forneceu email
		// ----------------------------------------------
		$temUsuario = FALSE;
		$current_user = wp_get_current_user();
		if ( 0 != $current_user->ID ) {
			$temUsuario = TRUE;
			$user_email = hash('sha256', $current_user->user_email);
			$user_firstname = hash('sha256', $current_user->user_firstname);
		} 		
		// -------------------------------------------------

		// obtem informacoes sobre o produto
		// -------------------------------------------------
		$content_ids = "wc_post_id_" . $product->get_id();

		$nome_categoria = $product->get_category_ids();
		$nome_categoria_principal = get_product_category_by_id( $nome_categoria[0] );
		$content_ids = "wc_post_id_" . $product->get_id();
		// -------------------------------------------------
	
		// monta array data para post na api do facebook
		// --------------------------------------------------
		if ($temUsuario) {
			$array = array(
				'event_name' => "ViewContent",
				'event_time' => time(),
				'event_id' => rand(),
				'event_source_url' => $current_url,
				'action_source' => "website",
				'content_type' => "product_group",
				'content_ids' => array($content_ids),
				'content_name' => $product->get_name(),
				'content_category' => $nome_categoria_principal,
				'value' => $product->get_price(),
				'user_data' => array (
					'client_ip_address' => $client_ip,
					'client_user_agent' => $user_agent,
					'em' => $user_email,
					'fn' => $user_firstname
				)
			);					
		} 
		else {
			$array = array(
				'event_name' => "ViewContent",
				'event_time' => time(),
				'event_id' => rand(),
				'event_source_url' => $current_url,
				'action_source' => "website",
				'content_type' => "product_group",
				'content_ids' => array($content_ids),		
				'content_name' => $product->get_name(),
	    		'content_category' => $nome_categoria_principal,
				'value' => $product->get_price(),
				'user_data' => array (
					'client_ip_address' => $client_ip,
					'client_user_agent' => $user_agent
				)
			);
		}
	
		// convert input para JSON
		$inputs = json_encode($array);
		
		// --------------------------------------------------
	
		// monta de fato a estrutura para post no facebook (com teste habilitado)
		$body = array(
			'data' => array(
				$inputs
			),'test_event_code' => "TEST79522"
		);
		
		// monta de fato a estrutura para post no facebook (prod)
		//$body = array(
		//	'data' => array(
		//		$inputs
		//	)
		//);

		$endpoint_url = 'https://graph.facebook.com/v11.0/780041492458422/events?access_token=EAAHc9l6AagIBAPGsZAl8WdxxhfwVIJbwrAdfjShAv1GGjK5lpyitQf4CDkWc1DVWjsrM2yrzQDjkpAtuQ3ZBuQB3zxr4nxFtBQmz3JqZC8lkBFM1UZBoxlW9kWLe4wmnf3wzwjECzH9qPtJ8JCLNZACgHm4i6Ew5qZApmuWJrGPBQB0K219TdbV9c7VsaYEwUZD';

		$response = wp_remote_post( $endpoint_url, array( 'body' => $body ) );			
		
		// log da resposta do comando executado
		//error_log(print_r($response, true));
	
	}
	
	//add_action( 'woocommerce_after_single_product_summary', 'pipz_product_view');
	/* =================================== */	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
---------------------------------- integracao ajax ------------------------


<?php

// permite requisicoes de fora
    header('Access-Control-Allow-Origin: https://violetacup.com.br');
    header('Access-Control-Allow-Origin: http://violetacup.com.br');

// obtem valores do formulario
// ----------------------
    $formidenty = "contato";

    if( isset($_POST["formidenty"]) )
        $formidenty = $_POST['formidenty'];

    if( isset($_POST["email"]) )
        $email = $_POST['email'];
    else
        $email = "unknown";

    if( isset($_POST["nome"]) )
        $nome = $_POST['nome'];
    else
        $nome = "unknown";

    if( isset($_POST["dest_url"]) )
        $dest_url = $_POST['dest_url'];
    else
        $dest_url = "https://violetacup.com.br/";
// ------------------------------------

// HASH de todas as informacoes para realizar a requisicao
// -----------------------------
    $first_name   = explode(' ',trim($nome)); // usamos apenas a primeira palavra do nome
    $email_hash   = hash('sha256', $email);
    $nome_hash    = hash('sha256', $first_name[0]);
    $country_hash = hash('sha256', "br");
// -----------------------------

// DEBUG INFO
// ------------------------------
    echo $email;
    echo " ";
    echo $first_name[0];
    echo " ";
// ------------------------------

// monta array com parametros de input para requisicao
// ----------------------------
    //if (strcmp($formidenty, "contato") == 0) {
		$array = array(
            'event_name' => "Lead",
            'event_time' => time(),
            'event_id' => rand(),
            'user_data' => array (
                'em' => $email_hash,
                'fn' => $nome_hash,
                'country' => $country_hash
            ),
            'event_source_url' => $dest_url,
            'action_source' => "website"
        );		
    //}
    //else {
    //    $array = array(
    //        'event_name' => "Lead",
    //        'event_time' => time(),
    //        'user_data' => array (
    //            'em' => $email_hash,
    //            'ph' => $phone_hash,
    //            'fn' => $nome_hash,
    //            'country' => $country_hash,
    //            'zp' => $cep_hash,
    //            'ct' => $cidade_hash,
    //            'st' => $estado_hash
    //        ),
    //        'event_source_url' => $dest_url,
    //        'action_source' => "website"
    //    );        
    //}

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
               'test_event_code' => "TEST79522"
            ]);

    // input data requisicao de prod
        //$json = json_encode([
         //   'data'  => [
          //          $arrayjsonencode
          //      ]
          //  ]);

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
      CURLOPT_URL => 'https://graph.facebook.com/v10.0/780041492458422/events?access_token=EAAHc9l6AagIBAIDr8i8EAKfky2EtefOs0283Htq4ZAd4sUZAQoetfq9InerEyUsUrstHSssvis1Su7T9habOI2KjhU6t4LcI6DeZCX45qT0jwOZCFn3dn8XM1HldTy9Ga4s5OMee5HHDlfkqSWfqcaDiZA3uvF1f8ZAk7ii2veBvzp5TbhEq8PqANI9ZCHobMYZD',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => $json,
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