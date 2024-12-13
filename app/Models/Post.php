<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Post extends Model
{
    //
    use Sluggable;

    public function sluggable(): array{
        return ['slug' => ['source' => 'title']];
    }
    protected $fillable = ['title', 'slug', 'description', 'category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
