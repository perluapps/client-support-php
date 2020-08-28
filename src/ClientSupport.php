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

    /**
     * factory from class ClientSupport itself
     * @return MemberRegister|Order|Subscription|string
     */
    public function factory()
    {
        switch ($this->type) {
            case "register":
                return new MemberRegister();
            case "order":
                return new Order();
            case "subscription":
                return new Subscription();
            case "warehouse":
                return new WareHouse();
            default:
                return "type should be register , order, warehouse or subscription";
        }
    }
}
