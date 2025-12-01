<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = ['title', 'slug', 'body', 'published_at','rating_id'];
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];
//App\Models\Post::orderBy('published_at', 'desc')->first();
    public function rating(){
        return $this->hasOne(Rating::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
