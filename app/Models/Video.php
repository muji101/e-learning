<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'url',
        'chapter_id',
        'class_id'
    ];

    public function chapter()
    {
        return $this->belongsTo(Chapter::class, 'chapter_id','id');
    }
    public function course()
    {
        return $this->belongsTo(Course::class, 'class_id', 'id');
    }
}
