<?php
declare(strict_types=1);

namespace Lsr\LaserLiga\Enums;

use OpenApi\Attributes as OA;

/**
 * Statuses for vests
 *
 * @method static VestStatus|null tryFrom(string $value)
 * @method static VestStatus from(string $value)
 * @property string $value
 */
#[OA\Schema(type: "string")]
enum VestStatus : string
{
    case OK       = 'ok';
    case PLAYABLE = 'playable';
    case BROKEN   = 'broken';

    public function getName() : string {
        return match ($this) {
            self::OK       => 'V pořádku',
            self::PLAYABLE => 'Hratelná',
            self::BROKEN   => 'Nefunkční',
        };
    }

    public function getColor() : string {
        return match ($this) {
            self::OK       => '#008000',
            self::PLAYABLE => '#FF8647',
            self::BROKEN   => '#E90503',
        };
    }

    public function getContrastColor() : string {
        return match ($this) {
            self::OK, self::BROKEN => '#fff',
            self::PLAYABLE         => '#000',
        };
    }
}
