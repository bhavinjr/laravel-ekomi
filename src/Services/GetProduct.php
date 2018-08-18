<?php

namespace Bhavinjr\Ekomi\Services;

use Bhavinjr\Ekomi\Services\Request\RequestPayload;

class GetProduct extends RequestPayload
{
	const BASE_NAME = 'getProduct';

	/**
	 * [$product as a product id]
	 * @var [string]
	 */
	protected $product;

	/**
	 * [$content available {none, avg_rating}]
	 * @var string
	 */
	protected $content = 'none';

	/**
	 * [$caching available {none, short, middle, long, verylong}]
	 * @var string
	 */
	protected $caching = 'short';

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
					'content' 	=> $this->getContent(),
					'caching' 	=> $this->getCaching(),
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
}