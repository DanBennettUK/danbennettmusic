<?php

$url = 'https://www.twitchalerts.com/api/v1.0/alerts';
$data = array(
      'type'                => 'donation',
      'message'             => '*Billy* bought a *Catarrian Shirt*!',
      'image_href'          => 'http://path/to/your/image.png',
      'sound_href'          => '',
      'special_text_color'  => '#199dce',
      'access_token' => 'E616847B85C8AB3C8BA8');
$options = array(
        'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    )
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
var_dump($result);
var_dump($data);
$result = $e->getResponse()->json();
