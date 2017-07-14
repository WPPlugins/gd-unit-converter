<?php

class gdUnitConverter {
    private $plugin_url;
    private $plugin_path;
    private $script;

    function __construct() {
        $this->script = $_SERVER['PHP_SELF'];
        $this->script = end(explode('/', $this->script));

        add_action('admin_enqueue_scripts', array(&$this, 'admin_enqueue'));
        add_action('wp_dashboard_setup', array(&$this, 'dashboard_setup'));
        add_action('wp_network_dashboard_setup', array(&$this, 'dashboard_setup'));
        add_action('wp_ajax_gduc_currency_convert', array(&$this, 'currency_convert'));

        $this->plugin_path_url();
    }

    private function plugin_path_url() {
        $this->plugin_url = plugins_url('/gd-unit-converter/');
        $this->plugin_path = dirname(dirname(__FILE__)).'/';

        define('GDUNITCONVERTER_URL', $this->plugin_url);
        define('GDUNITCONVERTER_PATH', $this->plugin_path);
    }

    public function currency_convert() {
        check_ajax_referer('gd-unit-converter');

        $from = $_POST['from'];
        $to = $_POST['to'];
        $val = $_POST['val'];

        $converted = gduc_unit_convert('currency', $val, $from, $to);
        if (is_null($converted)) {
            $converted = '0';
        }

        $res = array('result' => $converted);

        die(json_encode($res));
    }

    public function admin_enqueue() {
        if ($this->script == 'index.php') {
            $js_url = defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ? 'js/src/unit-converter.js' : 'js/unit-converter.js';

            wp_enqueue_style('gd-unit-converter', GDUNITCONVERTER_URL.'css/unit-converter.css');
            wp_enqueue_script('gd-unit-converter', GDUNITCONVERTER_URL.$js_url, array('jquery'));
        }
    }

    public function dashboard_setup() {
        wp_add_dashboard_widget('dashboard_gd_unit_converter', 'GD Unit Converter', array(&$this, 'dashboard_widget'));
    }

    public function dashboard_widget() {
        include(GDUNITCONVERTER_PATH.'code/dashboard.php');
    }
}

$gduc_core = new gdUnitConverter();

?>