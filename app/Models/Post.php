<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [ 'title', 'exerpt', 'body' , 'category_id','slug','author'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
