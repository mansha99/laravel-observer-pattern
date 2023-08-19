<?php

namespace App\Listeners;

use App\Events\AddressChangeEvent;
use Illuminate\Support\Facades\Log;

class AddressChangeListenerForSMS
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        // ...
    }

    /**
     * Handle the event.
     */
    public function handle(AddressChangeEvent $event): void
    {
        //Real world: Invoke SMS Service
        Log::debug('Inside AddressChangeListenerForSMS :' . $event->shortMessage);
    }
}
