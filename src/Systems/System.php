<?php

namespace ArtARTs36\DbCreator\Systems;

/**
 * Class System
 * @package ArtARTs36\DbCreator\Systems
 */
abstract class System
{
    /**
     * @inheritDoc
     */
    public function queryForCreate(string $dbName): string
    {
        return "CREATE DATABASE {$dbName};";
    }

    /**
     * @return string
     */
    public function key(): string
    {
        return static::KEY;
    }
}
