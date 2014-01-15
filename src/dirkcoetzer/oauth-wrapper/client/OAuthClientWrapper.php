<?php namespace vmweb\oauth\client;

use OAuth;

class OAuthClientWrapper {
	
	protected $oauth;

	public function __construct($consumer_key, $consumer_secret, $signature_method = OAUTH_SIG_METHOD_HMACSHA1, $auth_type = 0){
		$this->oauth = new OAuth($consumer_key, $consumer_secret, $signature_method, $auth_type);		

	}

	/**
	* Disable Debug
	* Turns off verbose request information (off by default). 
	*/
	public function disableDebug(){
		return $this->oauth->disableDebug();
	}

	/**
	* Disable Redirects
	* Disable redirects from being followed automatically, thus allowing the request to be manually redirected
	*/
	public function disableRedirects(){
		return $this->oauth->disableRedirects();
	}

	/**
	* Disable SSL Checks
	* Turns off the usual SSL peer certificate and host checks, this is not for production environments.
	*/
	public function disableSSLChecks(){
		return $this->oauth->disableSSLChecks();
	}

	/**
	* Enable Debug
	* Turns on verbose request information useful for debugging, the debug information is stored in the debugInfo member.
	*/
	public function enableDebug(){
		return $this->oauth->enableDebug();
	}

	/**
	* Enable Redirects
	* Follow and sign redirects automatically, which is enabled by default.
	*/
	public function enableRedirects(){
		return $this->oauth->enableRedirects();
	}

	/**
	* Enable SSL Checks
	* Turns on the usual SSL peer certificate and host checks (enabled by default).
	*/
	public function enableSSLChecks(){
		return $this->oauth->enableSSLChecks();
	}

	/**
	* Fetch
	* Fetch a resource
	*
	* @param string protected_resource_url 
	* @param array extra_params
	* @param string http_method
	* @param array http_headers
	*
	* @return bool
	*/
	public function fetch($protected_resource_url, $extra_params = array(), $http_method = '', $http_headers = array()){
		return $this->oauth->fetch($protected_resource_url, $extra_params, $http_method, $http_headers);
	}

	/**
	* Generate Signature
	* Generate a signature based on the final HTTP method, URL and a string/array of parameters.
	*
	* @param string access_token_url
	* @param string auth_session_handle
	* @param string verifier_token	
	*
	* @return array Returns an array containing the parsed OAuth response on success or FALSE on failure.
	*/
	public function generateSignature($http_method, $url, $extra_params = null){
		return $this->oauth->generateSignature($http_method, $url, $extra_params);
	}

	/**
	* Get Access Token
	* Get an access token, secret and any additional response parameters from the service provider.
	*
	* @param string access_token_url
	* @param string auth_session_handle
	* @param string verifier_token	
	*
	* @return array Returns an array containing the parsed OAuth response on success or FALSE on failure.
	*/
	public function getAccessToken ($access_token_url, $auth_session_handle = null, $verifier_token = null ){
		return $this->oauth->getAccessToken($access_token_url, $auth_session_handle, $verifier_token);
	}

	/**
	* Get Certificate Authority
	* Gets the Certificate Authority information, which includes the ca_path and ca_info set by OAuth::setCaPath().
	*
	* @return array An array of Certificate Authority information, specifically as ca_path and ca_info keys within the returned associative array.
	*/
	public function getCAPath(){
		return $this->oauth->getCAPath();
	}

	/**
	* Get Last Response
	* Get the raw response of the most recent request.
	*
	* @return string Returns a string containing the last response.
	*/
	public function getLastResponse(){
		return $this->oauth->getLastResponse();		
	}

	/**
	* Get Last Response Headers
	* Get headers for last response.
	*
	* @return string A string containing the last response's headers or FALSE on failure
	*/
	public function getLastResponseHeaders(){
		return $this->oauth->getLastResponseHeaders();		
	}

	/**
	* Get Last Response Info
	* Get HTTP information about the last response.
	*
	* @return array Returns an array containing the response information for the last request. 
	* Constants from curl_getinfo() may be used.
	*/
	public function getLastResponseInfo(){
		return $this->oauth->getLastResponseInfo();		
	}

	/**
	* Get Request Header
	* Generate OAuth header string signature based on the final HTTP method, URL and a string/array of parameters
	*
	* @param string http_method
	* @param string url
	* @param mixed extra_parameters 
 	*
	* @return string A string containing the generated request header or FALSE on failure
	*/
	public function getRequestHeader($http_method, $url, $extra_parameters = null){
		return $this->oauth->getRequestHeader();		
	}

	/**
	* Get Request Token
	* Fetch a request token, secret and any additional response parameters from the service provider.
	*
	* @param string request_token_url
	* @param string callback_url 
 	*
	* @return string Returns an array containing the parsed OAuth response on success or FALSE on failure.
	*/
	public function getRequestToken($request_token_url, $callback_url = ''){
		return $this->oauth->getRequestToken($request_token_url, $callback_url);		
	}

	/**
	* Set Auth Type
	* Set where the OAuth parameters should be passed.
	*
	* @param integer auth_type
 	*	OAUTH_AUTH_TYPE_AUTHORIZATION
 	*	OAUTH_AUTH_TYPE_FORM
 	* 	OAUTH_AUTH_TYPE_URI
 	*	OAUTH_AUTH_TYPE_NONE
 	*
	* @return string Returns TRUE if a parameter is correctly set, otherwise FALSE (e.g., if an invalid auth_type is passed in.)
	*/
	public function setAuthType($auth_type){
		return $this->oauth->setAuthType($auth_type);		
	}

	/**
	* Set CA Path
	* Sets the Certificate Authority (CA), both for path and info.
	*
	* @param string ca_path
	* @param string ca_info
	*
	* @return mixed Returns TRUE on success, or FALSE if either ca_path or ca_info are considered invalid.
	*/
	public function setCAPath($ca_path = null, $ca_info = null){
		return $this->oauth->setCAPath($ca_path, $ca_info);
	}

	/**
	* Set Nonce
	* Sets the nonce for all subsequent requests.
	*
	* @param string nonce
	*
	* @return bool Returns TRUE on success, or FALSE if the nonce is considered invalid.
	*/
	public function setNonce($nonce){
		return $this->oauth->setNonce($nonce);
	}

	/**
	* Set Request Engine
	* Sets the Request Engine, that will be sending the HTTP requests.
	*
	* @param integer request_engine
	*	OAUTH_REQENGINE_STREAMS
	*	OAUTH_REQENGINE_CURL
	*
	*/
	public function setRequestEngine($request_engine){
		return $this->oauth->setRequestEngine($request_engine);
	}

	/**
	* Set RSA Certificate
	* Sets the RSA certificate.
	*
	* @param string certificate
	*
	* @return bool
	*/
	public function setRSACertificate($certificate){
		return $this->oauth->setRSACertificate($certificate);
	}

	/**
	* Set SSL Checks
	* Tweak specific SSL checks for requests.
	*
	* @param integer sslchecks
	*
	* @return bool
	*/
	public function setSSLChecks($sslchecks){
		return $this->oauth->setSSLChecks($sslchecks);
	}

	/**
	* Set Timestamp
	* Sets the OAuth timestamp for subsequent requests.
	*
	* @param string timestamp
	*
	* @return bool
	*/
	public function setTimestamp($timestamp){
		return $this->oauth->setTimestamp($timestamp);
	}

	/**
	* Set Token
	* Set the token and secret for subsequent requests.
	*
	* @param string token
	* @param string token_secret
	*
	* @return bool
	*/
	public function setToken($token, $token_secret){
		return $this->oauth->setToken($token, $token_secret);
	}
	
	/**
	* Set Version
	* Sets the OAuth version for subsequent requests
	*
	* @param string version	
	*
	* @return bool
	*/
	public function setVersion($version){
		return $this->oauth->setVersion($version);
	}

}