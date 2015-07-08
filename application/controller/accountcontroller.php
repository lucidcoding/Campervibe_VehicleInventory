<?php
namespace controllers;

class AccountController 
{
    public function __construct()
    {
    }
    
    public function callback()
    {
        echo "This is from callback";

	$id_token= $_POST['id_token'];
	$id_array = mb_split(".", $id_token);
	$id_body = base64url_decode($id_array[1]); 

	echo "body is $id_body";
	$user_id = $id_body->user_id;

	echo "user_id is $user_id";

        $code = $_POST['code'];
        echo "code is $code";
        $client_id = '2d708142-face-4379-bc2d-7ff4bcfe9be2';
        $client_secret = 'UtNMACzMUbuTIEZ/ee2LWN8SyoRoDGqYFSmji4F4mhw=';
        $ch = curl_init('https://login.microsoftonline.com/0647f417-1bf4-49be-a7d6-27537bec904f/oauth2/token?code=' . $code);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_POST, TRUE); 
        curl_setopt($ch, CURLOPT_USERPWD, $client_id . ":" . $client_secret);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($ch);
        echo "response is $response";
        $res = json_decode($response, true);
        $id_token = $res['id_token'];
        echo "id_token is $id_token"; 
        $id_array = mb_split(".", $id_token);
        $id_body = base64_decode($id_array[1]);
        echo "id_body is $id_body"; 
        $userId = $id_body.user_id;
        echo "userid is $userId";
    }
}
