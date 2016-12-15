<?php
class Human
{
	private $name;
	private $weight;
	private $height;
	private $age;
	private $nation;

	public function __construct($w,$h)
	{
		//$this->name = $n;
		$this->weight = $w;
		$this->height = $h;
		//$this->age = $a;
		//$this->nation = $nt;
	}

	public function getInfo()
	{
		//$str = "Name: ".$this->name;
		//$str .= "<br />Age: ".$this->age;
		$str = "<br />Weight: ".$this->weight;
		$str .= "<br />Height: ".$this->height;
		//$str .= "<br />Nationality: ".$this->nation;
		$str .= "<br />Ваш идеальный вес: ".$this->calculateWeight();
		return $str;
	}
	private function calculateWeight()
	{
		$result = ($this->height - 100)* 1.15;
		return $result;
	}
}
?>
