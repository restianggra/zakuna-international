<?php
class calculate {
	public function switchCalculate($a, $b){
		$a = $a+$b;
		$b = $a-$b;
		$a = $a - $b;
		return "<br /> Number 1 is $a <br /><br /> Number 2 is $b";
	}
}
//post from ajax, so
if(isset($_POST["n1"]) && isset($_POST["n2"])){
	$switch = new calculate();
	echo $switch->switchCalculate($_POST["n1"],$_POST["n2"]);
}
