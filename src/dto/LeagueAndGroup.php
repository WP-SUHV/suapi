<?php namespace SUHV\Suapi\dto;

class LeagueAndGroup
{
  private $leagueName;
  private $leagueGroup;
  private $leagueType;
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

  public static function CreateFromLeagueName($leagueName)
  {
    $league = new LeagueAndGroup($leagueName);
    //print_r($leagueName);
    if (preg_match("/([a-zA-Z]+)\s[a-zA-Z]+\s([a-zA-Z]+)\s(\d*)\.\sLiga/", $leagueName, $parsed)) { //Herren Aktive GF 1. Liga
      //print_r($parsed);
      $league->setLeagueType($parsed[2]);
      $league->setLeagueId(self::nonNlaOrNlbLeague($parsed[3]));
    } else if (preg_match("/(Junioren|Juniorinnen)\s(\S)(\d\d)\s(.*)/", $leagueName, $parsed)) { //Junioren U21 B
      $league->setLeagueType("GF");
      //print_r($parsed);
    } else if (preg_match("/(Junioren|Juniorinnen)\s(\S)\s(.*)/", $leagueName, $parsed)) { //Junioren E Regional
      $league->setLeagueType("KF");
      //print_r($parsed);
    } else if (preg_match("/(\S)(\d\d)\s(.*)/", $leagueName, $parsed)) {//U17 Trophy Interregional
      //print_r($parsed);
      $league->setLeagueType("GF");
    }
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
  public function getLeagueType()
  {
    return $this->leagueType;
  }

  /**
   * @param mixed $leagueType
   */
  public function setLeagueType($leagueType)
  {
    $this->leagueType = $leagueType;
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
}