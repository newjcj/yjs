<?php
//get the file (e.g. image) and output it to the browser
$url="http://passport.jd.com/uc/login";
$ch = curl_init(); //open curl handle
curl_setopt($ch, CURLOPT_URL, $url); //set an url
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //do not output directly, use variable
curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1); //do a binary transfer
curl_setopt($ch, CURLOPT_FAILONERROR, 1); //stop if an error occurred
$file=curl_exec($ch); //store the content in variable
if(!curl_errno($ch))
{
    //send out headers and output
    header ("Content-type: ".curl_getinfo($ch, CURLINFO_CONTENT_TYPE)."");
    header ("Content-Length: ".curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD)."");
    echo $file;
} else echo 'Curl error: ' . curl_error($ch);
curl_close($ch); //close curl handle
?> 
