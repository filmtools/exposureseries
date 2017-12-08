# FilmTools · ExposureSeries

**Collection of PHP interfaces and traits**

[![Build Status](https://travis-ci.org/filmtools/exposureseries.svg?branch=master)](https://travis-ci.org/filmtools/exposureseries)

## Installation

```bash
$ composer require filmtools/exposureseries
```


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
