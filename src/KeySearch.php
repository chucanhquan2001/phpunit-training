<?php

namespace App;

class KeySearch
{
    public $count = 0;
    public function multiKeyExists(array $arr): bool
    {
        foreach ($arr as $key => $element) {
            if ($key === 'item_search') {
                if ($element === 'fix') {
                    return true;
                } else {
                    $this->count += 1;
                }
            } else {
                if (is_array($element)) {
                    if($this->multiKeyExists($element)){
                        return true;
                    }
                } elseif ($element === 'item_search'){
                    $this->count += 1;
                }
            }
        }
        if ($this->count == 0) {
            return true;
        } else {
            return false;
        }
    }
}
