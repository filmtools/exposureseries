# FilmTools · ExposureSeries

**Collection of PHP interfaces and traits**

[![Build Status](https://travis-ci.org/filmtools/exposureseries.svg?branch=master)](https://travis-ci.org/filmtools/exposureseries)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/filmtools/exposureseries/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/filmtools/exposureseries/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/filmtools/exposureseries/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/filmtools/exposureseries/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/filmtools/exposureseries/badges/build.png?b=master)](https://scrutinizer-ci.com/g/filmtools/exposureseries/build-status/master)


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
