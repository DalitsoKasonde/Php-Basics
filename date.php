<?php

    // echo date('d'); //day
    // echo date('m'); //month
    // echo date('y'); //year 
    // echo date('Y'); //year in full

    // echo date('l'); //day of the week 

    // echo date('Y/m/d');  //date
    // echo date('m-d-Y');  //date


    // echo date('h'); // hours 
    // echo date('i'); //minutes 
    // echo date('s'); //seconds
    // echo date('a'); //AM or PM 

    // set time zone 

    // date_default_timezone_set('America/New_York'); 

    // echo date('h:i:sa'); 

    $timestamp =mktime(10, 14, 54, 12, 11, 1995);

    // echo $timestamp; 

    // echo date('m/d/Y h:i:sa', $timestamp);

    // string to time 

    $timestamp2 = strtotime('6:00pm May 3 2018');
    $timestamp3 = strtotime('yesterday');
    $timestamp4 = strtotime('next sunday');
    $timestamp5 = strtotime('+ 2 months');

    // echo $timestamp2;

    echo date('m/d/Y h:i:sa', $timestamp5);

?>