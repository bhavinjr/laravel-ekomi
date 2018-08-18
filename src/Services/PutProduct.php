<?php

namespace Bhavinjr\Ekomi\Services;

use Bhavinjr\Ekomi\Services\Request\RequestPayload;

class PutProduct extends RequestPayload
{
	const BASE_NAME = 'putProduct';

	/**
	 * @var [mixed]
	 */
	protected $productId;

	/**
	 * @var [string]
	 */
	protected $productName;

	/**
	 * @var [mixed]
	 */
	protected $productOther;

	/**
	 * @var [text]
	 */
	protected $productCanonicalLink;

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
					'product_id' 	=> $this->getProductId(),
            		'product_name' 	=> $this->getProductName(),
            		'product_other' => $this->getProductOther(),
            		'product_canonical_link' => $this->getProductCanonicalLink(),
            		'type' 		=> $this->getType(),
            		'charset' 	=> $this->getCharset()
			];
	}

	/**
	 * @return [mixed $productId]
	 */
	public function getProductId()
	{
		return $this->productId;
	}

	/**
     * @param mixed $productId
     * @return $this
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
	}

	/**
	 * @return [mixed $productName]
	 */
	public function getProductName()
	{
		return $this->productName;
	}

	/**
     * @param mixed $productName
     * @return $this
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
	}

	/**
	 * @return [mixed $productOther]
	 */
	public function getProductOther()
	{
		return $this->productOther;
	}

	/**
     * @param mixed $productOther
     * @return $this
     */
    public function setProductOther($productOther)
    {
        $this->productOther = $productOther;

        return $this;
	}

	/**
	 * @return [mixed $productCanonicalLink]
	 */
	public function getProductCanonicalLink()
	{
		return $this->productCanonicalLink;
	}

	/**
     * @param mixed $productCanonicalLink
     * @return $this
     */
    public function setProductCanonicalLink($productCanonicalLink)
    {
        $this->productCanonicalLink = $productCanonicalLink;

        return $this;
	}
}