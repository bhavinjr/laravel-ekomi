<?php

namespace Bhavinjr\Ekomi\Services;

use Bhavinjr\Ekomi\Services\Request\RequestPayload;

class GetProductFeedback extends RequestPayload
{
	const BASE_NAME = 'getProductfeedback';

	/**
	 * [$product as a product id]
	 * @var [string]
	 */
	protected $product;

	/**
	 * [$caching available {none, short, middle, long, verylong}]
	 * @var string
	 */
	protected $caching = 'short';

	/**
	 * [$range available {all, 1m, 3m, 6m, 1y}]
	 * @var string
	 */
	protected $range = 'all';

	/**
	 * [$fields allows you to specify which columns should be returned]
	 * @var [type]
	 */
	protected $fields = 'date,order_id,product_id,rating,feedback';

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
					'product' 	=> $this->getProduct(),
					'caching' 	=> $this->getCaching(),
					'range' 	=> $this->getRange(),
					'fields' 	=> $this->getFields(),
            		'type' 		=> $this->getType(),
            		'charset' 	=> $this->getCharset()
			];
	}

	/**
	 * @return [mixed $product]
	 */
	public function getProduct()
	{
		return $this->product;
	}

	/**
     * @param mixed $product
     * @return $this
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
	}

	/**
	 * @return [mixed $caching]
	 */
	public function getCaching()
	{
		return $this->caching;
	}

	/**
     * @param mixed $caching
     * @return $this
     */
    public function setCaching($caching)
    {
        $this->caching = $caching;

        return $this;
	}

	/**
	 * @return [mixed $range]
	 */
	public function getRange()
	{
		return $this->range;
	}

	/**
     * @param mixed $range
     * @return $this
     */
    public function setRange($range)
    {
        $this->range = $range;

        return $this;
	}

	/**
	 * @return [mixed $fields]
	 */
	public function getFields()
	{
		return $this->fields;
	}

	/**
     * @param mixed $fields
     * @return $this
     */
    public function setFields($fields)
    {
        $this->fields = $fields;

        return $this;
	}
}