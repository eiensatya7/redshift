<!DOCTYPE html>
<html lang="en">
<head>
	<title>Super User</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@include('main_layout.main_includes')
	<link href="css/redshift-form.css" rel="stylesheet" media="screen"> 

</head>
<body>
	@include('main_layout.main_header_layout')

	<div class="container">
		<br/>
		<br/>		
		<div class="row">
			<div class ="span8">
				
				<form class="form-horizontal" id="group_form" name="group_form">
					<input name="ctrl" type="hidden" value="group_ctrl"/>
					<fieldset>
						<legend>
							Add Group
						</legend>
						<div id="group_form_message"></div>
						<div class="contol-group">
							<label class="control-label" for="group_name">Group Name</label>
							<div class="controls">
								<input type="text" id="group_name" name="group_name" placeholder="Enter Group Name"/>
								
							</div>
						</div>

						<div class="contol-group">							<label class="control-label" for="mainPermissions">Permissions</label>
							<div class="controls">
								@foreach($mainPermissions as $permission)
								<label class="checkbox">
									<input id ="main_permissions" name ="main_permissions[]" type="checkbox" value="{{$permission}}">{{$permission}}</input>
								</label>
								
								@endforeach
								
							</div>
						</div>
						<div class="redshift-form-actions">
							<button class="btn btn-primary redshift-submit" id="group_form_submit">Submit</button>
						</div>
					</fieldset>
				</form>

			</div>
			<div class="span4" id="group_form_right">
				<legend>
					Groups
				</legend>
				
				<ul class="nav nav-pills nav-stacked">
					@foreach($groups as $group)
					<li><a href="#">{{$group->name}}</a></li>
					@endforeach

				</ul>
			</div>
		</div>
		

	</div>
</div>
<div class="container">
	<div class="row">
		<div class ="span8">

			<form class="form-horizontal" id="college_form" name="college_form">
				<input name="ctrl" type="hidden" value="college_ctrl"/>
				<fieldset>
					<legend>
						Add College
					</legend>
					<div id="college_form_message"></div>
					<div class="contol-group">
						<label class="control-label" for="college_name">College Name</label>
						<div class="controls">
							<input type="text" id="college_name" name="college_name" placeholder="Enter College Name"/>

						</div>
					</div>
					<div class="contol-group">
						<label class="control-label" for="college_alias">College Alias</label>
						<div class="controls">
							<input type="text" id="college_alias" name="college_alias" placeholder="Enter College Abbrivation"/>

						</div>
					</div>


					<div class="redshift-form-actions">
						<button class="btn btn-primary redshift-submit" id="college_form_submit">Submit</button>
					</div>
				</fieldset>
			</form>

		</div>
		<div class="span4" id="college_form_right">
			<legend>
				Colleges
			</legend>

			
		</div>
	</div>


</div>
<div class="container">
	<div class="row">
		<div class ="span8">

			<form class="form-horizontal" id="year_form" name="year_form">
				<input name="ctrl" type="hidden" value="year_ctrl"/>
				<fieldset>
					<legend>
						Add year
					</legend>
					<div id="year_form_message"></div>
					
					<div class="contol-group">
						<label class="control-label" for="year_alias">Year Alias</label>
						<div class="controls">
							<input type="text" id="year_alias" name="year_alias" placeholder="Enter Year Abbrivation"/>

						</div>
					</div>


					<div class="redshift-form-actions">
						<button class="btn btn-primary redshift-submit" id="year_form_submit">Submit</button>
					</div>
				</fieldset>
			</form>

		</div>
		<div class="span4" id="year_form_right">
			<legend>
				Years
			</legend>

			
		</div>
	</div>


</div>
<div class="container">
	<div class="row">
		<div class ="span8">

			<form class="form-horizontal" id="branch_form" name="branch_form">
				<input name="ctrl" type="hidden" value="branch_ctrl"/>
				<fieldset>
					<legend>
						Add branch
					</legend>
					<div id="branch_form_message"></div>
					<div class="contol-group">
						<label class="control-label" for="branch_name">Branch Name</label>
						<div class="controls">
							<input type="text" id="branch_name" name="branch_name" placeholder="Enter Branch Name"/>

						</div>
					</div>
					<div class="contol-group">
						<label class="control-label" for="branch_alias">Branch Alias</label>
						<div class="controls">
							<input type="text" id="branch_alias" name="branch_alias" placeholder="Enter Branch Abbrivation"/>

						</div>
					</div>


					<div class="redshift-form-actions">
						<button class="btn btn-primary redshift-submit" id="branch_form_submit">Submit</button>
					</div>
				</fieldset>
			</form>

		</div>
		<div class="span4" id="branch_form_right">
			<legend>
				Branches
			</legend>

			
		</div>
	</div>


</div>
@include('main_layout.main_footer_layout')



<script type="text/javascript">

function addSuccessMessageFromJson(element,classtoadd,data){	


	if(data.level == 's'){
		$(element).removeClass().addClass(classtoadd).html(data.message);

	}else if(data.level == 'w'){
		$(element).removeClass().addClass("alert").html(data.message);

	}
	else if(data.level == 'e'){
		$(element).removeClass().addClass("alert alert-error").html(data.message);

	}
	else{
		$(element).removeClass().addClass("alert alert-info").html(data.message);

	}
}         
function refreshRight(element){
	/*TODO*/
}
function processAjax(event,url,method,formname){

	$(".redshift-submit").text("processing..").addClass('disabled');
	event.preventDefault();

	formMessageTag=formname+'_message';
	formRightTag=formname+'_right';

	$.ajax({

		url : url,
		data : $(formname).serialize(),
		type : method,
		dataType :'json',	


	})
	.done(function(data){
		addSuccessMessageFromJson(formMessageTag,"alert alert-success",data);
		$(".redshift-submit").text("submit").removeClass('disabled');
		refreshRight(formRightTag);

	})
	.fail(function(data){
		$(formMessageTag).removeClass().addClass("alert alert-error").html("internal error occoured");
		$(".redshift-submit").text("submit").removeClass('disabled');


	});

}



$(document).ready(function() {
	$("#group_form").submit(function(event){

		processAjax(event,'superUserAsc','POST',"#group_form");
	});
	
	$("#college_form").submit(function(event){

		processAjax(event,'superUserAsc','POST',"#college_form");
	});

	$("#year_form").submit(function(event){
		processAjax(event,'superUserAsc','POST',"#year_form");
	});

	$("#branch_form").submit(function(event){
		processAjax(event,'superUserAsc','POST',"#branch_form");
	});





});

</script>

</body>
</html>