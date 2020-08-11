<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace AntiPatterns\SingletonsPool;

final class SingletonsPool
{
    private static array $instances = [];

    public static function getInstance(string $name): self
    {
        if (!array_key_exists($name, static::$instances)) {
            static::$instances[$name] = new static;
        }

        return static::$instances[$name];
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
