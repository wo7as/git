<?php
class User
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
		$str = "Имя:".$this->name;
		$str .= "Пароль:".$this->pass;
		$str .= "Эмейл:".$this->email;
        return $str;
	}

}
class SuperUser extends User
{
	public $role;
	public function __construct($n,$p,$e,$r)
	{
		parent::__construct($n,$p,$e);
	}
	public function getInfo()
	{
		parent::getInfo();
		$str .= "Эмейл:".$this->role;
	}

}
$user = new User('Dima','12345','eee@eee.ee');
echo $user->getInfo();
$su = new SuperUser('Dimas','32421','www@www.ww','Administrator');
echo $su->getInfo();
