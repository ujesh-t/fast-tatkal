<?php
namespace Acme\Demo;

require_once dirname(__FILE__). '/vendor/autoload.php';

use ApaiIO\Configuration\GenericConfiguration;
use ApaiIO\Operations\Search;
use ApaiIO\Operations\Lookup;
use ApaiIO\ApaiIO;
use Mailgun\Mailgun;


$priceList = [
    "B01FQR7LTE" => array("price" => "220000", "notify" => "ujesh.t@gmail.com", "name" => "Ujesh"),
    "B01M9C51T9" => array("price" => "55000",  "notify" => "ujesh.t@gmail.com", "name" => "Ujesh"),
 ];

$conf = new \ApaiIO\Configuration\GenericConfiguration();
$client = new \Guzzle\Http\Client();
//$request = new \ApaiIO\Request\GuzzleRequest($client);

$conf
    ->setCountry('in')
    ->setAccessKey("AKIAIQ5C4O5NMVZTODUQ")
    ->setSecretKey("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")
    ->setAssociateTag("persblog0a8-21")
    ->setResponseTransformer(new \ApaiIO\ResponseTransformer\XmlToSimpleXmlObject());
$apaiIO = new ApaiIO($conf);


$lookUp = new Lookup();
$lookUp->setItemIds(array_keys($priceList));
$lookUp->setResponseGroup(array('Offers'));
$formattedResponse = $apaiIO->runOperation($lookUp);
//var_dump($formattedResponse);
foreach($formattedResponse->Items->Item as $i){
    $asin = $i->ASIN;
    //var_dump($i);
    echo $asin;
    $value = $priceList[trim($asin)];
    $lowestPrice = $i->OfferSummary->LowestNewPrice;
    echo $lowestPrice->FormattedPrice;
    
    $mgClient = new Mailgun('key-d0d33bb51656238696511aa61060ac63');
    $domain = "mansooniscoming.info";

    echo(intval(str_replace(",","",$lowestPrice->Amount)));
    echo(" => ".$value['price']);
    if(str_replace(",","",$lowestPrice->Amount))
    if(intval(str_replace(",","",$lowestPrice->Amount)) <= $value['price']){     

        # Make the call to the client.
        $result = $mgClient->sendMessage($domain, array(
            'from'    => 'Ujesh Lal <ujesh.t@gmail.com>',
            'to'      => $value['name'].' <'.$value['notify'].'>',
            'subject' => 'Price Drop Alert for '.$asin,
            'text'    => 'Congrats Price for the Item is dropped to '.$lowestPrice->FormattedPrice.'!!!'."\n\n".$i->Offers->MoreOffersUrl
        ));        
    } 
    
}