<?php

namespace Bhavinjr\Ekomi\Services;

use Bhavinjr\Ekomi\Services\Request\RequestPayload;

class GetDialog extends RequestPayload
{
	const BASE_NAME = 'getDialog';

	/**
	 * [$content available {process_only, message_only, both}]
	 * @var string
	 */
	protected $content = 'process_only';

	/**
	 * [$range available {all, 1m, 3m, 6m, 1y}]
	 * @var string
	 */
	protected $range = 'all';

	/**
	 * [$filter available {open, closed, all}]
	 * @var string
	 */
	protected $filter = 'all';

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
					'filter' 	=> $this->getFilter(),
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

	/**
	 * @return [mixed $filter]
	 */
	public function getFilter()
	{
		return $this->filter;
	}

	/**
     * @param mixed $filter
     * @return $this
     */
    public function setFilter($filter)
    {
        $this->filter = $filter;

        return $this;
	}

}