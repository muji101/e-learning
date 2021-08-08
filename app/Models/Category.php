<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'description',
        'slug'
    ];

    public function course()
    {
        return $this->hasMany(Course::class);
    }
}
