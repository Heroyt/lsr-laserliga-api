<?php
declare(strict_types=1);

namespace Lsr\LaserLiga\Enums;

/**
 * Statuses for vests
 *
 * @method static VestStatus|null tryFrom(string $value)
 * @method static VestStatus from(string $value)
 * @property string $value
 */
enum VestStatus : string
{
    case OK     = 'ok';
    case PLAYABLE = 'playable';
    case BROKEN = 'broken';
}
