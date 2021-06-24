<?php


class Validate
{
    public static function check_username($username)
    {
        $pattern = "/^[A-Za-z]{6,}$/";
        if (!preg_match($pattern,$username)){
            session_start();
            $_SESSION['username']="Username sai roi";
        }
    }

}
