<?php
    
global $gduc_units;

$gduc_units->load_all_unit_types();
$categories = $gduc_units->get_units();

?>
<script type="text/javascript">
    gdUnitConv.tmp.data = <?php echo json_encode($gduc_units->data); ?>;
    gdUnitConv.tmp.nonce = '<?php echo wp_create_nonce("gd-unit-converter"); ?>';
</script>
<div id="gd-unit-converter">
    <table cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <select id="gduc-type">
                    <?php foreach ($categories as $unit => $name) { ?>
                    <option value="<?php echo $unit; ?>"><?php echo $name; ?></option>
                    <?php } ?>
                </select>
            </td>
            <td style="width: 58px;">&nbsp;</td>
            <td>
                <input id="gduc-value" type="text" value="1" />
            </td>
        </tr>
        <tr>
            <td>
                <select id="gduc-from"></select>
            </td>
            <td style="width: 58px;">
                <input id="gduc-convert" type="button" value="<?php _e("TO", "gd-unit-converter"); ?>" />
            </td>
            <td>
                <select id="gduc-to"></select>
            </td>
        </tr>
    </table>

    <input id="gduc-result" type="text" value="1" readonly />
</div>
<div id="gd-unit-copyright">
    Dev4Press &copy; 2008 - 2014 <a target="_blank" href="http://www.dev4press.com/">www.dev4press.com</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a target="_blank" href="http://www.dev4press.com/plugin/gd-unit-converter/">GD Unit Convertor</a>&nbsp;&nbsp;|&nbsp;&nbsp;version: <strong><?php echo GDUNITCONVERTER_VERSION; ?></strong>
</div>