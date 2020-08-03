<?php


namespace Perluapps\ClientSupport;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\ResponseInterface;
use Unirest\Request;

class Order
{
    public function send($url, $order)
    {
        $requestHeader = array(
            'Content-Type' => 'application/json',
        );
        $requestBody = array(
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
        );
        $finalUrl = $url . "add-order";
        $requestBodyJson = Request\Body::Json($requestBody);
        Request::post($finalUrl, $requestHeader, $requestBodyJson);
    }
}
