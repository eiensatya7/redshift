<?php
class ResponseMessage{
	public $message;
	public $level;


    /**
     * Gets the value of message.
     *
     * @return mixed
     */
    public function getMessage()
    {
    	return $this->message;
    }

    /**
     * Sets the value of message.
     *
     * @param mixed $message the message
     *
     * @return self
     */
    public function setMessage($message)
    {
    	$this->message = $message;

    	return $this;
    }

    /**
     * Gets the value of level.
     *
     * @return mixed
     */
    public function getLevel()
    {
    	return $this->level;
    }

    /**
     * Sets the value of level.
     *
     * @param mixed $level the level
     *
     * @return self
     */
    public function setLevel($level)
    {
    	$this->level = $level;

    	return $this;
    }
}
?>