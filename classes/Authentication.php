<?php

class Authentication implements AuthInterface, Model
{
    public function login()
    {
        return 'Login';
    }

    public function register()
    {
        return 'Register';
    }

    public function active()
    {
        return 'Active';
    }

    public function forgotPassword()
    {
        return 'Forgot Password';
    }

    public function resetPassword()
    {
        return 'Reset Password';
    }

    public function methodFromModel()
    {
        return 'methodFromModel';
    }

    public function add()
    {
        // TODO: Implement add() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function lists()
    {
        // TODO: Implement lists() method.
    }

    public function methodFromArray()
    {
        // TODO: Implement methodFromArray() method.
    }
}








