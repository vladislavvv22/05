<?php
	class User{
		private $name;
		private $surname;
		private $age;

		public function __construct($n,$s,$a) {
			$this->name = $n;
			$this->surname = $s;
			$this->age = $a;
		}

		public function show() {
			echo $this->name.' '.$this->surname.' '.$this->age.' let'.PHP_EOL;
		}
	}
?>
