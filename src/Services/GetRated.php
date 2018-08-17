<?php

namespace Bhavinjr\Ekomi\Services;

use Bhavinjr\Ekomi\Services\Request\RequestPayload;

class GetRated extends RequestPayload
{
	const BASE_NAME = 'getRated';

	/**
	 * [$days available {min: 0, max: 90}]
	 * @var integer
	 */
	protected $days = '8';

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
        			'days' 		=> $this->getDays(),
        			'type' 		=> $this->getType(),
            		'charset'	=> $this->getCharset()
			];
	}

	/**
	 * @return [mixed $days]
	 */
	public function getDays()
	{
		return $this->days;
	}

	/**
     * @param mixed $days
     * @return $this
     */
    public function setDays($days)
    {
        $this->days = $days;

        return $this;
	}

}