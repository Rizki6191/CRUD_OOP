<?php
// include("classes/User.php");
include("classes/Auth.php");

$db = new DB("localhost", "root", "", "Authoop58");

$user = new Auth("localhost", "root", "", "Authoop58");
var_dump($user->getAll());
// var_dump($user->getById(5));
// $user->delete(5);
$user->delete();

// $user->update(2,[
//     'name' => 'muuuu'
// ]);

// $user->register('Rizki', 'Rizuki', '123456');

// $user->create([
//     'name' => 'ariq',
//     'username' => 'pppp',
//     'password' => '123456'
// ]);

/*
CLONE
CLONE 
CLONE
CLONE
CLONE


*/

?>
