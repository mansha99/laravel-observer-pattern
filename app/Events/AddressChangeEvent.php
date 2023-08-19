<?php

namespace App\Events;

use App\Models\Order;
use Illuminate\Foundation\Events\Dispatchable;

class AddressChangeEvent
{
    use Dispatchable;
    public $shortMessage = '';
    public $longMessage = '';

    public function __construct(
        public Order $order
    ) {
        //Get Order from Database
        //Get deliveryAddress from Order
        //Compose a Short Message for SMS and Long SMS for others
        $this->shortMessage = " This is Short Message for change in Delivery Address";
        $this->longMessage = " This is a Long Long Message for change in Delivery Address";
    }
}
