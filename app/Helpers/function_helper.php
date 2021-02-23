<?php 
function ReplaceKey($str)
{
    return str_replace('--', '-', str_replace(' ', '-', str_replace("|", '', str_replace("'\'", '', str_replace('+', '', str_replace('+', '', str_replace('=', '', str_replace('%', '', str_replace('^', '', str_replace('&', '', str_replace('$', '', str_replace('#', '', str_replace('@', '', str_replace('"', '', str_replace("'", '', str_replace(':', '', str_replace(';', '', str_replace('!', '', str_replace('`', '', str_replace('?', '', str_replace(')', '', str_replace('(', '', str_replace('..', '', str_replace('.', '', str_replace('/', '', str_replace('_', '', str_replace(',', '', str_replace('-', '', $str))))))))))))))))))))))))))));
}

function encrypt_decrypt_pwd($action, $string)
{
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'VIVAVOLT2020KEY';
    $secret_iv = 'VOLT2020IV';
    // hash
    $key = hash('sha256', $secret_key);
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if ($action == 'encrypt') {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if ($action == 'decrypt') {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}

function gst_calculator($subtotal=0, $gst=5){
	$gst_amount = $subtotal-($subtotal*(100/(100+$gst)));
	return round($gst_amount,2);
}
function gst_discount($org_cost, $N_price){ 
    return round(((($org_cost - $N_price) * 100) / $org_cost),2); 
}
