<?php
/**
 * Created by IntelliJ IDEA.
 * User: 华硕
 * Date: 2019-05-15
 * Time: 19:42
 */
    setcookie('TMCookie', 'www.sun.com');
    setcookie('TMCookie', 'www.sun.com', time() + 60);
    setcookie('TMCookie', 'www.sun.com', time() + 3600, '/tm/');
    print_r($_COOKIE);
    if(isset($_COOKIE['TMCookie'])) {

    }
?>

