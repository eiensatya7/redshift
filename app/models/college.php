<?php

class College extends Eloquent implements Element{
	protected $table = 'colleges';
	protected $key = 'id';
	private $elementId;
    protected $guarded = array('id', 'created_at','updated_at');


	public function students(){

		$this->belongsTo('Student');
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


}


?>