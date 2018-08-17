<?php

namespace Bhavinjr\Ekomi\Services;

use Bhavinjr\Ekomi\Services\Request\RequestPayload;

class GetResearch extends RequestPayload
{
	const BASE_NAME = 'getResearch';

	/**
	 * [$content available {results, answers, campaigns, campaign_questions}]
	 * @var string
	 */
	protected $content = 'results';

	/**
	 * [$range available {all, 1m, 3m, 6m, 1y}]
	 * @var string
	 */
	protected $range = 'all';

	/**
	 * @var integer|null
	 */
	protected $campaignId;

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
					'content' 		=> $this->getContent(),
            		'range' 		=> $this->getRange(),
            		'campaign_id'	=> $this->getCampaignId(),
            		'type' 			=> $this->getType(),
            		'charset' 		=> $this->getCharset()
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

	/**
	 * @return [mixed $campaignId]
	 */
	public function getCampaignId()
	{
		return $this->campaignId;
	}

	/**
     * @param mixed $campaignId
     * @return $this
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;

        return $this;
	}
}