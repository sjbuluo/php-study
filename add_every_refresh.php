<?php
/**
 * Created by IntelliJ IDEA.
 * User: 华硕
 * Date: 2019-05-16
 * Time: 17:57
 */
    $count_file = fopen('count.txt', 'r');
    $count = fgets($count_file);
    $count = $count == null ? 0 : (int) $count;
    echo ++$count;
    fclose($count_file);
    $count_file = fopen('count.txt', 'w');
    fwrite($count_file, $count);
    fclose($count_file);
?>