<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KrsModel extends Model
{
    use HasFactory;
    protected $table = "krs";
    protected $primaryKey = "id_krs";

    public function mahasiswa()
    {
        return $this->belongsTo('App\Models\MahasiswaModel');
    }
}
