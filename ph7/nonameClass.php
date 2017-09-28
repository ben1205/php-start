<?php
    interface Logger {
        public function log(string $msg);
    }
    
    class Application {
        private $logger;

        public function getLogger(): Logger {
            return $this->logger;
        }

        public function setLogger(Logger $logger) {
            $this->logger = $logger;
        }
    }

    $app = new Application;
    //使用 new class 创建匿名类
    $app->setLogger(new class implements Logger{
        public function log(string $msg) {
            print $msg . "<br>";
        }
    });

    $app->getLogger() -> log("我的第一条日志");


    //Closure::call()
    class A {
        private $x = 1;
    }

    //在p7前版本定义闭包函数代码
    $getXCB = function(){
        return $this->x;
    };

    //闭包函数绑定在类A上
    $getX = $getXCB->bindTo(new A , 'A');

    echo $getX();
    print(PHP_EOL);

    //p7代码
    $getX = function(){
        return $this -> x;
    };
    echo $getX->call(new A);
?>