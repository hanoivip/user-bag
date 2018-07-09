<?php

namespace Hanoivip\GateClient;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        'Hanoivip\GateClient\Events\UserTopup' => [
            'Hanoivip\GateClient\Services\PolicyService',
            'Hanoivip\GateClient\Activities\RankingActivity',
            'Hanoivip\GateClient\Services\StatisticService',
        ],
    ];
    
    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        
        //
    }
}