<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Comment extends Model
{
    use HasFactory;
    use AsSource;
    use Filterable;
    use Attachable;

    /**
     * @return HasOne
     */
    public function drink() :HasOne
    {
        return $this->hasOne(Drink::class, 'id');
    }


    public function user() :belongsTo
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
