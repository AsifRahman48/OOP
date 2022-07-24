<?php

class asif{
    public $age=24;
    public $address="Nikunju";

    function address(){
        return $this->address;
    }

    function age(){
        return "i am ".$this->age++. " years old";
    }
}
$obj=new asif();
$obj->age();
echo $obj->age(); echo "<br/>";
echo $obj->address();

?>