<?php
    class MyClass1 {
        public $obj1prop;
    }
    class MyClass2 {
        public $obj2prop;
    }

    $obj1 = new MyClass1();
    $obj1->obj1prop = 1;
    $obj2 = new MyClass2();
    $obj2->obj2prop = 2;

    $serializedObj1 = serialize($obj1);
    $serializedObj2 = serialize($obj2);

    $data = unserialize($serializedObj1, ["allowed_classes" => true]);

    $data2 = unserialize($serializedObj2, ["allowed_classes" => ["MyClass1", "MyClass2"]]);
    
    print($data->obj1prop);
    print(PHP_EOL);
    print($data2->obj2prop);
?>

<?php
    printf('%x', IntlChar::CODEPOINT_MAX);
    echo IntlChar::charName('@');
    var_dump(IntlChar::ispunct('!'));
?>