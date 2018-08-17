<?php

namespace Bhavinjr\Ekomi\Services;

use Bhavinjr\Ekomi\Services\Request\RequestPayload;

class AssignClientOrder extends RequestPayload
{
	const BASE_NAME = 'assignClientOrder';

	/**
	 * @var mixed
	 */
	protected $orderId;

	/**
	 * @var mixed
	 */
	protected $clientId;

	/**
	 * [$unlink removes the order_id assignment]
	 * @var boolean
	 */
	protected $unlink = false;

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
					'client_id' => $this->getClientId(),
            		'unlink' 	=> $this->getUnlink(),
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
	 * @return [mixed $clientId]
	 */
	public function getClientId()
	{
		return $this->clientId;
	}

	/**
     * @param mixed $clientId
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
	}

	/**
	 * @return [mixed $unlink]
	 */
	public function getUnlink()
	{
		return $this->unlink;
	}

	/**
     * @param mixed $unlink
     * @return $this
     */
    public function setUnlink($unlink)
    {
        $this->unlink = $unlink;

        return $this;
	}
}