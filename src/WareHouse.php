<?php


namespace Perluapps\ClientSupport;


use Unirest\Request;

class WareHouse
{
    /**
     * @param $url
     * @param $order
     * @param $companyCode
     * @throws \Unirest\Exception
     */
    public function send($url, $order, $companyCode)
    {
        $requestHeader = array(
            'Content-Type' => 'application/json',
        );

        $requestBody = array(
            'company_code' => $companyCode,
            'outlet_id' => $order->outlet_id,
            'outlet_name' => $order->outlet_name,
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
            'order_items' => $order->products,
        );

        $finalUrl = $url . "/api/v1/add-order";
        $requestBodyJson = Request\Body::Json($requestBody);
        $response = Request::post($finalUrl, $requestHeader, $requestBodyJson);
        error_log($response->raw_body);
    }
}
