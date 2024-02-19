<?php
namespace App\Traits;

trait Numbers {
    public static function split($number)
    {
        $explode = str_split($number);

        return $explode;
    }
}
