<?php

namespace Hanoivip\UserBag\Services;

use Hanoivip\UserBag\Models\UserItem;

interface IBag
{
    /**
     * Lấy về chi tiết đồ trong túi
     * NULL: không có
     * UserItem: nếu chỉ ra itemId
     * Array: lấy tất cả item hợp lệ
     * 
     * @param string $itemId
     * @return UserItem|array|null
     */
    function list($itemId = null);
    
    /**
     * 
     * @param string $itemId
     * @param number $count
     * @return boolean
     */
    function addItem($itemId, $count);
    
    /**
     * 
     * @param string $itemId
     * @param number $count
     * @return boolean
     */
    function subItem($itemId, $count);
    
}