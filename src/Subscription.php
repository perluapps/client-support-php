<?php


namespace Perluapps\ClientSupport;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\ResponseInterface;

class Subscription
{
    public function send($url, $subscription)
    {
        $client = new Client();
        $promise = $client->requestAsync('POST', $url, [
            'headers' => ['Content-Type' => 'application/json'],
            'json' => [
                'code' => $subscription->code,
                'company' => $subscription->company,
                'name' => $subscription->name,
                'email' => $subscription->email,
                'phone' => $subscription->phone,
                'business_type' => $subscription->business_type,
                'address' => $subscription->address,
                'province_id' => $subscription->province_id,
                'regency_id' => $subscription->regency_id,
                'district_id' => $subscription->district_id,
                'app_mode' => $subscription->app_mode,
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
