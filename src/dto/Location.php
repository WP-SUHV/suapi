<?php namespace SUHV\Suapi\dto;

class Location
{
    private $locationName;
    private $locationCity;
    private $locationLongitude;
    private $locationLatitude;

    /**
     * Location constructor.
     * @param $locationName
     * @param $locationCity
     */
    public function __construct($locationName = "", $locationCity = "")
    {
        $this->locationName = $locationName;
        $this->locationCity = $locationCity;
    }


    public function __toString()
    {
        return $this->locationName . ", " . $this->locationCity;
    }

    public function equals(Location $location)
    {
        return ($this->getLocationName() == $location->getLocationName());
    }

    /**
     * @return mixed
     */
    public function getLocationName()
    {
        return $this->locationName;
    }

    /**
     * @param mixed $locationName
     */
    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;
    }

    /**
     * @return mixed
     */
    public function getLocationCity()
    {
        return $this->locationCity;
    }

    /**
     * @param mixed $locationCity
     */
    public function setLocationCity($locationCity)
    {
        $this->locationCity = $locationCity;
    }

    /**
     * @return mixed
     */
    public function getLocationLongitude()
    {
        return $this->locationLongitude;
    }

    /**
     * @param mixed $locationLongitude
     */
    public function setLocationLongitude($locationLongitude)
    {
        $this->locationLongitude = $locationLongitude;
    }

    /**
     * @return mixed
     */
    public function getLocationLatitude()
    {
        return $this->locationLatitude;
    }

    /**
     * @param mixed $locationLatitude
     */
    public function setLocationLatitude($locationLatitude)
    {
        $this->locationLatitude = $locationLatitude;
    }
}