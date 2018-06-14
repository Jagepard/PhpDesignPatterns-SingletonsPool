<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace AntiPatterns\SingletonsPool\Tests;

use AntiPatterns\SingletonsPool\SingletonsPool;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

/**
 * Class SingletonsPoolTest
 */
class SingletonsPoolTest extends PHPUnit_Framework_TestCase
{

    public function testInstances()
    {
        $this->assertInstanceOf(SingletonsPool::class, SingletonsPool::getInstance('First'));
        $this->assertInstanceOf(SingletonsPool::class, SingletonsPool::getInstance('Second'));
        $this->assertNotSame(SingletonsPool::getInstance('First'), SingletonsPool::getInstance('Second'));
    }
}
