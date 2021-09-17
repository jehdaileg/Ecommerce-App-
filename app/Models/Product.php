<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    use Searchable;

    const SEARCHABLE_FIELDS = ['id', 'nom'];

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function toSearchableArray()
    {

        return $this->only(self::SEARCHABLE_FIELDS);


    }
}
