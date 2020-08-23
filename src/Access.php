<?php

namespace ArtARTs36\DbCreator;

use ArtARTs36\DbCreator\Contracts\System;

/**
 * Class Access
 * @package ArtARTs36\DbCreator
 */
class Access
{
    /** @var string */
    public $host;

    /** @var int */
    public $port;

    /** @var string */
    public $user;

    /** @var string */
    public $password;

    /**
     * Access constructor.
     * @param string $host
     * @param int $port
     * @param string $user
     * @param string $password
     */
    public function __construct(string $host, int $port, string $user, string $password)
    {
        $this->host = $host;
        $this->port = $port;
        $this->user = $user;
        $this->password = $password;
    }

    /**
     * @param string $user
     * @param string $password
     * @param int $port
     * @param string $host
     * @return Access
     */
    public static function make(string $user, string $password, int $port, string $host = '127.0.0.1'): Access
    {
        return new static($host, $port, $user, $password);
    }

    /**
     * @param System $system
     * @return string
     */
    public function toDsn(System $system): string
    {
        return $system->toDsn($this);
    }
}
