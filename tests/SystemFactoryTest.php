<?php

namespace ArtARTs\DbCreator\Tests;

use ArtARTs36\DbCreator\SystemFactory;
use ArtARTs36\DbCreator\Systems\MySQL;
use ArtARTs36\DbCreator\Systems\PgSQL;
use PHPUnit\Framework\TestCase;

/**
 * Class SystemFactoryTest
 * @package ArtARTs\DbCreator\Tests
 */
class SystemFactoryTest extends TestCase
{
    /**
     * @covers \ArtARTs36\DbCreator\SystemFactory::instance
     */
    public function testInstance(): void
    {
        self::assertInstanceOf(MySQL::class, SystemFactory::instance('mysql'));
        self::assertInstanceOf(PgSQL::class, SystemFactory::instance('pgsql'));

        //

        self::expectException(\LogicException::class);

        SystemFactory::instance('random');
    }
}
