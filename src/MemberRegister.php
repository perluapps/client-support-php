<?php


namespace Perluapps\ClientSupport;

use Unirest\Request;

class MemberRegister
{
    /**
     * Send Data Member Register To Dashboard Support
     * Using Unirest HttpClient with ContentType application/json
     * @param $url
     * @param $member
     * @throws
     */
    public function send($url, $member)
    {
        $requestHeader = array(
            'Content-Type' => 'application/json',
        );
        $requestBody = array(
            'code' => $member->company->code,
            'company' => $member->company->name,
            'name' => $member->name,
            'email' => $member->email,
            'phone' => $member->phone,
            'business_type' => $member->company->business_type,
            'address' => $member->company->address,
            'province_id' => $member->company->province_id,
            'regency_id' => $member->company->regency_id,
            'district_id' => $member->company->district_id,
            'app_mode' => $member->app_mode,
        );
        $finalUrl = $url . "/api/v1/member-registration";
        $requestBodyJson = Request\Body::Json($requestBody);
        $response = Request::post($finalUrl, $requestHeader, $requestBodyJson);
        error_log($response->raw_body);
    }
}
