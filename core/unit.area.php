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
    'name' => __("Area", "gd-unit-converter"),
    'base' => 'm2',
    'display' => array(
        'm2' => 'm&sup2;',
        'km2' => 'km&sup2;',
        'cm2' => 'cm&sup2;',
        'mm2' => 'mm&sup2;',
        'in2' => 'in&sup2;',
        'mi2' => 'mi&sup2;',
        'dt2' => 'ft&sup2;',
        'yd2' => 'yd&sup2;',
    ),
    'list' => array(
        'm2' => __("Square Meter", "gd-unit-converter"),
        'km2' => __("Square Kilometer", "gd-unit-converter"),
        'cm2' => __("Square Centimeter", "gd-unit-converter"),
        'mm2' => __("Square Milliimeter", "gd-unit-converter"),
        'in2' => __("Square Inch", "gd-unit-converter"),
        'mi2' => __("Square Mile", "gd-unit-converter"),
        'ft2' => __("Square Foot", "gd-unit-converter"),
        'yd2' => __("Square Yard", "gd-unit-converter"),
        'a' => __("Are", "gd-unit-converter"),
        'ha' => __("Hectare", "gd-unit-converter"),
        'acre' => __("Acre", "gd-unit-converter")
    ),
    'convert' => array(
        'm2' => 1,
        'km2' => 1000000,
        'cm2' => 0.0001,
        'mm2' => 0.0000001,
        'in2' => 0.00064516,
        'mi2' => 2589988.110336,
        'ft2' => 0.09290304,
        'yd2' => 0.83612736,
        'a' => 100,
        'ha' => 10000,
        'acre' => 4046.8564224
    ),
    'system' => array(
        'metric' => array('m2', 'km2', 'cm2', 'mm2', 'a', 'ha'),
        'imperial' => array('in2', 'mi2', 'ft2', 'yd2', 'acre'),
        'us' => array('in2', 'mi2', 'ft2', 'yd2', 'acre')
    )
);

?>