<?php
namespace tests;

use FilmTools\ExposureSeries\DensitiesAwareTrait;
use FilmTools\ExposureSeries\DensitiesProviderInterface;
use PHPUnit\Framework\TestCase;

class DensitiesAwareTraitTest extends TestCase
{


    /**
     * @dataProvider provideValidDensities
     */
    public function testGetterAndSetter( $densities )
    {
        $sut = $this->getMockForTrait(DensitiesAwareTrait::class);

        $this->assertNotEquals( $densities, $sut->getDensities());

        $sut->setDensities( $densities );
        $this->assertTrue( is_array($sut->getDensities()));
    }


    /**
     * @dataProvider provideValidDensities
     */
    public function testSetterWithDensitiesProviderInterface( $densities )
    {
        $sut = $this->getMockForTrait(DensitiesAwareTrait::class);

        $this->assertNotEquals( $densities, $sut->getDensities());

        $provider = $this->prophesize( DensitiesProviderInterface::class );
        $provider->getDensities()->willReturn( $densities );

        $sut->setDensities( $provider->reveal() );
        $this->assertEquals( $densities, $sut->getDensities());
    }


    /**
     * @dataProvider provideInvalidDensities
     */
    public function testInvalidSetting( $invalid_densities )
    {
        $sut = $this->getMockForTrait(DensitiesAwareTrait::class);

        $this->assertNotEquals( $invalid_densities, $sut->getDensities());
        $this->expectException( \InvalidArgumentException::class );
        $sut->setDensities( $invalid_densities );
    }


    public function provideInvalidDensities()
    {
        return array(
            [ "some_string"],
            [ 99 ],
            [ null ]
        );
    }

    public function provideValidDensities()
    {
        return array(
            [ array(2) ],
            [ new \ArrayObject(array(2)) ]
        );
    }
}
