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
    'name' => __("Frequency", "gd-unit-converter"),
    'base' => 'Hz',
    'list' => array(
        'Hz' => __("Hertz", "gd-unit-converter"),
        'kHz' => __("Kilohertz", "gd-unit-converter"),
        'MHz' => __("Megahertz", "gd-unit-converter"),
        'GHz' => __("Gigahertz", "gd-unit-converter"),
        'THz' => __("Terahertz", "gd-unit-converter"),
        'mHz' => __("Millihertz", "gd-unit-converter"),
        'rad/hr' => __("Radian / Hour", "gd-unit-converter"),
        'rad/min' => __("Radian / Minute", "gd-unit-converter"),
        'rad/s' => __("Radian / Second", "gd-unit-converter"),
        'deg/hr' => __("Degree / Hour", "gd-unit-converter"),
        'deg/min' => __("Degree / Minute", "gd-unit-converter"),
        'deg/s' => __("Degree / Second", "gd-unit-converter"),
        'cps' => __("Cycle / Second", "gd-unit-converter")
    ),
    'convert' => array(
        'Hz' => 1,
        'kHz' => 1000,
        'MHz' => 1000000,
        'GHz' => 1000000000,
        'THz' => 1000000000000,
        'mHz' => 0.001,
        'rad/hr' => 0.000044209706414415,
        'rad/min' => 0.002652582384865,
        'rad/s' => 0.159154943091895,
        'deg/hr' => 0.000000771604938272,
        'deg/min' => 0.000046296296296296,
        'deg/s' => 0.002777777777778,
        'cps' => 1,
    )
);

?>