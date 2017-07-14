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
    'name' => __("Temperature", "gd-unit-converter"),
    'base' => 'C',
    'list' => array(
        'C' => __("Celsius", "gd-unit-converter"),
        'F' => __("Fahrenheit", "gd-unit-converter"),
        'K' => __("Kelvin", "gd-unit-converter"),
        'R' => __("Reaumur", "gd-unit-converter")
    ),
    'convert' => array(
        'C' => array('ratio' => 1, 'offset' => 0),
        'F' => array('ratio' => 1.8, 'offset' => 32),
        'K' => array('ratio' => 1, 'offset' => 273),
        'R' => array('ratio' => 0.8, 'offset' => 0)
    ),
    'system' => array(
        'metric' => array('C'),
        'imperial' => array('F'),
        'us' => array('F')
    )
);

?>