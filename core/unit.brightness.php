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
    'name' => __("Brightness", "gd-unit-converter"),
    'base' => 'sb',
    'display' => array(
        'cd/cm2' => 'cd/cm&sup2;',
        'cd/m2' => 'cd/m&sup2;',
        'cd/in2' => 'cd/in&sup2;',
        'cd/ft2' => 'cd/ft&sup2;'
    ),
    'list' => array(
        'sb' => __("Stilb", "gd-unit-converter"),
        'cd/cm2' => __("Candela / square centimeter", "gd-unit-converter"),
        'cd/m2' => __("Candela / square meter", "gd-unit-converter"),
        'cd/in2' => __("Candela / square inch", "gd-unit-converter"),
        'cd/ft2' => __("Candela / square foot", "gd-unit-converter"),
        'La' => __("Lambert", "gd-unit-converter"),
        'fL' => __("FootLambert", "gd-unit-converter"),
        'mL' => __("MeterLambert", "gd-unit-converter"),
        'mLa' => __("MilliLambert", "gd-unit-converter")
    ),
    'convert' => array(
        'sb' => 1,
        'cd/cm2' => 1,
        'cd/m2' => 0.0001,
        'cd/in2' => 0.15500031000062,
        'cd/ft2' => 0.001076391041671,
        'La' => 0.318309886183791,
        'fL' => 0.000342625909964,
        'mL' => 0.0001,
        'mLa' => 0.000318309886184
    )
);

?>