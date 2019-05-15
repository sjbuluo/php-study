<?php
/**
 * Created by IntelliJ IDEA.
 * User: 华硕
 * Date: 2019-05-15
 * Time: 11:27
 */
    foreach ($_POST as $key => $value) {
        echo $key.'->'.$value."\n";
    }
    foreach ($_REQUEST as $key => $value) {
    echo $key.'->'.$value."\n";
    }
    if (strlen($_GET['pwd']) > 6) {
       echo  'OK';
    } else {
        echo '太短';
    }
?>