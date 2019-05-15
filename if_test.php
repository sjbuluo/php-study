<?php
/**
 * Created by IntelliJ IDEA.
 * User: 华硕
 * Date: 2019-05-15
 * Time: 09:56
 */
$num = rand(0, 31);
echo "\$sum = $num";
if ($num % 3 == 0) {
    echo "<br>$num 整除3为0";
} else if ($num % 3 == 1) {
    echo "<br>$num 整除3为1";
} else {
    echo "<br>$num 整除3为2";
}
?>