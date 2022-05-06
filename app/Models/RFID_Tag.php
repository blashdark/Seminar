<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RFID_Tag extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'scan_at', 'book_id'];

    public $timestamps = false;
}
