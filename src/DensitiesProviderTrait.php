<?php
namespace FilmTools\ExposureSeries;

trait DensitiesProviderTrait
{

    /**
     * @var array
     */
    public $densities = array();

    /**
     * @return array
     */
    public function getDensities()
    {
        return $this->densities;
    }

}
