<?php
namespace FilmTools\ExposureSeries;

trait ZonesAwareTrait
{
    use ZonesProviderTrait;


    /**
     * @param  array|Traversable $zones
     * @return self
     */
    public function setZones( $zones )
    {
        if ($zones instanceOf ZonesProviderInterface):
            $zones = $zones->getZones();
        elseif ($zones instanceOf \Traversable) :
            $zones = iterator_to_array( $zones );
        elseif (!is_array( $zones )):
            throw new \InvalidArgumentException("Traversable or array expected.", 1);
        endif;

        $this->zones = $zones;
        return $this;
    }

}
