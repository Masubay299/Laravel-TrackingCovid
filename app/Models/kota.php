<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kota extends Model
{
    use HasFactory;

    protected $table = "kotas";
    protected $fillable = ['id_provinsi','nama_kota'];
    public $timestamps = true;

    public function Provinsi(){
        return $this->belongsTo(provinsi::class);
    }

    public function Kecamatan(){
        return $this->hasMany(kecamatan::class);
    }
}
