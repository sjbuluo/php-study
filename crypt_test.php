<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2019/5/19
 * Time: 21:22
 */

$str = 'Hello World!';
echo '原字符串'.$str.'<br>';
$crypt_str = crypt($str);
echo '加密后字符串'.$crypt_str.'<br>';
$crypt_str = crypt($str, '123456789');
echo '加密后字符串'.$crypt_str.'<br>';
$md5_str = md5($str, false);
echo 'md5加密后的大整数'.$md5_str.'<br>';
$md5_str = md5($str, true);
echo 'md5加密后的大整数'.$md5_str.'<br>';
$sha1_str = sha1($str, false);
echo 'sha1加密后的字符串'.$sha1_str.'<br>';
$sha1_str = sha1($str, true);
echo 'sha1加密后的字符串'.$sha1_str.'<br>';

$en_dir = mcrypt_list_algorithms();
echo 'Mcrypt支持的算法有:';
foreach ($en_dir as $en) {
    echo $en.' ';
}
echo '<br>';
$mo_dir = mcrypt_list_modes();
echo 'Mcrypt支持的加密模式有:';
foreach ($mo_dir as $mo) {
    echo $mo.' ';
}
echo '<br>';
?>