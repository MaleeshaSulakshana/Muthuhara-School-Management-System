<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

    $config['sandbox'] = TRUE;

    $config['business'] = 'sb-xhjef13770780@business.example.com';

    $config['paypal_lib_ipn_log_file'] = BASEPATH . 'logs/paypal_ipn.log';
    $config['paypal_lib_ipn_log'] = TRUE;

    $config['paypal_lib_button_path'] = 'buttons';

    $config['paypal_lib_currency_code'] = 'USD';

?>