<?php
if(isset($_POST['userId'])):
    $userID = $_POST['userId'];
    
    $apiUrl = "https://api.gifan.id/trueID/freeFire/".$userID;
    
    $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd()."/cookie.txt");
        curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd()."/cookie.txt");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $result = curl_exec($ch);
        curl_close($ch);
        
        print_r($result);
        
    endif;