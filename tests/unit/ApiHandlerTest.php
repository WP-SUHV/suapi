<?php

use SUHV\Suapi\ApiHandler;
use SUHV\Suapi\dto\Club;
use SUHV\Suapi\dto\Team;
use SUHV\Suapi\dto\LeagueAndGroup;
use PHPUnit\Framework\TestCase;

class ApiHandlerTest extends TestCase
{
    /**
     * Api handler
     * @var ApiHandler $apiHandler
     */
    protected static $apiHandler;

    public function setUp()
    {
        self::$apiHandler = new ApiHandler("https://api-v2.swissunihockey.ch/api/", "", "", false);
    }

    public function testPushAndPop()
    {
        $stack = [];
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }

    /**
     * Test all clubs query from api handler
     * @return void
     */
    public function testIsConnected()
    {
        $this->assertTrue(self::$apiHandler->isConnected());
    }

    /**
     * Test all clubs query from api handler
     * @return void
     */
    public function testGetClubs()
    {
        $allClubs = self::$apiHandler->getClubs();
        $this->assertInstanceOf('SUHV\Suapi\dto\Club', $allClubs[0]);
    }

    /**
     * Test all teams query from api handler
     * @return void
     */
    public function testGetTeamsForClub()
    {
        $allTeams = self::$apiHandler->getTeamsForClub(new Club(377, "FB Riders DBR"));
        $this->assertInstanceOf('SUHV\Suapi\dto\Team', $allTeams[0]);
    }

    /**
     * Test CreateFromTeamName
     * @return void
     */
    public function testCreateLeagueFromTeamName()
    {
        $leagueAndGroup = LeagueAndGroup::CreateFromTeamName("Herren 3. Liga Gruppe 10");
        $this->assertEquals(5, $leagueAndGroup->getLeagueId());
        $this->assertEquals(10, $leagueAndGroup->getLeagueGroup());
    }

    /**
     * Test CreateFromLeagueName
     * @return void
     */
    public function testCreateFromLeagueName()
    {
        $leagueAndGroup = LeagueAndGroup::CreateFromLeagueName("Herren Aktive GF 1. Liga");
        $this->assertEquals(3, $leagueAndGroup->getLeagueId());
        $this->assertEquals("GF", $leagueAndGroup->getLeagueType());
    }

    /**
     * Test all games query from api handler
     * @return void
     */
    public function testGetGamesForClub()
    {
        $allGames = self::$apiHandler->getGamesForClub(new Club(377, "FB Riders DBR"));
        $this->assertInstanceOf('SUHV\Suapi\dto\Game', $allGames[0]);
    }

    /**
     * Test all games query from api handler
     * @return void
     */
    public function testGetGamesForTeam()
    {
        $allGames = self::$apiHandler->getGamesForTeam(new Team(428988, "Herren 3. Liga Gruppe 10"));
        $this->assertInstanceOf('SUHV\Suapi\dto\Game', $allGames[0]);
    }

    /**
     * Test ranking for team query from api handler
     * @return void
     */
    public function testGetRankingsForLigaTeam()
    {
        self::$apiHandler->setYearForQuery(2014);
        $rankingsTable = self::$apiHandler->getRankingForTeam(new Team(428988, "Herren 3. Liga Gruppe 10"));
        $this->assertInstanceOf('SUHV\Suapi\dto\Ranking', $rankingsTable->getRankings()[0]);
    }

    /**
     * Test ranking for team query from api handler
     * @return void
     */
    public function testGetRankingsForNLATeam()
    {
        self::$apiHandler->setYearForQuery(2014);
        $rankingsTable = self::$apiHandler->getRankingForTeam(new Team(428535, "Herren NLA Gruppe 1"));
        $this->assertInstanceOf('SUHV\Suapi\dto\Ranking', $rankingsTable->getRankings()[0]);
    }

    /**
     * Test get single Team by ID from api handle
     */
    public function testGetTeamByID()
    {
        $team = self::$apiHandler->GetTeamById(428535);
        $this->assertEquals('UHC Uster', $team->getTeamTitle());
    }

    /**
     * Test fixture list for team query from api handler
     * @return void
     */
    public function testGetFixtureListForLigaTeam()
    {
        self::$apiHandler->setYearForQuery(2015);
        $fixtureList = self::$apiHandler->getFixtureListForTeam(new Team(428988, "Herren 3. Liga Gruppe 10"));
        $this->assertInstanceOf('SUHV\Suapi\dto\Fixture', $fixtureList->getFixtures()[0]);
    }
}
