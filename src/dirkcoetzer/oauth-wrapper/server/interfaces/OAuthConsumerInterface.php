<?php namespace vmweb\oauth\server\interfaces;

interface OAuthConsumerInterface{
	
	/** 
	* Returns an instance of an OAuthConsumerInterface or return null on not found 
	*/
	public static function findByKey($key);
	
	/** 
	* Create a consumer with a given key & secret 
	*/
	public static function create($key, $secret);
	
	/** 
	* Returns if the consumer is active 
	*/
	public function isActive();
	
	/**
	* Returns the consumer key 
	*/
	public function getKey();
	
	/** 
	* Returns the consumer secret key 
	*/
	public function getSecretKey();
	
	/** 
	* Check if nonce exist for a specified consumer 
	*/
	public function hasNonce($nonce, $timestamp);
	
	/**  
	* Add a nonce to the nonce cache 
	*/
	public function addNonce($nonce);
	
	/**
	* Get the consumer id
	*/
	public function getId();
	
}