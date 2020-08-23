<?php

namespace ArtARTs36\DbCreator\Contracts;

use ArtARTs36\DbCreator\Access;

/**
 * Interface System
 * @package ArtARTs36\DbCreator\Contracts
 */
interface System
{
    /**
     * @param string $dbName
     * @return string
     */
    public function queryForCreate(string $dbName): string;

    /**
     * @return string
     */
    public function key(): string;

    /**
     * @param Access $access
     * @return string
     */
    public function toDsn(Access $access): string;
}
