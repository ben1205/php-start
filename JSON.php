<?php
    $arr = array('a'=> 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
    echo json_encode($arr) . "<br>";

    class Emp
    {
        public $name = "";
        public $hobbies = "";
        public $birthdate = "";
    }

    $e = new Emp();
    $e -> name ="bob";
    $e -> hobbies = "sports";
    $e -> birthdate = "08/05/2014 05:10:12 pm";
    
    echo json_encode($e);

    phpinfo();
?>