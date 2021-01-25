<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tracking extends Model
{
    use HasFactory;

    protected $table = "trackings";
    protected $fillable = ['id_rw','jumlah_positif','jumlah_sembuh','jumlah_meninggal','tanggal'];
    public $timestamps = true;

    public function rw(){
        return $this->belongsTo(rw::class);
    }
}
