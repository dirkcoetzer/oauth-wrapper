<?php namespace vmweb\oauth\client;

use vmweb\oauth\client\interfaces\OAuthClientInterface;

class ViaDigitalOAuthClient extends OAuthClientWrapper implements OAuthClientInterface{

	private $requestTokenEndpoint = 'http://server.oauth.com/request_token';
	private $authorizationEndpoint = 'http://server.oauth.com/authorize';
	private $accessTokenEndpoint = 'http://server.oauth.com/access_token';	

    // The endpoint that requests the token and shows the service login page.
    private $loginUrl = '/login';  

	public function getRequestTokenEndpoint()
    {
        return $this->requestTokenEndpoint;
    }
    
    public function getAuthorizationEndpoint()
    {
        return $this->authorizationEndpoint;
    }
    
    public function getAccessTokenEndpoint()
    {
        return $this->accessTokenEndpoint;
    }	

    public function getLoginUrl(){
        return $this->loginUrl;
    }
}