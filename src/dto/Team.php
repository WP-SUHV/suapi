<?php namespace SUHV\Suapi\dto;

class Team
{
  private $teamId;
  private $teamName;
  private $teamTitle;
  private $league;

  function __construct($teamId, $teamName)
  {
    $this->teamId = $teamId;
    $this->teamName = $teamName;
  }

  public function __toString()
  {
    return $this->teamName . "(" . $this->teamId . ")";
  }

  public function equals(Team $team)
  {
    return ($this->getTeamId() == $team->getClubId());
  }

  /**
   * @return mixed
   */
  public function getTeamId()
  {
    return $this->teamId;
  }

  /**
   * @param mixed $teamId
   */
  public function setTeamId($teamId)
  {
    $this->teamId = $teamId;
  }

  /**
   * @return mixed
   */
  public function getTeamName()
  {
    return $this->teamName;
  }

  /**
   * @param mixed $teamName
   */
  public function setTeamName($teamName)
  {
    $this->teamName = $teamName;
  }

  /**
   * @return mixed
   */
  public function getLeague()
  {
    return $this->league;
  }

  /**
   * @param mixed $league
   */
  public function setLeague($league)
  {
    $this->league = $league;
  }

  /**
   * @return mixed
   */
  public function getTeamTitle()
  {
    return $this->teamTitle;
  }

  /**
   * @param mixed $teamTitle
   */
  public function setTeamTitle($teamTitle)
  {
    $this->teamTitle = $teamTitle;
  }
}