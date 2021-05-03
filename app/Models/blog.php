<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\blogCategory;

class blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'blog_category_id', 'tegs', 'featured_image', 'short_des', 'body', 'posted_by', 'like', 'dislike',
        'love', 'status',
    ];

    public function blogcategory(){
        return $this->belongsTo(blogCategory::class);
    }
}
