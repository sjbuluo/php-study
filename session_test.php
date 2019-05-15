<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2019/5/15
 * Time: 23:05
 */
session_set_cookie_params(1 * 60);
session_save_path('./session_tmp/');
session_start();
$_SESSION['un'] = 'SJ';
echo session_name()."=".session_id();
?>

