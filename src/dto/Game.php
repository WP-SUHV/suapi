<?php namespace SUHV\Suapi\dto;

class Game
{
    private $gameId;
    private $gameDate;
    private $gameTime;
    private $gameTeamHome;
    private $gameTeamAway;
    private $gameLocation;
    private $gameResult;

    /**
     * Game constructor.
     * @param $gameId
     * @param $gameDate
     * @param $gameTime
     * @param $gameTeamHome
     * @param $gameTeamAway
     * @param $gameLocation
     * @param $gameResult
     */
    public function __construct($gameId, $gameDate, $gameTime, $gameTeamHome, $gameTeamAway, $gameLocation, $gameResult)
    {
        $this->gameId = $gameId;
        $this->gameDate = $gameDate;
        $this->gameTime = $gameTime;
        $this->gameTeamHome = $gameTeamHome;
        $this->gameTeamAway = $gameTeamAway;
        $this->gameLocation = $gameLocation;
        $this->gameResult = $gameResult;
    }


    public function __toString()
    {
        return $this->gameTeamHome . " vs. " . $this->gameTeamAway . "(" . $this->teamId . ")";
    }

    public function equals(Game $game)
    {
        return ($this->getGameId() == $game->getGameId());
    }

    /**
     * @return mixed
     */
    public function getGameId()
    {
        return $this->gameId;
    }

    /**
     * @param mixed $gameId
     */
    public function setGameId($gameId)
    {
        $this->gameId = $gameId;
    }

    /**
     * @return mixed
     */
    public function getGameDate()
    {
        return $this->gameDate;
    }

    /**
     * @param mixed $gameDate
     */
    public function setGameDate($gameDate)
    {
        $this->gameDate = $gameDate;
    }

    /**
     * @return mixed
     */
    public function getGameTime()
    {
        return $this->gameTime;
    }

    /**
     * @param mixed $gameTime
     */
    public function setGameTime($gameTime)
    {
        $this->gameTime = $gameTime;
    }

    /**
     * @return mixed
     */
    public function getGameTeamHome()
    {
        return $this->gameTeamHome;
    }

    /**
     * @param mixed $gameTeamHome
     */
    public function setGameTeamHome($gameTeamHome)
    {
        $this->gameTeamHome = $gameTeamHome;
    }

    /**
     * @return mixed
     */
    public function getGameTeamAway()
    {
        return $this->gameTeamAway;
    }

    /**
     * @param mixed $gameTeamAway
     */
    public function setGameTeamAway($gameTeamAway)
    {
        $this->gameTeamAway = $gameTeamAway;
    }

    /**
     * @return mixed
     */
    public function getGameLocation()
    {
        return $this->gameLocation;
    }

    /**
     * @param mixed $gameLocation
     */
    public function setGameLocation($gameLocation)
    {
        $this->gameLocation = $gameLocation;
    }

    /**
     * @return mixed
     */
    public function getGameResult()
    {
        return $this->gameResult;
    }

    /**
     * @param mixed $gameResult
     */
    public function setGameResult($gameResult)
    {
        $this->gameResult = $gameResult;
    }
}