<?php 
    //This is aPHP(5)script example on how eurofxref-daily.xml can be parsed 
    //Read eurofxref-daily.xml file in memory 
    //For the next command you will need the config  
    //option allow_url_fopen=On (default) 
 
$url = "http://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml";
$xml = file_get_contents($url);
$obj=simplexml_load_string($xml);



foreach($obj->Cube->Cube->Cube as $rate)
{
    if ($rate["currency"]=="GBP")
    {
        //echo round($EUR_GBP_RATE, 4);    // 5.06
        //echo '1&euro;=' . $rate["rate"] . ' ' . $rate["currency"] . '<br/>';
        $EUR_GBP_RATE = 1.0 / (float)$rate["rate"];  // DIVISION BY ZERO??
        echo '&#163;1  =  &euro;' . round($EUR_GBP_RATE, 4) . '<br/>';
    }

    if ($rate["currency"]=="USD")
    {
        //echo '1&euro;=' . $rate["rate"] . ' ' .$rate["currency"] . '<br/>';
        $EUR_USD_RATE = 1.0 / (float)$rate["rate"];
        echo '&#36;1  =  &euro;' . round($EUR_USD_RATE, 4) . '<br/>';
    }
    
      if ($rate["currency"]=="JPY")
    {
        //echo '1&euro;=' . $rate["rate"] . ' ' .$rate["currency"] . '<br/>';
        $EUR_JPY_RATE = 1.0 / (float)$rate["rate"];
        echo '&#165;1  =  &euro;' . round($EUR_JPY_RATE, 4) . '<br/>';
    }
     if ($rate["currency"]=="CHF")
    {
        //echo '1&euro;=' . $rate["rate"] . ' ' .$rate["currency"] . '<br/>';
        $EUR_CHF_RATE = 1.0 / (float)$rate["rate"];
        echo '&#8355;1  =  &euro;' . round($EUR_CHF_RATE, 4) . '<br/>';
    }
     if ($rate["currency"]=="INR")
    {
        //echo '1&euro;=' . $rate["rate"] . ' ' .$rate["currency"] . '<br/>';
        $EUR_INR_RATE = 1.0 / (float)$rate["rate"];
        echo '&#x20B9;1  =  &euro;' . round($EUR_INR_RATE, 4) . '<br/>';
    }
    if ($rate["currency"]=="AUD")
    {
        //echo '1&euro;=' . $rate["rate"] . ' ' .$rate["currency"] . '<br/>';
        $EUR_AUD_RATE = 1.0 / (float)$rate["rate"];
        echo '&#8371;1  =  &euro;' . round($EUR_AUD_RATE, 4) . '<br/>';
    }
}
 
?>




