<?php
function msg($var){
	if(isset($var))
	{
		echo $var;
		unset($var);
		return $var;
	}
}

?>
