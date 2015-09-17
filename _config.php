<?php

$leechgate_config = array(
    'gaid' => "UA-66282851-1", // 'UA-XXXXXXX-Y'
    //
    'target'  => '',//empty for total redirection with query
    'host'  => 'cdn.mapper-mobile.com',
    //it hardcode the destination
    'redirect_url'  => 'cdn.mapper-mobile.com/apk/mapper-test.apk',
    // name of event
    'product' => 'apk downloaded',
    'product_version' => $_SERVER['HTTP_X_FORWARDED_FOR']
);

?>
