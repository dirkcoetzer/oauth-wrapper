<?php namespace vmweb\oauth\client\interfaces;

interface OAuthClientInterface{
    
    /**
    * Get Request Token Endpoint
    * Method for retrieving the requestTokenEndpoint attribute
    *
    * @return string
    */
	public function getRequestTokenEndpoint();
    
    /**
    * Get Authorization Endpoint
    * Method for retrieving the authorizationEndpoint attribute
    *
    * @return string
    */
    public function getAuthorizationEndpoint();
    /**
    * Get Access Token Endpoint
    * Method for retrieving the accessTokenEndpoint attribute
    *
    * @return string
    */
    public function getAccessTokenEndpoint();

    /**
    * Get Login Url
    * Method for retrieving the loginUrl attribute for the specific service
    *
    * @return string
    */
    public function getLoginUrl();
}