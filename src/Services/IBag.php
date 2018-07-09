<?php

namespace Hanoivip\UserBag\Services;

interface IBag
{
    function list();
    
    function addItem($itemId, $count);
    
    function subItem($itemId, $count);
    
}