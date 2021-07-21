<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'nilai';
    protected $fillable = ['makul_id', 'mahasiswa_id', 'nilai'];
    public $timestamps = false;

    public function makul(){
        return $this->belongsTo(Makul::class, 'makul_id', 'id_makul');
    }

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id', 'id');
    }

}
