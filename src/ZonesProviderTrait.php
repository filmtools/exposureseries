<?php
namespace FilmTools\ExposureSeries;

trait ZonesProviderTrait
{

    /**
     * @var array
     */
    public $zones = array();

    /**
     * @return array
     */
    public function getZones()
    {
        return $this->zones;
    }

}
