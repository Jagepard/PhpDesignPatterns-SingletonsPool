<?php
/**
 * Date: 28.03.18
 * Time: 15:02
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace AntiPatterns\SingletonsPool;


/**
 * Class SingletonsPool
 * @package AntiPatterns\SingletonsPool
 */
final class SingletonsPool
{

    /**
     * @var array
     */
    protected static $instances = [];

    /**
     * @param string $instance
     * @return mixed
     */
    public static function getInstances(string $instance): self
    {
        if (!array_key_exists($instance, self::$instances)){
            self::$instances[$instance] = new self;
        }

        return self::$instances[$instance];
    }

    public function __construct()
    {
    }

    /**
     * @codeCoverageIgnore
     */
    public function __sleep()
    {
    }

    /**
     * @codeCoverageIgnore
     */
    public function __wakeup()
    {
    }

    /**
     * @codeCoverageIgnore
     */
    public function __clone()
    {
    }
}
