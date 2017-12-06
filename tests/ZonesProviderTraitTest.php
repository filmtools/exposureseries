<?php
namespace tests;

use FilmTools\ExposureSeries\ZonesProviderTrait;
use PHPUnit\Framework\TestCase;

class ZonesProviderTraitTest extends TestCase
{
    public function testGetInterceptor()
    {
        $mock = $this->getMockForTrait(ZonesProviderTrait::class);

        $data = array(2);

        // Trait introduces this attribute
        $this->assertObjectHasAttribute('zones', $mock);
        $mock->zones = $data;

        $this->assertEquals( $data, $mock->getZones());
    }
}
