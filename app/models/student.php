<?php
class Student extends User{


	protected $table = 'students';
	protected $primaryKey = 'id';
	


	public function college(){
		$this->hasOne('College');
	}



}
?>
