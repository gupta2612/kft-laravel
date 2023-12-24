<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kft_allpost extends Model
{
    use HasFactory;
    protected $guard = 'admin';
    protected $table = 'Kft_allposts';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'title', 'content', 'tags', 'slug', 'image', 'categories', 'date', 'status'];
}
