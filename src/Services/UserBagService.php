<?php

namespace Hanoivip\UserBag\Services;

use Hanoivip\Events\Gift\TicketReceived;
use Illuminate\Support\Facades\Log;

class UserBagService
{
    /**
     * 
     * @param number $uid
     * @param number $type
     * @return IBag
     */
    function getUserBag($uid, $type = 0)
    {
        switch ($type)
        {
            case 0:
                return new BagService($uid);
                break;
            default:
                Log::error("Bag type {$type} not supported now.");
                break;
        }
    }
    
    public function handle(TicketReceived $event)
    {
        $bag = $this->getUserBag($event->uid, 0);
        if (!empty($bag))
        {
            if (!$bag->addItem($event->tid, $event->count))
            {
                Log::error("UserBag fail to add item to user bag");
            }
        }
    }
}