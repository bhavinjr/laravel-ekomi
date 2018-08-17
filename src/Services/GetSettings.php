<?php

namespace Bhavinjr\Ekomi\Services;

use Bhavinjr\Ekomi\Services\Request\RequestPayload;

class GetSettings extends RequestPayload
{
	const BASE_NAME = 'getSettings';

	/**
	 * [$content available {request, reminder, thankyou}]
	 * @var string
	 */
	protected $content = 'request';

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
					'content'	=> $this->getContent(),
            		'type' 		=> $this->getType(),
            		'charset' 	=> $this->getCharset()
			];
	}

	/**
	 * @return [mixed $content]
	 */
	public function getContent()
	{
		return $this->content;
	}

	/**
     * @param mixed $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
	}
}