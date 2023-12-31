<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "content",
        "deadline",
        "category_id"
    ];
    protected $dates = [
        'deadline',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function technologys() {
        return $this->belongsToMany(Technology::class);
    }
}
