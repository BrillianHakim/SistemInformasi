<?php

// app/Models/Dokter.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    public function pasien()
    {
        return $this->hasMany(Pasien::class);
    }
}

