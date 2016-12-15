<?php
class User extends UserAbstract
{
	public $name;
	public $pass;
	public $email;

	public function __construct($n,$p,$e)
	{
		$this->name = $n;
		$this->pass = $p;
		$this->email = $e;
	}
	public function getInfo()
	{
		echo "Имя:".$this->name."<br />";
		echo "Пароль:".$this->pass."<br />";
		echo "Эмейл:".$this->email."<br />";
	}
    public function showInfo()
    {

    }

}
