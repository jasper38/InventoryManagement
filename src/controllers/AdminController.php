<?php

namespace src\controllers;

use src\models\Admin;
use src\controllers\Controller;

class AdminController extends Controller
{
    private $adminModel;

    public function __construct()
    {
        $this->adminModel = new Admin();
    }

    public function dashboard()
    {
        $this->view('admin/dashboard.view.php');
    }
}