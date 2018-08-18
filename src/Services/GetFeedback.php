<?php

namespace Bhavinjr\Ekomi\Services;

use Bhavinjr\Ekomi\Services\Request\RequestPayload;

class GetFeedback extends RequestPayload
{
	const BASE_NAME = 'getFeedback';

	/**
	 * [$filter available {all, positive, critical}]
	 * @var string
	 */
	protected $filter = 'all';

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
	 * @var string
	 */
	protected $fields = 'date,order_id,rating,feedback,comment';

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
					'filter' 	=> $this->getFilter(),
					'caching' 	=> $this->getCaching(),
            		'range' 	=> $this->getRange(),
            		'fields' 	=> $this->getFields(),
            		'type' 		=> $this->getType(),
            		'charset' 	=> $this->getCharset()
			];
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