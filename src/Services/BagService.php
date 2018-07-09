<?php

namespace Hanoivip\UserBag\Services;

use Hanoivip\UserBag\Models\UserItem;

class BagService implements IBag
{
    protected $uid;
    
    public function __construct($uid)
    {
        $this->uid = $uid;
    }
    
    private function maxItemCount()
    {
        return 99;
    }
    
    public function addItem($itemId, $count)
    {
        if (empty($itemId) || empty($count))
            return false;
        $item = $this->list($itemId);
        if (empty($item))
        {
            $item = new UserItem();
            $item->user_id = $uid;
            $item->item_id = $itemId;
            $item->item_count = min($count, $this->maxItemCount());
            $item->save();
        }
        else
        {
            $item->item_count = min($item->$item_count + $count, 
                                $this->maxItemCount());
            $item->save();
        }
        return true;
    }

    public function subItem($itemId, $count)
    {
        if (empty($itemId) || empty($count))
            return false;
        $item = $this->list($itemId);
        if (empty($item) ||
            $item->item_count < $count)
            return false;
        $item->item_count -= $count;
        $item->save();
        return true;
    }

    public function list($itemId = null)
    {
        $items = null;
        if (empty($itemId))
            $items = UserItem::where('user_id', $uid)
                    ->where('item_count', '>', 0)
                    ->where('exists', true)
                    ->get();
        else 
            $items = UserItem::where('user_id', $uid)
                    ->where('item_id', $itemId)
                    ->where('item_count', '>', 0)
                    ->where('exists', true)
                    ->get();
        if (empty($items) ||
            $items->isEmpty())
            return null;
        if ($items->count() == 1)
            return $items->first();
        return $items->all();
    }

    
}