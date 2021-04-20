<?php

namespace App\Services;
use Illuminate\Support\Facades\Validator;


class palindromCheck
{
    public function CheckPalindrom($word)
    {
        $text = array('word' => $word);

        $validator = Validator::make($text, [
            'word' => 'required|max:30|regex:/^[A-z]+$/'
        ]);

        if ($validator->fails()) {
            return 'Введите слово на латинском,проблема с кодировкой=(';
        }
        $word = strtolower($word);
        $word2 = preg_replace('/[^a-z]/', '',$word );
        $test = strrev($word2);

        if ($test  != $word){
            echo 'Not polindrom';
        }
        else echo 'Polindrom';
    }
}
