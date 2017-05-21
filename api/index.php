<?php


# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

$priceList = ["B01FQR7LTE" => "1200"];


foreach($priceList as $key => $value) {
    $url = "https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20html%20where%20url%3D%27http%3A%2F%2Fwww.paisaless.in%2Fproduct%2Famazon%2F$key%27%20and%20xpath%3D%27%2F%2Fspan%5B%40class%3D%22product__price%22%5D%27&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys";
    $response = file_get_contents($url);
    $response = json_decode($response);
    $latestPrice = $response->query->results->span->content;
    echo(intval(str_replace(",","",$latestPrice)));
    if(intval(str_replace(",","",$latestPrice)) <= $value){
        
        # Instantiate the client.
        $mgClient = new Mailgun('key-d0d33bb51656238696511aa61060ac63');
        $domain = "https://api.mailgun.net/v3/mansooniscoming.info";

        # Make the call to the client.
        $result = $mgClient->sendMessage($domain, array(
            'from'    => 'Excited User <ujesh.t@gmail.com>',
            'to'      => 'Ujesh <ujesh.t@gmail.com>',
            'subject' => 'Hello',
            'text'    => 'Testing some Mailgun awesomness!'
        ));

        
    } else {
        # Make the call to the client.
        $result = $mgClient->sendMessage($domain, array(
            'from'    => 'Excited User <ujesh.t@gmail.com>',
            'to'      => 'Ujesh <ujesh.t@gmail.com>',
            'subject' => 'Hello',
            'text'    => 'Testing some Mailgun awesomness<<<!'
        ));
    }
    
}


/*
$ch = curl_init($url);
//curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
//curl_setopt($ch, CURLOPT_POSTFIELDS, POST DATA);
$result = curl_exec($ch);

echo "calling";
print_r($result);
var_dump($result);
echo "called";
curl_close($ch);


echo "_____________________________";

print_r($response);

echo();
*/