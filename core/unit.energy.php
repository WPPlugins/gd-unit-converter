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
    'name' => __("Energy", "gd-unit-converter"),
    'base' => 'Wh',
    'list' => array(
        'Wh' => __("Watt Hour", "gd-unit-converter"),
        'Ws' => __("Watt Second", "gd-unit-converter"),
        'mWh' => __("Milliwatt Hour", "gd-unit-converter"),
        'kWh' => __("Kilowatt Hour", "gd-unit-converter"),
        'MWh' => __("Kilowatt Hour", "gd-unit-converter"),
        'GWh' => __("Gigawatt Hour", "gd-unit-converter"),
        'cal' => __("Calorie", "gd-unit-converter"),
        'kcal' => __("Kilocalorie", "gd-unit-converter"),
        'J' => __("Joule", "gd-unit-converter"),
        'kJ' => __("Kilojoule", "gd-unit-converter"),
        'MJ' => __("Megajoule", "gd-unit-converter"),
        'GJ' => __("Gigajoule", "gd-unit-converter"),
        'uJ' => __("Microjoule", "gd-unit-converter"),
        'mJ' => __("Millijoule", "gd-unit-converter")
    ),
    'convert' => array(
        'Wh' => 1,
        'Ws' => 0.000277777777778,
        'mWh' => 0.001,
        'kWh' => 1000,
        'MWh' => 1000000,
        'GWh' => 1000000000,
        'cal' => 0.001163,
        'kcal' => 1.163,
        'J' => 0.000277777777778,
        'kJ' => 0.277777777777778,
        'MJ' => 277.777777777778,
        'GJ' => 277777.777777778,
        'uJ' => 0.000000000277777777778,
        'mJ' => 0.000000277777777778
    )
);

?>