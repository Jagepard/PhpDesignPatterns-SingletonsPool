<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace AntiPatterns\SingletonsPool;

final class SingletonsPool
{
    /**
     * @var array
     */
    private static $instances = [];

    /**
     * @param  string  $singletonName
     * @return static
     */
    public static function getInstance(string $singletonName): self
    {
        if (!array_key_exists($singletonName, static::$instances)) {
            static::$instances[$singletonName] = new static;
        }

        return static::$instances[$singletonName];
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
