<?php

namespace Lsr\LaserLiga\DataObjects\LigaPlayer;

use Lsr\LaserLiga\Enums\ConnectionType;

class LigaPlayerConnection
{
    public ConnectionType $type;
    public string $identifier;
}
