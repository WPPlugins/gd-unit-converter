<?php

/*
Name:    gduc_Units: Angle
Version: 2.0
Author:  Milan Petrovic
Email:   milan@gdragon.info
Website: http://www.dev4press.com/
Info:    http://en.wikipedia.org/wiki/Unit_conversion
*/

$gduc_unit_loading = array(
    'name' => __("Angle", "gd-unit-converter"),
    'base' => 'radian',
    'list' => array(
        'radian' => __("Radian", "gd-unit-converter"),
        'grad' => __("Grad", "gd-unit-converter"),
        'degree' => __("Degree", "gd-unit-converter"),
        'minute' => __("Minute", "gd-unit-converter"),
        'second' => __("Second", "gd-unit-converter"),
        'revolution' => __("Revolution", "gd-unit-converter"),
    ),
    'convert' => array(
        'radian' => 1,
        'grad' => 0.015707963268,
        'degree' => 0.01745329252,
        'minute' => 0.00029088820867,
        'second' => 0.0000048481368111,
        'revolution' => 6.283185307,
    )
);

?>