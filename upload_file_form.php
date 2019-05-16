<?php
/**
 * Created by IntelliJ IDEA.
 * User: 华硕
 * Date: 2019-05-16
 * Time: 17:28
 */

?>

<form action="upload_file_result.php" method="post" enctype="multipart/form-data">
    <input type="file" name="uploadFile">
    <input type="submit" value="上传">
</form>

<hr>

<form action="upload_file_result.php" method="post" enctype="multipart/form-data">
    <input type="file" name="multiUploadFiles[]">
    <input type="file" name="multiUploadFiles[]">
    <input type="file" name="multiUploadFiles[]">
    <input type="file" name="multiUploadFiles[]">
    <input type="file" name="multiUploadFiles[]">
    <input type="file" name="multiUploadFiles[]">
    <input type="submit" value="上传">
</form>