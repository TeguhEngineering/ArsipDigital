<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filemasuk extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function suratmasuk() {
        return $this->belongsTo(Suratmasuk::class,'suratmasuk_id','id');
    }
}
