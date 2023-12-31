<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'user_id', 'has_password', 'password'];

    public function notes(){
        return $this->hasMany(Note::class);
    }
}
