<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory,Sluggable;
    // protected $fillable =['title','excerpt','body' ];
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];
    
    public function scopeFilter($query, array $filters)
    {
        if  ( isset ($filters['search']) ? $filters['search'] : false) {
            return $query->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('body', 'like', '%' . request('search') . '%' );
        }
    }
    
    
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    
    
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }    
    
    
    
}


// $fillable (yang boleh di isi manual sisanya otomatis)
// $guarded (yang tidak boleh di isi manual)