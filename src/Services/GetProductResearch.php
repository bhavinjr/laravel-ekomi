<?php

namespace Bhavinjr\Ekomi\Services;

use Bhavinjr\Ekomi\Services\Request\RequestPayload;

class GetProductResearch extends RequestPayload
{
	const BASE_NAME = 'getProductresearch';

	/**
	 * [$content available {results, questions, answers}]
	 * @var string
	 */
	protected $content = 'results';

	/**
	 * [$range available {all, 1m, 3m, 6m, 1y}]
	 * @var string
	 */
	protected $range = 'all';

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
					'content' 	=> $this->getContent(),
					'range' 	=> $this->getRange(),
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
}