<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Category extends Model
{
    //
    use Sluggable;

    public function sluggable(): array{
        return ['slug' => ['source' => 'name']];
    }
    protected $fillable = ['name', 'slug'];

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
