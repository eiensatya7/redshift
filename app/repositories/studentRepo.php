<?php
class StudentRepo implements UserRepoInterface{

	public function save(User $student){

		$student->save();
	}
}

?>