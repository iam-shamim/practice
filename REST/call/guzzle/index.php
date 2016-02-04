<?php
require_once 'vendor/autoload.php';

// example 1
$client= new GuzzleHttp\Client(['base_uri'=>'http://localhost/restRaw/']);
$req=$client->request('GET','c');
echo $req->getBody().'<br>';

// example 1
$client= new GuzzleHttp\Client(['base_uri'=>'http://localhost/restRaw/c']);
$req=$client->request('GET');
$val=$req->getBody();
$encodeVal=json_decode($val);
echo 'your book prise '.$encodeVal->data.' TK'.'<br>';

// example 1
use GuzzleHttp\Client as Guzzle;
$client=new Guzzle();
$res=$client->get('http://localhost/restRaw/c')->getBody();
$json=json_decode($res);
echo 'your book prise '.$json->data.' TK'.'<br>';
