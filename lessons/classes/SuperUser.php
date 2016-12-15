<?php
class SuperUser extends User implements ISuperUser
{
	public $role;

		function __construct($n,$p,$e,$r)
		{
			parent::__construct($n,$p,$e);
			$this->role = $r;
		}
	public function getInfo()
	{
		parent::getInfo();
		echo "Статус:".$this->role."<br />";
	}
    public function info()
    {
        $arr = array(
            '$name' => $this->name,
            '$pass' => $this->pass,
            '$email' => $this->email,
            '$role' => $this->role
        );
        return $arr;
    }

}
