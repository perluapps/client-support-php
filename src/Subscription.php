<?php


namespace Perluapps\ClientSupport;

use Unirest\Request;

class Subscription
{
    public function send($url, $subscription)
    {
        $requestHeader = array(
            'Content-Type' => 'application/json',
        );
        $requestBody = array(
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
        );
        $finalUrl = $url . "use-subscription";
        $requestBodyJson = Request\Body::Json($requestBody);
        Request::post($finalUrl, $requestHeader, $requestBodyJson);
    }
}
