<?php

namespace src\controllers;

use src\repository\AdminRepository;
use src\controllers\Controller;

class AdminController extends Controller
{
    private $admin;

    public function __construct()
    {
        $this->admin = new AdminRepository();
    }

    public function dashboard()
    {
        $this->view('admin/dashboard.view.php');
    }

    public function settings()
    {
        $this->view('admin/settings.view.php');
    }
}