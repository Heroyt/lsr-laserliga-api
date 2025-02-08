<?php
declare(strict_types=1);

namespace Lsr\LaserLiga;

use Lsr\LaserLiga\DataObjects\LigaPlayer\LigaPlayerData;
use Psr\Http\Message\ResponseInterface;

interface PlayerProviderInterface
{
    public function findPlayersLocal(string $search, bool $includeMail = true) : array;

    /**
     * Find players using the public API.
     *
     * @return PlayerInterface[]|null
     */
    public function findPlayersPublic(string $search, bool $noSave = false) : ?array;

    /**
     * @param  ResponseInterface  $response
     * @param  bool  $noSave
     * @return PlayerInterface[]|null
     */
    public function getPlayersFromResponse(ResponseInterface $response, bool $noSave = false) : ?array;

    /**
     * Parse data from API and return player object.
     *
     * If the player already exists in database, it returns the updated model from DB.
     *
     * @warning Does not check the validity of input array. It will throw a warning if the input is not valid.
     *
     * @param  LigaPlayerData  $data
     * @param  bool  $noSave
     * @return PlayerInterface
     */
    public function getPlayerObjectFromData(LigaPlayerData $data, bool $noSave = false) : PlayerInterface;

    /**
     * Find only one player from public API by code
     *
     * @param  string  $code
     * @param  bool  $noSave
     * @return PlayerInterface|null
     */
    public function findPublicPlayerByCode(string $code, bool $noSave = false) : ?PlayerInterface;

    /**
     * @return PlayerInterface[]|null
     */
    public function findAllPublicPlayers(bool $noSave = false) : ?array;

    /**
     * @param  string[]  $codes
     * @return PlayerInterface[]|null
     */
    public function findAllPublicPlayersByCodes(array $codes, bool $noSave = false) : ?array;

    /**
     * @return PlayerInterface[]|null
     */
    public function findAllPublicPlayersByOldCode(string $code, bool $noSave = false) : ?array;
}