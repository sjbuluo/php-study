<?php
/**
 * Created by IntelliJ IDEA.
 * User: 华硕
 * Date: 2019-05-15
 * Time: 15:36
 */
print_r(array(1, 2, 3));
print_r(array(array(1, 2), array(3, 4)));

$arr = array('A', 'C', 'B');
list($a, $b, $c) = $arr;
print $a;
print $b;
print $c;
sort($arr, 0);
print_r($arr);
?>