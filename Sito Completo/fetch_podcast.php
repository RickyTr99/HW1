<?php 

header('Content-Type: application/json');
    
        $client_id="8a8069db6f854d2299090ff37e96ba08";
        $client_secret="cd56be9bdff44f548e38ad57fb946add"; 

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://accounts.spotify.com/api/token' );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'grant_type=client_credentials'); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Basic '.base64_encode($client_id.':'.$client_secret))); 
        $token=json_decode(curl_exec($ch), true);
        curl_close($ch);    
        

        $url = "https://api.spotify.com/v1/search?q=Correre%20Per%20Sempre%20Podcast&type=episode&limit=40&offset=0&market=IT";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$token['access_token'])); 
        $res=curl_exec($ch);
        curl_close($ch);

        echo $res;
    
?>