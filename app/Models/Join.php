<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Join extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'class_id',
    ];

    public function course()
    {
        return $this->hasOne(Course::class, 'id', 'class_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
