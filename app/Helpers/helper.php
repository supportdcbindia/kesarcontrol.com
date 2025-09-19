<?php  

function slugText( $text ){
    $text = str_replace(' ','-',strtolower($text));
    $text = str_replace('&','and',$text);
    $pattern = '/[!@#$%^*()+{}\[\]:;<>,?~\\|=\/\'"]/';
    $result = preg_replace($pattern, '', $text);
    return $result;
} 

?>