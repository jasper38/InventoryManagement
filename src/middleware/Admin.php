<?php

namespace src\middleware;

use src\core\Authenticator;

class Admin 
{
    public function handle()
    {
        if (!Authenticator::check() || Authenticator::userRole() !== 'admin') {
            redirect('/');
        }
    }
}