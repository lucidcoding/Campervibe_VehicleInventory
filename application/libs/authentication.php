<?php

class Authentication
{
    public static function checkCookie()
    {
        if(!isset($_COOKIE['auth_cookie']))
        {
            $directoryId = "0647f417-1bf4-49be-a7d6-27537bec904f"; //I think?
            $clientId = "2d708142-face-4379-bc2d-7ff4bcfe9be2";
            $state = "af1Efa";
            $nonce = "1";
            $url = "https://login.microsoftonline.com/$directoryId/oauth2/authorize?client_id=$clientId&response_mode=form_post&response_type=code+id_token&scope=openid+profile&state=$state&nonce=$nonce";
            header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
            exit();
        }
    }
}

