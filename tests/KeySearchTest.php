<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\KeySearch;

class KeySearchTest extends TestCase
{

    public function testItemSearch()
    {
        $a = [
            '1' =>
                [
                    1 => [
                        'item_search' => 'fix'
                    ],
                    2 => [
                        'item_search' => 'bug'
                    ],
                ]
        ];
        $b = [
            1 => [
                'item_search' => 'bug'
            ],
            2 => [
                'item_search' => 'fix'
            ],
        ];
        $c = [
            1 => [
                'item_a' => 'bug'
            ],
            2 => [
                'item_b' => 'fix'
            ],
        ];
        $itemKeySearch = new KeySearch();
        $test = $itemKeySearch->multiKeyExists($c);
        $this->assertTrue($test);

    }
}