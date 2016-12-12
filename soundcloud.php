<?php

require 'vendor/autoload.php';

$client = new GuzzleHttp\Client();


//$url = $request->input('url');
$url = $_GET['url'];
$client_id = '02gUJC0hH2ct1EGOcYXQIzRFU91c72Ea';
$res = $client->get("https://api.soundcloud.com/resolve.json?url=$url&client_id=$client_id");
$trackId = $res->getEffectiveUrl();
preg_match('/.*(\d{9}).*/',$trackId,$match);
$trackId = $match[1];
$endUrl = "https://api.soundcloud.com/tracks/$trackId/stream?client_id=02gUJC0hH2ct1EGOcYXQIzRFU91c72Ea";
$body = json_decode($res->getBody());
$title = $body->{'title'};


$endPoint = "https://maker.ifttt.com/trigger/i_like_a_song/with/key/db4X6rklZAe4AVwQ2hERLQ";
$res = $client->get($endPoint,[
    'query'=>['value1' => $endUrl,'value2'=>$title]
]);


return $title;