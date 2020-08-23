<?php

namespace ArtARTs36\DbCreator;

use ArtARTs36\DbCreator\Contracts\System;

/**
 * Class Creator
 * @package ArtARTs36\DbCreator
 */
class Creator
{
    /** @var Access */
    private $access;

    /** @var System */
    private $system;

    /**
     * Creator constructor.
     * @param Access $access
     * @param System $system
     */
    public function __construct(Access $access, System $system)
    {
        $this->access = $access;
        $this->system = $system;
    }

    /**
     * @param Access $access
     * @param string $system
     * @param string $dbName
     * @return bool
     */
    public static function create(Access $access, string $system, string $dbName): bool
    {
        return (new static($access, ($system = SystemFactory::instance($system))))->performCreate($system, $dbName);
    }

    /**
     * @param System $system
     * @param string $dbName
     * @return bool
     */
    public function performCreate(System $system, string $dbName): bool
    {
        return $this->createConnection($system)->query($system->queryForCreate($dbName)) !== false;
    }

    /**
     * @param System $system
     * @return \PDO
     */
    private function createConnection(System $system): \PDO
    {
        return new \PDO($this->access->toDsn($system), $this->access->user, $this->access->password);
    }
}
