<?php

namespace App\Services;

use App\Events\AddressChangeEvent;
use App\Models\Order;


class AddressChangeNotifService
{

    public function sendNotification(Order $order)
    {
        AddressChangeEvent::dispatch($order);
    }
}
