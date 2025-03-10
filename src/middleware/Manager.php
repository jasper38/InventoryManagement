<?php

namespace src\middleware;

use src\core\Authenticator;

class Manager 
{
    public function handle()
    {
        if (!Authenticator::check() || Authenticator::userRole() !== 'manager') {
            redirect('/');
        }
    }
}