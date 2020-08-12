<?php


namespace Perluapps\ClientSupport;


interface ClientSupportInterface
{
    public function send($url, $model);
    public function updateStatus($url, $model);
}
