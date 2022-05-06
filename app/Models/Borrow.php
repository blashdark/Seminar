<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'begin_at', 'end_at', 'return_at', 'user_id'];

    public $timestamps = false;
}
