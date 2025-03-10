<?php

namespace src\core;

class Authenticator
{
    public static function attempt($user, $password)
    {
        if($user){
            if($password === $user['password']){
                static::login($user);
                return true;
            }
        }
        return false;
    }

    protected static function login($user)
    {
        $role = ($user['role'] === 'Admin') ? 'admin' : 'manager'; 
        Session::put('user', [
            'email' => $user['email'],
            'role' => $role,
        ]);
        Session::regen_id();
    }

    public static function logout()
    {
        Session::destroy();
    }

    public static function user()
    {
        return Session::get('user') ?? null;
    }

    public static function check()
    {
        return isset($_SESSION['user']);
    }

    public static function userRole()
    {
        return static::user()['role'] ?? '';
    }
}