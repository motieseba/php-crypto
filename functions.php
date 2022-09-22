<?php

function initiateAPI(){
    $url = "https://api.nomics.com/v1/currencies/ticker?key=d5b29a4f75e22ff8e2c591560e9f353c2e0c2d51&convert=EUR&per-page=100&page=1";
    $curl = curl_init($url);

    curl_setopt($curl,CURLOPT_URL,$url);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

    

    $result = curl_exec($curl);

    curl_close($curl);

    return $result;

}

function convertIntoArray(){
    

    $result = initiateAPI();

    $responseArray = json_decode($result,true);
    

    return $responseArray;

}
?>