<?php

namespace ArtARTs36\DbCreator;

use ArtARTs36\DbCreator\Contracts\System;
use ArtARTs36\DbCreator\Systems\MySQL;
use ArtARTs36\DbCreator\Systems\PgSQL;

/**
 * Class SystemFactory
 * @package ArtARTs36\DbCreator
 */
class SystemFactory
{
    protected const ALIASES = [
        MySQL::KEY => MySQL::class,
        PgSQL::KEY => PgSQL::class,
    ];

    /**
     * @param string $key
     * @return System
     */
    final public static function instance(string $key): System
    {
        if (empty(static::ALIASES[$key])) {
            throw new \LogicException("System {$key} does not exists!");
        }

        $class = static::ALIASES[$key];

        return (new $class);
    }
}
