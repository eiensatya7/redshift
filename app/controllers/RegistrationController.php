<?php

class RegistrationController extends BaseController {

    public function registerForm() {

        return View::make('registration_form');
    }

    public function submitForm() {

    }

}
?>