<?php

namespace Bhavinjr\Ekomi\Services;

use Bhavinjr\Ekomi\Services\Request\RequestPayload;

class GetSnapshot extends RequestPayload
{
	const BASE_NAME = 'getSnapshot';

	/**
	 * @return [string]
	 */
	public function getBaseName()
	{
		return self::BASE_NAME;
	}

	public function getPayload()
	{
		return  [	
        			'type' 		=> $this->getType(),
            		'charset'	=> $this->getCharset()
			];
	}
}