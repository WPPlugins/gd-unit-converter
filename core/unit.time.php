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
    'name' => __("Time", "gd-unit-converter"),
    'base' => 'ns',
    'list' => array(
        'ns' => __("Nanosecond", "gd-unit-converter"),
        'us' => __("Microsecond", "gd-unit-converter"),
        'ms' => __("Millisecond", "gd-unit-converter"),
        's' => __("Second", "gd-unit-converter"),
        'min' => __("Minute", "gd-unit-converter"),
        'hour' => __("Hour", "gd-unit-converter"),
        'day' => __("Day", "gd-unit-converter"),
        'week' => __("Week", "gd-unit-converter"),
        'month' => __("Month", "gd-unit-converter"),
        'year' => __("Year", "gd-unit-converter"),
        'century' => __("Century", "gd-unit-converter"),
        'millennium' => __("Millennium", "gd-unit-converter")
    ),
    'convert' => array(
        'ns' => 1,
        'us' => 1000,
        'ms' => 1000000,
        's' => 1000000000,
        'min' => 60000000000,
        'hour' => 3600000000000,
        'day' => 86400000000000,
        'week' => 604800000000000,
        'month' => 2592000000000000,
        'year' => 31556926000000000,
        'century' => 3155692600000000000,
        'millennium' => 31556926000000000000
    )
);

?>