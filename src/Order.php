<?php


namespace Perluapps\ClientSupport;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\ResponseInterface;

class Order
{
    public function send($url, $order)
    {
        $client = new Client();
        $promise = $client->requestAsync('POST', $url, [
            'headers' => ['Content-Type' => 'application/json'],
            'json' => [
                'code' => $order->code,
                'company' => $order->company,
                'name' => $order->name,
                'email' => $order->email,
                'phone' => $order->phone,
                'business_type' => $order->business_type,
                'address' => $order->address,
                'province_id' => $order->province_id,
                'regency_id' => $order->regency_id,
                'district_id' => $order->district_id,
                'app_mode' => $order->app_mode,
            ],
            'debug' => true
        ]);
        $promise->then(
            function (ResponseInterface $res) {
                echo $res->getStatusCode() . "\n";
            },
            function (RequestException $e) {
                echo $e->getMessage() . "\n";
                echo $e->getRequest()->getMethod();
            }
        );
    }
}
