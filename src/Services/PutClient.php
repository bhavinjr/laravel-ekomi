<?php

namespace Bhavinjr\Ekomi\Services;

use Bhavinjr\Ekomi\Services\Request\RequestPayload;

class PutClient extends RequestPayload
{
	const BASE_NAME = 'putClient';

	/**
	 * @var [mixed]
	 */
	protected $clientId;

	/**
	 * @var [string]
	 */
	protected $email;

	/**
	 * @var [type]
	 */
	protected $locale;

	/**
	 * @var [string]
	 */
	protected $screenName;

	/**
	 * @var [string]
	 */
	protected $firstName;

	/**
	 * @var [string]
	 */
	protected $lastName;

	/**
	 * @var [string]
	 */
	protected $country;

	/**
	 * @var [string]
	 */
	protected $city;

	/**
	 * @var [text]
	 */
	protected $zip;

	/**
	 * [$gender {m,f,t]
	 * @var [string]
	 */
	protected $gender;

	/**
	 * [$birthdate YYYY-MM-DD]
	 * @var [date]
	 */
	protected $birthdate;

	/**
	 * [$metadata serialized or json]
	 * @var [string]
	 */
	protected $metadata;

	/**
	 * [$update true to update false for new]
	 * @var [boolean]
	 */
	protected $update = false;

	public function getBaseName()
	{
		return self::BASE_NAME;
	}

	public function getPayload()
	{
		return  [	
					'client_id' => $this->getClientId(),
            		'email' 	=> $this->getEmail(),
            		'locale' 	=> $this->getLocale(),
            		'screenname'=> $this->getScreenName(),
            		'firstname'	=> $this->getFirstName(),
            		'lastname'	=> $this->getLastName(),
            		'country'	=> $this->getCountry(),
            		'city'		=> $this->getCity(),
            		'zip'		=> $this->getZip(),
            		'gender'	=> $this->getGender(),
            		'birthdate'	=> $this->getBirthdate(),
            		'metadata'	=> $this->getMetadata(),
            		'update'	=> $this->getUpdate(),
            		'type' 		=> $this->getType(),
            		'charset' 	=> $this->getCharset()
			];
	}

	/**
	 * @return [mixed $clientId]
	 */
	public function getClientId()
	{
		return $this->clientId;
	}

	/**
     * @param mixed $clientId
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
	}

	/**
	 * @return [mixed $email]
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
     * @param mixed $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
	}

	/**
	 * @return [mixed $locale]
	 */
	public function getLocale()
	{
		return $this->locale;
	}

	/**
     * @param mixed $locale
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
	}

	/**
	 * @return [mixed $screenName]
	 */
	public function getScreenName()
	{
		return $this->screenName;
	}

	/**
     * @param mixed $screenName
     * @return $this
     */
    public function setScreenName($screenName)
    {
        $this->screenName = $screenName;

        return $this;
	}

	/**
	 * @return [mixed $firstName]
	 */
	public function getFirstName()
	{
		return $this->firstName;
	}

	/**
     * @param mixed $firstName
     * @return $this
     */
	public function setFirstName($firstName)
	{
		$this->firstName = $firstName;

		return $this;
	}

	/**
	 * @return [mixed $lastName]
	 */
	public function getLastName()
	{
		return $this->lastName;
	}

	/**
     * @param mixed $lastName
     * @return $this
     */
	public function setLastName($lastName)
	{
		$this->lastName = $lastName;

		return $this;
	}

	/**
	 * @return [mixed $country]
	 */
	public function getCountry()
	{
		return $this->country;
	}

	/**
     * @param mixed $country
     * @return $this
     */
	public function setCountry($country)
	{
		$this->country = $country;

		return $this;
	}

	/**
	 * @return [mixed $city]
	 */
	public function getCity()
	{
		return $this->city;
	}

	/**
     * @param mixed $city
     * @return $this
     */
	public function setCity($city)
	{
		$this->city = $city;

		return $this;
	}

	/**
	 * @return [mixed $zip]
	 */
	public function getZip()
	{
		return $this->zip;
	}

	/**
     * @param mixed $zip
     * @return $this
     */
	public function setZip($zip)
	{
		$this->zip = $zip;

		return $this;
	}

	/**
	 * @return [mixed $gender]
	 */
	public function getGender()
	{
		return $this->gender;
	}

	/**
     * @param mixed $gender
     * @return $this
     */
	public function setGender($gender)
	{
		$this->gender = $gender;

		return $this;
	}

	/**
	 * @return [mixed $birthdate]
	 */
	public function getBirthdate()
	{
		return $this->birthdate;
	}

	/**
     * @param mixed $birthdate
     * @return $this
     */
	public function setBirthdate($birthdate)
	{
		$this->birthdate = $birthdate;

		return $this;
	}

	/**
	 * @return [mixed $metadata]
	 */
	public function getMetadata()
	{
		return $this->metadata;
	}

	/**
     * @param mixed $metadata
     * @return $this
     */
	public function setMetadata($metadata)
	{
		$this->metadata = $metadata;

		return $this;
	}

	/**
	 * @return [mixed $update]
	 */
	public function getUpdate()
	{
		return $this->update;
	}

	/**
     * @param mixed $update
     * @return $this
     */
	public function setUpdate($update)
	{
		$this->update = $update;

		return $this;
	}
}