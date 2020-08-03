<?php


namespace Perluapps\ClientSupport;


use Unirest\Request;

class Order
{
    public function send($url, $order)
    {
        $requestHeader = array(
            'Content-Type' => 'application/json',
        );
        $requestBody = array(
            'outlet_id' => $order->outlet_id,
            'customer_id' => $order->customer_id,
            'invoice_number' => $order->invoice_number,
            'customer_name' => $order->customer_name,
            'paid_amount' => $order->paid_amount,
            'payment_channel' => $order->payment_channel,
            'description' => $order->description,
            'shipping_method' => $order->shipping_method,
            'reference_number' => $order->reference_number,
            'app_mode' => $order->app_mode,
            'table_no' => $order->table_no,
            'order_status' => $order->order_status,
            'last_modified_by' => $order->last_modified_by,
        );
        $finalUrl = $url . "add-order";
        $requestBodyJson = Request\Body::Json($requestBody);
        Request::post($finalUrl, $requestHeader, $requestBodyJson);
    }
}
