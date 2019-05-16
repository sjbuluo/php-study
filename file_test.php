<?php
/**
 * Created by IntelliJ IDEA.
 * User: 华硕
 * Date: 2019-05-16
 * Time: 15:22
 */
    define('HH', "\n");
//    echo readfile('test.txt').HH;
//    echo file('test.txt')[0].HH;
//    echo file_get_contents('test.txt').HH;

    $test_txt = fopen('test.txt', 'r');
    while(($line = fgets($test_txt)) != null) {
        echo $line;
    }
    fclose($test_txt);

    echo HH;
    echo HH;

    $test_txt = fopen('test.txt', 'r');
    while(($line = fgetss($test_txt)) != null) {
        echo $line;
    }
    fclose($test_txt);

    echo HH;

    $test_txt = fopen('test.txt', 'r');
    while(($chr = fgetc($test_txt))) {
        echo $chr;
    }
    fclose($test_txt);

    echo HH;
    echo HH;

    $test_txt = fopen('test.txt', 'r');
    echo fread($test_txt, 15);
    fclose($test_txt);

    echo HH;

    $test_txt = fopen('test.txt', 'a');
    fwrite($test_txt, "你好\n");
    fwrite($test_txt, "你好\n", 3);
    fclose(($test_txt));

    file_put_contents('test.txt', "我不好\n", FILE_APPEND);

    echo HH;

    date_default_timezone_set('Asia/Shanghai');
    $a_time = fileatime('test.txt');
    echo date('Y-m-d H:i:s', $a_time).HH;

    $path_info = pathinfo('test.txt');
    print_r($path_info);

    echo realpath('test.txt').HH;

    $stat = stat('test.txt');
    print_r($stat);

    $test_txt = fopen('test.txt', 'r');
    fseek($test_txt, 20);
    echo ftell($test_txt).HH;
    fclose($test_txt);


    $test_txt = fopen('test.txt', 'a');
    flock($test_txt, LOCK_EX);
    fwrite($test_txt, '独占锁定');
    flock($test_txt, LOCK_UN);
    fclose($test_txt);
    readfile('test.txt');
?>