<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;


class Drink extends Model
{
    use HasFactory;
    use AsSource, Filterable, Attachable;

    protected $fillable = [
        'name',
        'making',
        'description'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function ingridients()
    {
        return $this->belongsToMany(Ingridient::class, 'drink_ingridients');
    }
}
