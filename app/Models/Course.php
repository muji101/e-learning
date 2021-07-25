<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    //jika nama field berbeda dengan nama model
    protected $table = 'classes';

    protected $fillable = [
        'name',
        'description',
        'photo',
        'category_id',
        'user_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function chapter()
    {
        return $this->hasMany(Chapter::class, 'class_id', 'id');
    }
}
