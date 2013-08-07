<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface, Element {
	
	private $elementId;
	private $userType;

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.ie
	 *
	 * @return mixed
	 */

	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}


    /**
     * Gets the value of elementId.
     *
     * @return mixed
     */
    public function getElementId()
    {
    	return $this->elementId;
    }

    /**
     * Sets the value of elementId.
     *
     * @param mixed $elementId the elementId
     *
     * @return self
     */
    public function setElementId($elementId)
    {
    	$this->elementId = $elementId;

    	return $this;
    }

    /**
     * Gets the value of userType.
     *
     * @return mixed
     */
    public function getUserType()
    {
    	return $this->userType;
    }

    /**
     * Sets the value of userType.
     *
     * @param mixed $userType the userType
     *
     * @return self
     */
    public function setUserType($userType)
    {
    	$this->userType = $userType;

    	return $this;
    }

    
}
?>