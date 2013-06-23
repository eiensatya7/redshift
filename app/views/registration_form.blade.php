@extends('derived_layout.form_layout')

@section('title')
Registration Form
@stop
@section('form_content')
<script type="text/javascript" src="js/vendor/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="js/vendor/jquery.validationEngine.js"></script>

<link href="css/vendor/validationEngine.css" rel="stylesheet" type="text/css" />
<link href="css/registration_form.css" rel="stylesheet" type="text/css" />

<script>
	$(document).ready(function() {

		$("#radioset").buttonset();
		$(".button_style_ui").button();
		$("#form_ref1").validationEngine();

		if ($("#radio1").prop('checked')) {
			$("#form_ref1").show();
			$("#form_ref2").hide();
			$("#form_ref3").hide();
		}
		if ($("#radio2").prop('checked')) {
			$("#form_ref1").hide();
			$("#form_ref2").show();
			$("#form_ref3").hide();
		}

		if ($("#radio3").prop('checked')) {
			$("#form_ref1").hide();
			$("#form_ref2").hide();
			$("#form_ref3").show();
		}

		$("#radio1").click(function() {
			$("#form_ref1").show('slow');
			$("#form_ref2").hide();
			$("#form_ref3").hide();
		});
		$("#radio2").click(function() {
			$("#form_ref1").hide();
			$("#form_ref2").show('slow');
			$("#form_ref3").hide();
		});
		$("#radio3").click(function() {
			$("#form_ref1").hide();
			$("#form_ref2").hide();
			$("#form_ref3").show('slow');
		});

	});
</script>
<div id= "center_ccd">
    <div id = "center_cccd">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="49%">
                <div id="left_top_ccd">
                    Registration Form
                </div></td>
                <td width="51%">
                <div id="form_sel">
                    <div id="radioset">
                        <input type="radio" id="radio1" name="radio" checked="checked">
                        <label for="radio1">
                            <div class="button_text_style2">
                                Student
                            </div></label>
                        <input type="radio" id="radio2" name="radio" >
                        <label for="radio2">
                            <div class="button_text_style2">
                                Faculty
                            </div></label>
                        <input type="radio" id="radio3" name="radio">
                        <label for="radio3">
                            <div class="button_text_style2">
                                Recriter
                            </div></label>
                    </div>
                </div></td>
            </tr>
        </table>
        <br />
        <hr width="93%"/>
        <br />
        <div id= "formElements" >
            <form id= "form_ref1" class="form_style1" action="#">
                <table width="100%" border="0" cellpadding="10" cellspacing="0">
                    <tr>
                        <td width="28%" class="table_lable">Name &nbsp;&nbsp;|&nbsp;</td>
                        <td width="72%" class="table_field">
                        <input name="name" id="form_ref1_name" type="text" size="30" />
                        </td>
                    </tr>

                    <tr>
                        <td width="28%" class="table_lable">Registration ID&nbsp;&nbsp;|&nbsp;</td>
                        <td width="72%" class="table_field">
                        <input name="regID"  id="form_ref1_regID" type="text" size="30" />
                        </td>
                    </tr>
                    <tr>
                        <td width="28%" class="table_lable">Email&nbsp;&nbsp;|&nbsp;</td>
                        <td width="72%" class="table_field">
                        <input name="email" iid="form_ref1_email" type="text" size="30" class="validate[required,custom[email]]"/>
                        </td>
                    </tr>
                    <tr>
                        <td width="28%" class="table_lable">Password &nbsp;&nbsp;|&nbsp;</td>
                        <td width="72%" class="table_field">
                        <input name="password" id="form_ref1_password" type="password" size="30" class="validate[required,custom[passwd]" />
                        </td>
                    </tr>
                    <tr>
                        <td width="28%" class="table_lable">Retype Password &nbsp;&nbsp;|&nbsp;</td>
                        <td width="72%" class="table_field">
                        <input name="retype_password" id="form_ref1_retype_password" type="password" size="30" class="validate[required,custom[passwd]"/>
                        </td>
                    </tr>
                    <tr>
                        <td width="28%" class="table_lable">College&nbsp; &nbsp;|&nbsp;</td>
                        <td width="72%" class="table_field">
                        <select name="college" id="form_ref1_college">
                            <option value="select" selected="selected">--select--</option>
                            <option value="ciet">CIET</option>
                            <option value="giet">GIET</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td width="28%" class="table_lable">Year&nbsp;&nbsp;|&nbsp;</td>
                        <td width="72%" class="table_field">
                        <input id="form_ref1_year" name="year" type="text" size="30" />
                        </td>
                    </tr>
                    <tr>
                        <td width="28%" class="table_lable">Branch&nbsp;&nbsp;|&nbsp;</td>
                        <td width="72%" class="table_field">
                        <input id="form_ref1_branch" name="branch" type="text" size="30" />
                        </td>
                    </tr>
                </table>
                <br/>
                <br/>
                <div id="bottom_button_ccd">
                    <input type="submit"  name= "submit" value = "Submit" class= "button_style_ui button_text_style2"/>
                    <input type="reset"  name= "reset" value = "Reset" class= "button_style_ui button_text_style2"/>
                </div>
            </form>
            <form id= "form_ref2" class="form_style1">
                <table width="100%" border="0" cellpadding="10" cellspacing="0">
                    <tr>
                        <td width="28%" class="table_lable">Name2 &nbsp;&nbsp;|&nbsp;</td>
                        <td width="72%" class="table_field">
                        <input name="name" type="text" size="30" />
                        </td>
                    </tr>
                    <tr>
                        <td width="28%" class="table_lable">Name&nbsp;&nbsp;|&nbsp;</td>
                        <td width="72%" class="table_field">
                        <input name="name" type="text" size="30" />
                        </td>
                    </tr>
                    <tr>
                        <td width="28%" class="table_lable">Age &nbsp;&nbsp;|&nbsp;</td>
                        <td width="72%" class="table_field">
                        <input name="name" type="text" size="30" />
                        </td>
                    </tr>
                    <tr>
                        <td width="28%" class="table_lable">Grade&nbsp; &nbsp;|&nbsp;</td>
                        <td width="72%" class="table_field">
                        <input name="name" type="text" size="30" />
                        </td>
                    </tr>
                    <tr>
                        <td width="28%" class="table_lable">Class &nbsp;&nbsp;|&nbsp;</td>
                        <td width="72%" class="table_field">
                        <input name="name" type="text" size="30" />
                        </td>
                    </tr>
                    <tr>
                        <td width="28%" class="table_lable">Description &nbsp;&nbsp;|&nbsp;</td>
                        <td width="72%" class="table_field">                        <textarea name="textarea" id="textarea" cols="25" rows="5"></textarea></td>
                    </tr>
                    <tr>
                        <td width="28%" class="table_lable">NewsLetter&nbsp; &nbsp;|&nbsp;</td>
                        <td width="72%" class="table_field">
                        <input name="name" type="text" size="30" />
                        </td>
                    </tr>
                </table>
                <br/>
                <br/>
                <div id="bottom_button_ccd">
                    <input type="submit" name= "submit" value = "Submit" class= "button_style_ui button_text_style2"/>
                    <input type="reset" name= "reset" value = "Reset" class= "button_style_ui button_text_style2"/>
                </div>
            </form>
            <form id= "form_ref3" class="form_style1">
                <table width="100%" border="0" cellpadding="10" cellspacing="0">
                    <tr>
                        <td width="28%" class="table_lable">Name3 &nbsp;&nbsp;|&nbsp;</td>
                        <td width="72%" class="table_field">
                        <input name="name" type="text" size="30" />
                        </td>
                    </tr>
                    <tr>
                        <td width="28%" class="table_lable">Name&nbsp;&nbsp;|&nbsp;</td>
                        <td width="72%" class="table_field">
                        <input name="name" type="text" size="30" />
                        </td>
                    </tr>
                    <tr>
                        <td width="28%" class="table_lable">Age &nbsp;&nbsp;|&nbsp;</td>
                        <td width="72%" class="table_field">
                        <input name="name" type="text" size="30" />
                        </td>
                    </tr>
                    <tr>
                        <td width="28%" class="table_lable">Grade&nbsp; &nbsp;|&nbsp;</td>
                        <td width="72%" class="table_field">
                        <input name="name" type="text" size="30" />
                        </td>
                    </tr>
                    <tr>
                        <td width="28%" class="table_lable">Class &nbsp;&nbsp;|&nbsp;</td>
                        <td width="72%" class="table_field">
                        <input name="name" type="text" size="30" />
                        </td>
                    </tr>
                    <tr>
                        <td width="28%" class="table_lable">Description &nbsp;&nbsp;|&nbsp;</td>
                        <td width="72%" class="table_field">                        <textarea name="textarea" id="textarea" cols="25" rows="5"></textarea></td>
                    </tr>
                    <tr>
                        <td width="28%" class="table_lable">NewsLetter&nbsp; &nbsp;|&nbsp;</td>
                        <td width="72%" class="table_field">
                        <input name="name" type="text" size="30" />
                        </td>
                    </tr>
                </table>
                <br/>
                <br/>
                <div id="bottom_button_ccd">
                    <input type="submit" name= "submit" value = "Submit" class= "button_style_ui button_text_style2"/>
                    <input type="reset" name= "reset" value = "Reset" class= "button_style_ui button_text_style2"/>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="bottom_ccd"></div>
@stop
