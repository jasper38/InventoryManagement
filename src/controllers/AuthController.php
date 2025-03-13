<?php

namespace src\controllers;

use src\core\Authenticator;
use src\repository\UserRepository;

class AuthController extends Controller
{
    private $userRepo;

    public function __construct()
    {
        $this->userRepo = new UserRepository();
    }

    public function index()
    {
        $this->view('auth/login.view.php');
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->userRepo->findByEmail($email);

        $signedIn = Authenticator::attempt($user, $password);

        if (!$signedIn) {
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