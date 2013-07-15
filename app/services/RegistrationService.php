<?php
class RegistrationService {

	protected $studentRepo;
	protected $collegeRepo;

    /**
     * Sets the value of studentRepo.
     *
     * @param mixed $studentRepo the studentRepo
     *
     * @return self
     */
    public function setStudentRepo($studentRepo){
    	$this->studentRepo = $studentRepo;    	
    }

    /**
     * Sets the value of collegeRepo.
     *
     * @param mixed $collegeRepo the collegeRepo
     *
     * @return self
     */
    public function setCollegeRepo($collegeRepo){
    	$this->collegeRepo = $collegeRepo;
    }

	/**
	 * expects unvalidated Student object
	 */
	public function saveStudent(student $student){
        return $this->studentRepo->save($student);		
    }

    public function getColleges(){
      return $this->collegeRepo->findAll();
  }

  public function getBranches(){
    return $this->studentRepo->findAllBranches();

}
public function getYears(){
    return $this->studentRepo->findAllBranches();
}

public function getGeneralUserGroups(){
    return ConfigConst::$generalUserGroups;
}
}
?>