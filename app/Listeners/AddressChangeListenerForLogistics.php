<?php

namespace App\Listeners;

use App\Events\AddressChangeEvent;
use Illuminate\Support\Facades\Log;

class AddressChangeListenerForLogistics
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
        //Real world: Invoke Provider's API
        Log::debug('Inside AddressChangeListenerForLogistics :' . $event->longMessage);
    }
}
