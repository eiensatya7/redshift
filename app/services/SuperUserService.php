<?php
class SuperUserService {

    protected $collegeRepo;
    protected $studentRepo;
    
     /**
     * Sets the value of collegeRepo.
     *
     * @param mixed $collegeRepo the collegeRepo
     *
     * @return self
     */
     public function setCollegeRepo($collegeRepo)
     {
        $this->collegeRepo = $collegeRepo;

        return $this;
    }

      /**
     * Sets the value of studentRepo.
     *
     * @param mixed $studentRepo the studentRepo
     *
     * @return self
     */
      public function setStudentRepo($studentRepo)
      {
        $this->studentRepo = $studentRepo;

        return $this;
    }





    public function getGroups(){
    	return Sentry::getGroupProvider()->findAll();
    }

    public function saveGroup($groupName,$assosiatedPermArray){

        Log::info('handling control to sentry');
        $group=Sentry::getGroupProvider()->create(array(
            'name' => $groupName,
            'permissions' => $assosiatedPermArray
            ));
        Log::info('control regain from sentry');
        return $group->id;
    }

    public function saveCollege($college){
       $this->collegeRepo->save($college);
   }

   public function saveYear($year){
       return $this->studentRepo->saveYear($year);
   }

   public function saveBranch($branch){
       $this->studentRepo->saveBranch($branch);
   }



   public function getMainPermissions(){
       return ConfigConst::$mainPermissions;
   }





}


?>