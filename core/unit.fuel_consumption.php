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
    'name' => __("Fuel Consumption", "gd-unit-converter"),
    'base' => 'L/km',
    'display' => array(
        'km/gallon/uk' => 'km/gallon',
        'km/gallon/us' => 'km/gallon',
        'mile/gallon/uk' => 'mile/gallon',
        'mile/gallon/us' => 'mile/gallon',
        'gallon/km/uk' => 'gallon/km',
        'gallon/km/us' => 'gallon/km',
        'gallon/mile/uk' => 'gallon/mile',
        'gallon/mile/us' => 'gallon/mile',
    ),
    'list' => array(
        'L/km' => __("Liter/100 Kilometer", "gd-unit-converter"),
        'L/mile' => __("Liter/100 Mile", "gd-unit-converter"),
        'km/L' => __("Kilometer/Liter", "gd-unit-converter"),
        'mile/L' => __("Mile/Liter", "gd-unit-converter"),
        'km/gallon/uk' => __("Kilometer/Gallon - UK", "gd-unit-converter"),
        'km/gallon/us' => __("Kilometer/Gallon - US", "gd-unit-converter"),
        'mile/gallon/uk' => __("Mile/Gallon - UK", "gd-unit-converter"),
        'mile/gallon/us' => __("Mile/Gallon - US", "gd-unit-converter"),
        'gallon/km/uk' => __("Gallon/100 Kilometer - UK", "gd-unit-converter"),
        'gallon/km/us' => __("Gallon/100 Kilometer - US", "gd-unit-converter"),
        'gallon/mile/uk' => __("Gallon/100 Mile - UK", "gd-unit-converter"),
        'gallon/mile/us' => __("Gallon/100 Mile - US", "gd-unit-converter")
    ),
    'convert' => array(
        'L/km' => 1,
        'L/mile' => 0.621371192237334,
        'km/L' => 100,
        'mile/L' => 62.1371192237334,
        'km/gallon/uk' => 454.609,
        'km/gallon/us' => 378.5411784,
        'mile/gallon/uk' => 282.480936331822,
        'mile/gallon/us' => 235.214583333333,
        'gallon/km/uk' => 4.54609,
        'gallon/km/us' => 3.785411784,
        'gallon/mile/uk' => 2.82480936331822,
        'gallon/mile/us' => 2.35214583333333
    ),
    'system' => array(
        'metric' => array('L/km', 'km/L'),
        'imperial' => array('L/mile', 'mile/L', 'mile/gallon/uk', 'gallon/mile/uk'),
        'us' => array('L/mile', 'mile/L', 'mile/gallon/us', 'gallon/mile/us')
    )
);

?>