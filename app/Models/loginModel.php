<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loginModel extends Model
{
    use HasFactory;
    protected $table = "tb_akun";
    protected $primaryKey = "id";
    public $incrementing = true;
    public $timestamps = true;
    public $fillable = [
        'id','nama','jenis_kelamin','tempat_lahir','tanggal_lahir','alamat','username','password','level','created_at','updated_at'
    ];
}
