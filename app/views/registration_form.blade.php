<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registeration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('main_layout.main_includes')
    <link href="css/redshift-form.css" rel="stylesheet" media="screen"> 
</head>
<body>
    @include('main_layout.main_header_layout')

    <div class="container redshift-container-addon">

      <br/>

      <div class="row">
        <div class="span8 redshift-center">
            <form class="form-horizontal redshift-form-horizontal-addon" action="/register">
                <?php echo Form::token()?>
                <fieldset>
                    <legend><div class="redshift-legend">Registration Form</div><div class="pull-right"></div></legend>
                    <br />


                    <div class="contol-group">
                        <label class="redshift-control-label" for="college">User Type</label>
                        <div class="redshift-controls">
                            <select id="user_type" name="user_type">         
                                <option value="student">Student</option>
                                <option value="faculty">Faculty</option>
                                <option value="admin">Admin</option>
                            </select>


                        </div>
                    </div>
                    <br />
                    <div class="contol-group">
                        <label class="redshift-control-label" for="name">Name</label>
                        <div class="redshift-controls">
                            <input type="text" id="name" name ="name" placeholder="Enter Name">

                        </div>
                    </div>
                    <br />
                    <div class="contol-group">
                        <label class="redshift-control-label" for="reg_id">Registration ID</label>
                        <div class="redshift-controls">
                            <input type="text" id="reg_id" name ="reg_id" placeholder="Enter Registration ID">

                        </div>
                    </div>
                    <br />



                    <div class="contol-group">
                        <label class="redshift-control-label" for="email">Email</label>
                        <div class="redshift-controls">
                            <input type="text" id="email" name ="email" placeholder="Enter Email">

                        </div>
                    </div>
                    <br />
                    <div class="contol-group">
                        <label class="redshift-control-label" for="password">Password</label>
                        <div class="redshift-controls">
                            <input type="password" id="password" name ="password" placeholder="Enter Password">

                        </div>
                    </div>
                    <br />
                    <div class="contol-group">
                        <label class="redshift-control-label" for="retype_password">Retype Password</label>
                        <div class="redshift-controls">
                            <input type="password" id="retype_password" name ="retype_password" placeholder="Retype Password">

                        </div>
                    </div>
                    <br />
                    <div class="contol-group">
                        <label class="redshift-control-label" for="college">College</label>
                        <div class="redshift-controls">
                            <select id="college" name="college">                         
                                <option value="1" title="Chaitanya Institute O">CIET</option>
                                <option value="2" title="Chaitanya Institute O">CIET</option>
                                <option value="3" title="Chaitanya Institute O">CIET</option>
                            </select>


                        </div>
                    </div>
                    <br />
                    <div class="contol-group">
                        <label class="redshift-control-label" for="year">Year</label>
                        <div class="redshift-controls">
                            <select id="year" name="year">
                                <option value="1">I year</option>
                                <option value="2">II year</option>
                                <option value="3">III year</option>
                                <option value="4">IV year</option>
                                <option value="5">Na</option>
                            </select>

                        </div>
                    </div>
                    <br />
                    <div class="contol-group">
                        <label class="redshift-control-label" for="branch">Branch</label>
                        <div class="redshift-controls">
                            <select id="year" name="year">
                                <option value="cse">cse</option>
                                <option value="cse">cse</option>
                                <option value="cse">cse</option>
                                <option value="cse">cse</option>
                            </select>

                        </div>
                    </div>


                    <hr />
                    <div class="redshift-form-actions pull-right">
                        <button type="submit" class="btn btn-primary">Register</button>
                        <button type="button" class="btn">Cancel</button>
                    </div>

                </fieldset>
                <br />
            </form>

        </div>
    </div>


</div>
@include('main_layout.main_footer_layout')



<script type="text/javascript">

$(document).ready(function(){

    $("#user_type").change(function(){

        if($(this).val() == 'faculty'){        
            window.location.href='faculty.htm';
        }
        else if($(this).val() == 'admin'){
            window.location.href='admin.htm';
        }
    });


    var nameField = new LiveValidation("name",{wait : 500});
    nameField.add(Validate.Presence,{failureMessage: "Please enter name" });

    var regidField = new LiveValidation("reg_id",{wait : 500});
    regidField.add(Validate.Presence,{failureMessage: "Please enter Registration ID" });

    var emailField = new LiveValidation("email",{wait : 500});
    emailField.add(Validate.Presence,{failureMessage: "Please enter email" });
    emailField.add(Validate.Email,{failureMessage: "Please enter a valid email" });

    var passwordField = new LiveValidation("password",{wait : 500});
    passwordField.add(Validate.Presence,{failureMessage: "Please enter password" });

    var retypePasswordField = new LiveValidation("retype_password",{wait : 500});
    retypePasswordField.add(Validate.Presence,{failureMessage: "Please retype password" });

    retypePasswordField.add(Validate.Confirmation,{match : "password",failureMessage: "Passwords dosen't match" });


});


</script>

</body>
</html>