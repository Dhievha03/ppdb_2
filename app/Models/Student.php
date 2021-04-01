<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'nis',
        'nama',
        'jns_kelamin',
        'temp_lahir',
        'tgl_lahir',
        'alamat',
        'asal_sekolah',
        'kelas',
        'jurusan'
    ];
}
