<?php

/*
Name:    gduc_Units: Length
Version: 2.0
Author:  Milan Petrovic
Email:   milan@gdragon.info
Website: http://www.dev4press.com/
Info:    http://en.wikipedia.org/wiki/Unit_conversion
*/

$gduc_unit_loading = array(
    'name' => __("Lenght or Distance", "gd-unit-converter"),
    'base' => 'mm',
    'list' => array(
        'mm' => __("Millimeter", "gd-unit-converter"),
        'cm' => __("Centimeter", "gd-unit-converter"),
        'dm' => __("Decimeter", "gd-unit-converter"),
        'm' => __("Meter", "gd-unit-converter"),
        'km' => __("Kilometer", "gd-unit-converter"),
        'in' => __("Inch", "gd-unit-converter"),
        'ft' => __("Feet", "gd-unit-converter"),
        'yd' => __("Yard", "gd-unit-converter"),
        'mi' => __("Mile", "gd-unit-converter")
    ),
    'convert' => array(
        'mm' => 1,
        'cm' => 10,
        'dm' => 100,
        'm' => 1000,
        'km' => 1000000,
        'in' => 25.4,
        'ft' => 304.8,
        'yd' => 914.4,
        'mi' => 1609344
    ),
    'system' => array(
        'metric' => array('mm', 'cm', 'dm', 'm', 'km'),
        'imperial' => array('in', 'ft', 'yd', 'mi'),
        'us' => array('in', 'ft', 'yd', 'mi')
    )
);

?>