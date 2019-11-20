<?php

function getCode($code)
{
    $newCode = $code;
    $day = date("d");
    $month = date ("m");
    $year = date ("Y");
    $newCodeCreated = "SP-".$day."/".$month."/".$year."-".$newCode;
    
    return $newCodeCreated;
}


//helper untuk menyimpan function, kalau diakses ke banyak file, bisa ditaruh di dalam helper. mengefisienkan penggunaan coding.
//helper mempermudah dalam menyimpan function yang diakses banyak.
//nama file helper WAJIB ada _helper.
?>