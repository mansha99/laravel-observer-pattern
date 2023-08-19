<?php

namespace App\Listeners;

use App\Events\AddressChangeEvent;
use Illuminate\Support\Facades\Log;

class AddressChangeListenerForEmail
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
        //Real world: Use Queue to Send Email
        Log::debug('Inside AddressChangeListenerForEmail :' . $event->longMessage);
    }
}
