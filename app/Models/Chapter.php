<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chapter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'class_id'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function video()
    {
        return $this->HasMany(Video::class, 'chapter_id','id');
    }
}
