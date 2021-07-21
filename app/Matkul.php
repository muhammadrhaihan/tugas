<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table        ='matkul';
    protected $fillable     = ['kd_matkul', 'nama_matkul', 'sks'];
    public $timestamps      = false;
}