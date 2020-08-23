<?php

namespace ArtARTs36\DbCreator\Systems;

use ArtARTs36\DbCreator\Access;
use ArtARTs36\DbCreator\Contracts\System;
use ArtARTs36\DbCreator\Systems\System as BaseSystem;

/**
 * Class MySQL
 * @package ArtARTs36\DbCreator\Systems
 */
final class MySQL extends BaseSystem implements System
{
    public const KEY = 'mysql';

    /**
     * @param Access $access
     * @return string
     */
    public function toDsn(Access $access): string
    {
        return "{$this->key()}:host={$access->host};port={$access->port}";
    }
}
