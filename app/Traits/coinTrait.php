<?php

namespace App\Traits;

use App\Traits;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait Coin
{
    public function coin()
    {
        $coin = bin2hex(random_bytes(15));
    }
}
