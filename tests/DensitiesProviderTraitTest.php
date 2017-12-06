<?php
namespace tests;

use FilmTools\ExposureSeries\DensitiesProviderTrait;
use PHPUnit\Framework\TestCase;

class DensitiesProviderTraitTest extends TestCase
{
    public function testGetInterceptor()
    {
        $mock = $this->getMockForTrait(DensitiesProviderTrait::class);

        $data = array(2);

        // Trait introduces this attribute
        $this->assertObjectHasAttribute('densities', $mock);
        $mock->densities = $data;

        $this->assertEquals( $data, $mock->getDensities());
    }
}
