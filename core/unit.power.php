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
    'name' => __("Power", "gd-unit-converter"),
    'base' => 'W',
    'list' => array(
        'W' => __("Watt", "gd-unit-converter"),
        'kW' => __("Kilowatt", "gd-unit-converter"),
        'MB' => __("Megawatt", "gd-unit-converter"),
        'GB' => __("Gigawatt", "gd-unit-converter"),
        'hp' => __("Horsepower", "gd-unit-converter"),
        'hp-m' => __("Horsepower metric", "gd-unit-converter"),
        'mhp' => __("Millihorsepower", "gd-unit-converter"),
        'cal/hr' => __("Calorie / hour", "gd-unit-converter"),
        'cal/min' => __("Calorie / minute", "gd-unit-converter"),
        'cal/sec' => __("Calorie / second", "gd-unit-converter"),
        'joule/hr' => __("Joule / hour", "gd-unit-converter"),
        'joule/min' => __("Joule / minute", "gd-unit-converter"),
        'joule/sec' => __("Joule / second", "gd-unit-converter")
    ),
    'convert' => array(
        'W' => 1,
        'kB' => 1000,
        'MB' => 1000000,
        'GB' => 1000000000,
        'hp' => 745.69987158227,
        'hp-m' => 735.49875,
        'mhp' => 0.74569987158227,
        'cal/hr' => 0.001163,
        'cal/min' => 0.06978,
        'cal/sec' => 4.1868,
        'joule/hr' => 0.000277777777778,
        'joule/min' => 0.016666666666667,
        'joule/sec' => 1,
    )
);

?>