<?php

namespace Hanoivip\UserBag;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        'Hanoivip\Events\Gift\TicketReceived' => [
            'Hanoivip\UserBag\Services\UserBagService',
        ],
    ];
    
    public function boot()
    {
        parent::boot();
    }
}