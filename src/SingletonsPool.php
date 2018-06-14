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
    protected static $instances = [];

    /**
     * @param string $instanceName
     * @return mixed
     */
    public static function getInstance(string $instanceName): self
    {
        if (!array_key_exists($instanceName, static::$instances)){
            static::$instances[$instanceName] = new static;
        }

        return static::$instances[$instanceName];
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
