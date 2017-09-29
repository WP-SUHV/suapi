<?php namespace SUHV\Suapi\dto;

class LeagueAndGroup
{
    private $leagueName;
    private $leagueGroup;
    private $hasSmallGameField = false;
    private $isCup = false;
    private $leagueId;
    private $leagueGameClassId;

    /**
     * LeagueAndGroup constructor.
     * @param $leagueName
     */
    public function __construct($leagueName)
    {
        $this->leagueName = $leagueName;
    }

    public static function CreateFromTeamName($teamName)
    {
        preg_match("/([a-zA-Z]+)\s(\d*)\.\sLiga\sGruppe\s(\d*)/", $teamName, $parsed);
        $league = new LeagueAndGroup($parsed[1] . " " . $parsed[2] . ". Liga");
        $league->setLeagueId(self::nonNlaOrNlbLeague($parsed[2]));
        $league->setLeagueGroup($parsed[3]);
        return $league;
    }

    /**
     * Add two because NLA and NLB are 1 and 2
     * @param $leagueId
     * @return int
     */
    public static function nonNlaOrNlbLeague($leagueId)
    {
        return $leagueId + 2;
    }

    public static function CreateFromLeagueName($leagueName)
    {
        $league = new LeagueAndGroup($leagueName);
        //print_r($leagueName);
        if (preg_match("/(Schweizer\sCup\sHerren)/", $leagueName, $parsed)) { //Schweizer Cup Herren
            $league->setHasSmallGameField(false);
            $league->setIsCup(true);
        } else if (preg_match("/(Schweizer\sCup\sDamen)/", $leagueName, $parsed)) { //Schweizer Cup Damen
            $league->setHasSmallGameField(false);
            $league->setIsCup(true);
        } else if (preg_match("/(Ligacup\sHerren)/", $leagueName, $parsed)) { //Ligacup Herren
            $league->setHasSmallGameField(true);
            $league->setIsCup(true);
        } else if (preg_match("/(Ligacup\sDamen)/", $leagueName, $parsed)) { //Ligacup Damen
            $league->setHasSmallGameField(true);
            $league->setIsCup(true);
        } else if (preg_match("/([a-zA-Z]+)\s[a-zA-Z]+\s([a-zA-Z]+)\s(\d*)\.\sLiga/", $leagueName, $parsed)) { //Herren Aktive GF 1. Liga
            //print_r($parsed);
            $league->setHasSmallGameField($parsed[2]);
            $league->setLeagueId(self::nonNlaOrNlbLeague($parsed[3]));
        } else if (preg_match("/(Junioren|Juniorinnen)\s(\S)(\d\d)\s(.*)/", $leagueName, $parsed)) { //Junioren U21 B
            $league->setHasSmallGameField(false);
            //print_r($parsed);
        } else if (preg_match("/(Junioren|Juniorinnen)\s(\S)\s(.*)/", $leagueName, $parsed)) { //Junioren E Regional
            $league->setHasSmallGameField(true);
            //print_r($parsed);
        } else if (preg_match("/(\S)(\d\d)\s(.*)/", $leagueName, $parsed)) {//U17 Trophy Interregional
            //print_r($parsed);
            $league->setHasSmallGameField(false);
        }
        return $league;
    }

    /**
     * @return mixed
     */
    public function getisCup()
    {
        return $this->isCup;
    }

    /**
     * @param mixed $isCup
     */
    public function setIsCup($isCup)
    {
        $this->isCup = $isCup;
    }

    /**
     * @return mixed
     */
    public function getLeagueName()
    {
        return $this->leagueName;
    }

    /**
     * @param mixed $leagueName
     */
    public function setLeagueName($leagueName)
    {
        $this->leagueName = $leagueName;
    }

    /**
     * @return mixed
     */
    public function getLeagueGroup()
    {
        return $this->leagueGroup;
    }

    /**
     * @param mixed $leagueGroup
     */
    public function setLeagueGroup($leagueGroup)
    {
        $this->leagueGroup = $leagueGroup;
    }

    /**
     * @return mixed
     */
    public function getHasSmallGameField()
    {
        return $this->hasSmallGameField;
    }

    /**
     * @param mixed $hasSmallGameField
     */
    public function setHasSmallGameField($hasSmallGameField)
    {
        $this->hasSmallGameField = $hasSmallGameField;
    }

    /**
     * @return mixed
     */
    public function getLeagueGameClassId()
    {
        return $this->leagueGameClassId;
    }

    /**
     * @param mixed $leagueGameClassId
     */
    public function setLeagueGameClassId($leagueGameClassId)
    {
        $this->leagueGameClassId = $leagueGameClassId;
    }

    public function __toString()
    {
        return $this->leagueName . "(" . $this->leagueId . ")";
    }

    public function equals(League $leauge)
    {
        return ($this->getLeagueId() == $leauge->getLeagueId());
    }

    /**
     * @return mixed
     */
    public function getLeagueId()
    {
        return $this->leagueId;
    }

    /**
     * @param mixed $leagueId
     */
    public function setLeagueId($leagueId)
    {
        $this->leagueId = $leagueId;
    }
}