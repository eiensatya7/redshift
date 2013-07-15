<?php

class SuperUserController extends BaseController{


	protected $superUserService;

	public function __construct(){
		Log::info('Constructor called');
		$this->superUserService = App::make("SuperUserService");
	}

	public function renderForm(){
		Log::info('In render form ');
		$permissions=$this->superUserService->getMainPermissions();
		$groups=$this->superUserService->getGroups();

		
		return View::make('superuser_cpanel')->with('mainPermissions',$permissions)->with('groups',$groups);

	}
	public function ajaxGet(){
		if(Request::ajax()){
			$ctrl=Input::get('ctrl');
			if($ctrl == 'get_groups'){
				//TODO
			}

		}
		return Response::error('404');

	}

	public function ajaxPost(){

		if(Request::ajax()){


			$ctrl=Input::get('ctrl');
			$resp= new ResponseMessage;
			Log::info('on submit form : crtl ='.$ctrl."=");
			if($ctrl == 'group_ctrl'){
				$groupName=Input::get('group_name');
				$mainPermissions=Input::get('main_permissions');
				$assosiatedPermArray=array_fill_keys($mainPermissions, 1);
				$id=$this->superUserService->saveGroup($groupName,$mainPermissions);
				
				if(is_null($id)){
					$resp->level='e';
					$resp->message='Failed to save Group';
				}else{
					$resp->level='s';
					$resp->message='Group '.$groupName.' saved successfully with id : '.$id;
				}				
				return Response::json($resp);

			}else if($ctrl == 'college_ctrl'){
				$alias=Input::get('college_alias');
				$college= array(
					'name' => Input::get('college_name'),
					'alias' => $alias
					);				
				$this->superUserService->saveCollege($college);
				$resp->level='s';
				$resp->message='College '.$alias.' saved successfully';
				return Response::json($resp);




			}else if($ctrl == 'year_ctrl'){
				$name=Input::get('year_alias');

				Log::info('this is year_ctrl '+ $name);		
				$year=array(
					'alias' => $name,
					);			
				$this->superUserService->saveCollege($year);
				$resp->level='s';
				$resp->message='Year '.$name.' saved successfully';
				return Response::json($resp);



			}else if($ctrl == 'branch_ctrl'){
				$alias=Input::get('branch_alias');
				$branch= array(
					'name' => Input::get('branch_name'),
					'alias' => $alias

					);			
				$this->superUserService->saveBranch($branch);
				$resp->level='s';
				$resp->message='Branch '.$alias.' saved successfully';
				return Response::json($resp);



			}
		}

		return App::abort(404, 'Page not found');;





		
	}

}

?>