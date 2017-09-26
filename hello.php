<?php
    namespace bob;

    function boboss(){
        echo "i'm god!!!";
    };

    namespace bob_son;

    function boboss(){
        echo "i'm son!!!"; 
    };

    \bob\boboss();//利用对应的命名空间可以使用重名函数或类！！很方便
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div id="heh">
    <?php
      $ji = 123;
      $gun = array("ji","li","lol");
      foreach($gun as $k =>  $v){
          echo "<p>$k : $v</p>";
      };
      
      $num = [1,2, 3, 4, 5, 6];
      foreach($num as $v){
          echo "$v";
      }
      echo "";
      echo "<p>$ji</p>";

      $y = 25;
      $x = 50;

      function addtion(){
          $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
      };

      addtion();

      echo "$z";
     ?>
     <hr/>
     <?php
        //类的定义
        class site{
            var $name;
            var $url;

            function __construct($pas1, $pas2){//初始化构造函数(PHP自定义)
                $this->name = $pas1;
                $this->url = $pas2;
            }

            //成员函数
            function getName(){
                return $this->name;
            }

            function setName($pas){
                $this->name = $pas;
            }

            function setUrl($pas){
                $this->url = $pas;
            }

            function __destruct(){//析构函数
                print "销毁";
            }
        };

        //类的继承
        class site_son extends site {
            var $age;
            protected $protect = "我收到了保护,不可直接访问我，需要通过指定方法访问我";
            public $public = "我在任何地方都可以被访问";
            private $private = "我只属于当前类，完全保密";

            public static $my_static = 'foo';

            function __construct($pas1, $pas2,$pas3){
                $this->age = $pas3;
                $this->name = $pas1;
                $this->url = $pas2;
            }

            function _printSon(){
                echo $this->protect;
                echo $this->private;
            }
        }

        $he = new site('bob', 'boss.com');
        $he1 = new site('jill', 'root.com', "13");
        $he_s1 = new site_son("leo","sitck.com","14");
        echo $he->name . "<br/>";
        echo $he1->name;
        echo $he_s1->name;
        $he_s1 -> _printSon();
        print $he_s1::$my_static;

     ?>

     <?php
        //接口声明
        interface iTemplate
        {
            public function setVariable($name, $var);
            public function getHtml($template);
        }

        //实现接口
        class Template implements iTemplate
        {
            private $vars = array();

            public function setVariable($name, $var)
            {
                $this -> vars[$name] = $var;
            }

            public function getHtml($template)
            {
                foreach($this->vars as $name => $value)
                {
                    $template = str_replace('{' . $name . '}', $value, $template);
                }

                echo $template;
            }
        }

        $tem1 = new Template;
        $tem1 -> getHtml('123');
     ?>

     <?php
     //抽象类
     abstract class AbstractClass
     {
         //强制要求子类定义这些方法
         abstract protected function getValue();
         abstract protected function prefixValue($prefix);

         //普通方法(非抽象方法)
         public function printOut ()
         {
             print $this-> getValue().PHP_EOL;
         }
     }
     
     class ConcreteClass1 extends AbstractClass
     {
         protected function getValue()
         {
             return "ConcreteClass1";
         }

         public function prefixValue($prefix)
         {
             return $prefix . "ConcreteClass1";
         }
     }

     $class1 = new ConcreteClass1;
     $class1 -> printOut();
     echo $class1->prefixvalue('FOO_'). PHP_EOL;
     ?>
     </div>

     <?php
      //静态关键方法static
     class foolish
     {
         public static $fool_man = "233";

         public  function showman()
         {
             echo self::$fool_man;
         }
     }

     $fool1 = new foolish;
     $fool1->showman();

    //final 关键字

    final class onlyOne
    {
        public $ha = "you just a pig";
    }

    // class onlyTwo extends onlyOne
    // {

    // }

    //$only = new onlyTwo;报错，final定义的类或者方法都不可以被继承
    //echo $only->ha;
     ?>
</body>
</html>
