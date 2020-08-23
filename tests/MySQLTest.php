<?php

namespace ArtARTs\DbCreator\Tests;

use ArtARTs36\DbCreator\Access;
use ArtARTs36\DbCreator\Systems\MySQL;
use PHPUnit\Framework\TestCase;

/**
 * Class MySQLTest
 * @package ArtARTs\DbCreator\Tests
 */
class MySQLTest extends TestCase
{
    /**
     * @covers \ArtARTs36\DbCreator\Systems\MySQL::key
     */
    public function testKey(): void
    {
        self::assertEquals('mysql', (new MySQL())->key());
    }

    /**
     * @covers \ArtARTs36\DbCreator\Systems\MySQL::queryForCreate
     */
    public function testQueryForCreate(): void
    {
        self::assertEquals('CREATE DATABASE test;', (new MySQL())->queryForCreate('test'));
    }

    /**
     * @covers \ArtARTs36\DbCreator\Systems\MySQL::toDsn
     */
    public function testToDsn(): void
    {
        $access = Access::make('user', 'pwd', 3306);

        self::assertEquals(
            'mysql:host=127.0.0.1;port=3306',
            $access->toDsn(new MySQL())
        );
    }
}
