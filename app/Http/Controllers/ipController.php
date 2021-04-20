<?php

namespace App\Http\Controllers;


use App\Services\ipCheck;



class ipController extends Controller
{
    public function ip()
    {
        $ipCheck = new ipCheck();

        $ip = $_SERVER['REMOTE_ADDR'];
        $ipNat = $ipCheck->IpNat($ip);


        return "Ваш ip: " . $ip . "</br> IP: " . $ipNat;
    }
}

