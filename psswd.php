<?php
$charset = 'abcdefghijklmnopqrstuvwxyz';
    //$charset .= '0123456789';
    //$charset .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    //$charset .= '~`!@#$%^&*()-_\/\'";:,.+=<>? ';
    $charset_length = strlen($charset);
    function recurse($width, $position, $base_string)
    {
    global $charset, $charset_length;
    for ($i = 0; $i < $charset_length; ++$i) {
     if ($position  < $width - 1) {
      recurse($width, $position + 1, $base_string . $charset[$i]);
     }
     check($base_string . $charset[$i]);
    }
    }
    recurse(5, 0, '')

?>

