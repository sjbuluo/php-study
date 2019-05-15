<?php
/**
 * Created by IntelliJ IDEA.
 * User: 华硕
 * Date: 2019-05-15
 * Time: 18:22
 */
    define("BR", "<br>");
    echo microtime().BR;
    function run_time () {
        list($msec, $sec) = explode(" ", microtime());
        return ((float) $msec + (float) $sec);
    }
    $start_time = run_time();
    date_default_timezone_set("Asia/Shanghai");
    echo mktime(12, 12, 12, 12, 12, 2012)."<br>";
    echo time().BR;
    echo date(DATE_ISO8601, time()).BR;
    print_r(getdate(), BR);
    echo date('Y-m-d H:i:s').BR;
    setlocale(LC_ALL, 'chs');
    echo date(DATE_ISO8601);
    echo strftime('%a %A %b %B %c %C %d %D %e %g %G %h %H %I %j %m %M %n %p %r %R $S %t %T %u %U %V %W %w %x %X %y %Y %Z %z %%').BR;
    $time1 = strtotime(date('Y-m-d H:i:s'));
    $time2 = strtotime('2016-10-1 00:00:00');
    $time3 = strtotime('2017-1-1');
    $sub1 = ceil(($time2 - $time1) / 3600);
    $sub2 = ceil(($time3 - $time1) / 86400);
    echo $sub1.BR;
    echo $sub2.BR;
    $end_time = run_time();
    echo ($end_time - $start_time).BR;
?>