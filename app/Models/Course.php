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
        'title',
        'description',
        'photo',
        'category_id',
        'user_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function chapter()
    {
        return $this->hasMany(Chapter::class, 'class_id', 'id');
    }
    public function video()
    {
        return $this->hasMany(Video::class, 'class_id', 'id');
    }
    public function review()
    {
        return $this->hasMany(Review::class, 'class_id', 'id');
    }
    
    
    public function join()
    {
        return $this->hasOne(Join::class, 'class_id', 'id');
    }

    // pengembangan
    public function joinPop()
    {
        return $this->hasMany(Join::class, 'class_id', 'id');
    }
}
