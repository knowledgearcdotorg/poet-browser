<?php
$token = $_SERVER['HTTP_TOKEN'];

if (preg_match('/^[A-Za-z0-9.]+$/', $token)) {
    $ch = curl_init();

    // Set query data here with the URL
    curl_setopt($ch, CURLOPT_URL, 'https://api.frost.po.et/works');

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 3);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('token: '.$token, 'Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_HEADER, 1);

    $response = curl_exec($ch);

    $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    $header = substr($response, 0, $headerSize);
    $body = substr($response, $headerSize);

    if (curl_error($ch)) {
        echo 'error:'.curl_error($ch);
    }

    curl_close($ch);

    echo $body;
} else {
    echo "Invalid token";
}
