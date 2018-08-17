<?php

namespace Bhavinjr\Ekomi\Services;

use Bhavinjr\Ekomi\Services\Request\RequestPayload;

class GetVisitorFeedback extends RequestPayload
{
	const BASE_NAME = 'getVisitorfeedback';

	/**
	 * [$days available {min: 1, max: 90}]
	 * @var integer
	 */
	protected $days = '8';

	/**
	 * [$content use multiple by comm seperat available {feedback, error}]
	 * @var string
	 */
	protected $content = 'feedback,error';

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
        			'days' 		=> $this->getDays(),
        			'content' 	=> $this->getContent(),
        			'type' 		=> $this->getType(),
            		'charset'	=> $this->getCharset()
			];
	}

	/**
	 * @return [mixed $days]
	 */
	public function getDays()
	{
		return $this->days;
	}

	/**
     * @param mixed $days
     * @return $this
     */
    public function setDays($days)
    {
        $this->days = $days;

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
}