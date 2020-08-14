<?php


namespace Perluapps\ClientSupport;


interface ClientSupportInterface
{
    /**
     * @param $url
     * @param $model
     * @param $companyCode
     * @return mixed
     */
    public function send($url, $model, $companyCode);

    /**
     * @param $url
     * @param $model
     * @return mixed
     */
    public function updateStatus($url, $model);
}
