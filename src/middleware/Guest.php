<?php

namespace src\middleware;

use src\core\Authenticator;

class Guest 
{
    public function handle()
    {
        if (Authenticator::check()) {
            redirect(view_access(Authenticator::userRole()));
        }   
    }
}