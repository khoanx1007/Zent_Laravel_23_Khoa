<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'slug',
        'user_created_id'
    ];
    protected $statusArr = [
        0 => 'Private',
        1 => 'Public'
    ];
    public function getStatusTextAttribute(){
        return $this->statusArr[$this->status];
    }
    public function setTitleAttribute($title){
        $this->attributes['title'] = $title;
        $this->attributes['slug'] = Str::slug($title);
    }
}
