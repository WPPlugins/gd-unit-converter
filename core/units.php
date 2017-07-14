<?php

/*
Name:    gduc_Units
Version: 2.0.0
Author:  Milan Petrovic
Email:   milan@gdragon.info
Website: http://www.dev4press.com/

== Copyright ==
Copyright 2008 - 2014 Milan Petrovic (email: milan@gdragon.info)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if (!class_exists('gduc_Units')) {
    /**
     * Class for the conversion of values with different units.
     */
    class gduc_Units {
        public $data = array();
        public $units = array();

        /**
         * Runs the initialization of the units convertion arrays.
         */
        public function __construct() {
            $this->init();
        }

        /**
         * Initialization of conversion arrays.
         */
        public function init() {
            $this->units = array(
                'angle' => array('source' => '__internal__', 'name' => __("Angle", "gd-unit-converter")), 
                'area' => array('source' => '__internal__', 'name' => __("Area", "gd-unit-converter")), 
                'brightness' => array('source' => '__internal__', 'name' => __("Brightness", "gd-unit-converter")), 
                'currency' => array('source' => '__internal__', 'name' => __("Currency", "gd-unit-converter")), 
                'electric_current' => array('source' => '__internal__', 'name' => __("Electric Current", "gd-unit-converter")), 
                'electrical_charge' => array('source' => '__internal__', 'name' => __("Electrical Charge", "gd-unit-converter")), 
                'energy' => array('source' => '__internal__', 'name' => __("Energy", "gd-unit-converter")),
                'frequency' => array('source' => '__internal__', 'name' => __("Frequency", "gd-unit-converter")),
                'fuel_consumption' => array('source' => '__internal__', 'name' => __("Fuel Consumption", "gd-unit-converter")), 
                'length' => array('source' => '__internal__', 'name' => __("Lenght or Distance", "gd-unit-converter")), 
                'memory' => array('source' => '__internal__', 'name' => __("Memory", "gd-unit-converter")), 
                'power' => array('source' => '__internal__', 'name' => __("Power", "gd-unit-converter")), 
                'sound' => array('source' => '__internal__', 'name' => __("Sound", "gd-unit-converter")), 
                'speed' => array('source' => '__internal__', 'name' => __("Speed", "gd-unit-converter")),
                'temperature' => array('source' => '__internal__', 'name' => __("Temperature", "gd-unit-converter")),
                'time' => array('source' => '__internal__', 'name' => __("Time", "gd-unit-converter")), 
                'volume' => array('source' => '__internal__', 'name' => __("Volume", "gd-unit-converter")),
                'weight' => array('source' => '__internal__', 'name' => __("Weight / Mass", "gd-unit-converter"))
            );
        }

        /**
         * Register new unit type.
         * 
         * @param string $name name of the unit
         * @param string $title label or title of the unit type
         * @param string $source path to the unit definition file
         */
        public function register_unit_type($name, $title, $source) {
            if (isset($this->units[$name])) {
                unset($this->data[$name]);
            }

            $this->units[$name] = array('source' => $source, 'name' => $title);
        }

        /**
         * Check if unit is valid.
         *
         * @param string $name unit category name
         * @param string $unit unit name
         * @return bool
         */
        public function is_unit_valid($name, $unit) {
            $this->load_unit_type($name);

            if (isset($this->data[$name])) {
                return isset($this->data[$name]['list'][$unit]);
            } else {
                return false;
            }
        }
        
        /**
         * Get values for the a unit.
         *
         * @param string $name name of the unit
         * @return array unit values
         */
        public function get_values($name) {
            $this->load_unit_type($name);

            $data = $this->data[$name]['list'];
            $data = apply_filters('gduc_unit_values_for_'.$name, $data);

            return $data;
        }

        /**
         * Get the list of units.
         *
         * @return array associative array with units
         */
        public function get_units() {
            $data = array();

            foreach ($this->units as $unit => $obj) {
                $data[$unit] = $obj['name'];
            }

            return $data;
        }

        /**
         * Convert value from base unit value to selected unit.
         *
         * @param string $name name of the unit type
         * @param number $value value to convert
         * @param string $to name of the unit to convert into
         * @return number converted value
         */
        public function from_base($name, $value, $to) {
            $this->load_unit_type($name);

            if (!isset($this->data[$name])) {
                return null;
            }

            if ($name != 'currency') {
                return $this->convert($name, $value, $this->data[$name]['base'], $to);
            } else {
                return null;
            }
        }

        /**
         * Convert value to base unit value from selected unit.
         *
         * @param string $name name of the unit type
         * @param number $value value to convert
         * @param string $from name of the unit to convert from
         * @return number converted value
         */
        public function to_base($name, $value, $from) {
            $this->load_unit_type($name);

            if (!isset($this->data[$name])) return null;

            if ($name != 'currency') {
                return $this->convert($name, $value, $from, $this->data[$name]['base']);
            } else {
                return null;
            }
        }

        /**
         * Convert value for unit.
         *
         * @param string $name name of the unit type
         * @param number $value value to convert
         * @param string $from name of the unit to convert from
         * @param string $to name of the unit to convert into
         * @return number converted value
         */
        public function convert($name, $value, $from, $to) {
            $this->load_unit_type($name);

            if (!isset($this->data[$name])) return null;

            if ($name == 'currency') {
                return $this->conv_currency($value, $from, $to);
            } else {
                $base = $this->data[$name]['base'];
                $ratio_from = $this->data[$name]['convert'][$from];
                $ratio_to = $this->data[$name]['convert'][$to];

                switch ($name) {
                    case 'temperature':
                        return $this->conv_temperature($value, $ratio_from, $ratio_to);
                        break;
                    default:
                        return $this->conv_normal($value, $ratio_from, $ratio_to);
                        break;
                }
            }
        }

        /**
         * Get display string for the selected unit.
         * 
         * @param string $name name of the unit type
         * @param string $unit name of the unit
         * @return string unit display version
         */
        public function get_display_value($name, $unit) {
            $this->load_unit_type($name);

            if (isset($this->data[$name]['display'][$unit])) {
                return $this->data[$name]['display'][$unit];
            } else {
                return $unit;
            }
        }

        /**
         * Force loading of all available unit types.
         */
        public function load_all_unit_types() {
            foreach (array_keys($this->units) as $name) {
                $this->load_unit_type($name);
            }
        }
        
        private function load_unit_type($name) {
            if (!isset($this->data[$name])) {
                $unit = $this->units[$name];
                $path = $unit['source'] == '__internal__' ? dirname(__FILE__).'/unit.'.$name.'.php' : $unit['source'];

                if (file_exists($path)) {
                    include($path);
                    $this->data[$name] = $gduc_unit_loading;
                }
            }
        }

        private function conv_normal($value, $ratio_from, $ratio_to) {
            $value_base = $value * $ratio_from;
            return $value_base / $ratio_to;
        }

        private function conv_temperature($value, $ratio_from, $ratio_to) {
            $value_base = ($value - $ratio_from['offset']) / $ratio_from['ratio'];
            echo $value_base * $ratio_to['ratio'] + $ratio_to['offset'];
        }

        private function conv_currency($value, $from, $to) {
            if (!is_numeric($value)) {
                return null;
            }

            $value = trim($value);

            $from = strtoupper($from);
            $to = strtoupper($to);
            $crr = array($from, $to);
            sort($crr);
            $reverse = $crr[0] != $from;

            $key = 'currency_rate_'.$crr[0].'-'.$crr[1];
            $rate = get_site_transient($key);

            if ($rate === false || is_null($rate) || empty($rate)) {
                $rate = $this->currency_from_google($crr[0], $crr[1]);

                if (is_null($rate) || empty($rate)) {
                    return null;
                }

                set_site_transient($key, $rate, 86400);
            }

            if ($rate === false || is_null($rate) || empty($rate)) {
                return null;
            }

            $rate = $reverse ? 1 / $rate : $rate;
            return $rate * $value;
        }

        private function currency_from_google($from, $to) {
            $url = 'https://www.google.com/finance/converter?a=1&from='.$from.'&to='.$to;
            $json = file_get_contents($url);

            if (empty($json)) {
                return null;
            } else {
                if (strpos($json, '<span class=bld>') !== false) {
                    $get = explode("<span class=bld>", $json);
                    $get = explode("</span>", $get[1]);

                    return preg_replace("/[^0-9\.]/", null, $get[0]);
                } else {
                    return 0;
                }
            }
        }
    }

    global $gduc_units;
    $gduc_units = new gduc_Units();

    /**
     * Convert value from base for the units category to specified unit.
     *
     * @param string $name unit category name
     * @param mixed $value value to convert
     * @param string $to unit to convert to
     * @return mixed converted value
     */
    function gduc_unit_from_base($name, $value, $to) {
        global $gduc_units;
        return $gduc_units->from_base($name, $value, $to);
    }

    /**
     * Convert value to base for the units category from specified unit.
     *
     * @param string $name unit category name
     * @param mixed $value value to convert
     * @param string $from unit to convert from
     * @return mixed converted value
     */
    function gduc_unit_to_base($name, $value, $from) {
        global $gduc_units;
        return $gduc_units->to_base($name, $value, $from);
    }

    /**
     * Convert value from one unit to another for the specified unit category.
     *
     * @param string $name unit category name
     * @param mixed $value value to convert
     * @param string $from unit to convert from
     * @param string $to unit to convert to
     * @return mixed converted value
     */
    function gduc_unit_convert($name, $value, $from, $to) {
        global $gduc_units;
        return $gduc_units->convert($name, $value, $from, $to);
    }
}

if (!function_exists('gduc_register_unit_type')) {
    /**
     * Register new unit type.
     * 
     * @param string $name name of the unit
     * @param string $title label or title of the unit type
     * @param string $source path to the unit definition file
     */
    function gduc_register_unit_type($name, $title, $source) {
        global $gduc_units;
        $gduc_units->register_unit_type($name, $title, $source);
    }
}

if (!function_exists('gduc_unit_is_valid')) {
    /**
     * Check if unit is valid.
     *
     * @param string $name unit category name
     * @param string $unit unit name
     * @return bool
     */
    function gduc_unit_is_valid($name, $unit) {
        global $gduc_units;
        return $gduc_units->is_unit_valid($name, $unit);
    }
}

?>