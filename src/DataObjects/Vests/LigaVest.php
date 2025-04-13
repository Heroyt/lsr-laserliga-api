<?php

namespace Lsr\LaserLiga\DataObjects\Vests;

use DateTimeImmutable;
use Lsr\LaserLiga\DataObjects\LigaSystem;
use Lsr\LaserLiga\Enums\VestStatus;

class LigaVest
{
    public string $vestNum;
    public string|LigaSystem $system;
    public VestStatus $status;
    public ?string $info = null;
    public DateTimeImmutable $updatedAt;
}
