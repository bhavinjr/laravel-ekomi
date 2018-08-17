<?php

namespace Bhavinjr\Ekomi\Services\Request;

abstract class RequestPayload implements PayloadInterface
{
	/**
	 * @var string
	 */
	protected $type = 'json';

	/**
	 * @var string
	 */
	private $charset = 'iso';

	/**
     * @return [string $type]
     */
    public function getType()
    {
    	return $this->type;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
    	$this->type = $type;

    	return $this;
    }

    /**
     * @return [string $charset]
     */
    public function getCharset()
    {
    	return $this->charset;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setCharset($charset)
    {
    	$this->charset = $charset;

    	return $this;
    }

    public function getQuery()
    {
        return http_build_query($this->getPayload());
    }
}