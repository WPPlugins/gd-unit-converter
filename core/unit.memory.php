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
    'name' => __("Memory", "gd-unit-converter"),
    'base' => 'B',
    'list' => array(
        'bit' => __("Bit", "gd-unit-converter"),
        'B' => __("Byte", "gd-unit-converter"),
        'KB' => __("Kilobyte", "gd-unit-converter"),
        'MB' => __("Megabyte", "gd-unit-converter"),
        'GB' => __("Gigabyte", "gd-unit-converter"),
        'TB' => __("Terabyte", "gd-unit-converter"),
        'PB' => __("Petabyte", "gd-unit-converter"),
        'CD74' => __("1 CD 74min", "gd-unit-converter"),
        'CD80' => __("1 CD 80min", "gd-unit-converter"),
        'DVD' => __("1 DVD", "gd-unit-converter"),
        'DVDDL' => __("1 DVD Dual Layer", "gd-unit-converter"),
        'BD' => __("1 BD", "gd-unit-converter"),
        'BDDL' => __("1 BD Dual Layer", "gd-unit-converter")
    ),
    'convert' => array(
        'bit' => 0.125,
        'B' => 1,
        'KB' => 1024,
        'MB' => 1048576,
        'GB' => 1073741824,
        'TB' => 1099511627800,
        'PB' => 1125899906800000,
        'CD74' => 681058304,
        'CD80' => 736279247,
        'DVD' => 5046586572.8,
        'DVDDL' => 9126805504,
        'BD' => 26843545600,
        'BDDL' => 53687091200
    )
);

?>