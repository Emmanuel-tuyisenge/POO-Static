<?php


class Speedometer
{
    const convert = [
        '1Km' => 0.62,
        '1miles' => 1.609
    ];

    public static function convertKmToMiles($number)
    {
        return number_format($number * self::convert['1Km']);
    }

    public static function convertMilesToKm($number)
    {
        return number_format($number * self::convert['1miles']);
    }
}