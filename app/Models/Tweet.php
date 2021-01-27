<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\Likeable;

class Tweet extends Model
{
    use HasFactory;
    use Likeable;
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
