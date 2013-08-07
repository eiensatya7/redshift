<?php


class Student extends User{


	protected $table = 'students';
	protected $key = 'id';

	public function college(){
		$this->hasOne('College');
	}



}
?>
