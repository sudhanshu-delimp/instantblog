<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tag extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function setNameAttribute_1($value)
    {
        $this->attributes['name'] = Str::slug($value, '-');
    }

    public function setNameAttribute($value) {
        if(!empty($this->attributes['id'])){
            $old = static::whereId($this->attributes['id'])->first();
            if($old->title != $this->attributes['title']){
                if (static::whereName($slug = Str::slug($value, '-'))->exists()) {
                    $slug = $this->incrementSlug($slug);
                }
            }
            else{
                $slug = $this->attributes['name'];
            }
        }
        else{
            if (static::whereName($slug = Str::slug($value, '-'))->exists()) {
                $slug = $this->incrementSlug($slug);
            }
        }
        $this->attributes['name'] = $slug;
    }

    public function incrementSlug($slug) {

        $original = $slug;
    
        $count = 2;
    
        while (static::whereName($slug)->exists()) {
    
            $slug = "{$original}-" . $count++;
        }
    
        return $slug;
    
    }
    
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}
