<?php
/**
 * Created by IntelliJ IDEA.
 * User: 华硕
 * Date: 2019-05-16
 * Time: 17:32
 */
    if (isset($_FILES['uploadFile'])) {
        $uploadFile = $_FILES['uploadFile'];
        print_r($_FILES['uploadFile']);
        if($uploadFile['error'] == 0) {
//            $content = file_get_contents($uploadFile['tmp_name']);
//            file_put_contents('./uploaded/'.$uploadFile['name'], $content);
            echo move_uploaded_file($uploadFile['tmp_name'], './uploaded/'.$uploadFile['name']);
        }
    }

    if (isset($_FILES['multiUploadFiles'])) {
        print_r($_FILES['multiUploadFiles']);
        $name_arr = $_FILES['multiUploadFiles']['name'];
        $tmp_name_arr = $_FILES['multiUploadFiles']['tmp_name'];
        $error_arr = $_FILES['multiUploadFiles']['error'];
        for ($i = 0; $i < count($name_arr); $i++) {
            if ($error_arr[$i] == 0) {
                move_uploaded_file($tmp_name_arr[$i], './uploaded/'.$name_arr[$i]);
            }
        }
    }
?>