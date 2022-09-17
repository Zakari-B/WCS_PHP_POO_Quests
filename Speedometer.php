<?php

class Speedometer
{

    public const KM_MILES_CONVERSION_FACTOR = 1.60934;

    public static function convertMilesToKm(int $miles): ?float
    {
        return round($miles * self::KM_MILES_CONVERSION_FACTOR, 2, PHP_ROUND_HALF_UP);
    }

    public static function convertKmToMiles(int $km): ?float
    {
        return round($km / self::KM_MILES_CONVERSION_FACTOR, 2, PHP_ROUND_HALF_UP);
    }
}

echo Speedometer::convertKmToMiles(10);
