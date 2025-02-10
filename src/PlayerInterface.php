<?php
declare(strict_types=1);

namespace Lsr\LaserLiga;

use JsonSerializable;

interface PlayerInterface extends JsonSerializable
{

    public string $code {
        get;
    }
    public string $nickname {
        get;
    }
    public string $email {
        get;
    }
    public string $birthday {
        get;
    }

    public static function getByCode(string $code) : ?static;

    public static function validateCode(string $code, PlayerInterface $player, string $propertyPrefix = '') : void;

    public function validateUniqueCode(string $code) : bool;

    public function getCode() : string;

}