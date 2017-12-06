<?php
namespace tests;

use FilmTools\ExposureSeries\ZonesAwareTrait;
use FilmTools\ExposureSeries\ZonesProviderInterface;
use PHPUnit\Framework\TestCase;

class ZonesAwareTraitTest extends TestCase
{


    /**
     * @dataProvider provideValidZones
     */
    public function testGetterAndSetter( $zones )
    {
        $sut = $this->getMockForTrait(ZonesAwareTrait::class);

        $this->assertNotEquals( $zones, $sut->getZones());

        $sut->setZones( $zones );
        $this->assertTrue( is_array($sut->getZones()));
    }


    /**
     * @dataProvider provideValidZones
     */
    public function testSetterWithDensitiesProviderInterface( $zones )
    {
        $sut = $this->getMockForTrait(ZonesAwareTrait::class);

        $this->assertNotEquals( $zones, $sut->getZones());

        $provider = $this->prophesize( ZonesProviderInterface::class );
        $provider->getZones()->willReturn( $zones );

        $sut->setZones( $provider->reveal() );
        $this->assertEquals( $zones, $sut->getZones());
    }



    /**
     * @dataProvider provideInvalidZones
     */
    public function testInvalidSetting( $invalid_zones )
    {
        $sut = $this->getMockForTrait(ZonesAwareTrait::class);

        $this->assertNotEquals( $invalid_zones, $sut->getZones());
        $this->expectException( \InvalidArgumentException::class );
        $sut->setZones( $invalid_zones );
    }


    public function provideValidZones()
    {
        return array(
            [ array(2) ],
            [ new \ArrayObject(array(2)) ]
        );
    }

    public function provideInvalidZones()
    {
        return array(
            [ "some_string"],
            [ 99 ],
            [ null ]
        );
    }
}
