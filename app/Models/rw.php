<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rw extends Model
{
    use HasFactory;

    protected $table = "rws";
    protected $fillable = ['id_kelurahan','nama_rw'];
    public $timestamps = true;

    public function kelurahan(){
        return $this->belongsTo(kelurahan::class);
    }

    public function tracking(){
        return $this->hasMany(tracking::class);
    }
}
