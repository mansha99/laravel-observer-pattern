<?php

namespace App\Providers;

use App\Events\AddressChangeEvent;
use App\Listeners\AddressChangeListenerForEmail;
use App\Listeners\AddressChangeListenerForLogistics;
use App\Listeners\AddressChangeListenerForSMS;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    // System should "know" about this coupling
    protected $listen = [
        AddressChangeEvent::class => [
            AddressChangeListenerForLogistics::class,
            AddressChangeListenerForEmail::class,
            AddressChangeListenerForSMS::class,
        ],

    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
