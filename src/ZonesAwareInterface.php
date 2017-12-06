<?php
namespace FilmTools\ExposureSeries;

interface ZonesAwareInterface extends ZonesProviderInterface
{

    /**
     * @param array|Traversable $densities
     */
    public function setZones( $zones );

}
