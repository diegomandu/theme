<?php 

add_action('http_api_curl', 'custom_curl_resolve', 10, 3 );
function custom_curl_resolve( $handle, $r, $url ) {
	curl_setopt($handle, CURLOPT_RESOLVE, array(
		"api.wordpress.org:80:66.155.40.187", 
		"api.wordpress.org:443:66.155.40.187", 
		"downloads.wordpress.org:80:66.155.40.203", 
		"downloads.wordpress.org:443:66.155.40.203")
	);
}
?>