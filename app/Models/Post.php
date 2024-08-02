<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'title', 
        'slug', 
        'body', 
        'image', 
        'category',
        'ai_model',
        'version',
        'width',
        'height',
        'published_at',
        'created_at', 
        'updated_at'
    ];

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
        ];
    }

    public function getWidth(){
        return $this->width;
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getReadingTime() {
        $mins = round(str_word_count($this->body) / 20);
        return ($mins < 1) ? 1 : $mins;
    }

    public function getExcerpt() {
        return Str::limit(strip_tags($this->body), 150);
    }

    public function readablePublished() {
        return Carbon::parse($this->published_at)->format('F j, Y');
    }

    public function scopePublished($query) {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeFeatured($query) {
        $query->where('featured', true);
    }
}
