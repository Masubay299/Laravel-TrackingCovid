<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kecamatan extends Model
{
    use HasFactory;

    protected $table = "kecamatans";
    protected $fillable = ['id_kota','kode_kecamatan','nama_kecamatan'];
    public $timestamps = true;

    public function Kota(){
        return $this->belongsTo(kota::class);
    }

    public function Kelurahan(){
        return $this->hasMany(kelurahan::class);
    }
}
