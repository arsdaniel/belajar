<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'slug',
        'name',
    ];
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blog_tags';
    

    public function posts()
    {
        return $this->belongsToMany('App\Models\Post', 'blog_posts_tags', 'tag_id', 'post_id');
    }
}
