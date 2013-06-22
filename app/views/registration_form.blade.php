@extends('derived_layout.form_layout')


@section('title')
Registration Form
@stop
@section('form_content')
<link href="css/registration_form.css" rel="stylesheet" type="text/css" />
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
                    <ul class="button_ul">
                        <li class ="button_li">
                            <div class= "button_sel_active" onclick="loadForm('form_ref1')">
                                Student
                            </div>
                        </li>
                        <li class ="button_li" >
                            <div class= "button_sel" onclick="loadForm('form_ref2')">
                                Faculty
                            </div>
                        </li>
                        <li class ="button_li" >
                            <div class= "button_sel" onclick="loadForm('form_ref3')">
                                Recruiter
                            </div>
                        </li>
                    </ul>
                </div></td>
            </tr>
        </table>
        <br />
        <hr width="93%"/>
        <br />
        <div id= "formElements" >
            <form id= "form_ref1" >
                <table width="100%" border="0" cellpadding="10" cellspacing="0">
                    <tr>
                        <td width="28%" class="table_lable">Name &nbsp;&nbsp;|&nbsp;</td>
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
                    <input type="submit"  name= "submit" value = "Submit" class= "button_style1"/>
                    <input type="reset"  name= "reset" value = "Reset" class= "button_style1"/>
                </div>
            </form>
            <form id= "form_ref2" class="hiddenForm">
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
                    <input type="submit" name= "submit" value = "Submit" class= "button_style1"/>
                    <input type="reset" name= "reset" value = "Reset" class= "button_style1"/>
                </div>
            </form>
            <form id= "form_ref3"  class="hiddenForm" >
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
                    <input type="submit" name= "submit" value = "Submit" class= "button_style1"/>
                    <input type="reset" name= "reset" value = "Reset" class= "button_style1"/>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="bottom_ccd"></div>
@stop
