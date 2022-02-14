<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VokalModel extends Model
{
    private static $hasil;
    private static $hitung;
    
    public static function setVokal($kataa)
    {
        $arr = str_split($kataa);
        $vokal = ['a', 'i' , 'u' , 'e', 'o'];
        $vokals = array_intersect($arr,$vokal);

        self::$hasil = array_unique($vokals);
        self::$hitung = count(self::$hasil);
    }

    public static function getHasil()
    {
        return self::$hasil;
    }

    public static function getHitung()
    {
        return self::$hitung;
    }
}
