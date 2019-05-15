<?php
/**
 * Created by IntelliJ IDEA.
 * User: 华硕
 * Date: 2019-05-15
 * Time: 10:44
 */

$p = 123;
echo "$p";
echo '$p';
echo <<<str
    $p
    <font color="yellow">$p, Hello World!</font> // 123
/*321*/
str;
$str = "\r\r(:@-@123@-@:)";
echo $str."\n";
echo trim($str, "\r\r(::)")."\n";
echo $str."\n";
echo addslashes("''''''''''''''n.      NULL \0")."\n";
echo stripslashes("\"\"\"\"")."\n";
$a = addcslashes("\r\n床前明月光", "\r\n床前明月光");
echo $a."\n";
echo stripcslashes($a)."\n";
echo strcmp("a", "A")."\n";
echo strnatcmp("2A", "10A")."\n";
echo strstr( "Akshgksehghellolfelgjoegesg", "hello")."\n";
echo strrchr("Akshgksehghellolfelgjoegesg", "hello")."\n";
echo number_format(123456.789, 2, '?', '|')."\n";
$test_str1 = "&&       明日编程词典       &&";
echo trim($test_str1, "& ")."\n";
$test_str2 = "33109188395221111";
if (strlen($test_str2) == 18) {
    echo "长度符合"."\n";
} else {
    echo "长度不符合"."\n";
}
$test_str3 = "Hello World";
echo str_ireplace('o', '<font color="red"><b>o</b></font>', $test_str3)."\n";
$test_str4 = "北京,杭州,上海,石家庄";
$arr = explode(',', $test_str4);
foreach ($arr as $item) {
    echo $item."\n";
}
function preg_replace_callback_func($str) {
    return "<b>".$str[0]."</b>";
}
echo preg_replace_callback('/\w/', "preg_replace_callback_func", "a b c d e f h")."\n";
?>
