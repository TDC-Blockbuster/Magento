<?php


	public function sayHelloTo($name) {
		$string = 'Hello ' . $name;
		
		echo 'Function runs';
		
		return $string;
	}

	echo sayHelloTo('Sanni! :)');
	
?>