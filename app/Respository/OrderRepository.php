<?php

namespace App\Respository;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class OrderRepository
{

    public function getOrder($id)
    {
        return "Returning Order Object with DeliveryAddress for given ID from DATABASE";
    }
}
