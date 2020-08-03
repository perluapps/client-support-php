<?php


namespace Perluapps\ClientSupport;


class ClientSupport
{
    private $type;

    /**
     * ClientSupport constructor.
     * @param $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    public function factory()
    {
        switch ($this->type) {
            case "register":
                return new MemberRegister();
            case "order":
                return new Order();
            case "subscription":
                return new Subscription();
            default:
                return "type should be register , order or subscription";
        }
    }
}
