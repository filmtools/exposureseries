<?php
namespace FilmTools\ExposureSeries;

trait DensitiesAwareTrait
{
    use DensitiesProviderTrait;


    /**
     * @param  array|Traversable $densities
     * @return self
     */
    public function setDensities( $densities )
    {
        if ($densities instanceOf DensitiesProviderInterface):
            $densities = $densities->getDensities();
        elseif ($densities instanceOf \Traversable) :
            $densities = iterator_to_array( $densities );
        elseif (!is_array( $densities )):
            throw new \InvalidArgumentException("Traversable or array expected.", 1);
        endif;

        $this->densities = $densities;
        return $this;
    }

}
