# FilmTools · ExposureSeries

**Collection of PHP interfaces and traits**

## Interfaces

- **DensitiesProviderInterface**
- **DensitiesAwareInterface** extends *DensitiesProviderInterface*- **ZonesProviderInterface**- **ZonesAwareInterface** extends *ZonesProviderInterface*- **ExposureSeriesInterface** extends *DensitiesProviderInterface* and *ZonesProviderInterface*## Traits- **ZonesProviderTrait**
- **ZonesAwareTrait**
- **DensitiesProviderTrait**
- **DensitiesAwareTrait**

## Unit testing

```bash
$ vendor/bin/phpunit
```
