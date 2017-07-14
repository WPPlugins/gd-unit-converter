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
    'name' => __("Sound", "gd-unit-converter"),
    'base' => 'B',
    'list' => array(
        'B' => __("Bel", "gd-unit-converter"),
        'dB' => __("Decibel", "gd-unit-converter"),
        'neper' => __("Neper", "gd-unit-converter")
    ),
    'convert' => array(
        'B' => 1,
        'dB' => 10,
        'neper' => 1.1512779
    )
);

?>