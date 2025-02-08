<?php
declare(strict_types=1);

namespace Lsr\LaserLiga\Enums;

/**
 * @property string $value
 * @method static ConnectionType from(string $type)
 * @method static ConnectionType|null tryFrom(string $type)
 */
enum ConnectionType : string
{
    case RFID        = 'rfid';
    case LASER_FORCE = 'laserforce';
    case MY_LASERMAXX = 'mylasermaxx';

    case OTHER = 'other';
}