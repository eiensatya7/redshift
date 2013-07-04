<?php

class College extends Eloquent{
	protected $table = 'colleges';
	protected $primaryKey = 'id';
	

	public function students(){

		$this->belongsTo('Student');
	}


}


?>