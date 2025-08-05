<?php
include("classes\User.php");
class Auth extends User{
    public $name;
    public $username;
    public $password;
    public function register($name, $username, $password){
    $data = [
        'name' => $name,
        'username' => $username,
        'password' => $password
    ];
    return $this->create($data);
}
}

?>