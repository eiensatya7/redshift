<?php


class Student extends User{


	protected $table = 'students';
	protected $key = 'id';
	public static $unguarded = true;

	public function college(){
		$this->hasOne('College');
	}



}
?>
