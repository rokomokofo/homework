<?php
namespace App\Services;


class ipCheck
{

    public function IpNat($ip)
    {
        $ip = ip2long($ip);
        if (($ip >= 167772160 && $ip <= 184549375) || ($ip >= 2886729728 && $ip <= 2887778303) || ($ip >= 3232235520 && $ip <= 3232301055) || ($ip >= 2851995904 && $ip <= 2852060927)  || ($ip >= 2130706433 && $ip <= 2147483647) )
            return "Серый";

        return "Белый";
    }
}


