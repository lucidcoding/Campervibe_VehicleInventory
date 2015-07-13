<?php
namespace controllers;

class AccountController 
{
    public function __construct()
    {
    }
    
    public function callback()
    {
	$id_token= $_POST['id_token'];
	$id_array = explode('.',  $id_token); /*mb_split(".", $id_token);*/
	$id_body_json = base64_decode($id_array[1]); 
        $id_body = json_decode($id_body_json);
        $user_id = $id_body->oid;
        setcookie("auth_cookie", $user_id, time() + (86400 * 30), "/");
        $url = "/home/index";
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
        exit();
    }
}
