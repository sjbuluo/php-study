<?php
/**
 * Created by IntelliJ IDEA.
 * User: 华硕
 * Date: 2019-05-16
 * Time: 16:09
 */
    define('HH', "\n");
    $dir_path = 'E:\PHPWorkSpace\hello-world';
    $files = scandir($dir_path);
    echo is_dir($dir_path);
    print_r($files);

    echo HH;
    mkdir('.\test_dir');
    mkdir('.\test_dir2');
    rmdir('.\test_dir2');
    echo getcwd().HH;
    echo disk_free_space('.').HH;
    echo disk_total_space('.').HH;
    $test_dir = opendir('.');
    while(($file = readdir($test_dir))) {
        echo $file.HH;
    }
    closedir($test_dir);


?>