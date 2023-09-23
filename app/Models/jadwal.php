<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;
    protected $fillable = ['uraian', 'tanggal_mulai', 'tanggal_berakhir', 'lampiran', 'location','status'];
    protected $table = 'jadwal';
    public $timestamps = false;
}
