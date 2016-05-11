<?php

namespace userBundle\Services;

class register
{
    public function SignUp($loginVerification, $emailVerification)
    {
        $errors = [];
        $formOk = true;
        if (!empty($loginVerification)) {
            $errors['name'] = 'Pseudo est déjà utiliser';
            $formOk = false;
        }
        if (!empty($emailVerification)) {
            $errors['email'] = 'Email est déjà utiliser';
            $formOk = false;
        }
        if (!isset($_POST['nickname']) || !$_POST['nickname'] || strlen($_POST['nickname']) < 4) {
            $formOk = false;
            $errors['nickname'] = 'Pseudo est pas définie ou non valide';
        }
        if (!isset($_POST['email']) || !$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $formOk = false;
            $errors['email'] = 'email est pas définie ou non valide';
        }
        if (!isset($_POST['birthDate']) || !($_POST['birthDate'])) {
            $formOk = false;
            $errors['birthDate'] = 'Birth date est pas définie ou non valide';
        }

        if (!isset($_POST['password']) || !($_POST['password']) || strlen($_POST['password']) < 6 || $_POST['password'] != $_POST['passwordVerification']) {
            $formOk = false;
            $errors['password'] = 'Password est pas définie ou non valide';
        }
        if (!isset($_POST['passwordVerification']) || !($_POST['passwordVerification']) || strlen($_POST['passwordVerification']) < 6 || $_POST['passwordVerification'] != $_POST['password']) {
            $formOk = false;
            $errors['passwordVerification'] = 'Password Verification est pas définie ou non valide';
        }

        if ($formOk == true) {
            return (array('success' => true, "user" => $_POST));
        } else {
            http_response_code(400);
            return (array('success' => false, "errors" => $errors));
        }
    }
}