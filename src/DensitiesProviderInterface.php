<?php
namespace FilmTools\ExposureSeries;

interface DensitiesProviderInterface
{
    /**
     * @return array
     */
    public function getDensities();
}
