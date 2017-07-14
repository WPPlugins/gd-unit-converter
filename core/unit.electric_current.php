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
    'name' => __("Electric Current", "gd-unit-converter"),
    'base' => 'A',
    'list' => array(
        'A' => __("Ampere", "gd-unit-converter"),
        'mA' => __("Milliampere", "gd-unit-converter"),
        'abamp' => __("Abamper", "gd-unit-converter"),
        'MA' => __("Megampere", "gd-unit-converter"),
        'esu/s' => __("Statampere", "gd-unit-converter")
    ),
    'convert' => array(
        'A' => 1,
        'mA' => 0.001,
        'abamp' => 10,
        'MA' => 0.000333564095198,
        'esu/s' => 3.33564095198152e-010
    )
);

?>