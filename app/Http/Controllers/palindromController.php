<?php

namespace App\Http\Controllers;



use App\Services\palindromCheck;


class palindromController extends Controller
{
    public function palindrom($word)
    {
        $palindromCheck = new palindromCheck;

        return $palindromCheck->CheckPalindrom($word);
    }
}
