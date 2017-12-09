<?php
namespace FilmTools\ExposureSeries;

interface DensitiesAwareInterface extends DensitiesProviderInterface
{

    /**
     * @param array|Traversable $densities
     */
    public function setDensities($densities);

}
