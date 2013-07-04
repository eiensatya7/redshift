<?php

class College extends Eloquent{
	protected $table = 'colleges';
	protected $primaryKey = 'id';
	protected $id;
	protected $name;
	protected $alias;



	public function __construct($id,$name,$alias){
		this->$id = $id;
		this->$name = $name;
		this->$alias = $alias;
	}


	public function students(){

		$this->belongsTo('Student');
	}


}


?>