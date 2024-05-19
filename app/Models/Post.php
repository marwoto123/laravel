<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable =['title','excerpt','body' ];
    protected $guarded = ['id'];
    protected $with = ['category','author'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
// $fillable (yang boleh di isi manual sisanya otomatis)
// $guarded (yang tidak boleh di isi manual)