<?php 

require_once 'core/init.php';

$user = DB::getInstance()->get('users', array('username', '=', 'billy'));

// var_dump($user);
if(!$user->count()){
	echo "no user";
}else{
	echo "OK!";
}