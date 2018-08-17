<?php

namespace Bhavinjr\Ekomi;

use GuzzleHttp\Client;
use Bhavinjr\Ekomi\Api;
use Bhavinjr\Ekomi\Services\Request\PayloadInterface;
use Bhavinjr\Ekomi\Errors;

class Ekomi extends Api
{
	protected $ekomi;

	public function create(PayloadInterface $payload)
	{
		try {
			return parent::request($payload);
		}catch(Errors\BadRequestError $ex) {
			return response()->json(['error' => $ex->getMessage()], 
									$ex->getHttpStatusCode());
		}
	}

}