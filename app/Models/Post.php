<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [ 'id'];
    protected $with = ['category'];
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function scopeAnjay($query, array $filters){
        if(isset($filters['search'] )? $filters['search'] :false){
           return $query->where('title','like','%'.request('search').'%')
            ->orWhere('body','like','%'.request('search').'%');
        }
    }
}
