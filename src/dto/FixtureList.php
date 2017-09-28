<?php namespace SUHV\Suapi\dto;

class FixtureList
{
  /**
   * @var LeagueAndGroup
   */
  private $fixtureListLeague;

  /**
   * @var Fixture[]
   */
  private $fixtures;

  /**
   * RankingTable constructor.
   * @param LeagueAndGroup $rankingLeague
   */
  public function __construct(LeagueAndGroup $fixtureListLeague)
  {
    $this->fixtureListLeague = $fixtureListLeague;
  }

  public function __toString()
  {
    return $this->fixtureListLeague . " (" . $this->fixtures . ")";
  }

  public function equals(FixtureList $fixtureList)
  {
    return ($this->getFixtureListLeague() == $fixtureList->getFixtureListLeague() && $this->getFixtures() == $fixtureList->getFixtures());
  }

  /**
   * @return LeagueAndGroup
   */
  public function getFixtureListLeague()
  {
    return $this->fixtureListLeague;
  }

  /**
   * @param LeagueAndGroup $fixtureListLeague
   */
  public function setFixtureListLeague($fixtureListLeague)
  {
    $this->fixtureListLeague = $fixtureListLeague;
  }

  /**
   * @return Fixture[]
   */
  public function getFixtures()
  {
    return $this->fixtures;
  }

  /**
   * @param Fixture[] $fixtures
   */
  public function setFixtures($fixtures)
  {
    $this->fixtures = $fixtures;
  }
}