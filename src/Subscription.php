<?php


namespace Perluapps\ClientSupport;

use Unirest\Request;

class Subscription
{
    /**
     * @param $url
     * @param $subscription
     * @throws \Unirest\Exception
     */
    public function send($url, $subscription)
    {
        $requestHeader = array(
            'Content-Type' => 'application/json',
        );
        $requestBody = array(
            'invoice_number' => $subscription->invoice_number,
            'member_id' => $subscription->member_id,
            'member_phone' => $subscription->member_phone,
            'member_email' => $subscription->member_email,
            'unique_number' => $subscription->unique_number,
            'tax_amount' => $subscription->tax_amount,
            'discount_amount' => $subscription->discount_amount,
            'fee' => $subscription->fee,
            'payment_status' => $subscription->payment_status,
            'type' => $subscription->type,
        );
        $finalUrl = $url . "/api/v1/use-subscription";
        $requestBodyJson = Request\Body::Json($requestBody);
        $response = Request::post($finalUrl, $requestHeader, $requestBodyJson);
        error_log($response->raw_body);
    }

    /**
     * @param $url
     * @param $subscription
     * @throws Exception
     */
    public function updateStatus($url, $subscription) {
        $requestHeader = array(
            'Content-Type' => 'application/json',
        );
        $requestBody = array(
            'invoice_number' => $subscription->invoice_number,
            'payment_status' => $subscription->payment_status,
        );
        $finalUrl = $url . "/api/v1/update-subscription-status";
        $requestBodyJson = Request\Body::Json($requestBody);
        $response = Request::post($finalUrl, $requestHeader, $requestBodyJson);
        error_log($response->raw_body);
    }

}
