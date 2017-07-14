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
    'name' => __("Weight / Mass", "gd-unit-converter"),
    'base' => 'mg',
    'list' => array(
        'mg' => __("Milligram", "gd-unit-converter"),
        'g' => __("Gram", "gd-unit-converter"),
        'kg' => __("Kilogram", "gd-unit-converter"),
        't' => __("Tonne", "gd-unit-converter"),
        'oz' => __("Ounce", "gd-unit-converter"),
        'lb' => __("Pound", "gd-unit-converter"),
        'st' => __("Stone", "gd-unit-converter"),
        'qtr' => __("Quarter", "gd-unit-converter"),
        'carat' => __("Carat", "gd-unit-converter")
    ),
    'convert' => array(
        'mg' => 1,
        'g' => 1000,
        'kg' => 1000000,
        't' => 1000000000,
        'oz' => 28349.5231,
        'lb' => 453592.37,
        'st' => 6350293.18,
        'qtr' => 12700586.36,
        'carat' => 205.196548333
    ),
    'system' => array(
        'metric' => array('mg', 'g', 'kg', 't'),
        'imperial' => array('oz', 'lb', 'carat', 'st', 'qtr'),
        'us' => array('oz', 'lb', 'carat', 'st', 'qtr')
    )
);

?>