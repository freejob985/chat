<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ban extends Model
{
    protected $table = 'ban';
    protected $fillable = [
        "id",
        "user",
        "ban",
    ];


    public function users(){
        return $this->belongsToMany(User::class, "ban");
    }
}
