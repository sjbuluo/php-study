<?php
/**
 * Created by IntelliJ IDEA.
 * User: 华硕
 * Date: 2019-05-16
 * Time: 19:39
 */
class AutoLoadClass{
    private $cont;
    public function __construct($cont)
    {
        $this->cont = $cont;
    }
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->cont;
    }
}
?>