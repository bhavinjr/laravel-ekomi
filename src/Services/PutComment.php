<?php

namespace Bhavinjr\Ekomi\Services;

use Bhavinjr\Ekomi\Services\Request\RequestPayload;

class PutComment extends RequestPayload
{
	const BASE_NAME = 'putComment';

	/**
	 * @var [mixed]
	 */
	protected $orderId;

	/**
	 * @var [string]
	 */
	protected $comment;

	/**
	 * [$update {replace,delete}]
	 * @var string
	 */
	protected $update = 'replace';

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
            		'comment' 	=> $this->getComment(),
            		'update' 	=> $this->getUpdate(),
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
	 * @return [mixed $comment]
	 */
	public function getComment()
	{
		return $this->comment;
	}

	/**
	 * @param [mixed $comment]
	 * @return $this
	 */
	public function setComment($comment)
	{
		$this->comment = $comment;

		return $this;
	}

	/**
	 * 
	 * @return [mixed $update]
	 */
	public function getUpdate()
	{
		return $this->update;
	}

	/**
	 * @param [mixed $update]
	 * @return $this
	 */
	public function setUpdate($update)
	{
		$this->update = $update;

		return $this;
	}
}