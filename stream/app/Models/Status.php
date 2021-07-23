<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        // We can specify which columns of the relation we want to include
        // Notice that the id column always must be included, otherwise, the
        // relationed table will return null
        return $this->belongsTo(User::class)
            ->select(['id', 'name']);
    }
}
