<?php namespace SUHV\Suapi\dto;

class Club
{
    private $clubId;
    private $clubName;

    function __construct($clubId, $clubName)
    {
        $this->clubId = $clubId;
        $this->clubName = $clubName;
    }

    public function __toString()
    {
        return $this->clubName . "(" . $this->clubId . ")";
    }

    public function equals(Club $club)
    {
        return ($this->getClubId() == $club->getClubId());
    }

    /**
     * @return mixed
     */
    public function getClubId()
    {
        return $this->clubId;
    }

    /**
     * @param mixed $clubId
     */
    public function setClubId($clubId)
    {
        $this->clubId = $clubId;
    }

    /**
     * @return mixed
     */
    public function getClubName()
    {
        return $this->clubName;
    }

    /**
     * @param mixed $clubName
     */
    public function setClubName($clubName)
    {
        $this->clubName = $clubName;
    }
}