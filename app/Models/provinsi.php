<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provinsi extends Model
{
    use HasFactory;

    protected $table = "provinsis";
    protected $fillable = ['nama_provinsi'];
    public $timestamps = true;

    public function Kota(){
        return $this->hasMany(kota::class);
    }

}
