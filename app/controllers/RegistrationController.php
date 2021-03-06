<?php

class RegistrationController extends BaseController{

	protected $registrationService;

	public function __construct(){

		Log::info('Constructor called');
		$this->registrationService = App::make("RegistrationService");
	}

	public function renderForm() {
		Log::info('In render form ');
		$colleges=$this->registrationService->getColleges();
		$branches=$this->registrationService->getBranches();
		$years=$this->registrationService->getYears();
		$generalUserGroups=$this->registrationService->getGeneralUserGroups();
		return View::make('registration_form')->with('colleges',$colleges)->with('branches',$branches)->with('years',$years)->with('groups',$generalUserGroups);
	}

	public function onSubmitForm() {

		if(Input::get('user_type') === 'student'){
			$student=new Student;
			$student->name(Input::get('name'));
			$student->registration_id(Input::get('registration_id'));
			$student->email(Input::get('email'));
			$student->password(Input::get('password'));
			$student->year(Input::get('year'));
			$student->branch(Input::get('branch'));
			$student->college_id(Input::get('college_id'));
			$registrationService->saveStudent($student);
		}else{
    		//return error 
		}


	}
}


?>