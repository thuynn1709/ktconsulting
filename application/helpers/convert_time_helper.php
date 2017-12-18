<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



if ( ! function_exists('toDatetime'))
{
    function toDatetime($timestamp) {
        return  date("d/m/Y", $timestamp);
    }
}

if ( ! function_exists('diffTime'))
{
    function diffTime($timestamp) {
        $now = time();
        $units = 2;
        return timespan($timestamp, $now, $units);
    }
}

if ( ! function_exists('explainTime'))
{
    function explainTime($timestamp) {
        $datestring = 'Thời gian : %d/%m/%Y - %h:%i %a';
        $time = time();
        return mdate($datestring, $time);
    }
}

if ( ! function_exists('toNameofMonth'))
{
    function toNameofMonth($timestamp) {
        $monthNum = date('m', $timestamp);
        return date('F', mktime(0, 0, 0, $monthNum, 10));
    }
}



