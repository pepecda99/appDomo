<?php

use GuzzleHttp\Client;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/conf.php';
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/twig/templates');
$TWIG = new \Twig\Environment($loader, [
    /*  'cache' => __DIR__ . '/twig/cache',
    'debug' => true,
    'auto_reload' => true, */]);

$client = new Client([
    'base_uri' => $conf->base_url,
    'verify' => false,
]);
//FUNCTIONS
function callDolibarrApi($endpoint, $method = 'GET', $data = null)
{
    global  $conf, $client;


    $apiKey = $_SESSION['user'] ?? null;
    if (!$apiKey) {
        try {
            $options = [
                'headers' => [
                    'DOLAPIKEY' => $conf->dolaApi,
                    'Content-Type' => 'application/json',
                ],
            ];

            if ($data) {
                $options['json'] = $data;
            }
            $response = $client->request($method, $endpoint, $options);
            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            return (['error' => 'Failed to fetch data: ' . $e->getMessage()]);
            exit;
        }
    } else {
        try {
            $options = [
                'headers' => [
                    'DOLAPIKEY' => $apiKey,
                    'Content-Type' => 'application/json',
                ],
            ];

            if ($data) {
                $options['json'] = $data;
            }

            $response = $client->request($method, $endpoint, $options);
            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {

            return (['error' => 'Failed to fetch data: ' . $e->getMessage()]);
            exit;
        }
    }
}
