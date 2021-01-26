<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelurahan extends Model
{
    use HasFactory;

    protected $table = "kelurahans";
    protected $fillable = ['id_kecamatan','nama_kelurahan'];
    public $timestamps = true;

    public function Kecamatan(){
        return $this->belongsTo(kecamatan::class);
    }

    public function Rw(){
        return $this->hasMany(rw::class);
    }
}
