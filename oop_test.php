<?php
/**
 * Created by IntelliJ IDEA.
 * User: 华硕
 * Date: 2019-05-16
 * Time: 18:11
 */
class SportObject {

    const PI = 3.1415927;
    public $name;
    public $height;
    public $avoirdupois;
    public $age;
    public $sex;

    function __construct($name, $height, $avoirdupois, $age, $sex)
    {
        $this->name = $name;
        $this->height = $height;
        $this->avoirdupois = $avoirdupois;
        $this->avoirdupois = $age;
        $this->sex = $sex;
    }

    function beatBasketball($name, $height, $avoirdupois, $age, $sex) {
        if($height > 180 and $avoirdupois <= 100) {
            return $name." 符合要求";
        } else {
            return $name." 不符合要求";
        }
    }

    function bootFootball() {
        if($this->height < 185 and $this->avoirdupois < 85) {
            return $this->name." 符合足球要求";
        } else {
            return $this->name." 不符合足球要求";
        }
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo 'AWSL';
    }
}
//$sport = new SportObject();
//echo $sport -> beatBasketball('SJ', 179, 99, 25, 'M');
//echo $sport->name;
echo SportObject::PI;
$football_sport = new SportObject('SJ', 179, 99, 25, 'M');
echo $football_sport->bootFootball();







class MyObject1 {
    private $object_type = 'book';
    private $param = array();
    public function setType($type) {
        $this->object_type = $type;
    }
    public function getType() {
        return $this->object_type;
    }
    function __clone()
    {
        // TODO: Implement __clone() method.
        $this->object_type = get_class();
    }
    function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this->param[$name] = $value;
    }
    function __get($name)
    {
        // TODO: Implement __get() method.
        if(isset($this->param[$name])) {
            return $this->param[$name];
        } else {
            return $name;
        }
    }
    function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        echo $name."\n";
        print_r($arguments);
    }
    function __sleep()
    {
        // TODO: Implement __sleep() method.
        echo "调用__sleep\n";
        return array("object_type");
    }
    function __wakeup()
    {
        // TODO: Implement __wakeup() method.
        echo "调用__wakeup\n";
        $this->param = array('name' => 'sj');
    }
    function __toString()
    {
        // TODO: Implement __toString() method.
        return "WC";
    }
}
$o1 = new MyObject1();
$o2 = $o1;
$o2->setType('computer');
echo $o1->getType();

$o1 = new MyObject1();
$o2 = clone $o1;
$o2->setType('compute');
echo $o1->getType();

$o1 = new MyObject1();
$o2 = clone $o1;
echo $o2->getType()."\n";
echo $o1 == $o2;
echo $o1 === $o2;
echo $o1 instanceof MyObject1;
echo $o1 instanceof MyObject2;
$o1->name = 'Sj';
echo $o1->name;
echo $o1->age;
$o1->hello(1, 2, 3);

$s = serialize($o1);
echo $s;
$o1 = unserialize($s);
echo $o1->name;
echo $o1;

//function __autoload($class_name) {
//    $class_path = $class_name.'.php';
//    if(file_exists($class_path)) {
//        include_once($class_path);
//    } else {
//        echo '类路径错误';
//    }
//}
//$auto = new AutoLoadClass('12');
//echo $auto;
?>