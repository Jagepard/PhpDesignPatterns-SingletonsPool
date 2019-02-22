<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
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
    private static $instances = [];

    /**
     * @param string $name
     * @return SingletonsPool
     */
    public static function getInstance(string $name): self
    {
        if (!array_key_exists($name, static::$instances)){
            static::$instances[$name] = new static;
        }

        return static::$instances[$name];
    }

    /**
     * SingletonsPool constructor.
     */
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
