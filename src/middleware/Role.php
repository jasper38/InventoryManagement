<?php

namespace src\middleware;

use src\core\Authenticator;

class Role
{
    private array $allowedRoles;

    public function __construct(array $roles)
    {
        $this->allowedRoles = $roles;
    }

    public function handle()
    {
        if (!Authenticator::check() || !in_array(Authenticator::userRole(), $this->allowedRoles)) {
            redirect('/');
        }
    }
}