<?php

namespace src\controllers;

use src\core\Authenticator;
use src\models\User;

class AuthController extends Controller
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function index()
    {
        $this->view('auth/login.view.php');
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->userModel->findByEmail($email);

        $signedIn = Authenticator::attempt($user, $password);

        if(!$signedIn){
            redirect('/');
        }

        redirect(view_access(Authenticator::userRole()));
    }

    public function logout()
    {
        Authenticator::logout();
        redirect('/');
    }
}