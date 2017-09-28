<?php namespace SUHV\Suapi\dto;

class Ranking
{
  private $rankingLeague;
  private $rankingNr;
  private $rankingTeamName;
  private $rankingGamesCount;
  private $rankingGamesWon;
  private $rankingGamesWonAfterOvertime;
  private $rankingGamesLose;
  private $rankingGamesLoseAfterOvertime;
  private $rankingGamesDraw;
  private $rankingGoals;
  private $rankingGoalsDifference;
  private $rankingPoints;

  /**
   * Ranking constructor.
   * @param $rankingLeague
   * @param $rankingNr
   * @param $rankingTeamName
   * @param $rankingGamesCount
   * @param $rankingGamesWon
   * @param $rankingGamesLose
   * @param $rankingGoals
   * @param $rankingGoalsDifference
   * @param $rankingPoints
   * @param $rankingGamesDraw
   */
  public function __construct($rankingLeague, $rankingNr, $rankingTeamName, $rankingGamesCount, $rankingGamesWon, $rankingGamesLose, $rankingGamesDraw, $rankingGoals, $rankingGoalsDifference, $rankingPoints, $rankingGamesWonAfterOvertime = '', $rankingGamesLoseAfterOvertime = '')
  {
    $this->rankingLeague = $rankingLeague;
    $this->rankingNr = $rankingNr;
    $this->rankingTeamName = $rankingTeamName;
    $this->rankingGamesCount = $rankingGamesCount;
    $this->rankingGamesWon = $rankingGamesWon;
    $this->rankingGamesWonAfterOvertime = $rankingGamesWonAfterOvertime;
    $this->rankingGamesLose = $rankingGamesLose;
    $this->rankingGamesLoseAfterOvertime = $rankingGamesLoseAfterOvertime;
    $this->rankingGoals = $rankingGoals;
    $this->rankingGoalsDifference = $rankingGoalsDifference;
    $this->rankingPoints = $rankingPoints;
    $this->rankingGamesDraw = $rankingGamesDraw;
  }


  public function __toString()
  {
    return $this->rankingNr . ". " . $this->rankingTeamName;
  }

  public function equals(Ranking $ranking)
  {
    return ($this->getRankingLeague() == $ranking->getRankingLeague() && $this->getRankingGroup() == $ranking->getRankingGroup() && $this->getRankingNr() == $ranking->getRankingNr());
  }

  /**
   * @return mixed
   */
  public function getRankingLeague()
  {
    return $this->rankingLeague;
  }

  /**
   * @param mixed $rankingLeague
   */
  public function setRankingLeague($rankingLeague)
  {
    $this->rankingLeague = $rankingLeague;
  }

  /**
   * @return mixed
   */
  public function getRankingNr()
  {
    return $this->rankingNr;
  }

  /**
   * @param mixed $rankingNr
   */
  public function setRankingNr($rankingNr)
  {
    $this->rankingNr = $rankingNr;
  }

  /**
   * @return mixed
   */
  public function getRankingTeamName()
  {
    return $this->rankingTeamName;
  }

  /**
   * @param mixed $rankingTeamName
   */
  public function setRankingTeamName($rankingTeamName)
  {
    $this->rankingTeamName = $rankingTeamName;
  }

  /**
   * @return mixed
   */
  public function getRankingGamesCount()
  {
    return $this->rankingGamesCount;
  }

  /**
   * @param mixed $rankingGamesCount
   */
  public function setRankingGamesCount($rankingGamesCount)
  {
    $this->rankingGamesCount = $rankingGamesCount;
  }

  /**
   * @return mixed
   */
  public function getRankingGamesWon()
  {
    return $this->rankingGamesWon;
  }

  /**
   * @param mixed $rankingGamesWon
   */
  public function setRankingGamesWon($rankingGamesWon)
  {
    $this->rankingGamesWon = $rankingGamesWon;
  }

  /**
   * @return mixed
   */
  public function getRankingGamesWonAfterOvertime()
  {
    return $this->rankingGamesWonAfterOvertime;
  }

  /**
   * @param mixed $rankingGamesWonAfterOvertime
   */
  public function setRankingGamesWonAfterOvertime($rankingGamesWonAfterOvertime)
  {
    $this->rankingGamesWonAfterOvertime = $rankingGamesWonAfterOvertime;
  }

  /**
   * @return mixed
   */
  public function getRankingGamesLose()
  {
    return $this->rankingGamesLose;
  }

  /**
   * @param mixed $rankingGamesLose
   */
  public function setRankingGamesLose($rankingGamesLose)
  {
    $this->rankingGamesLose = $rankingGamesLose;
  }

  /**
   * @return mixed
   */
  public function getRankingGamesLoseAfterOvertime()
  {
    return $this->rankingGamesLoseAfterOvertime;
  }

  /**
   * @param mixed $rankingGamesLoseAfterOvertime
   */
  public function setRankingGamesLoseAfterOvertime($rankingGamesLoseAfterOvertime)
  {
    $this->rankingGamesLoseAfterOvertime = $rankingGamesLoseAfterOvertime;
  }

  /**
   * @return mixed
   */
  public function getRankingGamesDraw()
  {
    return $this->rankingGamesDraw;
  }

  /**
   * @param mixed $rankingGamesDraw
   */
  public function setRankingGamesDraw($rankingGamesDraw)
  {
    $this->rankingGamesDraw = $rankingGamesDraw;
  }

  /**
   * @return mixed
   */
  public function getRankingGoals()
  {
    return $this->rankingGoals;
  }

  /**
   * @param mixed $rankingGoals
   */
  public function setRankingGoals($rankingGoals)
  {
    $this->rankingGoals = $rankingGoals;
  }

  /**
   * @return mixed
   */
  public function getRankingGoalsDifference()
  {
    return $this->rankingGoalsDifference;
  }

  /**
   * @param mixed $rankingGoalsDifference
   */
  public function setRankingGoalsDifference($rankingGoalsDifference)
  {
    $this->rankingGoalsDifference = $rankingGoalsDifference;
  }

  /**
   * @return mixed
   */
  public function getRankingPoints()
  {
    return $this->rankingPoints;
  }

  /**
   * @param mixed $rankingPoints
   */
  public function setRankingPoints($rankingPoints)
  {
    $this->rankingPoints = $rankingPoints;
  }
}