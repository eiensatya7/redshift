<?php
class Student extends Eloquent{


	protected $table = 'students';
	protected $primaryKey = 'id';
	protected $id;
	protected $name;
	protected $registration_id;
	protected $email;
	protected $password;
	protected $year;
	protected $branch;
	protected $active;


	public function __construct($id,$name,$registration_id,$email,$password,$year,$branch,$active){
		this->$id = $id;
		this->$name = $name;
		this->$registration_id = $registration_id;
		this->$email = $email;
		this->$password = $password;
		this->$year = $year;
		this->$branch = $branch;
		this->$active = $active;
	}


	public function college(){
		$this->hasOne('College');
	}



}
?>
