<?php 

	
// CONTACT FORM 7 INTEGRATION
	// 1- API FACEBOOK
	//    DOC: usamos o hook "wpcf7mailsent" para realizar a integracao via javascript utilizando AJAX com chamada do nosso script PHP de integracao
// -----------------------------------------
	function contactform7_facebook_api_integration() {
	?>
		<script type="text/javascript">
			
		document.addEventListener( 'wpcf7mailsent', function( event ) {
			// formulario de contato
			if ( '164' == event.detail.contactFormId ) 
			{	
				// Get form values
				var inputs = event.detail.inputs;
				for ( var i = 0; i < inputs.length; i++ ) 
				{
					if ( 'your-name' == inputs[i].name ) {
						var yourname = inputs[i].value;
					}

					if ( 'your-email' == inputs[i].name ) {
						var youremail = inputs[i].value;
					}	
					
					if ( 'your-phone' == inputs[i].name ) {
						var yourphone = inputs[i].value;
					}	
					
					var dest_url = "https://idealenergiasolar.com.br/contato/";
				}			

			    // requisicao ajax
				jQuery.ajax({
                      type: 'POST',                      
                      url: 'https://idealenergiasolar.com.br/process/int_fb.php',
                      data: ({
						  formidenty: "contato",
						  	email: youremail,
						  nome: yourname,
						  phone: yourphone,
						  dest_url: dest_url
					  		}),
                      success: function(data) {
                          alert(data);
                      }
                  });				  
		
		}
		
        if ( '169' == event.detail.contactFormId ) // formulario de orcamento
			{			
				// Get form values
				var inputs = event.detail.inputs;
				for ( var i = 0; i < inputs.length; i++ ) 
				{
					if ( 'nome-completo' == inputs[i].name ) {
						var yourname = inputs[i].value;
					}

					if ( 'email' == inputs[i].name ) {
						var youremail = inputs[i].value;
					}	
					
					if ( 'telefone' == inputs[i].name ) {
						var yourphone = inputs[i].value;
					}	
					
					if ( 'cep' == inputs[i].name ) {
						var yourcep = inputs[i].value;
					}	
					
					if ( 'cidade' == inputs[i].name ) {
						var yourcidade = inputs[i].value;
					}
					
					if ( 'estado' == inputs[i].name ) {
						var yourestado = inputs[i].value;
					}
					
					var dest_url = "https://idealenergiasolar.com.br/peca-o-seu-orcamento/";
				}			
			
			
				// requisicao ajax para integracao
				jQuery.ajax({
                      type: 'POST',                      
                      url: 'https://idealenergiasolar.com.br/process/int_fb.php',
                      data: ({
						  formidenty: "orcamento",
						  	email: youremail,
						  nome: yourname,
						  phone: yourphone,
						  cep: yourcep,
						  cidade: yourcidade,
						  estado: yourestado,
						  dest_url: dest_url
					  		}),
                      success: function(data) {
                          alert(data);
                      }
                  });				  
		
		}		
		
		
		}, false); </script>
	<?php
	}
	add_action( 'wp_footer', 'contactform7_facebook_api_integration' );
// --------------------------------------------
