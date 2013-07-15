<?php
class StudentRepo{

	public function save($studentArr){
		$student=new Student();
		$student->fill($studentArr);
		$student->save();
	}


	public function saveYear($yearArr){
		$year= new Year;
		$year->fill($yearArr);
		$year->save();
	}

	

	public function findAllYears(){
		return Year::all();
	}
	public function findAllBranches(){
		return Branch::all();
	}
	public function saveBranch($branchArr){
		$branch= new Branch();
		$branch->fill($branchArr);
		$branch->save();
	}
}

?>