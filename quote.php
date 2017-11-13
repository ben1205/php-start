<?php 
	$b  = 1;
	$a = & $b;
	$a = 2;
	echo $a . ',' . $b;//2 ,2
	echo "<br/>";
	unset($b);//断开引用
 ?>

 <?php 
 	$var1 = "Example variable";
 	$var2 = "";

 	function global_references($use_globals)
 	{
 		global $var1, $var2;//等同于$var1 = & $GLOBALS['var1'];

 		if(!$use_globals){
 			$var2 = & $var1; 
 		}else {
 			$GLOBALS["var2"] = & $var1;
 		}
  	}

  	global_references(false);
  	echo "var2 is set to ' $var2' <br/>";
  	global_references(true);
  	echo "var2 is set to ' $var2' <br/>";

  	//利用引用变量可以拿到局部域中的变量值
  	function foo(& $var)
  	{
  		$var++;
  	}

  	$a = 5;
  	foo($a);
  	echo $a . "<br/>";

  	function fool($b) {
  		$b++;
  	}

  	$c  = 2;
  	fool($c);
  	echo $c . "<br/>";
?>

<?php 
	function &bar()
	{
		$a = 5;
		return $a;
	}
	foo(bar());
 ?>

 <?php 
 	class foo {
 		public $value = 42;

 		public function &getValue ( ) {
 			return $this->value;
 		}
 	}

 	$obj = new foo;
 	$myValue = &$obj->getValue( );

 	$obj->value = 2;
 	echo $myValue;
  ?>
  <?php 
  	echo 'My username is '  . $_ENV["USER"] . '!';
   ?>