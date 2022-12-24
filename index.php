<?php
	class Car
	{
		public $color;
		public $fuel;
		public function go(){
			echo '1km vpered'.PHP_EOL;
		}
		public function turn(){
			echo 'povorot'.PHP_EOL;
		}
		public function stop(){
			echo 'stop'.PHP_EOL;
		}
	}
	$x = new Car;
	$x->color = 'White';
	$x->fuel = 40;
	$x->go();
	$x->turn();
	$x->stop();
?>
