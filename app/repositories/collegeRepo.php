<?php

class CollegeRepo{

	public function save($collegeArr){
		$college= new College;
		$college->fill($collegeArr);
		$college->save();
	}

	public function findAll(){
		return College::all();
	}

}

?>