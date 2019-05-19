<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2019/5/19
 * Time: 21:50
 */

$host = '149.129.58.162';
$username = 'root';
$password = '123456';
$db = 'test';
//if ($connId = mysqli_connect($host, $username, $password, $db)) {
if ($connId = mysqli_connect($host, $username, $password)) {
    echo '连接成功';
} else {
    echo '连接失败';
}
if (mysqli_select_db($connId, $db)) {
    echo '选择数据库成功';
} else {
    echo '选择数据库失败';
}
$tables = mysqli_query($connId, 'SHOW TABLES');
foreach ($tables as $key => $value) {
    foreach ($value as $item) {
        echo $item."\n";
    }
}
$data = mysqli_query($connId, 'SELECT * FROM student_score');
//foreach ($data as $line_arr) {
//    foreach ($line_arr as $line) {
//        echo $line."\n";
//    }
//}
print_r($data);
while ($fetch_array = mysqli_fetch_array($data)) {
    print_r($fetch_array);
}
mysqli_free_result($data);
$data = mysqli_query($connId, 'SELECT * FROM student_score');
while ($fetch_object = mysqli_fetch_object($data)) {
    print_r ($fetch_object);
}
mysqli_free_result($data);
$data = mysqli_query($connId, 'SELECT * FROM student_score');
while ($fetch_row = mysqli_fetch_row($data)) {
    print_r($fetch_row);
}
mysqli_free_result($data);
$data = mysqli_query($connId, 'SELECT * FROM student_score');
while ($fetch_assoc = mysqli_fetch_assoc($data)) {
    print_r($fetch_assoc);
}
mysqli_free_result($data);
$data = mysqli_query($connId, 'SELECT * FROM student_score');
print_r(mysqli_num_rows($data));
mysqli_free_result($data);
if (mysqli_close($connId)) {
    echo '关闭成功'."\n";
} else {
    echo '关闭失败'."\n";
}
?>