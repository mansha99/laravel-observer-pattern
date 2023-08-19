<?php

namespace App\Listeners;

use App\Events\AddressChangeEvent;
use Illuminate\Support\Facades\Log;

class AddressChangeListenerForLogistics
{
    public function __construct()
    {
    }
    public function handle(AddressChangeEvent $event): void
    {
        //Real world: Invoke Provider's API
        Log::debug('Inside AddressChangeListenerForLogistics :' . $event->longMessage);
    }
}
