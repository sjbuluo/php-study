<?php
/**
 * Created by IntelliJ IDEA.
 * User: 华硕
 * Date: 2019-05-15
 * Time: 10:06
 */
$n = 1;
$sum = 0;
while ($n < 11) {
    $sum += $n++;
}
echo $sum;
$n = 1;
$sum = 0;
do {
    $sum += $n++;
} while ($n < 11);
echo $sum;
$sum = 0;
for ($i = 1; $i < 11; $i++) {
    $sum += $i;
}
echo $sum;
$a1 = array(1, 2, 3, 4, 5);
$m1 = array('name' => 'sunjian', 'age' => 25);
foreach ($a1 as $item) {
    echo $item."\n";
}
foreach ($a1 as $index => $value) {
    echo $index.' : '.$value."\n";
}
foreach ($m1 as $item) {
    echo $item."\n";
}
foreach ($m1 as $key => $value) {
    echo $key.' : '.$value."\n";
}
while (true) {
    for (;;) {
        for ($i = 0; $i < 10; $i++) {
            break 3;
        }
        echo '第二次循环';
    }
    echo '第三层循环';
}
$arr = array(array('A', 'B', 'C'), array(1, 2, 3), array('一', '二', '三'));
for($i = 0; $i < count($arr); $i++) {
    $arr_2 = $arr[$i];
    for($j = 0; $j < count($arr_2); $j++) {
        echo $i.':'.$j.'->'.$arr_2[$j].' ';
    }
}
echo "\n";
function print_2_array($arr) {
    for($i = 0; $i < count($arr); $i++) {
        $arr_2 = $arr[$i];
        for($j = 0; $j < count($arr_2); $j++) {
            echo $arr_2[$j].' ';
        }
        echo "\n";
    }
    echo "\n";
}
$prev = array(1);
$next = array();
$result = array();
for ($i = 0; $i < 10; $i++) {
    $result[$i] = $prev;
    $next = array();
    $next[0] = 1;
    for ($j = 1; $j < count($prev); $j++) {
        $next[$j] = $prev[$j] + $prev[$j - 1];
    }
    $next[count($prev)] = 1;
    $prev = $next;
}
print_2_array($result);
?>

