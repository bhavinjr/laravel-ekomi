<?php

namespace Bhavinjr\Ekomi\Services;

use Bhavinjr\Ekomi\Services\Request\RequestPayload;

class PutDialog extends RequestPayload
{
	const BASE_NAME = 'putDialog';

	/**
	 * @var [mixed]
	 */
	protected $orderId;

	/**
	 * [$message must be urlencoded]
	 * @var [text]
	 */
	protected $message;

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
					'order_id' 	=> $this->getOrderId(),
            		'message' 	=> $this->getMessage(),
            		'type' 		=> $this->getType(),
            		'charset' 	=> $this->getCharset()
			];
	}

	/**
	 * @return [mixed $orderId]
	 */
	public function getOrderId()
	{
		return $this->orderId;
	}

	/**
     * @param mixed $orderId
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
	}

	/**
	 * @return [mixed $message]
	 */
	public function getMessage()
	{
		return $this->message;
	}

	/**
     * @param mixed $orderId
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
	}
}