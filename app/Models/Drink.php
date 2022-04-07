<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Drink extends Model
{
    use HasFactory;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function ingridients()
    {
        return $this->belongsToMany(Ingridient::class, 'drink_ingridients');
    }
}
