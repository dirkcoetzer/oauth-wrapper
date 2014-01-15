<?php namespace vmweb\oauth\server;

use OAuthProvider;

class OAuthProviderWrapper{
	
	protected $oauth;

	/**
	* Construct
	* Initiates a new OAuth Provider instance
	*
	* @param array params
	*/
	public function __construct(){		
		/* create our instance */
		$this->oauth = new OAuthProvider();
		
		/* setup check functions */
		$this->oauth->consumerHandler(array($this,'checkConsumer'));
		$this->oauth->timestampNonceHandler(array($this,'checkNonce'));
		$this->oauth->tokenHandler(array($this,'checkToken'));
	}

	/**
	* Add Required Parameter
	* Add required oauth provider parameters.
	*
	* @param string param
	*
	* @return boolean
	*/
	public function addRequiredParameter($param){
		return $this->oauth->addRequiredParameter($param);
	}

	/**
	* Call Consumer Handler
	* Calls the registered consumer handler callback function, which is set with OAuthProvider::consumerHandler().
	*
	* @return void
	*/
	public function callConsumerHandler(){
		$this->oauth->callConsumerHandler();
	}	

	/**
	* Call Token Handler
	* Calls the registered token handler callback function, which is set with OAuthProvider::tokenHandler().
	*
	* @return void
	*/
	public function calltokenHandler(){
		$this->oauth->calltokenHandler();
	}	

	/**
	* Check OAuth Request
	* Checks an OAuth request.
	*
	* @param string uri
	* @param string method
	*
	* @return void 
	*/
	public function checkOAuthRequest(){
		$this->oauth->checkOAuthRequest();		
	}	

	/**
	* Consumer Handler
	* Sets the consumer handler callback, which will later be called with OAuthProvider::callConsumerHandler().
	*
	* @param string callback_function
	*
	* @return void 
	*/
	public function consumerHandler(){
		$this->oauth->consumerHandler();
	}

	/**
	* Genereate Token
	* Generates a string of pseudo-random bytes.
	*
	* @param integer size
	* @param boolean strong
	*
	* @return string The generated token, as a string of bytes.
	*/
	public function generateToken($size, $strong = false){
		return $this->oauth->generateToken($size, $strong);
	}

	/**
	* Is two legged endpoint
	* The 2-legged flow, or request signing. It does not require a token.
	*
	* @param mixed params
	*
	* @return object An OAuthProvider object.
	*/
	public function is2LeggedEndpoint($params){
		return $this->oauth->is2LeggedEndpoint($params);
	}

	/**
	* Is request token endpoint
	* Sets whether this is a request token endpoint
	*
	* @param boolean will_issue_request_token
	*
	* @return void
	*/
	public function isRequestTokenEndpoint($will_issue_request_token){
		$this->oauth->isRequestTokenEndpoint($will_issue_request_token);
	}		

	/**
	* Remove required parameter
	* Removes a required parameter
	*
	* @param string param
	*
	* @return boolean
	*/
	public function removeRequiredParameter($param){
		return $this->oauth->removeRequiredParameter($param);
	}

	/**
	* Report Problem
	* Report a problem
	*
	* @param string oauthexception
	* @param boolean send_headers
	*
	* @return void
	*/
	public function reportProblem($oauthexception, $send_headers = true){
		$this->oauth->reportProblem($oauthexception, $send_headers);
	}

	/**
	* Set Param
	* Set a parameter
	*
	* @param string param_key
	* @param mixed param_val
	*
	* @return boolean
	*/
	public function setParam($param_key, $param_val = null){
		return $this->oauth->reportProblem($param_key, $param_val);
	}

	/**
	* Set Request Token Path
	* Set the request token path
	*
	* @param string path
	*
	* @return true
	*/
	public function setRequestTokenPath($path){
		return $this->oauth->setRequestTokenPath($path);
	}	

	/**
	* Set Request Token Query
	* This function is called when you are requesting a request token
	* Basicly it disabled the tokenHandler check and force the oauth_callback parameter
	*
	* @return void
	*/
	public function setRequestTokenQuery(){
		$this->oauth->isRequestTokenEndpoint(true); 
		$this->oauth->addRequiredParameter("oauth_callback");
	}

	/**
	* Timestamp Nonce Handler
	* Sets the timestamp nonce handler callback, which will later be called with OAuthProvider::callTimestampNonceHandler(). Errors related to timestamp/nonce are thrown to this callback.
	*
	* @param string callback_function
	*
	* @return void
	*/
	public function timestampNonceHandler($callback_function){
		$this->oauth->timestampNonceHandler($callback_function);
	}	

	/**
	* Token Handler
	* Sets the token handler callback, which will later be called with OAuthProvider::callTokenHandler().
	*
	* @param string callback_function
	*
	* @return void
	*/
	public function tokenHandler($callback_function){
		$this->oauth->tokenHandler($callback_function);
	}
}