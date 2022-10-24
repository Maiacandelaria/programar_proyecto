<?php

namespace Laravel\Fortify;

use Illuminate\Support\Str;

class RecoveryCode
{
    public static function generate()
    {
        return Str::random(10).'-'.Str::random(10);
    }
}
