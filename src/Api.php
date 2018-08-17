<?php

namespace Bhavinjr\Ekomi;

use GuzzleHttp\Client;
use Bhavinjr\Ekomi\Errors;

class Api
{
	const DEFAULT_API_URL 			= 'http://api.ekomi.de/v3/';

	const DEFAULT_API_VERSION 		= 'cust-1.0.0';

	const JSON_RESPONSE_FORMAT 		= 'json';

	protected $key 			= null;

    protected $secret 		= null;

    protected $ekomi 		= null;

    protected $apiVersion 	= null;

    protected $authUrl 		= null;

    protected $urlQuery 	= null;

    protected $responseType = null;

    protected $baseName 	= null;

	/**
     * @param string $key
     * @param string $secret
     */
    public function __construct($key, $secret)
    {
    	$this->ekomi 	= $this->setClient();
        $this->key 		= $key;
        $this->secret 	= $secret;
        $this->authUrl 	= $this->setAuthUrl();
    }

    protected function setClient()
    {
    	return new Client([
            'base_uri' => config('ekomi.base_url', self::DEFAULT_API_URL),
        ]);
    }

    protected function setAuthUrl()
    {
    	return 
    		'?auth='.$this->key.'|'.$this->secret.'&version='.$this->getVersion().'&';
    }

    protected function getAuthUrl()
    {
    	return $this->authUrl;
    }

    protected function getVersion()
    {
    	$this->apiVersion = config('ekomi.api_version', self::DEFAULT_API_VERSION);

    	return $this->apiVersion;
    }

    protected function request($payload)
    {
    	$this->setRequestPayload($payload);

    	$response =	$this->ekomi->request('GET', 
						$this->baseName.
						$this->authUrl.
						$this->urlQuery
    				);

    	return $this->checkResponse($response);
    }
    
    protected function setRequestPayload($payload)
    {
    	$this->baseName = $payload->getBaseName();

        $this->urlQuery = $payload->getQuery();

    	$this->setResposeType();
    }

    protected function setResposeType()
    {
    	parse_str($this->urlQuery,$result);

    	$this->responseType = $result['type'] ?? self::JSON_RESPONSE_FORMAT;
    }

    protected function checkResponse($response)
    {
    	$response = $response->getBody()->getContents();

    	if(array_key_exists($response,Errors\ResponseError::getErrors()))
    	{
    		$message = Errors\ResponseError::getErrors()[$response];
    		$code 	 = Errors\ErrorCode::BAD_REQUEST_ERROR;
    		throw new Errors\BadRequestError($message, $code, 500);
    	}

    	return $this->returnResponse($response);
    }

    protected function returnResponse($response)
    {
        // TODO convert response according to type
        return $response;
        
    	// if($this->responseType==self::JSON_RESPONSE_FORMAT)
        // {
        //    return json_decode($response,true);
        // }
		// return unserialize($response);
    }
   
}