<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



if ( ! function_exists('toDatetime'))
{
    function toDatetime($timestamp) {
        return  date("d/m/Y", $timestamp);
    }
}