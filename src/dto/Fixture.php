<?php namespace SUHV\Suapi\dto;

class Fixture
{
  private $fixtureId;
  private $fixtureLeague;
  private $fixtureDatetime;
  private $fixtureLocation;
  private $fixtureHomeTeam;
  private $fixtureAwayTeam;
  private $fixtureResultText;

  private $fixtureHomeTeamGoals;
  private $fixtureAwayTeamGoals;

  /**
   * Fixture constructor.
   * @param $fixtureId
   * @param $fixtureLeague
   * @param $fixtureDatetime
   * @param $fixtureLocation
   * @param $fixtureHomeTeam
   * @param $fixtureAwayTeam
   * @param $fixtureResultText
   * @param $fixtureHomeTeamGoals
   * @param $fixtureAwayTeamGoals
   */
  public function __construct($fixtureId, $fixtureLeague, $fixtureDatetime, $fixtureLocation, $fixtureHomeTeam, $fixtureAwayTeam, $fixtureResultText)
  {
    $this->fixtureId = $fixtureId;
    $this->fixtureLeague = $fixtureLeague;
    $this->fixtureDatetime = $fixtureDatetime;
    $this->fixtureLocation = $fixtureLocation;
    $this->fixtureHomeTeam = $fixtureHomeTeam;
    $this->fixtureAwayTeam = $fixtureAwayTeam;
    $this->fixtureResultText = $fixtureResultText;

    $parsedResult = array();
    if (preg_match("/(\d.*)\:(\d.*)/", $this->fixtureResultText, $parsedResult)) {
      $this->fixtureHomeTeamGoals = $parsedResult[1];
      $this->fixtureAwayTeamGoals = $parsedResult[2];
    }
  }

  public function __toString()
  {
    return $this->fixtureDatetime . ": " . $this->fixtureHomeTeam . "(" . $this->fixtureId . ") vs. " . $this->fixtureAwayTeam;
  }

  public function equals(Fixture $fixture)
  {
    return ($this->getFixtureLeague() == $fixture->getFixtureLeague() && $this->getFixtureDatetime() == $fixture->getFixtureDatetime() && $this->getFixtureHomeTeam() == $fixture->getFixtureHomeTeam() && $this->getFixtureAwayTeam() == $fixture->getFixtureAwayTeam());
  }

  /**
   * @return mixed
   */
  public function getFixtureId()
  {
    return $this->fixtureId;
  }

  /**
   * @param mixed $fixtureId
   */
  public function setFixtureId($fixtureId)
  {
    $this->fixtureId = $fixtureId;
  }

  /**
   * @return mixed
   */
  public function getFixtureLeague()
  {
    return $this->fixtureLeague;
  }

  /**
   * @param mixed $fixtureLeague
   */
  public function setFixtureLeague($fixtureLeague)
  {
    $this->fixtureLeague = $fixtureLeague;
  }

  /**
   * @return mixed
   */
  public function getFixtureDatetime()
  {
    return $this->fixtureDatetime;
  }

  /**
   * @param mixed $fixtureDatetime
   */
  public function setFixtureDatetime($fixtureDatetime)
  {
    $this->fixtureDatetime = $fixtureDatetime;
  }

  /**
   * @return mixed
   */
  public function getFixtureLocation()
  {
    return $this->fixtureLocation;
  }

  /**
   * @param mixed $fixtureLocation
   */
  public function setFixtureLocation($fixtureLocation)
  {
    $this->fixtureLocation = $fixtureLocation;
  }

  /**
   * @return mixed
   */
  public function getFixtureHomeTeam()
  {
    return $this->fixtureHomeTeam;
  }

  /**
   * @param mixed $fixtureHomeTeam
   */
  public function setFixtureHomeTeam($fixtureHomeTeam)
  {
    $this->fixtureHomeTeam = $fixtureHomeTeam;
  }

  /**
   * @return mixed
   */
  public function getFixtureAwayTeam()
  {
    return $this->fixtureAwayTeam;
  }

  /**
   * @param mixed $fixtureAwayTeam
   */
  public function setFixtureAwayTeam($fixtureAwayTeam)
  {
    $this->fixtureAwayTeam = $fixtureAwayTeam;
  }

  /**
   * @return mixed
   */
  public function getFixtureResultText()
  {
    return $this->fixtureResultText;
  }

  /**
   * @param mixed $fixtureResultText
   */
  public function setFixtureResultText($fixtureResultText)
  {
    $this->fixtureResultText = $fixtureResultText;
  }

  /**
   * @return mixed
   */
  public function getFixtureHomeTeamGoals()
  {
    return $this->fixtureHomeTeamGoals;
  }

  /**
   * @param mixed $fixtureHomeTeamGoals
   */
  public function setFixtureHomeTeamGoals($fixtureHomeTeamGoals)
  {
    $this->fixtureHomeTeamGoals = $fixtureHomeTeamGoals;
  }

  /**
   * @return mixed
   */
  public function getFixtureAwayTeamGoals()
  {
    return $this->fixtureAwayTeamGoals;
  }

  /**
   * @param mixed $fixtureAwayTeamGoals
   */
  public function setFixtureAwayTeamGoals($fixtureAwayTeamGoals)
  {
    $this->fixtureAwayTeamGoals = $fixtureAwayTeamGoals;
  }
}