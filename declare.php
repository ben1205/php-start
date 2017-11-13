<?php 
	// declare(ticks = 1);//没执行N条语句可计时的低级语句就会发生的事件

	// register_tick_function( 'tick_handler' );

	// function tick_handler( )
	// {
	// 	echo "tick_handler( ) called<br/>";
	// }

	

	// $a = 1;

	// if($a > 0) {
	// 	$a += 2;
	// 	print_r($a . "<br/>");
	// }
?>
<?php 
 	// function tick_handler( )
	// {
	// 	echo "tick_handler( ) called<br/>";
	// }

	// $a = 1;
	// tick_handler ( );

	// if($a > 0)
	// {
	// 	$a += 2;
	// 	tick_handler( );
	// 	print_r($a . "<br/>");
	// 	tick_handler( );
	// }

	// tick_handler( );

?>
<?php 
	class bob
	{
	    function __construct()
	    {
	        echo __METHOD__  . "\n";
	    }
	}

	function funcname ( )
	{
	    echo __FUNCTION__ ."\n";
	}

	$a = 'bob';
	$b = 'funcname';
	$b();
	$obj = new $a;
?>

<?php 
	echo "<hr/>";

	class foo 
	{
		public $name = 2;

		public static function show(){
			return "吼吼吼";
		}
		const test = 'bobcool';
		const bob1 = 'bitch';
	}

	$const = 'bob1';


	var_dump(constant('foo::' . $const));
	var_dump(foo::bob1);
	$kill = new foo;
	var_dump(foo::show());
?>
