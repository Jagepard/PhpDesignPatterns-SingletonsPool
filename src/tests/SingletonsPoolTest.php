<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;
use AntiPatterns\SingletonsPool\SingletonsPool;


/**
 * Class FactoryMethodTest
 */
class SingletonsPoolTest extends PHPUnit_Framework_TestCase
{

    protected function setUp(): void
    {

    }

    public function testInstances()
    {
        $this->assertInstanceOf(SingletonsPool::class, SingletonsPool::getInstances('First'));
        $this->assertSame(SingletonsPool::getInstances('First'), SingletonsPool::getInstances('First'));
    }
}