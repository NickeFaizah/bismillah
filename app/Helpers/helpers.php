<?php
if (! function_exists('moneyFormat')) {
    /**
     * moneyFormat
     *
     * @param mixed $str
     * @return void
     */
    function moneyFormat($str) {
        return 'Rp. ' . number_format(num: $str, decimals:'0', decimal_separator: '', thousands_separator:'.');
    }
}
 ?>
