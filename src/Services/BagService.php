<?php

namespace Hanoivip\UserBag\Services;

class BagService implements IBag
{
    protected $uid;
    
    public function __construct($uid)
    {
        $this->uid = $uid;
    }
    
    public function addItem($itemId, $count)
    {}

    public function subItem($itemId, $count)
    {}

    public function list()
    {}

    
}