<?php

namespace Hanoivip\UserBag;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Hanoivip\GateClient\Contracts\IGateClient;
use Hanoivip\GateClient\Services\RemoteGateClient;
use Hanoivip\GateClient\Services\GateResponseParser;
use Hanoivip\GateClient\Services\TestGateResponseParser;
use Hanoivip\GateClient\Services\BalanceService;
use Hanoivip\GateClient\Policies\GiftPolicy;

class LibServiceProvider extends ServiceProvider
{
    public function register()
    {
    }
    
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        //$this->loadViewsFrom(__DIR__ . '/../views', 'hanoivip');
        //$this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        //$this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
    }
}