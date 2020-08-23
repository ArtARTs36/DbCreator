<?php

namespace ArtARTs\DbCreator\Tests;

use ArtARTs36\DbCreator\Access;
use ArtARTs36\DbCreator\Systems\PgSQL;
use PHPUnit\Framework\TestCase;

/**
 * Class PgSQLTest
 * @package ArtARTs\DbCreator\Tests
 */
class PgSQLTest extends TestCase
{
    /**
     * @covers \ArtARTs36\DbCreator\Systems\PgSQL::key
     */
    public function testKey(): void
    {
        self::assertEquals('pgsql', (new PgSQL())->key());
    }

    /**
     * @covers \ArtARTs36\DbCreator\Systems\PgSQL::queryForCreate
     */
    public function testQueryForCreate(): void
    {
        self::assertEquals('CREATE DATABASE test;', (new PgSQL())->queryForCreate('test'));
    }

    /**
     * @covers \ArtARTs36\DbCreator\Systems\PgSQL::toDsn
     */
    public function testToDsn(): void
    {
        $access = Access::make('user', 'pwd', 5432);

        self::assertEquals(
            'pgsql:;host=127.0.0.1;port=5432;user=user;password=pwd;dbname=postgres',
            (new PgSQL())->toDsn($access)
        );
    }
}
