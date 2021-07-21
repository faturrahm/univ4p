<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makul extends Model
{
    protected $table = 'makul';
    protected $fillable = ['id_makul', 'kd_makul', 'nm_makul', 'sks'];
    protected $primarykey = 'id_makul';
    public $timestamps = false;

    public function nilai(){
        return $this->hasOne(Nilai::class, 'makul_id', 'id_makul');
    }

}
