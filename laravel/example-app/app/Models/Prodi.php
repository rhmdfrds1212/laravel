<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
protected $table = "prodi";

    protected $fillable = ['nama', 'singkatan','fakultas_id'];

    public function fakultas(){
        return $this->belongsTo(Fakultas::class, 'fakultas_id');
        //return $this->belongsTo(Nama_Model::class, 'foreign_key');
        // 1 prodi 1 fakultas belongsTo*()
        // 1 fakultas > prodi hasMany()
    }
}
