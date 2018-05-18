<?php

namespace App\Tests;

use App\Service\Age;
use PHPUnit\Framework\TestCase;

/**
 * Class AgeTest
 * @package App\Tests
 */
class AgeTest extends TestCase
{
    public function testAgeGet()
    {
        $age = new Age();

        $this->assertEquals(15, $age->get(new \DateTime("2003-05-01")));
    }
}
