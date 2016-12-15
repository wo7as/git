<?php
function __autoload($name)
{
    include "/classes/$name.php";
}



$user = new User('Dima','12345','eee@eee.ee');
echo $user->getInfo();
echo '<br />';
$suser = new SuperUser('Dmitri','Superpass','superemail@ee.ee','Administrator');
echo $suser->getInfo();
print_r($suser->info());
