<?php

namespace App;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['text', 'user_id'];
    protected $hidden = ['active'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
