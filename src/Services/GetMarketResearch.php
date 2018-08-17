<?php

namespace Bhavinjr\Ekomi\Services;

use Bhavinjr\Ekomi\Services\Request\RequestPayload;

class GetMarketResearch extends RequestPayload
{
	const BASE_NAME = 'getMarketresearch';

	/**
	 * [$content available {questions, summary, details}]
	 * @var string
	 */
	protected $content = 'summary';

	/**
	 * [$state available {open, closed, both}]
	 * @var string
	 */
	protected $state;

	/**
	 * [$startts start timestamp]
	 * @var [timestamp]
	 */
	protected $startts;

	/**
	 * [$endts start timestamp]
	 * @var [timestamp]
	 */
	protected $endts;

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
					'state' 	=> $this->getState(),
					'startts' 	=> $this->getStartts(),
					'endts' 	=> $this->getEndts(),
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
	 * @return [mixed $state]
	 */
	public function getState()
	{
		return $this->state;
	}

	/**
     * @param mixed $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
	}

	/**
	 * @return [mixed $startts]
	 */
	public function getStartts()
	{
		return $this->startts;
	}

	/**
     * @param mixed $startts
     * @return $this
     */
    public function setStartts($startts)
    {
        $this->startts = $startts;

        return $this;
	}

	/**
	 * @return [mixed $endts]
	 */
	public function getEndts()
	{
		return $this->endts;
	}

	/**
     * @param mixed $endts
     * @return $this
     */
    public function setEndts($endts)
    {
        $this->endts = $endts;

        return $this;
	}
}