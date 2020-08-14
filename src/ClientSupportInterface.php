<?php


namespace Perluapps\ClientSupport;


interface ClientSupportInterface
{
    public function send($url, $model, $companyCode);
    public function updateStatus($url, $model);
}
