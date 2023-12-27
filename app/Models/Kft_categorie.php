<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kft_categorie extends Model
{
    use HasFactory;
    protected $guard = 'admin';
    protected $table = 'Kft_categories';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'slug', 'description'];
}
