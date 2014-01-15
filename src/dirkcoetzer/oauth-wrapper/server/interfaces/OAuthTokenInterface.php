<?php namespace vmweb\oauth\server\interfaces;

use vmweb\oauth\server\interfaces\OAuthConsumerInterface;
use vmweb\oauth\server\interfaces\OAuthUserInterface;

interface OAuthTokenInterface{
	
	/** 
	* create a request token 
	*/
	public static function createRequestToken(OAuthConsumerInterface $consumer,$token,$tokensecret,$callback);
	
	/** 
	* @return OAuthTokenInterface instance if you can find a token in the db that matches $token otherwhise return false 
	*/
	public static function findByToken($token);
	
	/** 
	* returns true if this is a request token otherwise return false 
	*/
	public function isRequest();
	
	/** 
	* returns true if this is a access token otherwise return false 
	*/
	public function isAccess();
	
	/** 
	* return callback url 
	*/
	public function getCallback();
	
	/** 
	* Get Verifier
	* Get the token verifier
	* 
	* @return string
	*/
	public function getVerifier();
	
	/** 
	* Get Type
	* Get the token type
	* 
	* @return integer 
	*	1 for request
	*	2 for access 
	*/
	public function getType();
	
	/** 
	* Get Secret
	* Get the token secret
	*
	* @return string
	*/
	public function getSecret();
	
	/** 
	* Get User
	* Get the user associated with the token
	*
	* @return string
	*/
	public function getUser();
	
	/**
	* Set Verifier
	* Set the token verifier
	*
	* @param string verifier
	*
	* @return void
	*/
	public function setVerifier($verifier);
	
	/**
	* Set User
	* Set the token user
	*
	* @param string user
	*/
	public function setUser(OAuthUserInterface $user);
	
}