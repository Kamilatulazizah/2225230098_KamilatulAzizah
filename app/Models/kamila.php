<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamila extends Model
{
    use HasFactory;
    protected $table= "kamila";
    protected $fillable=['Nama_depan', 'Nama_belakang', 'Jenis_kelamin', 'Agama', 'Alamat'];
    
    
}
