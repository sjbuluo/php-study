<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2019/5/19
 * Time: 23:00
 */

$dbms = 'mysql';
$dbname = 'test';
$user = 'root';
$pwd = '123456';
$host = '149.129.58.162';
$dsn = "$dbms:host=$host;dbname=$dbname";
try {
    $pdo = new PDO($dsn, $user, $pwd);
    echo 'PDO连接MySQL成功';
} catch (Exception $e) {

}
$pdo_statement = $pdo->query('SELECT * FROM student_score');
//$fetch_result = $pdo_statement->fetch();
//print_r($fetch_result);
print_r($pdo_statement->fetchAll());
?>