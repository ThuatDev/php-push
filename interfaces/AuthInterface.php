<?php
interface AuthInterface extends Business, ArrayStruct {
    const _MSG_TEMPLATE = [];

    public function login();

    public function register();

    public function forgotPassword();

    public function resetPassword();

    public function active();
}