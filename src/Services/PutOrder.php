<?php

namespace Bhavinjr\Ekomi\Services;

use Bhavinjr\Ekomi\Services\Request\RequestPayload;

class PutOrder extends RequestPayload
{
	
	const BASE_NAME = 'putOrder';

	/**
	 * @var [mixed]
	 */
	protected $orderId;

	/**
	 * [$productIds comma seperated multiple ids]
	 * @var [string]
	 */
	protected $productIds;

	/**
	 * @var [string]
	 */
	protected $productIdsUpdateMethod;

	/**
	 * [$orderTimestamp date as (YYYY-MM-DD)]
	 * @var [string]
	 */
	protected $orderTimestamp;

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
					'order_id' 		=> $this->getOrderId(),
            		'product_ids' 	=> $this->getProductIds(),
            		'product_ids_update_method' => $this->getProductIdsUpdateMethod(),
            		'ordertimestamp' => $this->getOrderTimestamp(),
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
	 * 
	 * @return [mixed $productIds]
	 */
	public function getProductIds()
	{
		return $this->productIds;
	}

	/**
	 * @param [mixed $productIds]
	 * @return $this
	 */
	public function setProductIds($productIds)
	{
		$this->productIds = $productIds;

		return $this;
	}

	/**
     * @return [string $productIdsUpdateMethod]
     */
    public function getProductIdsUpdateMethod()
    {
        return $this->productIdsUpdateMethod;
    }

    /**
     * @param string $productIdsUpdateMethod
     * @return $this
     */
    public function setProductIdsUpdateMethod($productIdsUpdateMethod)
    {
        $this->productIdsUpdateMethod = $productIdsUpdateMethod;

        return $this;
    }

    /**
     * @return [string $orderTimestamp]
     */
    public function getOrderTimestamp()
    {
        return $this->orderTimestamp;
    }

    /**
     * @param string $orderTimestamp
     * @return $this
     */
    public function setOrderTimestamp($orderTimestamp)
    {
        $this->orderTimestamp = $orderTimestamp;

        return $this;
    }
}