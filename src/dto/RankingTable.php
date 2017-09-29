<?php namespace SUHV\Suapi\dto;

class RankingTable
{
    /**
     * @var LeagueAndGroup
     */
    private $rankingLeague;

    /**
     * Nr of separator in rankings table.
     * The separator is places after the NR --> Ranking place 8 followed by separator
     * @var int
     */
    private $rankingSeparator;

    /**
     * @var Ranking[]
     */
    private $rankings;

    /**
     * RankingTable constructor.
     * @param LeagueAndGroup $rankingLeague
     */
    public function __construct(LeagueAndGroup $rankingLeague)
    {
        $this->rankingLeague = $rankingLeague;
    }

    public function __toString()
    {
        return $this->rankingLeague . " (" . $this->rankings . ") with separator nr " . $this->rankingSeparator;
    }

    public function equals(RankingTable $rankingTable)
    {
        return ($this->getRankingLeague() == $rankingTable->getRankingLeague() && $this->getRankingSeparator() == $rankingTable->getRankingSeparator());
    }

    /**
     * @return LeagueAndGroup
     */
    public function getRankingLeague()
    {
        return $this->rankingLeague;
    }

    /**
     * @param LeagueAndGroup $rankingLeague
     */
    public function setRankingLeague($rankingLeague)
    {
        $this->rankingLeague = $rankingLeague;
    }

    /**
     * @return int
     */
    public function getRankingSeparator()
    {
        return $this->rankingSeparator;
    }

    /**
     * @param int $rankingSeparator
     */
    public function setRankingSeparator($rankingSeparator)
    {
        $this->rankingSeparator = $rankingSeparator;
    }

    /**
     * @return Ranking[]
     */
    public function getRankings()
    {
        return $this->rankings;
    }

    /**
     * @param Ranking[] $rankings
     */
    public function setRankings($rankings)
    {
        $this->rankings = $rankings;
    }

}