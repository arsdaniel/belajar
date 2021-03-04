<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// use Spatie\MediaLibrary\HasMedia;
// use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model 
{
    use HasFactory,  SoftDeletes;

    protected $fillable = [
        'post_type',
        'code',
        'title',
        'slug',
        'excerpt',
        'body',
        'status',
        'publish_date',
        'featured_image',
        'featured_image_caption',
        'user_id',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blog_posts';
    
   

    public const DRAFT = 0;
    public const ACTIVE = 1;
    public const INACTIVE = 2;
    
    public const POST = 'post';
    public const PAGE = 'page';

    public const STATUSES = [
        self::DRAFT => 'draft',
        self::ACTIVE => 'active',
        self::INACTIVE => 'inactive',
    ];

    public $casts = [
        'publish_date' => 'datetime:d, M Y H:i',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'blog_categories_posts', 'post_id', 'category_id'); //phpcs:ignore
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'blog_posts_tags', 'post_id', 'tag_id');
    }

    public function getUpdatedAtFormattedAttribute()
    {
        return Carbon::parse($this->attributes['updated_at'])->format('d, M Y H:i:s');
    }
}
