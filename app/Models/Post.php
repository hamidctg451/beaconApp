<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //use HasFactory;
    protected $table = 'costom_posts_table';

    protected $primaryKey = 'post_id';

    protected $guarded = ['status'];
    protected $fillable = ['title', 'content'];

    public $timestamps = false;

}
