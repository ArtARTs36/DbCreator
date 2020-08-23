<?php

namespace ArtARTs36\DbCreator\Systems;

use ArtARTs36\DbCreator\Access;
use ArtARTs36\DbCreator\Systems\System as BaseSystem;
use ArtARTs36\DbCreator\Contracts\System;

/**
 * Class PgSQL
 * @package ArtARTs36\DbCreator\Systems
 */
final class PgSQL extends BaseSystem implements System
{
    public const KEY = 'pgsql';

    /**
     * @param Access $access
     * @return string
     */
    public function toDsn(Access $access): string
    {
        return implode(';', [
            $this->key() . ':',
            "host={$access->host}",
            "port={$access->port}",
            "user={$access->user}",
            "password={$access->password}",
            "dbname=postgres",
        ]);
    }
}
