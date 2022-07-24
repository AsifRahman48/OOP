<?php
class Fruit {
  //public $name;
  //public $color;

  function __construct() {
    echo "great";
    echo "<br/>";
  }
  function get_name() {
    echo "nice";
    echo '<br/>';
  }
  function __destruct() {
    echo "wow";
    
  }
  function like() {
    echo "awesome";
    echo '<br/>';
  }
}

$obj = new Fruit();
$obj->get_name();
$obj->like();
?>