<?php
declare(strict_types=1);

namespace Lsr\LaserLiga;

use Dibi\Row;
use JsonSerializable;
use Lsr\Orm\Exceptions\ModelNotFoundException;
use Lsr\Orm\ModelQuery;

interface ModelInterface extends JsonSerializable
{

    public ?int $id {
        get;
        set;
    }

    /**
     * @param  int  $id
     * @param  Row|null  $row
     * @return static
     * @throws ModelNotFoundException
     */
    public static function get(int $id, ?Row $row = null) : static;

    /**
     * @return array<static>
     */
    public static function getAll() : array;

    public static function exists(int $id) : bool;

    /**
     * @return ModelQuery<static>
     */
    public static function query() : ModelQuery;

    public function save() : bool;

}