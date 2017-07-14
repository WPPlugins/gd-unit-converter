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
    'name' => __("Electrical Charge", "gd-unit-converter"),
    'base' => 'C',
    'list' => array(
        'C' => __("Coulomb", "gd-unit-converter"),
        'nC' => __("Nanocoulomb", "gd-unit-converter"),
        'uC' => __("Microcoulomb", "gd-unit-converter"),
        'mC' => __("Millicoulomb", "gd-unit-converter"),
        'kC' => __("Kilocoulomb", "gd-unit-converter"),
        'MC' => __("Megacoulomb", "gd-unit-converter"),
        'GC' => __("Gigacoulomb", "gd-unit-converter"),
        'abC' => __("Abcoulomb", "gd-unit-converter"),
        'emu' => __("Electromagnetic unit of charge", "gd-unit-converter"),
        'ecu' => __("Electrostatic unit of chargee", "gd-unit-converter"),
        'F' => __("Faraday", "gd-unit-converter"),
        'Fr' => __("Franklin", "gd-unit-converter"),
        'Ah' => __("Ampere Hour", "gd-unit-converter"),
        'Am' => __("Ampere Minute", "gd-unit-converter"),
        'As' => __("Ampere Second", "gd-unit-converter"),
        'mAh' => __("Milliampere Hour", "gd-unit-converter"),
        'mAm' => __("Milliampere Minute", "gd-unit-converter"),
        'mAs' => __("Milliampere Second", "gd-unit-converter")
    ),
    'convert' => array(
        'C' => 1,
        'nC' => 0.000000001,
        'uC' => 0.000001,
        'mC' => 0.001,
        'kC' => 1000,
        'MC' => 1000000,
        'GC' => 1000000000,
        'abC' => 10,
        'emu' => 10,
        'ecu' => 0.000000000334,
        'F' => 96485.338300000003,
        'Fr' => 0.000000000334,
        'Ah' => 3600,
        'Am' => 60,
        'As' => 1,
        'mAh' => 3.6,
        'mAm' => 0.06,
        'mAs' => 0.001
    )
);

?>