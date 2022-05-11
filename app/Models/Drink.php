<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;


class Drink extends Model
{
    use HasFactory;
    use AsSource;
    use Filterable;
    use Attachable;

    protected $fillable = [
        'name',
        'making',
        'description',
        'drink_id',
        'ingridient_id'
    ];

    /**
     * @return belongsToMany
     */
    public function ingridients() :belongsToMany
    {
        return $this->belongsToMany(Ingridient::class, 'drink_ingridients');
    }

    /**
     * @return HasMany
     */
    public function comments() :HasMany
    {
        return $this->hasMany(Comment::class,'drink_id');
    }
}
