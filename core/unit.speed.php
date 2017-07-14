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
    'name' => __("Speed", "gd-unit-converter"),
    'base' => 'kp/h',
    'list' => array(
        'mp/s' => __("Meters per second", "gd-unit-converter"),
        'kp/h' => __("Kilometers per hour", "gd-unit-converter"),
        'mp/h' => __("Miles per hour", "gd-unit-converter"),
        'kn' => __("Knots", "gd-unit-converter")
    ),
    'convert' => array(
        'mp/s' => 3.6,
        'kp/h' => 1,
        'mp/h' => 1.609344,
        'kn' => 1.852
    ),
    'system' => array(
        'metric' => array('mp/s', 'kp/h'),
        'imperial' => array('mp/h'),
        'us' => array('mp/h')
    )
);

?>