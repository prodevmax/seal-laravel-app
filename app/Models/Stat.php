<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['likes', 'views', 'article_id'];

}
